<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud para Tramites para Mexico';
$nombre = $_POST['nombre3'];
$apellidos = $_POST['apellidos3'];
$correo = $_POST['email3'];
$numero = $_POST['numero3'];
$mensaje = $_POST['mensaje3'];
$contenido = 
"Seccion: " . "Tramites para Mexico" . 
"\nMotivo: ". "Ampliacion de estadia" . 
"\nNombre: " . $nombre . 
"\nApellidos : " . $apellidos .
"\nCorreo: " . $correo . 
"\nTelefono: " . $numero . 
"\nMensaje: " . $mensaje;
    if (mail($destino, $asunto, $contenido))
    echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente.');</script>";
    echo "<script type='text/javascript'>window.location.href='../../paginas/Tramites para mexico/tramitesparamexico.html';</script>";

?>