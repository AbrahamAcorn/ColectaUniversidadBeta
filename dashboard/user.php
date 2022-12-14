<?php
    session_start();
    if($_SESSION['autenticado'] == false){
        header("location:../login/login.php");
    }
?>