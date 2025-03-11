<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$asunt = $_POST['asunt'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

// Datos para el correo
$destinatario = "herbario.frn@espoch.edu.ec";
$asunto = "Contacto desde Pagina Herbario ESPOCH";

$carta = "De: $nombre \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Correo: $correo \n";
$carta .= "Asunto: $asun \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, utf8_decode ($carta), $header);
header('Location:index.html');

?>



