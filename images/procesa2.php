<?php 
$cn = mysql_connect("localhost","delic023_bs","BfIj221191");
mysql_select_db("chihu389_noticias", $cn);


if(@$_GET['action'] == 'listFotos'){
	
	$query = mysql_query("SELECT * FROM publicar ORDER BY id_foto DESC", $cn);
	while($row = mysql_fetch_array($query))
	{
		echo  '<li>
				<a href="javascript:;" id="'.$row['id_foto'].'"><img src="delete.png" /></a>
				<img src="news_img/'.$row['nombre_foto'].'" />
				<span>'.$row['nombre_foto'].'</span>
			</li>';
	}

}else if(@$_GET['action'] == 'eliminar'){
	
	$query = mysql_query("DELETE FROM publicar WHERE id_foto = '".$_GET['id']."'", $cn);

}else
{
	
	$destino = "news_img/";
	$filetype =  $_FILES['image']['type'];
	$type = substr($filetype, (strpos($filetype,"/"))+1);
	$types=array("jpeg","gif","png");
	
	if(in_array($type, $types)){
		
		if(isset($_FILES['image'])){
			
			$nombre = $_FILES['image']['name'];
			$temp   = $_FILES['image']['tmp_name'];
			
			// subir imagen al servidor
			if(move_uploaded_file($temp, $destino.$nombre))
			{
				$ubicacion=$_POST['ubicacion'];
				//$query = mysql_query("INSERT INTO publicar VALUES('','".$nombre."','".$ubicacion."')" ,$cn);	
				$query = mysql_query("insert into publicar(nombre_foto,ubicacion) values('$nombre','$ubicacion')");
				$ID = mysql_insert_id();
			}
			
			
			echo  '<li>
					<a href="javascript:;" id="'.$ID.'"><img src="delete.png" /></a>
					<img src="news_img/'.$nombre.'" />
					<span>'.$nombre.'</span>
				</li>';
		}
	}else{
		echo "Solo imagenes jpg,png,gif";
	}
}
?>