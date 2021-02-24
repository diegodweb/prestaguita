<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
// $telefono = $_POST['telefono'];
// $email = $_POST['email'];
// $dni = $_POST['dni'];
// $sexo = $_POST['sexo'];

$mail ='diegonsalas@gmail.com' ;

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",". $apellido . "\r\n";
$mensaje .= "Sexo: " . $_POST['sexo'] . " \r\n";
$mensaje .= "DNI: " . $_POST['dni'] . " \r\n";
$mensaje .= "Celular: " . $_POST['celular'] . " \r\n";
$mensaje .= "Email: " . $_POST['email'] . " \r\n";
$mensaje .= "Ocupación: " . $_POST['ocupacion'] . " \r\n";
$mensaje .= "Localidad: " . $_POST['localidad'] . " \r\n";
$mensaje .= "Monto solicitado: $" . $_POST['monto'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'diegonsalas@gmail.com';
$asunto = 'solicitud de prestamo';


mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>




