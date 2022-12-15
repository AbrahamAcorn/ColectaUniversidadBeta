<?php
    header('Content-Type: multipart/form-data');
    include('conexion_bd.php');

    $con = new ConexionBD();
    $conexion = $con->getConexion();
    //var_dump($conexion);

    if(isset($_POST['username']) &
       isset($_POST['passaword']) &
       isset($_POST['email'])) {

        $usern = $_POST['username'];
        $psw = $_POST['passaword'];
        $email = $_POST['email'];

        $sql = "INSERT INTO users VALUES (NULL,'$usern','$psw','$email');";

        $res = mysqli_query($conexion, $sql);
        //var_dump($res);

        $respuesta = array();

        if($res) {
            //Todo bien
            $respuesta['exito'] = true;
            $respuesta['mensaje'] = "Insercion correcta";
            $cad = json_encode($respuesta);
            echo($cad);
            //var_dump($cad);
        } else {
            //Todo mal
            $respuesta['exito'] = false;
            echo(die(mysqli_error($conexion)));
            $respuesta['mensaje'] = "Error en la insercion";
            $cad = json_encode($respuesta);
            echo($cad);
            //var_dump($cad);
            //die(mysqli_error($conexion));
        }
    } else {
        echo("ERROR");
    }

?>