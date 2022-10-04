window.addEventListener("load", function() {
    
    // --- Inicializar año de inicio
    selectRangoAnios(".contenedor-select-anio-inicio", {propNameSelect:"anioFechaInicio", totalAnios:9});
    // --- Inicializar año de finalización
    selectRangoAnios(".contenedor-select-anio-fin", {propNameSelect:"anioFechaFin", totalAnios:15});

    $(document).on("click", ".btn-enviar", function(){

        $(".cargaSpinner").removeClass("d-none");
        $(".campoValidacion").removeClass("campoValidacion");
        $(".btn-enviar").attr({disabled:true});
        let imgNotificacion = "../../images/iconos-notificaciones/success.png";
        let typeButton = "btn btn-danger";
        let estadoEnvio = false;

        try {
            
            /**
             * 
             * Validaciones
             * 
             */

            let nombre = $("input[name='nombre']");
            let valorNombre = nombre.val().trim();
            if ( valorNombre == "" ) {
                nombre.addClass("campoValidacion");
                throw "El nombre no puede ser vacío.";
            } nombre.removeClass("campoValidacion");


            let apellidoPaterno = $("input[name='apellidoPaterno']");
            let valorApellidoPaterno = apellidoPaterno.val().trim();
            if ( valorApellidoPaterno == "" ) {
                apellidoPaterno.addClass("campoValidacion");
                throw "El apellido paterno no puede ser vacío.";
            } apellidoPaterno.removeClass("campoValidacion");


            let email = $("input[name='email']");
            let expRegularEmail = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
            if ( !expRegularEmail.test(email.val().trim()) ) {
                email.addClass("campoValidacion");
                throw "El correo electrónico es incorrecto.";
            } email.removeClass("campoValidacion");


            let telCelular = $("input[name='telCelular']");
            let valorTelCelular = telCelular.val().trim();
            if ( valorTelCelular.length > 10 || valorTelCelular.length < 10 || !Number.isInteger(valorTelCelular * 1) ) {
                telCelular.addClass("campoValidacion");
                throw "El número de teléfono es incorrecto.";
            } telCelular.removeClass("campoValidacion");
        

            let nombreEmpresa = $("input[name='nombreEmpresa']");
            let valorNombreEmpresa = nombreEmpresa.val().trim();
            if ( valorNombreEmpresa == "" || valorNombreEmpresa.length < 5 || valorNombreEmpresa.length > 100 ) {
                nombreEmpresa.addClass("campoValidacion");
                throw "El nombre de la empresa no puede ser vacío o supera el límite de 100 caracteres";
            } nombreEmpresa.removeClass("campoValidacion");


            let giroEmpresa = $("select[name='giroEmpresa']");
            let valorGiroEmpresa = giroEmpresa.val().trim();
            if ( valorGiroEmpresa < 1 || valorGiroEmpresa > 12 ) {
                giroEmpresa.addClass("campoValidacion");
                throw "El asunto seleccionado es incorrecto.";
            } giroEmpresa.removeClass("campoValidacion");

            let otroGiroEmpresa = $("input[name='otroGiroEmpresa']");
            let valorOtroGiroEmpresa = otroGiroEmpresa.val().trim();
            if ( valorGiroEmpresa == 12 && ( valorOtroGiroEmpresa == "" || valorOtroGiroEmpresa.length < 5 || valorOtroGiroEmpresa.length > 100 ) ) {
                otroGiroEmpresa.addClass("campoValidacion");
                throw "El giro de la empresa especificado no puede ser vacío y no debe se superar un máximo de 100 caracteres.";
            } otroGiroEmpresa.removeClass("campoValidacion");


            let mensaje = $("textarea[name='mensaje']");
            let valorMensaje = mensaje.val().trim();
            if ( valorMensaje == "" || ( valorMensaje.length < 200 || valorMensaje.length > 3500 ) ) {
                mensaje.addClass("campoValidacion");
                throw "El contenido del mensaje no puede ser vacío y debe de tener una longitud mínima de 200 caracteres y máxima de 3500.";
            } mensaje.removeClass("campoValidacion");


            let asuntoSolicitado = $("select[name='asuntoSolicitado']");
            let valorAsuntoSolicitado = asuntoSolicitado.val().trim();
            if ( valorAsuntoSolicitado < 1 || valorAsuntoSolicitado > 11 ) {
                asuntoSolicitado.addClass("campoValidacion");
                throw "El asunto seleccionado es incorrecto.";
            } asuntoSolicitado.removeClass("campoValidacion");
            

            /**
             * 
             * //
             * --- Campos opcionales.
             * //
             * 
             */
            let campoNumeroTrabajadores = $("select[name='numeroTrabajadores']");
            let valorNumeroTrabajadores = campoNumeroTrabajadores.val().trim();
            if ( valorNumeroTrabajadores != 0 && ( valorNumeroTrabajadores < 1 || valorNumeroTrabajadores > 7 ) ) { 
                campoNumeroTrabajadores.addClass("campoValidacion");
                throw "El número apróximado de trabajadores solicitados es incorrecto.";
            } campoNumeroTrabajadores.removeClass("campoValidacion");

            // --- Los campos pasan a ser obligatorios.
            if ( valorNumeroTrabajadores != 0 ) {

                let campoTipoNegocio = $("input[name='tipoNegocio']");
                let valorTipoNegocio = campoTipoNegocio.val().trim();
                if ( valorTipoNegocio.length < 5 || valorTipoNegocio.length > 50 ) {
                    campoTipoNegocio.addClass("campoValidacion");
                    throw "El tipo de negocio debe de detener una longitud mínima de 5 caracteres máximo de 50.";
                } campoTipoNegocio.removeClass("campoValidacion");
    
                let campoNegocioEstacionalCarga = $("input[name='negocioEstacionalCarga']");
                let valorNegocioEstacionalCarga = campoNegocioEstacionalCarga.val().trim();
                if ( valorNegocioEstacionalCarga.length < 5 || valorNegocioEstacionalCarga.length > 50 ) {
                    campoNegocioEstacionalCarga.addClass("campoValidacion");
                    throw "El valor para este campo debe de detener una longitud mínima de 5 caracteres máximo de 50.";
                } campoNegocioEstacionalCarga.removeClass("campoValidacion");
    
                let campoDescripcionTrabajo = $("textarea[name='descripcionTrabajo']");
                let valorDescripcionTrabajo = campoDescripcionTrabajo.val().trim();
                if ( valorDescripcionTrabajo.length < 200 || valorDescripcionTrabajo.length > 3500 ) {
                    campoDescripcionTrabajo.addClass("campoValidacion");
                    throw "La descripción del trabajo debe de detener una longitud mínima de 200 caracteres máximo de 3500.";
                } campoDescripcionTrabajo.removeClass("campoValidacion");
                
                let campoSalarioOfrecido = $("input[name='salarioOfrecido']");
                let valorSalarioOfrecido = campoSalarioOfrecido.val().trim();
                if ( !validarNumeroDecimal( valorSalarioOfrecido ) ) {
                    campoSalarioOfrecido.addClass("campoValidacion");
                    throw "El valor para el campo salario debe ser numérico.";
                } campoSalarioOfrecido.removeClass("campoValidacion");
    
                let campoAlquilerServiciosCostos = $("input[name='alquilerServiciosCostos']");
                let valorAlquilerServiciosCostos = campoAlquilerServiciosCostos.val().trim();
                if ( !validarNumeroDecimal( valorAlquilerServiciosCostos ) ) {
                    campoAlquilerServiciosCostos.addClass("campoValidacion");
                    throw "El valor para el campo de costos de servicios y alquileres para los trabajadores debe ser numérico.";
                } campoAlquilerServiciosCostos.removeClass("campoValidacion");
    
                // --- Fecha de inicio
                let campoDiaFechaInicio = $("select[name='diaFechaInicio']");
                let valorDiaFechaInicio = campoDiaFechaInicio.val().trim();
                if ( valorDiaFechaInicio < 1 || valorDiaFechaInicio > 31 ) {
                    campoDiaFechaInicio.addClass("campoValidacion");
                    throw "El día seleccionado es incorrecto.";
                } campoDiaFechaInicio.removeClass("campoValidacion");
    
                let campoMesFechaInicio = $("select[name='mesFechaInicio']");
                let valorMesFechaInicio = campoMesFechaInicio.val().trim();
                if ( valorMesFechaInicio < 1 || valorMesFechaInicio > 12 ) {
                    campoMesFechaInicio.addClass("campoValidacion");
                    throw "El mes seleccionado es incorrecto.";
                } campoMesFechaInicio.removeClass("campoValidacion");
    
                let campoAnioFechaInicio = $("select[name='anioFechaInicio']");
                let valorAnioFechaInicio = campoAnioFechaInicio.val().trim();
                if ( valorAnioFechaInicio < date.year() ) {
                    campoAnioFechaInicio.addClass("campoValidacion");
                    throw "El año seleccionado debe ser mayor o igual al año actual.";
                } campoAnioFechaInicio.removeClass("campoValidacion");
    
                // --- Fecha fin
                let campoDiaFechaFin = $("select[name='diaFechaFin']");
                let valorDiaFechaFin = campoDiaFechaFin.val().trim();
                if ( valorDiaFechaFin < 1 || valorDiaFechaFin > 31 ) {
                    campoDiaFechaFin.addClass("campoValidacion");
                    throw "El día seleccionado es incorrecto.";
                } campoDiaFechaFin.removeClass("campoValidacion");
    
                let campoMesFechaFin = $("select[name='mesFechaFin']");
                let valorMesFechaFin = campoMesFechaFin.val().trim();
                if ( valorMesFechaFin < 1 || valorMesFechaFin > 12 ) {
                    campoMesFechaFin.addClass("campoValidacion");
                    throw "El mes seleccionado es incorrecto.";
                } campoMesFechaFin.removeClass("campoValidacion");
    
                let campoAnioFechaFin = $("select[name='anioFechaFin']");
                let valorAnioFechaFin = campoAnioFechaFin.val().trim();
                if ( valorAnioFechaFin < date.year() ) {
                    campoAnioFechaFin.addClass("campoValidacion");
                    throw "El año seleccionado debe ser mayor o igual al año actual.";
                } campoAnioFechaFin.removeClass("campoValidacion");

                // --- Validaciones años.

                if ( valorAnioFechaInicio < date.year() ) {
                    throw "El año de inicio no puede ser menor al año actual.";
                }

                if ( valorAnioFechaFin < date.year() ) {
                    throw "El año de finialización no puede ser menor al año actual.";
                }

                if ( valorAnioFechaFin < valorAnioFechaInicio ) {
                    throw "El año de finialización no puede ser menor al año de inicio.";
                }
                
            }
            

            // --- Validación de la contestación del reCaptcha.
            if ( grecaptcha.getResponse().length == 0 ) {
                throw "Necesita solucionar el captcha para seguir con el proceso del envío del email.";
            }

            let frmTramites = $(".frmTramites").serialize();

            let urlServidor = "https://empleosmexy.com/server/controllers/cEnviarEmail.php";
            if ( window.location.host === "local.elynconsultoriainternacional.com" ) {
                urlServidor = "http://local.empleosmexy.com/server/controllers/cEnviarEmail.php";
            }

            $.ajax({

                data:frmTramites+"&tipoPeticion=enviarEmailTramiteEmpresa",
                url:urlServidor,
                method:"POST",
                dataType:"JSON",
                success:function(data) {
                    
                    try {
                        
                        if ( data["validaciones"] ) {
                            imgNotificacion = "../../images/iconos-notificaciones/warning.png";
                        }

                        if ( data["estadoEnvioCorreo"] == true ) {
                            typeButton = "btn btn-success";
                            $("input, textarea").val("");
                            $("select option").prop("selected", 0);
                            estadoEnvio = true;
                        } else {
                            imgNotificacion = "../../images/iconos-notificaciones/error.png";
                        }

                        throw data["mensaje"];

                    } catch (error) {
                        
                        bootbox.alert({
                            message: error,
                            className: 'd-flex align-items-center'
                        });
                        
                        $(".bootbox-accept").addClass(typeButton);
                        $(".btn-enviar").attr({disabled:false});
                        $(".cargaSpinner").addClass("d-none");

                        addImageNotificacion(imgNotificacion, estadoEnvio);
                        grecaptcha.reset();

                    }

                }

            });

        } catch (error) {

            imgNotificacion = "../../images/iconos-notificaciones/warning.png";

            bootbox.alert({
                message: error,
                className: 'd-flex align-items-center'
            });

            $(".bootbox-accept").addClass("btn "+typeButton);
            $(".btn-enviar").attr({disabled:false});
            $(".cargaSpinner").addClass("d-none");

            addImageNotificacion(imgNotificacion, estadoEnvio);
            grecaptcha.reset();

        }

    });

    function addImageNotificacion( imgNotificacion = "", estadoEnvio) {

        let contenedorImagenNotificacion = $("<div>").attr({class:"contenedor-img-notificacion"});
        let imagenNotificacion = $("<img>").attr({class:"icono-notificacion", src:imgNotificacion});
        contenedorImagenNotificacion.append(imagenNotificacion);
        let botonCierre = ".bootbox-accept.btn-danger";
        if ( estadoEnvio ) {
            botonCierre = ".bootbox-accept.btn-success";
        }

        contenedorImagenNotificacion.insertBefore(botonCierre);

    }


    // --- Cambio a otros giros empresa
    $(document).on("change", "select[name='giroEmpresa']", function() {

        let tipoGiroEmpresa = $(this)[0].value.trim();
        let contenedorOtroGiroEmpresa = $(".contenedorOtroGiroEmpresa");

        if ( tipoGiroEmpresa == 12 ) {
            contenedorOtroGiroEmpresa.removeClass("d-none");
            return;
        }

        contenedorOtroGiroEmpresa.addClass("d-none");

    });

    // --- Cambio a campos obligatorios.
    $(document).on("change", "select[name='numeroTrabajadores']", function() {

        try {
            
            let numeroTrabajadores = $(this)[0].value.trim();
            if ( numeroTrabajadores < 0 || numeroTrabajadores > 7 || !validarNumeroEntero(numeroTrabajadores) ) {
                throw "El valor para el número de trabajadores solicitados es incorrecto.";
            }

            let contenedorCamposObligatorios = $(".contenedor-h2b .campoObligatorio");

            if ( numeroTrabajadores > 0 ) {
                contenedorCamposObligatorios.removeClass("d-none");
                return;
            }

            contenedorCamposObligatorios.addClass("d-none");

        } catch (error) {
            
            bootbox.alert({
                message: error,
                className: 'd-flex align-items-center'
            });

            $(".bootbox-accept").addClass("btn btn-danger");
            addImageNotificacion(imgNotificacion, estadoEnvio);

        }

    });
    
});