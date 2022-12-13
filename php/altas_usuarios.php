<?php

    include('usuarios/usuarios_dao.php');

    //Validación de datos

    $nuser = $_POST['caja_user'];
    $nemail = $_POST['caja_correo2'];
    $pasw= $_POST['caja_psw'];
    $confirm = $_POST['caja_confirm'];

    $aDAO = new UsuarioDAO();
    $aDAO->crearUsuario($nuser,$nemail,$pasw);
    
?>