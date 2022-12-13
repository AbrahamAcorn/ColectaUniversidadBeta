<?php
session_start();
include('donaciones/donacion_dao.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (
        isset($_POST['caja_calle']) & isset($_POST['caja_col']) & isset($_POST['caja_municipio']) &
        isset($_POST['caja_nombre']) & isset($_POST['caja_ap1']) & isset($_POST['caja_ap2'])) {

            $direction = $_POST['caja_calle'];
            $col = $_POST['caja_col'];
            $locali = $_POST['caja_municipio'];
            $estate = $_POST['s_estate'];
            $pais = $_POST['select_pais'];
            $cp = $_POST['caja_cp'];
            $nume = $_POST['numero_tarjeta'];
            $banco = $_POST['s_banco'];
            $vence = $_POST['vencimiento'];
            $name = $_POST['caja_nombre'];
            $ap1 = $_POST['caja_ap1'];
            $ap2 = $_POST['caja_ap2'];
            $phone = $_POST['caja_telefono'];
            $email = $_POST['caja_email'];
            $categ = $_POST['select_categoria'];

            if (empty($_POST['fecha_graduacion'])) {
                $graduate = "1000/01/01";
            } else {
                $graduate = $_POST['fecha_graduacion'];
            }
            if (isset($_POST['budget'])) {
                $promet = $_POST['budget'];
                
            } else {
                $promet = $_POST['caja_otra_cantidad'];
            }
            
            $fechabono = date('Y/m/d');
            $fechalimite = date("Y/m/d", strtotime($fechabono . "+ 1 YEAR"));
            $pago = $_POST['select_pago'];
        
            if (isset($_POST['select_mensualidades'])) {
                $plazos = $_POST['select_mensualidades'];
            } else {
                $plazos = 1;
            }
            $plazosabon = 1;

            $abono = (floatval($promet)/floatval($plazos));


    } else {
        
        header("Location:../index.php");
        echo "<script> alert('Faltan datos'); </script>";
    }

    echo (printf("direccion $direction--$col--$locali--$estate--$pais--$cp
    ,tarjeta $nume--$banco--$vence, donador $name--$ap1--$ap2--$phone--$categ
    --$graduate,donacion $promet--$fechabono--$fechalimite--$pago--$plazos--$plazosabon---$abono----"));
  // echo "<script> alert('Agregado con EXITO'); </script>";
    //header("Location:../index.php");
    $aDAO = new DonacionDAO();
    $aDAO->addall($direction, $col,$locali,$estate,$pais,$cp,$nume,$banco,$vence,$name,$ap1,$ap2,$phone,$email,$categ,$graduate,$promet,$abono,$fechabono,$fechalimite,$pago,$plazos,$plazosabon);
} else {
    header("Location:../index.php");
}

?>