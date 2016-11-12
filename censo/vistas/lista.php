<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Sistema de Control de Censo Demográfico y Socieconómico</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="diseño/estilos.css">
		<link rel="stylesheet" href="diseño/css/bootstrap.css">
		<link rel="stylesheet" href="diseño/iconos/css/font-awesome.css">
		<link rel="stylesheet" href="diseño/selectstyles/dist/css/bootstrap-select.css">
		<link rel="shortcut icon" href="../img/ccsantaines.ico">
	</head>
<body>

<div class="col-sm-4" id="col-btn-list-verticaladmin">
	<!-- Brand and toggle get grouped for better mobile display -->

	<div class="navbar-header">

		<button id="btn-list-vertical-admin-responsive" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span id="icono-btn-responsive-listverticaladmin" class="sr-only">Toggle navigation</span>
			<span id="icono-btn-responsive-listverticaladmin" class="icon-bar"></span>
			<span id="icono-btn-responsive-listverticaladmin" class="icon-bar"></span>
			<span id="icono-btn-responsive-listverticaladmin" class="icon-bar"></span>
		</button>

	</div>
	

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse" id="div-btn-responsive-listverticaladmin">

		<ul class="nav navbar-nav">

			<ul class="nav nav-sidebar">
				<li role="presentation" class="current"><a href="">Reportes</a></li>
				<li role="presentation"><a href="">Generar Reportes</a></li>
				<li role="presentation"><a href="">Modificar Reportes</a></li>
				<li role="presentation"><a href="">Eliminar Reportes</a></li>
			</ul>
			
			<ul class="nav nav-sidebar">
				<li role="presentation"><a href=""><i class="fa fa-database"></i>&nbsp;&nbsp;Base de Datos</a></li>
				<li role="presentation"><a href="censarfamilia.php"><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;Censar Familias</a></li>
				<li role="presentation"><a href=""><i class="fa fa-book"></i>&nbsp;&nbsp;Consultas&nbsp;&nbsp;&nbsp;</a></li>
				<li role="presentation"><a href="modificar.php"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Moficaciones</a></li>
				<li role="presentation"><a href="eliminar.php"><i class="fa fa-times-circle"></i>&nbsp;&nbsp;Eliminar registros</a></li>
			</ul>
			
		</ul>

	</div><!-- /.navbar-collapse -->


	
</div>


<script src="diseño/js/jquery-1.11.2.min.js"></script> 
<script src = "diseño/js/bootstrap.min.js"></script>
<script src="diseño/selectstyles/dist/js/bootstrap-select.js"></script>
</body>
</html>