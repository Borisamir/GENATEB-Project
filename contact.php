<?php

use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . "/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv -> safeLoad();

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit;
}

$form_name = $_POST["name"];
$form_email = $_POST["email"];
$form_phone = $_POST["phone"];
$form_service = $_POST["service"];
$form_message = $_POST["message"];

$body = "
<b>Nombre y Apellido:</b> $form_name<br>
<b>Correo electrónico:</b> $form_email<br>
<b>Teléfono:</b> $form_phone<br>
<b>Tipo de servicio solicitado:</b> $form_service<br>
<hr>
$form_message
";

$mail = new PHPMailer(true);

try {
    // Server settings
    // $mail -> SMTPDebug = SMTP::DEBUG_SERVER;
    $mail -> isSMTP();
    $mail -> Host = $_ENV["MAIL_HOST"]; // SMTP server
    $mail -> SMTPAuth = true;
    $mail -> Username = $_ENV["MAIL_USERNAME"]; // SMTP username
    $mail -> Password = $_ENV["MAIL_PASSWORD"]; // SMTP password
    $mail -> SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail -> Port = $_ENV["MAIL_PORT"]; // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    // Recipients
    $mail -> setFrom($form_email, $form_name);
    $mail -> addAddress($mail -> Username, "Genateb");

    // Content
    $mail -> isHTML(true);
    $mail -> Subject = $form_service;
    $mail -> Body = $body;

    $mail -> send();

    header("Location: " . $_ENV["ROOT"] . "/index.php");
} catch (Exception $err) {
    echo "Message could not be sent. Mailer Error: {$mail -> ErrorInfo}";
}

?>
