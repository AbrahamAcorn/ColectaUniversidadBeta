
<?php

    include_once('conexion_bd.php');

    $con = new ConexionBD();
    $conexion = $con->getConexion();
    //var_dump($conexion);

    if($conexion) {
        $u = $_POST['caja_usuario'];
        $p = $_POST['caja_psw'];

        $u_cifrado = sha1($u);
        $p_cifrado = sha1($p);

        $sql = "SELECT * FROM Users WHERE username='$u' AND passaword='$p'";

        $res = mysqli_query($conexion, $sql);
        if(mysqli_num_rows($res)==1) {
            //echo 'Usuario autenticado';
            session_start();
            $_SESSION['autenticado'] = true;
            $_SESSION['usuario'] = $u;
            header("location:../dashboard/index.php"); 
        } else {
            header("location:../login/login.php");
        }

    }

?>
