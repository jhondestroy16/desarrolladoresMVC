<?php
    require_once "config/config.php";
    require_once "core/routes.php";
    
    require_once "config/database.php";
    require_once "controllers/ProyectoController.php";

    if(isset($_GET['controlador'])){
        $controlador = cargarControlador($_GET['controlador']);
        if(isset($_GET['accion'])){
            if(isset($_GET['idProyecto'])){
                cargarAccion($controlador, $_GET['accion'], $_GET['idProyecto']);
            }else if(isset($_GET['idDesarrollador'])){
                cargarAccion($controlador, $_GET['accion'], $_GET['idDesarrollador']);
            }else if(isset($_GET['idUsuario'])){
                cargarAccion($controlador, $_GET['accion'], $_GET['idUsuario']);
            }else{
                cargarAccion($controlador, $_GET['accion']);
            }
        }else{
            cargarAccion($controlador, ACCION_PRINCIPAL);
        }
    }else{
        $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
        cargarAccion($controlador, ACCION_PRINCIPAL);
    }
?>