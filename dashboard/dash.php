<!doctype html>
<html lang="en">

<head>
  <title>UniBeta</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
    <?php
            require_once('sidebar.html');
        ?>
    <br>
    <br>
    <div class="table-responsive">
        <table class="table table-striped table-sm table-info" id="donadores">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Graduacion</th>
                    <th scope="col">Eliminar</th>
                    <th scope="col">Modificar</th>
                </tr>

            </thead>
            <tbody>
                <?php
                include('../php/donador_dao.php');
                $DAO = new DonadorDAO();
                $res = $DAO->cargarDonadores();
                while ($fila = mysqli_fetch_assoc($res)) {
                    printf("<tr>
                    <td>" . $fila['id'] . "</td>
                    <td>" . $fila['nombre'] . "</td>
                    <td>" . $fila['apellido'] . "</td>
                    <td>" . $fila['Telefono'] . "</td>
                    <td>" . $fila['direccion'] . "</td>
                    <td>" . $fila['correo'] . "</td>
                    <td>" . $fila['categoria'] . "</td>
                    <td>" . $fila['graduacion'] . "</td>
                </tr>", $fila['id'], $fila['nombre'], $fila['apellido'], $fila['Telefono'], $fila['direccion'], $fila['correo'], $fila['categoria'], $fila['graduacion']);
                
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
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>