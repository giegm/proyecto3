<?php
require_once('conexion.php');
$RegistrosAMostrar=4;

//estos valores los recibo por GET
if(isset($_GET['pag'])){
	$RegistrosAEmpezar=($_GET['pag']-1)*$RegistrosAMostrar;
	$PagAct=$_GET['pag'];
//caso contrario los iniciamos
}else{
	$RegistrosAEmpezar=0;
	$PagAct=1;
	
}
$Resultado=mysql_query("select C.*, DP.CI from censos as C, datos_personales as DP where C.ID_JEFE=DP.ID_DATAPERSONAL order by C.ID_CENSO desc limit $RegistrosAEmpezar, $RegistrosAMostrar",$con);

echo "<div class='panel panel-danger'>
	  <div class='panel-heading'>
			<h3 class='panel-title'>Panel title</h3>
	  </div>
	  <div class='panel-body'>
			<div class='table-responsive'>
				<table class='table table-hover'>
					<thead>
						<tr>
							<th>CODIGO</th>
							<th>FECHA</th>
							<th>HORA</th>
							<th>CEDULA</th>
							<th>ELIMINAR</th>
							<th>REPORTE</th>
						</tr>
					</thead>
					<tbody>";
while($MostrarFila=mysql_fetch_array($Resultado)){
	echo "<tr>";
	echo "<td>".$MostrarFila['ID_JEFE']."</td>";
	echo "<td>".$MostrarFila['FECHA_CENSO']."</td>";
	echo "<td>".$MostrarFila['HORA_CENSO']."</td>";
	echo "<td>".$MostrarFila['CI']."</td>";
	echo "</tr>";
}
echo "</tbody>
				</table>
				
			</div>
	  </div>
</div>";
//******--------determinar las páginas---------******//
$NroRegistros=mysql_num_rows(mysql_query("SELECT * FROM censos",$con));

$PagAnt=$PagAct-1;
$PagSig=$PagAct+1;
$PagUlt=$NroRegistros/$RegistrosAMostrar;

//verificamos residuo para ver si llevará decimales
$Res=$NroRegistros%$RegistrosAMostrar;
// si hay residuo usamos funcion floor para que me
// devuelva la parte entera, SIN REDONDEAR, y le sumamos
// una unidad para obtener la ultima pagina
if($Res>0) $PagUlt=floor($PagUlt)+1;

//desplazamiento
echo "<a onclick=\"Pagina('1')\">Primero</a> ";
if($PagAct>1) echo "<a onclick=\"Pagina('$PagAnt')\">Anterior</a>";
echo "<strong>Pagina ".$PagAct."/".$PagUlt."</strong>";
if($PagAct<$PagUlt)  echo " <a onclick=\"Pagina('$PagSig')\">Siguiente</a> ";
echo "<a onclick=\"Pagina('$PagUlt')\">Ultimo</a>";
?>
