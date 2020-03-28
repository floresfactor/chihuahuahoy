<?php require('../db/Crud.class.php');


$crud = new Crud();
$res = $crud->allDescDate20("news");



  ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nota Edicion</title>

	<link href="../css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="../css/styles.css" rel="stylesheet">
</head>
<body>
	
<div align="center">
 <h2 id="hola">Edicion de Nota</h2>
 <ul class="pager">
         <li><a href="main.php">Volver a Oficina</a></li>
    </ul>
 <table class="table table-bordered table-striped">
    <thead>
        <tr>
          <th>ID</th>
          <th>Titulo</th>
          <th>Clasificación</th>
          <th>Ubicacion</th>
          <th>Visitas</th>
        </tr>
    </thead>
    <tbody>

<?php


foreach ($res as $campo) {
   echo "<tr>
   <td>". $campo['id']. "</td>
   <td>".$campo['titulo'];

   echo ($campo['videotype']=="ve") ?  "<span class='label label-danger'>Video Especial </span>" :  "";
   echo ($campo['videotype']=="vp") ?  "<span class='label label-danger'>Video Especial </span>" :  "";
   echo "</td>";

   echo '<td>'.$campo['clasificacion'].'</td>'.'<td>'.$campo['ubicacion'].'</td>'.'<td>'.$campo['visitas'].'</td><td><a class="btn btn-info" href="updatenota.php?id='.$campo['id'].'">Modificar</a></td><td><a class="btn btn-danger" href="deletenota.php?id='.$campo['id'].'">Eliminar</a></td></tr>';
}

?>
    </tbody>
</table>
 

        
      </div>




		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="..js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.file-input.js"> </script>
         <script type="text/javascript">
     $('input[type=file]').bootstrapFileInput();
$('.file-inputs').bootstrapFileInput();

</script>





</body>
</html>