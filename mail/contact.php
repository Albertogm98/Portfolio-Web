<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Configuración de destinatario y encabezados
    $to = "albertogm.personal@gmail.com";  // Reemplaza con tu dirección de correo
    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";
    $headers .= "Content-type: text/html\r\n";

    // Construye el cuerpo del correo
    $body = "Nombre: $name <br>";
    $body .= "Email: $email <br>";
    $body .= "Asunto: $subject <br>";
    $body .= "Mensaje: $message";

    // Envía el correo
    mail($to, $subject, $body, $headers);
}
?>
