<?php

    include('usuarios/usuarios_dao.php');

    $nuser = $_POST['caja_user'];
    $nemail = $_POST['caja_correo2'];
    $pasw= $_POST['caja_psw'];
    $confirm = $_POST['caja_confirm'];

    $p_cifrado = sha1($pasw);

    $aDAO = new UsuarioDAO();
    $aDAO->crearUsuario($nuser,$nemail,$p_cifrado);
    
?>