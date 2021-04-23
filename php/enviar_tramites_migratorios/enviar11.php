<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud para Tramites migratorios';
$nombre = $_POST['nombre11'];
$apellidos = $_POST['apellidos11'];
$correo = $_POST['email11'];
$numero = $_POST['numero11'];
$mensaje = $_POST['mensaje11'];
$contenido = 
"Seccion: " . "Tramites migratorios" . 
"\nMotivo: ". "VAWA" . 
"\nNombre: " . $nombre . 
"\nApellidos : " . $apellidos .
"\nCorreo: " . $correo . 
"\nTelefono: " . $numero . 
"\nMensaje: " . $mensaje;
    if (mail($destino, $asunto, $contenido))
    echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente.');</script>";
    echo "<script type='text/javascript'>window.location.href='../../paginas/Tramites migratorios/tramitesmigratorios.html';</script>";

?>