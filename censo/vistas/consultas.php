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

		<?php include("../includes/navbaradmin.php"); ?>
		<div class="container-fluid"><!-- inicio del contenedor general -->
			<div class="row"><!-- fila principal -->
				<div class="col-md-2" id="list-vertical-admin">	
					<?php include("../includes/listverticaladmin.php");?>
					<hr class="featurette-divider hr-admin visible-xs visible-sm">
				</div>
				<section><!-- inicio del section del contenedor central admin -->
					<div class="col-md-10 col-admin-central"><!-- contenedor central admin -->
						<h1 class="page-header">Consultar Censos</h1>
						<div class="col-md-12 well"><!-- contenedor de los paneles de consulta -->
					  		<?php include("../includes/seccionesconsultas/consultageneral.php");?>
					  		<br><br>

							<!--FIN DE LOS PANELES DE CONSULTAS-->
						</div>
					</div>
				</section><!-- fin del section del contenedor central admin -->
			</div><!-- fin de row -->
		</div><!-- fin del container-fluid -->
		<script src="../diseño/js/jquery-1.11.2.min.js"></script> 
		<script src = "../diseño/js/bootstrap.min.js"></script>
		<script src="../diseño/selectstyles/dist/js/bootstrap-select.js"></script>
		<script src="../../js/jquery.min.js"></script>
		<!--<![endif]-->
		<script src="../js/blockUI/jquery.blockUI.js"></script>
		<script src="../js/iCheck/jquery.icheck.min.js"></script>
		<script src="../jquery/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="../jquery/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="../jquery/jquery-cookie/jquery.cookie.js"></script>
		<script src="../js/main.js"></script>
		<!-- fin: MAIN JAVASCRIPTS -->
		<!-- inicio: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="../jquery/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
		<script src="../jquery/jQRangeSlider/jQAllRangeSliders-min.js"></script>
		<script src="../jquery/jQuery-Knob/js/jquery.knob.js"></script>
		<script src="../js/ui-sliders.js"></script>
		<script src="../jquey/flot/jquery.flot.js"></script>
		<script src="../jquery/flot/jquery.flot.resize.js"></script>
		<script src="../jquery/flot/jquery.flot.categories.js"></script>
		<script src="../jquery/flot/jquery.flot.pie.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				//Charts.init();
				UISliders.init();
			$('#Reporte').click(function() {
			var edadIn = $('#de').val();
			var edadF = $('#hast').val();
			/*var sexo = $('input:radio[name=sexo]:checked').val();
			var pensionado = $('input:radio[name=pensionado]:checked').val();
			var incapacitado = $('input:radio[name=incapacitado]:checked').val();
			var trabaja = $('input:radio[name=trabaja]:checked').val();*/
			var url = '../includes/seccionesconsultas/CensoReporte.php';
		
			if (edadIn  >= edadF ) {
				$("#PanelTitulo").html("<center> la edad final no puede ser menor a la edad inicial</center>");
				$("#hast").focus();
			}else{
				$.post(url,{'edadIn':edadIn,'edadF':edadF},function(respondText){	
					$("#placeholder82").html(respondText);
					});
				};
			});
		});
		</script>
	 </body>
</html>
<?php 
}else{
	echo "<script type='text/javascript'>alert('Necesita iniciar sesi\u00f3n para ver esta secci\u00f3n.');window.location='../ingreso.php';</script>";
}
?>