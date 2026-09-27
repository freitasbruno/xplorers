<?php
/** Integration tests — includes/room_api.php + room_store.php against a temp rooms dir. */

require_once __DIR__ . '/../includes/room_api.php';

/** Real lesson with a quiz, taken from data/lessons.json. */
function fixture_lesson_id(): string {
    foreach (get_lessons() as $l) if (get_quiz($l)) return $l['id'];
    throw new AssertFail('no lesson with quiz');
}

function api(array $req, float $now = 1000.0): array {
    return sala_handle($req, $now);
}

function api_ok(array $req, float $now = 1000.0): array {
    [$status, $body] = sala_handle($req, $now);
    assert_eq(200, $status, 'status for ' . $req['action'] . ': ' . json_encode($body, JSON_UNESCAPED_UNICODE));
    return $body;
}

test('api: full game create → join → start → answer → next → podium', function () {
    $lesson = fixture_lesson_id();
    $c = api_ok(['action' => 'create', 'lesson_id' => $lesson, 'role' => 'play', 'pace' => 'relaxed', 'name' => 'Mãe']);
    assert_eq(4, strlen($c['code']));
    assert_true(is_string($c['token']) && is_string($c['host_token']), 'tokens returned');

    $j = api_ok(['action' => 'join', 'code' => $c['code'], 'name' => 'Rui']);
    assert_eq('lobby', $j['view']['phase']);
    assert_eq(2, count($j['view']['players']));

    $v = api_ok(['action' => 'start', 'code' => $c['code'], 'host_token' => $c['host_token']])['view'];
    $total = $v['q_total'];
    $quiz  = get_quiz(get_lesson($lesson));

    for ($i = 0; $i < $total; $i++) {
        $correct = $quiz['questions'][$i]['correct'];
        api_ok(['action' => 'answer', 'code' => $c['code'], 'token' => $j['token'], 'choice' => $correct]);
        $v = api_ok(['action' => 'answer', 'code' => $c['code'], 'token' => $c['token'], 'host_token' => $c['host_token'], 'choice' => ($correct + 1) % 4])['view'];
        assert_eq('reveal', $v['phase'], "reveal after all answered q$i");
        $v = api_ok(['action' => 'next', 'code' => $c['code'], 'host_token' => $c['host_token']])['view'];
    }
    assert_eq('podium', $v['phase']);
    assert_eq('Rui', $v['players'][0]['name']);
    assert_eq($total * 1000, $v['players'][0]['score']);
    assert_eq($total, $v['players'][0]['correct']);
});

test('api: view carries lesson info', function () {
    $c = api_ok(['action' => 'create', 'lesson_id' => fixture_lesson_id(), 'role' => 'present', 'pace' => 'timed']);
    $v = api_ok(['action' => 'state', 'code' => $c['code'], 'host_token' => $c['host_token']])['view'];
    assert_eq(fixture_lesson_id(), $v['lesson']['id']);
    assert_true($v['is_host']);
    assert_eq(null, $v['me']);
});

test('api: create rejects unknown lesson, bad role, bad pace', function () {
    assert_eq(404, api(['action' => 'create', 'lesson_id' => 'nope', 'role' => 'play', 'pace' => 'timed', 'name' => 'A'])[0]);
    assert_eq(400, api(['action' => 'create', 'lesson_id' => fixture_lesson_id(), 'role' => 'x', 'pace' => 'timed'])[0]);
    assert_eq(400, api(['action' => 'create', 'lesson_id' => fixture_lesson_id(), 'role' => 'present', 'pace' => 'x'])[0]);
});

test('api: host actions need the host token (403)', function () {
    $c = api_ok(['action' => 'create', 'lesson_id' => fixture_lesson_id(), 'role' => 'present', 'pace' => 'timed']);
    $j = api_ok(['action' => 'join', 'code' => $c['code'], 'name' => 'Rui']);
    foreach (['start', 'close', 'next', 'restart'] as $a) {
        assert_eq(403, api(['action' => $a, 'code' => $c['code']])[0], "$a without token");
        assert_eq(403, api(['action' => $a, 'code' => $c['code'], 'host_token' => 'wrong'])[0], "$a wrong token");
        assert_eq(403, api(['action' => $a, 'code' => $c['code'], 'host_token' => $j['token']])[0], "$a with player token");
    }
});

test('api: answer needs a player token (403)', function () {
    $c = api_ok(['action' => 'create', 'lesson_id' => fixture_lesson_id(), 'role' => 'present', 'pace' => 'timed']);
    api_ok(['action' => 'join', 'code' => $c['code'], 'name' => 'Rui']);
    api_ok(['action' => 'start', 'code' => $c['code'], 'host_token' => $c['host_token']]);
    assert_eq(403, api(['action' => 'answer', 'code' => $c['code'], 'token' => 'bad', 'choice' => 0])[0]);
});

