<?php
if(empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$m_subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to = "albertogm.personal@gmail.com"; // Change this email to your //
$subject = "$m_subject:  $name";
$body = "Ha recibido un nuevo mensaje desde el formulario de contacto de su sitio web.\n\n"."Aquí los detalles:\n\nNombre: $name\n\n\nE-mail: $email\n\nAsunto: $m_subject\n\nMenesaje: $message";
$header = "From: $email";
$header .= "Reply-To: $email";	

if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>
