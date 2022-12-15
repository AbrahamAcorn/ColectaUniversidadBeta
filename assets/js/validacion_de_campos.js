function comprobarCantidad() {
    let dato = document.getElementById('caja_otra_cantidad');
    if(dato.value < 10 || dato.value > 1000000) {
        dato.style.webkitTextFillColor = "red";
        dato.style.webkitTextStroke = "red";
    } else {
        dato.style.webkitTextFillColor = "white";
        dato.style.webkitTextStroke = "white";
    }
}

//OCULTAR MENSAJE NOMBRE
function ocultarMensajeNombre() {
    document.getElementById("mensajes_nombre").style.display = "none";
}

//OCULTAR MENSAJE NOMBRE
function ocultarMensajePrimerAp() {
    document.getElementById("mensajes_primer_apellido").style.display = "none";
}

//OCULTAR MENSAJE NOMBRE
function ocultarMensajeSegundoAp() {
    document.getElementById("mensajes_segundo_apellido").style.display = "none";
}

//OCULTAR MENSAJE TELEFONO
function ocultarMensajeTelefono() {
    document.getElementById("mensajes_telefono").style.display = "none";
}

//OCULTAR MENSAJE CORREO
function ocultarMensajeCorreo() {
    document.getElementById("mensajes_correo").style.display = "none";
}

//OCULTAR MENSAJE FECHA GRADUACION
function ocultarMensajeFechaGraduacion() {
    document.getElementById("mensajes_fecha_graduacion").style.display = "none";
}

//OCULTAR MENSAJE BANCO
function ocultarMensajeBanco() {
    document.getElementById("mensajes_banco").style.display = "none";
}

//OCULTAR MENSAJE METODO PAGO
function ocultarMensajeMetodoPago() {
    document.getElementById("mensajes_metodo_pago").style.display = "none";
}

//OCULTAR MENSAJE NUMERO DE TARJETA
function ocultarMensajeNumTarjeta() {
    document.getElementById("mensajes_num_tarjeta").style.display = "none";
}

//OCULTAR MENSAJE VENCIMIENTO
function ocultarMensajeVencimiento() {
    document.getElementById("mensajes_vencimiento").style.display = "none";
}

//OCULTAR MENSAJE PLAZO
function ocultarMensajePlazo() {
    document.getElementById("mensajes_plazo").style.display = "none";
}

//OCULTAR MENSAJE MENSUALIDAD
function ocultarMensajeMensualidad() {
    document.getElementById("mensajes_mensualidades").style.display = "none";
}

//OCULTAR MENSAJE COMPROBANTE
function ocultarMensajeComprobante() {
    document.getElementById("mensajes_comprobante").style.display = "none";
}

//OCULTAR MENSAJE CALLE
function ocultarMensajeCalle() {
    document.getElementById("mensajes_calle").style.display = "none";
}

//OCULTAR MENSAJE COLONIA
function ocultarMensajeColonia() {
    document.getElementById("mensajes_colonia").style.display = "none";
}

//OCULTAR MENSAJE MUNICIPIO
function ocultarMensajeMunicipio() {
    document.getElementById("mensajes_municipio").style.display = "none";
}

//OCULTAR MENSAJE CP
function ocultarMensajeCp() {
    document.getElementById("mensajes_cp").style.display = "none";
}

//OCULTAR MENSAJE ESTADO
function ocultarMensajeEstado() {
    document.getElementById("mensajes_estado").style.display = "none";
}

//OCULTAR MENSAJE TERMINOS
function ocultarMensajeTerminos() {
    document.getElementById("mensajes_terminos").style.display = "none";
}

