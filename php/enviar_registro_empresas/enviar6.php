<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud para Registro de empresas';
$nombre = $_POST['nombre6'];
$apellidos = $_POST['apellidos6'];
$correo = $_POST['email6'];
$numero = $_POST['numero6'];
$mensaje = $_POST['mensaje6'];
$empresa = $_POST['empresa6'];
$subject = $_POST['subject6'];
$trabajadores = $_POST['trabajadores6'];
$tiponegocio = $_POST['tiponegocio6'];
$negocio = $_POST['negocio6'];
$tipotrabajo = $_POST['tipotrabajo6'];
$salario = $_POST['salario6'];
$utilidades = $_POST['utilidades6'];
$diafechainicio = $_POST['diafechainicio6'];
$mesfechainicio = $_POST['mesfechainicio6'];
$añofechainicio = $_POST['añofechainicio6'];
$diafechafin = $_POST['diafechafin6'];
$mesfechafin = $_POST['mesfechafin6'];
$añofechafin = $_POST['añofechafin6'];
$contenido = 
"Seccion: " . "Registro de empresas" . 
             "\nMotivo: ". "Organizaciones gubernamentales publicas" . 
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