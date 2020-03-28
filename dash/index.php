<?php include('head.php');?>


		<!-- <div align="center">-->
		<div style="width:100%; display:table-cell;">
			<div style="float:left;">
				<ul class="nav nav-pills" //style="display: table-cell;">
					<li class="active"><a href="index.php">Nueva Nota</a></li>
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
					<li><a href="mainne.php">Nueva Editorial</a></li>
					<li><a href="mainnc.php">Nueva Cardinales</a></li>
				</ul>
			</div>
			<div style="float:left;">
				<a class="btn btn-success" href="editnota.php">Editar Nota</a>
			</div>
		</div>
	</div>

<form id="formnota" enctype="multipart/form-data" action="procesanota.php" method="post" class="form-horizontal my-form" role="form">
<div class="form-group">
  <label class="col-sm-5 control-label">Ubicacion</label>
  <div class="col-sm-2">
		<select name="ubicacion" id="selectubicacion" class="form-control" placeholder="ubicacion">
		  <option>marquesina</option>
		  <option>titular1</option>
		  <option>titular2</option>
		  <option>titular3</option>
		  <option>local1</option>
		  <option>local2</option>
		  <option>local3</option>
		  <option>local4</option>
		  <option>local5</option>
		  <option>local6</option>
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
		  <option>evento1</option>
		  <option>evento2</option>
		  <option>evento3</option>
		
		</select>
  </div><!-- /col-sm-9 -->
 </div>


		  
		 <div class="form-group">
  <label class="col-sm-5 control-label">Clasificacion</label>
  <div class="col-sm-2">
		<select name="clasificacion" id="selectclasificacion" class="form-control">
		  <option>local</option>
		  <option>cultura</option>
		  <option>espectaculos</option> 
		  <option>deportes</option>
		  <option>politica</option>
		  <option>eventos</option>
		  <option>editorial</option>
		  <option>uach</option>
		</select>
		</div>
	  </div>
		<div class="form-group">
  <label class="col-sm-5 control-label">Ciudad:</label>
  <div class="col-sm-2">
		<select name="ciudad" id="selectciudad" class="form-control">
      <option></option> 
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
		<input type="text" name="titulo" id="titulo" class="form-control" maxlength="200" required>
</div>
</div>       

	  <div class="form-group">
  <label class="col-sm-5 control-label">Imagen 1</label>
  <div class="col-sm-2">
		<input type="file" name="imagen1" id="fileimagen1" class="btn-primary" title="Subir Archivo">
		</div>
	  </div>

		<div class="form-group">
  <label class="col-sm-5 control-label">Parrafo1</label>
  <div class="col-sm-5">
		<textarea name="parrafo1" id="parrafo1" rows="10" cols="70" class="form-control"></textarea>
	  </div>
	  </div>

		<div class="form-group">
  <label class="col-sm-5 control-label">imagen2</label>
  <div class="col-sm-2">
		<input type="file" name="imagen2" id="fileimagen2" class="btn-primary" title="Subir Archivo">
	   </div>
	 </div>
		
		<div class="form-group">
  <label class="col-sm-5 control-label">Parrafo2</label>
  <div class="col-sm-5">
		<textarea name="parrafo2" id="parrafo2" rows="10" cols="70" class="form-control"></textarea>
		</div>
	  </div>
		
	   <div class="form-group">
  <label class="col-sm-5 control-label">Imagen3</label>
  <div class="col-sm-2">
		<input type="file" name="imagen3" id="fileimagen3" class="btn-primary" title="Subir Archivo">
</div>
</div>        

		<div class="form-group">
  <label class="col-sm-5 control-label">Parrafo3</label>
  <div class="col-sm-5">
		<textarea name="parrafo3" id="parrafo3" rows="10" cols="70" class="form-control"></textarea>
	   </div>
	 </div>

		<div class="form-group">
  <label class="col-sm-5 control-label">Imagen4</label>
  <div class="col-sm-2">
		<input type="file" name="imagen4" id="fileimagen4" class="btn-primary" title="Subir Archivo">
	   </div>
	 </div>

		<div class="form-group">
  <label class="col-sm-5 control-label">Parrafo4</label>
  <div class="col-sm-5">
		<textarea name="parrafo4" id="parrafo4" rows="10" cols="70" class="form-control"></textarea>
</div>
</div>
	  
	  <div class="form-group">
  <label class="col-sm-5 control-label">Imagen5</label>
  <div class="col-sm-2">  
		<input type="file" name="imagen5" id="fileimagen5" class="btn-primary" title="Subir Archivo">
</div>
</div>

	   <div class="form-group">
  <label class="col-sm-5 control-label">Parrafo5</label>
  <div class="col-sm-5">   
		<textarea name="parrafo5" id="parrafo5" rows="10" cols="70" class="form-control"></textarea>
	   </div>
	 </div>

		 <div class="form-group">
  <label class="col-sm-5 control-label">Video</label>
  <div class="col-sm-5">
		<textarea name="codigovideo" id="codigovideo" rows="10" cols="70" class="form-control"></textarea>
	   </div>
	 </div>
	
<div class="form-group">
  <label class="col-sm-5 control-label"></label>
  <div class="col-sm-2">
<input type="submit" name="enviar" class="btn-primary" value="Publicar">
  </div>
</div>
	  </form>

		

   <script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/bootstrap.file-input.js"> </script>
		 <script type="text/javascript">
	 $('input[type=file]').bootstrapFileInput();
$('.file-inputs').bootstrapFileInput();

</script>

</script>
</body>
</html>