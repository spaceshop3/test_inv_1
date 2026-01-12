<?php
// submit.php — единый стандарт
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(200); // просто OK
    exit;
}

// Получаем данные (по желанию)
$name    = trim($_POST['name']    ?? '');
$email   = trim($_POST['email']   ?? '');
$phone   = trim($_POST['phone']   ?? '');
$message = trim($_POST['message'] ?? '');

// Тут можно сохранить лид в файл/базу, если нужно

// Отвечаем 200 и сразу переводим на thank.php
http_response_code(200);
header('Location: thank.php');
exit;
?>
