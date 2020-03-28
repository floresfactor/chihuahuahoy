<?php include('head.php'); ?>
    <!-- <div align="center">-->
    <div style="width:100%; display:table-cell;">
      <div style="float:left;">
        <ul class="nav nav-pills" //style="display: table-cell;">
          <li><a href="index.php">Nueva Nota</a></li>
          <li><a href="mainvp.php">Nuevo Video Portada</a></li>
          <!--<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
          </ul>
          </li>-->
          <li><a href="mainve.php">Nuevo Video Especial</a></li>
          <li class="active"><a href="mainne.php">Nueva Editorial</a></li>
          <li><a href="mainnc.php">Nueva Cardinales</a></li>
        </ul>
      </div>
      <div style="float:left;">&nbsp;
        <a class="btn btn-success" href="editeditorial.php">Editar Editorial</a>
      </div>
    </div>
  </div>

<div align="center">
        <form id="formedit" enctype="multipart/form-data" action="procesane.php" method="post" class="form-horizontal my-form" role="form">

         <div class="form-group">
  <label class="col-sm-5 control-label">Titulo</label>
  <div class="col-sm-5">
        <input type="text" name="titulo" id="titulo" class="form-control" required>
</div>
</div>
        
         <div class="form-group">
  <label class="col-sm-5 control-label">Imagen del Autor:</label>
  <div class="col-sm-1">
        <input type="file" name="imagen1"  id="fileimagen1" class="btn-primary" title="Subir Archivo" >
</div>
</div>
        
        <div class="form-group">
  <label class="col-sm-5 control-label">Cuerpo:</label>
  <div class="col-sm-5">
        <textarea name="parrafo1" id="parrafo1" rows="20" class="form-control" cols="20"></textarea>
</div>
</div>

        <div class="form-group">
  <label class="col-sm-5 control-label">Autor:</label>
  <div class="col-sm-2">
        <input type="text" name="autoreditorial" class="form-control" id="autoreditorial" >
</div>
</div>
        <div class="form-group">
  <label class="col-sm-5 control-label"></label> 
  <div class="col-sm-5">
        <input type="submit" name="enviar" class="btn-primary" value="Publicar">
</div>
</div>
        
      </form>

        
</div>



		<script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.file-input.js"> </script>
         <script type="text/javascript">
     $('input[type=file]').bootstrapFileInput();
$('.file-inputs').bootstrapFileInput();

</script>





</body>
</html>