<?php
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];
$headers = "From:" .$email. "\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

mail("luciadcma@live.com", 'contacto de formulario', $mensaje, $headers);

echo '<p> El mensaje se ha enviado correctamente </p>'

?>
