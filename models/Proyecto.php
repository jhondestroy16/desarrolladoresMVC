<?php
    class Proyecto{
        private $db;
        private $proyectos;

        public function __construct(){

            $this->db = Conexion::conectar();
            $this->proyectos = array();
        }

        public function listar(){
            $sql = "SELECT * FROM proyecto
            ORDER BY duracion ASC";
            $resultado = $this->db->query($sql);

            if(!$resultado){
                echo "ERROR, consulta errada debido a \n";
                echo "query: $sql \n";
                echo "Errno: $mysql->errno \n";
                echo "Error: $mysql->error \n";
                exit;
            }
            while($row = $resultado->fetch_assoc()) {
                $this->proyectos[] = $row;
            }
            return $this->proyectos;
        }
        
        public function insert($nombre, $descripcion, $duracion){
            $sql = "INSERT INTO proyecto (nombre, descripcion, duracion ) 
                    VALUES ('$nombre', '$descripcion', $duracion)";

            $this->db->query($sql);
        }

        //informacion de un proyecto
        public function getProyecto($id){
            $sql = "SELECT * FROM proyecto 
                    WHERE idProyecto = $id";

            $resultado = $this->db->query($sql);
            $row = $resultado->fetch_assoc();

            return $row;
        }
        public function update($id, $nombre, $descripcion, $duracion){
            $sql = "UPDATE proyecto 
            SET nombre = '$nombre', descripcion = '$descripcion', duracion = $duracion, Fecha_creacion = current_timestamp
            WHERE idProyecto = $id";
            $resultado = $this->db->query($sql);
        }

        public function delete($id){
            $sql = "DELETE FROM proyecto WHERE idProyecto = $id";
            $resultado = $this->db->query($sql);
        }
        
    }
?>