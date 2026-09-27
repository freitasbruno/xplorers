<?php
/** Group quiz JSON endpoint — see includes/room_api.php for the actions. */

require_once __DIR__ . '/../includes/room_api.php';

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Método não permitido.']);
    exit;
}

$req = json_decode(file_get_contents('php://input'), true);
if (!is_array($req)) $req = [];

[$status, $body] = sala_handle($req, microtime(true));

http_response_code($status);
echo json_encode($body, JSON_UNESCAPED_UNICODE);
