<?php 
require_once("../modelo/clasedelogin/class_login.php");
require_once("../modelo/clasesdenoticia/class_obten_categoria.php");
if(isset($_GET["pos"])){
	$inicio=$_GET["pos"];
}else{
	$inicio=0;
}
if(isset($_SESSION["sesion_usuario"]))
{
	
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
		<script language="javascript" type="text/javascript" src="../js/funciones_noticias_ajax.js"></script>
		<script src="../js/validar_carga_noticia.js" type="text/javascript"></script>
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
			
			<h1 class="page-header pageheader-general">Listado de Noticias</h1>

			<?php
				include("../includes/operacionesadmin.php");
			?>
			<br/>
			<div class="col-md-12 well">
			<!--TABLA DE CENSOS-->
<div id="registros-paginacion">
	<?php 
	$tra=new Noticias();	
	//metodo q trae la cantidad total de registros en la tabla
	$total=$tra->get_total_noticias();

	/*dividimos la variable total la cual es igual a los registros q son los guardados en la base de datos
	entre el limite de registros mostrados por el query que es 2*/
	$num=$total / 2;
	//calculamos total por el residuo de la division de total entre 2
	$resto=$total % 2;
	$ultimo=$total - $resto;
	//metodo q trae los registros que hay en la tabla limitados de 2 en 2

	$res=$tra->obten_noticas($inicio);
	?>

		<div class="panel panel-danger">
		
		<div class="panel-heading"><h4>Existen <?php echo number_format($total,"0","","."); ?> noticias en la base de datos</h4></div>
		<div class="panel-body">
		<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>CODIGO</th>
							<th>FECHA</th>
							<th>HORA</th>
							<th>CATEGORIA</th>
							<th>RESPONSABLE</th>
							<th>OPERACIÓN 1</th>
							<th>OPERACIÓN 2</th>
						</tr>
					</thead>
						<?php 
		for($i=0;$i<sizeof($res);$i++){

			?>
				
					<tbody>
						<tr>
							<td><?php echo $res[$i]["ID_NOTICIA"]; ?></td>
							<td><?php echo $res[$i]["FCHA_NOTICIA"]; ?></td>
							<td><?php echo $res[$i]["HORA"]; ?></td>
							<td><?php echo utf8_encode($res[$i]["CATEGORIA"]); ?></td>
							<td><?php echo $res[$i]["PERFIL"]; ?></td>
							<td><a type="button" class="btn btn-success" href="javascript:void(0);" onclick="window.location='revisa_noticia.php?id=<?php echo $res[$i]["ID_NOTICIA"]; ?>';">Revisar</a></td>
							<td><a type="button" class="btn btn-danger" href="javascript:void(0);" onclick="eliminar('../controlador/elimina_noticia.php?id=<?php echo $res[$i]["ID_NOTICIA"]; ?>');">Eliminar</a></td>
						</tr>
					</tbody>


				
			
			
			<?php
		}
		?>
			</table>
		</div><!--FIN DEL TABLE RESPONSIVE-->
		</div><!--FIN DEL PANEL BODY-->
			
		</div>
		
		<!--botones para la paginacion-->
		<ul class="pagination pagination-md">
	
		<?php
		/*aqui le damos el formato correcto a la variable num con 
		number_format para que la paginación funcione sin problemas*/ 
		$a=(int)$num;
		$n=number_format($a,"0","",".");
		//cargamos los numeros de la paginación
		//tenemos un cilo que incrementara los numeros de la paginación segun los registros de la tabla
		$a=0;
		for($j=1;$j<=$total;$j++){
			if($j<=$num){//mostramos los numeros correspondientes a cada sector de la paginacion
				//echo "$j-";
				?>
				
					<li><a href="javascript:void(0);"title='Pagina <?php echo $j;?>' onclick="from('<?php echo $a ?>')"><?php echo $j; ?></a></li>
					
				<?php
			}
			$a=$a+2;
		}//fin del for

		
		?>
	
	</ul>

	
			

		
		
</div>	
<!--FIN TABLA DE CENSOS-->
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

