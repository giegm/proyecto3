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
			
			<hr class="featurette-divider hr-admin visible-xs visible-sm">

		</div>

<section><!-- inicio del section del contenedor central admin -->

		<div class="col-md-10 col-admin-central"><!-- contenedor central admin -->
			
			<h1 class="page-header">Consultar Censos</h1>

<div class="col-md-12 well"><!-- contenedor de los paneles de consulta -->

			<div class="page-header">
			  <h3>Paneles de consultas</h3>
			  <h4><small>Use las flechas o iconos para abrir y cerrar los paneles.</small></h4>
			</div>	
       

<!--Consulta mayores de 60 años-->
<?php 
  include("../includes/seccionesconsultas/mayoresasesenta.php");
?>
<!--fin de consulta mayores de60 años-->

<!--consulta mayores de edad-->
<?php 
  include("../includes/seccionesconsultas/mayoresdeedad.php");
?>
<!--fin de consulta mayores de edad-->

<!--consulta menores a 18-->
<?php 
  include("../includes/seccionesconsultas/menoresdieciocho.php");
?>
<!--fin de consulta menores a 18-->

<!--consulta sexo masculino-->
<?php 
  include("../includes/seccionesconsultas/sexomasculino.php");
?>
<!--fin de consulta sexo masculino-->

<!--consulta sexo femenino-->
<?php 
  include("../includes/seccionesconsultas/sexofemenino.php");
?>
<!--fin de consulta sexo femenino-->

<!--consulta estudiantes-->
<?php 
  include("../includes/seccionesconsultas/estudiantes.php");
?>
<!--fin de consulta estudiantes-->

<!--consulta asalariados-->
<?php 
  include("../includes/seccionesconsultas/asalariados.php");
?>
<!--fin de consulta asalariados-->

<!--consulta trabajadorescuentapropia-->
<?php 
  include("../includes/seccionesconsultas/trabajadorescuentapropia.php");
?>
<!--fin de consulta trabajadorescuentapropia-->

<!--consulta desempleados-->
<?php 
  include("../includes/seccionesconsultas/desempleados.php");
?>
<!--fin de consulta desempleados-->

<!--consulta pensionados-->
<?php 
  include("../includes/seccionesconsultas/pensionados.php");
?>
<!--fin de consulta pensionados-->

<!--consulta discapacitados-->
<?php 
  include("../includes/seccionesconsultas/discapacitados.php");
?>
<!--fin de consulta discapacitados-->

<!--consulta enfermedadesgraves-->
<?php 
  include("../includes/seccionesconsultas/enfermedadesgraves.php");
?>
<!--fin de consulta enfermedadesgraves-->

<!--consulta alquilados-->
<?php 
  include("../includes/seccionesconsultas/alquilados.php");
?>
<!--fin de consulta alquilados-->

<!--consulta propietarios-->
<?php 
  include("../includes/seccionesconsultas/propietarios.php");
?>
<!--fin de consulta propietarios-->

<!--FIN DE LOS PANELES DE CONSULTAS-->


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