<?php

    include('donador/donador_dao.php');
    $DAO=new DonadorDAO();
     $res=$DAO->cargarDonadores();
     var_dump($res);
     while($fila = mysqli_fetch_assoc($res)){
        printf("<tr>
                    <td>".$fila['id']."</td>
                    <td>".$fila['nombre']."</td>
                    <td>".$fila['apellido']."</td>
                    <td>".$fila['Telefono']."</td>
                    <td>".$fila['direccion']."</td>
                    <td>".$fila['correo']."</td>
                    <td>".$fila['categoria']."</td>
                    <td>".$fila['graduacion']."</td>
                </tr>", $fila['id'], $fila['nombre'], $fila['apellido'], $fila['Telefono'], $fila['direccion'], $fila['correo'], $fila['categoria'], $fila['graduacion']);
    }
?>