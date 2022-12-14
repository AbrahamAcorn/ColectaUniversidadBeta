<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Colecta Universidad Beta</title>
  <meta charset="UTF-8">
  
  <!-- BOOTSTRAP CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  <!-- BOOTSTRAP ICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="assets/css/index.css">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  
</head>

<body>
  <!-- NAVIGATION -->
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">
        <img src="assets/img/Logo.png" style="width: 25%;">
        Universidad Beta
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html#sobre_nosotros">Sobre Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html#nuestros_eventos">Nuestros Eventos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html#donativos">DONATIVOS</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HEADER -->
  <header class="main-header">
    <div class="background-overlay text-white py-5">
      <div class="container">
        <div class="row d-flex h-100">
          <div class="col-sm-6 text-center justify-content-center align-self-center">
            <h1>DONA AHORA</h1>
            <p>Con tu donativo ayudas a que cientos de jovenes estudienates con dificultades economicas logren concluir con exito sus estudios universitarios.</p>
            <a href="assets/index.html#donativos" class="btn btn-outline-primary btn-lg text-white">
              Quiero donar
            </a>
          </div>
          <div class="col-sm-6">
            <img src="assets/img/product.jpg" class="img-fluid d-none d-sm-block">
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- ABOUT -->
  <section id="sobre_nosotros" class="m5 text-center">
    <div class="container">
      <div class="row">
        <div class="m-5">
          <h1>Sobre Nosotros</h3>
          <p>
            Somos una institucion publica cuya finalidad es contribuir al desarrollo y crecimiento de la regi??n y nuestro estado impulsando la formaci??n de hombres y mujeres profesionistas comprometidos con un alto nivel de competitividad, basado en los valores morales y educativos ejercidos con calidad y profesionalismo, tales como: Lealtad, Respeto, Confianza, Disciplina, ??tica y Honestidad.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- EVENTOS -->
  <section id="nuestros_eventos" class="text-center team">
    <div class="container p-5">
      <h1 class="text-center text-white">Nuestros Eventos</h1>
      <p class="text-white">
        Durante el a??o se realizan muchos eventos con la finalidad de recaudar la mayor cantidad de fondos posible y asi continiar cambiando la vida de muchos jovenes.
      </p>
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
          <div class="card">
            <div class="card-body">
              <img src="assets/img/carnaval_oto??o.jpg" class="img-fluid">
              <h3>Carnaval de oto??o</h3>
              <h5><em>Jan 08, 2025</em></h5>
              <p class="d-none d-sm-none d-md-block">
                Consiste en un hermoso espect??culo callejero de marionetas gigantes, maquinarias animadas y personas con vestimentas tradicionales y alucibas a la fecha.
              </p>
              <div class="d-flex flex-row justify-content-center">
                  <a href="" class="btn btn-outline-primary display-7" target="_blank">Ver mas &gt;</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
          <div class="card">
            <div class="card-body">
              <img src="assets/img/cena_y_baile.jpg" class="img-fluid">
              <h3>Cena y Baile</h3>
              <h5><em>Jan 08, 2025</em></h5>
              <p class="d-none d-sm-none d-md-block">
                Es una reuni??n celebrada por varias personas, durante la noche, y cuya principal misi??n resulta ser divertirse.
              </p>
              <div class="d-flex flex-row justify-content-center">
                <a href="" class="btn btn-outline-primary display-7" target="_blank">Ver mas &gt;</a>
            </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
          <div class="card">
            <div class="card-body">
              <img src="assets/img/torneo_golf.jpg" class="img-fluid">
              <h3>Torneo de golf en primavera</h3>
              <h5><em>Jan 08, 2025</em></h5>
              <p class="d-none d-sm-none d-md-block">
                Es un juego que consiste en introducir la bola con el menor n??mero de movimientos posibles en los hoyos distribuidos por el campo.
              </p>
              <div class="d-flex flex-row justify-content-center">
                <a href="" class="btn btn-outline-primary display-7" target="_blank">Ver mas &gt;</a>
            </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
          <div class="card">
            <div class="card-body">
              <img src="assets/img/webinar.jpg" class="img-fluid">
              <h3>Fonot??n</h3>
              <h5><em>Jan 08, 2025</em></h5>
              <p class="d-none d-sm-none d-md-block">
                Es un evento que consta de varias actividades estilo webinar en el cual se solicita un aporte economico voluntario para ayuda de los mismos estudienates.
              </p>
              <div class="d-flex flex-row justify-content-center">
                <a href="" class="btn btn-outline-primary display-7" target="_blank">Ver mas &gt;</a>
            </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
          <div class="card">
            <div class="card-body">
              <img src="assets/img/feria_conocimiento.jpg" class="img-fluid w-80">
              <h3>Feria de conocimiento</h3>
              <h5><em>Jan 08, 2025</em></h5>
              <p class="d-none d-sm-none d-md-block">
                Es un evento interactivo y din??mico proyectado para mostrar y compartir informaci??n sobre temas diversos que estimulan a los participantes a interactuar de manera org??nica sobre temas de inter??s com??n.
              </p>
              <div class="d-flex flex-row justify-content-center">
                  <a href="" class="btn btn-outline-primary display-7" target="_blank">Ver mas &gt;</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

   DONATIVOS -->
  <section id="donativos" class="col-10 my-5 justify-content-center display-flex">
    <form method="POST" id="formulario" name="formulario">
      <!--onsubmit="return validarFormulario();"-->
      <section id="cantidad_a_donar" class="rounded shadow-lg">
        <div class="section_radios">
          <div class="container">
            <div class="row justify-content-center">
              <div class="texto_responsive">
                <h1 style="text-align: center;" class="text-center text-black py-3 titulos_responsive">Cantidad del Donativo para la Universidad Beta</h1>
              </div>
              <div class="col-xl-10 pb-3">
                <div class="form-row justify-content-center">
                  <div class="form-group col-10 col-sm-8 col-md-6 col-lg-4 col-xl-3">
                    <input class="form-check-input checkbox-budget" value="100" type="radio" name="budget" id="budget-1" onclick="ocultarOtraCantidad();">
                    <label for="budget-1" class="formato_label" >
                      <span data-hover="$100">$100</span>
                    </label>
                  </div>
                  <div class="invalid-tooltip">Selecciona una cantidad</div>
                  <div class="form-group col-10 col-sm-8 col-md-6 col-lg-4 col-xl-3">
                    <input class="form-check-input checkbox-budget" value="200" type="radio" name="budget" id="budget-2" onclick="ocultarOtraCantidad();">
                    <label for="budget-2" class="formato_label">
                      <span data-hover="$200">$200</span>
                    </label>
                  </div>
                  <div class="form-group col-10 col-sm-8 col-md-6 col-lg-4 col-xl-3">
                    <input class="form-check-input checkbox-budget" value="500" type="radio" name="budget" id="budget-3" onclick="ocultarOtraCantidad();">
                    <label for="budget-3" class="formato_label">
                      <span data-hover="$500">$500</span>
                    </label>
                  </div>
                  <div class="form-group col-10 col-sm-8 col-md-6 col-lg-4 col-xl-3">
                    <input class="checkbox-budget" type="radio" value="1000" name="budget" id="budget-4" onclick="ocultarOtraCantidad();">
                    <label for="budget-4" class="formato_label">
                      <span data-hover="$1000">$1000</span>
                    </label>
                  </div>
                  <div class="form-group col-10 col-sm-8 col-md-6 col-lg-4 col-xl-3">
                    <input class="checkbox-budget" type="radio" value="1500" name="budget" id="budget-5" onclick="ocultarOtraCantidad();">
                    <label for="budget-5" class="formato_label">
                      <span data-hover="$1500">$1500</span>
                    </label>
                  </div>
                  <div class="form-group col-10 col-sm-8 col-md-6 col-lg-4 col-xl-3">
                    <input class="checkbox-budget" type="radio" value="2000" name="budget" id="budget-6" onclick="ocultarOtraCantidad();">
                    <label for="budget-6" class="formato_label">
                      <span data-hover="$2000">$2000</span>
                    </label>
                  </div>
                  <div class="form-group col-10 col-sm-8 col-md-6 col-lg-4 col-xl-3">
                    <input class="checkbox-budget" type="radio" value="3000" name="budget" id="budget-7" onclick="ocultarOtraCantidad();">
                    <label for="budget-7" class="formato_label">
                      <span data-hover="$3000">$3000</span>
                    </label>
                  </div>
                  <div class="form-group col-10 col-sm-8 col-md-6 col-lg-4 col-xl-3">
                    <input class="checkbox-budget" type="radio" value="5000" name="budget" id="budget-8" onclick="ocultarOtraCantidad();">
                    <label for="budget-8" class="formato_label">
                      <span data-hover="$5000">$5000</span>
                    </label>
                  </div>
                  <div class="form-group col-10 col-sm-8 col-md-6 col-lg-4 col-xl-3">
                    <input class="checkbox-budget" value="otro" type="radio" name="budget" id="budget-9" onclick="mostrarOtraCantidad();">
                    <label for="budget-9" id="label_otra_cantidad" class="formato_label2">
                      <span id="span_otra_cantidad" data-hover="Otra">Otra</span>
                      <input style="display: none;" class="form-control" type="number" max="1000000" min="10" name="caja_otra_cantidad" id="caja_otra_cantidad" onkeyup="comprobarCantidad();">
                    </label>
                    <div class="mensajes rounded" id="mensajes_cantidad"></div>
                  </div>
                  <div class="mensajes rounded" id="mensajes_radio_cantidades">Selecciona una cantidad</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <br><br>
      
      <section id="tus_datos" class="pb-3 rounded shadow-lg">
        <div class="form-row justify-content-center">
          <h1 style="text-align: center;" class="titulos_responsive py-3">Tus Datos</h1>
        </div>
        <div class="form-row justify-content-center">
          <div class="form-group col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6 mb-4_5">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="nombre" onkeypress="ocultarMensajeNombre();">
            <div class="invalid-tooltip" id="tool_nombre">Ingresa tu nombre</div>
            <div class="mensajes rounded" id="mensajes_nombre"></div>
          </div>
          <div class="form-group col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6 mb-4_5">
            <label for="primer_apellido">Primer Apellido:</label>
            <input type="text" class="form-control" name="primer_apellido" id="primer_apellido" onkeypress="ocultarMensajePrimerAp();">
            <div class="mensajes rounded" id="mensajes_primer_apellido"></div>
          </div>
        </div>
        <div class="form-row justify-content-center">
          <div class="form-group col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6 mb-4_5">
            <label for="segundo_apellido">Segundo Apellido:</label>
            <input type="text" class="form-control" name="segundo_apellido" id="segundo_apellido" onkeypress="ocultarMensajeSegundoAp();">
            <div class="mensajes rounded" id="mensajes_segundo_apellido"></div>
          </div>
          <div class="form-group col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6 mb-4_5">
            <label for="telefono">Telefono</label>
            <input type="tel" class="form-control" name="telefono" id="telefono" onkeypress="ocultarMensajeTelefono();">
            <div class="mensajes rounded" id="mensajes_telefono"></div>
          </div>
        </div>
        <div class="form-row justify-content-center">
          <div class="form-group col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6 mb-4_5">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email" id="email" onkeypress="ocultarMensajeCorreo();">
            <div class="mensajes rounded" id="mensajes_correo"></div>
          </div>
          <div class="form-group col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6 mb-4_5">
            <label for="select_categoria">Categoria:</label>
            <select class="custom-select mr-sm-2" id="select_categoria" name="select_categoria" onchange="mostrarOcultarFechaGraduacion();">
              <option value = "" selected disabled> - Seleccionar una opcion - </option>
              <option value = "Estudiante">Estudiante</option>
              <option value = "Graduado">Graduado</option>
              <option value = "Maestro">Maestro</option>
              <option value = "Administrativo">Administrativo</option>
              <option value = "Otro">Otro</option>
            </select>
            <div class="mensajes rounded" id="mensajes_categoria"></div>
          </div>
        </div>
        <div class="form-row justify-content-center">
          <div style="display: none;" class="form-group col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6 mb-3" id="espacio_fecha_graduacion">
            <label for="fecha_graduacion">Fecha de Graduacion:</label>
            <input type="date" class="form-control" name="fecha_graduacion" id="caja_fecha_graduacion" onclick="ocultarMensajeFechaGraduacion();" onchange="ocultarMensajeFechaGraduacion();" onkeypress="ocultarMensajeFechaGraduacion();">
            <div class="mensajes rounded" id="mensajes_fecha_graduacion"></div>
          </div>
        </div>
      </section>
      <br><br>

      <section id="datos_de_pago" class="pb-3 rounded shadow-lg">
        <div class="form-row justify-content-center">
          <h1 style="text-align: center;" class="titulos_responsive py-3">Datos de Pago</h1>
        </div>
        <div class="form-row justify-content-center">
          <div class="form-group col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6 mb-4_5">
            <label for="select_banco">Banco:</label>
            <select class="custom-select mr-sm-2" id="select_banco" name="select_banco" onchange="ocultarMensajeBanco();">
              <option value="" disabled selected> - Seleccionar una opcion - </option>
              <option value="American Express">American Express</option>
              <option value="Banamex">Banamex</option>
              <option value="Banco Afirme">Banco Afirme</option>
              <option value="Banco Azteca">Banco Azteca</option>
              <option value="Banco Invex">Banco Invex</option>
              <option value="Bancomext">Bancomext</option>
              <option value="BanCoppel">BanCoppel</option>
              <option value="Banjercito">Banjercito</option>
              <option value="Bank of America">Bank of America</option>
              <option value="Banorte">Banorte</option>
              <option value="Banregio">Banregio</option>
              <option value="BBVA Bancomer">BBVA Bancomer</option>
              <option value="CIBanco">CIBanco</option>
              <option value="Del Bajio">Del Bajio</option>
              <option value="HSBC">HSBC</option>
              <option value="Inbursa">Inbursa</option>
              <option value="Nacional Financiera">Nacional Financiera</option>
              <option value="Santander">Santander</option>
              <option value="Scotiabank-">Scotiabank</option>
            </select>
            <div class="mensajes rounded" id="mensajes_banco">Selecciona una opcion</div>
          </div>
          <div class="form-group col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6 mb-4_5">
            <label for="select_metodo">Metodo de Pago:</label>
            <select class="custom-select mr-sm-2" id="select_metodo_pago" name="select_metodo_pago" onchange="ocultarMensajeMetodoPago();">
              <option value="" selected disabled> - Seleccionar una opcion - </option>
              <option value="Tarjeta credito American Express">Tarjeta credito American Express</option>
              <option value="Tarjeta credito Visa">Tarjeta credito Visa</option>
              <option value="Tarjeta credito Mastercard">Tarjeta credito Mastercard</option>
              <option value="Tarjeta debito American Express">Tarjeta debito American Express</option>
              <option value="Tarjeta debito Visa">Tarjeta debito Visa</option>
              <option value="Tarjeta debito Mastercard">Tarjeta debito Mastercard</option></select>
              <option value="Cuenta de Cheques">Tarjeta debito Mastercard</option></select>
            </select>
            <div class="mensajes rounded" id="mensajes_metodo_pago">Selecciona una opcion</div>
          </div>
        </div>
        <div class="form-row justify-content-center">
          <div class="form-group col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6 mb-4_5">
            <label for="numero_de_tarjeta">Numero de Tarjeta:</label>
            <input type="text" class="form-control" name="numero_de_tarjeta" id="numero_de_tarjeta" onkeypress="ocultarMensajeNumTarjeta();">
            <div class="mensajes" id="mensajes_num_tarjeta"></div>
          </div>
          <div class="form-group col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6 mb-4_5">
            <label for="vencimeinto">Vencimiento MM/AA:</label>
            <input type="text" class="form-control" name="vencimiento" id="vencimiento" placeholder="MM/AA" onkeypress="ocultarMensajeVencimiento();">
            <div class="mensajes rounded" id="mensajes_vencimiento"></div>
          </div>
        </div>
        <div class="form-row justify-content-center">
          <div class="form-group col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6 mb-3">
            <label for="">??Deseas realizar la donacion en plazos?</label>
            <br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="plazo" id="radioPlazoNo" value="option1" checked onchange="ocultarMensajePlazo();" onclick="mostrarOcultarPlazos();">
              <label class="form-check-label" for="radioPlazoNo">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="plazo" id="radioPlazoSi" value="option2" onchange="ocultarMensajePlazo();" onclick="mostrarOcultarPlazos();">
              <label class="form-check-label" for="radioPlazoSi">Si</label>
            </div>
            <div class="mensajes rounded" id="mensajes_plazo">Selecciona una opcion</div>
          </div>
          <div class="form-group col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6 mb-4" style="display: none;" id="espacio_plazos">
            <label for="select_banco">Cantidad de Plazos:</label>
            <select class="custom-select mr-sm-2" id="select_mensualidades" name="select_mensualidades" onchange="ocultarMensajeMensualidad();">
              <option value="" disabled selected> - Seleccionar una opcion - </option>
              <option value="2">2 mensualidades</option>
              <option value="3">3 mensualidades</option>
              <option value="4">4 mensualidades</option>
              <option value="5">5 mensualidades</option>
              <option value="6">6 mensualidades</option>
              <option value="7">7 mensualidades</option>
              <option value="8">8 mensualidades</option>
              <option value="9">9 mensualidades</option>
              <option value="10">10 mensualidades</option>
              <option value="11">11 mensualidades</option>
              <option value="12">12 mensualidades</option>


            </select>
            <div class="mensajes rounded" id="mensajes_mensualidades">Selecciona una opcion</div>
          </div>
          <div class="form-group col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6 mb-0">
            <label for="optradio">??Deseas recibir comprobante fiscal?</label>
            <br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="comprobante" id="inlineradio1" value="option1" checked onchange="ocultarMensajeComprobante();">
              <label class="form-check-label" for="inlineradio1">No</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="comprobante" id="inlineradio2" value="option2" onchange="ocultarMensajeComprobante();">
              <label class="form-check-label" for="inlineradio2">Si</label>
            </div>
            <div class="mensajes rounded" id="mensajes_comprobante">Selecciona una opcion</div>
          </div>
          <div class="form-group col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6 mb-0"></div>
        </div>
      </section>
      <br><br>

      <section id="direccion" class="pb-3 rounded shadow-lg">
        <div class="form-row justify-content-center">
          <h1 style="text-align: center;" class="titulos_responsive py-3">Direccion</h1>
        </div>
        <div class="form-row justify-content-center">
          <div class="form-group col-12 col-sm-4 col-md-4 col-lg-6 col-xl-6 mb-4_5">
            <label for="calle">Calle:</label>
            <input type="text" class="form-control" name="calle" id="calle" onkeypress="ocultarMensajeCalle();">
            <div class="mensajes rounded" id="mensajes_calle"></div>
          </div>
          <div class="form-group col-12 col-sm-4 col-md-4 col-lg-6 col-xl-6 mb-4_5">
            <label for="colonia">Colonia:</label>
            <input type="text" class="form-control" name="colonia" id="colonia" onkeypress="ocultarMensajeColonia();">
            <div class="mensajes rounded" id="mensajes_colonia"></div>
          </div>
        </div>
        <div class="form-row justify-content-center">
          <div class="form-group col-12 col-sm-4 col-md-4 col-lg-6 col-xl-6 mb-4_5">
            <label for="municipio">Municipio</label>
            <input type="text" class="form-control" name="municipio" id="municipio"
            onkeypress="ocultarMensajeMunicipio();">
            <div class="mensajes rounded" id="mensajes_municipio"></div>
          </div>
          <div class="form-group col-12 col-sm-4 col-md-4 col-lg-6 col-xl-6 mb-4_5">
            <label for="cp">Codigo Postal</label>
            <input type="text" class="form-control" name="cp" id="cp" onkeypress="ocultarMensajeCp();">
            <div class="mensajes rounded" id="mensajes_cp"></div>
          </div>
        </div>
        <div class="form-row justify-content-center">
          <div class="form-group col-12 col-sm-4 col-md-4 col-lg-6 col-xl-6 mb-4_5">
            <label for="select_estado">Estado:</label>
            <select class="custom-select mr-sm-2" id="select_estado" name="select_estado" onchange="ocultarMensajeEstado();">
              <option value = "" selected disabled> - Seleccionar Pais - </option>
            </select>
            <div class="mensajes rounded" id="mensajes_estado">Selecciona una opcion</div>
          </div>
          <div class="form-group col-12 col-sm-4 col-md-4 col-lg-6 col-xl-6 mb-4_5">
            <label for="select_pais">Pais:</label>
            <select class="custom-select mr-sm-2" id="select_pais" name="select_pais" onchange="cambioPais();">
              <option value = "" selected disabled> - Seleccionar una opcion - </option>
              <option value = "argentina.txt">Argentina</option>
              <option value = "bolivia.txt">Bolivia</option>
              <option value = "colombia.txt">Colombia</option>
              <option value = "ecuador.txt">Ecuador</option>
              <option value = "mexico.txt">M??xico???</option>
              <option value = "venezuela.txt">Venezuela</option>
            </select>
            <div class="mensajes rounded" id="mensajes_pais">Selecciona una opcion</div>
          </div>
        </div>
        <div class="form-row justify-content-center">
          <div class="form-group col-12 col-sm-10 col-md-8 col-lg-12 col-xl-12 mb-5">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" name="terminos" id="terminos" value="option1" onchange="ocultarMensajeTerminos();">
              <label class="form-check-label" for="inlineCheckbox1">He le??do, entiendo y acepto el <a href="">Aviso de privacidad</a>, <a href="">T??rminos</a> y <a href="">Condiciones</a></label>
              <div class="mensajes rounded" id="mensajes_terminos">Debes aceptar los terminos y condiciones</div>
            </div>
          </div>
        </div>
        
        <div class="form-row justify-content-center mb-5">
          <div class="g-recaptcha" data-sitekey="6LcvUXIjAAAAALIEWpqjJEcj7VFytXDpnvPdZvgT"></div>
        </div>


        <div class="form-row justify-content-center">
          <div class="form-group col-12 col-sm-10 col-md-8 col-lg-10 col-xl-10 mb-3">
            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
          </div>
        </div>
      </section>
    </form>
  </section>

  <footer class="py-1">
    <ul class="nav justify-content-center pb-1 mb-1">
      <li class="nav-item"><a href="index.html" class="nav-link px-2">Home</a></li>
      <li class="nav-item"><a href="index.html#sobre_nosotros" class="nav-link px-2">Sobre Nosotros</a></li>
      <li class="nav-item"><a href="index.html#nuestros_eventos" class="nav-link px-2">Nuestros Eventos</a></li>
      <li class="nav-item"><a href="index.html#donativos" class="nav-link px-2">DONATIVOS</a></li>
    </ul>
      <div class="row col-12">
        <div class="col-4"></div>
        <div class="col-4">
          <p class="text-center">&copy; 2022 Universidad Beta, Inc</p>
        </div>
        <div class="col-4">
          <ul class="nav col-md-12 justify-content-end list-unstyled d-flex">
            <li class="mx-3">
              <a href="https://twitter.com/" target="_blank">
                <i class="bi bi-twitter"></i>
              </a>
            </li>
            <li class="mx-3">
              <a href="https://www.instagram.com/" target="_blank">
                <i class="bi bi-instagram"></i>
              </a>
            </li>
            <li class="mx-3">
              <a href="https://www.facebook.com/" target="_blank">
                <i class="bi bi-facebook"></i>
              </a>
            </li>
          </ul>
        </div>
    </div>
  </footer>


  <script src="assets/js/scripts_index.js"></script>
  <script src="assets/js/validacion_de_campos.js"></script>

  <!-- BOOTSTRAP SCRIPTS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
</body>

</html>