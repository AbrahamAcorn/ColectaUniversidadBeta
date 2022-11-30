<?php
    class ConexionBD{
        private $conexion;
        private $host = 'localhost:3306';
        private $usuario = 'abam';
        private $contraseña = 'pepe';
        private $bd = 'ubeta';

        public function __construct(){
            $this->conexion = mysqli_connect($this->host, $this->usuario, $this->contraseña, $this->bd);
            if(!$this->conexion){
                die("Error en conexion: ". mysqli_connect_error() . mysqli_connect_errno());
            }else{
                
            }
        }

        public function getConexion(){
            return $this->conexion;
        }
    }
?>