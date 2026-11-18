<?php
/** Integration tests — topic mode through sala_handle (uses helpers from sala.test.php). */

function topic_create(array $extra = [], string $lesson = 'cosmos_001'): array {
    return api(['action' => 'create', 'lesson_id' => $lesson, 'role' => 'present', 'pace' => 'relaxed'] + $extra);
}

test('topic api: create 10/15/20 → q_total matches, mode and topic in the view', function () {
    foreach ([10, 15, 20] as $n) {
        [$status, $c] = topic_create(['mode' => 'topic', 'count' => $n]);
        assert_eq(200, $status, json_encode($c));
        $v = api_ok(['action' => 'state', 'code' => $c['code'], 'host_token' => $c['host_token']])['view'];
        assert_eq($n, $v['q_total']);
        assert_eq('topic', $v['mode']);
        assert_eq('cosmos', $v['topic']['slug']);
        assert_eq('Cosmos', $v['topic']['name']);
    }
});

test('topic api: bad count → 400', function () {
    foreach ([null, 0, 5, 12, 25, 'x'] as $bad) {
        $extra = ['mode' => 'topic'] + ($bad === null ? [] : ['count' => $bad]);
        assert_eq(400, topic_create($extra)[0], 'count ' . var_export($bad, true));
    }
});

test('topic api: unknown mode → 400', function () {
    assert_eq(400, topic_create(['mode' => 'all'])[0]);
});

test('topic api: topic with fewer than 2 quiz lessons → 400', function () {
    $lone = null;
    foreach (get_lessons() as $l) {
        if (count(get_topic_quiz_pool($l['topic_slug'])) < 2) { $lone = $l['id']; break; }
    }
    if ($lone === null) return; // every topic has 2+ quizzes today — nothing to assert
    [$status, $b] = topic_create(['mode' => 'topic', 'count' => 10], $lone);
    assert_eq(400, $status);
    assert_eq('Este tema só tem um quiz.', $b['error']);
});

test('topic api: plays a whole game; source lesson only on reveal; no repeats', function () {
    $c = api_ok(['action' => 'create', 'lesson_id' => 'cosmos_002', 'role' => 'play', 'pace' => 'relaxed', 'name' => 'Mãe', 'mode' => 'topic', 'count' => 10]);
    $j = api_ok(['action' => 'join', 'code' => $c['code'], 'name' => 'Rui']);
    $v = api_ok(['action' => 'start', 'code' => $c['code'], 'host_token' => $c['host_token']])['view'];
    $room = json_decode(file_get_contents(room_path($c['code'])), true);
    assert_eq(10, count($room['questions']));
    $keys = array_map(fn($r) => $r['l'] . ':' . $r['i'], $room['questions']);
    assert_eq(10, count(array_unique($keys)), 'no repeats');
    $per = array_count_values(array_column($room['questions'], 'l'));
    assert_true(max($per) - min($per) <= 1 && count($per) === 3, 'spread across the 3 lessons: ' . json_encode($per));

    for ($i = 0; $i < 10; $i++) {
        assert_true(!isset($v['question']['lesson']), "no lesson label while q$i is open");
        $ref = $room['questions'][$i];
        $correct = get_quiz(get_lesson($ref['l']))['questions'][$ref['i']]['correct'];
        api_ok(['action' => 'answer', 'code' => $c['code'], 'token' => $j['token'], 'choice' => $correct]);
        $v = api_ok(['action' => 'answer', 'code' => $c['code'], 'token' => $c['token'], 'host_token' => $c['host_token'], 'choice' => ($correct + 1) % 4])['view'];
        assert_eq('reveal', $v['phase']);
        $lesson = get_lesson($ref['l']);
        assert_eq($ref['l'], $v['question']['lesson']['id']);
        assert_eq($lesson['class_number'], $v['question']['lesson']['class_number']);
        assert_eq($lesson['title'], $v['question']['lesson']['title']);
        $v = api_ok(['action' => 'next', 'code' => $c['code'], 'host_token' => $c['host_token']])['view'];
    }
    assert_eq('podium', $v['phase']);
    assert_eq(10000, $v['players'][0]['score']);
});

test('topic api: public info carries the topic', function () {
    $c = api_ok(['action' => 'create', 'lesson_id' => 'cosmos_001', 'role' => 'present', 'pace' => 'relaxed', 'mode' => 'topic', 'count' => 10]);
    $b = api_ok(['action' => 'state', 'code' => $c['code']]);
    assert_eq('cosmos', $b['public']['topic']['slug']);
});

