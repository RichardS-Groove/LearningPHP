<?php

if (!isset($_GET['nombre'])) { // Si no existe el nombre en la URL
    die("No se ha recibido el nombre"); //die() es una función que termina el script
}

if (!isset($_GET['email'])) {
    die("No se ha recibido el email");
}

if (!isset($_GET['mensaje'])) {
    die("No se ha recibido el mensaje");
}



$nombre = $_GET['nombre'];
$email = $_GET['email'];
$mensaje = $_GET['mensaje'];

//Bloque de código para enviar el email

$to = 'richardsjcb@gmail.com';  //Correo al que se enviará el email
$subject = 'consulta desde la web';  //Asunto del email
$body = 'Nueva consulta desde la web' . "\r\n"; // \r\n es un salto de línea
$body .= 'Nombre: ' . $nombre . "\r\n"; // El . es la concatenación de la variable $body con la variable $nombre
$body .= 'Email: ' . $email . "\r\n";
$body .= 'Mensaje: ' . $mensaje . "\r\n";

$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $body, $headers);

?>
