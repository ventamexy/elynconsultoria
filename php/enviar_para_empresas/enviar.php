<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud Tramite para empresas y empleadores';
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['email'];
$numero = $_POST['numero'];
$mensaje = $_POST['mensaje'];
$empresa = $_POST['empresa'];
$subject = $_POST['subject'];
$trabajadores = $_POST['trabajadores'];
$tiponegocio = $_POST['tiponegocio'];
$negocio = $_POST['negocio'];
$tipotrabajo = $_POST['tipotrabajo'];
$salario = $_POST['salario'];
$utilidades = $_POST['utilidades'];
$diafechainicio = $_POST['diafechainicio'];
$mesfechainicio = $_POST['mesfechainicio'];
$añofechainicio = $_POST['añofechainicio'];
$diafechafin = $_POST['diafechafin'];
$mesfechafin = $_POST['mesfechafin'];
$añofechafin = $_POST['añofechafin'];
$contenido = 
"Seccion: " . "Tramites para empresas y empleadores" . 
             "\nMotivo: ". "Reclutamiento de personal" . 
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