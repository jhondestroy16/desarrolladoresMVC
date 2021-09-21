<?php
    class Desarrollador{
        private $db;
        private $desarrolladores;

        public function __construct(){
            $this->db = Conexion::conectar();
            $this->desarrolladores = array();
        }

        public function listar(){
            $sql = "SELECT * FROM desarrollador";
            
            $resultado = $this->db->query($sql);

            // if(!$resultado){
            //     echo "ERROR, consulta errada debido a \n";
            //     echo "query: $sql \n";
            //     echo "Errno: $mysql->errno \n";
            //     echo "Error: $mysql->error \n";
            //     exit;
            // }

            while($row = $resultado->fetch_assoc()) {
                $this->desarrolladores[] = $row;
            }
            return $this->desarrolladores;
        }
        
        public function insert($nombre, $apellido, $telefono, $direccion, $idProyecto){
            $sql = "INSERT INTO desarrollador (nombre, apellido, telefono, direccion, Proyecto_idProyecto) 
            VALUES ('$nombre','$apellido', '$telefono', '$direccion', '$idProyecto')";

            $this->db->query($sql);
        }

        public function getDesarrollador($id){
            $sql = "SELECT D.idDesarrollador, D.nombre AS nombre_desarrollador, D.apellido, 
            D.telefono, D.direccion, P.nombre
            FROM desarrollador D
            JOIN proyecto P
            ON D.Proyecto_idProyecto = P.idProyecto
            WHERE idDesarrollador = $id";

            $resultado = $this->db->query($sql);
            $row = $resultado->fetch_assoc();

            return $row;
        }

        public function update($id, $nombre, $apellido, $telefono, $direccion, $idProyecto){
            $sql = "UPDATE desarrollador
            SET nombre = '$nombre', apellido = '$apellido', telefono = '$telefono', 
            direccion = '$direccion',  Proyecto_idProyecto = '$idProyecto'
            WHERE idDesarrollador = $id";

            $resultado= $this->db->query($sql);
        }

        public function delete($id){
            $sql = "DELETE FROM desarrollador WHERE idDesarrollador = $id";

            $resultado= $this->db->query($sql);
        }
    }
?>