<?php require "views/shared/header.php"; ?>

<div class="container espacio">
    <h1 class="text-center my-5"> <?php echo $data['titulo'];?></h1>
    <form action="index.php?controlador=desarrollador&accion=update" method="post">
        <input type="hidden" name="idDesarrollador" value="<?= $data['id']; ?>">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del desarrollador</label>
            <input type="text" class="form-control" id="nombre" required="required" name="nombre"
                value="<?= $data['desarrollador']['nombre_desarrollador'];?>">
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido del desarrollador</label>
            <input type="text" class="form-control" id="apellido" required="required" name="apellido"
                value="<?= $data['desarrollador']['apellido'];?>">
        </div>
        <div class="mb-3">
            <label for="duracion" class="form-label">Telefono del desarrollador</label>
            <input type="number" class="form-control" id="telefono" required="required" name="telefono"
                value="<?= $data['desarrollador']['telefono'];?>">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Direccion del desarrollador</label>
            <input type="text" class="form-control" id="direccion" required="required" name="direccion"
                value="<?= $data['desarrollador']['direccion'];?>">
        </div>
        <div class="mb-3">
            <label for="idProyecto" class="form-label">Nombre del proyecto</label>
            <select name="idProyecto" id="idProyecto" class = "form-select">
                        <?php
                            foreach ($data["proyectos"] as $proyecto){
                                $id = $proyecto["idProyecto"];
                                $nombre = $proyecto["nombre"];
                                echo "<option value = $id> $nombre </option>";
                            }
                        ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>

<?php require "views/shared/footer.php"; ?>