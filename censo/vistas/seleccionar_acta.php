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
							
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> 
													  
													  	<!--INCLUDE DEL PANEL DE DATOS JEFE DE FAMILIA-->
							<div id="paneles-censo" class="panel panel-danger">
								    <div class="panel-heading" role="tab" id="headingprincipal">
								      <h4 class="panel-title">
								        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseprincipal" aria-expanded="true" aria-controls="collapseprincipal">
								   			Seleccione el tipo de Acta.
								        <i class="fa fa-caret-down" style="float:right"></i><span style="float:right;">&nbsp;&nbsp;</span><i class="fa fa-caret-up" style="float:right"></i></a>
								      </h4>
								    </div>

								<div id="collapseprincipal" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingprincipal">
								     
								    <div class="panel-body">			   
										<div class="form-group col-md-12"><!-- 1er form-group -->
												<br><label for="" class="control-label col-sm-12 col-md-12" style="text-align:justify;">CARTA DE CONCUBINO</label>															
								    	</div>
								    	<div class="form-group col-md-12">
											<label for="" class="control-label col-sm-2 col-md-2" style="text-align:justify;">N° C.I. Solicitante</label>
											<div class="col-sm-2 col-md-2">
											<input type="text" name="ci" autofocus class="form-control" placeholder="Solo números" required onKeyPress="return SoloNumeros(event);">
											<br/>
											</div>

											<label for="" class="control-label col-sm-2 col-md-2" style="text-align:justify;">N° C.I. Conyugue</label>
											<div class="col-sm-2 col-md-2">
											<input type="text" name="ci" autofocus class="form-control" placeholder="Solo números" required onKeyPress="return SoloNumeros(event);">
											<br/>
											</div>

											<div class="col-sm-2 col-md-2">
											<a class="btn btn-success" type="button" href="../controlador/creapdf_acta6.php">Imprimir</a>
											<br/>
											</div>
									</div>

								    <div class="panel-body">			   
										<div class="form-group col-md-12"><!-- 1er form-group -->
											<br><label for="" class="control-label col-sm-12 col-md-12" style="text-align:justify;">CARTA DE RESIDENCIA</label>		
								    	
									    	<label for="" class="control-label col-sm-2 col-md-2" style="text-align:justify;">Motivo de la Solicitud</label>
											<div class="col-sm-2 col-md-2">
											<input type="text" name="ci" autofocus class="form-control" placeholder="Indique el motivo">
											<br/>
											</div>

									    	<div class="control-label col-sm-2 col-md-2">												
													<!--<a class="btn btn-danger" type="button" href="residencia.php" target="_blank">Ver</a>-->
													<a class="btn btn-success" type="button" href="../controlador/creapdf_acta.php">Imprimir</a>									    		
											</div>					
										</div>
																	
									</div>
									

									<div class="panel-body">										
										<div class="form-group col-md-12"><!-- 1er form-group -->
											<br><label for="" class="control-label col-sm-6 col-md-12" style="text-align:justify;">CARTA DE POSTULACIÓN</label>															
								    	
									    	<label for="" class="control-label col-sm-2 col-md-2" style="text-align:justify;">Institución</label>
											<div class="col-sm-2 col-md-2">
											<input type="text" name="ci" autofocus class="form-control" placeholder="Nombre de la institución">
											<br/>
											</div>

											<label for="" class="control-label col-sm-2 col-md-2" style="text-align:justify;">Atención</label>
											<div class="col-sm-2 col-md-2">
											<input type="text" name="ci" autofocus class="form-control" placeholder="A quien va dirigido">
											<br/>
											</div>

											<label for="" class="control-label col-sm-2 col-md-2" style="text-align:justify;">Área de Postulación</label>
											<div class="col-sm-2 col-md-2">
											<input type="text" name="ci" autofocus class="form-control" placeholder="Específicar área de estudio">
											<br/>
											</div

									    	<div class="col-sm-2 col-md-2">
												<div class="col-sm-6 col-md-12"><!-- 1er -->
													<!--<a class="btn btn-danger" type="button" href="../controlador/procesa_censados.php">Ver</a>-->
													<a class="btn btn-success" type="button" href="../controlador/creapdf_acta2.php">Imprimir</a>													
									    		</div>
											</div>					
										</div>								
									</div>

									<div class="panel-body">			   
										<div class="form-group col-md-6"><!-- 1er form-group -->
											<br><label for="" class="control-label col-sm-6 col-md-12" style="text-align:justify;">CONSTANCIA DE NO POSEER EMPLEO</label>															
								    	
									    	<div class="col-sm-6 col-md-12">
												<div class="col-sm-6 col-md-12"><!-- 1er -->
													<!--<a class="btn btn-danger" type="button" href="../controlador/procesa_censados.php">Ver</a>-->
													<a class="btn btn-success" type="button" href="../controlador/creapdf_acta3.php">Imprimir</a>													
									    		</div>
											</div>					
										</div>
										<div class="form-group col-md-6"><!-- 1er form-group -->
											<br><label for="" class="control-label col-sm-6 col-md-12" style="text-align:justify;">CONSTANCIA DE NO POSEER VIVIENDA</label>															
								    	
									    	<div class="col-sm-6 col-md-12">
												<div class="col-sm-6 col-md-12"><!-- 1er -->
													<!--<a class="btn btn-danger" type="button" href="../controlador/procesa_censados.php">Ver</a>-->
													<a class="btn btn-success" type="button" href="../controlador/creapdf_acta4.php">Imprimir</a>														
									    		</div>
											</div>					
										</div>								
									</div>

									<div class="panel-body">							
										<div class="form-group col-md-12"><!-- 1er form-group -->
											<br><label for="" class="control-label col-sm-12 col-md-12" style="text-align:justify;">CARTA DE BUENA CONDUCTA</label>															
								    	
									    	<label for="" class="control-label col-sm-2 col-md-2" style="text-align:justify;">Motivo de la Solicitud</label>
											<div class="col-sm-2 col-md-2">
											<input type="text" name="ci" autofocus class="form-control" placeholder="Indique el motivo">
											<br/>
											</div>

									    	<div class="control-label col-sm-2 col-md-2">												
													<!--<a class="btn btn-danger" type="button" href="residencia.php" target="_blank">Ver</a>-->
													<a class="btn btn-success" type="button" href="../controlador/creapdf_acta5.php">Imprimir</a>									    		
											</div>						
										</div>																		
									</div>									

								</div>										
							</div>
						</div>
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