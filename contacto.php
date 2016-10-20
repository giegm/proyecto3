<!DOCTYPE html>
<html lang="en">
  <?php 
     require_once('head.php'); ?>

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
                        <li><a href="servicios.php">Servicios</a></li>
                        <li><a href="portafolio.php">Portafolio</a></li>
                        <li><a href="noticias.php">Noticias</a></li> 
                        <li class="active"><a href="contacto.php">Contáctenos</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->
		
	<div class="map"> <!-- http://es.map-generator.org/-->
		<iframe src="http://www.map-generator.org/c58014dc-fc5d-4fc2-8659-2cfc3158dc1c/iframe-map.aspx" scrolling="no" width="2000px" height="600px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
		</iframe>
	</div>
	
	<section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Envíanos tu comentario</h2>
                <p class="lead">Cuentanos que piensas y nosotros te responderemos en la brevedad posible.</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
               
                <form action="contacto2.php" method="post" class="contact-form">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Nombre y Apellido *</label>
                            <input type="text" name="nombre" class="form-control" id="nombre" maxlength="30" placeholder="Ingrese su nombre" required="required">
                        </div>
                        <div class="form-group">
                            <label>Correo Electronico *</label>
                            <input type="email" name="email" class="form-control" id="email" maxlength="30" placeholder="Ingrese su correo" required="required">
                        </div>                                                                  
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Motivo del Mensaje *</label>
                            <input type="text" name="asunto" class="form-control" id="asunto" maxlength="15" placeholder="Ingrese un asunto" required="required">
                        </div>
                        <div class="form-group">
                            <label>Mensaje *</label>
                            <textarea name="mensaje" id="message" required="required" class="form-control" maxlength="100" rows="8" cols="50"></textarea>
                        </div>                        
                        <div class="form-group">                           
                            <input class="btn btn-primary" type="submit" value="Enviar Mensaje"/>
                        </div>
                    </div>
                </form>
               
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->

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