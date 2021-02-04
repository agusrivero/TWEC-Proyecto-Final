<script type="text/javascript">
    $("document").ready(function () {
        var session = '<?php echo $_SESSION['username']; ?>';
        var url = window.location.pathname;
        var dir = url.substring(0, url.lastIndexOf('/')); // url del servidor, p.ej. http://localhost/departamentosSQL
        $.getJSON(dir + '/scripts/json.php?callback=?', function (data) {
            $("#content").html('');
            $.each(data, function (i, item) {

                $("#content").append('<div id="'+item.id+'" class="row brand-modal">'
                    + '<div class="col-12 brand-video-container">'
                    + '<iframe src="' + item.iframe + '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="brand-video"></iframe>'
                    + '</div><div class="col-12 brand-content">'
                    + '<span><strong>' + item.title +'</strong></span><p></p>'
                    + '<p>'+item.description+'</p>'
                    + '<div class="row"><div class="col-6">'
                    + '<img class="image-modal" src="imagenes/Guitarras/'+item.url+'"/>'
                    + '</div><div class="col-6 modal-list">'
                    + '<p>¿Dónde Comprarla?</p>'
                    + '<ul>'
                    + '<li><a href="'+item.url1+'">'+item.link1+'</a>'
                    + '<li><a href="'+item.url2+'">'+item.link2+'</a>'
                    + '<li><a href="'+item.url3+'">'+item.link3+'</a>'
                    + '</ul>'
                    + '</div></div></div></div>');

                if(session === 'root'){
                    $('#'+item.id).append('<div class="row">'
                        + '<a href="scripts/delete_file.php?id='+item.id+'"><img src="imagenes/trash.png" width="20px"/><span>Eliminar</span></a>'
                        + '<a href="scripts/modify_file_view.php?id='+item.id+'">'
                        + '<img src="imagenes/pencil.png" width="20px"/><span>Editar</span></a></div>');
                }
            });

        });
        $("#content").fadeIn(1000);

    });
</script>