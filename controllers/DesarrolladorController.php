<?php
    class DesarrolladorController{
        public function __construct(){
            require_once "models/Desarrollador.php";
            require_once "models/Proyecto.php";
        }

        public function index(){
            if(!isset($_SESSION)){
                session_start();
            }
            if(isset($_SESSION["cedula"])){
                $desarrolladores = new Desarrollador();
                $data["titulo"] = "Desarrolladores";
                $data["desarrolladores"] = $desarrolladores->listar();
    
                //Cargar la vista
                require_once "views/desarrolladores/index.php";
            }else{
                header("Location: index.php?controlador=usuario&accion=verLogin");
            }
        }

        public function insert(){
            $proyectos = new Proyecto();
            $data['titulo'] = "Crear Desarrollador";
            $data["proyectos"] = $proyectos->listar();
            require_once "views/desarrolladores/insert.php";
        }

        public function store(){
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $telefono = $_POST['telefono'];
            $direccion = $_POST['direccion'];
            $idProyecto = $_POST['idProyecto'];


            if ($nombre != null && $apellido != null && $telefono != null && $direccion != null && $idProyecto) {
                $desarrollador = new Desarrollador();
                $desarrollador->insert($nombre, $apellido, $telefono, $direccion, $idProyecto);
                $this->index();
            }else{
                echo '<script language="javascript">alert("Se requieren todos los datos");</script>';
                $this->insert();
            }
        }

        public function view($id){
            $desarrollador = new Desarrollador();
            $data ['desarrollador'] = $desarrollador->getDesarrollador($id);
            $data ['titulo'] = "Detalles del desarrollador";
            require_once "views/desarrolladores/view.php";
        }


        public function edit($id){
            $desarrollador = new Desarrollador();
            $proyectos = new Proyecto();
            $data['id'] = $id;
            $data['desarrollador'] = $desarrollador->getDesarrollador($id);
            $data['titulo'] = "Editar desarrollador";
            $data["proyectos"] = $proyectos->listar();
            require_once "views/desarrolladores/edit.php";
        }

        public function update(){
            $id = $_POST['idDesarrollador'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $telefono = $_POST['telefono'];
            $direccion = $_POST['direccion'];
            $idProyecto = $_POST['idProyecto'];

            if ($nombre != null && $apellido != null && $telefono != null && $direccion != null) {
                $desarrollador = new Desarrollador();
                $desarrollador->update($id, $nombre, $apellido, $telefono, $direccion, $idProyecto);

                $this->index();
            }else{
                echo '<script language="javascript">alert("Se requieren todos los datos");</script>';
                $this->edit();
            }
        }
        public function delete($id){
            $desarrollador = new Desarrollador();
            $desarrollador->delete($id);
            $this->index();
        }
    }
?>