<?php  
require_once("../modelo/clasesdenoticia/class_obten_categoria.php");
//print_r($_GET);
?>
<?php 
	$tra=new Noticias();
	//metodo q trae la cantidad total de registros en la tabla comunas
	$total=$tra->get_total_noticias();

	/*dividimos la variable total la cual es igual a los registros q son los guardados en la base de datos
	entre el limite de registros mostrados por el query que es 2*/
	$num=$total / 2;
	//calculamos total por el residuo de la division de total entre 2
	$resto=$total % 2;
	$ultimo=$total - $resto;
	//metodo q trae los registros que hay en la tabla comunas limitados de 2 en 2

	$res=$tra->obten_noticas($_GET["pos"]);
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
		//tenemos un cilo que incrementara los numeros de la paginación segun los registros de la tabla comunas
		$a=0;
		for($j=1;$j<=$total;$j++){
			if($j<=$num){//mostramos los numeros correspondientes a cada sector de la paginacion
				//echo "$j-";
				if($a==$_GET["pos"]){
					$estilo='style="font-weight:bold"';
				}else{
					$estilo="";
				}
				?>
				<li><a href="javascript:void(0);" <?php echo $estilo; ?> title='Pagina <?php echo $j;?>' onclick="from('<?php echo $a ?>')"><?php echo $j; ?></a></li>
				
				<?php
			}
			$a=$a+2;
		}//fin del for

		//ESTE SEGMENTO CORREPONDE AL NUMERO 9 DE LA PAGINACION.
		if(count($res)==2){
			?>
			<li><a href="javascript:void(0);" title='Pagina <?php echo number_format($n)+1;?>' onclick="from('<?php echo $ultimo ?>')"><?php echo number_format($n)+1; ?></a></li>
			<?php
		}else{
			echo "<li><a style='font-weight:bold'>";
			echo number_format($n)+1;
			echo "</b>";	
			echo "</li></a>";
			
		}
		
		?>


	</ul>