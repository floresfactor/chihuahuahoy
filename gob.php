<?php require_once('head.php');

$resGob = $crud->selectDesc("clasificacion","gobierno","2");
$resIns = $crud->selectDesc("clasificacion","instituciones","2");

?>
<div class="block">
	<h2 class="list-title" >Gobierno</h2>
	<ul class="article-block">
		<li>
			<div class="article-photo">
				<a href="<?php echo'post.php?id='.$resGob['0']['id'].'' ?>" ><img src="imagesnotas/<?php echo $resGob['0']['imagen'];  ?>" width="250" height="125"/></a>
			</div>
			<div class="article-content">
				<h4><a href="<?php echo'post.php?id='.$resGob['0']['id'].'' ?>"><?php echo $resGob['0']['titulo'];  ?></a></h4>
				<span class="meta">
					<!--<a href="blog.html"><span class="icon-text">&#128340;</span>11:20, 7.Oct 2013</a>-->
				</span>
			</div>
		</li>

		<li>
			<div class="article-photo">
				<a href="<?php echo'post.php?id='.$resIns['0']['id'].'' ?>" class="hover-effect"><img src="imagesnotas/<?php echo $resIns['0']['imagen'];  ?>" width="250" height="125" /></a>
			</div>
			<div class="article-content">
				<h4><a href="<?php echo'post.php?id='.$resIns['0']['id'].'' ?>"><?php echo $resIns['0']['titulo'];  ?></a></h4>
				<span class="meta">
					<!--<a href="blog.html"><span class="icon-text">&#128340;</span>11:20, 7.Oct 2013</a>-->
				</span>
			</div>
		</li>

		<li>
			<div class="article-photo">
				<a href="<?php echo'post.php?id='.$resGob['1']['id'].'' ?>" class="hover-effect"><img src="imagesnotas/<?php echo $resGob['1']['imagen'];  ?>" width="250" height="125" /></a>
			</div>
			<div class="article-content">
				<h4><a href="<?php echo'post.php?id='.$resGob['1']['id'].'' ?>"><?php echo $resGob['1']['titulo'];  ?></a></h4>
				<span class="meta">
				<!--	<a href="blog.html"><span class="icon-text">&#128340;</span>11:20, 7.Oct 2013</a>-->
				</span>
			</div>
		</li>
		<!--<li>
			<div class="article-photo">
				<a href="<?php echo'post.php?id='.$resIns['1']['id'].'' ?>" class="hover-effect"><img src="imagesnotas/<?php echo $resIns['1']['imagen'];  ?>" width="250" height="125"/></a>
			</div>
			<div class="article-content">
				<h4><a href="<?php echo'post.php?id='.$resIns['1']['id'].'' ?>"><?php echo $resIns['1']['titulo'];  ?></a></h4>
				<span class="meta">
					<!--<a href="blog.html"><span class="icon-text">&#128340;</span>11:20, 7.Oct 2013</a>
				</span>
			</div>
		</li>-->


	</ul>
	<!--<a href="blog.html" class="more">Read More</a>-->
</div>