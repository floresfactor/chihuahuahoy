<?php include ('head.php');


//$resClasiPag = $crud->findDesc("*","clasificacion",$_GET['class'],"0","7");

$resClasiPag = $crud->findDescPag("*","clasificacion",$_GET['class'],$_GET['pag']);

/*if ($_GET['class'] == "gobierno") {
	$titleCat = "ELECCION 2016";
}

else
{
*/
$titleCat = strtoupper($_GET['class']);

//}

echo"<title>".$titleCat." | Chihuahua Hoy Digital</title>";

?>


<div class="main-content">

	<!-- BEGIN .main-page -->
	<div class="main-page left">

		<!-- BEGIN .double-block -->
		<div class="double-block">
			
			<!-- BEGIN .content-blockk -->
			<div class="content-block main2 left">
				
				<div class="block">
					<div class="block-title" style="background: #951e9a;">
						<a href="index.php" class="right">Regresar a Portada</a>
						<h2><?php 
							if ($_GET['class']=="tecnologia") {
								echo "TECNOLOGÍA";
							}
							/*else{

								if ($_GET['class']=="gobierno") {
								echo "ELECCION 2016";
							}*/
							else{
								echo $_GET['class'];
							}
							

							


							?></h2>
						</div>
						<div class="block-content">
							

							<div class="article-big">
								<div class="article-photo">
									<a href="<?php echo'post.php?id='.$resClasiPag['0']['id'].'' ?>" class="hover-effect"><img src="imagesnotas/<?php echo $resClasiPag['0']['imagen'];  ?>" width="210" height="147" alt="" /></a>
								</div>
								<div class="article-content">
									<h2><a href="<?php echo'post.php?id='.$resClasiPag['0']['id'].'' ?>"><?php echo $resClasiPag['0']['titulo'];  ?></a></h2>
									<span class="meta">
										<span class="<?php echo $resClasiPag['0']['ciudad']; ?>"></span>
														<!--<a href="blog.html"><span class="icon-text">&#128100;</span>Orange-Themes</a>
														<a href="blog.html"><span class="icon-text">&#128340;</span>11:20, 7.Oct 2013</a>-->
													</span>
													<p><?php echo $resClasiPag['0']['parrafo'];  ?></p>
													<span class="meta">
														<a href="<?php echo'post.php?id='.$resClasiPag['0']['id'].'' ?>" class="more">Ir a la Nota<span class="icon-text">&#9656;</span></a>
													</span>
												</div>
											</div>

											<div class="article-big">
												<div class="article-photo">
													<a href="<?php echo'post.php?id='.$resClasiPag['1']['id'].'' ?>" class="hover-effect"><img src="imagesnotas/<?php echo $resClasiPag['1']['imagen'];  ?>" alt="" width="210" height="147" /></a>
												</div>
												<div class="article-content">
													<h2><a href="<?php echo'post.php?id='.$resClasiPag['1']['id'].'' ?>"><?php echo $resClasiPag['1']['titulo'];  ?></a></h2>
													<span class="meta">
														<span class="<?php echo $resClasiPag['1']['ciudad']; ?>"></span>
														
													</span>
													<p><?php echo $resClasiPag['1']['parrafo'];  ?></p>
													<span class="meta">
														<a href="<?php echo'post.php?id='.$resClasiPag['1']['id'].'' ?>" class="more">Ir a la Nota<span class="icon-text">&#9656;</span></a>
													</span>
												</div>
											</div>

											<div class="article-big">
												<div class="article-photo">
													<a href="<?php echo'post.php?id='.$resClasiPag['2']['id'].'' ?>" class="hover-effect"><img src="imagesnotas/<?php echo $resClasiPag['2']['imagen'];  ?>" alt="" width="210" height="147" /></a>
												</div>
												<div class="article-content">
													<h2><a href="<?php echo'post.php?id='.$resClasiPag['2']['id'].'' ?>"><?php echo $resClasiPag['2']['titulo'];  ?></a></h2>
													<span class="meta">
														<span class="<?php echo $resClasiPag['2']['ciudad']; ?>"></span>
														
													</span>
													<p><?php echo $resClasiPag['2']['parrafo'];  ?></p>
													<span class="meta">
														<a href="<?php echo'post.php?id='.$resClasiPag['2']['id'].'' ?>" class="more">Ir a la Nota<span class="icon-text">&#9656;</span></a>
													</span>
												</div>
											</div>

											<div class="article-big">
												<div class="article-photo">
													<a href="<?php echo'post.php?id='.$resClasiPag['3']['id'].'' ?>" class="hover-effect"><img src="imagesnotas/<?php echo $resClasiPag['3']['imagen'];  ?>" alt="" width="210" height="147" /></a>
												</div>
												<div class="article-content">
													<h2><a href="<?php echo'post.php?id='.$resClasiPag['3']['id'].'' ?>"><?php echo $resClasiPag['3']['titulo'];  ?></a></h2>
													<span class="meta">
														<span class="<?php echo $resClasiPag['3']['ciudad']; ?>"></span>
														
													</span>
													<p><?php echo $resClasiPag['3']['parrafo'];  ?></p>
													<span class="meta">
														<a href="<?php echo'post.php?id='.$resClasiPag['3']['id'].'' ?>" class="more">Ir a la Nota<span class="icon-text">&#9656;</span></a>
													</span>
												</div>
											</div>

											<div class="article-big">
												<div class="article-photo">
													<a href="<?php echo'post.php?id='.$resClasiPag['4']['id'].'' ?>" class="hover-effect"><img src="imagesnotas/<?php echo $resClasiPag['4']['imagen'];  ?>" alt="" width="210" height="147" /></a>
												</div>
												<div class="article-content">
													<h2><a href="<?php echo'post.php?id='.$resClasiPag['4']['id'].'' ?>"><?php echo $resClasiPag['4']['titulo'];  ?></a></h2>
													<span class="meta">
														<span class="<?php echo $resClasiPag['4']['ciudad']; ?>"></span>
														
													</span>
													<p><?php echo $resClasiPag['4']['parrafo'];  ?></p>
													<span class="meta">
														<a href="<?php echo'post.php?id='.$resClasiPag['4']['id'].'' ?>" class="more">Ir a la Nota<span class="icon-text">&#9656;</span></a>
													</span>
												</div>
											</div>

											<div class="article-big">
												<div class="article-photo">
													<a href="<?php echo'post.php?id='.$resClasiPag['5']['id'].'' ?>" class="hover-effect"><img src="imagesnotas/<?php echo $resClasiPag['5']['imagen'];  ?>" alt="" width="210" height="147" /></a>
												</div>
												<div class="article-content">
													<h2><a href="<?php echo'post.php?id='.$resClasiPag['5']['id'].'' ?>"><?php echo $resClasiPag['5']['titulo'];  ?></a></h2>
													<span class="meta">
														<span class="<?php echo $resClasiPag['5']['ciudad']; ?>"></span>
														
													</span>
													<p><?php echo $resClasiPag['5']['parrafo'];  ?></p>
													<span class="meta">
														<a href="<?php echo'post.php?id='.$resClasiPag['5']['id'].'' ?>" class="more">Ir a la Nota<span class="icon-text">&#9656;</span></a>
													</span>
												</div>
											</div>

											<div class="article-big">
												<div class="article-photo">
													<a href="<?php echo'post.php?id='.$resClasiPag['6']['id'].'' ?>" class="hover-effect"><img src="imagesnotas/<?php echo $resClasiPag['6']['imagen'];  ?>" alt="" width="210" height="147" /></a>
												</div>
												<div class="article-content">
													<h2><a href="<?php echo'post.php?id='.$resClasiPag['6']['id'].'' ?>"><?php echo $resClasiPag['6']['titulo'];  ?></a></h2>
													<span class="meta">
														<span class="<?php echo $resClasiPag['6']['ciudad']; ?>"></span>
														
													</span>
													<p><?php echo $resClasiPag['6']['parrafo'];  ?></p>
													<span class="meta">
														<a href="<?php echo'post.php?id='.$resClasiPag['4']['id'].'' ?>" class="more">Ir a la Nota<span class="icon-text">&#9656;</span></a>
													</span>
												</div>
											</div>

											
											
											<div class="pagination">
												<a href="#" id="prev" class="prev page-numbers"><span class="icon-text left">&#9666;</span>Anterior</a>
												<a href="<?php echo'?class='.$_GET['class'].'&pag=1' ;  ?>" class="page-numbers">1</a>
												<a href="<?php echo'?class='.$_GET['class'].'&pag=2' ;  ?>" class="page-numbers">2</a>
												<a href="<?php echo'?class='.$_GET['class'].'&pag=3' ;  ?>" class="page-numbers">3</a>
												<a href="<?php echo'?class='.$_GET['class'].'&pag=4' ;  ?>" class="page-numbers">4</a>
												<a href="<?php echo'?class='.$_GET['class'].'&pag=5' ;  ?>" class="page-numbers">5</a>
												<a href="<?php echo'?class='.$_GET['class'].'&pag=6' ;  ?>" class="page-numbers">6</a>
												<a href="#" id="next" class="next page-numbers">Siguente<span class="icon-text right">&#9656;</span></a>
											</div>

										</div>
									</div>

									<!-- END .content-block -->
								</div>


								<!-- BEGIN .content-block -->
								<div class="content-block right cat-block">
									<?php include('gob.php');?>
									
									<!--<div class="block">
										<h2 class="list-title">U.S. Government Shutdown</h2>
										<ul class="article-list">
											<li><a href="post.php.html">Solet percipit euod tractatos percipit euod tractatos</a><a href="post.php.html#comments" class="h-comment">32</a><span class="meta-date">7.Oct</span></li>
											<li><a href="post.php.html">Ei sonet atomorum meiquo singulis invenire nesit</a><a href="post.php.html#comments" class="h-comment">84</a><span class="meta-date">7.Oct</span></li>
											<li><a href="post.php.html">Lus eleifend hom pertinacia hom pertinacia</a><a href="post.php.html#comments" class="h-comment">72</a><span class="meta-date">6.Oct</span></li>
											<li><a href="post.php.html">Pri viderer recteque exp inimicusis verear minimum vim</a><a href="post.php.html#comments" class="h-comment">136</a><span class="meta-date">6.Oct</span></li>
											<li><a href="post.php.html">Ocurr comprehensam recteq comprehensam recteq</a><a href="post.php.html#comments" class="h-comment">8</a><span class="meta-date">6.Oct</span></li>
											<li><a href="post.php.html">Ut oratio viderer evertim</a><a href="post.php.html#comments" class="h-comment">92</a><span class="meta-date">5.Oct</span></li>
										</ul>
										<a href="blog.html" class="more">Read More</a>
									</div>-->
									<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
									<!-- 300 x 600 CategoriaInferiorDerecho -->
									<ins class="adsbygoogle"
									style="display:inline-block;width:300px;height:600px"
									data-ad-client="ca-pub-2126345999915909"
									data-ad-slot="4349488677"></ins>
									<script>
										(adsbygoogle = window.adsbygoogle || []).push({});
									</script>
									<?php //include('cardinales.php'); ?>
									<!--<div class="block">
										<h2 class="list-title" style="color: #c42b20;border-bottom: 2px solid #c42b20;">Entertainment News</h2>
										<ul class="article-list">
											<li><a href="post.php.html">Solet percipit euod tractatos percipit euod tractatos</a><a href="post.php.html#comments" class="h-comment">32</a><span class="meta-date">7.Oct</span></li>
											<li><a href="post.php.html">Ei sonet atomorum meiquo singulis invenire nesit</a><a href="post.php.html#comments" class="h-comment">84</a><span class="meta-date">7.Oct</span></li>
											<li><a href="post.php.html">Lus eleifend hom pertinacia hom pertinacia</a><a href="post.php.html#comments" class="h-comment">72</a><span class="meta-date">6.Oct</span></li>
											<li><a href="post.php.html">Pri viderer recteque exp inimicusis verear minimum vim</a><a href="post.php.html#comments" class="h-comment">136</a><span class="meta-date">6.Oct</span></li>
											<li><a href="post.php.html">Ocurr comprehensam recteq comprehensam recteq</a><a href="post.php.html#comments" class="h-comment">8</a><span class="meta-date">6.Oct</span></li>
											<li><a href="post.php.html">Ut oratio viderer evertim</a><a href="post.php.html#comments" class="h-comment">92</a><span class="meta-date">5.Oct</span></li>
											<li><a href="post.php.html">Solet percipit euod tractatos percipit euod tractatos</a><a href="post.php.html#comments" class="h-comment">32</a><span class="meta-date">7.Oct</span></li>
											<li><a href="post.php.html">Ei sonet atomorum meiquo singulis invenire nesit</a><a href="post.php.html#comments" class="h-comment">84</a><span class="meta-date">7.Oct</span></li>
										</ul>
										<a href="blog.html" class="more">Read More</a>
									</div>-->
									
									<!--<div class="block">
										<div class="banner">
											<a href="http://www.facebook.com/PresidenciaCamargo" target="_blank"><img src="images/camargo200.jpg" alt="Presidencia Camargo" /></a>
											<span class="icon-text">&#9652;</span>Presidencia Camargo<span class="icon-text">&#9652;</span></a>
										</div>
									</div>-->
									<?php //include('instantecat.php');?>
									
								<!--	<div class="block">
										<h2 class="list-title" style="color: #dd8229;border-bottom: 2px solid #dd8229;">Travel News</h2>
										<ul class="article-block">
											<li>
												<div class="article-photo">
													<a href="post.php.html" class="hover-effect"><img src="images/photos/image-1.jpg" alt="" /></a>
												</div>
												<div class="article-content">
													<h4><a href="post.php.html">Debitis minimum vituperata mei no adipiscing</a></h4>
													<span class="meta">
														<a href="blog.html"><span class="icon-text">&#128340;</span>11:20, 7.Oct 2013</a>
													</span>
												</div>
											</li>
											<li>
												<div class="article-photo">
													<a href="post.php.html" class="hover-effect"><img src="images/photos/image-2.jpg" alt="" /></a>
												</div>
												<div class="article-content">
													<h4><a href="post.php.html">Nec option veritus ullamcorper quaestio</a><a href="post.php.html#comments" class="h-comment">74</a></h4>
													<span class="meta">
														<a href="blog.html"><span class="icon-text">&#128340;</span>11:20, 7.Oct 2013</a>
													</span>
												</div>
											</li>
											<li>
												<div class="article-photo">
													<a href="post.php.html" class="hover-effect"><img src="images/photos/image-3.jpg" alt="" /></a>
												</div>
												<div class="article-content">
													<h4><a href="post.php.html">Ea fugit appareat quaestio delectus pericula</a><a href="post.php.html#comments" class="h-comment">39</a></h4>
													<span class="meta">
														<a href="blog.html"><span class="icon-text">&#128340;</span>11:20, 7.Oct 2013</a>
													</span>
												</div>
											</li>
											<li>
												<div class="article-photo">
													<a href="post.php.html" class="hover-effect"><img src="images/photos/image-4.jpg" alt="" /></a>
												</div>
												<div class="article-content">
													<h4><a href="post.php.html">Ex cibo ullum nostrum per quo cu utamur fabulas</a><a href="post.php.html#comments" class="h-comment">99</a></h4>
													<span class="meta">
														<a href="blog.html"><span class="icon-text">&#128340;</span>11:20, 7.Oct 2013</a>
													</span>
												</div>
											</li>
											<li>
												<div class="article-photo">
													<a href="post.php.html" class="hover-effect"><img src="images/photos/image-5.jpg" alt="" /></a>
												</div>
												<div class="article-content">
													<h4><a href="post.php.html">Debitis minimum vituperata mei no intellegam</a></h4>
													<span class="meta">
														<a href="blog.html"><span class="icon-text">&#128340;</span>11:20, 7.Oct 2013</a>
													</span>
												</div>
											</li>
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
							
							<!-- BEGIN .widget -->
							<div class="widget">
								<!--<a href="http://www.facebook.com/PresidenciaCamargo" target="_blank"><img src="images/camargo300.jpg" alt="" /></a>
								<span class="icon-text">&#9652;</span>Presidencia Camargo<span class="icon-text">&#9652;</span></a>
								<!-- END .widget -->
							</div>
							
							<?php include('masleido.php');?>
							
							<!-- BEGIN .widget -->
							<div class="block">
								<div class="featured-block">
                                           <!-- <div class="article-content">
                                                <h3><a href="post.html">helloworld</a><a href="post.html#comments" class="h-comment">43</a></h3>
                                                <span class="meta">
                                                    <a href="blog.html"><span class="icon-text">&#128340; </span>11:20, 7.Oct 2013</a>
                                                </span>
                                            </div>-->
                                            <h2><center> <?php echo $resVideoPortada['0']['titulo'];  ?></center></h2>
                                            <div class="video-container">
                                            	<?php echo $resVideoPortada['0']['video'];?>
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <!-- END .main-sidebar -->
                                </div>

                                <div class="clear-float"></div>

                            </div>
                            
                            <!-- END .wrapper -->
                        </div>
                        
                        <!-- BEGIN .content -->
                    </div>
                    
                    <?php include('footer.php');?>