<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solictud para Tramites consulares';
$nombre = $_POST['nombre8'];
$apellidos = $_POST['apellidos8'];
$correo = $_POST['email8'];
$numero = $_POST['numero8'];
$mensaje = $_POST['mensaje8'];
$contenido = 
"Seccion: " . "Tramites consulares" . 
"\nMotivo: ". "Ciudadania derivada" . 
"\nNombre: " . $nombre . 
"\nApellidos : " . $apellidos .
"\nCorreo: " . $correo . 
"\nTelefono: " . $numero . 
"\nMensaje: " . $mensaje;
    if (mail($destino, $asunto, $contenido))
    echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente.');</script>";
    echo "<script type='text/javascript'>window.location.href='../../paginas/../tramitesConsulares/tramitesconsulares.html';</script>";

?>