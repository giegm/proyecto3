<?php 
require_once("../modelo/clasedelogin/class_login.php");
if(isset($_SESSION["sesion_usuario"]) and isset($_SESSION["sesion_perfil"]))
{
	
	//instanciamos la class Acceso_user que a su vez contiene el metodo de reconocimiento de perfiles
	$obj=new Acceso_user();
	$perfil=$obj->get_rol_usuario();//metodo que reconoce y asocia el id del user logueado
//print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Sistema de Control de Censo Demográfico y Socieconómico|Inicio</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../diseño/estilos.css">
		<link rel="stylesheet" href="../diseño/css/bootstrap.css">
		<link rel="stylesheet" href="../diseño/iconos/css/font-awesome.css">
		<link rel="stylesheet" href="../diseño/selectstyles/dist/css/bootstrap-select.css">
		<link rel="shortcut icon" href="../img/ccsantaines.ico">
		<script>
		var mydate=new Date();
		var year=mydate.getYear(); 
		if (year < 1000) year+=1900; 
		var day=mydate.getDay(); 
		var month=mydate.getMonth(); 
		var daym=mydate.getDate(); 
		if (daym<10) daym="0"+daym; 
		var dayarray=new Array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
		var montharray=new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto",
		"Septiembre","Octubre","Noviembre","Diciembre"); 
		</script>
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
	<script> 
      document.write("<small><font color='black' face='Arial'><b>"+ dayarray[day] + " " + daym + " de " + montharray[month] + " de " + year + "</b></font></small>"); 
    </script>
	<section>
	<br>
		<div class="col-md-10 col-admin-central">	
			<h1 class="page-header pageheader-general"></h1>
			<center><img src="../img/censo.png" align="center"></center>
			<h1 class="page-header pageheader-general"></h1>
			<br/>
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

