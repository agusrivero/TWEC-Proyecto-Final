<?php
require_once 'conectar.php';

$id = $_REQUEST['id'];

$sql = "DELETE FROM `brands` WHERE `id` = $id";

try {
    $statement = $db->prepare($sql);
    $statement->execute();
}catch(PDOException $error) {
    die("Error a insertar " . $error->getMessage()) or die("Error al redirigir a formulario con error $error->getMessage()");
}


header("Location: ../guitarras_view.php");
