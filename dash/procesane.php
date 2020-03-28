<?php

//Importacion de la clase para consultas a la base de datos
require("../db/Crud.class.php");

//instancia de la clase "Crud" para utulizar las funciones
$crud  = new Crud();


$titulo = $_POST['titulo'];
$imagenautor = $_FILES['imagen1']['name'];
$rumbo = NULL;
$autor = $_POST['autoreditorial'];
$parrafo1 = $_POST['parrafo1'];


//Asignacion de ruta para poder hacer la escritura en el directorio o movimiento de archivos en este caso
$uploaddir = '../imagesnotas/';
$upimagen = $uploaddir . basename($_FILES['imagen1']['name']);

move_uploaded_file($_FILES['imagen1']['tmp_name'], $upimagen);


$ex = $crud->insertEditorial($titulo,$parrafo1,$autor,$imagenautor);

if ($ex==1)
{
	$var= $crud->allDescDateOneOpinion();
	echo "<h2>Felicidades Se publico correctamente Nueva Editorial con el id ".$var['0']['id']." </h2>";
}
else
{
	echo"Hubo un problema con la captura y publicacion de la nota habla con joseifb@live.com";
}






?>