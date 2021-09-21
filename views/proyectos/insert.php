<?php require "views/shared/header.php"; ?>
    <div class="container">
        <h1 class="text-center my-5">
            <?= $data['titulo'];?>
        </h1>
        <form action="index.php?controlador=proyecto&accion=store" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del proyecto</label>
                <input type="text" class="form-control" id="nombre" required="required" name = "nombre" placeholder="Nombre del proyecto">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion del proyecto</label>
                <input type="text" class="form-control" id="descripcion" required="required"name = "descripcion" placeholder="Descripcion del proyecto">
            </div>
            <div class="mb-3">
                <label for="duracion" class="form-label">Duracion del proyecto</label>
                <input type="number" class="form-control" id="duracion" required="required"name = "duracion" placeholder = "Duracion del proyecto">
            </div>
            <button type="submit" class = "btn btn-primary mb-2">Guardar</button>
        </form>
    </div>
<?php require "views/shared/footer.php"; ?>