<?php

    include('../php/conexion_bd.php');

    $con = new ConexionBD();
    $conexion = $con->getConexion();

    //var_dump($conexion);

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cadena_JSON = file_get_contents('php://input'); //Recibe información a través de HTTP
        var_dump($cadena_JSON);
        if($cadena_JSON == false) {
            echo "No hay cadena JSON";
        } else {
            $filtro = json_decode($cadena_JSON, true);

            $sql = "SELECT * FROM donaciones;";

            $res = mysqli_query($conexion, $sql);
            
            $datos['donaciones'] = array();
            if($res) {
                //Todo bien
                while($fila = mysqli_fetch_assoc($res)) {
                    $donacion = array();
                    $donacion['iddonaciones'] = $fila['iddonaciones'];
                    $donacion['donador'] = $fila['donador'];
                    $donacion['prometido'] = $fila['prometido'];
                    $donacion['abonado'] = $fila['abonado'];
                    $donacion['fecha_abono'] = $fila['fecha_abono'];
                    $donacion['fecha_limite'] = $fila['fecha_limite'];
                    $donacion['formapago'] = $fila['formapago'];
                    $donacion['plazos'] = $fila['plazos'];
                    $donacion['plazos_abonados'] = $fila['plazos_abonados'];
                    array_push($datos['donaciones'], $donacion);
                }

                echo json_encode($datos);

            } else {
                //Todo mal
                $respuesta['exito'] = false;
                $respuesta['mensaje'] = "Error en la carga de datos";
                $cad = json_encode($respuesta);
                var_dump($cad);
            }
        }        

    } else {
        echo "No hay peticion HTTP";
    }

?>