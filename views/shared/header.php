<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="shortcut icon" href="assets/img/Icono.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title> <?php echo $data['titulo']; ?> </title>
</head>

<body>
    <?php
    if(!isset($_SESSION)){
        session_start();
    }
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php?controlador=home&accion=index">
                <img src="assets/img/sena.png" alt="Logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropProyectos" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Proyectos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropProyectos">
                            <li><a class="dropdown-item" href="index.php?controlador=proyecto&accion=index">Listar</a></li>
                            <li><a class="dropdown-item" href="index.php?controlador=proyecto&accion=insert">Crear nuevo</a></li>
                        </ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropDesarrolladore" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Desarrolladores
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropDesarrolladores">
                            <li><a class="dropdown-item"
                                    href="index.php?controlador=desarrollador&accion=index">Listar</a></li>
                            <li><a class="dropdown-item" href="index.php?controlador=desarrollador&accion=insert">Crear
                                    nuevo</a></li>
                        </ul>
                </ul>
                <ul class="navbar-nav">
                    <?php
                        if(isset($_SESSION["cedula"])){
                            echo "<li class='nav-item'>";
                            echo "<a class ='nav-link' href='index.php?controlador=usuario&accion=logout'>Salir</a>";
                            echo "</li>";
                        }else{
                            echo "<li class='nav-item'>";
                            echo "<a class ='nav-link' href='index.php?controlador=usuario&accion=verLogin'>Ingresar</a>";
                            echo "</li>";

                            echo "<li class='nav-item'>";
                            echo "<a class ='nav-link' href='index.php?controlador=usuario&accion=verRegistro'>Registrar</a>";
                            echo "</li>";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>