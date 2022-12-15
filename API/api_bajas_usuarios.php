<?php
    header('Content-Type: multipart/form-data');
    include('conexion_bd.php');

    $con = new ConexionBD();
    $conexion = $con->getConexion();
    //var_dump($conexion);

    if(isset($_POST['iduser'])) {

        $iduser = $_POST['iduser'];

        $sql = "DELETE FROM users WHERE iduser='$iduser';";

        $res = mysqli_query($conexion, $sql);
        //var_dump($res);

        $respuesta = array();

        if($res) {
            //Todo bien
            $respuesta['exito'] = true;
            $respuesta['mensaje'] = "Registro eliminado";
            $cad = json_encode($respuesta);
            echo($cad);
            //var_dump($cad);
        } else {
            //Todo mal
            $respuesta['exito'] = false;
            echo(die(mysqli_error($conexion)));
            $respuesta['mensaje'] = "Fallo la eliminacion";
            $cad = json_encode($respuesta);
            echo($cad);
            //var_dump($cad);
            //die(mysqli_error($conexion));
        }
    } else {
        echo("ERROR faltan datos");
    }

?>