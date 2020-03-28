<?php

//Importacion de la clase para consultas a la base de datos
require("../db/Crud.class.php");

//instancia de la clase "Crud" para utulizar las funciones
$crud  = new Crud();



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


$notvideo= "";



$ex = $crud->insertNews($_POST['clasificacion'],$_POST['ciudad'],
	$_POST['ubicacion'],$_POST['titulo'],$_FILES['imagen1']['name'],$_POST['parrafo1'],$_FILES['imagen2']['name'],$_POST['parrafo2'],$_FILES['imagen3']['name'],
	$_POST['parrafo3'],$_FILES['imagen4']['name'],$_POST['parrafo4'],$_FILES['imagen5']['name'],$_POST['parrafo5'],$_POST['codigovideo'],$notvideo);

if ($ex==1)
{
	$var= $crud->allDescDateOne();
	echo '<h2>Enorabuena publico correctamente la nota con el id '.$var['0']['id'].'</h2><a href="../post.php?id='.$var['0']['id'].'"><h3> Ver Nota</h3></a>';
	echo '<a href="index.php"><h3>Volver A Oficina</h2></a>';
}
else
{
	echo"Hubo un problema con la captura y publicacion de la nota habla con joseifb@live.com";
}






?>