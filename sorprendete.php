			

<?php require_once('head.php');

$resSorp = $crud->selectDesc("clasificacion","sorprendete","3");
 
?>
			<div class="block">
										<h2 class="list-title" style="color: #951e9a;border-bottom: 2px solid #951e9a;">Sorprendete!</h2>
										<ul class="article-block">
		<li>
			<div class="article-photo">
				<a href="<?php echo'post.php?id='.$resSorp['0']['id'].'' ?>" ><img src="imagesnotas/<?php echo $resSorp['0']['imagen'];  ?>" width="250" height="125" alt="" /></a>
			</div>
			<div class="article-content">
				<h4><a href="<?php echo'post.php?id='.$resSorp['0']['id'].'' ?>"><?php echo $resSorp['0']['titulo'];  ?></a></h4>
				<span class="meta">
					<!--<a href="blog.html"><span class="icon-text">&#128340;</span>11:20, 7.Oct 2013</a>-->
				</span>
			</div>
		</li>

		<li>
			<div class="article-photo">
				<a href="<?php echo'post.php?id='.$resSorp['1']['id'].'' ?>" class="hover-effect"><img src="imagesnotas/<?php echo $resSorp['1']['imagen'];  ?>" width="250" height="125" alt="" /></a>
			</div>
			<div class="article-content">
				<h4><a href="<?php echo'post.php?id='.$resSorp['1']['id'].'' ?>"><?php echo $resSorp['1']['titulo'];  ?></a></h4>
				<span class="meta">
					<!--<a href="blog.html"><span class="icon-text">&#128340;</span>11:20, 7.Oct 2013</a>-->
				</span>
			</div>
		</li>

		<li>
			<div class="article-photo">
				<a href="<?php echo'post.php?id='.$resSorp['2']['id'].'' ?>" class="hover-effect"><img src="imagesnotas/<?php echo $resSorp['2']['imagen'];  ?>" width="250" height="125" alt="" /></a>
			</div>
			<div class="article-content">
				<h4><a href="<?php echo'post.php?id='.$resSorp['2']['id'].'' ?>"><?php echo $resSorp['2']['titulo'];  ?></a></h4>
				<span class="meta">
					<!--	<a href="blog.html"><span class="icon-text">&#128340;</span>11:20, 7.Oct 2013</a>-->
				</span>
			</div>
		</li>
		


	</ul>
										<!--<a href="blog.html" class="more">Read More</a>-->
									</div>