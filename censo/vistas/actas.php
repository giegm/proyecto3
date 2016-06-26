<?php 
require_once("../modelo/clasedelogin/class_login.php");
if(isset($_SESSION["sesion_usuario"])){
//print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Sistema de Control de Censo Demográfico y Socieconómico|Consultas</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../diseño/estilos.css">
		<link rel="stylesheet" href="../diseño/css/bootstrap.css">
		<link rel="stylesheet" href="../diseño/iconos/css/font-awesome.css">
		<link rel="stylesheet" href="../diseño/selectstyles/dist/css/bootstrap-select.css">
		<link rel="shortcut icon" href="../img/ccsantaines.ico">
		<script src="../js/validaractas.js" type="text/javascript"></script>
	</head>
	<body>
		<?php include("../includes/navbaradmin.php"); ?>
		<div class="container-fluid"><!-- inicio del contenedor general -->
			<div class="row"><!-- fila principal -->
				<div class="col-md-2" id="list-vertical-admin">	
					<?php include("../includes/listverticaladmin.php");?>
					<hr class="featurette-divider hr-admin visible-xs visible-sm">
				</div>
				<section><!-- inicio del section del contenedor central admin -->
					<div class="col-md-10 col-admin-central"><!-- contenedor central admin -->
						<h1 class="page-header">Sistema de Emisión de Actas</h1>
						<div class="col-md-12 well"><!-- contenedor de los paneles de consulta -->
							<div class="page-header">
					  			<h3>Necesita estar censado para solicitar cualquier tipo de acta.</h3>					  			
					  		</div>
					  		
					  		<div class="col-lg-6">
							    <div class="input-group">
							      <input type="text" class="form-control" placeholder="Introduzca el número de cedula" maxlength="8" required onKeyPress="return SoloNumeros(event);">
							      <span class="input-group-btn">
							        <a class="btn btn-primary" type="button" href="../controlador/procesa_censados.php">Consultar</a>
							      </span>
							    </div><!-- /input-group -->
							 </div>
					  		

							<!--FIN DE LOS PANELES DE CONSULTAS-->
						</div>
					</div>
				</section><!-- fin del section del contenedor central admin -->
			</div><!-- fin de row -->
		</div><!-- fin del container-fluid -->
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