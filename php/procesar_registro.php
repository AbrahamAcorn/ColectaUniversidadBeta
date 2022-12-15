<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //
    include('donacion_dao.php');

    if (isset($_POST['g-recaptcha-response'])) {
        //La respuesta del recaptcha
        $respuesta = $_POST['g-recaptcha-response'];
        //La ip del usuario
        $ipuser = $_SERVER['REMOTE_ADDR'];
        //Tu clave secretra de recaptcha
        $clavesecreta = '6LcvUXIjAAAAALlb-tDpJ63XtdlRmjpgu6ROt8N9';
        //La url preparada para enviar
        $urlrecaptcha = "https://www.google.com/recaptcha/api/siteverify?secret=$clavesecreta&response=$respuesta&remoteip=$ipuser";   
        //Leemos la respuesta (suele funcionar solo en remoto)
        $respuesta = file_get_contents($urlrecaptcha);    
        //Comprobamos el success
        $dividir = explode('"success":', $respuesta);
        $obtener = explode(',', $dividir[1]);   
        //Obtenemos el estado
        $estado = trim($obtener[0]);
        if ($estado == 'true') {
            var_dump($_POST);
            
            $direction = $_POST['calle'];
            $col = $_POST['colonia'];
            $locali = $_POST['municipio'];
            $estate = $_POST['select_estado'];
            $pais = $_POST['select_pais'];
            $paissn=str_replace(".txt","",$pais);
            $cp = $_POST['cp'];
            $nume = $_POST['numero_de_tarjeta'];
            $banco = $_POST['select_banco'];
            $vence = $_POST['vencimiento'];
            $name = $_POST['nombre'];
            $ap1 = $_POST['primer_apellido'];
            $ap2 = $_POST['segundo_apellido'];
            $phone = $_POST['telefono'];
            $email = $_POST['email'];
            $categ = $_POST['select_categoria'];

            if (empty($_POST['fecha_graduacion'])) {
                $graduate = "0000/00/00";
            } else {
                $graduate = $_POST['fecha_graduacion'];
            }
            if ($_POST['budget']=="otro" & isset($_POST['caja_otra_cantidad'])) {
                $promet = $_POST['caja_otra_cantidad'];
            } else {
                $promet = $_POST['budget'];
            }
            //echo($promet);
            $fechabono = date('Y/m/d');
            $fechalimite = date("Y/m/d", strtotime($fechabono . "+ 1 YEAR"));
            $pago = $_POST['select_metodo_pago'];

            if (isset($_POST['select_mensualidades'])) {
                $plazos = $_POST['select_mensualidades'];
            } else {
                $plazos = 1;
            }
            $plazosabon = 1;
            $abono = (floatval($promet) / floatval($plazos));
            $aDAO = new DonacionDAO();
            $aDAO->addall($direction, $col, $locali, $estate, $paissn, $cp, $nume, $banco, $vence, $name, $ap1, $ap2, $phone, $email, $categ, $graduate, $promet, $abono, $fechabono, $fechalimite, $pago, $plazos, $plazosabon);
            
            echo json_encode('ok');
        } else if ($estado == 'false') {
            echo json_encode('captcha');
        }
    }
    
} else {
    header("Location:../404.html");
}
