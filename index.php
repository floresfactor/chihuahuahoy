     <?php require_once ("head.php");



     //$db->bind("ubicacion","principal");
     //$db->bind("nlimit","2");
     //
     
     //$res = $db->query("SELECT * FROM news WHERE ubicacion = :ubicacion", array("ubicacion"=>"principal"));
     
     //$principal = $crud->findField("ubicacion","principal","0,1");
     $titular1 = $crud->selectUbicacion("ubicacion","titular1","2");
     $titular2 = $crud->selectUbicacion("ubicacion","titular2","2");
     $titular3 = $crud->selectUbicacion("ubicacion","titular3","2");

   

     $notaDia= $crud->selectUbicacion("ubicacion","notadia","1");
     $notaDia2= $crud->selectUbicacion("ubicacion","notadia2","1");

     $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
     $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
     
         //echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " de ".date('Y') ;


     
    /* foreach ($principal as $valor){
        $id = ($valor['id']);
        $titulo = ($valor['titulo']);
        $imagen = ($valor['imagen']);
        $date   = ($valor['fechaString']);
    }
    */
    ?>


    <title>Inicio | Chihuahua Hoy Digital</title>



    <div class="main-content">


      <!-- BEGIN .main-page -->
      <div class="main-page left">

        <!-- BEGIN .double-block -->
        <div class="double-block">

          <!-- BEGIN .content-block -->
          <div class="content-block main right">


            <?php //include('slider.php');?>
            <div class="block">

              <div id="container">
            <!--<h1><strong>Lof JSliderNews 2.0</strong> -  Jquery 1.7.x & Easing plugin - With RTL Support</h1>
       
 <p>
    <strong> Direction: Right - Left. The Navigator is the list of thumbnails.</strong> 
    The plugin allow to use the wheelup and wheeldown to previous|next item in the list.
     
