<?php

//Importacion de la clase para consultas a la base de datos
require("../db/Crud.class.php");

//instancia de la clase "Crud" para utulizar las funciones
$crud  = new Crud();

$clasificacion = $_POST['clasificacion'];
$ciudad = "";
$ubicacion = "";
$titulo = $_POST['titulo'];
$imagen1 = $_FILES['imagen1']['name'];
$parrafo = "";
$imagen2 = "";
$parrafo2 = "";
$imagen3 = "";
$parrafo3 = "";
$imagen4 = "";
$parrafo4 = "";
$imagen5 = "";
$parrafo5 = "";
$video = $_POST['codigovideo'];
$videotype = "ve";



//Asignacion de ruta para poder hacer la escritura en el directorio o movimiento de archivos en este caso
$uploaddir = '../imagesnotas/';
$upimagen = $uploaddir . basename($_FILES['imagen1']['name']);

move_uploaded_file($_FILES['imagen1']['tmp_name'], $upimagen);


$ex = $crud->insertNews($clasificacion,$ciudad,$ubicacion,$titulo,$imagen1,$parrafo,$imagen2,$parrafo2,
	$imagen3,$parrafo3,$imagen4,$parrafo4,$imagen5,$parrafo5,$video,$videotype);

if ($ex==1)
{
	$var= $crud->allDescDateOne();
	echo "<h2>Felicidades Se publico correctamente el video en portada con el id ".$var['0']['id']." </h2>";
}
else
{
	echo"Hubo un problema con la captura y publicacion de la nota habla con joseifb@live.com";
}






?>