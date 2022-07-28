<?php

$destino="visas@elynconsultoriainternacional.com";
$asunto = 'Solicitud Tramite para empresas y empleadores';
$nombre = $_POST['nombre3'];
$apellidos = $_POST['apellidos3'];
$correo = $_POST['email3'];
$numero = $_POST['numero3'];
$mensaje = $_POST['mensaje3'];
$empresa = $_POST['empresa3'];
$subject = $_POST['subject3'];
$trabajadores = $_POST['trabajadores3'];
$tiponegocio = $_POST['tiponegocio3'];
$negocio = $_POST['negocio3'];
$tipotrabajo = $_POST['tipotrabajo3'];
$salario = $_POST['salario3'];
$utilidades = $_POST['utilidades3'];
$diafechainicio = $_POST['diafechainicio3'];
$mesfechainicio = $_POST['mesfechainicio3'];
$añofechainicio = $_POST['añofechainicio3'];
$diafechafin = $_POST['diafechafin3'];
$mesfechafin = $_POST['mesfechafin3'];
$añofechafin = $_POST['añofechafin3'];
$contenido = 
"Seccion: " . "Tramites para empresas y empleadores" . 
             "\nMotivo: ". "Cita consular" . 
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