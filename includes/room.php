<?php
/**
 * Group quiz engine — pure functions over a room array. No I/O.
 *
 * Every function receives the current time ($now, float seconds) so the
 * engine is deterministic under test. Mutating functions return the new
 * room; invalid operations throw RoomError (carries an HTTP status).
 *
 * Phases: lobby → question → reveal → question … → podium → (restart) lobby
 */

const ROOM_MAX_PLAYERS  = 40;
const ROOM_TIME_LIMIT   = 20;     // seconds per question (timed pace)
const ROOM_GRACE        = 1.0;    // network grace after the deadline
const ROOM_ACTIVE_SECS  = 15;     // player counts as active if seen within this window
const ROOM_SEEN_WRITE   = 5;      // only persist last_seen when older than this
const ROOM_HOST_LOST    = 20;     // host considered disconnected after this
const ROOM_NAME_MAX     = 16;
const ROOM_POINTS_MAX   = 1000;
const ROOM_POINTS_MIN   = 500;    // correct answer at the very last second (timed)

const ROOM_AVATARS = ['🦊','🚀','🐙','🦉','🐢','🌵','🐳','🦄','🐝','🌻','🍉','🦖','🐧','🦁','🐸','🍄',
                      '🌈','⚡','🐼','🦋','🐬','🍩','🎈','🐞','🦜','🌙','🐨','🦔','🍀','🐯','🎸','🪐',
                      '🦩','🐿️','🌋','🧩','🦕','🐠','🍓','⭐'];

class RoomError extends Exception {
    public int $status;
    public function __construct(string $message, int $status = 400) {
        parent::__construct($message);
        $this->status = $status;
    }
}

function room_token(): string {
    return bin2hex(random_bytes(16));
}

function room_q_key(int $i): string {
    return 'q' . $i;
}

/** Strip control chars, collapse whitespace, trim, cap length. */
function room_clean_name(string $name): string {
    $name = preg_replace('/\p{C}+/u', '', $name) ?? '';
    $name = preg_replace('/\s+/u', ' ', $name) ?? '';
    return trim(mb_substr(trim($name), 0, ROOM_NAME_MAX));
}

/** "Ana" → "Ana 2" → "Ana 3" …, case-insensitive, never over ROOM_NAME_MAX. */
function room_unique_name(array $room, string $name): string {
    $taken = [];
    foreach ($room['players'] as $p) $taken[mb_strtolower($p['name'])] = true;
    if (!isset($taken[mb_strtolower($name)])) return $name;
    for ($n = 2; ; $n++) {
        $suffix    = ' ' . $n;
        $candidate = rtrim(mb_substr($name, 0, ROOM_NAME_MAX - mb_strlen($suffix))) . $suffix;
        if (!isset($taken[mb_strtolower($candidate)])) return $candidate;
    }
}

function room_pick_avatar(array $room): string {
    $used = array_column($room['players'], 'avatar');
    $free = array_values(array_diff(ROOM_AVATARS, $used));
    $pool = $free ?: ROOM_AVATARS;
    return $pool[random_int(0, count($pool) - 1)];
}

/**
 * Create a room. Returns [room, host_token, host_player_id|null, host_player_token|null].
 * $role: 'play' | 'present'   $pace: 'timed' | 'relaxed'
 */
function room_new(string $code, string $lesson_id, string $role, string $pace, int $q_total, ?string $host_name, float $now): array {
    if (!in_array($role, ['play', 'present'], true)) throw new RoomError('Papel inválido.');
    if (!in_array($pace, ['timed', 'relaxed'], true)) throw new RoomError('Ritmo inválido.');
    if ($q_total < 1) throw new RoomError('Este quiz não tem perguntas.');

    $room = [
        'code'         => $code,
        'lesson_id'    => $lesson_id,
        'host_token'   => room_token(),
        'role'         => $role,
        'pace'         => $pace,
        'phase'        => 'lobby',
        'q_index'      => -1,
        'q_total'      => $q_total,
        'q_started_at' => null,
        'q_deadline'   => null,
        'version'      => 1,
        'created_at'   => $now,
        'updated_at'   => $now,
        'host_seen'    => $now,
        'players'      => [],
        'answers'      => [],
    ];

    $pid = null; $ptoken = null;
    if ($role === 'play') {
        [$room, $pid, $ptoken] = room_add_player($room, $host_name ?? '', $now, true);
    }
    return [$room, $room['host_token'], $pid, $ptoken];
}

