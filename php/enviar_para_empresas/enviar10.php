<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud Tramite para empresas y empleadores';
$nombre = $_POST['nombre10'];
$apellidos = $_POST['apellidos10'];
$correo = $_POST['email10'];
$numero = $_POST['numero10'];
$mensaje = $_POST['mensaje10'];
$empresa = $_POST['empresa10'];
$subject = $_POST['subject10'];
$trabajadores = $_POST['trabajadores10'];
$tiponegocio = $_POST['tiponegocio10'];
$negocio = $_POST['negocio10'];
$tipotrabajo = $_POST['tipotrabajo10'];
$salario = $_POST['salario10'];
$utilidades = $_POST['utilidades10'];
$diafechainicio = $_POST['diafechainicio10'];
$mesfechainicio = $_POST['mesfechainicio10'];
$añofechainicio = $_POST['añofechainicio10'];
$diafechafin = $_POST['diafechafin10'];
$mesfechafin = $_POST['mesfechafin10'];
$añofechafin = $_POST['añofechafin10'];
$contenido = 
"Seccion: " . "Tramites para empresas y empleadores" . 
             "\nMotivo: ". "Perfil empresarial" . 
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