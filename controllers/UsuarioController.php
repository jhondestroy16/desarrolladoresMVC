<?php
    class UsuarioController{
        public function __construct(){

            require_once "models/Usuario.php";
            //inicio de sesion
            session_start();
        }

        public function verRegistro(){
            $data['titulo'] = "Registro de usuario";
            require_once "views/usuario/registro.php";
        }

        public function verLogin(){
            $data['titulo'] = "Iniciar sesion";
            require_once "views/usuario/login.php";
        }

        public function store(){
            $cedula = $_POST['cedula'];
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $contrasenia = $_POST['contrasenia'];
            $contraseniaConfi = $_POST['contraseniaConfi'];

            if($contrasenia != $contraseniaConfi){
                $data['titulo'] = "Registro de usuario";
                $data['error'] = "No coincide la contraseña";
                require_once "views/usuario/registro.php";
            }else{
                $usuario = new Usuario();
                $usuario->store($cedula, $nombre, $email, $contrasenia);
                header('Location: index.php?controlador=usuario&accion=verLogin');
            }
        }

        public function login(){
            $cedula = $_POST['cedula'];
            $contrasenia = $_POST['contrasenia'];

            $modeloUsuario = new Usuario();
            $usuario = $modeloUsuario->consultarUsuarios($cedula);
            if($usuario == null) {
                $data['titulo'] = "Iniciar sesion";
                $data['error'] = "Usuario no registrado";
                require_once "views/usuario/login.php";
            }else{
                if(password_verify($contrasenia, $usuario['contrasenia'])){
                    $_SESSION["cedula"] = $usuario["cedula"];
                    header("Location: index.php");
                }else{
                    $data['titulo'] = "Iniciar sesion";
                    $data['error'] = "Contraseña incorrecta, intente de nuevo";
                    require_once "views/usuario/login.php";
                }
            }
        }

        public function logout(){
            unset($_SESSION['cedula']);
            header("Location: index.php?controlador=usuario&accion=verLogin");
        }
    }
?>