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

            $direction = $datos['direction'];
            $col = $datos['col'];
            $locali = $datos['locali'];
            $estate = $datos['estate'];
            $pais = $datos['pais'];
            $cp = $datos['cp'];
            $nume = $datos['nume'];
            $banco = $datos['banco'];
            $vence = $datos['vence'];
            $name = $datos['name'];
            $ap1 = $datos['ap1'];
            $ap2 = $datos['ap2'];
            $phone = $datos['phone'];
            $email = $datos['email'];
            $categ = $datos['categ'];
            $graduate = $datos['graduate'];
            $promet = $datos['promet'];
            $abono = $datos['abono'];
            $fechabono = $datos['fechabono'];
            $fechalimite = $datos['fechalimite'];
            $pago = $datos['pago'];
            $plazos = $datos['plazos'];
            $plazosabon = $datos['plazosabon'];

            $sql = "CALL registra_todo('$direction', '$col','$locali','$estate'
            ,'$pais','$cp','$nume','$banco','$vence','$name','$ap1','$ap2','$phone',
            '$email','$categ','$graduate','$promet','$abono','$fechabono','$fechalimite','$pago','$plazos','$plazosabon');";

            $res = mysqli_query($conexion, $sql);

            $respuesta = array();

            if($res) {
                //Todo bien
                $respuesta['exito'] = true;
                $respuesta['mensaje'] = "Insercion correcta";
                $cad = json_encode($respuesta);
                var_dump($cad);
            } else {
                //Todo mal
                $respuesta['exito'] = false;
                $respuesta['mensaje'] = "Error en la insercion";
                $cad = json_encode($respuesta);
                var_dump($cad);
            }
        }        

    } else {
        echo "No hay peticion HTTP";
    }

?>