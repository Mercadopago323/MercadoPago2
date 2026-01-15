<?php
header('Content-Type: application/json; charset=utf-8');

// aceitar somente POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['erro' => 'Método não permitido']);
    exit;
}

// pegar dados (form ou JSON)
$data = $_POST;
if (empty($data)) {
    $data = json_decode(file_get_contents('php://input'), true);
}

if (!$data) {
    http_response_code(400);
    echo json_encode(['erro' => 'Dados inválidos']);
    exit;
}

// EXEMPLO de validação
$email = $data['email'] ?? null;
$senha = $data['senha'] ?? null;

if (!$email || !$senha) {
    http_response_code(401);
    echo json_encode(['erro' => 'Campos obrigatórios']);
    exit;
}

// sucesso
echo json_encode([
    'status' => 'ok',
    'msg' => 'Painel respondeu corretamente'
]);
