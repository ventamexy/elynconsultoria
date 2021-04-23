<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud para Visas de trabajo';
$nombre = $_POST['nombre11'];
$apellidos = $_POST['apellidos11'];
$correo = $_POST['email11'];
$numero = $_POST['numero11'];
$mensaje = $_POST['mensaje11'];
$contenido = "Seccion: " . "Visas de trabajo" . 
"\nMotivo: ". "Clasificacion de visa" . 
"\nNombre: " . $nombre . 
"\nApellidos : " . $apellidos .
"\nCorreo: " . $correo . 
"\nTelefono: " . $numero . 
"\nMensaje: " . $mensaje;
    if (mail($destino, $asunto, $contenido))
    echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente.');</script>";
    echo "<script type='text/javascript'>window.location.href='../../paginas/Visas de trabajo/visasdetrabajo.html';</script>";

?>