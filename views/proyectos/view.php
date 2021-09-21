<?php require "views/shared/header.php"; ?>
    <div class="container">
        <h1 class="text-center my-5"><?=$data['titulo']; ?></h1>
        <p>
            <span class="fw-bold">ID</span>
            <?= $data['proyecto']['idProyecto']; ?>
        </p>
        <p>
            <span class="fw-bold">Nombre</span>
            <?= $data['proyecto']['nombre']; ?>
        </p>
        <p>
            <span class="fw-bold">Descripcion</span>
            <?= $data['proyecto']['descripcion']; ?>
        </p>
        <p>
            <span class="fw-bold">Duracion</span>
            <?= $data['proyecto']['duracion']; ?>
        </p>
        <p>
            <span class="fw-bold">Fecha creacion</span>
            <?= $data['proyecto']['Fecha_creacion']; ?>
        </p>
        <a href="index.php?controlador=proyecto" class= "btn btn-primary">Volver</a>
    </div>
<?php require "views/shared/footer.php"; ?>