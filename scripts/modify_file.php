<?php
require_once "conectar.php";
require_once 'funciones_ficheros.php';

$id = $_REQUEST['id'];
$title = $_REQUEST['title'];
$url1 = $_REQUEST['url1'];
$url2 = $_REQUEST['url2'];
$url3 = $_REQUEST['url3'];
$link1 = $_REQUEST['link1'];
$link2 = $_REQUEST['link2'];
$link3 = $_REQUEST['link3'];
$iframe = $_REQUEST['iframe'];
$descripcion = $_REQUEST['descripcion'];

$validado = (!empty($id) && !empty($title)  && !empty($descripcion) && !empty($iframe));
if (!$validado) {
    $error = "Los campos acrónimo $id, nombre $title, iframe $iframe y descripción $descripcion son obligatorios";
}


$sql_update = "UPDATE brands SET title='$title', url1 = '$url1', url2 = '$url2', url3 = '$url3', link1 = '$link1', link2 = '$link2', link3 = '$link3', iframe = '$iframe' WHERE id=$id";

$sentencia = $db->prepare($sql_update);
$sentencia->execute();

header("Location: ../guitarras_view.php");