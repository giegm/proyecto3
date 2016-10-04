<!DOCTYPE html>
<html lang="en">
   <?php 
     require_once('head.php'); ?>

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
                        <li class="active"><a href="servicios.php">Servicios</a></li>
                        <li><a href="portafolio.php">Portafolio</a></li>
                        <li><a href="noticias.php">Noticias</a></li> 
                        <li><a href="contacto.php">Contáctenos</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->
	
	<section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
                <h2>Misiones</h2>
                <p class="lead">Como una comunidad organizada, la comuna "Explosión del Poder Popular" <br> cuenta con las siguientes misiones</p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/m1.jpg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Madres del Barrio</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/m2.jpg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Barrio Adentro</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/m3.jpg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Hijos de Venezuela</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>  

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/m4.jpg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Amor Mayor Venezuela</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/m5.jpg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Barrio Tricolor</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="images/services/m6.jpg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Revolución Energetica</h3>
                            <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                        </div>
                    </div>
                </div>                                                
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

	
	<section id="feature" class="transparent-bg">
		<div class="container">
			<div class="get-started center wow fadeInDown">
				<h2>Cartas Emitidas por el Consejo Comunal "Santa Inés"</h2>
				
            </div><!--/.get-started-->

          <div class="row">

                <div class="features">
                    <div class="col-md-6 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="skill"><center>
                            <a href="#"><h3 class="bg-primary">Carta de Residencia</h3></a>
                            <a href="#"><h3 class="bg-info">Carta de Postulación</h3></a>
                            <a href="#"><h3 class="bg-danger">Constancia de No poseer empleo</h3></a> </center>                           
                        </div>
                    </div><!--/.col-md-4-->

                      <div class="col-md-6 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="skill"><center>
                            <a href=""><h3 class="bg-primary">Constancia de No poseer vivienda</h3></a> 
                            <a href=""><h3 class="bg-info">Carta de Buena Conducta</h3></a>
                            <a href=""><h3 class="bg-danger">Carta de Concubino</h3></a> </center>
                        </div>
                    </div><!--/.col-md-4-->                      
    
                </div>
         


            </div>

		</div><!--/.container-->
	</section><!--/#feature-->


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