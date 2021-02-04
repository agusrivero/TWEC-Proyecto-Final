<?php
session_start()
?>

<!doctype html>
<html lang="en">
<head>
    <?php
    include "templates/head.php";
    ?>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="assets/navbar-style.css">
</head>
<body id="guitarras-body">
<?php
include "templates/navbar.php";
?>
<main>
    <section>
        <br><br><br>
        <h1>Nuestras Guitarras</h1>
        <br>
        <div id="content"><img src="imagenes/pageloader.gif" alt="Cargando..." /></div>
    </section>
</main>




    <?php
    include "templates/scripts.php";
    ?>

    <?php
    include "scripts/show_guitar.php"
    ?>

    <div class="modal fade" id="formulario" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <?php
        include "scripts/modify_file_view.php";
        ?>
    </div>
    <script>
        (function() {

            var nav = $('nav'),
                menu = $('nav h1'),
                main = $('main'),
                open = false,
                hover = false;

            menu.on('click', function() {
                open = !open ? true : false;
                nav.toggleClass('menu-active');
                main.toggleClass('menu-active');
                nav.removeClass('menu-hover');
                main.removeClass('menu-hover');
                console.log(open);
            });
            menu.hover(
                function() {
                    if (!open) {
                        nav.addClass('menu-hover');
                        main.addClass('menu-hover');
                    }
                }, function() {
                    nav.removeClass('menu-hover');
                    main.removeClass('menu-hover');
                }
            );

        })();

    </script>
        </body>
</html>