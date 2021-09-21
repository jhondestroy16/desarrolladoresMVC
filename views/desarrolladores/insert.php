<?php require "views/shared/header.php"; ?>
<div class="container">
    <h1 class="text-center my-5">
        <?= $data['titulo'];?>
    </h1>
    <form action="index.php?controlador=desarrollador&accion=store" method="post">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del desarrollador</label>
            <input type="text" class="form-control" id="nombre" required="required" name="nombre" placeholder="Nombre del desarrollador">
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido del desarrollador</label>
            <input type="text" class="form-control" id="apellido" required="required" name="apellido"
                placeholder="Apellido del desarrollador">
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono del desarrollador</label>
            <input type="number" class="form-control" id="telefono" required="required" name="telefono"
                placeholder="Telefono del desarrollador" maxlength="10">
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Direccion del desarrollador</label>
            <input type="text" class="form-control" id="direccion" required="required" name="direccion"
                placeholder="Direccion del desarrollador">
        </div>
        <div class="mb-3">
            <label for="idProyecto" class="form-label">Seleccione el proyecto</label>
            <select name="idProyecto" id="idProyecto" class="form-select">
                <?php
                            foreach ($data["proyectos"] as $proyecto){
                                $id = $proyecto["idProyecto"];
                                $nombre = $proyecto["nombre"];
                                echo "<option value = $id> $nombre </option>";
                            }
                        ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
<?php require "views/shared/footer.php"; ?>