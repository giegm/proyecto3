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
		<title>C.C. Madre Tierra</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../diseño/estilos.css">
		<link rel="stylesheet" href="../diseño/css/bootstrap.css">
		<link rel="stylesheet" href="../diseño/iconos/css/font-awesome.css">
		<link rel="stylesheet" href="../diseño/selectstyles/dist/css/bootstrap-select.css">
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

	<section>
		
		<div class="col-md-10 col-admin-central">

			<?php 
			include("../includes/nombre_perfil.php");
			?>
	
			
			<h1 class="page-header pageheader-general">Vista General</h1>

			<?php
				include("../includes/operacionesadmin.php");
			?>
			<br/>
			<div class="col-md-12 well">
			
			<h3>Estadisticas generales de los Censos.</h3>
			<hr>
		
			  <div class="panel panel-danger">
			    <div class="panel-heading" role="tab" id="headingOne">
			      <h4 class="panel-title">
			        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			          Mayores de Edad y Mayores a Sesenta
			        </a>
			      </h4>
			    </div>
			    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
			      <div class="panel-body">
			        <div class="col-md-6">
						<img src="../modelo/grafica_mayores_de_edad.php" alt="">
				  	</div>
				  	<div class="col-md-6">
						<img src="../modelo/grafica_mayores_sesenta.php" alt="">
				  	</div>
			      </div>
			    </div>
			  </div>
			  <div class="panel panel-danger">
			    <div class="panel-heading" role="tab" id="headingTwo">
			      <h4 class="panel-title">
			        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
			         Personas de sexo Femenino y Masculino, Trabajadores por Cuenta Propia, Asalariados y Desempleados
			        </a>
			      </h4>
			    </div>
			    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
			      <div class="panel-body">
			        <div class="col-md-6">
						<img src="../modelo/grafica_personas_sexo_mxyfx.php" alt="">
				  	</div>
				  	<div class="col-md-6">
						<img src="../modelo/grafica_asalariados_trabjctapropia.php" alt="">
				  	</div>
			      </div>
			    </div>
			  </div>
			  <div class="panel panel-danger">
			    <div class="panel-heading" role="tab" id="headingThree">
			      <h4 class="panel-title">
			        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
			          Personas Con Enfermedades graves, Discapacitados, Pensionados, Personas Alquiladas y Propietarios.
			        </a>
			      </h4>
			    </div>
			    <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
			      <div class="panel-body">
			        <div class="col-md-6">
						<img src="../modelo/grafica_pensionados_discap_enfermos.php" alt="">
				  	</div>
				  	<div class="col-md-6">
						<img src="../modelo/grafica_alquilados_propietarios.php" alt="">
				  	</div>
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

