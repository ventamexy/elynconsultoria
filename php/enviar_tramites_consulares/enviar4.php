<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solictud para Tramites consulares';
$nombre = $_POST['nombre4'];
$apellidos = $_POST['apellidos4'];
$correo = $_POST['email4'];
$numero = $_POST['numero4'];
$mensaje = $_POST['mensaje4'];
$contenido = 
"Seccion: " . "Tramites consulares" . 
"\nMotivo: ". "Pensiones" . 
"\nNombre: " . $nombre . 
"\nApellidos : " . $apellidos .
"\nCorreo: " . $correo . 
"\nTelefono: " . $numero . 
"\nMensaje: " . $mensaje;
    if (mail($destino, $asunto, $contenido))
    echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente.');</script>";
    echo "<script type='text/javascript'>window.location.href='../../paginas/../tramitesConsulares/tramitesconsulares.html';</script>";

?>