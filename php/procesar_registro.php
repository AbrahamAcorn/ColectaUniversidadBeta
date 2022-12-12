<?php

    include('donacion_dao.php');

    //Validación de datos
    $direction = $_POST['caja_calle'];
    $col = $_POST['caja_col'];
    $locali = $_POST['caja_municipio'];
    $estate = $_POST['select_estado'];
    $pais = $_POST['select_pais'];
    $cp = $_POST['caja_cp'];
    $nume = $_POST['numero_tarjeta'];
    $banco = $_POST['select_banco'];
    $vence = $_POST['vencimiento'];
    $name = $_POST['caja_nombre'];
    $ap1 = $_POST['caja_ap1'];
    $ap2 = $_POST['caja_ap2'];
    $phone = $_POST['caja_telefono'];
    $email = $_POST['caja_email'];
    $categ = $_POST['select_categoria'];
    $graduate = $_POST['fecha_graduacion'];
    $promet = $_POST['caja_otra_cantidad'];
    $abono = $_POST['abono'];
    $fechabono = date('Y/m/d');
    $fechalimite = date("Y/m/d",strtotime($fechabono."+ 1 YEAR"));
    $pago = $_POST['select_pago'];
    $plazos = $_POST['select_mensualidades'];
    $plazosabon = 1;

    echo(printf("direccion $direction--$col--$locali--$estate--$pais--$cp
    ,tarjeta $nume--$banco--$vence, donador$name--$ap1--$ap2--$phone--$categ
    --$graduate,donacion $promet--$abono--$fechabono--$fechalimite--$pago--$plazos--$plazosabons"));

    echo "<script> alert('Agregado con EXITO'); </script>";
?>