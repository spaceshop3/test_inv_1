<?php
// auth/logout.php
setcookie('token', '', [
    'expires'  => time() - 3600,
    'path'     => '/',
    'samesite' => 'Lax',
    'httponly' => true,
    'secure'   => !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off'
]);
header('Content-Type: application/json');
echo json_encode(['success' => true]);
exit;
