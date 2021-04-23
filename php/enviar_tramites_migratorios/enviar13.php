<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud para Tramites migratorios';
$nombre = $_POST['nombre13'];
$apellidos = $_POST['apellidos13'];
$correo = $_POST['email13'];
$numero = $_POST['numero13'];
$mensaje = $_POST['mensaje13'];
$contenido = 
"Seccion: " . "Tramites migratorios" . 
"\nMotivo: ". "Pemisos humanitarios" . 
"\nNombre: " . $nombre . 
"\nApellidos : " . $apellidos .
"\nCorreo: " . $correo . 
"\nTelefono: " . $numero . 
"\nMensaje: " . $mensaje;
    if (mail($destino, $asunto, $contenido))
    echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente.');</script>";
    echo "<script type='text/javascript'>window.location.href='../../paginas/Tramites migratorios/tramitesmigratorios.html';</script>";

?>