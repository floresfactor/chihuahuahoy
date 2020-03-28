<?php

//Importacion de la clase para consultas a la base de datos
require("../db/Crud.class.php");

//instancia de la clase "Crud" para utulizar las funciones
$crud  = new Crud();


$titulo = $_POST['titulo'];
$parrafo1 = $_POST['parrafo1'];
$rumbo = $_POST['rumbo'];
$autor = $_POST['autoreditorial'];
$imagenautor = "";


$ex = $crud->insertCardinales($titulo,$parrafo1,$autor,$imagenautor,$rumbo);

if ($ex==1)
{
	$var= $crud->allDescDateOneOpinion();
	echo "<h2>Felicidades Se publico correctamente Nueva Cardinales con el id ".$var['0']['id']." </h2>";
}
else
{
	echo"Hubo un problema con la captura y publicacion de la nota habla con joseifb@live.com";
}






?>