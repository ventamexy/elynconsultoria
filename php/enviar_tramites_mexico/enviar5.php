<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud para Tramites para Mexico';
$nombre = $_POST['nombre5'];
$apellidos = $_POST['apellidos5'];
$correo = $_POST['email5'];
$numero = $_POST['numero5'];
$mensaje = $_POST['mensaje5'];
$contenido = 
"Seccion: " . "Tramites para Mexico" . 
"\nMotivo: ". "Naturalizacion" . 
"\nNombre: " . $nombre . 
"\nApellidos : " . $apellidos .
"\nCorreo: " . $correo . 
"\nTelefono: " . $numero . 
"\nMensaje: " . $mensaje;
    if (mail($destino, $asunto, $contenido))
    echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente.');</script>";
    echo "<script type='text/javascript'>window.location.href='../../paginas/Tramites para mexico/tramitesparamexico.html';</script>";

?>