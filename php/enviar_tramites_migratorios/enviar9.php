<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud para Tramites migratorios';
$nombre = $_POST['nombre9'];
$apellidos = $_POST['apellidos9'];
$correo = $_POST['email9'];
$numero = $_POST['numero9'];
$mensaje = $_POST['mensaje9'];
$contenido = 
"Seccion: " . "Tramites migratorios" . 
"\nMotivo: ". "FEIA/RECORD" . 
"\nNombre: " . $nombre . 
"\nApellidos : " . $apellidos .
"\nCorreo: " . $correo . 
"\nTelefono: " . $numero . 
"\nMensaje: " . $mensaje;
    if (mail($destino, $asunto, $contenido))
    echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente.');</script>";
    echo "<script type='text/javascript'>window.location.href='../../paginas/Tramites migratorios/tramitesmigratorios.html';</script>";

?>