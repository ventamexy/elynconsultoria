<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solictud para Tramites consulares';
$nombre = $_POST['nombre5'];
$apellidos = $_POST['apellidos5'];
$correo = $_POST['email5'];
$numero = $_POST['numero5'];
$mensaje = $_POST['mensaje5'];
$contenido = 
"Seccion: " . "Tramites consulares" . 
"\nMotivo: ". "Acreditacion de estudios" . 
"\nNombre: " . $nombre . 
"\nApellidos : " . $apellidos .
"\nCorreo: " . $correo . 
"\nTelefono: " . $numero . 
"\nMensaje: " . $mensaje;
    if (mail($destino, $asunto, $contenido))
    echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente.');</script>";
    echo "<script type='text/javascript'>window.location.href='../../paginas/Tramites consulares/tramitesconsulares.html';</script>";

?>