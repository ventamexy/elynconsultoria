<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud para Visas de turistas';
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['email'];
$numero = $_POST['numero'];
$mensaje = $_POST['mensaje'];
$contenido = 
"Seccion: " . "Visas de turistas" . 
"\nMotivo: ". "Pais" . 
"\nNombre: " . $nombre . 
"\nApellidos : " . $apellidos .
"\nCorreo: " . $correo . 
"\nTelefono: " . $numero . 
"\nMensaje: " . $mensaje;
    if (mail($destino, $asunto, $contenido))
    echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente.');</script>";
    echo "<script type='text/javascript'>window.location.href='../../paginas/Visas de turistas/visasdeturistas.html';</script>";

?>
