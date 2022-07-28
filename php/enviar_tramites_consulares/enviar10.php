<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solictud para Tramites consulares';
$nombre = $_POST['nombre10'];
$apellidos = $_POST['apellidos10'];
$correo = $_POST['email10'];
$numero = $_POST['numero10'];
$mensaje = $_POST['mensaje10'];
$contenido = 
"Seccion: " . "Tramites consulares" . 
"\nMotivo: ". "Registro de escuelas" . 
"\nNombre: " . $nombre . 
"\nApellidos : " . $apellidos .
"\nCorreo: " . $correo . 
"\nTelefono: " . $numero . 
"\nMensaje: " . $mensaje;
    if (mail($destino, $asunto, $contenido))
    echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente.');</script>";
    echo "<script type='text/javascript'>window.location.href='../../paginas/../tramitesConsulares/tramitesconsulares.html';</script>";

?>