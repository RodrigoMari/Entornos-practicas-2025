<?php
$destinatario = "xx@xx.com"; 
$asunto = "Prueba";
$cuerpo = "
<html>
<head>
    <title>Prueba de correo HTML</title>
</head>
<body>
    <p>Esto es una prueba de envío de correo a través del servidor</p>
</body>
</html>
";

$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: mail@gmail.com" . "\r\n"; 

if(mail($destinatario, $asunto, $cuerpo, $headers)) {
  echo "El correo ha sido enviado exitosamente.";
} else {
  echo "Error al enviar el correo.";
  echo nl2br(file_get_contents('C:/xampp/sendmail/error.log'));
}
?>
