<?php require "views/shared/header.php"; ?>
<div class="container texto">
    <h1>INICIO</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime voluptates ipsum ex esse dicta assumenda nesciunt
        voluptas perspiciatis. Delectus animi quis error harum impedit esse accusamus maxime qui unde et.</p>

    <?php
        if(isset($_SESSION)){
            echo "<p>Bienvenido usuario ". $_SESSION["cedula"]."</p>";
        }else{
            echo "<p>Bienvenido usuario, no se ha registrado</p>";
        }
    ?>
</div>
<?php require "views/shared/footer.php"; ?>