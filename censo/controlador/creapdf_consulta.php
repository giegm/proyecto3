~<?php 
ob_start(); 

require_once("../modelo/clasesdeconsulta/class_sexo_femenino.php");
require_once("../modelo/clasesdeconsulta/class_sexo_masculino.php");
require_once("../modelo/clasesdeconsulta/class_estudiantes.php");
require_once("../modelo/clasesdeconsulta/class_menores_de_edad.php");
require_once("../modelo/clasesdeconsulta/class_mayor_de_edad.php");
require_once("../modelo/clasesdeconsulta/class_mayor_a_sesenta.php");
require_once("../modelo/clasesdeconsulta/class_alquilados.php"); 
require_once("../modelo/clasesdeconsulta/class_desempleados.php");
require_once("../modelo/clasesdeconsulta/class_discapacitados.php");
require_once("../modelo/clasesdeconsulta/class_pensionados.php");
require_once("../modelo/clasesdeconsulta/class_propietarios.php");
require_once("../modelo/clasesdeconsulta/class_trabajo_cuenta_propia.php");
require_once("../modelo/clasesdeconsulta/class_enfermedades_graves.php");
require_once("../modelo/clasesdeconsulta/class_asalariados.php");

?>

<html>
<head>

<style type="text/css">
	.datagrid table { 
		border-collapse: collapse; 
		text-align: left; 
		width: 100%; 
	} 
	.datagrid {
		font: normal 12px/150% Times New Roman, Times, serif; 
		background: #fff; overflow: hidden; 
		border: 1px solid #991821; 
		-webkit-border-radius: 1px; 
		-moz-border-radius: 1px; 
		border-radius: 1px; 
	}
	.datagrid table td, .datagrid table th { 
		padding: 3px 10px; 
	}
	.datagrid table thead th {
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #991821), color-stop(1, #80141C) );
		background:-moz-linear-gradient( center top, #991821 5%, #80141C 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#991821', endColorstr='#80141C');
		background-color:#991821; 
		color:#FFFFFF; 
		font-size: 16px; font-weight: bold; border-left: 1px solid #B01C26; } 
	.datagrid table thead th:first-child { border: none; }
	.datagrid table tbody td { color: #80141C; border-left: 1px solid #F7CDCD;font-size: 16px;font-weight: normal; }
	.datagrid table tbody .alt td { background: #F7CDCD; color: #80141C; }
	.datagrid table tbody td:first-child { border-left: none; }
	.datagrid table tbody tr:last-child td { border-bottom: none; }
	.datagrid table tfoot td div { border-top: 1px solid #991821;background: #F7CDCD;} 
	.datagrid table tfoot td { padding: 0; font-size: 10px } 
	.datagrid table tfoot td div{ padding: 2px; }
	.datagrid table tfoot td ul { margin: 0; padding:0; list-style: none; text-align: right; }
	.datagrid table tfoot  li { display: inline; }
	.datagrid table tfoot li a { text-decoration: none; display: inline-block;  padding: 2px 8px; margin: 1px;color: #FFFFFF;border: 1px solid #991821;-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #991821), color-stop(1, #80141C) );background:-moz-linear-gradient( center top, #991821 5%, #80141C 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#991821', endColorstr='#80141C');background-color:#991821; }
	.datagrid table tfoot ul.active, .datagrid table tfoot ul a:hover { text-decoration: none;border-color: #80141C; color: #FFFFFF; background: none; background-color:#991821;}
	div.dhtmlx_window_active, div.dhx_modal_cover_dv { position: fixed !important; }	
</style>
<style type="text/css">
	.datagrid table { 
		border-collapse: collapse; 
		text-align: left; 
		width: 100%; 
	} 
	.datagrid {
		font: normal 12px/150% Times New Roman, Times, serif; 
		background: #fff; overflow: hidden; 
		border: 1px solid #991821; 
		-webkit-border-radius: 1px; 
		-moz-border-radius: 1px; 
		border-radius: 1px; 
	}
	.datagrid table td, .datagrid table th { 
		padding: 3px 10px; 
	}
	.datagrid table thead th {
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #991821), color-stop(1, #80141C) );
		background:-moz-linear-gradient( center top, #991821 5%, #80141C 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#991821', endColorstr='#80141C');
		background-color:#991821; 
		color:#FFFFFF; 
		font-size: 16px; font-weight: bold; border-left: 1px solid #B01C26; } 
	.datagrid table thead th:first-child { border: none; }
	.datagrid table tbody td { color: #80141C; border-left: 1px solid #F7CDCD;font-size: 16px;font-weight: normal; }
	.datagrid table tbody .alt td { background: #F7CDCD; color: #80141C; }
	.datagrid table tbody td:first-child { border-left: none; }
	.datagrid table tbody tr:last-child td { border-bottom: none; }
	.datagrid table tfoot td div { border-top: 1px solid #991821;background: #F7CDCD;} 
	.datagrid table tfoot td { padding: 0; font-size: 10px } 
	.datagrid table tfoot td div{ padding: 2px; }
	.datagrid table tfoot td ul { margin: 0; padding:0; list-style: none; text-align: right; }
	.datagrid table tfoot  li { display: inline; }
	.datagrid table tfoot li a { text-decoration: none; display: inline-block;  padding: 2px 8px; margin: 1px;color: #FFFFFF;border: 1px solid #991821;-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #991821), color-stop(1, #80141C) );background:-moz-linear-gradient( center top, #991821 5%, #80141C 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#991821', endColorstr='#80141C');background-color:#991821; }
	.datagrid table tfoot ul.active, .datagrid table tfoot ul a:hover { text-decoration: none;border-color: #80141C; color: #FFFFFF; background: none; background-color:#991821;}
	div.dhtmlx_window_active, div.dhx_modal_cover_dv { position: fixed !important; }	
</style><body>
	<img id="imagen.header-pdf" src="../../images/logo.png" width="100" height="100" alt="">
	<div class="col-xs-12 col-sm-8 col-md-3">
	<center>
		<h1>Consulta de Censo demográfico y socioeconómico</h1>
	</center>
	</div>			
	
	<div class="div_contenido_censo"><br>
	<h3 id="titulos-de-tablas">Cuadro de Consultas</h3>	
	
	<div class="col-xs-12 col-sm-8 col-md-3">
	<center>
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
				<td>
					<?php               
	                $obj = new Sexo_femenino();	                         		              	
	                echo $obj->get_sexo_femenino($obj);
	                ?>
				</td>
				<td>data</td>
				<td>
					data
				</td>
				
			</tr>
			<tr class="alt">
				<td>Sexo Masculino</td>
				<td>
					<?php               
	                $obj = new Sexo_masculino();
	                echo $obj->get_sexo_masculino($obj);
	                ?>
				</td>
				<td>data</td>
				<td>data</td>
				
			</tr>
			<tr>
				<td>Menores de Edad</td>
				<td>---</td>
				<td>
					<?php
					 $obj = new Menores_edad();             
                	echo $obj->get_menores_edad($obj);                
					?>
				</td>
				<td>
					<?php
					 $obj = new Menores_edad();             
                	echo $obj->get_menores_edad($obj);                
					?>
				</td>
				
				
			</tr>
			<tr class="alt">
				<td>Mayores de Edad</td>
				<td>
					<?php
					 $obj = new Mayores_edad();
                  	echo $obj->get_mayores_de_edad_jefes($obj);
					 ?>
				</td>
				<td>
					<?php
					$obj = new Mayores_edad();
                  	echo $obj->get_mayores_de_edad_familiares($obj);
					 ?>
				</td>
				<td>
					<?php
					$obj = new Mayores_edad();             
	                $obj->get_mayores_de_edad_jefes();
	                $obj->get_mayores_de_edad_familiares();

	                $mayorestotal= $obj->get_mayores_de_edad_jefes() + $obj->get_mayores_de_edad_familiares();
	                echo $mayorestotal;
	                ?>
				</td>
			</tr>
			<tr>
				<td>Mayores de 60 años</td>
				<td>
					<?php
					$obj = new Mayores_sesenta();             
                	echo $obj->get_mayores_a_sesenta_jefes($obj);  
					?>
				</td>
				<td>
					<?php
					$obj = new Mayores_sesenta();             
                	echo $obj->get_mayores_a_sesenta_familiares($obj);  
					?>
				</td>
				<td>
					<?php
					$obj = new Mayores_sesenta();             
	                $obj->get_mayores_a_sesenta_jefes();
	                $obj->get_mayores_a_sesenta_familiares();

	                $setentatotal= $obj->get_mayores_a_sesenta_jefes() + $obj->get_mayores_a_sesenta_familiares();
	                echo $setentatotal;
	                ?>
				</td>
				
			</tr>
			<tr class="alt">
				<td>Estudiantes</td>				
				<td>
					<?php
					$obj = new Estudiantes();               	                     
	                echo $obj->get_total_estudiantes($obj);
					 ?>
				</td>
				<td>
					<?php
					$obj = new Estudiantes();               	                     
	                echo $obj->get_total_estudiantes_dos($obj);
					 ?>
				</td>
				<td><?php
					$obj = new Estudiantes();             
	                $obj->get_total_estudiantes();
	                $obj->get_total_estudiantes_dos();
	                $estudiantestotal= $obj->get_total_estudiantes() + $obj->get_total_estudiantes_dos();
	                echo $estudiantestotal;
	                ?>
	            </td>
			</tr>
			<tr>
				<td>Alquilados</td>
				<td>---</td>
				<td>---</td>
				<td>
					<?php
					$obj = new Personas_alquiladas();
					echo $obj->get_total_alquiladas($obj);  
					?>
				</td>				
			</tr>
			<tr class="alt">
				<td>Desempleados</td>
				<td>---</td>
				<td>---</td>			
				<td>
					<?php
					$obj = new Personas_desempleadas();             
                	echo $obj->get_total_desempleados($obj);                
					?>
				</td>				
			</tr>
			<tr>
				<td>Discapacitados</td>
				<td>---</td>
				<td>---</td>
				<td>
					<?php
					$obj = new Personas_discapacitadas();
                    echo $obj->get_total_discapacitados($obj);                 
					?>
				</td>				
			</tr>			
			<tr class="alt">
				<td>Pensionados</td>				
				<td>
					<?php
					$obj = new Personas_pensionadas();
					echo $obj->get_total_pensionados($obj);;
					?>
				</td>
				<td>
					<?php
					$obj = new Personas_pensionadas();
					echo $obj->get_total_pensionados_dos($obj);;
					?>
				</td>
				<td>
					<?php
					$obj = new Personas_pensionadas();
                    $obj->get_total_pensionados();
	                $obj->get_total_pensionados_dos();
	                $totalpns = $obj->get_total_pensionados() + $obj->get_total_pensionados_dos();
	                echo $totalpns;
	                ?>
				</td>			
			</tr>
			<tr>
				<td>Propietarios</td>
				<td>---</td>
				<td>---</td>
				<td>
					<?php
					$obj = new Personas_propietarias();             
	                echo $obj->get_total_propietarios($obj);  
	                ?>					
				</td>
				
			</tr>
			<tr class="alt">
				<td>Trabajadores por cuenta Propia</td>				
				<td>---</td>
				<td>---</td>
				<td>
					<?php
					$obj = new Personas_trabajo_propio();             
	                echo $obj->get_total_trabajo_propio($obj); 
	                ?>				
				</td>
			</tr>
			<tr>
				<td>Enfermedades Graves</td>
				<td>---</td>
				<td>---</td>
				<td>
					<?php
					$obj = new Pers_enfermedad_grave();             
	                echo $obj->get_total_enfermo_grave($obj);  
	                ?>
				</td>				
			</tr>
			<tr class="alt">
				<td>Asalariados</td>				
				<td>---</td>
				<td>---</td>
				<td>
					<?php
					$obj = new Personas_asalariados();             
	                echo $obj->get_total_asalariados($obj);  
	                ?>
				</td>
			</tr>
	</table>
	</center>
	</div>	
</body>
</html>



<?php

require_once("../modelo/dompdf/dompdf_config.inc.php");
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = "Censo ".date("Y-m-d").'.pdf';
file_put_contents($filename, $pdf);
$dompdf->stream($filename);


/*
//echo $html;

//creamos una instancia de la class dompdf
$mipdf= new DOMPDF();
//con esta linea exportamos el pdf en tamaño de hoja A4
$mipdf->set_paper("A4","portrait");
/*llamamos a los metodos de la class dompdf para trabajar y le pasamos por parametro la variable de html que guarda el contenido de la pagina*/
/*$mipdf->load_html(utf8_decode($html));
//renderizamos el contenido
$mipdf->render();
/*ahora le decimos que nos de una salida con un nombre que establezcamos al documento pdf nuevo.*/
/*$mipdf->stream('reporte_censo.pdf');*/


?>