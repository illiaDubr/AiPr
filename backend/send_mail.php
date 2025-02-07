<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json; charset=UTF-8");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    if (!isset($data["name"], $data["email"], $data["message"])) {
        http_response_code(400);
        echo json_encode(["message" => "Ошибка: заполните все поля"]);
        exit;
    }

    $to = "nivedy14@gmail.com";  
    $subject = "Новое сообщение с сайта";
    $body = "Имя: {$data['name']}\nEmail: {$data['email']}\n\nСообщение:\n{$data['message']}";
    $headers = "From: {$data['email']}\r\nReply-To: {$data['email']}\r\nContent-Type: text/plain; charset=UTF-8";

    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(["message" => "Письмо успешно отправлено!"]);
    } else {
        http_response_code(500);
        echo json_encode(["message" => "Ошибка при отправке письма"]);
    }
} else {
    http_response_code(405);
    echo json_encode(["message" => "Метод не разрешен"]);
}
?>
