<?php
    include('usuarios_dao.php');
    $id = $_GET['id'];
    $aDAO = new UsuarioDAO;
    $aDAO->eliminarUsuario($id);
?> 