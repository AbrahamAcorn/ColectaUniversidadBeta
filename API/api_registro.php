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

            $direction = $datos['donador'];
            $col = $datos['prometido'];
            $locali = $datos['abonado'];
            $estate = $datos['fechabono'];
            $pais = $datos['fechalimite'];
            $cp = $datos['formapago'];
            $nume = $datos['plazos'];
            $banco = $datos['plazosabon'];
            $vence = $datos['donador'];
            $name = $datos['prometido'];
            $ap1 = $datos['abonado'];
            $ap2 = $datos['fechabono'];
            $phone = $datos['fechalimite'];
            $email = $datos['formapago'];
            $categ = $datos['plazos'];
            $graduate = $datos['plazosabon'];
            $promet = $datos['donador'];
            $abono = $datos['prometido'];
            $fechabono = $datos['abonado'];
            $fechalimite = $datos['fechabono'];
            $pago = $datos['fechalimite'];
            $plazos = $datos['plazos'];
            $plazosabon = $datos['plazosabon'];

            $sql = "CALL registra_todo('$direction', '$col','$locali','$estate'
            ,'$pais','$cp','$nume','$banco','$vence','$name','$ap1','$ap2','$phone',
            '$email','$categ','$graduate','$promet','$abono','$fechabono','$fechlimite','$pago','$plazo','$plazoabon');";

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