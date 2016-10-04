<?php 
require_once("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
  <?php require_once('head.php'); ?>
  <body class="homepage">   
<header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/1.png" class="img-rounded"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="nosotros.php">Nosotros</a></li>
                        <li><a href="servicios.php">Servicios</a></li>
                        <li><a href="portafolio.php">Portafolio</a></li>
                        <li class="active"><a href="noticias.php">Noticias</a></li> 
                        <li><a href="contacto.php">Contáctenos</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->
	<section id="blog" class="container">
        <div class="center">
            <h2>Noticias</h2>
            <p class="lead"></p>
        </div>
        <?php
            require_once("conexion.php");
            $re=mysql_query("SELECT FCHA_NOTICIA, TITULO_NOTICIA, DESCRIPC_NOTICIA, IMAGEN FROM noticias_web")or die(mysql_error());
            while ($f=mysql_fetch_array($re)) {
        ?>
        <div class="blog">
            <div class="row">
                 <div class="col-md-8">
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 text-center">
                                <div class="entry-meta">
                                    <span id="publish_date"><?php echo $f['FCHA_NOTICIA'];?></span>
                                </div>
                            </div>
                                
                            <div class="col-xs-12 col-sm-10 blog-content">
                                <?php echo "<img class=\"img-responsive img-blog\" src=\""."imagenes_noticias/".$f['IMAGEN']."\" width=\"100%\" alt=\"\">";?>
                                <h2><a href="blog-item.html"><?php echo $f['TITULO_NOTICIA'];?></a></h2>
                                <h3><?php echo $f['DESCRIPC_NOTICIA'];?></h3>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
        <?php
            }
        ?>          
                       <ul class="pagination pagination-lg">
                        <li><a href="#"><i class="fa fa-long-arrow-left"></i>Página Anterior</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>                        
                        <li><a href="#">Siguiente Página<i class="fa fa-long-arrow-right"></i></a></li>
                    </ul><!--/.pagination-->
                </div><!--/.col-md-8-->

                <aside class="col-md-4">                   
                    <!---Aqui se coloca en twitter-->
                    <a class="twitter-timeline"  href="https://twitter.com/search" data-widget-id="755550151897452546">Tweets sobre </a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          
    			</aside>  
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->
	
	
	 <?php 
     require_once('footer.php'); ?>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>   
    <script src="js/wow.min.js"></script>
	<script src="js/main.js"></script>
  </body>
</html>