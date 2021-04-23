<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud para Tramites para Mexico';
$nombre = $_POST['nombre7'];
$apellidos = $_POST['apellidos7'];
$correo = $_POST['email7'];
$numero = $_POST['numero7'];
$mensaje = $_POST['mensaje7'];
$contenido = 
"Seccion: " . "Tramites para Mexico" . 
"\nMotivo: ". "Asilo y refugio" . 
"\nNombre: " . $nombre . 
"\nApellidos : " . $apellidos .
"\nCorreo: " . $correo . 
"\nTelefono: " . $numero . 
"\nMensaje: " . $mensaje;
    if (mail($destino, $asunto, $contenido))
    echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente.');</script>";
    echo "<script type='text/javascript'>window.location.href='../../paginas/Tramites para mexico/tramitesparamexico.html';</script>";

?>