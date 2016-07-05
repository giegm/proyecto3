<?php 
require_once("../modelo/clasedelogin/class_login.php");
require_once("../modelo/clasedelogin/class_admin_perfil.php");
if(isset($_SESSION["sesion_usuario"]) && $_SESSION["sesion_perfil"]){
//print_r($_SESSION);
  $obj=new Perfiles();
  if(isset($_GET["perfil"])){
  $data=$obj->lista_perfil_actual($_SESSION["sesion_perfil"]);
  }
  $datados=$obj->lista_all_perfiles();
  if(isset($_GET["mod"]) and !empty($_GET["mod"])){
  	$perfil=$obj->get_perfil_de_listado($_GET["mod"]);
  }
?>
<!DOCTYPE html>
<html lang="es">
		<head>
			<title>Sistema de Control de Censo Demográfico y Socieconómico</title>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="../diseño/estilos.css">
			<link rel="stylesheet" href="../diseño/css/bootstrap.css">
			<link rel="stylesheet" href="../diseño/iconos/css/font-awesome.css">
			<link rel="stylesheet" type="text/css" href="css/requerido.css">
			<link rel="stylesheet" href="../diseño/selectstyles/dist/css/bootstrap-select.css">
	   		<script src="../js/valida_creacion_perfil.js" type="text/javascript"></script>
	   		<script src="../js/funciones.js" type="text/javascript"></script>
	   		<script type="text/javascript" src="../js/jquery-3.0.0.min.js"></script>
	   		<link rel="shortcut icon" href="../img/ccsantaines.ico">
		</head>
	<body>
		<?php include("../includes/navbaradmin.php"); ?>
		<div class="container-fluid"><!-- inicio del contenedor general -->
			<div class="row"><!-- fila principal -->
				<div class="col-md-2" id="list-vertical-admin">
					<?php include("../includes/listverticaladmin.php"); ?>
					<br/>
				</div>
				<br/>
				<!-- creamos la section derecha central de la vista general. -->
				<section>
					<div class="col-md-10 col-admin-central">
						<h1 class="page-header pageheader-general">Vista General de Perfiles</h1>
						<br/>
						<div class="col-md-12 well">
							<?php include("../includes/seccionesdeperfil/admindeperfiles.php"); ?>
						</div>
					</div>
				</section>
			</div><!-- fin fila principal -->
		</div><!-- final del contenedor general -->
		<script src="../diseño/js/jquery-1.11.2.min.js"></script> 
		<script src = "../diseño/js/bootstrap.min.js"></script>
		<script src="../diseño/selectstyles/dist/js/bootstrap-select.js"></script>
		<script src="js/requerido.js"></script>
	</body>
</html>
<?php 
}else{
  echo "<script type='text/javascript'>alert('necesita iniciar sesión para ver esta sección.');window.location='../ingreso.php';</script>";
}
?>