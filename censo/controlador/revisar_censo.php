<?php 
require_once("../modelo/clasedelogin/class_login.php");
require_once("../modelo/clasedecensos/class_revisar_censo.php");
$obj=new Revisiones();	
if(isset($_SESSION["sesion_usuario"]))
{
	/*instanciamos la class revisiones que contiene la consulta de los datos
	de las tablas del censo y a su vez el metodo de modificaciones*/
	

	if($_SERVER["REQUEST_METHOD"]=="POST"){
		/*despues de haber modificado volvemos a este punto y 
		llamamos al metodo de la class revisiones que hace las modificaciones*/
		require_once("../modelo/clasedecensos/class_modificar_censo.php");
		$modif=new Modificaciones_Censos();
		$modif->Modificar_censo_por_id($_POST["id_jefe"]);
		exit;
	}//fin del if

/*llamamos al metodo que hace la consulta de los datos segun el censo elegido
en la tabla del listado que viene via GET conteniendo el ID_JEFE*/

?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>C.C. Madre Tierra</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../diseño/estilos.css">
		<link rel="stylesheet" href="../diseño/css/bootstrap.css">
		<link rel="stylesheet" href="../diseño/iconos/css/font-awesome.css">
		<link rel="stylesheet" href="../diseño/selectstyles/dist/css/bootstrap-select.css">
		<script src="http://localhost/madretierraweb/proyecto3/js/validarcenso.js" type="text/javascript"></script>
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
			
			<h1 class="page-header pageheader-general">Revisión de censos</h1>

			<?php
				include("../includes/operacionesadmin.php");
			?>
			<br/>
			<div class="col-md-12 well">
			<!--DATOS DEL CENSO A REVISAR-->
			<form action="revisar_censo.php" method="POST" name="form" class="form-horizontal">

				<!-- formulario de censar familias -->
				<div class="form-group col-md-12"><!-- inicio del form-group -->
					
				<!-- comienzo de los paneles agrupados -->
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> 
				  
				  	<!--INCLUDE DEL PANEL DE DATOS JEFE DE FAMILIA-->
					<?php 
						include("../includes/revisioncenso/jefefamilia.php");
					?>
				  	<!--FIN DEL PANEL DEL JEFE DE FAMILIA-->

					<!-- INICIO DEL panel del grupo familiar -->
					<?php 
					    include("../includes/revisioncenso/miembrosfamilia.php");
					?>
					<!--FIN DEL PANEL DE LOS MIEMBROS DEL GRUPO FAMILIAR-->

					<!--INICIO DEL PANEL situacioneconomica.php-->
					<?php 
					    include("../includes/revisioncenso/situacioneconomica.php");
					?>
					<!--FIN DEL PANEL situacioneconomica.php-->


					<!-- INICIO DEL PANEL DE salud.php -->
					<?php 
					    include("../includes/revisioncenso/salud.php");
					?>
					<!-- FIN DEL PANEL DE salud.php -->

					    
					<!-- INICIO DEL PANEL DE servicios.php -->
					<?php 
					    include("../includes/revisioncenso/servicios.php");
					?>
					<!-- FIN DEL PANEL DE servicios.php -->
					    	
					
					<!-- INICIO DEL PANEL DE participacioncomunitaria.php -->
					<?php 
					    include("../includes/revisioncenso/partcomunitaria.php");
					?>
					<!-- INICIO DEL PANEL DE participacioncomunitaria.php -->

					<!-- INICIO DEL PANEL DE situacioncomunidad.php -->
					<?php 
					    include("../includes/revisioncenso/situacioncomunidad.php");
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
					include("../includes/revisioncenso/datosdelcenso.php");
					?>
					<!--FIN DEL PANEL DATOS DEL CENSO-->

						<br/>
						<div class="form-group"><!-- 2do form-group -->
							<div class="form-group">
							<label for="" class="control-label col-sm-2 col-md-2"></label>
							</div>
							<div class="col-sm-8 col-md-8">
							<?php 
							include("../includes/revisioncenso/botones_update.php");
							?>
							</div>
						</div>
						
				</form>
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
