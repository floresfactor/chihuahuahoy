<?php
$upload_dir = 'uploads';
if (!empty($_FILES)) 
{ 
	//copia temporal de los archivos
	 $tempFile = $_FILES['file']['tmp_name'];
	 
	 //se genera la ruta para guardar archivos
	$uploadPath = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . $upload_dir . DIRECTORY_SEPARATOR.$_POST['nombre']. DIRECTORY_SEPARATOR;

	//creamos el directorio  para guardar los archivos
	 if(!is_dir($uploadPath))
	 	mkdir($uploadPath, 0777);
	 
	 //agregamos la ruta del directorio a el nombre del archivo
	 $mainFile = $uploadPath.$_FILES['file']['name'];
	 $mainFile2 = $_FILES['file']['name'];

	 //se mueve el archivo de la ubicacion temporal a su destino
	 //move_uploaded_file($tempFile,$mainFile);

	if (move_uploaded_file($tempFile,$mainFile))
	{
		sleep(3);//retrasamos la petición 3 segundos
		$image = strstr($mainFile2, '.', true);
		$rest = substr($mainFile2, strlen($image), strlen($mainFile2));
	}
}
?>
