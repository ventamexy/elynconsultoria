<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud para Visas de trabajo';
$nombre = $_POST['nombre10'];
$apellidos = $_POST['apellidos10'];
$correo = $_POST['email10'];
$numero = $_POST['numero10'];
$mensaje = $_POST['mensaje10'];
$contenido = "Seccion: " . "Visas de trabajo" . 
"\nMotivo: ". "Certificacion laboral" . 
"\nNombre: " . $nombre . 
"\nApellidos : " . $apellidos .
"\nCorreo: " . $correo . 
"\nTelefono: " . $numero . 
"\nMensaje: " . $mensaje;
    if (mail($destino, $asunto, $contenido))
    echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente.');</script>";
    echo "<script type='text/javascript'>window.location.href='../../paginas/Visas de trabajo/visasdetrabajo.html';</script>";

?>