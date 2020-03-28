<?php require_once('head.php');

$resDep = $crud->selectDesc("clasificacion","deportes","5");

?>
<div class="block">
	<h2 class="list-title" >Deportes</h2>
	<ul class="article-block">
		<li>
			<div class="article-photo">
				<a href="<?php echo'post.php?id='.$resDep['0']['id'].'' ?>" ><img src="imagesnotas/<?php echo $resDep['0']['imagen'];  ?>" width="250" height="125" alt="" /></a>
			</div>
			<div class="article-content">
				<h4><a href="<?php echo'post.php?id='.$resDep['0']['id'].'' ?>"><?php echo $resDep['0']['titulo'];  ?></a></h4>
				<span class="meta">
					<!--<a href="blog.html"><span class="icon-text">&#128340;</span>11:20, 7.Oct 2013</a>-->
				</span>
			</div>
		</li>
		<li>
			<div class="article-photo">
				<a href="<?php echo'post.php?id='.$resDep['1']['id'].'' ?>" ><img src="imagesnotas/<?php echo $resDep['1']['imagen'];  ?>" width="250" height="125" alt="" /></a>
			</div>
			<div class="article-content">
				<h4><a href="<?php echo'post.php?id='.$resDep['1']['id'].'' ?>"><?php echo $resDep['1']['titulo'];  ?></a></h4>
				<span class="meta">
					<!--<a href="blog.html"><span class="icon-text">&#128340;</span>11:20, 7.Oct 2013</a>-->
				</span>
			</div>
		</li>
		<li>
			<div class="article-photo">
				<a href="<?php echo'post.php?id='.$resDep['2']['id'].'' ?>" ><img src="imagesnotas/<?php echo $resDep['2']['imagen'];  ?>" width="250" height="125" alt="" /></a>
			</div>
			<div class="article-content">
				<h4><a href="<?php echo'post.php?id='.$resDep['2']['id'].'' ?>"><?php echo $resDep['2']['titulo'];  ?></a></h4>
				<span class="meta">
					<!--<a href="blog.html"><span class="icon-text">&#128340;</span>11:20, 7.Oct 2013</a>-->
				</span>
			</div>
		</li>
		<!--<li>
			<div class="article-photo">
				<a href="<?php echo'post.php?id='.$resDep['3']['id'].'' ?>" ><img src="imagesnotas/<?php echo $resDep['3']['imagen'];  ?>" width="250" height="125" alt="" /></a>
			</div>
			<div class="article-content">
				<h4><a href="<?php echo'post.php?id='.$resDep['3']['id'].'' ?>"><?php echo $resDep['3']['titulo'];  ?></a></h4>
				<span class="meta">
					
				</span>
			</div>
		</li>-->
		


	</ul>
	<!--<a href="blog.html" class="more">Read More</a>-->
</div>