var formula = document.getElementById('formulario');
formula.addEventListener('submit', e => {
    e.preventDefault();
    let todoCorrecto = true;

    //VALIDACION DE RADIOS DE CANTIDAD Y CAJA DE CANTIDAD
    let radioSeleccionado = document.querySelector('input[name="budget"]:checked');
    let valorCajaCantidad = document.getElementById('caja_otra_cantidad').value;
    if (radioSeleccionado) {
        document.getElementById('mensajes_radio_cantidades').style.display = "none";
        if (radioSeleccionado.value == "otro") {
            if (valorCajaCantidad == "") {
                document.getElementById("mensajes_cantidad").innerHTML = "* Ingresa una cantidad";
                document.getElementById("mensajes_cantidad").style.display = "block";
                todoCorrecto = false;
            } else {
                if (valorCajaCantidad < 10) {
                    document.getElementById("mensajes_cantidad").innerHTML = "* Ingresa una cantidad mayor a 10";
                    document.getElementById("mensajes_cantidad").style.display = "block";
                    todoCorrecto = false;
                } else if (valorCajaCantidad > 1000000) {
                    document.getElementById("mensajes_cantidad").innerHTML = "* Ingresa una cantidad menor a 1000000";
                    document.getElementById("mensajes_cantidad").style.display = "block";
                    todoCorrecto = false;
                } else {
                    document.getElementById("mensajes_cantidad").style.display = "none";
                }
            }
        }
    } else {
        document.getElementById('mensajes_radio_cantidades').style.display = "block";
        todoCorrecto = false;
    }

    //VALIDACION DE NOMBRE
    let nombre = document.getElementById("nombre").value;
    if (nombre.replaceAll(" ", "") == "") {
        document.getElementById("mensajes_nombre").innerHTML = "* Ingresa tu nombre";
        document.getElementById("mensajes_nombre").style.display = "block";
        todoCorrecto = false;
    } else if (nombre.length > 50) {
        document.getElementById("mensajes_nombre").innerHTML = "* No debes exceder los 50 caracteres";
        document.getElementById("mensajes_nombre").style.display = "block";
        todoCorrecto = false;
    } else if (!/^[a-zA-ZäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙ.]+(\ [a-zA-ZäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙ]+)*$/g.test(nombre)) {
        document.getElementById("mensajes_nombre").innerHTML = "* Solo debes ingresar letras";
        document.getElementById("mensajes_nombre").style.display = "block";
        todoCorrecto = false;
    }

    //VALIDACION DE PRIMER APELLIDO
    let primerAp = document.getElementById("primer_apellido").value;
    if (primerAp.replaceAll(" ", "") == "") {
        document.getElementById("mensajes_primer_apellido").innerHTML = "* Ingresa tu primer apellido";
        document.getElementById("mensajes_primer_apellido").style.display = "block";
        todoCorrecto = false;
    } else if (primerAp.length > 50) {
        document.getElementById("mensajes_primer_apellido").innerHTML = "* No debes exceder los 50 caracteres";
        document.getElementById("mensajes_primer_apellido").style.display = "block";
        todoCorrecto = false;
    } else if (!/^[a-zA-ZäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙ.]+(\ [a-zA-ZäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙ]+)*$/g.test(primerAp)) {
        document.getElementById("mensajes_primer_apellido").innerHTML = "* Solo debes ingresar letras";
        document.getElementById("mensajes_primer_apellido").style.display = "block";
        todoCorrecto = false;
    }

    //VALIDACION DE SEGUNDO APELLIDO
    let segundoAp = document.getElementById("segundo_apellido").value;
    if (segundoAp.replaceAll(" ", "") == "") {
        document.getElementById("mensajes_segundo_apellido").innerHTML = "* Ingresa tu segundo apellido";
        document.getElementById("mensajes_segundo_apellido").style.display = "block";
        todoCorrecto = false;
    } else if (segundoAp.length > 50) {
        document.getElementById("mensajes_segundo_apellido").innerHTML = "* No debes exceder los 50 caracteres";
        document.getElementById("mensajes_segundo_apellido").style.display = "block";
        todoCorrecto = false;
    } else if (!/^[a-zA-ZäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙ.]+(\ [a-zA-ZäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙ]+)*$/g.test(segundoAp)) {
        document.getElementById("mensajes_segundo_apellido").innerHTML = "* Solo debes ingresar letras";
        document.getElementById("mensajes_segundo_apellido").style.display = "block";
        todoCorrecto = false;
    }

    //VALIDACION DE TELEFONO
    let telefono = document.getElementById("telefono").value;
    if (telefono.replaceAll(" ", "") == "") {
        document.getElementById("mensajes_telefono").innerHTML = "* Ingresa tu numero telefonico";
        document.getElementById("mensajes_telefono").style.display = "block";
        todoCorrecto = false;
    } else if (telefono.length < 10) {
        document.getElementById("mensajes_telefono").innerHTML = "*  debes ingresar 10 digitos";
        document.getElementById("mensajes_telefono").style.display = "block";
        todoCorrecto = false;
    } else if (telefono.length > 10) {
        document.getElementById("mensajes_telefono").innerHTML = "* No debes exceder los 10 digitos";
        document.getElementById("mensajes_telefono").style.display = "block";
        todoCorrecto = false;
    } else if (!/^[0-9]+$/g.test(telefono)) {
        document.getElementById("mensajes_telefono").innerHTML = "* Solo debes ingresar numeros";
        document.getElementById("mensajes_telefono").style.display = "block";
        todoCorrecto = false;
    }

    //VALIDACION DE CORREO
    let correo = document.getElementById("email").value;
    if (correo.replaceAll(" ", "") == "") {
        document.getElementById("mensajes_correo").innerHTML = "* Ingresa tu email";
        document.getElementById("mensajes_correo").style.display = "block";
        todoCorrecto = false;
    } else if (correo.length > 30) {
        document.getElementById("mensajes_correo").innerHTML = "* No debes exceder los 30 caracteres";
        document.getElementById("mensajes_correo").style.display = "block";
        todoCorrecto = false;
    } else if (!/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/g.test(correo)) {
        document.getElementById("mensajes_correo").innerHTML = "* Email no valido";
        document.getElementById("mensajes_correo").style.display = "block";
        todoCorrecto = false;
    }


    //VALIDACION DE NUMERO DE TARJETA
    let tarjeta = document.getElementById("numero_de_tarjeta").value;
    if (tarjeta.replaceAll(" ", "") == "") {
        document.getElementById("mensajes_num_tarjeta").innerHTML = "* Ingresa los 16 digitos de tu tarjeta";
        document.getElementById("mensajes_num_tarjeta").style.display = "block";
        todoCorrecto = false;
    } else if (tarjeta.length < 16) {
        document.getElementById("mensajes_num_tarjeta").innerHTML = "*  debes ingresar 16 digitos";
        document.getElementById("mensajes_num_tarjeta").style.display = "block";
        todoCorrecto = false;
    } else if (tarjeta.length > 16) {
        document.getElementById("mensajes_num_tarjeta").innerHTML = "* No debes exceder 16 digitos";
        document.getElementById("mensajes_num_tarjeta").style.display = "block";
        todoCorrecto = false;
    } else if (!/^[0-9]+$/g.test(tarjeta)) {
        document.getElementById("mensajes_num_tarjeta").innerHTML = "* Solo debes ingresar numeros";
        document.getElementById("mensajes_num_tarjeta").style.display = "block";
        todoCorrecto = false;
    }

    //VALIDACION DE VENCIMIENTO
    let vencimiento = document.getElementById("vencimiento").value;
    if (vencimiento.replaceAll(" ", "") == "") {
        document.getElementById("mensajes_vencimiento").innerHTML = "* Ingresa la fecha de vencimiento de tu tarjeta";
        document.getElementById("mensajes_vencimiento").style.display = "block";
        todoCorrecto = false;
    } else if (!/\d{2}\/\d{2}$/g.test(vencimiento)) {
        document.getElementById("mensajes_vencimiento").innerHTML = "* Fecha no valida o incompleta";
        document.getElementById("mensajes_vencimiento").style.display = "block";
        todoCorrecto = false;
    }

    //VALIDACION DE RADIOS DE PLAZO
    let radioSeleccionadoPlazo = document.querySelector('input[name="plazo"]:checked');
    if (radioSeleccionadoPlazo) {
        document.getElementById('mensajes_plazo').style.display = "none";
        if (radioSeleccionadoPlazo.id == "radioPlazoSi") {
            let selectPlazos = document.getElementById('select_mensualidades').selectedIndex;
            if (selectPlazos == "0") {
                document.getElementById("mensajes_mensualidades").style.display = "block";
                todoCorrecto = false;
            } else
                document.getElementById('mensajes_mensualidades').style.display = "none";
        }
    } else {
        document.getElementById('mensajes_plazo').style.display = "block";
        todoCorrecto = false;
    }

    //VALIDACION DE RADIOS DE COMPROBANTE
    let radioSeleccionadoComprobante = document.querySelector('input[name="comprobante"]:checked');
    if (radioSeleccionadoComprobante) {
        document.getElementById('mensajes_comprobante').style.display = "none";
    } else {
        document.getElementById('mensajes_comprobante').style.display = "block";
        todoCorrecto = false;
    }

    //VALIDACION DE CALLE
    let calle = document.getElementById("calle").value;
    if (calle.replaceAll(" ", "") == "") {
        document.getElementById("mensajes_calle").innerHTML = "* Ingresa el nombre de tu calle";
        document.getElementById("mensajes_calle").style.display = "block";
        todoCorrecto = false;
    } else if (calle.length > 50) {
        document.getElementById("mensajes_calle").innerHTML = "* No debes exceder los 50 caracteres";
        document.getElementById("mensajes_calle").style.display = "block";
        todoCorrecto = false;
    }

    //VALIDACION DE COLONIA
    let colonia = document.getElementById("colonia").value;
    if (colonia.replaceAll(" ", "") == "") {
        document.getElementById("mensajes_colonia").innerHTML = "* Ingresa el nombre de tu colonia";
        document.getElementById("mensajes_colonia").style.display = "block";
        todoCorrecto = false;
    } else if (colonia.length > 50) {
        document.getElementById("mensajes_colonia").innerHTML = "* No debes exceder los 50 caracteres";
        document.getElementById("mensajes_colonia").style.display = "block";
        todoCorrecto = false;
    } else if (!/^[a-zA-ZäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙ.]+(\ [a-zA-ZäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙ0-9]+)*$/g.test(colonia)) {
        document.getElementById("mensajes_colonia").innerHTML = "* No debes ingresar caracteres especiales";
        document.getElementById("mensajes_colonia").style.display = "block";
        todoCorrecto = false;
    }

    //VALIDACION DE MUNICIPIO
    let municipio = document.getElementById("municipio").value;
    if (municipio.replaceAll(" ", "") == "") {
        document.getElementById("mensajes_municipio").innerHTML = "* Ingresa el nombre de tu municipio";
        document.getElementById("mensajes_municipio").style.display = "block";
        todoCorrecto = false;
    } else if (municipio.length > 50) {
        document.getElementById("mensajes_municipio").innerHTML = "* No debes exceder los 50 caracteres";
        document.getElementById("mensajes_municipio").style.display = "block";
        todoCorrecto = false;
    } else if (!/^[a-zA-ZäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙ.]+(\ [a-zA-ZäÄëËïÏöÖüÜáéíóúáéíóúÁÉÍÓÚÂÊÎÔÛâêîôûàèìòùÀÈÌÒÙ]+)*$/g.test(municipio)) {
        document.getElementById("mensajes_municipio").innerHTML = "* No debes ingresar caracteres especiales";
        document.getElementById("mensajes_municipio").style.display = "block";
        todoCorrecto = false;
    }

    //VALIDACION DE CP
    let cp = document.getElementById("cp").value;
    if (cp.replaceAll(" ", "") == "") {
        document.getElementById("mensajes_cp").innerHTML = "* Ingresa tu codigo postal";
        document.getElementById("mensajes_cp").style.display = "block";
        todoCorrecto = false;
    } else if (cp.length < 5) {
        document.getElementById("mensajes_cp").innerHTML = "* Debes ingresar los 5 digitos";
        document.getElementById("mensajes_cp").style.display = "block";
        todoCorrecto = false;
    } else if (cp.length > 5) {
        document.getElementById("mensajes_cp").innerHTML = "* No debes exceder los 5 digitos";
        document.getElementById("mensajes_cp").style.display = "block";
        todoCorrecto = false;
    } else if (!/\d{5}$/g.test(cp)) {
        document.getElementById("mensajes_cp").innerHTML = "* Solo debes ingresar numeros";
        document.getElementById("mensajes_cp").style.display = "block";
        todoCorrecto = false;
    }

    //VALIDACION DE ESTADO
    let selectEstado = document.getElementById('select_estado').selectedIndex;
    if (selectEstado == "0") {
        document.getElementById("mensajes_estado").style.display = "block";
        todoCorrecto = false;
    } else
        document.getElementById('mensajes_estado').style.display = "none";

    //VALIDACION DE PAIS
    let selectPais = document.getElementById('select_pais').selectedIndex;
    if (selectPais == "0") {
        document.getElementById("mensajes_pais").style.display = "block";
        todoCorrecto = false;
    } else
        document.getElementById('mensajes_pais').style.display = "none";

    //VALIDACION DE CHECK TERMINOS
    let checkTerminos = document.getElementById('terminos');
    if (checkTerminos.checked)
        document.getElementById('mensajes_terminos').style.display = "none";
    else {
        document.getElementById('mensajes_terminos').style.display = "block";
        todoCorrecto = false;
    }
    //console.log("pues el listener jala")
    var data = new FormData(formula);
    data.append("nombre", $("#nombre").val());
    data.append("primer_apellido", $("#primer_apellido").val());
    data.append("segundo_apellido", $("#segundo_apellido").val());

    if (todoCorrecto) {
        window.confirm("Gracias Tu donacion fue exitosa");
        pide = {
            method: 'POST',
            body: data,
        }
        fetch('../colectaubeta/php/procesar_registro.php', pide)
            .then(res => resp.json)
            .then(res => {
                window.alert("Exito");
                if(answer==="ok"){
                    window.alert("Exito");
                }else if(answer=='captcha'){
                    window.alert("Error");
                }
            }).catch(error => console.log('error', error));
    }else{
        window.alert("Error datos incompletos");
    }

});