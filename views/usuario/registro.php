<?php require "views/shared/headerLogin.php"; ?>
    <div class="registro">
	    <h1><?=$data['titulo']; ?></h1>
        <?php
            if(isset($data['error'])){
                echo "<div class = 'alert alert-danger' role='alert'>";
                echo $data['error'];
                echo "</div>";
            }
        ?>
        <form method="post" action="index.php?controlador=usuario&accion=store">
    	    <input type="number" name="cedula"id="cedula" placeholder="Cedula" required="required" class="mb-2" />
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" required="required" class="mb-2" />
            <input type="email" name="email" id="email" placeholder="name@example.com" required="required" class="mb-2" />
            <input type="password" name="contrasenia" id="contrasenia" placeholder="Contraseña" required="required" class="mb-2"/>
            <input type="password" name="contraseniaConfi" id="contraseniaConfi"placeholder="Confirmar contraseña" class="mb-2" required="required" />
            <button type="submit" class="btn btn-primary btn-block btn-large">Guardar</button>
        </form>
        <div class="texto-blanco">
            ¿Ya esta registrado? <a href="index.php?controlador=usuario&accion=verLogin">Iniciar sesion</a>
        </div>
    </div>
<?php require_once "views/shared/footerLogin.php"; ?>