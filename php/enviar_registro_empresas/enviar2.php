<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud para Registro de empresas';
$nombre = $_POST['nombre2'];
$apellidos = $_POST['apellidos2'];
$correo = $_POST['email2'];
$numero = $_POST['numero2'];
$mensaje = $_POST['mensaje2'];
$empresa = $_POST['empresa2'];
$subject = $_POST['subject2'];
$trabajadores = $_POST['trabajadores2'];
$tiponegocio = $_POST['tiponegocio2'];
$negocio = $_POST['negocio2'];
$tipotrabajo = $_POST['tipotrabajo2'];
$salario = $_POST['salario2'];
$utilidades = $_POST['utilidades2'];
$diafechainicio = $_POST['diafechainicio2'];
$mesfechainicio = $_POST['mesfechainicio2'];
$añofechainicio = $_POST['añofechainicio2'];
$diafechafin = $_POST['diafechafin2'];
$mesfechafin = $_POST['mesfechafin2'];
$añofechafin = $_POST['añofechafin2'];
$contenido = 
"Seccion: " . "Registro de empresas" . 
             "\nMotivo: ". "Agentes" . 
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