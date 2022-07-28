<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud Tramite para empresas y empleadores';
$nombre = $_POST['nombre8'];
$apellidos = $_POST['apellidos8'];
$correo = $_POST['email8'];
$numero = $_POST['numero8'];
$mensaje = $_POST['mensaje8'];
$empresa = $_POST['empresa8'];
$subject = $_POST['subject8'];
$trabajadores = $_POST['trabajadores8'];
$tiponegocio = $_POST['tiponegocio8'];
$negocio = $_POST['negocio8'];
$tipotrabajo = $_POST['tipotrabajo8'];
$salario = $_POST['salario8'];
$utilidades = $_POST['utilidades8'];
$diafechainicio = $_POST['diafechainicio8'];
$mesfechainicio = $_POST['mesfechainicio8'];
$añofechainicio = $_POST['añofechainicio8'];
$diafechafin = $_POST['diafechafin8'];
$mesfechafin = $_POST['mesfechafin8'];
$añofechafin = $_POST['añofechafin8'];
$contenido = 
"Seccion: " . "Tramites para empresas y empleadores" . 
             "\nMotivo: ". "Pais" . 
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
    echo "<script type='text/javascript'>window.location.href='../../paginas/tramitesParaEmpresasEmpleadores/tramitesparaempresas.html';</script>";

?>