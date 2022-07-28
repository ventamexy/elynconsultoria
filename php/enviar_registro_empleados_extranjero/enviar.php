<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud para Registro de empleados en el extranjero';
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['email'];
$numero = $_POST['numero'];
$mensaje = $_POST['mensaje'];
$pais = $_POST['paisovisas'];
$profesion = $_POST['oficio'];
$primeravez = $_POST['primeravez'];
$renovacion = $_POST['renovacion'];
$clasificacion = $_POST['clasificacion'];
$sexo = $_POST['sexo'];
$edad = $_POST['edad'];
$estadocivil = $_POST['estadocivil'];
$escolaridad = $_POST['escolaridad'];
$trabajo = $_POST['trabajo'];
$nacionalidad = $_POST['nacionalidad'];
$ciudadvive = $_POST['ciudadvive'];
$salidas = $_POST['salidas'];
$deportaciones = $_POST['deportaciones'];
$contenido = 
"Seccion: " . "Registro de empleados en el extranjero" . 
             "\nNombre: " . $nombre . 
             "\nApellidos: " . $apellidos .
             "\nCorreo: " . $correo . 
             "\nTelefono: " . $numero . 
             "\nPais o visas: " . $pais.
             "\nOficio/Profesion: " . $profesion .
             "\nPrimera vez: " . $primeravez .
             "\nRenovacion: " . $renovacion .
             "\nClasificacion de visa: " .$clasificacion .
             "\nSexo: " . $sexo .
             "\nEdad: " .$edad .
             "\nEstado civil: " . $estadocivil .
             "\nEscolaridad: " . $escolaridad .
             "\nTrabajo actual: " . $trabajo . 
             "\nNacionalidad: " . $nacionalidad .
             "\nCiudad donde vive: " . $ciudadvive .
             "\nSalidas voluntarias: " . $salidas .
             "\nDeportaciones: " . $deportaciones .
             "\nMensaje: " . $mensaje;


    if (mail($destino, $asunto, $contenido))
    echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente.');</script>";
    echo "<script type='text/javascript'>window.location.href='../../paginas/../registro_empleados/registrodeempleados.html';</script>";

?>