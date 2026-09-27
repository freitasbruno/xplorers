<?php
/** Unit tests — includes/room.php (pure engine). */

require_once __DIR__ . '/../includes/room_store.php';

function fixture_quiz(int $n = 3): array {
    $qs = [];
    for ($i = 0; $i < $n; $i++) {
        $qs[] = ['question' => "Q$i", 'options' => ['a', 'b', 'c', 'd'], 'correct' => 1, 'explanation' => "E$i"];
    }
    return ['questions' => $qs];
}

/** Room in lobby with the given players. Returns [room, ids by name]. */
function fixture_room(string $pace = 'timed', string $role = 'present', array $names = ['Ana', 'Rui'], float $now = 1000.0): array {
    [$room] = room_new('ABCD', 'x', $role, $pace, 3, $role === 'play' ? 'Host' : null, $now);
    $ids = [];
    foreach ($names as $n) { [$room, $pid] = room_add_player($room, $n, $now); $ids[$n] = $pid; }
    return [$room, $ids];
}

// ---- names & joining ----

test('nickname dedupe is case-insensitive', function () {
    [$room, $ids] = fixture_room('timed', 'present', ['Ana', 'ana', 'ANA']);
    $names = array_column($room['players'], 'name');
    assert_eq(['Ana', 'ana 2', 'ANA 3'], $names);
});

test('nickname trimmed to 16 chars, suffix still fits', function () {
    [$room] = fixture_room('timed', 'present', []);
    [$room] = room_add_player($room, 'Abcdefghijklmnopqrstu', 1000);
    [$room, $pid] = room_add_player($room, 'Abcdefghijklmnopqrstu', 1000);
    assert_eq('Abcdefghijklmn 2', $room['players'][$pid]['name']);
    assert_eq(16, mb_strlen($room['players'][$pid]['name']));
});

test('nickname strips control chars and collapses spaces', function () {
    assert_eq('Ana Rita', room_clean_name("  Ana\x00\t\n  Rita\x07 "));
});

test('empty nickname rejected', function () {
    [$room] = fixture_room();
    assert_room_error(fn() => room_add_player($room, " \x01 ", 1000), 400);
});

test('every player gets an avatar, distinct while available', function () {
    [$room] = fixture_room('timed', 'present', ['A', 'B', 'C', 'D', 'E']);
    $avatars = array_column($room['players'], 'avatar');
    assert_eq(5, count(array_unique($avatars)));
    foreach ($avatars as $a) assert_true(in_array($a, ROOM_AVATARS, true), 'avatar from list');
});

test('player cap is 40', function () {
    [$room] = fixture_room('timed', 'present', []);
    for ($i = 0; $i < ROOM_MAX_PLAYERS; $i++) [$room] = room_add_player($room, "P$i", 1000);
    assert_room_error(fn() => room_add_player($room, 'Extra', 1000), 429);
});

test('room codes exclude 0 O 1 I', function () {
    for ($i = 0; $i < 500; $i++) {
        $c = room_code_generate();
        assert_true(room_valid_code($c), "valid $c");
        assert_eq(0, preg_match('/[0O1I]/', $c), "ambiguous char in $c");
    }
});

// ---- start ----

test('cannot start without a non-host player', function () {
    [$room] = fixture_room('timed', 'play', []);
    assert_room_error(fn() => room_start($room, 1000), 409);
});

test('start opens question 0 with 20s deadline when timed', function () {
    [$room] = fixture_room();
    $room = room_start($room, 1000);
    assert_eq('question', $room['phase']);
    assert_eq(0, $room['q_index']);
    assert_eq(1020.0, $room['q_deadline']);
});

test('relaxed pace has no deadline', function () {
    [$room] = fixture_room('relaxed');
    assert_eq(null, room_start($room, 1000)['q_deadline']);
});

// ---- scoring ----

test('timed: instant correct = 1000, at deadline = 500, wrong = 0', function () {
    [$room, $ids] = fixture_room('timed', 'present', ['A', 'B', 'C']);
    $quiz = fixture_quiz();
    $room = room_start($room, 1000);
    $room = room_answer($room, $quiz, $ids['A'], 1, 1000.0);
    $room = room_answer($room, $quiz, $ids['C'], 0, 1005.0);
    $room['players'][$ids['B']]['last_seen'] = 1019.0; // still polling
    $room = room_answer($room, $quiz, $ids['B'], 1, 1020.0);
    assert_eq(1000, $room['players'][$ids['A']]['score']);
    assert_eq(500,  $room['players'][$ids['B']]['score']);
    assert_eq(0,    $room['players'][$ids['C']]['score']);
    assert_eq(1, $room['players'][$ids['A']]['correct_count']);
    assert_eq(0, $room['players'][$ids['C']]['correct_count']);
});

