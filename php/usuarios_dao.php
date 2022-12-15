<?php
include('conexion_bd.php');

class UsuarioDAO
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = new ConexionBD();
    }

    //=====================METODOS PARA ABCC====================

    //----------------------------ALTAS-------------------------
    public function crearUsuario( $user, $email, $passw)
    {
        $sql = "INSERT INTO Users VALUES('',' $user', '$passw', '$email')";

        if (mysqli_query($this->conexion->getConexion(), $sql)) {
            echo "<script> alert('Agregado con EXITO'); </script>";
            header("location: ../login/login.html");
        } else {
            echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA?   :(";
        }
    }

    //----------------------------BAJAS-------------------------
    public function eliminarUsuario($id)
    {
        $sql = "DELETE FROM users WHERE iduser ='$id'";

        if (mysqli_query($this->conexion->getConexion(), $sql)) {
            echo "PERFECTO, CASI SOY ISC :)";
            //echo "<script> alert('Agregado con EXITO'); </script>"
        } else {
            //echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA?   :(";
        }
    }

    //----------------------------CAMBIOS-------------------------
    public function cambioUsuario($id, $user, $email, $password)
    {
        $sql = "UPDATE users SET username='$user', email='$email', passaword='$password' WHERE iduser='$id'";

        if (mysqli_query($this->conexion->getConexion(), $sql)) {
            header("location:../colectaubeta/dashboard/iduser.php");
        } else {;
            echo mysqli_error($this->conexion->getConexion());
        }
    }

    //----------------------------CONSULTAS-------------------------
    public function cargarUsuarios()
    {
        $sql = "SELECT * FROM users;";

        return mysqli_query($this->conexion->getConexion(), $sql);
    }

}
