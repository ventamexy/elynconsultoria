<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud para Tramites migratorios como trabajadores';
$nombre = $_POST['nombre11'];
$apellidos = $_POST['apellidos11'];
$correo = $_POST['email11'];
$numero = $_POST['numero11'];
$mensaje = $_POST['mensaje11'];
$contenido = 
"Seccion: " . "Tramites migratorios como trabajadores" . 
"\nMotivo: ". "Cantantes" . 
"\nNombre: " . $nombre . 
"\nApellidos : " . $apellidos .
"\nCorreo: " . $correo . 
"\nTelefono: " . $numero . 
"\nMensaje: " . $mensaje;

    if (mail($destino, $asunto, $contenido))
    echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente.');</script>";
    echo "<script type='text/javascript'>window.location.href='../../paginas/Tramites migratorios como trabajadores/tramitesmigratorioscomotrabajadores.html';</script>";

?>