<?php

require('../db/Crud.class.php');

$id = $_GET['id'];

$crud = new Crud();

$res = $crud->findIdOpinion($id);

   ?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link href="../css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="../css/styles.css" rel="stylesheet">
</head>
<body>
	
<div align="center">

 <h3 id="want">Editando Opinion ID=<?php echo $res['0']['id']; ?> </h3>
 <div align="center">

          <form enctype="multipart/form-data" method="post" action="procesanota.php" id="formnota" class="navbar-form">
        
        <label for="lblUbi">Ubicacion:</label>
        <select name="ubicacion" id="selectubicacion">
          <option selected="selected"><?php echo $res['0']['ubicacion']; ?></option>
          <option>ultima</option>
          <option>videoportada</option>
          <option>delicias1</option>
          <option>delicias2</option>
          <option>delicias3</option>
          <option>delicias4</option>
          <option>delicias5</option>
          <option>delicias6</option>
          <option>chihuahuaprincipal</option>
          <option>chihuahua1</option>
          <option>chihuahua2</option>
          <option>chihuahua3</option>
          <option>chihuahua4</option> 
          <option>nacionalprincipal</option>  
          <option>nacional1</option>
          <option>nacional2</option>
          <option>nacional3</option>
          <option>nacional4</option>
          <option>mundo1</option>
          <option>mundo2</option>
          <option>mundo3</option>
        </select>

        <label for="lblcCla">Clasificacion:</label>
        <select name="clasificacion" id="selectclasificacion">
          <option selected="selected"><?php echo $res['0']['clasificacion']; ?></option>
          <option>delicias</option>
          <option>estado</option>
          <option>nacional</option> 
          <option>mundo</option>
          <option>deportes</option>
          <option>gobierno</option>
          <option>instituciones</option>
          <option>economia</option>
          <option>espectaculos</option>
          <option>ciencia</option>
          <option>tecnología</option> 
          <option>editorial</option>
          <option>sorprendete</option>
        </select>

        <label for="selectciudad" id="lblciudad">Ciudad:</label>
        <select name="ciudad" id="selectciudad">
          <option selected="selected"><?php echo $res['0']['ciudad']; ?></option>
          <option>Chihuahua</option>
          <option>nacional</option> 
          <option>mundo</option>
          <option>deportes</option>
          <option>gobierno</option>
          <option>instituciones</option>
          <option>economia</option>
          <option>espectaculos</option>
          <option>ciencia</option>
          <option>tecnología</option> 
          <option>editorial</option>
          <option>sorprendete</option>
        </select>


        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" id="titulo" value="<?php echo $res['0']['titulo']; ?>" required>

        <label for="imagen1">Imagen Uno:</label>
        <input type="file" name="imagen1" id="fileimagen1" class="btn-primary" title="Subir Archivo">

        <label for="parrafo1">Parrafo Uno:</label>
        <textarea name="parrafo1" id="parrafo1" rows="20" cols="20"><?php echo $res['0']['parrafo']; ?></textarea>
        
        <label for="imagen2">Imagen Dos:</label>
        <input type="file" name="imagen2" id="fileimagen2" class="btn-primary" title="Subir Archivo">

        <label for="parrafo2">Parrafo Dos:</label>
        <textarea name="parrafo2" id="parrafo2" rows="" cols="20"><?php echo $res['0']['parrafo2']; ?></textarea>
        
        <label for="imagen3">Imagen Tres:</label>
        <input type="file" name="imagen3" id="fileimagen3" class="btn-primary" title="Subir Archivo">

        <label for="parrafo3">Parrafo Tres:</label>
        <textarea name="parrafo3" id="parrafo3" rows="20" cols="20"><?php echo $res['0']['parrafo3']; ?></textarea>

        <label for="imagen4">Imagen Cuatro:</label>
        <input type="file" name="imagen4" id="fileimagen4" class="btn-primary" title="Subir Archivo">

        <label for="parrafo4">Parrafo Cuatro:</label>
        <textarea name="parrafo4" id="parrafo4" rows="20" cols="20"><?php echo $res['0']['parrafo4']; ?></textarea>
"       
        <label for="imagen5">Imagen Cinco:</label>
        <input type="file" name="imagen5" id="fileimagen5" class="btn-primary" title="Subir Archivo">

        <label for="parrafo5">Parrafo Cinco:</label>
        <textarea name="parrafo5" id="parrafo5" rows="4" cols="30"><?php echo $res['0']['parrafo5']; ?></textarea>

        <label for="codigovideo">Codigo Video:</label>
        <textarea name="codigovideo" id="codigovideo" rows="20" cols="20"><?php echo $res['0']['video']; ?></textarea>

        <label for="palabraclave1">Palabra Clave Uno:</label>
        <input type="text" name="palabraclave1" id="palabraclave1" value="<?php echo $res['0']['palabra']; ?>" required>
        
        <label for="palabraclave2">Palabra Clave Dos:</label>
        <input type="text" name="palabraclave2" id="palabraclave2" value="<?php echo $res['0']['palabra2']; ?>" required>
        <input type="submit" name="enviar" class="btn-primary" value="Actualizar">


        
      </form>

        
      </div>
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