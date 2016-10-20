<?php 
require_once("../modelo/clasedelogin/class_login.php");
require_once("../modelo/clasedecensos/class_listar_censos.php");
require_once("../modelo/clasedecensos/class_paginador_censos.php");

if(isset($_GET["pos"])){
	$inicio=$_GET["pos"];
}else{
	$inicio=0;
}
if(isset($_SESSION["sesion_usuario"])){
//print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>C.C. "Santa Inés"</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../diseño/estilos.css">
		<link rel="stylesheet" href="../diseño/css/bootstrap.css">
		<link rel="stylesheet" href="../diseño/iconos/css/font-awesome.css">
		<link rel="stylesheet" href="../diseño/selectstyles/dist/css/bootstrap-select.css">
		<script language="javascript" type="text/javascript" src="../js/funciones.js"></script>
		<script type="text/javascript" src="ajax.js"></script>
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
			
			<h1 class="page-header">Listado de censos</h1>

			<div class="col-md-12 well">

<!--TABLA DE CENSOS-->
<div id="contenido">
	<?php
	include("../includes/seccionescenso/paginador.php");
	?>
</div>
<!--FIN TABLA DE CENSOS-->
				
		

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
	echo "<script type='text/javascript'>alert('Necesita iniciar sesi\u00f3n para ver esta secci\u00f3n.');window.location='../ingreso.php';</script>";
}
?>