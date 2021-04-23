<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud para Tramites migratorios como trabajadores';
$nombre = $_POST['nombre2'];
$apellidos = $_POST['apellidos2'];
$correo = $_POST['email2'];
$numero = $_POST['numero2'];
$mensaje = $_POST['mensaje2'];
$contenido = 
"Seccion: " . "Tramites migratorios como trabajadores" . 
"\nMotivo: ". "Agentes" . 
"\nNombre: " . $nombre . 
"\nApellidos : " . $apellidos .
"\nCorreo: " . $correo . 
"\nTelefono: " . $numero . 
"\nMensaje: " . $mensaje;

    if (mail($destino, $asunto, $contenido))
    echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente.');</script>";
    echo "<script type='text/javascript'>window.location.href='../../paginas/Tramites migratorios como trabajadores/tramitesmigratorioscomotrabajadores.html';</script>";

?>