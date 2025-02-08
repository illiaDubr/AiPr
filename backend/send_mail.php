<?php
header('Content-Type: application/json; charset=utf-8');

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
$to      = "nivedy14@gmail.com"; // поменяйте на свой реальный Email
$subject = "SC.AI massage";
$body    = "Name: $fullName\n"
         . "Email: $email\n"
         . "Phone: $phone\n"
         . "Company: $companyName\n\n"
         . "Message:\n$message\n";

$headers = "From: $email\r\n" .
           "Reply-To: $email\r\n";

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
