<?php
/**
 * Group quiz storage — one JSON file per room in data/rooms/, guarded by flock.
 * Tests override the directory by defining XP_ROOM_DIR before including.
 */

require_once __DIR__ . '/room.php';

const ROOM_IDLE_TTL  = 7200;  // seconds without changes before a room expires
const ROOM_MAX_ROOMS = 200;   // active rooms across the whole site
const ROOM_CODE_ALPHABET = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789'; // no 0/O/1/I
const ROOM_CODE_LENGTH   = 4;

function room_dir(): string {
    return defined('XP_ROOM_DIR') ? XP_ROOM_DIR : __DIR__ . '/../data/rooms';
}

function room_valid_code(string $code): bool {
    return (bool) preg_match('/^[' . ROOM_CODE_ALPHABET . ']{' . ROOM_CODE_LENGTH . '}$/', $code);
}

function room_path(string $code): string {
    if (!room_valid_code($code)) throw new RoomError('Sala não encontrada.', 404);
    return room_dir() . '/' . $code . '.json';
}

function room_code_generate(): string {
    $max  = strlen(ROOM_CODE_ALPHABET) - 1;
    $code = '';
    for ($i = 0; $i < ROOM_CODE_LENGTH; $i++) $code .= ROOM_CODE_ALPHABET[random_int(0, $max)];
    return $code;
}

/** Delete rooms idle longer than ROOM_IDLE_TTL. Returns the number of rooms left. */
function room_sweep(float $now): int {
    $left = 0;
    clearstatcache();
    foreach (glob(room_dir() . '/*.json') ?: [] as $file) {
        $mtime = @filemtime($file);
        if ($mtime !== false && $now - $mtime > ROOM_IDLE_TTL) {
            @unlink($file);
        } else {
            $left++;
        }
    }
    return $left;
}

/**
 * Create a room file with a fresh, unused code.
 * $build(string $code): array — returns the room to store.
 * Returns the stored room.
 */
function room_create(callable $build, float $now): array {
    if (room_sweep($now) >= ROOM_MAX_ROOMS) {
        throw new RoomError('Há demasiadas salas abertas. Tenta daqui a pouco.', 429);
    }
    for ($attempt = 0; $attempt < 50; $attempt++) {
        $code = room_code_generate();
        $fh   = @fopen(room_path($code), 'x'); // atomic: fails if the code is taken
        if ($fh === false) continue;
        $room = $build($code);
        fwrite($fh, json_encode($room, JSON_UNESCAPED_UNICODE));
        fclose($fh);
        return $room;
    }
    throw new RoomError('Não foi possível criar a sala. Tenta outra vez.', 500);
}

/**
 * Lock a room, run $fn on it and persist the result.
 * $fn(array $room): array{0: ?array, 1: mixed} — [room to save or null to skip, result]
 * Returns the result.
 */
function room_with(string $code, float $now, callable $fn): mixed {
    $path = room_path($code);
    $fh   = @fopen($path, 'r+');
    if ($fh === false) throw new RoomError('Sala não encontrada.', 404);

    try {
        flock($fh, LOCK_EX);
        $room = json_decode(stream_get_contents($fh), true);
        if (!is_array($room)) throw new RoomError('Sala não encontrada.', 404);
        if ($now - $room['updated_at'] > ROOM_IDLE_TTL) throw new RoomError('Esta sala já terminou.', 410);

        [$new, $result] = $fn($room);
        if ($new !== null) {
            ftruncate($fh, 0);
            rewind($fh);
            fwrite($fh, json_encode($new, JSON_UNESCAPED_UNICODE));
            fflush($fh);
        }
        return $result;
    } finally {
        flock($fh, LOCK_UN);
        fclose($fh);
    }
}
