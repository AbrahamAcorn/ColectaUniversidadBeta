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
    public function agregarDonador($ids, $nom, $ap, $tel, $direc, $mail, $cat, $fech)
    {
        $sql = "INSERT INTO donadores VALUES('','$nom', '$ap', '$tel', '$direc', $mail, $cat, '$fech')";

        if (mysqli_query($this->conexion->getConexion(), $sql)) {
            //echo "<script> alert('Agregado con EXITO'); </script>"
        } else {
            //echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA?   :(";
        }
    }

    //----------------------------BAJAS-------------------------
    public function eliminarAlumno($id)
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
    public function guardarCambiosAlumno($nc, $no, $pa, $sa, $ed, $se, $ca)
    {
        $sql = "UPDATE donadores SET nombre='$no', primer_ap='$pa', edad=$ed, semestre=$se, carrera='$ca' WHERE num_control='$nc'";

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
    public function cargarDonadores()
    {
        $sql = "SELECT * FROM donadores;";

        return mysqli_query($this->conexion->getConexion(), $sql);
    }

    public function cargarAlumnosConCampo($campo, $valor)
    {
        $sql = "SELECT * FROM Alumnos WHERE $campo = '$valor'";

        return mysqli_query($this->conexion->getConexion(), $sql);
    }
}
