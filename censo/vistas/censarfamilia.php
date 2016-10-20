<?php 
require_once("../modelo/clasedelogin/class_login.php");
require_once("../modelo/clasedecensos/class_crea_censo.php");
if(isset($_SESSION["sesion_usuario"])){
$obj2=new Operar();
//print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Sistema de Control de Censo Demográfico y Socieconómico|Censar</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../diseño/estilos.css">
		<link rel="stylesheet" href="../diseño/css/bootstrap.css">
		<link rel="stylesheet" href="../diseño/iconos/css/font-awesome.css">
		<link rel="stylesheet" href="../diseño/selectstyles/dist/css/bootstrap-select.css">	
		<link rel="stylesheet" type="text/css" href="css/requerido.css">
		<script src="../js/validarcenso.js" type="text/javascript"></script>
		<script src="../diseño/js/jquery-1.11.2.min.js"></script>
		<link rel="shortcut icon" href="../img/ccsantaines.ico">
	</head>
<body>
	<script language="JavaScript" type="text/javascript">
		function click(){
		if(event.button==2){
		alert('Esta acción no está permitida');
		}
		}
		document.onmousedown=click
		//-->
	</script>
	<?php
	include("../includes/navbaradmin.php");
	?>
	<div class="container-fluid"><!-- inicio del contenedor general -->
			<div class="row"><!-- fila principal -->
				<div class="col-md-2" id="list-vertical-admin">
					<?php
					include("../includes/listverticaladmin.php");
					?>
					<hr class="featurette-divider hr-admin visible-xs visible-sm">
				</div>
				<section><!-- inicio del section del contenedor central admin -->
					<div class="col-md-10 col-admin-central"><!-- contenedor central admin -->
						<h1 class="page-header">Estudio demográfico y socioeconómico</h1>
						<div class="col-md-12 well"><!-- contenedor: paneles de registro -->
							<form action="../controlador/crearcenso.php" method="POST" name="form" enctype="multipart/form-data" class="form-horizontal">
							<!-- formulario de censar familias -->
								<div class="form-group col-md-12"><!-- inicio del form-group -->		
									<!-- comienzo de los paneles agrupados -->
									<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> 
									  
									  	<!--INCLUDE DEL PANEL DE DATOS JEFE DE FAMILIA-->
										<?php 
											include("../includes/seccionescenso/jefefamilia.php");
										?>
									  	<!--FIN DEL PANEL DEL JEFE DE FAMILIA-->

										<!-- INICIO DEL panel del grupo familiar -->
										<?php 
											include("../includes/seccionescenso/miembrosfamilia.php");
										?>
										<!--FIN DEL PANEL DE LOS MIEMBROS DEL GRUPO FAMILIAR-->

										<!--INICIO DEL PANEL situacioneconomica.php-->
										<?php 
										    include("../includes/seccionescenso/situacioneconomica.php");
										?>
										<!--FIN DEL PANEL situacioneconomica.php-->


										<!-- INICIO DEL PANEL DE salud.php -->
										<?php 
										    include("../includes/seccionescenso/salud.php");
										?>
										<!-- FIN DEL PANEL DE salud.php -->

										    
										<!-- INICIO DEL PANEL DE servicios.php -->
										<?php 
										    include("../includes/seccionescenso/servicios.php");
										?>
										<!-- FIN DEL PANEL DE servicios.php -->
										    	
										
										<!-- INICIO DEL PANEL DE participacioncomunitaria.php -->
										<?php 
										    include("../includes/seccionescenso/partcomunitaria.php");
										?>
										<!-- INICIO DEL PANEL DE participacioncomunitaria.php -->

										<!-- INICIO DEL PANEL DE situacioncomunidad.php -->
										<?php 
										    include("../includes/seccionescenso/situacioncomunidad.php");
										?>
										<!-- INICIO DEL PANEL DE situacioncomunidad.php -->
									</div><!-- fin de los paneles -->
								
									<br/>
									<!--DIV PARA MOSTRAR LOS MENSAJES DE ALERTA EN EL FORM -->
									<div class="form-group">
										<div class="col-md-8">
										<p id="mensaje_error"></p>
										</div>
									</div>
									<!--FIN DEL DIV DE MENSAJES DE ALERT DEL FORM-->
									<!--INICIO DEL PANEL DATOS DEL CENSO-->
									<?php 
									include("../includes/seccionescenso/datosdelcenso.php");
									?>
									<!--FIN DEL PANEL DATOS DEL CENSO-->
									<br/>
									<div class="form-group"><!-- 2do form-group -->
										<div class="form-group">
											<label for="" class="control-label col-sm-2 col-md-2"></label>
										</div>
										<div class="col-sm-8 col-md-8">
											<input type="button" class="btn btn-success" name="btn-censo-familia" onClick="Validar_censo();" value="Guardar datos">
											<a href="censarfamilia.php" type="button" class="btn btn-primary" name="btn-censo-limpia" id="limpiar">Limpiar censo</a>
											<a type="button" name="cancelar_censo" href="javascript:void(0);" onclick="cancelar_censo('administra.php');" class="btn btn-danger">Cancelar</a>
										</div>
									</div>
								</div>
							</form>
						</div><!-- fin contenedor: paneles de registro -->
					</div><!-- fin conteneder central admin -->		
				</section><!-- fin del section del contenedor central admin -->
			</div><!-- fin de row -->
	</div><!-- fin del container-fluid -->



	<script src = "../diseño/js/bootstrap.min.js"></script>
	<script src="../diseño/selectstyles/dist/js/bootstrap-select.js"></script>
	<script src="js/requerido.js"></script>
</body>
</html>
<?php 
}else{
	echo "<script type='text/javascript'>alert('Necesita iniciar sesi\u00f3n para ver esta secci\u00f3n.');window.location='../ingreso.php';</script>";
}
?>