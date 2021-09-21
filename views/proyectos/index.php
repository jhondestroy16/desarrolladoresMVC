<?php require "views/shared/header.php"; ?>
    <div class="container">
        <h1 class="text-center my-5">
            <?php
                echo $data['titulo'];
            ?>
        </h1>
        <table class="table">
            <thead>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                <?php
                    foreach($data['proyectos'] as $item){
                ?>
                <tr>
                    <td> <?php echo $item['nombre']?> </td>
                    <td> <?php echo $item['descripcion']?> </td>
                    <td>
                        <a href="index.php?controlador=proyecto&accion=view&idProyecto=<?=$item['idProyecto']?>" class="btn btn-primary mb-2">Ver mas</a>
                        <a href="index.php?controlador=proyecto&accion=edit&idProyecto=<?=$item['idProyecto']?>" class="btn btn-warning mb-2">Actualizar</a>
                        <a href="index.php?controlador=proyecto&accion=delete&idProyecto=<?=$item['idProyecto']?>" class="btn btn-danger mb-2">Eliminar</a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
<?php require "views/shared/footer.php"; ?>