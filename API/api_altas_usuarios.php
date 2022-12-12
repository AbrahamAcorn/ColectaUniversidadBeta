<?php

    include('../php/conexion_bd.php');

    $con = new ConexionBD();
    $conexion = $con->getConexion();

    //var_dump($conexion);

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cadena_JSON = file_get_contents('php://input'); //Recibe información a través de HTTP

        if($cadena_JSON == false) {
            echo "No hay cadena JSON";
        } else {
            $datos = json_decode($cadena_JSON, true);

            $username = $datos['username'];
            $passaword = $datos['passaword'];
            $email = $datos['email'];

            $sql = "INSERT INTO users VALUES(NULL, '$username', '$passaword', '$email');";

            $res = mysqli_query($conexion, $sql);

            $respuesta = array();

            if($res) {
                //Todo bien
                $respuesta['exito'] = true;
                $respuesta['mensaje'] = "Insercion correcta";
                $cad = json_encode($respuesta);
                //var_dump($cad);
                
            } else {
                //Todo mal
                $respuesta['exito'] = false;
                $respuesta['mensaje'] = "Error en la insercion";
                $cad = json_encode($respuesta);
                //var_dump($cad);
            }
        }        

    } else {
        echo "No hay peticion HTTP";
    }

?>