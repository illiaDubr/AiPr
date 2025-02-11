<?php
header('Content-Type: application/json; charset=utf-8');
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Разрешаем только POST-запросы
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'status' => 'error',
        'message' => 'Method Not Allowed. Use POST.'
    ]);
    exit;
}

// Читаем JSON из тела запроса
$data = json_decode(file_get_contents('php://input'), true);

// Извлекаем данные
$fullName    = $data['fullName']    ?? '';
$email       = $data['email']       ?? '';
$phone       = $data['phone']       ?? '';
$companyName = $data['companyName'] ?? '';
$message     = $data['message']     ?? '';

// Можно добавить валидацию обязательных полей
if (empty($fullName) || empty($email) || empty($message)) {
    http_response_code(400);
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid fields (fullName, email, message).'
    ]);
    exit;
}

// Адрес, куда отправлять почту
$to = "r.demeyer@novali.energy";
$subject = "SC.AI massage";
$body    = "Name: $fullName\n"
         . "Email: $email\n"
         . "Phone: $phone\n"
         . "Company: $companyName\n\n"
         . "Message:\n$message\n";

$headers = "From: $email\r\n" .
           "Reply-To: $email\r\n";



           file_put_contents('/var/www/html/debug-log.txt', "About to call mail()...\n", FILE_APPEND);

// Пытаемся отправить почту
if (mail($to, $subject, $body, $headers)) {
    echo json_encode([
        'status' => 'success',
        'message' => 'success'
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'error.'
    ]);
}
