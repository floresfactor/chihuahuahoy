<?php 

$cardinalesNorte = $crud->getCardinal("norte");
$cardinalesEste = $crud->getCardinal("este");
$cardinalesSur = $crud->getCardinal("sur");
$cardinalesOeste = $crud->getCardinal("oeste");

?>

<div class="block">
    <center><span><img src="images/rose.png" width="130" height="130"></span></center>
    <center><h2 class="list-title" >Puntos Cardinales</h2></center>
    <ul class="article-block">
        <li>
            <div class="article-card">
                <a href="<?php echo "postedit.php?id=".$cardinalesNorte['0']['id'];?>"><img src="images/norte.png" width="55" height="39"/></a>
            </div>
            <div class="article-content">
                <h4 style="font-weight: bold;"><a href="<?php echo "postedit.php?id=".$cardinalesNorte['0']['id'];?>"><?php echo $cardinalesNorte['0']['titulo'] ?></a></h4>
                <span class="meta">
                    <a href="<?php echo"postedit.php?id=".$cardinalesNorte['0']['id']; ?>"><span class="autor"><?php echo $cardinalesNorte['0']['autor'] ?></span></a>
                </span>
            </div>
        </li>
        <li>
            <div class="article-card">
                <a href="<?php echo "postedit.php?id=".$cardinalesEste['0']['id'];?>"><img src="images/este.png" width="55" height="39"/></a>
            </div>
            <div class="article-content">
                <h4 style="font-weight: bold;"><a href="<?php echo "postedit.php?id=".$cardinalesEste['0']['id'];?>"><?php echo $cardinalesEste['0']['titulo'] ?></a></h4>
                <span class="meta">
                    <a href="<?php echo"postedit.php?id=".$cardinalesEste['0']['id']; ?>"><span class="autor"><?php echo $cardinalesEste['0']['autor'] ?></span></a>
                </span>
            </div>
        </li>
        <li>
            <div class="article-card">
                <a href="<?php echo"postedit.php?id=".$cardinalesOeste['0']['id'];?>"><img src="images/oeste.png" width="55" height="39"/></a>
            </div>
            <div class="article-content">
                <h4 style="font-weight: bold;"><a href="<?php echo"postedit.php?id=".$cardinalesOeste['0']['id']; ?>"><?php echo $cardinalesOeste['0']['titulo'] ?></a></h4>
                <span class="meta">
                    <a href="<?php echo"postedit.php?id=".$cardinalesOeste['0']['id']; ?>"><span class="autor"><?php echo $cardinalesOeste['0']['autor'] ?></span></a>

                </span>
            </div>
        </li>
        <li>
            <div class="article-card">
                <a href="<?php echo"postedit.php?id=".$cardinalesSur['0']['id']; ?>"><img src="images/sur.png" width="55" height="39"/></a>
            </div>
            <div class="article-content">
                <h4 style="font-weight: bold;"><a href="<?php echo"postedit.php?id=".$cardinalesSur['0']['id']; ?>"><?php echo $cardinalesSur['0']['titulo'] ?></a></h4>
                <span class="meta">
                    <a href="<?php echo"postedit.php?id=".$cardinalesSur['0']['id']; ?>"><span class="autor"><?php echo $cardinalesSur['0']['autor'] ?></span></a>
                </span>
            </div>
        </li>
    </ul>
    <!--<a href="blog.html" class="more">Read More</a>-->
</div>