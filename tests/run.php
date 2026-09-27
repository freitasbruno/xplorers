<?php
/**
 * Minimal test runner — no dependencies.
 * Usage: /c/xampp/php/php.exe tests/run.php [filter]
 * Loads tests/*.test.php; each file registers cases with test().
 */

$xp_tmp = sys_get_temp_dir() . '/xp_rooms_' . getmypid();
define('XP_ROOM_DIR', $xp_tmp);

$GLOBALS['xp_tests'] = [];

function test(string $name, callable $fn): void {
    $GLOBALS['xp_tests'][] = [$name, $fn];
}

class AssertFail extends Exception {}

function assert_eq(mixed $expected, mixed $actual, string $msg = ''): void {
    if ($expected !== $actual) {
        throw new AssertFail(($msg ? "$msg — " : '') . 'expected ' . var_export($expected, true) . ', got ' . var_export($actual, true));
    }
}

function assert_true(mixed $cond, string $msg = 'expected true'): void {
    if ($cond !== true) throw new AssertFail($msg);
}

/** Asserts $fn throws RoomError; returns it so the caller can check status. */
function assert_room_error(callable $fn, ?int $status = null): RoomError {
    try {
        $fn();
    } catch (RoomError $e) {
        if ($status !== null) assert_eq($status, $e->status, 'RoomError status');
        return $e;
    }
    throw new AssertFail('expected RoomError' . ($status ? " ($status)" : ''));
}

function reset_room_dir(): void {
    if (!is_dir(XP_ROOM_DIR)) mkdir(XP_ROOM_DIR, 0777, true);
    foreach (glob(XP_ROOM_DIR . '/*') ?: [] as $f) unlink($f);
}

foreach (glob(__DIR__ . '/*.test.php') as $file) require $file;

$filter = $argv[1] ?? '';
$pass = 0; $fail = 0;
foreach ($GLOBALS['xp_tests'] as [$name, $fn]) {
    if ($filter !== '' && stripos($name, $filter) === false) continue;
    reset_room_dir();
    try {
        $fn();
        $pass++;
        echo "  ✓ $name\n";
    } catch (Throwable $e) {
        $fail++;
        echo "  ✗ $name\n      " . $e->getMessage() . ' (' . basename($e->getFile()) . ':' . $e->getLine() . ")\n";
    }
}

reset_room_dir();
@rmdir(XP_ROOM_DIR);

echo "\n$pass passed, $fail failed\n";
exit($fail > 0 ? 1 : 0);
