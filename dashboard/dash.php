<!doctype html>
<html lang="en">

<head>
  <title>UniBeta</title>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
</head>


</head>

<body>
  <?php
  require_once('sidebar.html');
  ?>
  <br>
  <br>

  <br>
  <div>
    <table class="table table-striped table-sm table-dark table-hover table-bordered" id="donadores">
      <thead class="table-primary">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Apellido</th>
          <th scope="col">Categoria</th>
          <th scope="col">Prometido</th>
          <th scope="col">Abonado</th>
          <th scope="col">Fecha abono</th>
          <th scope="col">Fecha limite</th>
          <th scope="col">Forma de pago</th>
          <th scope="col">Plazos</th>
          <th scope="col">Plazos abonados</th>
          <th scope="col">Eliminar</th>
          <th scope="col">Modificar</th>
        </tr>

      </thead>
      <tbody>
        <?php
        include('../php/donacion_dao.php');
        $DAO = new DonacionDAO();
        $res = $DAO->cargarDonacionesFull();
        while ($fila = mysqli_fetch_assoc($res)) {
          printf("<tr>
                    <td>" . $fila['iddonaciones'] . "</td>
                    <td>" . $fila['nombre'] . "</td>
                    <td>" . $fila['ap1'] . "</td>
                    <td>" . $fila['ap2'] . "</td>
                    <td>" . $fila['categ'] . "</td>
                    <td>" . $fila['prometido'] . "</td>
                    <td>" . $fila['abonado'] . "</td>
                    <td>" . $fila['fecha_abono'] . "</td>
                    <td>" . $fila['fecha_limite'] . "</td>
                    <td>" . $fila['formapago'] . "</td>
                    <td>" . $fila['plazos'] . "</td>
                    <td>" . $fila['plazos_abonados'] . "</td>
                    <td>
                    <a href='vistas/cambios.html' class='btn btn-info' role='button'>Editar</a>
                    </td>
                    <td>
                    <a href='../scripts_php/procesar_baja.php?nc=%s' class='btn btn-danger' role='button'>Eliminar</a>
                    </td>
                </tr>", $fila['iddonaciones']);
        }
        ?>

      </tbody>
    </table>
  </div>
</body>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
</body>
</main>
<footer>
  <!-- place footer here -->
</footer>
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>


<script>
  $(document).ready(function() {
    $('#donadores').DataTable();
  });
</script>
</body>

</html>