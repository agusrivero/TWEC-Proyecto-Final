<?php
session_start()
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <?php
        include "templates/head.php";
    ?>
</head>
<body>

    <?php
    include "templates/starter.php";
    ?>

    <div id="brands">
        <?php
        include "templates/brands.php";
        ?>
    </div>

    <div class="modal fade" id="formulario" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <?php
        include "templates/modal.php";
        ?>
    </div>

    <?php
        include "templates/scripts.php";
    ?>
    <footer>
        <?php
        include "templates/contacto.php";
        ?>
    </footer>

</body>
</html>