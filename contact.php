<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . "/vendor/autoload.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    // http_response_code(405);
    // echo "Método no permitido";
    exit;
}

$email = "dexti.kz@gmail.com";

$form_name = $_POST["name"];
$form_email = $_POST["email"];
$form_phone = $_POST["phone"];
$form_service = $_POST["service"];
$form_message = $_POST["message"];

$body = "

Nombre y Apellido: $form_name
Correo electrónico: $form_email
Teléfono: $form_phone
Tipo de servicio solicitado: $form_service

Mensaje o consulta:
$form_message
";

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail -> SMTPDebug = SMTP::DEBUG_SERVER;
    $mail -> isSMTP();
    $mail -> Host = "smtp.gmail.com";
    $mail -> SMTPAuth = true;
    $mail -> Username = $email;
    $mail -> Password = "lowjyuvkyjsstbvf"; // SMTP password
    $mail -> SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail -> Port = 465; // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    // Recipients
    $mail -> setFrom($form_email, $form_name);
    $mail -> addAddress($email);
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Content
    $mail -> isHTML(true);
    $mail -> Subject = $form_service;
    $mail -> Body = "<br>Numero de telefono:</b> $form_phone<hr>$form_message";
    // $mail -> AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail -> send();
} catch (Exception $err) {
    echo "Message could not be sent. Mailer Error: {$mail -> ErrorInfo}";
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $nombre = strip_tags(trim($_POST["nombre"] ?? ''));
//     $correo = filter_var(trim($_POST["correo_electronico"] ?? ''), FILTER_SANITIZE_EMAIL);
//     $telefono = strip_tags(trim($_POST["telefono"] ?? ''));
//     $tipo_servicio = strip_tags(trim($_POST["tipo_servicio"] ?? ''));
//     $mensaje = strip_tags(trim($_POST["mensaje"] ?? ''));
//     $terminos = isset($_POST["terminos"]) ? "Sí" : "No";

//     if ($nombre && $correo && $mensaje) {

//         try {
//             // Configuración SMTP: Cambia estos valores según tu proveedor
//             $mail->isSMTP();

//             // --- CONFIGURACIÓN SMTP SEGÚN EL PROVEEDOR ---
//             // GMAIL
//             // $mail->Host = 'smtp.gmail.com';
//             // $mail->Username = 'tu_correo@gmail.com';
//             // $mail->Password = 'tu_app_password';
//             // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//             // $mail->Port = 587;

//             // OUTLOOK/HOTMAIL/LIVE
//             // $mail->Host = 'smtp.office365.com';
//             // $mail->Username = 'tu_correo@outlook.com';
//             // $mail->Password = 'tu_contraseña';
//             // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//             // $mail->Port = 587;

//             // YAHOO
//             // $mail->Host = 'smtp.mail.yahoo.com';
//             // $mail->Username = 'tu_correo@yahoo.com';
//             // $mail->Password = 'tu_contraseña';
//             // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//             // $mail->Port = 587;

//             // --- ELIGE Y DESCOMENTA LA CONFIGURACIÓN QUE NECESITES ---
//             $mail->Host = 'smtp.gmail.com';
//             $mail->SMTPAuth = true;
//             $mail->Username = 'dexti.kz@gmail.com';
//             $mail->Password = 'lowjyuvkyjsstbvf'; // Usa contraseña de aplicación si es Gmail
//             $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//             $mail->Port = 587;

//             // Remitente y destinatario
//             $mail->setFrom($mail->Username, $nombre);
//             $mail->addAddress('dexti.kz@gmail.com', 'Destinatario'); // Cambia por tu correo

//             // Contenido
//             $mail->isHTML(false);
//             $mail->Subject = 'Nuevo mensaje de contacto desde la web';
//             $mail->Body = "Nombre: $nombre\nCorreo: $correo\nTeléfono: $telefono\nTipo de servicio: $tipo_servicio\nMensaje: $mensaje\nAceptó términos: $terminos\n";

//             $mail->send();
//             echo "¡Mensaje enviado correctamente!";
//         } catch (Exception $e) {
//             echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
//         }
//     } else {
//         echo "Por favor, completa los campos obligatorios.";
//     }
// } else {
//     echo "Acceso no permitido.";
// }
?>
