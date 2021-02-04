<div id="starter" class="row starter">
    <div class="col-1"></div>
    <div class="menu col-5">
        <h1 id="menu-title">Bienvenido a Guitar Dream</h1>
        <p id="menu-descripcion">En esta página web podrás encontrar todos los tipos de guitarras eléctricas y así poder descubrir la guitarra que buscabas</p>
        <ul>
            <li><a href="guitarras_view.php">Guitarras</a></li>
            <li><a href="guitarristas.php">Guitarristas</a></li>
            <li><a href="#contact">Contacto</a></li>
            <?php
            if(!isset($_SESSION['username'])):
            ?>
            <li><a href="templates/login_view.php">Login</a></li>
            <?php elseif ($_SESSION['username']=='root'):?>
            <li><a href="#" data-target="#formulario" data-toggle="modal">Añadir</a></li>
            <li><a href="scripts/logout.php">Cerrar Sesion</a></li>
            <?php endif;?>
        </ul>
    </div>
</div>



