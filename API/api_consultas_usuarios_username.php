<?php
    include('conexion_bd.php');

    $con = new ConexionBD();
    $conexion = $con->getConexion();

    //var_dump($conexion);   
    if(isset($_POST['username'])){
        $usern = $_POST['username'];

        $sql = "SELECT * FROM users where username LIKE '%$usern%';";

        $res = mysqli_query($conexion, $sql);
        //var_dump($res);

        $respuesta = array();

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
            echo(die(mysqli_error($conexion)));
            $respuesta['mensaje'] = "Error modificando el registro";
            $cad = json_encode($respuesta);
            echo($cad);
            //var_dump($cad);
            //die(mysqli_error($conexion));
        }
    } else {
        echo("ERROR");
    }

?>