<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud para Tramites para Mexico';
$nombre = $_POST['nombre4'];
$apellidos = $_POST['apellidos4'];
$correo = $_POST['email4'];
$numero = $_POST['numero4'];
$mensaje = $_POST['mensaje4'];
$contenido = 
"Seccion: " . "Tramites para Mexico" . 
"\nMotivo: ". "Peticion familiar" . 
"\nNombre: " . $nombre . 
"\nApellidos : " . $apellidos .
"\nCorreo: " . $correo . 
"\nTelefono: " . $numero . 
"\nMensaje: " . $mensaje;
    if (mail($destino, $asunto, $contenido))
    echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente.');</script>";
    echo "<script type='text/javascript'>window.location.href='../../paginas/Tramites para mexico/tramitesparamexico.html';</script>";

?>