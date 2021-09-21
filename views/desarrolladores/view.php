<?php require "views/shared/header.php"; ?>
<div class="container">
        <h1 class="text-center my-5"> <?=$data['titulo']; ?> </h1>
        <p>
            <span class="fw-bold">ID</span>
            <?= $data['desarrollador']['idDesarrollador']; ?>
        </p>
        <p>
            <span class="fw-bold">Nombre</span>
            <?= $data['desarrollador']['nombre_desarrollador']; ?>
        </p>
        <p>
            <span class="fw-bold">Apellido</span>
            <?= $data['desarrollador']['apellido']; ?>
        </p>
        <p>
            <span class="fw-bold">Telefono</span>
            <?= $data['desarrollador']['telefono']; ?>
        </p>
        <p>
            <span class="fw-bold">Direccion</span>
            <?= $data['desarrollador']['direccion']; ?>
        </p>
        <p>
            <span class="fw-bold">Nombre del proyecto</span>
            <?= $data['desarrollador']['nombre']; ?>
        </p>
        <a href="index.php?controlador=desarrollador" class= "btn btn-primary">Volver</a>
    </div>
<?php require "views/shared/footer.php"; ?>