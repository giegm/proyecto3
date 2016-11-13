<?php
require_once("../../modelo/clasesdeconsulta/class_sexo_femenino.php");
require_once("../../modelo/clasesdeconsulta/class_sexo_masculino.php");
require_once("../../modelo/clasesdeconsulta/class_estudiantes.php");
require_once("../../modelo/clasesdeconsulta/class_menores_de_edad.php");
require_once("../../modelo/clasesdeconsulta/class_mayor_de_edad.php");
require_once("../../modelo/clasesdeconsulta/class_mayor_a_sesenta.php");
require_once("../../modelo/clasesdeconsulta/class_edades.php");
require_once("../../modelo/clasesdeconsulta/class_alquilados.php"); 
require_once("../../modelo/clasesdeconsulta/class_desempleados.php");
require_once("../../modelo/clasesdeconsulta/class_discapacitados.php");
require_once("../../modelo/clasesdeconsulta/class_pensionados.php");
require_once("../../modelo/clasesdeconsulta/class_propietarios.php");
require_once("../../modelo/clasesdeconsulta/class_trabajo_cuenta_propia.php");
require_once("../../modelo/clasesdeconsulta/class_enfermedades_graves.php");
require_once("../../modelo/clasesdeconsulta/class_asalariados.php");
require_once("../../modelo/clasesdeconsulta/class_total_censados.php");
$censo = new edades;
$General = $censo->GeneralReportefecha($_POST["edadIn"],$_POST["edadF"]);
?>
<style type="text/css">
	.datagrid table { 
		border-collapse: collapse; 
		text-align: left; 
		width: 100%; 
	} 
	.datagrid {
		font: normal 12px/150% Times New Roman, Times, serif; 
		background: #fff; overflow: hidden; 
		border: 1px solid rgba(206, 3, 3, 0.9); 
		-webkit-border-radius: 1px; 
		-moz-border-radius: 1px; 
		border-radius: 1px; 
	}
	.datagrid table td, .datagrid table th { 
		padding: 3px 10px; 
	}
	.datagrid table thead th {
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, rgba(206, 3, 3, 0.9)), color-stop(1, #80141C) );
		background:-moz-linear-gradient( center top, rgba(206, 3, 3, 0.9) 5%, #80141C 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='rgba(206, 3, 3, 0.9)', endColorstr='#80141C');
		background-color:rgba(206, 3, 3, 0.9); 
		color:#FFFFFF; 
		font-size: 14px; border-left: 1px solid #B01C26; } 
	.datagrid table thead th:first-child { border: none; }
	.datagrid table tbody td { color: #80141C; border-left: 1px solid #F7CDCD;font-size: 14px;font-weight: normal; }
	.datagrid table tbody .alt td { background: #F7CDCD; color: #80141C; }
	.datagrid table tbody td:first-child { border-left: none; }
	.datagrid table tbody tr:last-child td { border-bottom: none; }
	.datagrid table tfoot td div { border-top: 1px solid rgba(206, 3, 3, 0.9);background: #F7CDCD;} 
	.datagrid table tfoot td { padding: 0; font-size: 10px } 
	.datagrid table tfoot td div{ padding: 2px; }
	.datagrid table tfoot td ul { margin: 0; padding:0; list-style: none; text-align: right; }
	.datagrid table tfoot  li { display: inline; }
	.datagrid table tfoot li a { text-decoration: none; display: inline-block;  padding: 2px 8px; margin: 1px;color: #FFFFFF;border: 1px solid rgba(206, 3, 3, 0.9);-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, rgba(206, 3, 3, 0.9)), color-stop(1, #80141C) );background:-moz-linear-gradient( center top, rgba(206, 3, 3, 0.9) 5%, #80141C 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='rgba(206, 3, 3, 0.9)', endColorstr='#80141C');background-color:rgba(206, 3, 3, 0.9); }
	.datagrid table tfoot ul.active, .datagrid table tfoot ul a:hover { text-decoration: none;border-color: #80141C; color: #FFFFFF; background: none; background-color:rgba(206, 3, 3, 0.9);}
	div.dhtmlx_window_active, div.dhx_modal_cover_dv { position: fixed !important; }	
</style>
<div class="panel-body">
	<table>
		<thead>
			<tr>
				<th></th>			
				<th>Jefe de Familia</th>
				<th>Grupo Familiar</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Sexo Femenino</td>
				<td><center><?php echo $General["union"][0]; ?></center></td>
				<td><center></center></td>
				<td><center></center></td>						
			</tr>
			<tr class="alt">
				<td>Sexo Masculino</td>
				<td><center><?php echo $General["union"][1]; ?></center></td>
				<td><center></center></td>
				<td><center></center></td>						
			</tr>
			<tr>
				<td>Menores de Edad</td>
				<td><center>---</center></td>
				<td><center><?php echo $General["union"][2]; ?></center></td>
				<td><center></center></td>
			</tr>
			<tr class="alt">
				<td>Mayores de Edad</td>
				<td><center><?php echo $General["union"][3]; ?></center></td>
				<td><center></center></td>
				<td><center></center></td>
			</tr>
			<tr>
				<td>Mayores de 60 años</td>
					<td><center><?php echo $General["union"][4]; ?></center></td>
					<td><center></center></td>
					<td><center></center></td>
			</tr>
			<tr class="alt">
				<td>Estudiantes</td>				
				<td><center><?php echo $General["union"][6]; ?></center></td>
				<td><center></center></td>
				<td><center></center></td>
			</tr>
			<tr>
				<td>Alquilados</td>
				<td><center>---</center></td>
				<td><center>---</center></td>
				<td><center><?php echo $General["union"][7]; ?></center></td>				
			</tr>
			<tr class="alt">
				<td>Desempleados</td>
				<td><center>---</center></td>
				<td><center>---</center></td>			
				<td><center><?php echo $General["union"][8]; ?></center></td>				
			</tr>
			<tr>
				<td>Discapacitados</td>
				<td><center>---</center></td>
				<td><center>---</center></td>
				<td><center><?php echo $General["union"][9]; ?></center></td>				
			</tr>			
			<tr class="alt">
				<td>Pensionados</td>				
				<td><center><?php echo $General["union"][10]; ?></center></td>
				<td><center></center></td>
				<td><center></center></td>			
			</tr>
			<tr>
				<td>Propietarios</td>
				<td><center>---</center></td>
				<td><center>---</center></td>
				<td><center><?php echo $General["union"][11]; ?></center></td>
			</tr>
			<tr class="alt">
				<td>Trabajadores por cuenta Propia</td>				
				<td><center>---</center></td>
				<td><center>---</center></td>
				<td><center><?php echo $General["union"][12]; ?></center></td>
			</tr>
			<tr>
				<td>Enfermedades Graves</td>
				<td><center>---</center></td>
				<td><center>---</center></td>
				<td><center><?php echo $General["union"][13]; ?></center></td>				
			</tr>
			<tr class="alt">
				<td>Asalariados</td>				
				<td><center>---</center></td>
				<td><center>---</center></td>
				<td><center><?php echo $General["union"][14]; ?></center></td>
			</tr>
			<tr>
				<td><b>Total de censados</b></td>
				<td><b><center><?php echo $General["union"][15]; ?></b></center></td>
			</tr>
		</tbody>
	</table>
</div>