/** Add a player. Returns [room, player_id, player_token]. */
function room_add_player(array $room, string $name, float $now, bool $is_host = false): array {
    $name = room_clean_name($name);
    if ($name === '') throw new RoomError('Escreve um nome.');
    if (count($room['players']) >= ROOM_MAX_PLAYERS) throw new RoomError('A sala está cheia.', 429);

    // Joining mid-game: eligible from the next question onwards.
    $joined_at_q = match ($room['phase']) {
        'lobby'  => 0,
        'podium' => $room['q_total'],
        default  => $room['q_index'] + 1,
    };

    do { $pid = 'p' . bin2hex(random_bytes(4)); } while (isset($room['players'][$pid]));
    $token = room_token();

    $room['players'][$pid] = [
        'token'         => $token,
        'name'          => room_unique_name($room, $name),
        'avatar'        => room_pick_avatar($room),
        'score'         => 0,
        'correct_count' => 0,
        'joined_at_q'   => $joined_at_q,
        'last_seen'     => $now,
        'is_host'       => $is_host,
    ];
    return [room_bump($room, $now), $pid, $token];
}

function room_bump(array $room, float $now): array {
    $room['version']++;
    $room['updated_at'] = $now;
    return $room;
}

function room_is_active(array $player, float $now): bool {
    return ($now - $player['last_seen']) < ROOM_ACTIVE_SECS;
}

function room_is_eligible(array $player, int $q_index): bool {
    return $player['joined_at_q'] <= $q_index;
}

function room_find_player_by_token(array $room, string $token): ?string {
    if ($token === '') return null;
    foreach ($room['players'] as $pid => $p) {
        if (hash_equals($p['token'], $token)) return $pid;
    }
    return null;
}

function room_is_host_token(array $room, string $token): bool {
    return $token !== '' && hash_equals($room['host_token'], $token);
}

function room_host_player_id(array $room): ?string {
    foreach ($room['players'] as $pid => $p) if ($p['is_host']) return $pid;
    return null;
}

/**
 * Record that a viewer is still connected. Only changes the room when the
 * stored timestamp is stale, to keep writes rare. Does not bump version.
 * Returns [room, changed].
 */
function room_touch(array $room, ?string $pid, bool $is_host, float $now): array {
    $changed = false;
    if ($is_host && ($now - $room['host_seen']) >= ROOM_SEEN_WRITE) {
        $room['host_seen'] = $now;
        $changed = true;
    }
    if ($pid !== null && isset($room['players'][$pid])
        && ($now - $room['players'][$pid]['last_seen']) >= ROOM_SEEN_WRITE) {
        $room['players'][$pid]['last_seen'] = $now;
        $changed = true;
    }
    return [$room, $changed];
}

function room_open_question(array $room, int $index, float $now): array {
    $room['phase']        = 'question';
    $room['q_index']      = $index;
    $room['q_started_at'] = $now;
    $room['q_deadline']   = $room['pace'] === 'timed' ? $now + ROOM_TIME_LIMIT : null;
    $room['answers'][room_q_key($index)] = [];
    return room_bump($room, $now);
}

function room_start(array $room, float $now): array {
    if ($room['phase'] !== 'lobby') throw new RoomError('O jogo já começou.', 409);
    $others = array_filter($room['players'], fn($p) => !$p['is_host']);
    if (!$others) throw new RoomError('À espera de pelo menos 1 jogador.', 409);
    return room_open_question($room, 0, $now);
}

