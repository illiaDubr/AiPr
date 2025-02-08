<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

header("Content-Type: application/json; charset=UTF-8");

// Проверяем метод запроса
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["message" => "Not allowed method use POST."]);
    exit;
}

// Читаем данные из запроса
$data = json_decode(file_get_contents("php://input"), true);

// Проверяем обязательные поля
if (!isset($data['fullName'], $data['email'], $data['message'])) {
    http_response_code(400);
    echo json_encode(["message" => "Not full data."]);
    exit;
}

$fullName = htmlspecialchars($data['fullName']);
$email = filter_var($data['email'], FILTER_VALIDATE_EMAIL);
$message = htmlspecialchars($data['message']);

// Проверяем корректность email
if (!$email) {
    http_response_code(400);
    echo json_encode(["message" => "incorrect email."]);
    exit;
}

// Настройка PHPMailer
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Замените на ваш SMTP-сервер
    $mail->SMTPAuth = true;
    $mail->Username = 'fanmlbb15@gmail.com'; // Ваш email
    $mail->Password = 'Dubrik220'; // Пароль от email
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('fanmlbb15@gmail.com', 'Fanny');
    $mail->addAddress('nivedy14@gmaill.com'); // Получатель

    $mail->isHTML(true);
    $mail->Subject = 'Massage frim site';
    $mail->Body = "
        <h1>New massage</h1>
        <p><strong>name:</strong> $fullName</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Massage:</strong><br>$message</p>
    ";

    $mail->send();
    echo json_encode(["message" => "Mail send!"]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(["message" => "Error: {$mail->ErrorInfo}"]);
}
?>
