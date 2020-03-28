<!-- BEGIN .footer -->
<div class="footer">

    <div class="wrapper">

        <ul class="right">

            <li><h3><strong></strong>chihuahuahoy@hotmail.com<h3></li>
           <!--<li><a href="index.php">Inicio</a></li>
           <li><a href="blog.html">Blog Page</a></li>
           <li><a href="photo-gallery.html">Photo Gallery</a></li>
           <li><a href="error-404.html">404 Error Page</a></li>
           <li><a href="contact-us.html">chihuahuahoy@hotmail.com</a></li>-->
       </ul>

       <a href="http://rnviz.com/" class="logo-footer"><img src="images/sinfoniafooterlogo.png" /></a>

       <p>&copy; <?php echo date("Y"); ?> Copyright <b>Sinfonía Web</b> All Rights reserved.<br/>Designed by <a href="http://orange-themes.com/" target="_blank" class="orange-themes">Orange-Themes.com</a></p>

       <!-- END .wrapper -->
   </div>
   <!-- END .footer -->
</div>

<!-- END .boxed -->
</div>


<script type="text/javascript" src="js/jquery-latest.min.js"></script>
<script type="text/javascript" src="js/theme-scripts.js"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<script src='js/snowfall.jquery.js'></script>

		<!--<script type="text/javascript" src="jscript/demo-settings.js"></script>

		<!--Slider-->
		<!--Libreria jquery.js no sirve conflictos con slider y marquesina-->
		<!--<script language="javascript" type="text/javascript" src="jscript/jquery.js"></script>-->
		<script language="javascript" type="text/javascript" src="js/jquery.easing.js"></script>
    <script language="javascript" type="text/javascript" src="js/script.js"></script>

    <!--Importacion de Bootstrap -->
		<script language="javascript" type="text/javascript" src="bootstrap/js/bootsrap.min.js"></script>

        <!--facebook scripts plugins-->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=918591718170314&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>


        <script type="text/javascript">
        $(document).ready( function(){ 

         //$(document).snowfall({deviceorientation : true, round : true, minSize: 1, maxSize:8,  flakeCount : 250});
 
				//Get
				$.ajax({ 
                  url: 'https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%3D115958&format=json&diagnostics=true&callback=', 
                  type: 'POST',
                  dataType: 'application/json', 

              }) 
                .done(function(r){ 
                  console.log('Perfecto'); 
              }) 
                .fail(function(r){ 
                  console.log('Uffff error'+r.statusText); 
              }) 
                .always(function(data){ 
                   var conditionES = "inicia";
                   var json = JSON.parse(data.responseText);
			//alert(JSON.stringify(data));
            var imagen = json.query.results.channel.item.condition.desc;
            var condition = json.query.results.channel.item.condition.code;
            var temp = json.query.results.channel.item.condition.temp;
		   //var date = json.query.results.channel.item.condition.date;
           var tempC = (temp-32)/1.8;
           $('.report').html(tempC.toFixed(0)+"°C");
		   // alert(condition);


           switch (condition) { 
            case '0': 
            conditionES='Tornado';
            break;
            case '1': 
            conditionES='Tormenta';
            break;
            case '2': 
            conditionES='Huracan';
            break;
            case '3': 
            conditionES='Tormenta Electrica';
            break;
            case '4': 
            conditionES='Tormenta Electrica';
            break;
            case '5': 
            conditionES='Agua Nieve';
            break;
            case '6': 
            conditionES='Agua Nieve';
            break;
            case '7': 
            conditionES='Agua Nieve';
            break;
            case '8': 
            conditionES='Llovizna Helada';
            break;
            case '9': 
            conditionES='Llovizna';
            break;
            case '10': 
            conditionES='Luvia Helada';
            break;
            case '11': 
            conditionES='Luvia';
            break;
            case '12': 
            conditionES='Luvia';
            break;
            case '13': 
            conditionES='Nieve Lígera';
            break;
            case '14': 
            conditionES='Nieve Moderada';
            break;
            case '15': 
            conditionES='Viento con Nieve';
            break;
            case '16': 
            conditionES='Nieve';
            break;
            case '17': 
            conditionES='Granizo';
            break;
            case '18': 
            conditionES='Agua Nieve';
            break;
            case '19': 
            conditionES='Polvo';
            break;
            case '20': 
            conditionES='Niebla';
            break;
            case '21': 
            conditionES='Neblina';
            break;
            case '22': 
            conditionES='Polvo con Viento';
            break;
            case '23': 
            conditionES='Viento con Polvo';
            break;
            case '24': 
            conditionES='Viento';
            break;
            case '25': 
            conditionES='Muy Frio';
            break;
            case '26': 
            conditionES='Nublado';
            break;
            case '27': 
            conditionES='Muy Nublado';
            break;
            case '28': 
            conditionES='Muy Nublado';
            break;
            case '29': 
            conditionES='Parcialmente Nublado';
            break;
            case '30': 
            conditionES='Parcialmente Nublado';
            break;
            case '31': 
            conditionES='Despejado';
            break;
            case '32': 
            conditionES='Soleado';
            break;
            case '33': 
            conditionES='Buen Tiempo';
            break;
            case '34': 
            conditionES='Buen Tiempo';
            break;
            case '35': 
            conditionES='Lluvia con Granizo';
            break;
            case '36': 
            conditionES='Muy Caliente';
            break;
            case '37': 
            conditionES='Tormentas Electrica Aislada';
            break;
            case '38': 
            conditionES='Tormenta Electrica Dispersa';
            break;
            case '39': 
            conditionES='Tormenta Electrica Dispersa';
            break;
            case '40': 
            conditionES='Lluvia Dispersa';
            break;
            case '41': 
            conditionES='Fuerte Nevada';
            break;
            case '42': 
            conditionES='Agua Nieve Dispersa';
            break;
            case '43': 
            conditionES='Fuerte Nevada';
            break;
            case '44': 
            conditionES='Parcialmente Nublado';
            break;
            case '45': 
            conditionES='Tormenta';
            break;
            case '46': 
            conditionES='Nieve';
            break;
            case '47': 
            conditionES='Tormenta Aislada';
            break;
        }

            //selectores para agregar los datos del clima e imagen en la seccion de el tiempo
            $('.condition').append(conditionES);
            $('.conditionimagen').attr("src","http://l.yimg.com/a/i/us/we/52/"+condition+".gif");

            //selectores para agregar el formato para la tag de cuidad
            $('.chihuahua').append("Chihuahua");
            $('.parral').append("Parral");
            $('.cuauhtemoc').append("Cuauhtémoc");
            $('.camargo').append("Camargo");
            $('.juarez').append("Juárez");
            $('.ojinaga').append("Ojinaga");
            $('.aldama').append("Aldama");
            $('.jimenez').append("Jiménez");
            $('.madera').append("Madera");

        });

		// Efecto Menu Fijo
		if($(window).width() >= 900) {
			$(window).scroll(function() {
				if ($(this).scrollTop() > 157){
					$('#break').addClass("fixed").fadeIn();
					// $('.boxed').addClass("margen").fadeIn();
				}
				else {
					$('#break').removeClass("fixed");
					//  $('.boxed').removeClass("margen");
				}
			});
		}
		// Movimiento en Slider                        
		var buttons = { previous:$('#jslidernews1 .button-previous') ,
		next:$('#jslidernews1 .button-next') };         
		$('#jslidernews1').lofJSidernews( { interval : 4000,
			direction      : 'opacitys',   
			easing         : 'easeInOutExpo',
			duration       : 1200,
			auto           : true,
			maxItemDisplay  : 3,
											navPosition     : 'horizontal', // horizontal
											navigatorHeight : 50,
											navigatorWidth  : 85,
											mainWidth       : 650,
											buttons         : buttons 
											,rtl:true} ); 

		

		//Evento para mover marquesina en header.php
		$('.breaking-news ul').marquee({delay:2000}); 


			 //Operacion para paginador en categorias.php
			 var page_num = getUrlParameter('pag') ;
			 var page_class = getUrlParameter('class') ;
			 page_num++;
			 $('.page-numbers:nth-child('+page_num+')').addClass('current');
			 $("#next").attr("href", "?class="+page_class+"&pag="+page_num);
			 page_num--;
			 page_num--;
			 if (page_num>0) 
			 {
             $("#prev").attr("href", "?class="+page_class+"&pag="+page_num);


         }
         else{

             $( "#prev" ).hide();
         }

     }


     );

function getUrlParameter(sParam) 
{
  var sPageURL = window.location.search.substring(1);
  var sURLVariables = sPageURL.split('&');
  for (var i = 0; i < sURLVariables.length; i++)  
  {
     var sParameterName = sURLVariables[i].split('=');
     if (sParameterName[0] == sParam)  
     {
       return sParameterName[1];
   }
}
}
</script>

<script>
$(document).ready(function() {
    if( $(window).width() > 899 ) {
        $('.cat-block').css('margin-left', '55px');
    }
});
</script>

<!-- END body -->

<!-- END html -->
</body>
</html>