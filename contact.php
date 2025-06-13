<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . "/vendor/autoload.php";

$mail = new PHPMailer(true);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = strip_tags(trim($_POST["nombre"] ?? ''));
    $correo = filter_var(trim($_POST["correo_electronico"] ?? ''), FILTER_SANITIZE_EMAIL);
    $telefono = strip_tags(trim($_POST["telefono"] ?? ''));
    $tipo_servicio = strip_tags(trim($_POST["tipo_servicio"] ?? ''));
    $mensaje = strip_tags(trim($_POST["mensaje"] ?? ''));
    $terminos = isset($_POST["terminos"]) ? "Sí" : "No";

    if ($nombre && $correo && $mensaje) {

        try {
            // Configuración SMTP: Cambia estos valores según tu proveedor
            $mail->isSMTP();

            // --- CONFIGURACIÓN SMTP SEGÚN EL PROVEEDOR ---
            // GMAIL
            // $mail->Host = 'smtp.gmail.com';
            // $mail->Username = 'tu_correo@gmail.com';
            // $mail->Password = 'tu_app_password';
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            // $mail->Port = 587;

            // OUTLOOK/HOTMAIL/LIVE
            // $mail->Host = 'smtp.office365.com';
            // $mail->Username = 'tu_correo@outlook.com';
            // $mail->Password = 'tu_contraseña';
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            // $mail->Port = 587;

            // YAHOO
            // $mail->Host = 'smtp.mail.yahoo.com';
            // $mail->Username = 'tu_correo@yahoo.com';
            // $mail->Password = 'tu_contraseña';
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            // $mail->Port = 587;

            // --- ELIGE Y DESCOMENTA LA CONFIGURACIÓN QUE NECESITES ---
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'dexti.kz@gmail.com';
            $mail->Password = 'lowjyuvkyjsstbvf'; // Usa contraseña de aplicación si es Gmail
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Remitente y destinatario
            $mail->setFrom($mail->Username, $nombre);
            $mail->addAddress('dexti.kz@gmail.com', 'Destinatario'); // Cambia por tu correo

            // Contenido
            $mail->isHTML(false);
            $mail->Subject = 'Nuevo mensaje de contacto desde la web';
            $mail->Body = "Nombre: $nombre\nCorreo: $correo\nTeléfono: $telefono\nTipo de servicio: $tipo_servicio\nMensaje: $mensaje\nAceptó términos: $terminos\n";

            $mail->send();
            echo "¡Mensaje enviado correctamente!";
        } catch (Exception $e) {
            echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
        }
    } else {
        echo "Por favor, completa los campos obligatorios.";
    }
} else {
    echo "Acceso no permitido.";
}
?>
