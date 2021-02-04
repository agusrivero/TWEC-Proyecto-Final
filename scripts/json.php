<?php
require_once 'conectar.php';

$sql = "SELECT id, url, title, description, iframe, url1, url2, url3, link1, link2, link3 FROM brands";
$statement = $db->prepare($sql);
$statement->execute();

while ($fila = $statement->fetch()) {
    $filas[] = array(
        "url" => $fila['url'],
        "title" => $fila['title'],
        "description" => $fila['description'],
        "iframe" => $fila['iframe'],
        "url1" => $fila['url1'],
        "url2" => $fila['url2'],
        "url3" => $fila['url3'],
        "link1" => $fila['link1'],
        "link2" => $fila['link2'],
        "link3" => $fila['link3'],
        "id" => $fila['id']);
}

$json = json_encode($filas);
$callback = $_GET['callback'];
echo $callback.'('. $json . ')';
?>