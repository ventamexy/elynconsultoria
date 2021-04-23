<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud para Tramites para Mexico';
$nombre = $_POST['nombre2'];
$apellidos = $_POST['apellidos2'];
$correo = $_POST['email2'];
$numero = $_POST['numero2'];
$mensaje = $_POST['mensaje2'];
$contenido = 
"Seccion: " . "Tramites para Mexico" . 
"\nMotivo: ". "Renovaciones" . 
"\nNombre: " . $nombre . 
"\nApellidos : " . $apellidos .
"\nCorreo: " . $correo . 
"\nTelefono: " . $numero . 
"\nMensaje: " . $mensaje;
    if (mail($destino, $asunto, $contenido))
    echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente.');</script>";
    echo "<script type='text/javascript'>window.location.href='../../paginas/Tramites para mexico/tramitesparamexico.html';</script>";

?>