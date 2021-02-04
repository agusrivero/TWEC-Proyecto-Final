<!DOCTYPE html>
<html>
<head>
    <?php
    include "../templates/head.php";
    ?>
    <link rel="stylesheet" href="../assets/modify_view_style.css">

</head>
<body id="mv-body">
<div id="content"></div>
<form action="modify_file.php" method="post" enctype="multipart/form-data">
    <div class="mv-content">
        <div class="mv-header">
            <h5 class="mv-title">Modificar marca</h5>
        </div>
        <div class="mv-body">
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" placeholder="ID" name="id">
            </div>
            <div class="form-group">
                <label for="email">Nombre Marca</label>
                <input type="text" class="form-control" id="title" placeholder="Nombre Marca" name="title" value="">
            </div>
            <div class="form-group">
                <label for="iframe">Video</label>
                <input type="text" class="form-control" id="iframe" placeholder="url" name="iframe">
            </div>
            <div class="form-group">
                <label for="link1">Link 1</label>
                <input type="text" class="form-control" id="link1" placeholder="Link 1" name="link1">
            </div>
            <div class="form-group">
                <label for="url1">URL 1</label>
                <input type="text" class="form-control" id="url1" placeholder="URL 1" name="url1">
            </div>
            <div class="form-group">
                <label for="link2">Link 2</label>
                <input type="text" class="form-control" id="link2" placeholder="Link 2" name="link2">
            </div>
            <div class="form-group">
                <label for="url2">URL 2</label>
                <input type="text" class="form-control" id="url2" placeholder="URL 2" name="url2">
            </div>
            <div class="form-group">
                <label for="link3">Link 3</label>
                <input type="text" class="form-control" id="link3" placeholder="Link 3" name="link3">
            </div>
            <div class="form-group">
                <label for="url3">URL 3</label>
                <input type="text" class="form-control" id="url3" placeholder="URL 3" name="url3">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" rows="3" name="descripcion"></textarea>
            </div>
        </div>
        <div class="mv-footer">
            <button class="btn mv-btn">Atrás</button>
            <button type="submit" class="btn mv-btn">Modificar</button>
        </div>
    </div>
</form>
<div class="main">
</div>
<div class="clear"></div>

<?php
include "../templates/scripts.php";
?>
<script type="text/javascript">
    $("document").ready(function () {
        var id = '<?php echo $_REQUEST['id']?>';
        console.log(id);
        var url = window.location.pathname;
        var dir = url.substring(0, url.lastIndexOf('/')); // url del servidor, p.ej. http://localhost/departamentosSQL
        $.getJSON(dir + '/modify_file_json.php?id='+id+'&callback=?', function (data) {
            $("#content").html('');
            $.each(data, function (i, item) {
                $('#id').attr('value', item.id);
                $('#title').attr('value', item.title);
                $('#iframe').attr('value', item.iframe);
                $('#link1').attr('value', item.link1);
                $('#url1').attr('value', item.url1);
                $('#link2').attr('value', item.link2);
                $('#url2').attr('value', item.url2);
                $('#link3').attr('value', item.link3);
                $('#url3').attr('value', item.url3);
                $('#descripcion').val(item.description);
            });


        });
        $("#content").fadeIn(2000);
    });
</script>
</body>
</html>
