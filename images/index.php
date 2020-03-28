<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Publicar Fotos</title>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="ajaxupload.js"></script>

<style type="text/css">
	body{
		margin:0;
		padding:0;
		font:normal 12px Arial, Helvetica, sans-serif
	}
	#content{
		width:1020px;
		margin:20px auto;
		height:2080px;
		border:6px solid #F3F3F3;
		padding-top:10px;
		overflow-y:auto
	}
	#upload{  
		padding:12px;  
		font:bold 12px Arial, Helvetica, sans-serif;
        text-align:center;  
        background:#f2f2f2;  
        color:#3366cc;  
        border:1px solid #ccc;  
        width:150px;
		display:block;  
        -moz-border-radius:5px;
		-webkit-border-radius:5px; 
		margin:0 auto; 
		text-decoration:none
    }
	#gallery{
		list-style:none;
		margin:20px 0 0 0;
		padding:0
	}
	#gallery li{
		display:block;
		float:left;
		width:150px;
		height:150px;
		background:#9AF099;
		border:1px solid #093;
		text-align:center;
		padding:6px 0;
		margin:5px 0 5px 14px;
		position:relative
	}
	#gallery li img{
		width:145px;
		height:140px
	}
	#gallery li a{
		position:absolute;
		right:10px;
		top:10px
	}
	#gallery li a img{ width:auto; height:auto}
	
</style>

<script type="text/javascript">
	$(document).ready(function(){
		
		var button = $('#upload'), interval;
		new AjaxUpload(button,{
			action: 'procesa.php', 
			name: 'image',
			onSubmit : function(file, ext){
				this.setData({
				'ubicacion': document.contenido.ubicacion.value
				});
			// cambiar el texto del boton cuando se selecicione la imagen		
				button.text('Subiendo');
				// desabilitar el boton
				this.disable();
				
				interval = window.setInterval(function(){
					var text = button.text();
					if (text.length < 11){
						button.text(text + '.');					
					} else {
						button.text('Subiendo');				
					}
				}, 200);
			},
			onComplete: function(file, response){
				button.text('Subir Foto');
							
				window.clearInterval(interval);
							
				// Habilitar boton otra vez
				this.enable();
				
				// Añadiendo las imagenes a mi lista
				
				if($('#gallery li').length == 0){
					$('#gallery').html(response).fadeIn("fast");
					$('#gallery li').eq(0).hide().show("slow");
				}else{
					$('#gallery').prepend(response);
					$('#gallery li').eq(0).hide().show("slow");
				}
			}
		});
		
		// Listar  fotos que hay en mi tabla
		$("#gallery").load("procesa.php?action=listFotos");
		
		// Eliminar
		
		$("#gallery li a").live("click",function(){
			var a = $(this)
			$.get("procesa.php?action=eliminar",{id:a.attr("id")},function(){
				a.parent().fadeOut("slow")
			})
		})
	});

</script>
</head>

<body bgcolor=#dddddd>
<a href="../panel"><img src="../images/logostatus.png" ></a>
    <div id="content">F

 
    
        <a href="javascript:;" id="upload">Subir foto</a>
            <FORM name="contenido" id="contenido" action="">
	<select name="ubicacion" id="ubicacion">
    <!-- <option>Selecciona</option>
    <option value="comic">Comic</option> -->
    
    
    
    
    </select></FORM>

        <ul id="gallery">
            <!-- Cargar Fotos -->
        </ul>
    </div>

</body>
</html>