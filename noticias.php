<?php 
require_once("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
    <?php require_once('head.php'); ?>
    <body class="homepage">
        <script language="JavaScript" type="text/javascript">
            function click(){
            if(event.button==2){
            alert('Esta acción no está permitida');
            }
            }
            document.onmousedown=click
            //-->
        </script>
        <div id="fb-root"></div>
            <script>
                (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.7";
                fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>
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
                            &nbsp;&nbsp;&nbsp;Consejo comunal<a class="navbar-brand" href="index.php"><img src="images/logo.png" width="75" height="75"></a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Santa Inés"
                        </div>
                        
                        <div class="collapse navbar-collapse navbar-right">
                            <ul class="nav navbar-nav">
                                <li><a href="index.php">Inicio</a></li>
                                <li><a href="nosotros.php">Nosotros</a></li>                        
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
                <div class="blog">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="blog-item">
                                <div class="row">
                                    <?php
                                        include("conexion.php");
                                        $re=mysqli_query($con, "SELECT FCHA_NOTICIA, TITULO_NOTICIA, DESCRIPC_NOTICIA, IMAGEN FROM noticias_web");
                                        while ($f=mysqli_fetch_array($re)) {
                                    ?>
                                    <div class="col-xs-12 col-sm-2 text-center">
                                        <div class="entry-meta">
                                            <span id="publish_date"><?php echo $f['FCHA_NOTICIA'];?></span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-10 blog-content">
                                        <?php echo "<img class=\"img-responsive img-blog\" src=\""."imagenes_noticias/".$f['IMAGEN']."\" width=\"300\" \" height=\"300\" alt=\"\">";?>
                                        <h2><a href="blog-item.html"><?php echo $f['TITULO_NOTICIA'];?></a></h2>
                                        <h3><?php echo $f['DESCRIPC_NOTICIA'];?></h3>
                                    </div>
                                    <?php
                                        }
                                    ?>
                                </div>    
                            </div><!--/.blog-item-->
                        </div>
                        <div class="col-md-4">
                            <aside>                   
                                <!---Aqui se coloca en twitter-->
                                <a class="twitter-timeline"  href="https://twitter.com/hashtag/SomosElCanalDeLaPatria" data-widget-id="788922454265696256">Tweets sobre #SomosElCanalDeLaPatria</a>
                                <script>
                                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
                                </script>
                            </aside>
                        </div>
                        <div class="col-md-4">
                            <iframe src="//widgets-code.websta.me/w/9b689ccc1546?ck=MjAxNi0xMS0xM1QwNTo1MDowNC4wMDBa" allowtransparency="true" frameborder="0" scrolling="no" style="border:none;overflow:auto;height:460px;width:295px;"></iframe> <!-- WEBSTA WIDGETS - widgets.websta.me -->       
                            <style>.ig-b- { display: inline-block; }
                                .ig-b- img { visibility: hidden; }
                                .ig-b-:hover { background-position: 0 -60px; } .ig-b-:active { background-position: 0 -120px; }
                                .ig-b-v-24 { width: 137px; height: 24px; background: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24.png) no-repeat 0 0; }
                                @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
                                .ig-b-v-24 { background-image: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24@2x.png); background-size: 160px 178px; } }
                            </style>
                            <a href="https://www.instagram.com/ccsantaines/?ref=badge" class="ig-b- ig-b-v-24"><img src="//badges.instagram.com/static/images/ig-badge-view-24.png" alt="Instagram" /></a>
                        </div>
                    </div>
                </div>
                <aside class="col-md-12">
                        <div class="fb-comments" data-href="http://localhost/proyecto3/noticias.php" data-numposts="6"></div>
                </aside>
                        <!--
                        <ul class="pagination pagination-lg">
                            <li><a href="#"><i class="fa fa-long-arrow-left"></i>Página Anterior</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>                        
                            <li><a href="#">Siguiente Página<i class="fa fa-long-arrow-right"></i></a></li>
                        </ul>--><!--/.pagination-->
                    </div><!--/.col-md-8-->
                </div><!--/.row-->
            </section><!--/#blog-->
        </div>
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