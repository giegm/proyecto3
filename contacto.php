<!DOCTYPE html>
<html lang="en">
  <?php 
     require_once('head.php'); ?>

  <body class="homepage">   
	 <?php 
     require_once('header.php'); ?>
		
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
               
                <form action="contacto2.php" id="main-contact-form" class="contact-form" name="contact-form" method="post">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Nombre y Apellido *</label>
                            <input type="text" name="nombre" class="form-control" required="required" onblur="revisar(this);">
                        </div>
                        <div class="form-group">
                            <label>Correo Electronico *</label>
                            <input type="email" name="email" class="form-control" required="required" onblur="revisar(this); revisaremail(this);">
                        </div>
                        <div class="form-group">
                            <label>Teléfono</label>
                            <input type="number" name="telefono" class="form-control">
                        </div>                                            
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Motivo del Mensaje *</label>
                            <input type="text" name="asunto" class="form-control" required="required" maxlength="15" onblur="revisar(this);">
                        </div>
                        <div class="form-group">
                            <label>Mensaje *</label>
                            <textarea name="mensaje" id="message" required="required" class="form-control" maxlength="100" rows="8" cols="50" onblur="revisar(this);"></textarea>
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