</p>       
-->
<div id="jslidernews1" class="lof-slidecontent" style="width:650px; height:340px;">
  <div class="preload"></div>
  <!-- MAIN CONTENT --> 
  <div class="main-slider-content" style="width:650px; height:340px;">
    <ul class="sliders-wrap-inner" style="width:650px; height:340px;">

      <li style="width:650px; height:340px;">
        <a href="<?php echo 'post.php?id='.$titular3['0']['id'] ?>"><img src="imagesnotas/<?php echo $titular3['0']['imagen']; ?>"   width="650" heigth="340" ></a>           
        <!--<img src="images/slider/thumbl_980x340.png" title="Newsflash 2" >-->           
        <div class="slider-description">
          <div class="slider-meta"> <i> <?php //echo $date; ?></i></div>
          <h4><a href="<?php echo 'post.php?id='.$titular3['0']['id'].'' ?>"><?php echo $titular3['0']['titulo']; ?></a></h4>
          <p> 
            <!--<a class="readmore"><?php $crud->getHour($titular3['0']['date']) ?></a>-->
          </p>
        </div>
      </li> 

      <li style="width:650px; height:340px;">
        <a href="<?php echo 'post.php?id='.$titular2['0']['id'] ?>"><img src="imagesnotas/<?php echo $titular2['0']['imagen']; ?>"   width="650" heigth="340" ></a>           
        <!--<img src="images/slider/thumbl_980x340.png" title="Newsflash 2" >-->           
        <div class="slider-description">
          <div class="slider-meta"> <i> <?php //echo $date; ?></i></div>
          <h4><a href="<?php echo 'post.php?id='.$titular2['0']['id'].'' ?>"><?php echo $titular2['0']['titulo']; ?></a></h4>
          <p> 
            <!--<a class="readmore"><?php $crud->getHour($titular2['0']['date']) ?> </a>-->
          </p>
        </div>
      </li> 
      
      <li style="width:650px; height:340px;">
        <a href="<?php echo 'post.php?id='.$titular1['0']['id'] ?>"><img src="imagesnotas/<?php echo $titular1['0']['imagen']; ?>"   width="650" heigth="340" ></a>           
        <!--<img src="images/slider/thumbl_980x340.png" title="Newsflash 2" >-->           
        <div class="slider-description">
          <div class="slider-meta"> <i> <?php //echo $date; ?></i></div>
          <h4><a href="<?php echo 'post.php?id='.$titular1['0']['id'].'' ?>"><?php echo $titular1['0']['titulo']; ?></a></h4>
          <p> 
            <!--<a class="readmore"><?php $crud->getHour($titular1['0']['date']) ?> </a>-->
          </p>
        </div>
      </li>   
      
    </ul>   
  </div>
  <!-- END MAIN CONTENT --> 
  <!-- NAVIGATOR -->
  <div class="navigator-content">
    <div class="button-next">Next</div>
    <div class="navigator-wrapper">
      <ul class="navigator-wrap-inner">
       <li><img src="imagesnotas/<?php echo $titular3['0']['imagen']; ?>"   width="70" heigth="20" ></li>
       <li><img src="imagesnotas/<?php echo $titular2['0']['imagen']; ?>"   width="70" heigth="20" ></li>
       <li><img src="imagesnotas/<?php echo $titular1['0']['imagen']; ?>"   width="70" heigth="20" ></li>
                 
     </ul>
   </div>
   <div  class="button-previous">Previous</div>
 </div> 
          <!----------------- END OF NAVIGATOR --------------------->
          <!-- BUTTON PLAY-STOP -->
          <div class="button-control"><span></span></div>
          <!-- END OF BUTTON PLAY-STOP -->
          
        </div> 


        <p> 


          <!--</div>-->
        </div>
      </div>
                                    <!--<div class="block">
                                       <div class="featured-block">
                                            
                              <div class="article-content">

                                                <h2><a href="post.html"> </a><?php echo $titulo; ?><a href="post.html#comments" class="h-comment">43</a></h2>
                                                <span class="meta">
                                                    <a href="blog.html"><span class="icon-text"> </span><?php echo $date; ?></a>
                                                </span>
                                            </div>
                                            <div class="article-photo">

                                                <a href="<?php echo 'post.php?id='.$id.'' ?>" class="hover-effect"><img src="imagesnotas/<?php echo $imagen; ?>" alt="" /></a>
                                            </div>
                                        </div>
                                      </div>-->
                                      <center> <a href="https://wa.me/5216394659639?text=Hola%20quisiera%20información%20de%20Agrosial" target="_blank"><img src="images/agrosial2020.gif" alt="agrosialdelicias" width="270px" height="600px" ></a></center>
                                       
                                      <div class="block">
                                        <div class="block-title">
                                         <a href="categoria.php?class=<?php echo $local1['0']['clasificacion'] ?>" class="right">Ver <?php echo "<strong>".$local1['0']['clasificacion']."</strong>"; ?></a>
                                         <h2>Local</h2>
                                       </div>
                                       <div class="block-content">
                                        <ul class="article-block-big">
                                          <li>
                                            <div class="article-photo">
                                              <a href="<?php echo 'post.php?id='.$titular1['1']['id'].'' ?>" ><img src="imagesnotas/<?php echo $titular1['1']['imagen']; ?>"   width="650" heigth="351" ></a>
                                            </div>

                                            <!-- <?php echo 'post.php?id='.$titularextend4['0']['id'] ?> -->
                                            <div class="article-content">
                                              <h4><a href="<?php echo 'post.php?id='.$titular1['1']['id'].'' ?>"><?php echo $titular1['1']['titulo'];  ?></a></h4>
                                              <span class="meta">
                                                <a href="blog.html"><span class="icon-text"></span><?php $crud->getHour($titular1['1']['date']); ?></a>
                                              </span>
                                            </div>
                                          </li>
                                          <li>
                                            <div class="article-photo">
                                              <a href="<?php echo 'post.php?id='.$titular2['1']['id'].'' ?>" ><img src="imagesnotas/<?php echo $titular2['1']['imagen']; ?>" alt="" /></a>
                                            </div>
                                            <div class="article-content">
                                              <h4><a href="<?php echo 'post.php?id='.$titular2['1']['id'].'' ?>"><?php echo $titular2['1']['titulo'];  ?></a></h4>
                                              <span class="meta">
                                                <a href="blog.html"><span class="icon-text"></span><?php $crud->getHour($titular2['1']['date']); ?></a>
                                              </span>
                                            </div>
                                          </li>
                                          <li>
                                            <div class="article-photo">
                                              <a href="<?php echo 'post.php?id='.$titular3['1']['id'].'' ?>" ><img src="imagesnotas/<?php echo $titular3['1']['imagen']; ?>" alt="" /></a>
                                            </div>
                                            <div class="article-content">
                                              <h4><a href="<?php echo 'post.php?id='.$local3['0']['id'].'' ?>"><?php echo $titular3['1']['titulo'];  ?></a></h4>
                                              <span class="meta">
                                                <a href="blog.html"><span class="icon-text"></span><?php $crud->getHour($titular3['1']['date']); ?></a>
                                              </span>
                                            </div>
                                          </li>
                                         <!-- <li>
                                            <div class="article-photo">
                                              <a href="<?php echo 'post.php?id='.$local4['0']['id'].'' ?>" class="hover-effect"><img src="imagesnotas/<?php echo $local4['0']['imagen']; ?>" alt="" /></a>
                                            </div>
                                            <div class="article-content">
                                              <h4><a href="<?php echo 'post.php?id='.$local4['0']['id'].'' ?>"><?php echo $local4['0']['titulo'];  ?></a></h4>
                                              <span class="meta">
                                                <a href="blog.html"><span class="icon-text"></span><?php $crud->getHour($local4['0']['date']); ?></a>
                                              </span>
                                            </div>
                                          </li>
                                          <li>
                                            <div class="article-photo">
                                              <a href="<?php echo 'post.php?id='.$local5['0']['id'].'' ?>" class="hover-effect"><img src="imagesnotas/<?php echo $local5['0']['imagen']; ?>" alt="" /></a>
                                            </div>
                                            <div class="article-content">
                                              <h4><a href="<?php echo 'post.php?id='.$local5['0']['id'].'' ?>"><?php echo $local5['0']['titulo'];  ?></a></h4>
                                              <span class="meta">
                                                <a href="blog.html"><span class="icon-text"></span><?php $crud->getHour($local5['0']['date']); ?></a>
                                              </span>
                                            </div>
                                          </li>
                                          <li>
                                            <div class="article-photo">
                                              <a href="<?php echo 'post.php?id='.$local6['0']['id'].'' ?>" class="hover-effect"><img src="imagesnotas/<?php echo $local6['0']['imagen']; ?>" alt="" /></a>
                                            </div>
                                            <div class="article-content">
                                              <h4><a href="<?php echo 'post.php?id='.$local6['0']['id'].'' ?>"><?php echo $local6['0']['titulo'];  ?></a></h4>
                                              <span class="meta">
                                                <a href="blog.html"><span class="icon-text"></span><?php $crud->getHour($local6['0']['date']);  ?></a>
                                              </span>
                                            </div>
                                          </li>-->
                                        </ul>
                                      </div>
                                    </div>
                                    <!--<div class="block">
                                    <a href="http://www.facebook.com/Rosales.Chih.2013.2016" target="_blank"><img src="images/rosales.png" alt="Municipio de Rosales" /></a>



                                    </div>-->

                                    <div class="block">
                                      <div class="block-title" style="background: #CC181E;">
                                        <a href="#" class="right">Video <?php echo "<strong>".$resVideoEspecial['0']['clasificacion']."</strong>"; ?></a>
                                        <h2><?php echo $resVideoEspecial['0']['titulo']; ?></h2>
                                      </div>
                                      <div class="block-content">
                                        <div class="video-container">
                                          <?php echo $resVideoEspecial['0']['video']; ?>
                                        </div>
                                        <div class="block">
                                          <div class="block-title">
                                           <a href="categoria.php?class=delicias" class="right">Ver <?php echo "<strong>".$chihuahuaprincipal['0']['clasificacion']."</strong>"; ?></a>
                                           <h2>Chihuahua Hoy</h2>
                                         </div>
                                         <div class="block-content">

                                          <div class="wide-article">
                                            <div class="article-photo-principal">
                                              <a href="<?php echo 'post.php?id='.$chihuahuaprincipal['0']['id'].''?>" ><img src="imagesnotas/<?php echo $chihuahuaprincipal['0']['imagen']; ?>" width="596" height="320"></a>
                                            </div>
                                            <div class="article-content-principal">
                                              <h2><a href=" <?php echo 'post.php?id='.$chihuahuaprincipal['0']['id'].'' ?>"><?php echo $chihuahuaprincipal['0']['titulo']?></a></h2>
                                              <span class="meta">
                                                <a href="blog.html"><span class="icon-text"></span><?php $crud->getHour($chihuahuaprincipal['0']['date']);  ?></a>
                                                <span class="<?php echo $chihuahuaprincipal['0']['ciudad']; ?>"></span>
                                              </span>
                                              <p><?php echo $chihuahuaprincipal['0']['parrafo'];  ?></p>
                                            </div>
                                          </div>


                                          <div class="paragraph-row">

                                            <!-- BEGIN .column6 -->
                                            <div class="column6">
                                              <ul class="article-block">
                                                <li>
                                                  <div class="article-photo">
                                                    <a href="<?php echo'post.php?id='.$chihuahua1['0']['id'].'';?>" ><img src="imagesnotas/<?php echo $chihuahua1['0']['imagen']; ?>" width="300" height="150" /></a>
                                                  </div>
                                                  <div class="article-content">
                                                    <h4><a href="<?php echo'post.php?id='.$chihuahua1['0']['id'].' ';?>" ><?php echo $chihuahua1['0']['titulo']; ?></a></h4>
                                                    <span class="meta">
                                                      <a href="blog.html"><span class="icon-text"></span><?php $crud->getHour($chihuahua1['0']['date']); ?></a>
                                                      <span class="<?php echo $chihuahua1['0']['ciudad']; ?>"></span>
                                                    </span>
                                                  </div>
                                                </li>

                                                <li>
                                                  <div class="article-photo">
                                                    <a href="<?php echo'post.php?id='.$chihuahua2['0']['id'].'';?>" ><img src="imagesnotas/<?php echo $chihuahua2['0']['imagen']; ?>"  width="300" height="150" /></a>
                                                  </div>
                                                  <div class="article-content">
                                                    <h4><a href="<?php echo'post.php?id='.$chihuahua2['0']['id'].' ';?>" ><?php echo $chihuahua2['0']['titulo']; ?></a></h4>
                                                    <span class="meta">
                                                      <a href="blog.html"><span class="icon-text"></span><?php $crud->getHour($chihuahua2['0']['date']); ?></a>
                                                      <span class="<?php echo $chihuahua2['0']['ciudad']; ?>"></span>                                                          
                                                    </span>
                                                  </div>
                                                </li>


                                              </ul>
                                              <!-- END .column6 -->
                                            </div>

                                            <!-- BEGIN .column6 -->
                                            <div class="column6">
                                              <ul class="article-block">
                                                <li>
                                                  <div class="article-photo">
                                                    <a href="<?php echo'post.php?id='.$chihuahua3['0']['id'].'';?>" ><img src="imagesnotas/<?php echo $chihuahua3['0']['imagen']; ?>" width="300" height="150" /></a>
                                                  </div>
                                                  <div class="article-content">
                                                    <h4><a href="<?php echo'post.php?id='.$chihuahua3['0']['id'].' ';?>" ><?php echo $chihuahua3['0']['titulo']; ?></a></h4>
                                                    <span class="meta">
                                                      <a href="blog.html"><span class="icon-text"></span><?php $crud->getHour($chihuahua3['0']['date']); ?></a>
                                                      <span class="<?php echo $chihuahua3['0']['ciudad']; ?>"></span>
                                                    </span>
                                                  </div>
                                                </li>

                                                <li>
                                                  <div class="article-photo">
                                                    <a href="<?php echo'post.php?id='.$chihuahua4['0']['id'].'';?>" ><img src="imagesnotas/<?php echo $chihuahua4['0']['imagen']; ?>" width="300" height="150" /></a>
                                                  </div>
                                                  <div class="article-content">
                                                    <h4><a href="<?php echo'post.php?id='.$chihuahua4['0']['id'].' ';?>" ><?php echo $chihuahua4['0']['titulo']; ?></a></h4>
                                                    <span class="meta">
                                                      <a href="blog.html"><span class="icon-text"></span><?php $crud->getHour($chihuahua4['0']['date']); ?></a>
                                                      <span class="<?php echo $chihuahua4['0']['ciudad']; ?>"></span>
                                                    </span>
                                                  </div>
                                                </li>
                                              </ul>
                                              <!-- END .column6 -->
                                            </div>

                                          </div>

                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="block">
                                    <div class="block-title" style="background: #2182b4;">
                                      <a href="categoria.php?class=nacional" class="right">Ver <?php echo "<strong>".$nacionalprincipal['0']['clasificacion']."</strong>"; ?></a>

                                      <h2>MÉXICO HOY</h2>
                                    </div>
                                    <div class="block-content">

                                     <div class="wide-article">
                                      <div class="article-photo-principal">
                                        <a href="<?php echo 'post.php?id='.$nacionalprincipal['0']['id'].''?>" ><img src="imagesnotas/<?php echo $nacionalprincipal['0']['imagen']; ?>" width="596" height="320"></a>
                                      </div>
                                      <div class="article-content-principal">
                                        <h2><a href=" <?php echo 'post.php?id='.$nacionalprincipal['0']['id'].'' ?>"><?php echo $nacionalprincipal['0']['titulo']?></a></h2>
                                        <span class="meta">
                                          <a href="blog.html"><span class="icon-text"></span><?php $crud->getHour($nacionalprincipal['0']['date']);  ?></a>
                                          <span class="tag"><?php echo $nacionalprincipal['0']['ubicacion']; ?></span>
                                        </span>
                                        <p><?php echo $nacionalprincipal['0']['parrafo'];  ?></p>
                                      </div>
                                    </div>


                                    <div class="paragraph-row">

                                      <!-- BEGIN .column6 -->
                                      <!-- BEGIN .column6 -->
                                      <div class="column6">
                                        <ul class="article-block">
                                          <li>
                                            <div class="article-photo">
                                              <a href="<?php echo'post.php?id='.$nacional1['0']['id'].'';?>" ><img src="imagesnotas/<?php echo $nacional1['0']['imagen']; ?>" width="300" height="150" /></a>
                                            </div>
                                            <div class="article-content">
                                              <h4><a href="<?php echo'post.php?id='.$nacional1['0']['id'].' ';?>" ><?php echo $nacional1['0']['titulo']; ?></a></h4>
                                              <span class="meta">
                                                <a href="blog.html"><span class="icon-text"></span><?php $crud->getHour($nacional1['0']['date']); ?></a>
                                              </span>
                                            </div>
                                          </li>

                                         <!-- <li>
                                            <div class="article-photo">
                                              <a href="<?php echo'post.php?id='.$nacional2['0']['id'].'';?>" ><img src="imagesnotas/<?php echo $nacional2['0']['imagen']; ?>"  width="300" height="150" /></a>
                                            </div>
                                            <div class="article-content">
                                              <h4><a href="<?php echo'post.php?id='.$nacional2['0']['id'].' ';?>" ><?php echo $nacional2['0']['titulo']; ?></a></h4>
                                              <span class="meta">
                                                <a href="blog.html"><span class="icon-text"></span><?php $crud->getHour($nacional2['0']['date']); ?></a>
                                              </span>
                                            </div>
                                          </li>-->


                                        </ul>
                                        <!-- END .column6 -->
                                      </div>

                                      <!-- BEGIN .column6 -->
                                      <div class="column6">
                                        <ul class="article-block">
                                          <li>
                                            <div class="article-photo">
                                              <a href="<?php echo'post.php?id='.$nacional2['0']['id'].'';?>" ><img src="imagesnotas/<?php echo $nacional2['0']['imagen']; ?>" width="300" height="150" /></a>
                                            </div>
                                            <div class="article-content">
                                              <h4><a href="<?php echo'post.php?id='.$nacional2['0']['id'].' ';?>" ><?php echo $nacional2['0']['titulo']; ?></a></h4>
                                              <span class="meta">
                                                <a href="blog.html"><span class="icon-text"></span><?php $crud->getHour($nacional2['0']['date']); ?></a>
                                              </span>
                                            </div>
                                          </li>

                                          <!--<li>
                                            <div class="article-photo">
                                              <a href="<?php echo'post.php?id='.$nacional4['0']['id'].'';?>" ><img src="imagesnotas/<?php echo $nacional4['0']['imagen']; ?>" width="300" height="150" /></a>
                                            </div>
                                            <div class="article-content">
                                              <h4><a href="<?php echo'post.php?id='.$nacional4['0']['id'].' ';?>" ><?php echo $nacional4['0']['titulo']; ?></a></h4>
                                              <span class="meta">
                                                <a href="blog.html"><span class="icon-text"></span><?php $crud->getHour($nacional4['0']['date']); ?></a>
                                              </span>
                                            </div>
                                          </li>-->
                                        </ul>
                                        <!-- END .column6 -->
                                      </div>

                                    </div>

                                  </div>
                                </div>

                                <div class="block">
                                  <div class="block-title" style="background: #dd8229;">
                                    <a href="categoria.php?class=mundo" class="right">Ver <?php echo "<strong>".$mundo1['0']['clasificacion']."</strong>"; ?></a>
                                    <h2>PRÓXIMOS EVENTOS</h2>
                                  </div>
                                  <div class="block-content">
                                    <ul class="article-block-big">
                                      <li>
                                        <div class="article-photo">
                                          <a href=" <?php echo'post.php?id='.$mundo1['0']['id'].'' ?>" ><img src="imagesnotas/<?php echo $mundo1['0']['imagen'];  ?>"  /></a>
                                        </div>
                                        <div class="article-content">
                                          <h4><a href=" <?php echo'post.php?id='.$mundo1['0']['id'].'' ?>"><?php echo $mundo1['0']['titulo']?></a></h4>
                                          <span class="meta">
                                            <a href="blog.html"><span class="icon-text"></span><?php $crud->getHour($mundo1['0']['date']); ?></a>
                                          </span>
                                        </div>
                                      </li>

                                      <li>
                                        <div class="article-photo">
                                          <a href=" <?php echo'post.php?id='.$mundo2['0']['id'].'' ?>" ><img src="imagesnotas/<?php echo $mundo2['0']['imagen'];  ?>"  /></a>
                                        </div>
                                        <div class="article-content">
                                          <h4><a href=" <?php echo'post.php?id='.$mundo2['0']['id'].'' ?>"><?php echo $mundo2['0']['titulo']?></a></h4>
                                          <span class="meta">
                                            <a href="blog.html"><span class="icon-text"></span><?php $crud->getHour($mundo2['0']['date']); ?></a>
                                          </span>
                                        </div>
                                      </li>

                                      <li>
                                        <div class="article-photo">
                                          <a href=" <?php echo'post.php?id='.$mundo3['0']['id'].'' ?>" ><img src="imagesnotas/<?php echo $mundo3['0']['imagen'];  ?>"  /></a>
                                        </div>
                                        <div class="article-content">
                                          <h4><a href=" <?php echo'post.php?id='.$mundo3['0']['id'].'' ?>"><?php echo $mundo3['0']['titulo']?></a></h4>
                                          <span class="meta">
                                            <a href="blog.html"><span class="icon-text"></span><?php $crud->getHour($mundo3['0']['date']); ?></a>
                                          </span>
                                        </div>
                                      </li>



                                    </ul>
                                  </div>
                                </div>

                                <!-- END .content-block -->
                              </div>

                              <!-- BEGIN .content-block -->
                              <div class="content-block left">
                                <div class="block">
                                  <div class="banner">
                                  
                                  <!--<a href="http://antoniovaldivia.com/" target="_blank"><img src="images/valdivia.png" alt="Valdivia Candidato Diputado Federal" /></a>-->

                                </div>
                              </div>

                              
                              <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Adaptablo to Portada Superior Derecha -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2126345999915909"
     data-ad-slot="1910300275"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
                              <p>
                               <?php //include('uach.php');?> 
                              <div class="block">
                                <div class="banner">
                                  <!-- <a href="http://www.facebook.com/PresidenciaCamargo" target="_blank"><img src="images/camargo200.jpg" alt="Presidencia Camargo" /></a>-->
                                  <!--<span class="icon-text">&#9652;</span>Presidencia Camargo<span class="icon-text">&#9652;</span></a>-->
                                </div>
                              </div>
                              <div class="block">
                                <div class="banner">
                                <!--<a href="http://educacion.chihuahua.gob.mx/content/carta-maestros-de-chihuahua" target="_blank"><img src="images/maestros.gif" alt="Atencion Maestros" /></a>
                                        <a href="#" target="_blank"><img src="images/no-banner-200x200.jpg" alt="" /></a>
                                        <a href="contact-us.html" class="ad-link"><span class="icon-text">&#9652;</span>Advertisement<span class="icon-text">&#9652;</span></a>-->
                                        <!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                        <!-- 200 X 200 PortadaMedioIzquierdo 
                                        <ins class="adsbygoogle"
                                        style="display:inline-block;width:200px;height:200px"
                                        data-ad-client="ca-pub-2126345999915909"
                                        data-ad-slot="7391788674"></ins>
                                        <script>
                                          (adsbygoogle = window.adsbygoogle || []).push({});
                                        </script>-->
                                        <!--<div class='ajax-poll' tclass='poll-background-image' style='width:300px;'></div>-->
                                      </div>
                                    </div>
                                    <?php include('deportes.php');?>
                                    <?php include('economia.php');?>
                                    

                                    
                                    <!-- <div class="block">
                                        <h2 class="list-title" style="color: #c42b20;border-bottom: 2px solid #c42b20;">Sorprendete!</h2>
                                        <ul class="article-list">
                                            <li><a href="post.html">Solet percipit euod tractatos percipit euod tractatos</a><a href="post.html#comments" class="h-comment">32</a><span class="meta-date">7.Oct</span></li>
                                            <li><a href="post.html">Ei sonet atomorum meiquo singulis invenire nesit</a><a href="post.html#comments" class="h-comment">84</a><span class="meta-date">7.Oct</span></li>
                                            <li><a href="post.html">Lus eleifend hom pertinacia hom pertinacia</a><a href="post.html#comments" class="h-comment">72</a><span class="meta-date">6.Oct</span></li>
                                            <li><a href="post.html">Pri viderer recteque exp inimicusis verear minimum vim</a><a href="post.html#comments" class="h-comment">136</a><span class="meta-date">6.Oct</span></li>
                                            <li><a href="post.html">Ocurr comprehensam recteq comprehensam recteq</a><a href="post.html#comments" class="h-comment">8</a><span class="meta-date">6.Oct</span></li>
                                            <li><a href="post.html">Ut oratio viderer evertim</a><a href="post.html#comments" class="h-comment">92</a><span class="meta-date">5.Oct</span></li>
                                            <li><a href="post.html">Solet percipit euod tractatos percipit euod tractatos</a><a href="post.html#comments" class="h-comment">32</a><span class="meta-date">7.Oct</span></li>
                                            <li><a href="post.html">Ei sonet atomorum meiquo singulis invenire nesit</a><a href="post.html#comments" class="h-comment">84</a><span class="meta-date">7.Oct</span></li>
                                        </ul>
                                        <a href="blog.html" class="more">Read More</a>
                                      </div> -->
                                      
                                    <!--<div class="block">
                                        <h2 class="list-title" style="color: #2277c6;border-bottom: 2px solid #2277c6;">Encuesta</h2>
                                        <ul class="article-list">
                                            <li><a href="post.html">Solet percipit euod tractatos percipit euod tractatos</a><a href="post.html#comments" class="h-comment">32</a><span class="meta-date">7.Oct</span></li>
                                            <li><a href="post.html">Ei sonet atomorum meiquo singulis invenire nesit</a><a href="post.html#comments" class="h-comment">84</a><span class="meta-date">7.Oct</span></li>
                                            <li><a href="post.html">Lus eleifend hom pertinacia hom pertinacia</a><a href="post.html#comments" class="h-comment">72</a><span class="meta-date">6.Oct</span></li>
                                            <li><a href="post.html">Pri viderer recteque exp inimicusis verear minimum vim</a><a href="post.html#comments" class="h-comment">136</a><span class="meta-date">6.Oct</span></li>
                                            <li><a href="post.html">Ocurr comprehensam recteq comprehensam recteq</a><a href="post.html#comments" class="h-comment">8</a><span class="meta-date">6.Oct</span></li>
                                            <li><a href="post.html">Ut oratio viderer evertim</a><a href="post.html#comments" class="h-comment">92</a><span class="meta-date">5.Oct</span></li>
                                            <li><a href="post.html">Solet percipit euod tractatos percipit euod tractatos</a><a href="post.html#comments" class="h-comment">32</a><span class="meta-date">7.Oct</span></li>
                                            <li><a href="post.html">Ei sonet atomorum meiquo singulis invenire nesit</a><a href="post.html#comments" class="h-comment">84</a><span class="meta-date">7.Oct</span></li>
                                            <li><a href="post.html">Solet percipit euod tractatos percipit euod tractatos</a><a href="post.html#comments" class="h-comment">32</a><span class="meta-date">7.Oct</span></li>
                                            <li><a href="post.html">Ei sonet atomorum meiquo singulis invenire nesit</a><a href="post.html#comments" class="h-comment">84</a><span class="meta-date">7.Oct</span></li>
                                            <li><a href="post.html">Lus eleifend hom pertinacia hom pertinacia</a><a href="post.html#comments" class="h-comment">72</a><span class="meta-date">6.Oct</span></li>
                                            <li><a href="post.html">Pri viderer recteque exp inimicusis verear minimum vim</a><a href="post.html#comments" class="h-comment">136</a><span class="meta-date">6.Oct</span></li>
                                        </ul>
                                        <a href="blog.html" class="more">Read More</a>
                                      </div>-->
                                      
                                      
                                      
                                      

                                      <!-- END .content-block -->
                                    </div>

                                    <!-- END .double-block -->
                                  </div>

                                  <!-- END .main-page -->
                                </div>
                                
                                <!-- BEGIN .main-sidebar -->
                                <div class="main-sidebar right">

                            <!-- BEGIN .widget 
                            <div class="widget">
                                <a href="#" target="_blank"><img src="images/no-banner-300x250.jpg" alt="" /></a>
                                <a href="contact-us.html" class="ad-link"><span class="icon-text">&#9652;</span>Advertisement<span class="icon-text">&#9652;</span></a>
                                <!-- END .widget 
                              </div>-->

                              <div class="block">
                                <div class="featured-block">
                                           <!-- <div class="article-content">
                                                <h3><a href="post.html">helloworld</a><a href="post.html#comments" class="h-comment">43</a></h3>
                                                <span class="meta">
                                                    <a href="blog.html"><span class="icon-text"> </span>11:20, 7.Oct 2013</a>
                                                </span>
                                              </div>-->
                                              <!-- <h2><center> <?php echo $resVideoPortada['0']['titulo'];  ?></center></h2>-->
                                             <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                               
                                              <ins class="adsbygoogle"
                                              style="display:block"
                                              data-ad-client="ca-pub-2126345999915909"
                                              data-ad-slot="8220338276"
                                              data-ad-format="auto"></ins>
                                              <script>
                                               (adsbygoogle = window.adsbygoogle || []).push({});
                                             </script>
                                             <!--<img src="images/car.png" alt="CARSHOW Delicias" />-->
                                            <!--  <a href="https://wa.me/5216394659639?texto=Me%20interesa%20Agrosial" target="_blank"><img src="images/agrosial2020.gif" alt="agrosialdelicias" width="270px" height="600px" ></a> -->
                                              <!-- <div class="video-container">
                                                <?php echo $resVideoPortada['0']['video'];?>
                                              </div>-->
                                             <!--<img src="images/santa.gif" alt="Casa de Santa y Encendido Del Árbol" />-->
                                             <hr>
                                             <!--<a href="https://www.facebook.com/museocasaredonda/"><img src="images/goya.gif" alt="Goya" width="300" heigth="250" /></a>-->
                                             <!--<div class='ajax-poll' tclass='poll-background-image' style='width:300px;'></div>-->
                                            </div>
                                          </div>
                                          <p>
                                          <?php include('editorial.php');?>
                                          
                                          <!-- BEGIN .widget -->
                                          
                                          
                                          <!-- BEGIN .widget -->

                                          <?php include('instante.php');?>
                                          <?php //include('cardinales.php'); ?>
                                          <?php include('masleido.php');?>
                                          

                            <!--<div class="widget">
                                <h3>Lo mas Leido</h3>
                                <div class="widget-articles">
                                    <ul>
                                        <li>
                                            <div class="article-photo">
                                                <a href="post.html" class="hover-effect"><img src="images/photos/image-1.jpg" alt="" /></a>
                                            </div>
                                            <div class="article-content">
                                                <h4><a href="post.html">Debitis minimum vituperata mei no adipiscing intellegam</a><a href="post.html#comments" class="h-comment">201</a></h4>
                                                <span class="meta">
                                                    <a href="blog.html"><span class="icon-text"></span>11:20, 7.Oct 2013</a>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="article-photo">
                                                <a href="post.html" class="hover-effect"><img src="images/photos/image-2.jpg" alt="" /></a>
                                            </div>
                                            <div class="article-content">
                                                <h4><a href="post.html">Nec option veritus ullamcorper cu ea eam cibo quaestio te eros</a><a href="post.html#comments" class="h-comment">74</a></h4>
                                                <span class="meta">
                                                    <a href="blog.html"><span class="icon-text"></span>11:20, 7.Oct 2013</a>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="article-photo">
                                                <a href="post.html" class="hover-effect"><img src="images/photos/image-3.jpg" alt="" /></a>
                                            </div>
                                            <div class="article-content">
                                                <h4><a href="post.html">Ea mea fugit appareat quaestio delectus pericula id sea</a><a href="post.html#comments" class="h-comment">39</a></h4>
                                                <span class="meta">
                                                    <a href="blog.html"><span class="icon-text"></span>11:20, 7.Oct 2013</a>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="article-photo">
                                                <a href="post.html" class="hover-effect"><img src="images/photos/image-4.jpg" alt="" /></a>
                                            </div>
                                            <div class="article-content">
                                                <h4><a href="post.html">Ex cibo ullum nostrum per quo cu utamur fabulas</a><a href="post.html#comments" class="h-comment">99</a></h4>
                                                <span class="meta">
                                                    <a href="blog.html"><span class="icon-text"></span>11:20, 7.Oct 2013</a>
                                                </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="article-photo">
                                                <a href="post.html" class="hover-effect"><img src="images/photos/image-5.jpg" alt="" /></a>
                                            </div>
                                            <div class="article-content">
                                                <h4><a href="post.html">Debitis minimum vituperata mei no adipiscing intellegam</a><a href="post.html#comments" class="h-comment">201</a></h4>
                                                <span class="meta">
                                                    <a href="blog.html"><span class="icon-text"></span>11:20, 7.Oct 2013</a>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                </div>
                                <!-- END .widget -->
                                
                                
                                <!-- BEGIN .widget -->
                                
                                
                                <!-- BEGIN .widget -->

                                <!--<div class="widget">
                                  <h3>Tendencias</h3>
                                  <div class="tag-cloud">

                                  <?php //Crear arreglo con tendencias de BD  ?>
 <a href="#">Plaqueo</a><a href="#">Delicias</a><a href="#">Ayotzinapa</a><a href="#">Iguala</a><a href="#">Duarte</a><a href="#">Petroleo</a><a href="#">Angel</a>
