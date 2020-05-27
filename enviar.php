<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['dirCorreo'];
$sector = $_POST['sector'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Nombre: " . $nombre . ",\r\n";
$mensaje = "Apellido: " . $apellido . ",\r\n";
$mensaje .= "Su e-mail es: " . $email . ",\r\n";
$mensaje .= "Su telefono es: " . $telefono . ",\r\n";
$mensaje .= "Sector elegido: " . $sector . ",\r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'info@impecar.com.ar';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>