test('topic api: restart redraws with the same size and valid refs', function () {
    $c = api_ok(['action' => 'create', 'lesson_id' => 'cosmos_001', 'role' => 'present', 'pace' => 'relaxed', 'mode' => 'topic', 'count' => 15]);
    $j = api_ok(['action' => 'join', 'code' => $c['code'], 'name' => 'Rui']);
    $sets = [];
    for ($game = 0; $game < 4; $game++) {
        api_ok(['action' => 'start', 'code' => $c['code'], 'host_token' => $c['host_token']]);
        for ($i = 0; $i < 15; $i++) {
            api_ok(['action' => 'answer', 'code' => $c['code'], 'token' => $j['token'], 'choice' => 0]);
            api_ok(['action' => 'next', 'code' => $c['code'], 'host_token' => $c['host_token']]);
        }
        $v = api_ok(['action' => 'restart', 'code' => $c['code'], 'host_token' => $c['host_token']])['view'];
        assert_eq('lobby', $v['phase']);
        assert_eq(15, $v['q_total']);
        $room = json_decode(file_get_contents(room_path($c['code'])), true);
        assert_eq(15, count($room['questions']));
        foreach ($room['questions'] as $r) {
            assert_true(get_quiz(get_lesson($r['l'])) !== null && isset(get_quiz(get_lesson($r['l']))['questions'][$r['i']]), 'valid ref');
        }
        $sets[json_encode($room['questions'])] = true;
    }
    assert_true(count($sets) > 1, 'at least one redraw differs');
});

test('topic api: lesson-mode restart keeps the lesson questions', function () {
    $c = api_ok(['action' => 'create', 'lesson_id' => 'cosmos_001', 'role' => 'present', 'pace' => 'relaxed']);
    $before = json_decode(file_get_contents(room_path($c['code'])), true)['questions'];
    assert_eq('lesson', json_decode(file_get_contents(room_path($c['code'])), true)['mode']);
    $j = api_ok(['action' => 'join', 'code' => $c['code'], 'name' => 'Rui']);
    api_ok(['action' => 'start', 'code' => $c['code'], 'host_token' => $c['host_token']]);
    foreach ($before as $r) {
        api_ok(['action' => 'answer', 'code' => $c['code'], 'token' => $j['token'], 'choice' => 0]);
        api_ok(['action' => 'next', 'code' => $c['code'], 'host_token' => $c['host_token']]);
    }
    api_ok(['action' => 'restart', 'code' => $c['code'], 'host_token' => $c['host_token']]);
    assert_eq($before, json_decode(file_get_contents(room_path($c['code'])), true)['questions']);
});

test('topic api: legacy room file without questions still plays as a lesson game', function () {
    $c = api_ok(['action' => 'create', 'lesson_id' => 'cosmos_001', 'role' => 'present', 'pace' => 'relaxed']);
    $path = room_path($c['code']);
    $room = json_decode(file_get_contents($path), true);
    unset($room['questions'], $room['mode'], $room['topic_slug'], $room['q_count']);
    file_put_contents($path, json_encode($room));

    $j = api_ok(['action' => 'join', 'code' => $c['code'], 'name' => 'Rui']);
    $v = api_ok(['action' => 'start', 'code' => $c['code'], 'host_token' => $c['host_token']])['view'];
    assert_eq('lesson', $v['mode']);
    assert_eq($room['q_total'], $v['q_total']);
    $quiz = get_quiz(get_lesson('cosmos_001'));
    api_ok(['action' => 'answer', 'code' => $c['code'], 'token' => $j['token'], 'choice' => $quiz['questions'][0]['correct']]);
    $v = api_ok(['action' => 'state', 'code' => $c['code'], 'host_token' => $c['host_token']])['view'];
    assert_eq('reveal', $v['phase']);
    assert_eq($quiz['questions'][0]['explanation'], $v['question']['explanation']);
});

test('topic store: 30 concurrent answers in a topic room are all persisted', function () {
    $c = api_ok(['action' => 'create', 'lesson_id' => 'cosmos_001', 'role' => 'present', 'pace' => 'relaxed', 'mode' => 'topic', 'count' => 10], microtime(true));
    $tokens = [];
    for ($i = 0; $i < 30; $i++) {
        $tokens[] = api_ok(['action' => 'join', 'code' => $c['code'], 'name' => "P$i"], microtime(true))['token'];
    }
    api_ok(['action' => 'start', 'code' => $c['code'], 'host_token' => $c['host_token']], microtime(true));

    $procs = [];
    foreach ($tokens as $t) {
        $cmd = [PHP_BINARY, __DIR__ . '/helpers/answer_worker.php', XP_ROOM_DIR, $c['code'], $t];
        $procs[] = proc_open($cmd, [1 => ['pipe', 'w'], 2 => ['pipe', 'w']], $pipes);
        $GLOBALS['xp_pipes'][] = $pipes;
    }
    $statuses = [];
    foreach ($procs as $i => $p) {
        $statuses[] = trim(stream_get_contents($GLOBALS['xp_pipes'][$i][1]));
        proc_close($p);
    }
    $GLOBALS['xp_pipes'] = [];
    assert_eq(array_fill(0, 30, '200'), $statuses, 'every worker got 200');

    $room = json_decode(file_get_contents(room_path($c['code'])), true);
    assert_eq(30, count($room['answers']['q0']), 'all answers stored');
    assert_eq('reveal', $room['phase']);
});
