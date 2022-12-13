<?php
    include('direcc_dao.php');

    $id = $_GET['id'];
    $aDAO = new DireccionDAO;
    $aDAO->eliminarDireccion($id);
?> 