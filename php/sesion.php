<?php

    include('conexion_bd.php');

    $con = new ConexionBD();
    $conexion = $con->getConexion();
    //var_dump($conexion);

    if($conexion) {
        $u = $_POST['username'];
        $p = $_POST['password'];

        $u_cifrado = sha1($u);
        $p_cifrado = sha1($p);

        $sql = "SELECT * FROM Users WHERE  username='$u_cifrado' AND password='$p_cifrado'";

        $res = mysqli_query($conexion, $sql);

        if(mysqli_num_rows($res)==1) {
            //echo 'Usuario autenticado';
            session_start();
            $_SESSION['autenticado'] = true;
            $_SESSION['usuario'] = $u;
            header("location:../vistas/formulario_altas.php"); 
        } else {
            header("location:../login/login.html");
        }

    }

?>