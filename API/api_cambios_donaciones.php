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

            $iddonaciones = $datos['iddonaciones'];
            $donador = $datos['donador'];
            $prometido = $datos['prometido'];
            $abonado = $datos['abonado'];
            $fecha_abono = $datos['fecha_abono'];
            $fecha_limite = $datos['fecha_limite'];
            $formapago = $datos['formapago'];
            $plazos = $datos['plazos'];
            $plazos_abonados = $datos['plazos_abonados'];


            $sql = "UPDATE donaciones SET donador='$donador', prometido='$prometido', abonado='$abonado', fecha_abono='$fecha_abono', fecha_limite='$fecha_limite',
            formapago='$formapago', plazos='$plazos', plazos_abonados='$plazos_abonados' WHERE iddonaciones='$iddonaciones';";
            $res = mysqli_query($conexion, $sql);
            $respuesta = array();

            if($res) {
                //Todo bien
                $respuesta['exito'] = true;
                $respuesta['mensaje'] = "Modificacion correcta";
                $cad = json_encode($respuesta);
                var_dump($cad);
            } else {
                //Todo mal
                $respuesta['exito'] = false;
                $respuesta['mensaje'] = "Error en la modificion";
                $cad = json_encode($respuesta);
                var_dump($cad);
            }
        }        

    } else {
        echo "No hay peticion HTTP";
    }

?>