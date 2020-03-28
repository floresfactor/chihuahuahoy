<?php

require("../db/Db.class.php");
require("../db/Crud.class.php");

$titulo = $_POST['tituloeditorial'];
$cuerpo = $_POST['parrafoeditorial'];
$autor = $_POST['autoreditorial'];
$imagen = $_POST['imagenautoreditorial'];
$rumbo = "";



        
$crud  = new Crud();


$ex = $crud->insertOpinion($titulo,$cuerpo,$autor,$imagen,$rumbo);
if ($ex==1)
{
	//$var= $crud->allDescDateOne();
	//echo "<h2>Felicidades Se publico correctamente la nota con el id ".$var['0']['id']." </h2>";
	echo "<h2>Felicidades Se publico correctamente la publicacion editorial";
}
else
{
	echo"Hubo un problema con la captura y publicacion de la nota habla con joseifb@live.com";
}
 ?>