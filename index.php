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
                        <li class="active"><a href="index.php">Inicio</a></li>
                        <li><a href="nosotros.php">Nosotros</a></li>                      
                        <li><a href="portafolio.php">Portafolio</a></li>
                        <li><a href="noticias.php">Noticias</a></li> 
                        <li><a href="contacto.php">Contáctenos</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->
        <script language="JavaScript" type="text/javascript">
            function click(){
            if(event.button==2){
            alert('Esta acción no está permitida');
            }
            }
            document.onmousedown=click
            //-->
        </script>
	<div class="slider">
        <div class="container">
            <div id="about-slider">
                <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators visible-xs">
                        <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-slider" data-slide-to="1"></li>
                        <li data-target="#carousel-slider" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="images/cc3.jpg" class="img-responsive" alt=""> 
                       </div>
                       <div class="item">
                            <img src="images/cc2.jpg" class="img-responsive" alt=""> 
                       </div> 
                       <div class="item">
                            <img src="images/cc1.jpg" class="img-responsive" alt=""> 
                       </div> 
                    </div>
                    
                    <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                        <i class="fa fa-angle-left"></i> 
                    </a>
                    
                    <a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
                        <i class="fa fa-angle-right"></i> 
                    </a>
                </div> <!--/#carousel-slider-->
            </div><!--/#about-slider-->
        </div>
    </div>

	<section id="feature" >
        <div class="container">
            <div class="row">
                <div class="features">  
                    <center><div class="col-md-6 col-md-offset-3" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <a href="censo/ingreso.php" target="_blank" onclick="window.open(this.href,this.target,'width=1000,height=600,top=200,left=200,toolbar=no,location=no,status=no,menubar=no');return false;"><div class="feature-wrap">
                            <i class="fa fa-users"></i>
                            <h2>Sistema de Censo Demográfico y Socioeconómico</h2>
                            <h3></h3>
                        </div></a></center>
                    </div>
                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->
	
	 <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Trabajos Recientes</h2>                
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/cc2.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">                                
                                <p>Realizado en la 2da calle</p>
                                <a class="preVer" href="images/portfolio/full/cc2.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/cc9.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">                                
                                <p>Recuperación de la grama Parque "Alí Primera"</p>
                                <a class="preVer" href="images/portfolio/full/cc9.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/cc5.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">                                
                                <p>Rehabilitación del Muro</p>
                                <a class="preVer" href="images/portfolio/full/cc5.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                            </div>  
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/cc3.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">                               
                                <p>Parque "Alí Primera"</p>
                                <a class="preVer" href="images/portfolio/full/cc3.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                            </div> 
                        </div>
                    </div>
                </div>   
                
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/cc5.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">                               
                                <p>Rehabilitación del Muro</p>
                                <a class="preVer" href="images/portfolio/full/cc5.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                            </div>
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/cc7.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">                                
                               <p>Rehabilitación Callejon San Luis</p>
                                <a class="preVer" href="images/portfolio/full/cc7.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                            </div>  
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/cc6.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">                                
                                <p>Rehabilitación del Muro</p>
                                <a class="preVer" href="images/portfolio/full/cc6.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                            </div>
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/cc7.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">                                
                                <p>Rehabilitación Callejon San Luis</p>
                                <a class="preVer" href="images/portfolio/full/cc7.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Ver</a>
                            </div> 
                        </div>
                    </div>
                </div>   
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#recent-works-->	
	
  <!--  <section id="middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown">
                    <div class="skill">
                        <h2>Our Skills</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <div class="progress-wrap">
                            <h3>Graphic Design</h3>
                            <div class="progress">
                              <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <span class="bar-width">85%</span>
                              </div>

                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>HTML</h3>
                            <div class="progress">
                              <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                               <span class="bar-width">95%</span>
                              </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>CSS</h3>
                            <div class="progress">
                              <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="bar-width">80%</span>
                              </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>Wordpress</h3>
                            <div class="progress">
                              <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="bar-width">90%</span>
                              </div>
                            </div>
                        </div>
                    </div>

                </div><!--/.col-sm-6-->

                <!--<div class="col-sm-6 wow fadeInDown">
                    <div class="accordion">
                        <h2>Why People like us?</h2>
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="images/accordion1.png">
                                        </div>
                                        <div class="media-body">
                                             <h4>Adipisicing elit</h4>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseFour1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>
                        </div><!--/#accordion1-->
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section> <!--/#middle--> 

    <div class="clients-area center wow fadeInDown">
                <h2>Misión y Visión</h2>
                <p class="lead">La comuna "Explosión del Poder Popular" junto con el consejo comunal "Santa Inés"<br>a través del ministerio popular de las comunas establecen su misión y visión. </p>
            </div>

            <div class="row">
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">                       
                        <h2><b>Misión</b></h2>
                        <h4>Promover y consolidar la democracia participativa y protagónica, mediante la promoción y el fortalecimiento de todos
                         aquellos programas y proyectos comunitarios que propicien el ejercicio de la corresponsabilidad social en la gestión pública, para el fortalecimiento de las potencialidades y resolver los problemas de la comunidad.</h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="images/mision.jpg" class="img-circle" alt="">                       
                        <h4><span>Parque Alí Primera /</span></h4>
                        <h4> Recuperación del Sistema de Riego</h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">                        
                        <h2><b>Visión</b></h2>
                        <h4>Obtener de todos los proyectos y programas desarrollados por el Consejo Comunal y de la comunidad en General presentados los
                         beneficios esperados por los mismos, y que generen la transformación de las personas que habitan la comunidad y de la infraestructura que nos rodea, para aumentar el avanza y satisfacer todas las necesidades de todos.</h4>
                    </div>
                </div>
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