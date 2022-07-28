<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud Tramite para empresas y empleadores';
$nombre = $_POST['nombre11'];
$apellidos = $_POST['apellidos11'];
$correo = $_POST['email11'];
$numero = $_POST['numero11'];
$mensaje = $_POST['mensaje11'];
$empresa = $_POST['empresa11'];
$subject = $_POST['subject11'];
$trabajadores = $_POST['trabajadores11'];
$tiponegocio = $_POST['tiponegocio11'];
$negocio = $_POST['negocio11'];
$tipotrabajo = $_POST['tipotrabajo11'];
$salario = $_POST['salario11'];
$utilidades = $_POST['utilidades11'];
$diafechainicio = $_POST['diafechainicio11'];
$mesfechainicio = $_POST['mesfechainicio11'];
$añofechainicio = $_POST['añofechainicio11'];
$diafechafin = $_POST['diafechafin11'];
$mesfechafin = $_POST['mesfechafin11'];
$añofechafin = $_POST['añofechafin11'];
$contenido = 
"Seccion: " . "Tramites para empresas y empleadores" . 
             "\nMotivo: ". "Renovaciones" . 
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