		<?php require_once('head.php');


		$contador = $crud->contadorOpinion($_GET['id']);
		$resPost = $crud->findIdOpinion($_GET['id']);
		$title = $resPost['0']['titulo'];
		echo"<title>".$title."</title>";
		?>
		<div class="main-content">

			<div class="full-width">
				
				<div class="article-title">
					

					<h6><?php echo $resPost['0']['titulo']; ?></h6>
				<div class="fb-share-button" data-href="http://deliciashoy.com.mx/postedit.php?id=<?php echo$_GET['id']; ?>" data-layout="button"></div>					
				</div>
			</div>

			<!-- BEGIN .main-page -->
			<div class="main-page left">

				<!-- BEGIN .double-block -->
				<div class="double-block">

					
					<!-- BEGIN .content-block -->
					<div class="content-block main right">
						
						<div class="block">
							<div class="block-content">
								
								<p><span class="hover-effect"><img src="imagesnotas/<?php echo $resPost['0']['imagenautor']; ?>" alt="" /></span></p>
								
								<div class="shortcode-content">

												<!-- <p><?php echo $resPost['0']['parrafo'];  ?></p>
												<img src="imagesnotas/<?php echo $resPost['0']['imagen2']; ?>" />

												<p><?php echo $resPost['0']['parrafo2'];  ?></p>
												<img src="imagesnotas/<?php echo $resPost['0']['imagen3']; ?>" />

												<p><?php echo $resPost['0']['parrafo3'];  ?></p>
												<img src="imagesnotas/<?php echo $resPost['0']['imagen4']; ?>" />

												<p><?php echo $resPost['0']['parrafo4'];  ?></p>
												<img src="imagesnotas/<?php echo $resPost['0']['imagen5']; ?>" /> -->

												<?php 
												
													echo '<p>'.$resPost['0']['cuerpo'].'</p><br>
													<h2>'.$resPost['0']['autor'].'</h2>';

											
											
											
												?>

												

												

												

												
													<!--<div class="share-block right">
														<div>
															<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/"></div>
															<div class="share-article left">
																<span>Redes Sociales</span>
																<strong>Comparte Esta Nota</strong>
															</div>

															<div class="left">
																<a href="#" class="custom-soc icon-text">&#62217;</a>
																<a href="#" class="custom-soc icon-text">&#62220;</a>
																<a href="#" class="custom-soc icon-text">&#62223;</a>
																<a href="#" class="custom-soc icon-text">&#62226;</a>
																<a href="#" class="custom-soc icon-text">&#62232;</a>
															</div>
															<div class="clear-float"></div>
														</div>
														<div>
															<a href="#" class="small-button"><span class="icon-text">&#59158;</span>&nbsp;&nbsp;Imprimir Nota</a>
															<a href="#" class="small-button"><span class="icon-text">&#9993;</span>&nbsp;&nbsp;Enviar Por Correo</a>
														</div>
													</div>-->
													
													

												</div>

											</div>

										</div>


										<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
										<!-- Responsivo PostHorizontalInferior -->
										<ins class="adsbygoogle"
										style="display:block"
										data-ad-client="ca-pub-2126345999915909"
										data-ad-slot="4747245472"
										data-ad-format="auto"></ins>
										<script>
										(adsbygoogle = window.adsbygoogle || []).push({});
										</script>
										<!-- END .content-block -->

										<div class="fb-comments" data-href="http://deliciashoy.com.mx/postedit.php?id=<?php echo$resPost['0']['id'];?>" data-numposts="7" data-colorscheme="light" data-width="100%"></div>
									</div>
									<!-- BEGIN .content-block -->

									<div class="content-block left">
										

										<?php include_once('instante.php'); ?>
										
									<!--<div class="block">
										<h2 class="list-title" style="color: #c42b20;border-bottom: 2px solid #c42b20;">Entertainment News</h2>
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
									</div>-->
									
									<!--<div class="block">
										<div class="banner">
											<a href="#" target="_blank"><img src="images/no-banner-200x200.jpg" alt="" /></a>
											<a href="contact-us.html" class="ad-link"><span class="icon-text">&#9652;</span>Advertisement<span class="icon-text">&#9652;</span></a>
										</div>
									</div>-->

									<?php include_once('masleido.php'); ?>
									

									<!-- <div class="block">
										<h2 class="list-title" style="color: #dd8229;border-bottom: 2px solid #dd8229;">Travel News</h2>
										<ul class="article-block">
											<li>
												<div class="article-photo">
													<a href="post.html" class="hover-effect"><img src="images/photos/image-1.jpg" alt="" /></a>
												</div>
												<div class="article-content">
													<h4><a href="post.html">Debitis minimum vituperata mei no adipiscing</a><a href="post.html#comments" class="h-comment">201</a></h4>
													<span class="meta">
														<a href="blog.html"><span class="icon-text">&#128340;</span>11:20, 7.Oct 2013</a>
													</span>
												</div>
											</li>
											<li>
												<div class="article-photo">
													<a href="post.html" class="hover-effect"><img src="images/photos/image-2.jpg" alt="" /></a>
												</div>
												<div class="article-content">
													<h4><a href="post.html">Nec option veritus ullamcorper quaestio</a><a href="post.html#comments" class="h-comment">74</a></h4>
													<span class="meta">
														<a href="blog.html"><span class="icon-text">&#128340;</span>11:20, 7.Oct 2013</a>
													</span>
												</div>
											</li>
											<li>
												<div class="article-photo">
													<a href="post.html" class="hover-effect"><img src="images/photos/image-3.jpg" alt="" /></a>
												</div>
												<div class="article-content">
													<h4><a href="post.html">Ea fugit appareat quaestio delectus pericula</a><a href="post.html#comments" class="h-comment">39</a></h4>
													<span class="meta">
														<a href="blog.html"><span class="icon-text">&#128340;</span>11:20, 7.Oct 2013</a>
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
														<a href="blog.html"><span class="icon-text">&#128340;</span>11:20, 7.Oct 2013</a>
													</span>
												</div>
											</li>
											<li>
												<div class="article-photo">
													<a href="post.html" class="hover-effect"><img src="images/photos/image-5.jpg" alt="" /></a>
												</div>
												<div class="article-content">
													<h4><a href="post.html">Debitis minimum vituperata mei no intellegam</a><a href="post.html#comments" class="h-comment">201</a></h4>
													<span class="meta">
														<a href="blog.html"><span class="icon-text">&#128340;</span>11:20, 7.Oct 2013</a>
													</span>
												</div>
											</li>
										</ul>
										<a href="blog.html" class="more">Read More</a>
									</div>
								-->
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
								<!--<a href="#" target="_blank"><img src="images/no-banner-300x250.jpg" alt="" /></a>
								<a href="contact-us.html" class="ad-link"><span class="icon-text">&#9652;</span>Advertisement<span class="icon-text">&#9652;</span></a>-->
								<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
								<!-- 300x250PostCuadradoDerecha -->
								<ins class="adsbygoogle"
								style="display:inline-block;width:300px;height:250px"
								data-ad-client="ca-pub-2126345999915909"
								data-ad-slot="9445777074"></ins>
								<script>
								(adsbygoogle = window.adsbygoogle || []).push({});
								</script>
								<!-- END .widget -->
                                <!--<a href="http://www.festivalinternacionalchihuahua.com/" ><img src="images/festival2015.gif" alt="Festival Internacional Chihuahua 2015" /></a>-->

							</div>
							
							<!-- BEGIN .widget -->
							<!--<div class="widget">
								<h3>Socialize</h3>
								<div class="widget-social">
									<div class="social-bar">
										<a href="#" class="social-icon"><i class="number">1.2m</i><span class="facebook">Facebook</span></a>
										<a href="#" class="social-icon"><i class="number">2.6k</i><span class="twitter">Twitter</span></a>
										<a href="#" class="social-icon"><i class="number">1.4k</i><span class="google">Google+</span></a>
										<a href="#" class="social-icon"><i class="number">823</i><span class="linkedin">Linkedin</span></a>
									</div>
									<p>Suscipit partiendo comprehensam ne eos mel, nam omnis maiestatis no. Eum at reformidans ius, cu.</p>
								</div>
							<!-- END .widget 
						</div>-->
						
						<!-- BEGIN .widget -->
						<?php include_once('sorprendete.php');?>
						
						
						<!-- BEGIN .widget -->
						

						<!-- END .main-sidebar -->
					</div>

					<div class="clear-float"></div>

				</div>
				
				<!-- END .wrapper -->
			</div>
			
			<!-- BEGIN .content -->
		</div>
		
		<?php include_once('footer.php'); ?>