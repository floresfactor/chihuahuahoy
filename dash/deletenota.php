<?php

//Importacion de la clase para consultas a la base de datos
require("../db/Crud.class.php");

//instancia de la clase "Crud" para utulizar las funciones
$crud  = new Crud();


$id = $_GET['id'];

 try {
	 	
	 $crud->deleteNota($id);
	echo "<h2>Se elimino correctamente la nota con el id ".$id." </h2>";
	echo '<a href="editnota.php"><h3>Volver A Lista de notas</h2></a>';
 } catch (Exception $e) {
 	$r=0;
 	$e->getMessage();
	echo"Hubo un problema con la captura y la eliminacion de la nota habla con joseifb@live.com";
 }

?>