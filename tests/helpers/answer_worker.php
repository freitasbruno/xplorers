<?php
/** Concurrency test worker: answers once and prints the HTTP status. argv: dir code token */
define('XP_ROOM_DIR', $argv[1]);
require_once __DIR__ . '/../../includes/room_api.php';
[$status] = sala_handle(['action' => 'answer', 'code' => $argv[2], 'token' => $argv[3], 'choice' => 0], microtime(true));
echo $status;
