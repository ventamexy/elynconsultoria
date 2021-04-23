<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud Tramite para empresas y empleadores';
$nombre = $_POST['nombre7'];
$apellidos = $_POST['apellidos7'];
$correo = $_POST['email7'];
$numero = $_POST['numero7'];
$mensaje = $_POST['mensaje7'];
$empresa = $_POST['empresa7'];
$subject = $_POST['subject7'];
$trabajadores = $_POST['trabajadores7'];
$tiponegocio = $_POST['tiponegocio7'];
$negocio = $_POST['negocio7'];
$tipotrabajo = $_POST['tipotrabajo7'];
$salario = $_POST['salario7'];
$utilidades = $_POST['utilidades7'];
$diafechainicio = $_POST['diafechainicio7'];
$mesfechainicio = $_POST['mesfechainicio7'];
$añofechainicio = $_POST['añofechainicio7'];
$diafechafin = $_POST['diafechafin7'];
$mesfechafin = $_POST['mesfechafin7'];
$añofechafin = $_POST['añofechafin7'];
$contenido = 
"Seccion: " . "Tramites para empresas y empleadores" . 
             "\nMotivo: ". "Viajes al consulado" . 
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
    echo "<script type='text/javascript'>window.location.href='../../paginas/Tramites para empresas y empleadores/tramitesparaempresas.html';</script>";

?>