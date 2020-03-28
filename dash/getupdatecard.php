<?php

//Importacion de la clase para consultas a la base de datos
require("../db/Crud.class.php");

//instancia de la clase "Crud" para utulizar las funciones
$crud  = new Crud();


$id = $_GET['id'];

$ex = $crud->updateCard($id,$_POST['titulo'],$_POST['parrafo1'],$_POST['autoreditorial'],$_POST['rumbo']);


if ($ex==1)
{
	
	echo "<h2>Enorabuena se edito y publico correctamente Cardinales con el id ".$id." </h2>";
}
else
{
	echo"Hubo un problema con la captura y publicacion de la nota habla con joseifb@live.com";
}






?>