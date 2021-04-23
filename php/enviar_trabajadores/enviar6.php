<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud para Tramites migratorios como trabajadores';
$nombre = $_POST['nombre6'];
$apellidos = $_POST['apellidos6'];
$correo = $_POST['email6'];
$numero = $_POST['numero6'];
$mensaje = $_POST['mensaje6'];
$contenido = 
"Seccion: " . "Tramites migratorios como trabajadores" . 
"\nMotivo: ". "Musicos" . 
"\nNombre: " . $nombre . 
"\nApellidos : " . $apellidos .
"\nCorreo: " . $correo . 
"\nTelefono: " . $numero . 
"\nMensaje: " . $mensaje;

    if (mail($destino, $asunto, $contenido))
    echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente.');</script>";
    echo "<script type='text/javascript'>window.location.href='../../paginas/Tramites migratorios como trabajadores/tramitesmigratorioscomotrabajadores.html';</script>";

?>