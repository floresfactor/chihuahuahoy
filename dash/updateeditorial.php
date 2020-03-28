<?php

require('../db/Crud.class.php');

$id = $_GET['id'];

$crud = new Crud();

$res = $crud->findIdEditorial($id);

   ?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Actualizando Editorial</title>

  <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="../css/styles.css" rel="stylesheet">
</head>
<body>
  
<div align="center">

 <h3 id="want">Editando Editorial ID=<?php echo $res['0']['id']; ?> </h3>
 <ul class="pager">
         <li><a href="mainne.php">Volver a Oficina</a></li>
    </ul>
 <div align="center">

         <form id="formedit" enctype="multipart/form-data" action="getupdateedit.php?id=<?php echo $res['0']['id'];  ?>" method="post" class="form-horizontal my-form" role="form">

         <div class="form-group">
  <label class="col-sm-5 control-label">Titulo</label>
  <div class="col-sm-3">
        <input type="text" name="titulo" id="titulo" class="form-control" value="<?php echo $res['0']['titulo']; ?>" required>
</div>
</div>
        
         <div class="form-group">
  <label class="col-sm-5 control-label">Imagen del Autor:</label>
  <div class="col-sm-1">
        <input type="file" name="imagen1"  id="fileimagen1" class="btn-primary" title="Subir Archivo" >
        <input type="hidden" name="temp" id="temp" value="<?php echo $res['0']['imagenautor']; ?>">
        <span class="file-input-name" id="name1"><?php echo $res['0']['imagenautor'] ?></span>
</div>
</div>
        
        <div class="form-group">
  <label class="col-sm-5 control-label">Cuerpo:</label>
  <div class="col-sm-5">
        <textarea name="parrafo1" id="parrafo1" rows="20" class="form-control" cols="20"><?php echo $res['0']['cuerpo']; ?></textarea>
</div>
</div>

        <div class="form-group">
  <label class="col-sm-5 control-label">Autor:</label>
  <div class="col-sm-2">
        <input type="text" name="autoreditorial" class="form-control" value="<?php echo $res['0']['autor']; ?>" id="autoreditorial">
</div>
</div>
        <div class="form-group">
  <label class="col-sm-5 control-label"></label> 
  <div class="col-sm-2">
        <input type="submit" name="enviar" class="btn-primary" value="Actualizar">
</div>
</div>
        
      </form>
        

        
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