test('api: unknown or malformed code is 404', function () {
    assert_eq(404, api(['action' => 'state', 'code' => 'ZZZZ'])[0]);
    assert_eq(404, api(['action' => 'state', 'code' => '../x'])[0]);
    assert_eq(404, api(['action' => 'join', 'code' => 'O0O0', 'name' => 'A'])[0]);
});

test('api: room idle >2h is 410', function () {
    $c = api_ok(['action' => 'create', 'lesson_id' => fixture_lesson_id(), 'role' => 'present', 'pace' => 'timed']);
    assert_eq(410, api(['action' => 'state', 'code' => $c['code'], 'host_token' => $c['host_token']], 1000 + ROOM_IDLE_TTL + 1)[0]);
});

test('api: unknown caller gets public info only', function () {
    $c = api_ok(['action' => 'create', 'lesson_id' => fixture_lesson_id(), 'role' => 'present', 'pace' => 'timed']);
    $b = api_ok(['action' => 'state', 'code' => $c['code']]);
    assert_true(isset($b['public']), 'public key');
    assert_true(!isset($b['view']), 'no view');
    assert_eq(0, $b['public']['player_count']);
    assert_eq(false, str_contains(json_encode($b), $c['host_token']), 'no host token leak');
});

test('api: unchanged response when version matches', function () {
    $c = api_ok(['action' => 'create', 'lesson_id' => fixture_lesson_id(), 'role' => 'present', 'pace' => 'timed']);
    $v = api_ok(['action' => 'state', 'code' => $c['code'], 'host_token' => $c['host_token']])['view'];
    $b = api_ok(['action' => 'state', 'code' => $c['code'], 'host_token' => $c['host_token'], 'v' => $v['version']], 1001);
    assert_true($b['unchanged'] ?? false, 'unchanged');
    assert_true($b['host_online'], 'host online');
    api_ok(['action' => 'join', 'code' => $c['code'], 'name' => 'Rui'], 1002);
    $b = api_ok(['action' => 'state', 'code' => $c['code'], 'host_token' => $c['host_token'], 'v' => $v['version']], 1003);
    assert_true(isset($b['view']), 'full view after change');
});

test('api: state closes an expired timed question', function () {
    $c = api_ok(['action' => 'create', 'lesson_id' => fixture_lesson_id(), 'role' => 'present', 'pace' => 'timed']);
    api_ok(['action' => 'join', 'code' => $c['code'], 'name' => 'Rui']);
    api_ok(['action' => 'start', 'code' => $c['code'], 'host_token' => $c['host_token']]);
    $v = api_ok(['action' => 'state', 'code' => $c['code'], 'host_token' => $c['host_token']], 1000 + ROOM_TIME_LIMIT + ROOM_GRACE + 0.1)['view'];
    assert_eq('reveal', $v['phase']);
});

test('store: sweep deletes only rooms idle >2h', function () {
    $old = api_ok(['action' => 'create', 'lesson_id' => fixture_lesson_id(), 'role' => 'present', 'pace' => 'timed']);
    $new = api_ok(['action' => 'create', 'lesson_id' => fixture_lesson_id(), 'role' => 'present', 'pace' => 'timed']);
    touch(room_path($old['code']), time() - ROOM_IDLE_TTL - 10);
    assert_eq(1, room_sweep(time()));
    assert_true(!file_exists(room_path($old['code'])), 'old removed');
    assert_true(file_exists(room_path($new['code'])), 'new kept');
});

test('store: 200-room cap enforced (429)', function () {
    for ($i = 0; $i < ROOM_MAX_ROOMS; $i++) {
        file_put_contents(XP_ROOM_DIR . '/' . sprintf('F%03d', $i) . '.json', '{}');
    }
    $r = api(['action' => 'create', 'lesson_id' => fixture_lesson_id(), 'role' => 'present', 'pace' => 'timed'], time());
    assert_eq(429, $r[0]);
});

test('store: new code never collides with an existing room', function () {
    $codes = [];
    for ($i = 0; $i < 60; $i++) {
        $codes[] = api_ok(['action' => 'create', 'lesson_id' => fixture_lesson_id(), 'role' => 'present', 'pace' => 'timed'])['code'];
    }
    assert_eq(count($codes), count(array_unique($codes)));
});

test('store: 30 concurrent answers are all persisted', function () {
    $c = api_ok(['action' => 'create', 'lesson_id' => fixture_lesson_id(), 'role' => 'present', 'pace' => 'relaxed'], microtime(true));
    $tokens = [];
    for ($i = 0; $i < 30; $i++) {
        $tokens[] = api_ok(['action' => 'join', 'code' => $c['code'], 'name' => "P$i"], microtime(true))['token'];
    }
    api_ok(['action' => 'start', 'code' => $c['code'], 'host_token' => $c['host_token']], microtime(true));

    $php   = PHP_BINARY;
    $procs = [];
    foreach ($tokens as $t) {
        $cmd = [$php, __DIR__ . '/helpers/answer_worker.php', XP_ROOM_DIR, $c['code'], $t];
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
