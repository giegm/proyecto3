<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="vistas/img/logo_.ico">

    <title>C.C. "Santa Inés"</title>

    <!-- Bootstrap -->
    <link href="vistas/css/bootstrap.css" rel="stylesheet">
	<link href="vistas/css/bootstrap-theme.css" rel="stylesheet">

    <!-- siimple style -->
    <link href="vistas/css/style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Consejo Comunal "Santa Inés"</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../censo/ingreso.php">Sistema de Censo demográfico y Socioeconómico</a></li>			
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<div id="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h1><b>Sistema de Emisión de Actas</b></h1>
					<h2 class="subtitle">Necesita estar censado para solicitar cualquier tipo de acta.</h2>

				
					<form action="controlador/procesa_censados.php" method="POST" class="form-inline signup" role="form">
					  <div class="form-group">
					    <input type="text"  pattern="{0-9}" class="form-control" id="numero" placeholder="Número de cedula"  min="6" max="8" required>
					  </div>
					  <button type="submit" class="btn btn-theme">Ingresar</button>
					</form>				
				</div>
				<div class="col-lg-4 col-lg-offset-2">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					  </ol>					
					  <!-- slides -->
					  <div class="carousel-inner">
						<div class="item active">
						  <img src="vistas/img/slide1.png" alt="">
						</div>
						<div class="item">
						  <img src="vistas/img/slide2.png" alt="">
						</div>
						<div class="item">
						  <img src="vistas/img/slide3.png" alt="">
						</div>
					  </div>
					</div>		
				</div>
				
			</div>
		</div>
	</div>
	<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
					<p class="copyright">Copyright &copy; 2016 - Derechos Reservados <a href="ttp://bootstraptaste.com">CUFM</a></p>
			</div>
            <!-- 
                All links in the footer should remain intact. 
                Licenseing information is available at: http://bootstraptaste.com/license/
                You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Siimple
            -->
		</div>		
	</div>	
	</div>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="vistas/js/bootstrap.min.js"></script>
  </body>
</html>
