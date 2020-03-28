<?php

//Importacion de la clase para consultas a la base de datos
require("../db/Crud.class.php");

//instancia de la clase "Crud" para utulizar las funciones
$crud  = new Crud();


$id = $_GET['id'];
//Asignacion de ruta para poder hacer la escritura en el directorio o movimiento de archivos en este caso
$uploaddir = '../imagesnotas/';
$upimagen = $uploaddir . basename($_FILES['imagen1']['name']);
$upimagen2 = $uploaddir . basename($_FILES['imagen2']['name']);
$upimagen3 = $uploaddir . basename($_FILES['imagen3']['name']);
$upimagen4 = $uploaddir . basename($_FILES['imagen4']['name']);
$upimagen5 = $uploaddir . basename($_FILES['imagen5']['name']);


move_uploaded_file($_FILES['imagen1']['tmp_name'], $upimagen);
move_uploaded_file($_FILES['imagen2']['tmp_name'], $upimagen2);
move_uploaded_file($_FILES['imagen3']['tmp_name'], $upimagen3);
move_uploaded_file($_FILES['imagen4']['tmp_name'], $upimagen4);
move_uploaded_file($_FILES['imagen5']['tmp_name'], $upimagen5);


$imagen1 = $_FILES['imagen1']['name'];
$imagen2 = $_FILES['imagen2']['name'];
$imagen3 = $_FILES['imagen3']['name'];
$imagen4 = $_FILES['imagen4']['name'];
$imagen5 = $_FILES['imagen5']['name'];

if($imagen1!==""){

	$imagen1 = $_FILES['imagen1']['name'];
}
else{

	$imagen1 = $_POST['temp'];
}

if($imagen2!==""){

	$imagen2 = $_FILES['imagen2']['name'];
}
else{

	$imagen2 = $_POST['temp2'];
}
if($imagen3!==""){

	$imagen3 = $_FILES['imagen3']['name'];
}
else{

	$imagen3 = $_POST['temp3'];
}

if($imagen4!==""){

	$imagen4 = $_FILES['imagen4']['name'];
}
else{

	$imagen4 = $_POST['temp4'];
}

if($imagen5!==""){

	$imagen5 = $_FILES['imagen5']['name'];
}
else{

	$imagen5 = $_POST['temp5'];
}





/*$ex = $crud->updateNota($id,$_POST['clasificacion'],$_POST['ciudad'],
	$_POST['ubicacion'],$_POST['titulo'],$_FILES['imagen1']['name'],$_POST['parrafo1'],$_FILES['imagen2']['name'],$_POST['parrafo2'],$_FILES['imagen3']['name'],
	$_POST['parrafo3'],$_FILES['imagen4']['name'],$_POST['parrafo4'],$_FILES['imagen5']['name'],$_POST['parrafo5'],$_POST['codigovideo']/*,$_POST['palabraclave1'],$_POST['palabraclave2']);*/

$ex = $crud->updateNota($id,$_POST['clasificacion'],$_POST['ciudad'],
	$_POST['ubicacion'],$_POST['titulo'],$imagen1,$_POST['parrafo1'],$imagen2,$_POST['parrafo2'],$imagen3,
	$_POST['parrafo3'],$imagen4,$_POST['parrafo4'],$imagen5,$_POST['parrafo5'],$_POST['codigovideo']/*,$_POST['palabraclave1'],$_POST['palabraclave2']*/);

if ($ex==1)
{
	
	echo '<h2>Enorabuena se edito y publico correctamente la nota con el id '.$id.'</h2><a href="../post.php?id='.$id.'"><h3> Ver Nota</h3></a>';
	echo '<a href="index.php"><h3>Volver A Oficina</h2></a>';

}
else
{
	echo"Hubo un problema con la captura y publicacion de la nota habla con joseifb@live.com";
}






?>