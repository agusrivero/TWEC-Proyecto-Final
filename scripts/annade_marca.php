<?php
    require_once 'conectar.php';
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

	$f = 'imagen';
	$d = "../imagenes/Guitarras/";  // Tenemos que tener images con permiso para que escriba cualquiera
	// Si trabajamos con el workspace en nuestra cuenta, el usuario de apache www-data no podrá escribir en nuestra cuenta
	// si ponemos upload/ podemos no tener permisos; /tmp/upload tiene que tener permisos de escritura (chmod 777 /tmp/upload)
    $error_fichero = error_procesa_fichero($f, $d);

    if ($error_fichero != false) {
        header("Location: listado_json.php?error=$error_fichero")
        or  die("Error al redirigir a formulario con error $error_fichero");
    }

	// debería haber un fichero php con funciones para BBDD

	$sql_insert = "INSERT INTO `brands` (id, title, url, description, iframe, url1, url2, url3, link1, link2, link3) VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
	try {
        $sentencia = $db->prepare($sql_insert);
        $sentencia->execute(array($id, $title, $_FILES[$f]['name'], $descripcion,$iframe, $url1, $url2, $url3, $link1, $link2, $link3));
    }catch(PDOException $error) {
        die("Error a insertar " . $error->getMessage()) or die("Error al redirigir a formulario con error $error->getMessage()");
    }

	// redirige a listado de deptos
	header("Location: ../index.php") or die("Error al redirigir a listado");
	?>