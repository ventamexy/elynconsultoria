<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solictud para Tramites consulares';
$nombre = $_POST['nombre11'];
$apellidos = $_POST['apellidos11'];
$correo = $_POST['email11'];
$numero = $_POST['numero11'];
$mensaje = $_POST['mensaje11'];
$contenido = 
"Seccion: " . "Tramites consulares" . 
"\nMotivo: ". "Loteria de visas" . 
"\nNombre: " . $nombre . 
"\nApellidos : " . $apellidos .
"\nCorreo: " . $correo . 
"\nTelefono: " . $numero . 
"\nMensaje: " . $mensaje;
    if (mail($destino, $asunto, $contenido))
    echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente.');</script>";
    echo "<script type='text/javascript'>window.location.href='../../paginas/../tramitesConsulares/tramitesconsulares.html';</script>";

?>