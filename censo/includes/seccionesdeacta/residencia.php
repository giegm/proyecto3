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
							<img id="imagen.header-pdf" src="../img/logo.png" width="100" height="100" alt="">
								<div class="col-xs-12 col-sm-8 col-md-3">
								<center>
									<p>República Bolivariana de Venezuela<br>
									Distrito Capital Municipio Libertador<br>
									Consejo Comunal "Santa Inés"<br>
									REG: Nº 0101210010228  RIF: J-29967415-0<br>
									2da Calle de los Frailes de Catia<br>
									Callejón San Antonio <br>
									TEL 0412-984-76-84</p>
								</center>
								</div>			
								
								<div class="div_contenido_censo"><br>
								<h3 id="titulos-de-tablas">CARTA DE RESIDENCIA</h3>	
								
								<div class="col-xs-12 col-sm-8 col-md-3">
								<center>
									<p style="text-align: justify;">EL Consejo  Comunal Santa Inés de los frailes de Catia Parroquia Sucre, en uso de las atribucione
									s legales que le confiere la Ley Orgánica  de los consejos comunales, en concordancia con la Ordenanza de Funcionamiento de los Consejos
									 Comunales del Municipio Bolivariano Libertador, por medio de la presente hacemos constar que el ciudadano(a)  #, titular de la C.I: # , residente del sector: #</p>
									
									<p style="text-align: left;">MOTIVO DE LA SOLICITUD: #</p>
									<br>
									<p style="text-align: justify;">Constancia que se expide a petición de la parte interesada en Caracas a los # días del mes de # del año #. </p>
								</center>
								</div>	
								
								<br><br><br>
								<hr height="10px" width="50%">
								<p style="text-align: center;">EL EXPONENTE.<br>ULISES ROBLES<br>UNIDAD DE GESTION FINANCIERA<br>CI 7.885.515</p>
								<p style="text-align: center;">
								ELVIA PEREZ    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								YAILET ROJAS<br>
							     COMITÉ DE SALUD. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							     COMITE DE CULTURA<br>
							     CI: 12.561.610    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							      CI: 14.015.323<br>
							</p>
												  		

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