<?php

    include('conexion_bd.php');

    $con = new ConexionBD();
    $conexion = $con->getConexion();
    //var_dump($conexion);

    if(isset($_POST['categ'])) {
        $filtro = $_POST['categ'];

        $sql = "SELECT * FROM donaciones_full where categ LIKE '%$filtro%';";

        $res = mysqli_query($conexion, $sql);
        //var_dump($res);

        $respuesta = array();

        $datos['donaciones'] = array();
        if($res) {
            //Todo bien
            while($fila = mysqli_fetch_assoc($res)) {
                $donacion = array();
                $donacion['iddonaciones'] = $fila['iddonaciones'];
                $donacion['nombre'] = $fila['nombre'];
                $donacion['ap1'] = $fila['ap1'];
                $donacion['ap2'] = $fila['ap2'];
                $donacion['categ'] = $fila['categ'];
                $donacion['prometido'] = $fila['prometido'];
                $donacion['abonado'] = $fila['abonado'];
                $donacion['fechabono'] = $fila['fecha_abono'];
                $donacion['fechalimite'] = $fila['fecha_limite'];
                $donacion['formapago'] = $fila['formapago'];
                $donacion['plazos'] = $fila['plazos'];
                $donacion['plazos_abonados'] = $fila['plazos_abonados'];
                array_push($datos['donaciones'], $donacion);
            }

            echo json_encode($datos['donaciones']);
        } else {
            //Todo mal
            $respuesta['exito'] = false;
            $respuesta['mensaje'] = "Error en la carga de datos";
            $cad = json_encode($respuesta);
            var_dump($cad);
        }
    } else {
        echo("ERROR");
    }

?>