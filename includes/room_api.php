<?php
/**
 * Group quiz API handler. Kept separate from api/sala.php so tests can call
 * it directly: sala_handle(array $req, float $now): array [http_status, body].
 *
 * Actions:
 *   create  lesson_id, role, pace, name?      → code, host_token, player_id?, token?
 *   join    code, name                         → player_id, token, view
 *   state   code, token? | host_token?, v?     → view | {unchanged} | public info (no identity)
 *   answer  code, token, choice                → view
 *   start | close | next | restart  code, host_token → view
 */

require_once __DIR__ . '/data.php';
require_once __DIR__ . '/room_store.php';

function sala_lesson_info(array $lesson): array {
    return [
        'id'           => $lesson['id'],
        'title'        => $lesson['title'],
        'topic_name'   => $lesson['topic_name'],
        'topic_slug'   => $lesson['topic_slug'],
        'class_number' => $lesson['class_number'],
        'badge_class'  => topic_badge_class($lesson['topic_slug']),
    ];
}

/** Load lesson + quiz for a room; both must exist. */
function sala_content(string $lesson_id): array {
    $lesson = get_lesson($lesson_id);
    $quiz   = $lesson ? get_quiz($lesson) : null;
    if (!$lesson || !$quiz || empty($quiz['questions'])) throw new RoomError('Quiz não encontrado.', 404);
    return [$lesson, $quiz];
}

/** Resolve who is calling. Returns ['is_host' => bool, 'pid' => ?string]. */
function sala_viewer(array $room, array $req): array {
    $host_token = (string) ($req['host_token'] ?? '');
    $token      = (string) ($req['token'] ?? '');
    $is_host    = room_is_host_token($room, $host_token);
    $pid        = room_find_player_by_token($room, $token);
    if ($pid === null && $is_host) $pid = room_host_player_id($room);
    return ['is_host' => $is_host, 'pid' => $pid];
}

function sala_full_view(array $room, array $viewer, float $now): array {
    [$lesson, $quiz] = sala_content($room['lesson_id']);
    $view = room_view($room, $quiz, $viewer, $now);
    $view['lesson'] = sala_lesson_info($lesson);
    return $view;
}

function sala_handle(array $req, float $now): array {
    try {
        $action = (string) ($req['action'] ?? '');
        $code   = strtoupper(trim((string) ($req['code'] ?? '')));

        switch ($action) {

            case 'create': {
                [$lesson, $quiz] = sala_content((string) ($req['lesson_id'] ?? ''));
                $role = (string) ($req['role'] ?? '');
                $pace = (string) ($req['pace'] ?? '');
                $ids  = [];
                $room = room_create(function (string $code) use ($lesson, $quiz, $role, $pace, $req, $now, &$ids) {
                    [$room, $host_token, $pid, $ptoken] = room_new(
                        $code, $lesson['id'], $role, $pace, count($quiz['questions']),
                        (string) ($req['name'] ?? ''), $now
                    );
                    $ids = ['host_token' => $host_token, 'player_id' => $pid, 'token' => $ptoken];
                    return $room;
                }, $now);
                return [200, ['code' => $room['code']] + $ids];
            }

            case 'join': {
                return room_with($code, $now, function (array $room) use ($req, $now) {
                    [$room, $pid, $token] = room_add_player($room, (string) ($req['name'] ?? ''), $now);
                    $view = sala_full_view($room, ['is_host' => false, 'pid' => $pid], $now);
                    return [$room, [200, ['player_id' => $pid, 'token' => $token, 'view' => $view]]];
                });
            }

            case 'state': {
                return room_with($code, $now, function (array $room) use ($req, $now) {
                    $viewer = sala_viewer($room, $req);

                    if (!$viewer['is_host'] && $viewer['pid'] === null) {
                        // Unknown caller (e.g. someone about to join): public info only.
                        [$lesson] = sala_content($room['lesson_id']);
                        $public = [
                            'code'         => $room['code'],
                            'phase'        => $room['phase'],
                            'player_count' => count($room['players']),
                            'full'         => count($room['players']) >= ROOM_MAX_PLAYERS,
                            'lesson'       => sala_lesson_info($lesson),
                        ];
                        return [null, [200, ['public' => $public]]];
                    }

                    [$room, $ticked]  = room_tick($room, $now);
                    [$room, $touched] = room_touch($room, $viewer['pid'], $viewer['is_host'], $now);
                    $save = ($ticked || $touched) ? $room : null;

                    if (isset($req['v']) && (int) $req['v'] === $room['version']) {
                        return [$save, [200, [
                            'unchanged'   => true,
                            'now'         => $now,
                            'host_online' => ($now - $room['host_seen']) < ROOM_HOST_LOST,
                        ]]];
                    }
                    return [$save, [200, ['view' => sala_full_view($room, $viewer, $now)]]];
                });
            }

            case 'answer': {
                return room_with($code, $now, function (array $room) use ($req, $now) {
                    $viewer = sala_viewer($room, $req);
                    if ($viewer['pid'] === null) throw new RoomError('Jogador desconhecido.', 403);
                    [, $quiz] = sala_content($room['lesson_id']);
                    $room = room_answer($room, $quiz, $viewer['pid'], (int) ($req['choice'] ?? -1), $now);
                    return [$room, [200, ['view' => sala_full_view($room, $viewer, $now)]]];
                });
            }

            case 'start':
            case 'close':
            case 'next':
            case 'restart': {
                return room_with($code, $now, function (array $room) use ($req, $now, $action) {
                    $viewer = sala_viewer($room, $req);
                    if (!$viewer['is_host']) throw new RoomError('Só o anfitrião pode fazer isto.', 403);
                    $room = room_tick($room, $now)[0];
                    $room = match ($action) {
                        'start'   => room_start($room, $now),
                        'close'   => room_close($room, $now),
                        'next'    => room_next($room, $now),
                        'restart' => room_restart($room, $now),
                    };
                    $room['host_seen'] = $now;
                    return [$room, [200, ['view' => sala_full_view($room, $viewer, $now)]]];
                });
            }

            default:
                throw new RoomError('Ação desconhecida.');
        }
    } catch (RoomError $e) {
        return [$e->status, ['error' => $e->getMessage()]];
    }
}
