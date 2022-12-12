<?php

    include('../php/conexion_bd.php');

    $con = new ConexionBD();
    $conexion = $con->getConexion();

    //var_dump($conexion);

     if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cadena_JSON = file_get_contents('php://input'); //Recibe información a través de HTTP
        //var_dump($cadena_JSON);
        if($cadena_JSON == false) {
            echo "No hay cadena JSON";
        } else {
            $filtro = json_decode($cadena_JSON, true);

            $sql = "SELECT * FROM users;";

            $res = mysqli_query($conexion, $sql);
            
            $datos['users'] = array();
            if($res) {
                //Todo bien
                while($fila = mysqli_fetch_assoc($res)) {
                    $alumno = array();
                    $alumno['iduser'] = $fila['iduser'];
                    $alumno['username'] = $fila['username'];
                    $alumno['passaword'] = $fila['passaword'];
                    $alumno['email'] = $fila['email'];

                    array_push($datos['users'], $alumno);
                }

                echo json_encode($datos['users']);

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