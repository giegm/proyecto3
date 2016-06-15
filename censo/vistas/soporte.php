<?php 
require_once("../modelo/clasedelogin/class_login.php");
if(isset($_SESSION["sesion_usuario"])){
//print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Sistema de Control de Censo Demográfico y Socieconómico|Soporte</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../diseño/estilos.css">
		<link rel="stylesheet" href="../diseño/css/bootstrap.css">
		<link rel="stylesheet" href="../diseño/iconos/css/font-awesome.css">
		<link rel="stylesheet" href="../diseño/selectstyles/dist/css/bootstrap-select.css">
		<link rel="shortcut icon" href="../img/ccsantaines.ico">
	</head>
<body>
<?php include("../includes/navbaradmin.php"); ?>

<div class="container-fluid"><!-- inicio del contenedor general -->

	<div class="row"><!-- fila principal -->

	<div class="col-md-2" id="list-vertical-admin">
		
	<?php
	include("../includes/listverticaladmin.php");
	?>
		<br/>

	</div>
	<br/>
	<!-- creamos la section derecha central de la vista general. -->

	<section>
		
		<div class="col-md-10 col-admin-central">
			
			<h1 class="page-header pageheader-general">Soporte Tecnico</h1>
			<br/>
			<div class="col-md-12 well">
			<div class="panel panel-danger">
				  <div class="panel-heading">
						<h3 class="panel-title">Contactanos para dudas</h3>
				  </div>
				  <div class="panel-body">
						
				  </div>
			</div>
			
			</div>

		</div>



	</section>
  

		
	</div><!-- fin fila principal -->

</div><!-- final del contenedor general -->





<script src="../diseño/js/jquery-1.11.2.min.js"></script> 
<script src = "../diseño/js/bootstrap.min.js"></script>
<script src="../diseño/selectstyles/dist/js/bootstrap-select.js"></script>
</body>
</html>
<?php 
}else{
  echo "<script type='text/javascript'>alert('necesita iniciar sesión para ver esta sección.');window.location='../ingreso.php';</script>";
}
?>