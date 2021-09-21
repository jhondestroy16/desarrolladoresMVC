<?php require "views/shared/header.php"; ?>
    <div class="container">
        <h1 class="text-center my-5"> <?php echo $data['titulo'];?> </h1>
        <table class="table">
            <thead>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                <?php
                    foreach($data['desarrolladores'] as $desarrollador){
                ?>
                <tr>
                    <td> <?php echo $desarrollador['nombre']?> </td>
                    <td> <?php echo $desarrollador['apellido']?> </td>
                    <td>
                        <a href="index.php?controlador=desarrollador&accion=view&idDesarrollador=<?=$desarrollador['idDesarrollador']?>" class="btn btn-primary mb-2">Ver mas</a>
                        <a href="index.php?controlador=desarrollador&accion=edit&idDesarrollador=<?=$desarrollador['idDesarrollador']?>" class="btn btn-warning mb-2">Actualizar</a>
                        <a href="index.php?controlador=desarrollador&accion=delete&idDesarrollador=<?=$desarrollador['idDesarrollador']?>" class="btn btn-danger mb-2">Eliminar</a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
<?php require "views/shared/footer.php"; ?>