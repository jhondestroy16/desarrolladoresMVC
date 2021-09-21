<?php
    class HomeController{

        public function index(){
            if(!isset($_SESSION)){
                session_start();
            }
            if(isset($_SESSION["cedula"])){
                $data['titulo'] = "Proyecto MVC PHP";
                require_once "views/home/index.php";
            }else{
                header("Location: index.php?controlador=usuario&accion=verLogin");
            }
        }
    }
?>