</div>

</div>-->

<!-- BEGIN .widget -->
                            <!--<div class="widget">
                                <h3>Subscribe Mailing List</h3>
                                <div class="mailing-list">
                                    <p>By subscribing You will recieve our latest news. Your information will not be shared with anyone.</p>
                                    <hr />
                                    <div class="info-message success">
                                        <span class="icon-text">&#128077;</span>
                                        <b>Gear Success !</b>
                                        <p>Everything went well, You are now subscribed !</p>
                                    </div>
                                    <!-- <div class="info-message fail">
                                        <span class="icon-text">&#9888;</span>
                                        <b>Whooooops !</b>
                                        <p>You made a little error here !</p>
                                      </div> -->
                                    <!-- <div class="info-message">
                                        <span class="icon-text">&#10227;</span>
                                        <b>Loading!</b>
                                        <p>This may take a few seconds !</p>
                                    </div> 
                                    <div class="subscribe-block">
                                        <form action="#">
                                            <p><input type="text" value="" placeholder="Your name" /></p>
                                            <p><input type="text" value="" placeholder="Your e-mail" /></p>
                                            <p><input type="submit" value="Subscribe" class="button" /></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- END .widget -->

                            
                            <!-- BEGIN .widget -->
                            <!--<div class="widget">
                                <h3>Calendar</h3>
                                <div id="calendar_wrap">
                                    <table id="wp-calendar">
                                        <caption>October 2013</caption>
                                        <thead>
                                            <tr>
                                                <th scope="col" title="Monday">M</th>
                                                <th scope="col" title="Tuesday">T</th>
                                                <th scope="col" title="Wednesday">W</th>
                                                <th scope="col" title="Thursday">T</th>
                                                <th scope="col" title="Friday">F</th>
                                                <th scope="col" title="Saturday">S</th>
                                                <th scope="col" title="Sunday">S</th>
                                            </tr>
                                        </thead>

                                        <tfoot>
                                            <tr>
                                                <td colspan="3" id="prev"><a href="#" title="View posts for September 2013">« Sep</a></td>
                                                <td class="pad">&nbsp;</td>
                                                <td colspan="3" id="next" class="pad">&nbsp;</td>
                                            </tr>
                                        </tfoot>

                                        <tbody>
                                            <tr>
                                                <td colspan="1" class="pad">&nbsp;</td><td>1</td><td>2</td><td>3</td><td><a href="blog.html">4</a></td><td>5</td><td><a href="blog.html">6</a></td>
                                            </tr>
                                            <tr>
                                                <td>7</td><td><a href="blog.html">8</td><td><a href="blog.html">9</a></td><td><a href="blog.html">10</a></td><td>11</td><td>12</td><td>13</td>
                                            </tr>
                                            <tr>
                                                <td>14</td><td><a href="blog.html">15</a></td><td>16</td><td><a href="blog.html">17</a></td><td><a href="blog.html">18</a></td><td>19</td><td><a href="blog.html">20</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="blog.html">21</a></td><td>22</td><td id="today"><a href="blog.html">23</a></td><td>24</td><td>25</td><td>26</td><td>27</td>
                                            </tr>
                                            <tr>
                                                <td>28</td><td>29</td><td>30</td><td>31</td>
                                                <td class="pad" colspan="3">&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END .widget 
                              </div>-->
                              
                              <!--<div class="block">

                                <ul class="article-block">
                                  <li>
                                    <div class="article-photo">
                                      <a href="<?php echo'post.php?id='.$notaDia['0']['id'].'' ?>" ><img src="imagesnotas/<?php echo $notaDia['0']['imagen'];  ?>" width="330" height="280" alt="" /></a>

                                    </div>
                                    <div class="article-content">
                                      <h3><a href="<?php echo'post.php?id='.$notaDia['0']['id'].'' ?>"><?php echo $notaDia['0']['titulo'];  ?></a></h3>
                                      <span class="meta">
                                        <span class="tag"><?php echo $notaDia['0']['clasificacion']; ?></span>
                                      </span>
                                    </div>

                                  </li>
                                </ul>
                              </div>

                              <div class="block">

                                <ul class="article-block">
                                  <li>
                                    <div class="article-photo">
                                      <a href="<?php echo'post.php?id='.$notaDia2['0']['id'].'' ?>" ><img src="imagesnotas/<?php echo $notaDia2['0']['imagen'];  ?>" width="330" height="280" alt="" /></a>
                                    </div>
                                    <div class="article-content">
                                      <h3><a href="<?php echo'post.php?id='.$notaDia2['0']['id'].'' ?>"><?php echo $notaDia2['0']['titulo'];  ?></a></h3>
                                      <span class="meta">
                                        <span class="tag"><?php echo $notaDia2['0']['clasificacion']; ?></span>
                                      </span>
                                    </div>
                                    
                                  </li>
                                </ul>
                              </div>-->

                              <?php include('espectaculos.php');?>
                              <?php include('ciencia.php');?>
                              <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                              <!--250 x 600 Portada Inferior Derecha -->
                              <ins class="adsbygoogle"
                              style="display:inline-block;width:250px;height:600px"
                              data-ad-client="ca-pub-2126345999915909"
                              data-ad-slot="1378636674"></ins>
                              <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                              </script>




                            </div>

                            <div class="clear-float"></div>

                          </div>
                          
                          <!-- END .wrapper -->
                        </div>
                        
                        <!-- BEGIN .content -->
                      </div>


                      <!--Importacion del modulo pie o Footer que contien los archivos js -->
                      <?php include('footer.php'); ?>