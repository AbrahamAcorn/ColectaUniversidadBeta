<?php

    include('donador/donador_dao.php');
    $DAO=new DonadorDAO();
     $res=$DAO->cargarDonadores();
     var_dump($res);
     
?>