<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud para Tramites migratorios';
$nombre = $_POST['nombre12'];
$apellidos = $_POST['apellidos12'];
$correo = $_POST['email12'];
$numero = $_POST['numero12'];
$mensaje = $_POST['mensaje12'];
$contenido = 
"Seccion: " . "Tramites migratorios" . 
"\nMotivo: ". "Perdones" . 
"\nNombre: " . $nombre . 
"\nApellidos : " . $apellidos .
"\nCorreo: " . $correo . 
"\nTelefono: " . $numero . 
"\nMensaje: " . $mensaje;
    if (mail($destino, $asunto, $contenido))
    echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente.');</script>";
    echo "<script type='text/javascript'>window.location.href='../../paginas/Tramites migratorios/tramitesmigratorios.html';</script>";

?>