test('timed: halfway correct = 750', function () {
    [$room, $ids] = fixture_room('timed', 'present', ['A', 'B']);
    $room = room_start($room, 1000);
    $room = room_answer($room, fixture_quiz(), $ids['A'], 1, 1010.0);
    assert_eq(750, $room['players'][$ids['A']]['score']);
});

test('relaxed: correct = 1000 regardless of time', function () {
    [$room, $ids] = fixture_room('relaxed', 'present', ['A', 'B']);
    $room = room_start($room, 1000);
    $room = room_answer($room, fixture_quiz(), $ids['A'], 1, 1300.0);
    assert_eq(1000, $room['players'][$ids['A']]['score']);
});

test('answer within grace accepted, after grace rejected', function () {
    [$room, $ids] = fixture_room('timed', 'present', ['A', 'B']);
    $room = room_start($room, 1000);
    $room = room_answer($room, fixture_quiz(), $ids['A'], 1, 1020.8);
    assert_eq(500, $room['players'][$ids['A']]['score'], 'clamped at min');
    assert_room_error(fn() => room_answer($room, fixture_quiz(), $ids['B'], 1, 1021.5), 409);
});

test('double answer rejected', function () {
    [$room, $ids] = fixture_room('timed', 'present', ['A', 'B']);
    $room = room_start($room, 1000);
    $room = room_answer($room, fixture_quiz(), $ids['A'], 1, 1001);
    assert_room_error(fn() => room_answer($room, fixture_quiz(), $ids['A'], 2, 1002), 409);
});

test('invalid option rejected', function () {
    [$room, $ids] = fixture_room();
    $room = room_start($room, 1000);
    assert_room_error(fn() => room_answer($room, fixture_quiz(), $ids['Ana'], 4, 1001), 400);
});

// ---- closing ----

test('closes early when all active players answered', function () {
    [$room, $ids] = fixture_room('relaxed');
    $quiz = fixture_quiz();
    $room = room_start($room, 1000);
    $room = room_answer($room, $quiz, $ids['Ana'], 1, 1001);
    assert_eq('question', $room['phase']);
    $room = room_answer($room, $quiz, $ids['Rui'], 0, 1002);
    assert_eq('reveal', $room['phase']);
});

test('ghost players (not seen >15s) do not block early close', function () {
    [$room, $ids] = fixture_room('relaxed', 'present', ['Ana', 'Rui', 'Ghost'], 1000);
    $room['players'][$ids['Ana']]['last_seen'] = 1030;
    $room['players'][$ids['Rui']]['last_seen'] = 1030;
    $quiz = fixture_quiz();
    $room = room_start($room, 1030);
    $room = room_answer($room, $quiz, $ids['Ana'], 1, 1031);
    $room = room_answer($room, $quiz, $ids['Rui'], 1, 1032);
    assert_eq('reveal', $room['phase']);
});

test('nobody answering never auto-closes relaxed question', function () {
    [$room] = fixture_room('relaxed');
    $room = room_start($room, 1000);
    [$room, $changed] = room_tick($room, 5000);
    assert_eq('question', $room['phase']);
    assert_eq(false, $changed);
});

test('timed question closes lazily on first tick after deadline+grace', function () {
    [$room] = fixture_room('timed');
    $room = room_start($room, 1000);
    assert_eq(false, room_tick($room, 1020.9)[1]);
    [$room, $changed] = room_tick($room, 1021.1);
    assert_true($changed);
    assert_eq('reveal', $room['phase']);
});

test('host can close a relaxed question', function () {
    [$room] = fixture_room('relaxed');
    $room = room_close(room_start($room, 1000), 1100);
    assert_eq('reveal', $room['phase']);
});

test('close outside a question is rejected', function () {
    [$room] = fixture_room('relaxed');
    assert_room_error(fn() => room_close($room, 1000), 409);
});

// ---- late joiners ----

test('late joiner not eligible for current question, eligible for next', function () {
    [$room, $ids] = fixture_room('relaxed');
    $quiz = fixture_quiz();
    $room = room_start($room, 1000);
    [$room, $late] = room_add_player($room, 'Late', 1001);
    assert_room_error(fn() => room_answer($room, $quiz, $late, 1, 1002), 409);

    $room = room_answer($room, $quiz, $ids['Ana'], 1, 1003);
    $room = room_answer($room, $quiz, $ids['Rui'], 1, 1003);
    assert_eq('reveal', $room['phase'], 'late joiner does not block close');

    $room = room_next($room, 1010);
    $room = room_answer($room, $quiz, $late, 1, 1011);
    assert_eq(1000, $room['players'][$late]['score']);
});

test('joining during reveal is eligible for the next question', function () {
    [$room] = fixture_room('relaxed');
    $room = room_close(room_start($room, 1000), 1001);
    [$room, $late] = room_add_player($room, 'Late', 1002);
    assert_eq(1, $room['players'][$late]['joined_at_q']);
});

// ---- advancing / restart ----

