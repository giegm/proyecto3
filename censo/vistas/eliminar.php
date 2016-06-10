<?php 
require_once("../modelo/clasedelogin/class_login.php");
if(isset($_SESSION["sesion_usuario"])){
//print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>C.C. Madre Tierra/Consultas</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../diseño/estilos.css">
		<link rel="stylesheet" href="../diseño/css/bootstrap.css">
		<link rel="stylesheet" href="../diseño/iconos/css/font-awesome.css">
		<link rel="stylesheet" href="../diseño/selectstyles/dist/css/bootstrap-select.css">
	</head>
<body>
	<?php
	include("../includes/navbaradmin.php");
	?>
<div class="container-fluid"><!-- inicio del contenedor general -->

	<div class="row"><!-- fila principal -->

		<div class="col-md-2" id="list-vertical-admin">
			
			<?php
			include("../includes/listverticaladmin.php");
			?>
			

		</div>

	<section><!-- inicio del section del contenedor central admin -->

		<div class="col-md-10 col-admin-central"><!-- contenedor central admin -->
			
			<h1 class="page-header">Eliminar Censos.</h1>

			<?php
				include("../includes/operacionesadmin.php");
			?>

		<!-- eliminar usuarios -->

			<div class="col-md-12 well">

				<div class="page-header">
				  <h3></h3>
				</div>
				
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-danger"><!-- primer subpanel -->
					  <div class="panel-heading" role="tab" id="headingOne">
							<h3 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Datos generales &nbsp;&nbsp;<small>Ocultar/Mostrar</small></a></h3>
					  </div>
					  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"aria-labelledby="headingOne">
						  <div class="panel-body">
								
							<form class="form-horizontal" method="POST" action="../controlador/eliminarvoc.php">
								<div class="form-group">
									<label class="control-label col-sm-2" for="">Codigo de Censo</label>
								<div class="col-sm-4">
							
									<input type="number" min="1" max="5000"  name="edivision" placeholder="Indique un codigo." class="form-control" id="inputs-sistema" required>
								
								</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="">Fecha</label>			
								<div class="col-sm-4">

									<input type="date" name="eid" placeholder="Identificador" class="form-control" id="inputs-sistema" required>
								</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for=""></label>
									
								<div class="col-sm-4">
									<input type="submit" class="btn btn-default" value="Eliminar" name="eliminabtn" id="btn-procesos-sistema">
								</div>
								</div>
							</form>			
						
						  </div>
					  </div>
					</div>

				</div>

			</div>
		
		</div><!-- fin conteneder central admin -->
	
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