<?php 
require_once('head.php');
$resCiencia = $crud->selectDesc("clasificacion","ciencia","2");
$resTec = $crud->selectDesc("clasificacion","tecnologia","2");

?>
<div class="block">
	<h2 class="list-title" >Ciencia & Tecnología</h2>
	<ul class="article-block">
		<li>
			<div class="article-photo">
				<a href="<?php echo'post.php?id='.$resTec['0']['id'].'' ;?>" ><img src="imagesnotas/<?php echo $resTec['0']['imagen'];  ?>" width="260" height="125"/></a>
			
			</div>
			<div class="article-content">
				<h4><a href="<?php echo'post.php?id='.$resTec['0']['id'].'' ;?>"><?php echo $resTec['0']['titulo'];  ?></a></h4>
				<span class="meta">
					<!--<a href="blog.html"><span class="icon-text">&#128340;</span>11:20, 7.Oct 2013</a>-->
				</span>
			</div>
		</li>

		<li>
			<div class="article-photo">
				<a href="<?php echo'post.php?id='.$resCiencia['0']['id'].''; ?>" class="hover-effect"><img src="imagesnotas/<?php echo $resCiencia['0']['imagen'];  ?>" width="260" height="125"/></a>
			</div>
			<div class="article-content">
				<h4><a href="<?php echo'post.php?id='.$resCiencia['0']['id'].'';?>"><?php echo $resCiencia['0']['titulo'];  ?></a></h4>
				<span class="meta">
					<!--<a href="blog.html"><span class="icon-text">&#128340;</span>11:20, 7.Oct 2013</a>-->
				</span>
			</div>
		</li>

		<li>
			<div class="article-photo">
				<a href="<?php echo'post.php?id='.$resTec['1']['id'].'' ;?>" class="hover-effect"><img src="imagesnotas/<?php echo $resTec['1']['imagen'];  ?>" width="260" height="125"/></a>
			</div>
			<div class="article-content">
				<h4><a href="<?php echo'post.php?id='.$resTec['1']['id'].'';?>"><?php echo $resTec['1']['titulo'];  ?></a></h4>
				<span class="meta">
				<!--	<a href="blog.html"><span class="icon-text">&#128340;</span>11:20, 7.Oct 2013</a>-->
				</span>
			</div>
		</li>
		<!--<li>
			<div class="article-photo">
				<a href="<?php echo'post.php?id='.$resCiencia['1']['id'].'' ;?>" class="hover-effect"><img src="imagesnotas/<?php echo $resCiencia['1']['imagen'];  ?>" width="260" height="125"/></a>
			</div>
			<div class="article-content">
				<h4><a href="<?php echo'post.php?id='.$resCiencia['1']['id'].'' ;?>"><?php echo $resCiencia['1']['titulo'];  ?></a></h4>
				<span class="meta">
					<!--<a href="blog.html"><span class="icon-text">&#128340;</span>11:20, 7.Oct 2013</a>
				</span>
			</div>
		</li>-->


	</ul>
	<!--<a href="blog.html" class="more">Read More</a>-->
</div>