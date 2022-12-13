<?php
header('Content-Type: multipart/form-data');
    include('../php/conexion_bd.php');

    $con = new ConexionBD();
    $conexion = $con->getConexion();

    //var_dump($conexion);   
    if(isset($_POST['direction']) &
       isset($_POST['col']) &
       isset($_POST['locali']) &
       isset($_POST['estate']) &
       isset($_POST['pais']) &
       isset($_POST['cp']) &
       isset($_POST['nume']) &
       isset($_POST['banco']) &
       isset($_POST['vence']) &
       isset($_POST['name']) &
       isset($_POST['ap1']) &
       isset($_POST['ap2']) &
       isset($_POST['phone']) &
       isset($_POST['email']) &
       isset($_POST['categ']) &
       isset($_POST['graduate']) &
       isset($_POST['promet']) &
       isset($_POST['abono']) &
       isset($_POST['pago']) &
       isset($_POST['plazos'])  ){
       
       $direction = $_POST['direction'];
            $col = $_POST['col'];
            $locali = $_POST['locali'];
            $estate = $_POST['estate'];
            $pais = $_POST['pais'];
            $cp = $_POST['cp'];
            $nume = $_POST['nume'];
            $banco = $_POST['banco'];
            $vence = $_POST['vence'];
            $name = $_POST['name'];
            $ap1 = $_POST['ap1'];
            $ap2 = $_POST['ap2'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $categ = $_POST['categ'];
            $graduate = $_POST['graduate'];
            $promet = $_POST['promet'];
            $abono = $_POST['abono'];
            $fechabono = date('Y/m/d');
            $fechalimite = date("Y/m/d",strtotime($fechabono."+ 1 YEAR"));
            $pago = $_POST['pago'];
            $plazos = $_POST['plazos'];
            $plazosabon = 1;

            $sql = "CALL registra_todo('$direction', '$col','$locali','$estate'
            ,'$pais','$cp','$nume','$banco','$vence','$name','$ap1','$ap2','$phone',
            '$email','$categ','$graduate','$promet','$abono','$fechabono','$fechalimite','$pago','$plazos','$plazosabon');";

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
                $respuesta['mensaje'] = "Error en la insercion datos ";
                $cad = json_encode($respuesta);
                echo($cad);
                var_dump($cad);
                die(mysqli_error($conexion));
            }
       
       }else{
       echo("ERROR datos erroneos");
       }
