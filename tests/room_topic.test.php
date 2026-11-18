<?php
/** Unit tests — topic mode of includes/room.php (draw + engine on resolved questions). */

function draw_pool(): array { return ['a' => 10, 'b' => 10, 'c' => 10]; }

test('draw: returns n refs, capped at the pool total', function () {
    assert_eq(10, count(room_draw(draw_pool(), 10)));
    assert_eq(20, count(room_draw(draw_pool(), 20)));
    assert_eq(30, count(room_draw(draw_pool(), 99)));
    assert_eq(7,  count(room_draw(['a' => 3, 'b' => 4], 20)));
});

test('draw: never repeats a question, refs are valid', function () {
    for ($n = 0; $n < 200; $n++) {
        $refs = room_draw(draw_pool(), 20);
        $keys = array_map(fn($r) => $r['l'] . ':' . $r['i'], $refs);
        assert_eq(count($keys), count(array_unique($keys)), 'duplicate ref');
        foreach ($refs as $r) {
            assert_true(isset(draw_pool()[$r['l']]), 'known lesson');
            assert_true($r['i'] >= 0 && $r['i'] < 10, 'index in range');
        }
    }
});

test('draw: per-lesson counts differ by at most 1 (200 draws)', function () {
    foreach ([10, 15, 20] as $n) {
        for ($k = 0; $k < 200; $k++) {
            $counts = array_count_values(array_column(room_draw(draw_pool(), $n), 'l'));
            $counts += ['a' => 0, 'b' => 0, 'c' => 0];
            assert_true(max($counts) - min($counts) <= 1, "spread for n=$n: " . json_encode($counts));
        }
    }
});

test('draw: a small lesson runs out, the others fill in', function () {
    $refs = room_draw(['a' => 2, 'b' => 10, 'c' => 10], 15);
    $counts = array_count_values(array_column($refs, 'l'));
    assert_eq(2, $counts['a']);
    assert_eq(15, count($refs));
    assert_true(abs($counts['b'] - $counts['c']) <= 1, 'b and c balanced');
});

test('draw: is random (not always the same set or order)', function () {
    $seen = [];
    for ($k = 0; $k < 30; $k++) $seen[json_encode(room_draw(draw_pool(), 10))] = true;
    assert_true(count($seen) > 5, 'draws vary');
});

test('room_new stores refs, mode, topic and requested count', function () {
    [$room] = room_new('ABCD', 'x', 'present', 'relaxed', fixture_refs(10), null, 1000.0, 'topic', 'cosmos', 10);
    assert_eq(10, $room['q_total']);
    assert_eq('topic', $room['mode']);
    assert_eq('cosmos', $room['topic_slug']);
    assert_eq(10, $room['q_count']);
    assert_eq(fixture_refs(10), $room['questions']);
});

test('room_new rejects an empty question list', function () {
    assert_room_error(fn() => room_new('ABCD', 'x', 'present', 'relaxed', [], null, 1000.0), 400);
});

test('lesson mode view has no source lesson and mode is lesson', function () {
    [$room] = fixture_room('relaxed', 'present', ['Ana']);
    $qs = fixture_questions();
    $room = room_close(room_start($room, 1000), 1001);
    $view = room_view($room, $qs, ['is_host' => true, 'pid' => null], 1002);
    assert_eq('lesson', $view['mode']);
    assert_true(!isset($view['question']['lesson']), 'no lesson label');
});

function topic_fixture(): array {
    [$room] = room_new('ABCD', 'x', 'present', 'relaxed', fixture_refs(3), null, 1000.0, 'topic', 'cosmos', 10);
    [$room, $pid] = room_add_player($room, 'Ana', 1000.0);
    $qs = fixture_questions(3);
    foreach ($qs as $i => $q) $qs[$i]['_lesson'] = ['id' => 'x', 'class_number' => 2, 'title' => 'A Nossa Morada Cósmica'];
    return [$room, $pid, $qs];
}

test('topic view carries the source lesson only at reveal', function () {
    [$room, $pid, $qs] = topic_fixture();
    $room = room_start($room, 1000);
    $view = room_view($room, $qs, ['is_host' => false, 'pid' => $pid], 1001);
    assert_eq('topic', $view['mode']);
    assert_true(!isset($view['question']['lesson']), 'hidden while open');
    assert_true(!str_contains(json_encode($view), 'Morada'), 'title not leaked while open');
    $room = room_close($room, 1002);
    $view = room_view($room, $qs, ['is_host' => false, 'pid' => $pid], 1003);
    assert_eq(['id' => 'x', 'class_number' => 2, 'title' => 'A Nossa Morada Cósmica'], $view['question']['lesson']);
});

test('topic view exposes the topic slug', function () {
    [$room, $pid, $qs] = topic_fixture();
    $view = room_view($room, $qs, ['is_host' => false, 'pid' => $pid], 1001);
    assert_eq('cosmos', $view['topic_slug']);
});

test('restart with a new list resets q_total and refs', function () {
    [$room] = topic_fixture();
    $room['q_total'] = 1;
    $room = room_close(room_start($room, 1000), 1001);
    $room = room_restart(room_next($room, 1002), 1003, fixture_refs(5, 'y'));
    assert_eq('lobby', $room['phase']);
    assert_eq(5, $room['q_total']);
    assert_eq(fixture_refs(5, 'y'), $room['questions']);
});

test('restart without a new list keeps the questions', function () {
    [$room] = fixture_room('relaxed');
    $room['q_total'] = 1;
    $room = room_close(room_start($room, 1000), 1001);
    $room = room_restart(room_next($room, 1002), 1003);
    assert_eq(1, $room['q_total']);
    assert_eq(fixture_refs(3), $room['questions']);
});
