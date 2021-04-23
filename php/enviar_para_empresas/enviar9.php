<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud Tramite para empresas y empleadores';
$nombre = $_POST['nombre9'];
$apellidos = $_POST['apellidos9'];
$correo = $_POST['email9'];
$numero = $_POST['numero9'];
$mensaje = $_POST['mensaje9'];
$empresa = $_POST['empresa9'];
$subject = $_POST['subject9'];
$trabajadores = $_POST['trabajadores9'];
$tiponegocio = $_POST['tiponegocio9'];
$negocio = $_POST['negocio9'];
$tipotrabajo = $_POST['tipotrabajo9'];
$salario = $_POST['salario9'];
$utilidades = $_POST['utilidades9'];
$diafechainicio = $_POST['diafechainicio9'];
$mesfechainicio = $_POST['mesfechainicio9'];
$añofechainicio = $_POST['añofechainicio9'];
$diafechafin = $_POST['diafechafin9'];
$mesfechafin = $_POST['mesfechafin9'];
$añofechafin = $_POST['añofechafin9'];
$contenido = 
"Seccion: " . "Tramites para empresas y empleadores" . 
             "\nMotivo: ". "Clasificacion de visas" . 
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