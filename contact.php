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

$form_name = htmlspecialchars(trim($_POST["name"] ?? ''), ENT_QUOTES, 'UTF-8');
$form_email = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
$form_phone = htmlspecialchars(trim($_POST["phone"] ?? ''), ENT_QUOTES, 'UTF-8');
$form_service = htmlspecialchars(trim($_POST["service"] ?? ''), ENT_QUOTES, 'UTF-8');
$form_message = htmlspecialchars(trim($_POST["message"] ?? ''), ENT_QUOTES, 'UTF-8');

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

    if ($_ENV["MAIL_SECURE"] === "SSL") {
        $mail -> SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    } else if ($_ENV["MAIL_SECURE"] === "TSL") {
        $mail -> SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    } else {
        $mail -> SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    }

    $mail -> Port = $_ENV["MAIL_PORT"]; // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    // Recipients
    $mail -> setFrom($form_email, "Consulta");
    $mail -> addAddress($mail -> Username, $form_name);

    // Content
    $mail -> isHTML(true);
    $mail -> Subject = "Consulta: " . $form_service;
    $mail -> Body = $body;
    $mail -> send();

    header("Location: " . $_ENV["ROOT"]);
} catch (Exception $err) {
    echo "Message could not be sent. Mailer Error: {$mail -> ErrorInfo}";
}

?>
