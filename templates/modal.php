<?php
require_once 'scripts/funciones_ficheros.php';

if (!empty($_REQUEST['error'])) {
    echo "<p class='error'>" . $_REQUEST['error'] . "</p>";
}
?>
<div class="modal-dialog form-modal" role="document">
    <form action="scripts/annade_marca.php" method="post" enctype="multipart/form-data">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Añadir marca</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" id="id" placeholder="ID" name="id">
                </div>
                <div class="form-group">
                    <label for="email">Nombre Marca</label>
                    <input type="text" class="form-control" id="title" placeholder="Nombre Marca" name="title">
                </div>
                <div class="form-group">
                    <label for="imagen">Imagen</label>
                    <input type="file" class="form-control" id="imagen" name="imagen">
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
            <div class="modal-footer">
                <button type="submit" class="btn text-light" id="sendModal" data-toggle="modal">Añadir</button>
            </div>
        </div>
    </form>
</div>