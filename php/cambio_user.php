<?php

    include('usuarios_dao.php');
    $id = $_POST['caja_ids'];
    $nuser = $_POST['caja_user'];
    $nemail = $_POST['caja_correo2'];
    $pasw= $_POST['caja_psw'];
    

    $p_cifrado = sha1($pasw);

    $aDAO = new UsuarioDAO();
    $aDAO->cambioUsuario($id,$nuser,$nemail,$p_cifrado);
    
?>