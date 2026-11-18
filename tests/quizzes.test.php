<?php
/** Content tests — data/quizzes/*.json must not be guessable by position or answer length. */

function quiz_files(): array {
    return glob(__DIR__ . '/../data/quizzes/*.json') ?: [];
}

test('pool: topic quiz pool lists lessons with a quiz, ordered by class number', function () {
    $pool = get_topic_quiz_pool('cosmos');
    assert_eq(['cosmos_001', 'cosmos_002', 'cosmos_003'], array_keys($pool));
    foreach ($pool as $n) assert_true($n > 0, 'has questions');
    assert_eq(count(get_quiz('001_cosmos_01')['questions']), $pool['cosmos_001']);
});

test('pool: unknown topic is empty; lessons without a quiz are skipped', function () {
    assert_eq([], get_topic_quiz_pool('does-not-exist'));
    foreach (get_lessons() as $l) {
        $pool = get_topic_quiz_pool($l['topic_slug']);
        assert_eq(get_quiz($l) !== null && !empty(get_quiz($l)['questions']), isset($pool[$l['id']]), $l['id']);
    }
});

test('quizzes: correct answers spread across positions (each 1–4 times in 10)', function () {
    foreach (quiz_files() as $file) {
        $qs = json_decode(file_get_contents($file), true)['questions'];
        $counts = array_count_values(array_column($qs, 'correct')) + [0 => 0, 1 => 0, 2 => 0, 3 => 0];
        foreach ($counts as $pos => $n) {
            assert_true($n >= 1 && $n <= 4, basename($file) . ": position $pos is correct $n times");
        }
    }
});

test('quizzes: never the same position three times in a row', function () {
    foreach (quiz_files() as $file) {
        $c = array_column(json_decode(file_get_contents($file), true)['questions'], 'correct');
        for ($i = 2; $i < count($c); $i++) {
            assert_true(!($c[$i] === $c[$i - 1] && $c[$i] === $c[$i - 2]), basename($file) . ": 3 in a row at question " . ($i + 1));
        }
    }
});

test('quizzes: correct answer is not a give-away by length', function () {
    foreach (quiz_files() as $file) {
        $qs = json_decode(file_get_contents($file), true)['questions'];
        $longest = 0; $right = 0; $wrong = 0;
        foreach ($qs as $i => $q) {
            $lens = array_map('mb_strlen', $q['options']);
            $max = max($lens);
            // strictly the longest — ties don't give the answer away
            if ($lens[$q['correct']] === $max && count(array_keys($lens, $max)) === 1) $longest++;
            $others = $lens;
            unset($others[$q['correct']]);
            assert_true($lens[$q['correct']] <= 1.25 * max($others), basename($file) . ': question ' . ($i + 1) . ' — correct answer stands out by length');
            $right += $lens[$q['correct']];
            $wrong += array_sum($lens) - $lens[$q['correct']];
        }
        $ratio = ($right / count($qs)) / ($wrong / (3 * count($qs)));
        assert_true($longest <= 5, basename($file) . ": correct answer is the longest in $longest/" . count($qs));
        assert_true($ratio <= 1.25, basename($file) . ': correct answers are ' . round($ratio, 2) . 'x longer than distractors');
    }
});
