<?php
    class Usuario{

        private $db;

        public function __construct(){
            $this->db = Conexion::conectar();
        }

        public function store($cedula, $nombre, $email, $contrasenia){
            //encriptar la contraseña
            $nuevoPassword = password_hash($contrasenia, PASSWORD_BCRYPT);
            
            $sql = "INSERT INTO usuario (cedula, nombre, email, contrasenia)
                        VALUES ('$cedula', '$nombre','$email', '$nuevoPassword');";
            $this->db->query($sql);
        }

        public function consultarUsuarios($cedula){
            $sql = "SELECT * FROM usuario WHERE cedula = '$cedula'";
            $consulta = $this->db->query($sql);
            $objetoUsuario = $consulta->fetch_assoc();
            return $objetoUsuario;
        }
    }
?>