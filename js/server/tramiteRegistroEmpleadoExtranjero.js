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
            if ( valorNombre == "" || valorNombre.length < 3  ) {
                nombre.addClass("campoValidacion");
                throw "El nombre no puede ser vacío.";
            } nombre.removeClass("campoValidacion");


            let campoApellidoPaterno = $("input[name='apellidoPaterno']");
            let valorApellidoPaterno = campoApellidoPaterno.val().trim();
            if ( valorApellidoPaterno == "" ) {
                campoApellidoPaterno.addClass("campoValidacion");
                throw "El apellido paterno no puede ser vacío.";
            } campoApellidoPaterno.removeClass("campoValidacion");

            
            let campoSexo = $("select[name='sexo']");
            let valorSexo = campoSexo.val().trim();
            if ( valorSexo != "Masculino" && valorSexo != "Femenino" ) {
                campoSexo.addClass("campoValidacion");
                throw "El sexo seleccionado es incorrecto.";
            } campoSexo.removeClass("campoValidacion");


            let campoEdad = $("input[name='edad']");
            let valorEdad = campoEdad.val().trim();
            if ( !validarNumeroEntero( valorEdad ) || valorEdad < 18 ) {
                campoEdad.addClass("campoValidacion");
                throw "El valor para el campo edad es incorrecto y/o no puede registrar a un menor de edad.";
            } campoEdad.removeClass("campoValidacion");

            
            let campoEstadoCivil = $("select[name='estadocivil']");
            let valorEstadoCivil = campoEstadoCivil.val().trim();
            if ( valorEstadoCivil != "Soltero" && valorEstadoCivil != "Casado" && valorEstadoCivil != "Unión libre" ) {
                campoEstadoCivil.addClass("campoValidacion");
                throw "El estado civil seleccionado es incorrecto.";
            } campoEstadoCivil.removeClass("campoValidacion");


            let campoEscolaridad = $("select[name='escolaridad']");
            let valorEscolaridad = campoEscolaridad.val().trim();
            if ( ( valorEscolaridad < 1 || valorEscolaridad > 7 ) || !validarNumeroEntero( valorEscolaridad ) ) {
                campoEscolaridad.addClass("campoValidacion");
                throw "La escolaridad seleccionada es incorrecta.";
            } campoEscolaridad.removeClass("campoValidacion");


            let campoEmail = $("input[name='email']");
            let valorEmail = campoEmail.val().trim();
            if ( !validarEmail( valorEmail ) ) {
                campoEmail.addClass("campoValidacion");
                throw "El email proporcionado no tiene un formato válido.";
            } campoEmail.removeClass("campoValidacion");


            let telCelular = $("input[name='numero']");
            let valorTelCelular = telCelular.val().trim();
            if ( valorTelCelular.length > 10 || valorTelCelular.length < 10 || !validarNumeroEntero( valorTelCelular ) ) {
                telCelular.addClass("campoValidacion");
                throw "El número de teléfono es incorrecto.";
            } telCelular.removeClass("campoValidacion");


            let campoPaisInteresado = $("select[name='paisInteresado']");
            let valorPaisInteresado = campoPaisInteresado.val().trim();
            if ( valorPaisInteresado < 1 || valorPaisInteresado > 3 || !validarNumeroEntero( valorPaisInteresado ) ) {
                campoPaisInteresado.addClass("campoValidacion");
                throw "El país seleccionado es incorrecto.";
            } campoPaisInteresado.removeClass("campoValidacion");


            if ( valorPaisInteresado == 3 ) {
                let campoOtroPaisInteresado = $("input[name='otroPaisInteresado']");
                let valorCampoOtroPaisInteresado = campoOtroPaisInteresado.val().trim();
                if ( valorCampoOtroPaisInteresado == "" || valorCampoOtroPaisInteresado.length < 3 ) {
                    campoOtroPaisInteresado.addClass("campoValidacion");
                    throw "El valor para el campo de otro país es incorrecto.";   
                }  campoOtroPaisInteresado.addClass("campoValidacion");
            }
            
            // ---
            let campoOficio = $("input[name='oficio']");
            let valorCampoOficio = campoOficio.val().trim();
            if ( valorCampoOficio == "" || valorCampoOficio.length < 3) {
                campoOficio.addClass("campoValidacion");
                throw "El campo oficio no puede ser vacío y debe de tener una longitud mímina de 3 caracteres.";
            } campoOficio.removeClass("campoValidacion");

            
            let campoPrimeraVezTramite = $("select[name='primeravez']");
            let valorPrimeraVezTramite = campoPrimeraVezTramite.val().trim();
            if ( valorPrimeraVezTramite != "Si" && valorPrimeraVezTramite != "No"  ) {
                campoPrimeraVezTramite.addClass("campoValidacion");
                throw "La opción seleccionada para el campo primera vez del trámite es incorrecta.";
            } campoPrimeraVezTramite.removeClass("campoValidacion");


            let campoTotalVecesTramite = $("input[name='totalVecesTramite']");
            let valorTotalVecesTramite = campoTotalVecesTramite.val().trim();
            if ( valorTotalVecesTramite <= 0 || !validarNumeroEntero( valorTotalVecesTramite )) {
                campoTotalVecesTramite.addClass("campoValidacion");
                throw "El valor para el campo de total de veces intentado es incorrecto.";
            } campoTotalVecesTramite.removeClass("campoValidacion");

            
            let campoRenovacion = $("select[name='renovacion']");
            let valorRenovacion = campoRenovacion.val().trim();
            if ( valorRenovacion != "Si" && valorRenovacion != "No"  ) {
                campoRenovacion.addClass("campoValidacion");
                throw "La opción seleccionada para el campo de renovación es incorrecta.";
            } campoRenovacion.removeClass("campoValidacion");


            let campoTrabajo = $("input[name='trabajo']");
            let valorTrabajo = campoTrabajo.val().trim();
            if ( valorTrabajo == "" || valorTrabajo.length < 5 ) {
                campoTrabajo.addClass("campoValidacion");
                throw "El valor para el campo trabajo actual no puede ser vacío y debe tener una longitud mínima de 5 caracteres.";
            } campoTrabajo.removeClass("campoValidacion");


            let campoNacionalidad = $("input[name='nacionalidad']");
            let valorNacionalidad = campoNacionalidad.val().trim();
            if ( valorNacionalidad == "" || valorNacionalidad.length < 5 ) {
                campoNacionalidad.addClass("campoValidacion");
                throw "El valor para el campo de nacionalidad no puede ser vacío y debe tener una longitud mínima de 5 caracteres.";
            } campoNacionalidad.removeClass("campoValidacion");


            let campoCiudad = $("input[name='ciudadvive']");
            let valorCiudad = campoCiudad.val().trim();
            if ( valorCiudad == "" || valorCiudad.length < 3 ) {
                campoCiudad.addClass("campoValidacion");
                throw "El valor para el campo ciudad donde vive actualmente no puede ser vacío y debe tener una longitud mínima de 3 caracteres.";
            } campoCiudad.removeClass("campoValidacion");
            

            let campoDeportaciones = $("select[name='deportaciones']");
            let valorDeportaciones = campoDeportaciones.val().trim();
            if ( valorDeportaciones != "Si" && valorDeportaciones != "No" ) {
                campoDeportaciones.addClass("campoValidacion");
                throw "El valor para el campo deportaciones es incorrecto.";
            } campoDeportaciones.removeClass("campoValidacion");


            let mensaje = $("textarea[name='mensaje']");
            let valorMensaje = mensaje.val().trim();
            if ( valorMensaje == "" || ( valorMensaje.length < 200 || valorMensaje.length > 3500 ) ) {
                mensaje.addClass("campoValidacion");
                throw "El contenido del mensaje no puede ser vacío y debe de tener una longitud mínima de 200 caracteres y máxima de 3500.";
            } mensaje.removeClass("campoValidacion");


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

                data:frmTramites+"&tipoPeticion=enviarEmailRegistroEmpleadosExtranjero",
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
    $(document).on("change", "select[name='paisInteresado']", function() {

        let paisInteresado = $(this)[0].value.trim();
        let contenedorOtroPais = $(".contenedor-otro-pais");

        if ( paisInteresado == 3 ) {
            contenedorOtroPais.removeClass("d-none");
            return;
        }

        contenedorOtroPais.addClass("d-none");

    });

    // --- Primera vez para el trámite para el extranjero.
    $(document).on("change", "select[name='primeravez']", function() {

        let primeraVezTramite = $(this)[0].value.trim();
        let contenedorOtroPais = $(".contenedor-total-veces-tramite");

        if ( primeraVezTramite == "No" ) {
            contenedorOtroPais.removeClass("d-none");
            return;
        }

        contenedorOtroPais.addClass("d-none");

    });
    
});