function room_points(array $room, bool $correct, float $elapsed): int {
    if (!$correct) return 0;
    if ($room['pace'] !== 'timed') return ROOM_POINTS_MAX;
    $ratio = max(0.0, min(1.0, $elapsed / ROOM_TIME_LIMIT));
    return (int) round(ROOM_POINTS_MAX - (ROOM_POINTS_MAX - ROOM_POINTS_MIN) * $ratio);
}

function room_answer(array $room, array $quiz, string $pid, int $choice, float $now): array {
    $room = room_tick($room, $now)[0];
    if ($room['phase'] !== 'question') throw new RoomError('Esta pergunta já fechou.', 409);
    if (!isset($room['players'][$pid])) throw new RoomError('Jogador desconhecido.', 403);

    $q      = $room['q_index'];
    $player = $room['players'][$pid];
    $key    = room_q_key($q);

    if (!room_is_eligible($player, $q))            throw new RoomError('Entras na próxima pergunta.', 409);
    if (isset($room['answers'][$key][$pid]))        throw new RoomError('Já respondeste.', 409);
    if ($choice < 0 || $choice > 3)                 throw new RoomError('Opção inválida.');

    $elapsed = $now - $room['q_started_at'];
    $correct = $choice === (int) $quiz['questions'][$q]['correct'];
    $points  = room_points($room, $correct, $elapsed);

    $room['answers'][$key][$pid] = ['choice' => $choice, 'ms' => (int) round($elapsed * 1000), 'points' => $points];
    $room['players'][$pid]['last_seen'] = $now;
    $room['players'][$pid]['score']    += $points;
    if ($correct) $room['players'][$pid]['correct_count']++;

    $room = room_bump($room, $now);
    return room_tick($room, $now)[0];
}

/**
 * Time/state-driven transitions: closes the open question when its deadline
 * (plus grace) passed, or when every active eligible player has answered.
 * Returns [room, changed].
 */
function room_tick(array $room, float $now): array {
    if ($room['phase'] !== 'question') return [$room, false];

    if ($room['q_deadline'] !== null && $now > $room['q_deadline'] + ROOM_GRACE) {
        return [room_reveal($room, $now), true];
    }

    $answers  = $room['answers'][room_q_key($room['q_index'])] ?? [];
    $pending  = 0;
    foreach ($room['players'] as $pid => $p) {
        if (room_is_eligible($p, $room['q_index']) && room_is_active($p, $now) && !isset($answers[$pid])) $pending++;
    }
    if ($pending === 0 && count($answers) > 0) return [room_reveal($room, $now), true];

    return [$room, false];
}

function room_reveal(array $room, float $now): array {
    $room['phase'] = 'reveal';
    return room_bump($room, $now);
}

function room_close(array $room, float $now): array {
    if ($room['phase'] !== 'question') throw new RoomError('Não há pergunta aberta.', 409);
    return room_reveal($room, $now);
}

function room_next(array $room, float $now): array {
    if ($room['phase'] !== 'reveal') throw new RoomError('Ainda não é altura de avançar.', 409);
    $next = $room['q_index'] + 1;
    if ($next >= $room['q_total']) {
        $room['phase'] = 'podium';
        return room_bump($room, $now);
    }
    return room_open_question($room, $next, $now);
}

function room_restart(array $room, float $now): array {
    if ($room['phase'] !== 'podium') throw new RoomError('O jogo ainda não terminou.', 409);
    foreach ($room['players'] as $pid => $p) {
        $room['players'][$pid]['score']         = 0;
        $room['players'][$pid]['correct_count'] = 0;
        $room['players'][$pid]['joined_at_q']   = 0;
    }
    $room['phase']        = 'lobby';
    $room['q_index']      = -1;
    $room['q_started_at'] = null;
    $room['q_deadline']   = null;
    $room['answers']      = [];
    return room_bump($room, $now);
}

