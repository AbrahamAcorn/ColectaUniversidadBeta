<?php
include('conexion_bd.php');
class DonacionDAO
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = new ConexionBD();
    }

    //=====================METODOS PARA ABCC====================

    //----------------------------ALTAS-------------------------
    public function agregarDonacion($donador,$prometido,$abono,$fechabono,$fechalimite,$formapago,$plazos,$pabonados)
    {
        $sql = "INSERT INTO donadores VALUES('','$donador', '$prometido',  $abono, '$fechabono', '$fechalimite', $formapago, $plazos, '$pabonados')";

        if (mysqli_query($this->conexion->getConexion(), $sql)) {
            //echo "<script> alert('Agregado con EXITO'); </script>"
        } else {
            //echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA?   :(";
        }
    }

    //----------------------------BAJAS-------------------------
    public function eliminarDonador($id)
    {
        $sql = "DELETE FROM donadores WHERE id ='$id'";

        if (mysqli_query($this->conexion->getConexion(), $sql)) {
            echo "PERFECTO, CASI SOY ISC :)";
            //echo "<script> alert('Agregado con EXITO'); </script>"
        } else {
            //echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA?   :(";
        }
    }

    //----------------------------CAMBIOS-------------------------
    public function CambiosDonadore($id,$nom, $ap, $ap2, $tel, $email, $categ, $graduate, $tarjeta, $direccion)
    {
        $sql = "UPDATE donadores SET nombre='$nom', ap1='$ap', ap2=$ap2, tel=$tel, email='$email', categ='$categ', graduate='$graduate', tarjeta='$tarjeta',direccion='$direccion' WHERE num_control='$id'";

        if (mysqli_query($this->conexion->getConexion(), $sql)) {
            //echo "PERFECTO, CASI SOY ISC :)";
            echo "<script> alert('Agregado con EXITO'); </script>";
            //header("location:../vista/formulario_consultas.php");
        } else {
            echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA?   :(";
            echo mysqli_error($this->conexion->getConexion());
        }
    }

    //----------------------------CONSULTAS-------------------------
    public function cargarDonaciones()
    {
        $sql = "SELECT * FROM donaciones;";

        return mysqli_query($this->conexion->getConexion(), $sql);
    }

    public function cargarDonacionesFull()
    {
        $sql = "SELECT * FROM donaciones_full";

        return mysqli_query($this->conexion->getConexion(), $sql);
    }

    public function addall($direction, $col,$locali,$estate,$pais,$cp,$nume,$banco,$vence,$name,$ap1,$ap2,$phone,$email,$categ,$graduate,$promet,$abono,$fechbono,$fechlim,$pago,$plazo,$plazoabon){
        $sql = "CALL registra_todo('$direction', '$col','$locali','$estate','$pais','$cp','$nume','$banco','$vence','$name','$ap1','$ap2','$phone','$email','$categ','$graduate','$promet','$abono','$fechbono','$fechlim','$pago','$plazo','$plazoabon');";

        if (mysqli_query($this->conexion->getConexion(), $sql)) {
            //echo "PERFECTO, CASI SOY ISC :)";
            echo "<script> alert('Agregado con EXITO'); </script>";
            //header("location:../vista/formulario_consultas.php");
        } else {
            //echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA?   :(";
            echo mysqli_error($this->conexion->getConexion());
        }
    }

    public function cargarAlumnosConCampo($campo, $valor)
    {
        $sql = "SELECT * FROM donadores WHERE $campo = '$valor'";

        return mysqli_query($this->conexion->getConexion(), $sql);
    }
}
