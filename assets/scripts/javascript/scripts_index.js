//Para el input de cantidad
var label1 = document.getElementById("label_otra_cantidad");
var inputCantidad = document.getElementById("caja_otra_cantidad");
var spanOtraCantidad = document.getElementById("span_otra_cantidad");
function mostrarOtraCantidad() {
  label1.style.fontSize = "40px";
  label1.style.paddingTop = "8px";
  label1.style.paddingBottom = "8px";
  inputCantidad.style.display = "inline-block";
  inputCantidad.style.marginTop = "1px";
  inputCantidad.style.marginLeft = "auto";
  inputCantidad.style.marginRight = "auto";
  inputCantidad.disabled = false;
  document.getElementById('mensajes_radio_cantidades').style.display = "none";
}

function ocultarOtraCantidad() {
  label1.style.fontSize = "52px";
  label1.style.paddingTop = "25px";
  inputCantidad.style.display = "none";
  inputCantidad.disabled = true;
  inputCantidad.value = "";
  document.getElementById("mensajes_cantidad").style.display = "none";
  document.getElementById('mensajes_radio_cantidades').style.display = "none";
}




//Para el input de la fecha de graduacion.
var input = document.getElementById("espacio_fecha_graduacion");
function mostrarOcultarFechaGraduacion() {
  d = document.getElementById("select_categoria").value;
  document.getElementById("mensajes_categoria").style.display = "none";
  
  if(d == "2") {
    input.style.display = "block";
  } else {
    input.style.display = "none";
  }
}



//Para los select de los plazos
function mostrarOcultarPlazos() {
  document.getElementById("mensajes_plazo").style.display = "none";
  if(document.getElementById("radioPlazoNo").checked)
    document.getElementById("espacio_plazos").style.display = "none";
  else if (document.getElementById("radioPlazoSi").checked)
    document.getElementById("espacio_plazos").style.display = "block";
}




//Para los select de la direccion
var pais = document.querySelector('#select_pais');
var estado = document.querySelector('#select_estado');
pais.onchange = cambioPais;

function escribeEstados(respuesta) {
  limpiar();
  var opt = document.createElement('option');
  opt.innerHTML = " - Seleccionar Estado - ";
  opt.value = "";
  opt.disabled = true;
  opt.selected = true;
  estado.appendChild(opt);

  var lines = respuesta.split('\n');
  for (var line = 0; line < lines.length; line++) {
    var opt = document.createElement('option');
    opt.innerHTML = lines[line];
    opt.value = lines[line];
    estado.appendChild(opt);
  }
}

function cambioPais() {
  document.getElementById("mensajes_pais").style.display = "none";
  var ajax = new XMLHttpRequest();
  ajax.open('GET', "datos/"+pais.value);
  ajax.onreadystatechange = function() {
    console.log(ajax.status, ajax.readyState, ajax.responseText);
    if (ajax.status === 200 && ajax.readyState === 4) {
      escribeEstados(ajax.responseText);
    }
    else {
      limpiar();
      var opt = document.createElement('option');
      opt.innerHTML = " - Seleccionar Pais - ";
      opt.value = "0";
      estado.appendChild(opt);
    }
  }
  ajax.send();
}

function limpiar(){
while(estado.options.length > 0) {
    estado.remove(0);
  }
}