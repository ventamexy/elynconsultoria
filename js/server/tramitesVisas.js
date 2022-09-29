window.addEventListener("load", function() {
    
    $(document).on("click", ".btn-enviar", function(){

        $(".cargaSpinner").removeClass("d-none");
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

                data:frmTramites+"&tipoPeticion=enviarEmailTramiteVisa",
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

});