/**
 * While a question is open, scores must not include its points — a jump
 * in someone's score would reveal whether they got it right.
 */
function room_visible_score(array $room, string $pid, array $p): array {
    if ($room['phase'] !== 'question') return $p;
    $a = $room['answers'][room_q_key($room['q_index'])][$pid] ?? null;
    if ($a && $a['points'] > 0) {
        $p['score'] -= $a['points'];
        $p['correct_count']--;
    }
    return $p;
}

/** Players sorted by score (desc) then name, with competition ranking (1,2,2,4). */
function room_ranking(array $room, float $now): array {
    $list = [];
    foreach ($room['players'] as $pid => $p) {
        $p = room_visible_score($room, $pid, $p);
        $list[] = [
            'id'      => $pid,
            'name'    => $p['name'],
            'avatar'  => $p['avatar'],
            'score'   => $p['score'],
            'correct' => $p['correct_count'],
            'active'  => room_is_active($p, $now),
            'is_host' => $p['is_host'],
        ];
    }
    usort($list, fn($a, $b) => [$b['score'], $a['name']] <=> [$a['score'], $b['name']]);
    $rank = 0; $prev = null;
    foreach ($list as $i => $row) {
        if ($row['score'] !== $prev) { $rank = $i + 1; $prev = $row['score']; }
        $list[$i]['rank'] = $rank;
    }
    return $list;
}

/**
 * What a given viewer is allowed to see. Never includes tokens, and never
 * includes the correct answer or explanation while a question is open.
 * $viewer: ['is_host' => bool, 'pid' => ?string]
 */
function room_view(array $room, array $quiz, array $viewer, float $now): array {
    $pid   = $viewer['pid'] ?? null;
    $q     = $room['q_index'];
    $key   = room_q_key($q);
    $answers = $room['answers'][$key] ?? [];

    $view = [
        'code'        => $room['code'],
        'version'     => $room['version'],
        'now'         => $now,
        'phase'       => $room['phase'],
        'role'        => $room['role'],
        'pace'        => $room['pace'],
        'q_index'     => $q,
        'q_total'     => $room['q_total'],
        'time_limit'  => ROOM_TIME_LIMIT,
        'is_host'     => !empty($viewer['is_host']),
        'host_online' => ($now - $room['host_seen']) < ROOM_HOST_LOST,
        'players'     => room_ranking($room, $now),
        'me'          => null,
    ];

    if ($pid !== null && isset($room['players'][$pid])) {
        $p = room_visible_score($room, $pid, $room['players'][$pid]);
        $view['me'] = [
            'id'       => $pid,
            'name'     => $p['name'],
            'avatar'   => $p['avatar'],
            'score'    => $p['score'],
            'correct'  => $p['correct_count'],
            'eligible' => $q >= 0 && room_is_eligible($p, $q),
            'answer'   => $answers[$pid] ?? null,
        ];
    }

    if (in_array($room['phase'], ['question', 'reveal'], true)) {
        $src = $quiz['questions'][$q];
        $eligible = 0;
        foreach ($room['players'] as $p) if (room_is_eligible($p, $q)) $eligible++;

        $question = [
            'text'       => $src['question'],
            'options'    => $src['options'],
            'started_at' => $room['q_started_at'],
            'deadline'   => $room['q_deadline'],
            'answered'   => count($answers),
            'eligible'   => $eligible,
        ];

        if ($room['phase'] === 'reveal') {
            $counts = array_fill(0, count($src['options']), 0);
            foreach ($answers as $a) $counts[$a['choice']]++;
            $question['correct']     = (int) $src['correct'];
            $question['explanation'] = $src['explanation'] ?? '';
            $question['counts']      = $counts;
        } elseif ($view['me']) {
            // Hide the points of an answer until the question closes — they give the answer away.
            if ($view['me']['answer']) $view['me']['answer'] = ['choice' => $view['me']['answer']['choice']];
        }
        $view['question'] = $question;
    }

    return $view;
}
