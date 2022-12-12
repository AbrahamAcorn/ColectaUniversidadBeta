<?php
header('Content-Type: multipart/form-data');
    include('../php/conexion_bd.php');

    $con = new ConexionBD();
    $conexion = $con->getConexion();

    //var_dump($conexion);   
    if(isset($_POST['username']) &
       isset($_POST['passaword']) &
       isset($_POST['email']) &
       isset($_POST['iduser'])){
       
       $usern = $_POST['username'];
            $psw = $_POST['passaword'];
            $email = $_POST['email'];
            $id=$_POST['iduser'];

            $sql = "UPDATE `users` SET `username`='$usern',`passaword`='$psw',`email`='$email' WHERE iduser=$id;";

            $res = mysqli_query($conexion, $sql);
            //var_dump($res);

            $respuesta = array();

            if($res) {
                //Todo bien
                $respuesta['exito'] = true;
                $respuesta['mensaje'] = "Modificacion correcta";
                $cad = json_encode($respuesta);
                echo($cad);
                //var_dump($cad);
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
       
       }else{
       
       echo("ERROR");
       }
?>