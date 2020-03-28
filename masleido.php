 							

<?php

require_once ("head.php");
$resVis = $crud->findmMasVisitas();

?>

   					 <div class="widget">
								<h3>Lo mas leido</h3>
								<div class="widget-articles">
									<ul>
										<li>
											
											<div class="article-photo">
													<a href="<?php echo'post.php?id='.$resVis['0']['id'].'' ?>"><img src="imagesnotas/<?php echo $resVis['0']['imagen'];  ?>" width="75" heigth="42"  /></a>
												</div>
												<div class="article-content">
													<h8><a href="<?php echo'post.php?id='.$resVis['0']['id'].'' ?>"><?php echo $resVis['0']['titulo'];  ?></a></h8>
													<span class="meta">
														<span class="icon-text"><!--&#128340;--></span><?php $crud->getHour($resVis['0']['date']);  ?>
													</span>
												</div>

										</li>
										<li>
											
											<div class="article-photo">
													<a href="<?php echo'post.php?id='.$resVis['1']['id'].'' ?>"><img src="imagesnotas/<?php echo $resVis['1']['imagen'];  ?>" width="75" heigth="42"  /></a>
												</div>
												<div class="article-content">
													<h8><a href="<?php echo'post.php?id='.$resVis['1']['id'].'' ?>"><?php echo $resVis['1']['titulo'];  ?></a></h8>
													<span class="meta">
														<span class="icon-text"></span><?php $crud->getHour($resVis['1']['date']);  ?>
													</span>
												</div>

										</li>
										<li>
											
											<div class="article-photo">
													<a href="<?php echo'post.php?id='.$resVis['2']['id'].'' ?>"><img src="imagesnotas/<?php echo $resVis['2']['imagen'];  ?>" width="75" heigth="42"  /></a>
												</div>
												<div class="article-content">
													<h8><a href="<?php echo'post.php?id='.$resVis['2']['id'].'' ?>"><?php echo $resVis['2']['titulo'];  ?></a></h8>
													<span class="meta">
														<span class="icon-text"></span><?php $crud->getHour($resVis['2']['date']);  ?>
													</span>
												</div>

										</li>
										<li>
											
											<div class="article-photo">
													<a href="<?php echo'post.php?id='.$resVis['3']['id'].'' ?>"><img src="imagesnotas/<?php echo $resVis['3']['imagen'];  ?>" width="75" heigth="42"  /></a>
												</div>
												<div class="article-content">
													<h8><a href="<?php echo'post.php?id='.$resVis['3']['id'].'' ?>"><?php echo $resVis['3']['titulo'];  ?></a></h8>
													<span class="meta">
														<span class="icon-text"></span><?php $crud->getHour($resVis['3']['date']);  ?>
													</span>
												</div>

										</li>
										<li>
											
											<div class="article-photo">
													<a href="<?php echo'post.php?id='.$resVis['4']['id'].'' ?>"><img src="imagesnotas/<?php echo $resVis['4']['imagen'];  ?>" width="75" heigth="42"  /></a>
												</div>
												<div class="article-content">
													<h8><a href="<?php echo'post.php?id='.$resVis['4']['id'].'' ?>"><?php echo $resVis['4']['titulo'];  ?></a></h8>
													<span class="meta">
														<span class="icon-text"></span><?php $crud->getHour($resVis['4']['date']);  ?>
													</span>
												</div>

										</li>

										<li>
											
											<div class="article-photo">
													<a href="<?php echo'post.php?id='.$resVis['5']['id'].'' ?>"><img src="imagesnotas/<?php echo $resVis['5']['imagen'];  ?>" width="75" heigth="42"  /></a>
												</div>
												<div class="article-content">
													<h8><a href="<?php echo'post.php?id='.$resVis['5']['id'].'' ?>"><?php echo $resVis['5']['titulo'];  ?></a></h8>
													<span class="meta">
														<span class="icon-text"></span><?php $crud->getHour($resVis['5']['date']);  ?>
													</span>
												</div>

										</li>


										
										
									</ul>
								</div>
							<!-- END .widget -->
							</div>