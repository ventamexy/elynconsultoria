<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud para Registro de empresas';
$nombre = $_POST['nombre5'];
$apellidos = $_POST['apellidos5'];
$correo = $_POST['email5'];
$numero = $_POST['numero5'];
$mensaje = $_POST['mensaje5'];
$empresa = $_POST['empresa5'];
$subject = $_POST['subject5'];
$trabajadores = $_POST['trabajadores5'];
$tiponegocio = $_POST['tiponegocio5'];
$negocio = $_POST['negocio5'];
$tipotrabajo = $_POST['tipotrabajo5'];
$salario = $_POST['salario5'];
$utilidades = $_POST['utilidades5'];
$diafechainicio = $_POST['diafechainicio5'];
$mesfechainicio = $_POST['mesfechainicio5'];
$añofechainicio = $_POST['añofechainicio5'];
$diafechafin = $_POST['diafechafin5'];
$mesfechafin = $_POST['mesfechafin5'];
$añofechafin = $_POST['añofechafin5'];
$contenido = 
"Seccion: " . "Registro de empresas" . 
             "\nMotivo: ". "Relaciones publicas" . 
             "\nNombre: " . $nombre . 
             "\nApellidos : " . $apellidos .
             "\nCorreo: " . $correo . 
             "\nTelefono: " . $numero . 
             "\nCompania: " . $empresa .
             "\nSubject: " . $subject .
             "\nMensaje: " . $mensaje .
             "\n            " .
             "\nRequerimientos opcionales" .
            "\nNumero de trabajadores requeridos: " . $trabajadores .
            "\nTipo de negocio: " . $tiponegocio .
            "\nNegocio seasonal or peakload?: " . $negocio .
            "\nDescripcion del trabajo: " . $tipotrabajo .
            "\nSalario a ofrecer: " . "$" . $salario .
            "\nCostos estimados de renta y utilidades para el trabajador: " . "$" . $utilidades .
            "\nFecha de inicio, de: " . $diafechainicio . "/" . $mesfechainicio . "/" . $añofechainicio . " a " . $diafechafin . "/" . $mesfechafin . "/" . $añofechafin;

    if (mail($destino, $asunto, $contenido))
    echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente.');</script>";
    echo "<script type='text/javascript'>window.location.href='../../paginas/Registro de empresas/registrodeempresas.html';</script>";

?>