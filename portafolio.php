<!DOCTYPE html>
<html lang="en">
   <?php 
     require_once('head.php'); ?>

  <body class="homepage">
    <script language="JavaScript" type="text/javascript">
        document.oncontextmenu = function(){return false}
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
                        <li class="active"><a href="portafolio.php">Portafolio</a></li>
                        <li><a href="noticias.php">Noticias</a></li> 
                        <li><a href="contacto.php">Contáctenos</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->
		
	<section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>Portafolio</h2>
               <p class="lead">Aquí podrás encontrar parte del trabajo realizado por el <br>Consejo Comunal "Santa Inés"</p>
            </div>
        

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">Todo</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Operativos</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".html">Actividades en la Comunidad</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".wordpress">Proyectos</a></li>
            </ul><!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items">
                     <div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/cc9.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"></a></h3>
                                    <p>Recuperación de la grama Parque "Alí Primera"</p>
                                    <a class="preVer" href="images/portfolio/full/cc9.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/cc2.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Mercal</a></h3>
                                    <p>Realizado en la 2da calle</p>
                                    <a class="preVer" href="images/portfolio/full/cc2.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/cc3.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Recuperación</a></h3>
                                    <p>Parque "Alí Primera"</p>
                                    <a class="preVer" href="images/portfolio/full/cc3.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                                </div> 
                            </div>
                        </div>        
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/cc5.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"></a></h3>
                                    <p>Rehabilitación del Muro</p>
                                    <a class="preVer" href="images/portfolio/full/cc5.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                                </div> 
                            </div>
                        </div>           
                    </div><!--/.portfolio-item-->
          
                    <div class="portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/cc6.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"></a></h3>
                                    <p>Rehabilitación del Muro</p>
                                    <a class="preVer" href="images/portfolio/full/cc6.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                                </div> 
                            </div>
                        </div>      
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/cc7.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"></a></h3>
                                    <p>Rehabilitación Callejon San Luis</p>
                                    <a class="preVer" href="images/portfolio/full/cc7.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/cc8.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"></a></h3>
                                    <p>Recuperación de la Grama Parque "Alí Primera"</p>
                                    <a class="preVer" href="images/portfolio/full/cc8.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                   
                    <div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/cc4.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Mercal</a></h3>
                                    <p>Realizado en la 2da calle</p>
                                    <a class="preVer" href="images/portfolio/full/cc4.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->


                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->
	
	
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