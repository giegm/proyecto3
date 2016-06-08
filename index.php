<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Madre Tierra</title>
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="diseño/css/bootstrap.css">
	<link rel="stylesheet" href="diseño/iconos/css/font-awesome.css">	
</head>
<body>
<div class="container">
	<?php
	include ("includes/navbarweb.php");
	?>
<div id="carousel-id" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-id" data-slide-to="0" class=""></li>
        <li data-target="#carousel-id" data-slide-to="1" class=""></li>
        <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item">
            <center><img src="img/imagen.jpg" alt="First slide" class="img-responsive"></center>
            <div class="container">
                <div class="carousel-caption">
                    
                </div>
            </div>
        </div>
        <div class="item">
            <center><img src="img/imagen3.JPG" alt="Second slide" class="img-responsive"></center>
            <div class="container">
                <div class="carousel-caption">
                    
                </div>
            </div>
        </div>
        <div class="item active">
            <center><img src="img/imagen2.JPG" alt="Third slide" class="img-responsive"></center>
            <div class="container">
                <div class="carousel-caption">
                    
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>

<br></br>

<div class="row">
  <div class="col-sm-4 col-md-4">
    <div class="thumbnail">
      <img src="img/madre.jpg" width="240px" height="240px" class="img-responsive" alt="...">
      <div class="caption">
       <h3>C.C. Madre Tierra</h3>
        <p><?php $archivo=fopen("archivos/archivo.txt","r") or die("Problema al cargar el archivo"); while(!feof($archivo)){ $traer=fgets($archivo); $saltodelinea=nl2br($traer); echo $saltodelinea; } ?></p>
        
        
      </div>
    </div>
  </div>

  <div class="col-sm-4 col-md-4">
    <div class="thumbnail">
      <img src="img/madre1.jpg" width="240px" height="240px" class="img-responsive" alt="...">
      <div class="caption">
       <h3>Misión</h3>
        <p><?php $archivo=fopen("archivos/archivo.txt","r") or die("Problema al cargar el archivo"); while(!feof($archivo)){ $traer=fgets($archivo); $saltodelinea=nl2br($traer); echo $saltodelinea; } ?></p>
        
      </div>
    </div>
  </div>


  <div class="col-sm-4 col-md-4">
    <div class="thumbnail">
      <img src="img/madre2.jpg" width="240px" height="240px" class="img-responsive" alt="...">
      <div class="caption">
       <h3>Objetivos</h3>
       <p><?php $archivo=fopen("archivos/archivo.txt","r") or die("Problema al cargar el archivo"); while(!feof($archivo)){ $traer=fgets($archivo); $saltodelinea=nl2br($traer); echo $saltodelinea; } ?></p>
        
        
      </div>
    </div>
  </div>
  </div>
 </div>	

  	<?php
	include("includes/footer.php");
	?>




<script src="diseño/js/jquery-1.11.2.min.js"></script> 
<script src = "diseño/js/bootstrap.min.js"></script>
<script src="diseño/selectstyles/dist/js/bootstrap-select.js"></script>
</body>
</html>