
<!DOCTYPE html>
<html lang="es">
<head>
    <?php require('../db/Crud.class.php');


$crud = new Crud();
$res = $crud->allDescEditorial();

  ?>
    <meta charset="UTF-8">
    <title>Edicion Editorial</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="../css/styles.css" rel="stylesheet">

         <link href="../css/styles.css" rel="stylesheet">

            <link href="../css/styles.css" rel="stylesheet">
            <link type="text/css" rel="stylesheet" href="css/reset.css" />
            <link type="text/css" rel="stylesheet" href="../css/main-stylesheet.css" />
            <link type="text/css" rel="stylesheet" href="../css/lightbox.css" />
            <link type="text/css" rel="stylesheet" href="../css/shortcode.css" />
            <link type="text/css" rel="stylesheet" href="../css/fonts.css" />
            <link type="text/css" rel="stylesheet" href="../css/colors.css" />
            <link type="text/css" rel="stylesheet" href="../css/types.css" />
        <!--[if lte IE 8]>
        <link type="text/css" rel="stylesheet" href="../css/ie-ancient.css" />
        <![endif]-->
        <link type="text/css" rel="stylesheet" href="../css/responsive.css" />

        <!--Slider-->
        <link rel="stylesheet" type="text/css" href="../css/slider/layout.css" />
        <link rel="stylesheet" type="text/css" href="../css/slider/layout-rtl.css" />
        <link rel="stylesheet" type="text/css" href="../css/slider/style1.css" />
        <link rel="stylesheet" type="text/css" href="../css/slider/style1-rtl.css" />
</head>
<body>
  
<div align="center">
  <div class="col-sm-12">
                <div id="logo" class="header-logo">
                    <div>
                    </div>
                    <div>
                        <span class="capital">C</span>
                        <span class="nocapital">hihuahua</span>
                        <span class="espacio">&nbsp;</span>
                        <span class="capital">H</span>    
                        <span class="nocapital2">oy</span>
                    </div>
                </div>  
            </div>   
 <h2 id="hola">Edicion de Editorial</h2>
   <ul class="pager">
         <li><a href="mainne.php">Volver a Oficina</a></li>
    </ul>

 <table class="table table-bordered table-striped">
    <thead>
        <tr>
          <th>ID</th>
          <th>Titulo</th>
          <th>Autor</th>
          <th>Visitas</th>
        </tr>
    </thead>
    <tbody>

    <?php

foreach ($res as $campo) {
   echo "<tr>
   <td>". $campo['id']. "</td>
   <td>".$campo['titulo']."</td>";


   echo '<td>'.$campo['autor'].'</td>'.'<td>'.$campo['visitas'].'</td>'.'<td><a class="btn btn-info" href="updateeditorial.php?id='.$campo['id'].'">Modificar</a></td><td><a class="btn btn-danger" href="deleteopinion.php?id='.$campo['id'].'">Eliminar</a></td></tr>';
}
    ?>

    </tbody>
</table>
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