test('next moves through questions to podium', function () {
    [$room] = fixture_room('relaxed');
    $room = room_start($room, 1000);
    for ($i = 0; $i < 3; $i++) {
        $room = room_close($room, 1000 + $i);
        $room = room_next($room, 1000 + $i);
    }
    assert_eq('podium', $room['phase']);
});

test('next rejected while question open', function () {
    [$room] = fixture_room();
    assert_room_error(fn() => room_next(room_start($room, 1000), 1001), 409);
});

test('restart resets scores and answers, keeps players', function () {
    [$room, $ids] = fixture_room('relaxed');
    $quiz = fixture_quiz(1);
    $room['q_total'] = 1;
    $room = room_start($room, 1000);
    $room = room_answer($room, $quiz, $ids['Ana'], 1, 1001);
    $room = room_close($room, 1002);
    $room = room_next($room, 1003);
    assert_eq('podium', $room['phase']);
    $room = room_restart($room, 1004);
    assert_eq('lobby', $room['phase']);
    assert_eq(2, count($room['players']));
    assert_eq(0, $room['players'][$ids['Ana']]['score']);
    assert_eq(0, $room['players'][$ids['Ana']]['correct_count']);
    assert_eq([], $room['answers']);
});

test('restart only from podium', function () {
    [$room] = fixture_room();
    assert_room_error(fn() => room_restart($room, 1000), 409);
});

// ---- views ----

test('view hides correct answer and explanation during question', function () {
    [$room, $ids] = fixture_room('relaxed', 'present', ['Ana', 'Rui']);
    $quiz = fixture_quiz();
    $room = room_start($room, 1000);
    $room = room_answer($room, $quiz, $ids['Ana'], 1, 1001);
    $view = room_view($room, $quiz, ['is_host' => false, 'pid' => $ids['Ana']], 1002);
    $json = json_encode($view);
    assert_true(!isset($view['question']['correct']), 'no correct');
    assert_true(!isset($view['question']['explanation']), 'no explanation');
    assert_eq(['choice' => 1], $view['me']['answer'], 'own answer without points');
    assert_eq(0, $view['me']['score'], 'score excludes open question');
    foreach ($view['players'] as $p) assert_eq(0, $p['score'], 'ranking excludes open question');
    assert_eq(false, str_contains($json, 'token'), 'no tokens in view');
});

test('view includes correct answer, explanation and counts on reveal', function () {
    [$room, $ids] = fixture_room('relaxed');
    $quiz = fixture_quiz();
    $room = room_start($room, 1000);
    $room = room_answer($room, $quiz, $ids['Ana'], 1, 1001);
    $room = room_answer($room, $quiz, $ids['Rui'], 3, 1001);
    $view = room_view($room, $quiz, ['is_host' => false, 'pid' => $ids['Ana']], 1002);
    assert_eq(1, $view['question']['correct']);
    assert_eq('E0', $view['question']['explanation']);
    assert_eq([0, 1, 0, 1], $view['question']['counts']);
    assert_eq(1000, $view['me']['answer']['points']);
});

test('presenter host is not a player', function () {
    [$room, $ids] = fixture_room('relaxed', 'present', ['Ana']);
    assert_eq(1, count($room['players']));
    $quiz = fixture_quiz();
    $room = room_start($room, 1000);
    $room = room_answer($room, $quiz, $ids['Ana'], 1, 1001);
    assert_eq('reveal', $room['phase'], 'host not waited on');
    $view = room_view($room, $quiz, ['is_host' => true, 'pid' => null], 1002);
    assert_eq(null, $view['me']);
    assert_eq(1, count($view['players']));
});

test('playing host is a player and is waited on', function () {
    [$room, $ids] = fixture_room('relaxed', 'play', ['Ana']);
    $host = room_host_player_id($room);
    assert_true($host !== null, 'host player exists');
    $quiz = fixture_quiz();
    $room = room_start($room, 1000);
    $room = room_answer($room, $quiz, $ids['Ana'], 1, 1001);
    assert_eq('question', $room['phase']);
    $room = room_answer($room, $quiz, $host, 1, 1002);
    assert_eq('reveal', $room['phase']);
});

test('ranking uses competition ranks for ties', function () {
    [$room, $ids] = fixture_room('relaxed', 'present', ['A', 'B', 'C']);
    $room['players'][$ids['A']]['score'] = 2000;
    $room['players'][$ids['B']]['score'] = 2000;
    $room['players'][$ids['C']]['score'] = 1000;
    $ranks = array_column(room_ranking($room, 1000), 'rank');
    assert_eq([1, 1, 3], $ranks);
});

test('touch only persists when stale', function () {
    [$room, $ids] = fixture_room();
    assert_eq(false, room_touch($room, $ids['Ana'], false, 1003)[1]);
    [$room, $changed] = room_touch($room, $ids['Ana'], true, 1006);
    assert_true($changed);
    assert_eq(1006.0, (float) $room['players'][$ids['Ana']]['last_seen']);
    assert_eq(1006.0, (float) $room['host_seen']);
});
