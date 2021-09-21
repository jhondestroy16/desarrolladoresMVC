<?php require_once "views/shared/headerLogin.php"; ?>
    <div class="login">
	    <h1><?=$data['titulo']; ?></h1>

        <?php
            if(isset($data['error'])){
                echo "<div class = 'alert alert-danger' role='alert'>";
                echo $data['error'];
                echo "</div>";
            }
        ?>
        <form method="post" action="index.php?controlador=usuario&accion=login">
    	    <input type="number" name="cedula" placeholder="Cedula" required="required" class="mb-2" />
            <input type="password" name="contrasenia" placeholder="Contraseña" required="required" class="mb-2" />
            <button type="submit" class="btn btn-primary btn-block btn-large">Acceder</button>
        </form>
        <div class="texto-blanco">
            ¿No esta registrado? <a href="index.php?controlador=usuario&accion=verRegistro">Registrese</a>
        </div>
    </div> 
    <?php require_once "views/shared/footerLogin.php"; ?>