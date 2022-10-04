window.addEventListener("load", function() {
        
    $(document).on("click", ".reload-captcha", function() {
        grecaptcha.reset();
    });

});


// --- Validar número entero
function validarNumeroEntero( valor = "" ) {

    if ( !(/^[0-9]\d*$/.test(valor)) ) {
        return false;
    }

    return true;

}

// --- Validar número decimal
function validarNumeroDecimal( valor = "" ) {

    if ( !(/^[0-9]\d*(\.\d+)?$/.test(valor)) ) {
        return false;
    }

    return true;

}

// --- Funcion para generar select de un rango de años.
function selectRangoAnios( contenedor, objPropiedades ) {
    
    let propNameSelect = objPropiedades.propNameSelect;
    let selectAnio = $("<select>").attr({name:propNameSelect, class:"form-select"});
    let totalOptAnios = objPropiedades.totalAnios;
    let indexAnioOpt = 1;
    let anioActual = date.year();

    while ( indexAnioOpt <= totalOptAnios ) {
        if ( indexAnioOpt > 1 ) { anioActual++; }
        let optAnio = $("<option>", {value:anioActual}).text(anioActual);
        selectAnio.append(optAnio);
        indexAnioOpt++;
    }

    $(contenedor).empty().append(selectAnio);

}

let date = {
    year : function() {
        return new Date().getFullYear();
    },
}