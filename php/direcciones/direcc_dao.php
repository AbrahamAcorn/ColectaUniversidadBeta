<?php
include('conexion_bd.php');

class DonadorDAO
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = new ConexionBD();
    }

    //=====================METODOS PARA ABCC====================

    //----------------------------ALTAS-------------------------
    public function agregarDireccion($direcc, $col, $local, $estado, $pais, $cp)
    {
        $sql = "INSERT INTO direcciones VALUES('','$direcc', '$col', '$local', '$estado', $pais, $cp)";

        if (mysqli_query($this->conexion->getConexion(), $sql)) {
            //echo "<script> alert('Agregado con EXITO'); </script>"
        } else {
            //echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA?   :(";
        }
    }

    //----------------------------BAJAS-------------------------
    public function eliminarDireccion($id)
    {
        $sql = "DELETE FROM direcciones WHERE id ='$id'";

        if (mysqli_query($this->conexion->getConexion(), $sql)) {
            echo "PERFECTO, CASI SOY ISC :)";
            //echo "<script> alert('Agregado con EXITO'); </script>"
        } else {
            //echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA?   :(";
        }
    }

    //----------------------------CAMBIOS-------------------------
    public function cambiaDireccion($id,$direcc, $col, $local, $estado, $pais, $cp)
    {
        $sql = "UPDATE direcciones SET direccion='$direcc', colonia='$col', localidad=$local, estado=$estado, pais='$pais', cp='$cp' WHERE num_control='$id'";

        if (mysqli_query($this->conexion->getConexion(), $sql)) {
            //echo "PERFECTO, CASI SOY ISC :)";
            //echo "<script> alert('Agregado con EXITO'); </script>"
            header("location:../vista/formulario_consultas.php");
        } else {
            //echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA?   :(";
            echo mysqli_error($this->conexion->getConexion());
        }
    }

    //----------------------------CONSULTAS-------------------------
    public function cargarDirecciones()
    {
        $sql = "SELECT * FROM direcciones ;";

        return mysqli_query($this->conexion->getConexion(), $sql);
    }

    public function cargarAlumnosConCampo($campo, $valor)
    {
        $sql = "SELECT * FROM direcciones WHERE $campo = '$valor'";

        return mysqli_query($this->conexion->getConexion(), $sql);
    }
}
