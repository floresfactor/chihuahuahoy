<?php

require('../db/Crud.class.php');

$id = $_GET['id'];


$crud = new Crud();

$res = $crud->findId($id);

$dir = dirname(__DIR__)."\imagesnotas\\";

   ?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Actualizando Nota</title>

  <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="../css/styles.css" rel="stylesheet">
</head>
<body>
  
<div align="center">

 <h3 id="want">Editando la Nota ID=<?php echo $res['0']['id']; ?> </h3>
 <ul class="pager">
         <li><a href="index.php">Volver a Oficina</a></li>
    </ul>
 <div align="center">

         <form id="formnota" enctype="multipart/form-data" action="getupdatenota.php?id=<?php echo $res['0']['id']; ?>" method="post" class="form-horizontal my-form" role="form">
<div class="form-group">
  <label class="col-sm-5 control-label">Ubicacion</label>
  <div class="col-sm-2">
    <select name="ubicacion" id="selectubicacion" class="form-control" placeholder="ubicacion">
      <option selected="selected"><?php echo $res['0']['ubicacion']; ?></option>
      <option>marquesina</option>
      <option>titular1</option>
      <option>titular2</option>
      <option>titular3</option>
      <option>local1</option>
      <option>local2</option>
      <option>local3</option>
      <option>local4</option>
      <option>local5</option>
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
      <option>notadia</option>
      <option>notadia2</option>
    </select>
  </div><!-- /col-sm-9 -->
 </div>


      
     <div class="form-group">
  <label class="col-sm-5 control-label">Clasificacion</label>
  <div class="col-sm-2">
    <select name="clasificacion" id="selectclasificacion" class="form-control">
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
    </div>
    </div>

    <div class="form-group">
  <label class="col-sm-5 control-label">Ciudad:</label>
  <div class="col-sm-2">
    <select name="ciudad" id="selectciudad" class="form-control">
      <option selected="selected"><?php echo $res['0']['ciudad']; ?></option>
      <option>delicias</option>
      <option>chihuahua</option> 
      <option>parral</option>
      <option>cuauhtemoc</option>
      <option>camargo</option>
      <option>juarez</option>
      <option>ojinaga</option>
      <option>aldama</option>
      <option>jimenez</option>
      <option>madera</option> 
    </select>
</div>
</div>      


    <div class="form-group">
  <label class="col-sm-5 control-label">Titulo</label>
  <div class="col-sm-5">
    <input type="text" name="titulo" id="titulo" class="form-control" maxlength="100" value="<?php echo $res['0']['titulo'] ?>" required>
</div>
</div>       

    <div class="form-group">
  <label class="col-sm-5 control-label">Imagen 1</label>
  <div class="col-sm-2">
    <input type="file" name="imagen1" id="fileimagen1" class="btn-primary"  title="Subir Archivo">
    <input type="hidden" name="temp" id="temp" value="<?php echo $res['0']['imagen']; ?>">
    <span class="file-input-name" id="name1"><?php echo $res['0']['imagen'] ?></span>
    <!--<span> <button onclick="setAttr()" type="button" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>Eliminar Imagen</button></span>-->
    </div>
    </div>

    <div class="form-group">
  <label class="col-sm-5 control-label">Parrafo1</label>
  <div class="col-sm-5">
    <textarea name="parrafo1" id="parrafo1" rows="10" cols="70" class="form-control"><?php echo $res['0']['parrafo'] ?></textarea>
    </div>
    </div>

    <div class="form-group">
  <label class="col-sm-5 control-label">imagen2</label>
  <div class="col-sm-2">
    <input type="file" name="imagen2" id="fileimagen2" class="btn-primary"  title="Subir Archivo">
        <input type="hidden" name="temp2" value="<?php echo $res['0']['imagen2'] ?>">
    <span class="file-input-name"><?php echo $res['0']['imagen2'] ?></span>
     </div>
   </div>
    
    <div class="form-group">
  <label class="col-sm-5 control-label">Parrafo2</label>
  <div class="col-sm-5">
    <textarea name="parrafo2" id="parrafo2" rows="10" cols="70" class="form-control"><?php echo $res['0']['parrafo2']; ?></textarea>
    </div>
    </div>
    
     <div class="form-group">
  <label class="col-sm-5 control-label">Imagen3</label>
  <div class="col-sm-2">
    <input type="file" name="imagen3" id="fileimagen3" class="btn-primary"  title="Subir Archivo">
        <input type="hidden" name="temp3" value="<?php echo $res['0']['imagen3'] ?>">
    <span class="file-input-name"><?php echo $res['0']['imagen3'] ?></span>
</div>
</div>        

    <div class="form-group">
  <label class="col-sm-5 control-label">Parrafo3</label>
  <div class="col-sm-5">
    <textarea name="parrafo3" id="parrafo3" rows="10" cols="70" class="form-control"><?php echo $res['0']['parrafo3']; ?></textarea>
     </div>
   </div>

    <div class="form-group">
  <label class="col-sm-5 control-label">Imagen4</label>
  <div class="col-sm-2">
    <input type="file" name="imagen4" id="fileimagen4" class="btn-primary"  title="Subir Archivo">
    <input type="hidden" name="temp4" value="<?php echo $res['0']['imagen4'] ?>">
    <span class="file-input-name"><?php echo $res['0']['imagen4'] ?></span>
     </div>
   </div>

    <div class="form-group">
  <label class="col-sm-5 control-label">Parrafo4</label>
  <div class="col-sm-5">
    <textarea name="parrafo4" id="parrafo4" rows="10" cols="70" class="form-control"><?php echo $res['0']['parrafo4']; ?></textarea>
</div>
</div>
    
    <div class="form-group">
  <label class="col-sm-5 control-label">Imagen5</label>
  <div class="col-sm-2">  
    <input type="file" name="imagen5" id="fileimagen5" class="btn-primary"  title="Subir Archivo">
    <input type="hidden" name="temp5" value="<?php echo $res['0']['imagen5'] ?>">
    <span class="file-input-name"><?php echo $res['0']['imagen5'] ?></span>
</div>
</div>

     <div class="form-group">
  <label class="col-sm-5 control-label">Parrafo5</label>
  <div class="col-sm-5">   
    <textarea name="parrafo5" id="parrafo5" rows="10" cols="70" class="form-control"><?php echo $res['0']['parrafo5']; ?></textarea>
     </div>
   </div>

     <div class="form-group">
  <label class="col-sm-5 control-label">Video</label>
  <div class="col-sm-5">
    <textarea name="codigovideo" id="codigovideo" rows="10" cols="70" class="form-control"><?php echo $res['0']['video']; ?></textarea>
     </div>
   </div>
  
<div class="form-group">
  <label class="col-sm-5 control-label"></label>
  <div class="col-sm-2">
<input type="submit" name="enviar" class="btn-primary" value="Actualizar">
  </div>
</div>
    </form>
        
      </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.file-input.js"> </script>

         <script type="text/javascript">
       /*  function setAttr(){
          $('#name1').html('');
          $('#temp').val = '';

         }*/
     $('input[type=file]').bootstrapFileInput();
$('.file-inputs').bootstrapFileInput();

</script>





</body>
</html>