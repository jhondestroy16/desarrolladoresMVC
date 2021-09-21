<?php
    class Conexion{
        public static function conectar(){
            try{
            $servername = "localhost";
            $database = "proyectos";
            $username = "JhonDestroy";
            $password = "170597";
            $conexion = new mysqli($servername, $username, $password, $database);
            }
            catch (Exception $e){
                echo 'ERROR:'.$e->getMessage();
            }
            return $conexion;
        }
    }
?>