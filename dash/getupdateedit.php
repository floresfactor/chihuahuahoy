<?php

//Importacion de la clase para consultas a la base de datos
require("../db/Crud.class.php");

//instancia de la clase "Crud" para utulizar las funciones
$crud  = new Crud();


$id = $_GET['id'];
//Asignacion de ruta para poder hacer la escritura en el directorio o movimiento de archivos en este caso
$uploaddir = '../imagesnotas/';
$upimagen = $uploaddir . basename($_FILES['imagen1']['name']);

move_uploaded_file($_FILES['imagen1']['tmp_name'], $upimagen);

$imagen1 = $_FILES['imagen1']['name'];

if($imagen1!==""){

	$imagen1 = $_FILES['imagen1']['name'];
}
else{

	$imagen1 = $_POST['temp'];
}

$ex = $crud->updateEdit($id,$_POST['titulo'],$imagen1,$_POST['parrafo1'],$_POST['autoreditorial']);


if ($ex==1)
{
	
	echo "<h2>Enorabuena se edito y publico correctamente la editorial con el id ".$id." </h2>";
}
else
{
	echo"Hubo un problema con la captura y publicacion de la nota habla con joseifb@live.com";
}






?>