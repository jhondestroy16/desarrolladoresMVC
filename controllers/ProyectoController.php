<?php
    class ProyectoController{
        public function __construct(){
            require_once "models/Proyecto.php";
        }

        public function index(){
            if(!isset($_SESSION)){
                session_start();
            }
            if(isset($_SESSION["cedula"])){
                $proyectos = new Proyecto();
                $data["titulo"] = "Proyectos";
                $data["proyectos"] = $proyectos->listar();
    
                //Cargar la vista
                require_once "views/proyectos/index.php";
            }else{
                header("Location: index.php?controlador=usuario&accion=verLogin");
            }
        }

        public function insert(){
            $data['titulo'] = "Crear proyecto";
            require_once "views/proyectos/insert.php";
        }

        public function store(){
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $duracion = $_POST['duracion'];

            if($nombre != null && $duracion != null && $descripcion != null){
                $proyecto = new Proyecto();
                $proyecto->insert($nombre, $descripcion, $duracion);
                $this->index();
            }else{
                echo '<script language="javascript">alert("Se requieren todos los datos");</script>';
                $this->insert();
            }
        }

        public function view($id){
            $proyecto = new Proyecto();
            $data ['proyecto'] = $proyecto->getProyecto($id);
            $data ['titulo'] = "Detalles del proyecto";
            require_once "views/proyectos/view.php";
        }


        public function edit($id){
            $proyecto = new Proyecto();
            $data['id'] = $id;
            $data['proyecto'] = $proyecto->getProyecto($id);
            $data['titulo'] = "Editar proyecto";
            require_once "views/proyectos/edit.php";
        }

        public function update(){
            $id = $_POST['idProyecto'];
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $duracion = $_POST['duracion'];

            if($nombre != null && $duracion != null && $descripcion != null){
                $proyecto = new Proyecto();
                $proyecto->update($id, $nombre, $descripcion, $duracion);
                $this->index();
            }else{
                echo '<script language="javascript">alert("Se requieren todos los datos");</script>';
                $this->edit();
            }
        }
        public function delete($id){
            $proyecto = new Proyecto();
            $proyecto->delete($id);
            $this->index();
        }
    }
?>