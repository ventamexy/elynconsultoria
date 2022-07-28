<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud para Registro de empresas';
$nombre = $_POST['nombre4'];
$apellidos = $_POST['apellidos4'];
$correo = $_POST['email4'];
$numero = $_POST['numero4'];
$mensaje = $_POST['mensaje4'];
$empresa = $_POST['empresa4'];
$subject = $_POST['subject4'];
$trabajadores = $_POST['trabajadores4'];
$tiponegocio = $_POST['tiponegocio4'];
$negocio = $_POST['negocio4'];
$tipotrabajo = $_POST['tipotrabajo4'];
$salario = $_POST['salario4'];
$utilidades = $_POST['utilidades4'];
$diafechainicio = $_POST['diafechainicio4'];
$mesfechainicio = $_POST['mesfechainicio4'];
$añofechainicio = $_POST['añofechainicio4'];
$diafechafin = $_POST['diafechafin4'];
$mesfechafin = $_POST['mesfechafin4'];
$añofechafin = $_POST['añofechafin4'];
$contenido = 
"Seccion: " . "Registro de empresas" . 
             "\nMotivo: ". "Socios" . 
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
    echo "<script type='text/javascript'>window.location.href='../../paginas/../registroEmpresas/registrodeempresas.html';</script>";

?>