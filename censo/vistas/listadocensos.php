<?php 
require_once("../modelo/clasedelogin/class_login.php");
//require_once("../modelo/clasedecensos/class_listar_censos.php");

if(isset($_SESSION["sesion_usuario"])){
//print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="es">
	<head>
        <title>Sistema de Control de Censo Demográfico y Socieconómico|Listado de Censos</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../diseño/estilos.css">
        <link rel="stylesheet" href="../diseño/css/bootstrap.css">
        <link rel="stylesheet" href="../diseño/iconos/css/font-awesome.css">
        <link rel="stylesheet" href="../diseño/selectstyles/dist/css/bootstrap-select.css">
        <script language="javascript" type="text/javascript" src="../js/funciones.js"></script>
        <script language="javascript" type="text/javascript" src="../js/validarcenso.js"></script>
        <script src="../diseño/js/jquery-1.11.2.min.js"></script> 
        <script src = "../diseño/js/bootstrap.min.js"></script>
        <script src="../diseño/selectstyles/dist/js/bootstrap-select.js"></script>
        <!--    ESTILO GENERAL   -->
        <link type="text/css" href="css/style.css" rel="stylesheet" />
        <!--    ESTILO GENERAL    -->
        <!--    JQUERY   -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="js/funciones.js"></script>
        <!--    JQUERY    -->
        <!--    FORMATO DE TABLAS    -->
        <link type="text/css" href="css/demo_table.css" rel="stylesheet" />
        <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
        <link rel="shortcut icon" href="../img/ccsantaines.ico">
        <!--    FORMATO DE TABLAS    -->
    </head>
	<body>
        <script language="JavaScript" type="text/javascript">
            function click(){
            if(event.button==2){
            alert('Esta acción no está permitida');
            }
            }
            document.onmousedown=click
            //-->
        </script>
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
							<article id="contenido"></article>
                            Si desea realizar una copia de seguridad, presione aquí 
                            <a href="backup.php" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Copia de seguridad</a>
						</div>
					</div><!-- fin conteneder central admin -->
				</section><!-- fin del section del contenedor central admin -->
			</div><!-- fin de row -->
		</div><!-- fin del container-fluid -->
	</body>
</html>
<?php 
}else{
	echo "<script type='text/javascript'>alert('Necesita iniciar sesi\u00f3n para ver esta secci\u00f3n.');window.location='../ingreso.php';</script>";
}
?>