<?php
    session_start();

    if($_SESSION['autenticado'] == false){
        header("location:login/login.html");
    }
?>
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
  require_once('blank.html');
  ?>
  <br>
  <br>
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Earnings (Monthly)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Earnings (Annual)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Pending Requests</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /.container-fluid -->

<div class="container-fluid">


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Donaciones</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table-striped table-bordered" id="donadores">
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
        </div>
    </div>
</div>

</div>
<!-- End of Main Content -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

<footer>
  <!-- place footer here -->
</footer>
</body>

</html>