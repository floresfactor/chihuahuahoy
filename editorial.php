<?php

require_once('head.php');

$resEditorial = $crud->allDescEditorial();

?>



<div class="widget">
								<h3>Expresión</h3>
								<div class="widget-comments">
									<ul>
										<li>
											<div class="comment-photo">
												<a href="<?php echo'postedit.php?id='.$resEditorial['0']['id'].' ';?>"><span class="hover-effect"><img src="imagesnotas/<?php echo $resEditorial['0']['imagenautor'] ;?>" width="75" height="75" /></span></a>
											</div>
											<div class="comment-content">
												<a href="<?php echo'postedit.php?id='.$resEditorial['0']['id'].' ';?>"><h7 style="font-weight: bold;"><?php echo $resEditorial['0']['titulo']  ?></h7></a>
												<a href="<?php echo'postedit.php?id='.$resEditorial['0']['id'].'';?>"><h3><?php echo $resEditorial['0']['autor']  ?></h3></a>
												
											</div>
										</li>
										
									</ul>
								</div>
							<!-- END .widget -->
							</div>