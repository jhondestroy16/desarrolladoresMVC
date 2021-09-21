<?php require "views/shared/header.php"; ?>

<div class="container">
    <h1 class="text-center my-5"> <?php echo $data['titulo'];?></h1>
    <form action="index.php?controlador=proyecto&accion=update" method="post">
        <input type="hidden" name="idProyecto" value="<?= $data['id']; ?>">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del proyecto</label>
            <input type="text" class="form-control" id="nombre" required="required"name = "nombre" placeholder="Nombre del proyecto" value="<?= $data['proyecto']['nombre'];?>">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion del proyecto</label>
            <input type="text" class="form-control" id="descripcion" required="required"name = "descripcion" placeholder="Descripcion del proyecto" value="<?= $data['proyecto']['descripcion'];?>">
        </div>
        <div class="mb-3">
            <label for="duracion" class="form-label">Duracion del proyecto</label>
            <input type="number" class="form-control" id="duracion" required="required" name = "duracion" placeholder = "Duracion del proyecto" value="<?= $data['proyecto']['duracion'];?>">
        </div>
        <button type="submit" class = "btn btn-primary">Actualizar</button>
    </form>
</div>

<?php require "views/shared/footer.php"; ?>