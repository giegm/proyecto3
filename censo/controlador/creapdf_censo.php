<?php 
ob_start(); 

require_once("../modelo/clasedecensos/class_listar_censos.php");
$tra=new Censos();
?>

<html>
<head>

<style>
	body{
		font-family: Arial, Helvetica, Verdana;
		font-size: 15px;
	}
	.contendor-general-reporte{
		
	}
	#primer_titulo{
		text-align: center;
	}
	.div_uno
	{
		width: 98%;
	}
	#td-div-uno
	{
		padding-left: 5px;		
		padding-top: 10px; 
		padding-bottom: 10px;
	}
	#td-medio-div-uno
	{
		border: none;
	}
	.div_uno_derecha 
	{
		border: 1px solid black;
		width: 30%;
		float: right;
		margin-top: -72px;
	}
	.div_uno p
	{
		padding: 5px;
	}
	.div_uno_derecha p
	{
		padding: 5px;
	}
	.div_table table, tr, th{
		border: 1px solid black;
		padding: 5px;
		border-collapse: collapse;
	}
	.div_table table, tr, td{
		border: 1px solid black;
		padding: 5px;
		border-collapse: collapse;
	}
	#tdes-datos-cc{
		border-top: none;
		border-left: none;
	}
	#titulos-de-tablas{
		text-align: center;
	}
	#tables-censo{
		width: 100%;
		margin: 0 auto; 
	}
	.header-pdf{
		border: 1px solid black;
	}
	#imagen.header-pdf{

	}
</style>
</head>
<body>
	<img id="imagen.header-pdf" src="../../images/logo.png" width="100" height="100" alt="">	

	<div class="contendor-general-reporte">
	<h2 id='primer_titulo'>Estudio Demográfico y Socioeconómico</h2>
	<center><h3>Consejo comunal "Santa Inés"</h3></center>
	<hr>
	<div class='div_uno'>
	<table id="tables-censo">
	<tr>		
		<td id="td-div-uno"><p>N° Planilla: 002152000545412 </p>		
		</td>
	</tr>
	</table>
	</div>
	<br/>
	<div class="div_contenido_censo">
	<h2 id="titulos-de-tablas">Ubicación Geográfica de la Comunidad</h2>
	<hr>
	<br/>
	<table id="tables-censo">
		<thead>
			<tr>
				<td id="tdes-datos-cc"><b>Estado:</b> Distrito Capital</td>
				<td id="tdes-datos-cc"><b>Municipio:</b> Libertador</td>
				<td id="tdes-datos-cc"><b>Parroquia:</b> Sucre</td>
				<td id="tdes-datos-cc"><b>Sector:</b> Ruperto Lugo</td>
			</tr>
		</thead>
	</table>
	<br/>
	<h2 id="titulos-de-tablas">Datos del jefe de familia</h2>
	<hr>
	</div>
	<div class='div_table'>
	<?php
	 $reg=$tra->obten_datos_censo($_GET["id"]); 
	?>
	<h3 id="titulos-de-tablas">Datos personales</h3>
	<table id="tables-censo">
		<thead>
			<tr>
				<th>Cedula</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Fecha de Nacimiento</th>
				<th>Edad</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["CI"]; ?></td>
				<td><?php echo $reg[0]["NOMBRE"]; ?></td>
				<td><?php echo $reg[0]["APELLIDO"]; ?></td>
				<td><?php echo $reg[0]["F_NAC"]; ?></td>
				<td><?php echo $reg[0]["EDAD"]; ?></td>
			</tr>
		</tbody>
	</table>
	<br/>
	<h3 id="titulos-de-tablas">Datos de contacto</h3>
	<table id="tables-censo">
		<thead>
			<tr>
				<th>Telefono celular</th>
				<th>Telefono de habitación</th>
				<th>Telefono de oficina</th>
				<th>Correo electrónico</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["TLF_CEL"]; ?></td>
				<td><?php echo $reg[0]["TLF_HAB"]; ?></td>
				<td><?php echo $reg[0]["TLF_OFI"]; ?></td>
				<td><?php echo $reg[0]["EMAIL"]; ?></td>
			</tr>
		</tbody>
	</table>
	<br/>
	<?php
	 $reg=$tra->obten_datos_censo_dos($_GET["id"]); 
	?>
	<h3 id="titulos-de-tablas">Datos de relación</h3>
	<table id="tables-censo">
		<thead>
			<tr>
				<th>Embarazo</th>
				<th>CNE</th>
				<th>Sexo</th>
				<th>Estado Civil</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["EMBARAZO"]; ?></td>
				<td><?php echo $reg[0]["CNE"]; ?></td>
				<td><?php echo $reg[0]["SEXO"]; ?></td>
				<td><?php echo $reg[0]["EDOCIVIL"]; ?></td>
			</tr>
		</tbody>
	</table>
	<br/><br/><br/><br/>
	<h3 id="titulos-de-tablas">Datos de salud</h3>
	<table id="tables-censo">
		<thead>
			<tr>
				<th>Telefono celular</th>
				<th>Telefono de habitación</th>
				<th>Telefono de oficina</th>
				<th>Correo electrónico</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["DISCAPACIDAD"]; ?></td>
				<td><?php echo $reg[0]["TIPO_DISCAPACIDAD"]; ?></td>
				<td><?php echo $reg[0]["PENSIONADO"]; ?></td>
				<td><?php echo $reg[0]["INSTITUCION"]; ?></td>
			</tr>
		</tbody>
	</table>
	<br/>
	<p>
	<?php
	 $reg=$tra->obten_datos_censo_tres($_GET["id"]); 
	?>
	<h3 id="titulos-de-tablas">Datos financieros</h3>
	<table id="tables-censo">
		<thead>
			<tr>
				<th>Trabaja</th>
				<th>Tipo de ingreso</th>
				<th>Ingreso mensual</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["TRABAJA"]; ?></td>
				<td><?php echo $reg[0]["TIPO_INGRESO"]; ?></td>
				<td><?php echo $reg[0]["INGRESO_MENSUAL"]; ?></td>
			</tr>
		</tbody>
	</table>
	<br/>
	<h3 id="titulos-de-tablas">Datos de academicos</h3>
	<table id="tables-censo">
		<thead>
			<tr>
				<th>Profesión</th>
				<th>Nivel de instrucción</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["PROFESION"]; ?></td>
				<td><?php echo $reg[0]["NIV_INSTRUCCION"]; ?></td>
			</tr>
		</tbody>
	</table>
	<br/>
	<br/>
	<h2 id="titulos-de-tablas">Datos generales de los miembros de la familia</h2>
	<hr>

	<?php
	 $reg=$tra->obten_datos_censo_cuatro($_GET["id"]); 
	?>
	<h3 id="titulos-de-tablas">Datos personales</h3>
	<table id="tables-censo">
		<thead>
			<tr>
				<th>Nombre y apellido</th>
				<th>Cedula</th>
				<th>Fecha de nacimiento</th>
				<th>Edad</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["NOMBRES_F"]; ?></td>
				<td><?php echo $reg[0]["CEDULA_F"]; ?></td>
				<td><?php echo $reg[0]["FECHANAC_F"]; ?></td>
				<td><?php echo $reg[0]["EDAD_F"]; ?></td>
			</tr>
		</tbody>
	</table>
	<br/>
	<h3 id="titulos-de-tablas">Datos academicos</h3>
	<table id="tables-censo">
		<thead>
			<tr>
				<th>Grado de instrucción</th>
				<th>Profesión</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["GRADO_INSTRUCCION_F"]; ?></td>
				<td><?php echo $reg[0]["PROFESION_F"]; ?></td>
			</tr>
		</tbody>
	</table>
	<br/><br/><br/><br/><br/><br/>
	<?php
	 $reg=$tra->obten_datos_censo_cinco($_GET["id"]); 
	?>
	<h3 id="titulos-de-tablas">Datos financieros y de relación</h3>
	<table id="tables-censo">
		<thead>
			<tr>
				<th>Ingreso mensual</th>
				<th>Parentesco</th>
				<th>CNE</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["INGMENSUAL_F"]; ?></td>
				<td><?php echo $reg[0]["PARENTESCO_F"]; ?></td>
				<td><?php echo $reg[0]["CNE_F"]; ?></td>
			</tr>
		</tbody>
	</table>
	<br/>
	<?php
	 $reg=$tra->obten_datos_censo_seis($_GET["id"]); 
	?>
	<h3 id="titulos-de-tablas">Datos de salud</h3>
	<table id="tables-censo">
		<thead>
			<tr>
				<th>Embarazo</th>
				<th>Discapacitado</th>
				<th>Pensionado</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["EMBARAZO_F"]; ?></td>
				<td><?php echo $reg[0]["DISCAPACIDAD_F"]; ?></td>
				<td><?php echo $reg[0]["PENSIONADO_F"]; ?></td>
			</tr>
		</tbody>
	</table>

	<br/><br/>

	<p>
	<h2 id="titulos-de-tablas">Datos generales del censo</h2>
	<hr>
	<?php
	 $reg=$tra->obten_datos_censo_seis($_GET["id"]); 
	 /*SITUACION ECONOMICA*/
	?>
	<h3 id="titulos-de-tablas">Situación económica</h3>
	<table id="tables-censo">
		<thead>
			<tr>
				<th>Lugar de trabajo</th>
				<th>Realiza algun tipo de actividad economica en su vivienda</th>
				<th>Ingreso familiar</th>

			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["DONDE_TRABAJA"]; ?></td>
				<td><?php echo $reg[0]["PREGUNTA_UNO"]; ?></td>
				<td><?php echo $reg[0]["ING_FAMILIAR"]; ?></td>
			</tr>
		</tbody>
	</table>
	<br/>
	<?php
	 $reg=$tra->obten_datos_censo_siete($_GET["id"]); 
	 /*************DATOS SITUACION VIVIENDA Y DETALLES VIVIENDA**************/
	?>
	<h3 id="titulos-de-tablas">Situación de vivienda y detalles</h3>
	<table id="tables-censo">
		<thead>
			<tr>
				<th>Condición del terreno</th>
				<th>Forma de tenencia</th>
				<th>OCV</th>
				<th>Terreno propio</th>
				<th>SIVIH</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["COND_TERRENO"]; ?></td>
				<td><?php echo $reg[0]["FORMA_TENENCIA"]; ?></td>
				<td><?php echo $reg[0]["OCV"]; ?></td>
				<td><?php echo $reg[0]["TERRENO_PROPIO"]; ?></td>
				<td><?php echo $reg[0]["SIVIH"]; ?></td>
			</tr>
		</tbody>
		</table>
		<table id="tables-censo">
			<thead>
			<tr>
				<th>Constancia SIVIH</th>
				<th>Cotiza L.P.H.</th>
				<th>Salubridad de la vivienda</th>

			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["CONSTANCIA_SIVIH"]; ?></td>
				<td><?php echo $reg[0]["COTIZA_LPH"]; ?></td>
				<td><?php echo $reg[0]["SALUBRIDAD_VIVIENDA"]; ?></td>
			</tr>
		</tbody>
		</table>
		<table id="tables-censo">
		<thead>
			<tr>
				<th>Tipo de vivienda</th>
				<th>Tipo/Habitaciones</th>
				<th>N° de habitaciones</th>
				<th>Tipo de paredes</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["TIPO_VIVIENDA"]; ?></td>
				<td><?php echo $reg[0]["HABITACIONES"]; ?></td>
				<td><?php echo $reg[0]["NUM_HABITACIONES"]; ?></td>
				<td><?php echo $reg[0]["TIPO_PAREDES"]; ?></td>
			</tr>
		</tbody>
		<thead>
			<tr>
				<th>Tipo de techo</th>
				<th>Enseres de la vivienda</th>
				<th>Insectos o roedores</th>
				<th>Animales domesticos</th>

			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["TIPO_TECHO"]; ?></td>
				<td><?php echo $reg[0]["ENSERES_VIVIENDA"]; ?></td>
				<td><?php echo $reg[0]["INSECTOS_ROEDORES"]; ?></td>
				<td><?php echo $reg[0]["ANIMALES_DOMESTICOS"]; ?></td>
			</tr>
		</tbody>
	</table>
	<br/><br/><br/><br/><br/>
	<table id="tables-censo">
	<thead>
			<tr>
				<th>Ayuda para vivienda</th>
				<th>Descripción</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["TIPO_AYUDA"]; ?></td>
				<td><?php echo $reg[0]["DESCRIPCION"]; ?></td>
			</tr>
		</tbody>
	</table>
	<br/>
	<?php
	 $reg=$tra->obten_datos_censo_ocho($_GET["id"]); 
/*************DATOS CONDICIONES SALUD Y SITUACION SERVICIOS*************/
	?>
	<h3 id="titulos-de-tablas">Condiciones de Salud y situación de Servicios</h3>
	<table id="tables-censo">
		<thead>
			<tr>
				<th>Personas con enfermedades</th>
				<th>Otra enfermedad</th>
				<th>Necesita ayuda para enfermos</th>
				<th>Tipo de ayuda</th>
				<th>Pers. situación de exclusión</th>
				<th>Cantidad</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["PERSONA_ENFERMEDAD"]; ?></td>
				<td><?php echo $reg[0]["OTRA_ENFERMEDAD"]; ?></td>
				<td><?php echo $reg[0]["AYUDA_ENFERMOS"]; ?></td>
				<td><?php echo $reg[0]["TIPO_AYUDA"]; ?></td>
				<td><?php echo $reg[0]["SITUACION_EXCLUSION"]; ?></td>
				<td><?php echo $reg[0]["CANTIDAD_EXCLUSION"]; ?></td>
			</tr>
		</tbody>
		</table>

		<table id="tables-censo">
			<thead>
			<tr>
				<th>Aguas blancas</th>
				<th>Medidor de agua</th>
				<th>Aguas servidas</th>
				<th>Gas</th>
			</tr>
			</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["AGUAS_BLANCAS"]; ?></td>
				<td><?php echo $reg[0]["MEDIDOR"]; ?></td>
				<td><?php echo $reg[0]["AGUAS_SERVIDAS"]; ?></td>
				<td><?php echo $reg[0]["GAS"]; ?></td>
			</tr>
		</tbody>
		<thead>
			<tr>
				<th>Sistema electrico</th>
				<th>Bombillos ahorradores</th>
				<th>Recolección de basura</th>
				<th>Telefonía</th>
			</tr>
			</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["SISTEMA_ELECTRICO"]; ?></td>
				<td><?php echo $reg[0]["BOMBILLOS_AHORRADORES"]; ?></td>
				<td><?php echo $reg[0]["RECOL_BASURA"]; ?></td>
				<td><?php echo $reg[0]["TELEFONIA"]; ?></td>
			</tr>
		</tbody>
		</table>

		<table id="tables-censo">
			<thead>
			<tr>
				<th>Transporte</th>
				<th>Medios de información</th>
				<th>Servicios comunales</th>

			</tr>
			</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["TRANSPORTE"]; ?></td>
				<td><?php echo $reg[0]["TIPO_INFORMACION"]; ?></td>
				<td><?php echo $reg[0]["SERV_COMUNALES"]; ?></td>
			</tr>
		</tbody>
	</table>
	<br/>
	<h3 id="titulos-de-tablas">Detalles de servicios y servicio electrico</h3>
	<table id="tables-censo">
	<?php
	 $reg=$tra->obten_datos_censo_nueve($_GET["id"]); 
	/*******DATOS DETALLE DE SERVICIOS Y SERV ELECTRICO***********/
	?>
		<thead>
			<tr>
				<th>Posee tanque</th>
				<th>N° litros</th>
				<th>Posee pipotes</th>
				<th>N° de pipotes</th>
				<th>Proveedor de Gas</th>
				<th>N° DE cilindros</th>
				<th>Duración del Gas</th>
				<th>Precio</th>

			</tr>
			</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["TANQUE"]; ?></td>
				<td><?php echo $reg[0]["TANQUE_LITROS"]; ?></td>
				<td><?php echo $reg[0]["PIPOTES"]; ?></td>
				<td><?php echo $reg[0]["CANT_PIPOTES"]; ?></td>
				<td><?php echo $reg[0]["PROVEEDOR_GAS"]; ?></td>
				<td><?php echo $reg[0]["CANT_CILINDROS_GAS"]; ?></td>
				<td><?php echo $reg[0]["DURACION_GAS"]; ?></td>
				<td><?php echo $reg[0]["PRECIO_GAS"]; ?></td>
			</tr>
		</tbody>
		</table>
	<table id="tables-censo">
		<thead>
			<tr>
				<th>Posee medidor</th>
				<th>Cantidad de bombillos que necesita</th>

			</tr>
			</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["MEDIDOR"]; ?></td>
				<td><?php echo $reg[0]["BOMBILLOS_NECESITA"]; ?></td>
			</tr>
		</tbody>
	</table>
	<br/>
	<h3 id="titulos-de-tablas">Participación comunitaria</h3>
	<table id="tables-censo">
	<?php
	 $reg=$tra->obten_datos_censo_diez($_GET["id"]); 
	/******PARTICIPACION COMUNITARIA Y PREGUNTAS PART COMUNITARIA*****/
	?>
		<thead>
			<tr>
				<th>Organizaciones comunitarias</th>
				<th>Cuales</th>
				<th>Participa en alguna</th>
				<th>Participa algun familiar</th>
			</tr>
			</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["ORG_COMUNITARIA"]; ?></td>
				<td><?php echo $reg[0]["DESCRIPCION"]; ?></td>
				<td><?php echo $reg[0]["PARTICIPA"]; ?></td>
				<td><?php echo $reg[0]["PARTICIPA_FAMILIAR"]; ?></td>
			</tr>
		</tbody>
		</table>
	<table id="tables-censo">
		<thead>
			<tr>
				<th>Cuales misiones estan en la comunidad</th>
				<th>Otra misión</th>
				<th>¿Cree Ud. que en la actualidad el pueblo está interviniendo en las decisiones 
				sobre cómo deben gastarse los recursos de su comunidad?</th>
			</tr>
			</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["MISIONES_COMUNIDAD"]; ?></td>
				<td><?php echo $reg[0]["OTRA_MISION"]; ?></td>
				<td><?php echo $reg[0]["P_UNO"]; ?></td>
			</tr>
		</tbody>
	</table>
	<br/><br/><br/>
		<table id="tables-censo">
		<thead>
			<tr>
				<th>¿Está de acuerdo, que según la Constitución, es ahora el Pueblo organizado quien 
				debe tener el protagonismo y el Poder para decidir sobre como invertir el presupuesto en su comunidad?</th>
				<th>¿Tiene información sobre la propuesta de creación de consejos comunales?</th>
				<th>¿Estaría dispuesto(a) a apoyar y participar en la creación de un consejo comunal en su comunidad?</th>

			</tr>
			</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["P_DOS"]; ?></td>
				<td><?php echo $reg[0]["P_TRES"]; ?></td>
				<td><?php echo $reg[0]["P_CUATRO"]; ?></td>
			</tr>
		</tbody>
		<thead>
			<tr>
				<th>Participa Ud. o asiste a las asambleas de Ciudadanos (as)</th>
				<th>Como cree Ud. Que se van a resolver los problemas del sector</th>
				<th>Quien cree que va a a resolver los problemas del sector</th>
			</tr>
			</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["P_CINCO"]; ?></td>
				<td><?php echo $reg[0]["P_SEIS"]; ?></td>
				<td><?php echo $reg[0]["P_SIETE"]; ?></td>
			</tr>
		</tbody>
		<thead>
			<tr>
				<th>Que tipo de proyectos le gustaría que se ejecutaran o que se desarrollaran en su comunidad</th>
				<th>Como apoyaría Ud. A que se realicen y ejecuten los proyectos</th>
				<th>Que tipo de compromiso tiene Ud. con su sector para el mejoramiento</th>
			</tr>
			</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["P_OCHO"]; ?></td>
				<td><?php echo $reg[0]["P_NUEVE"]; ?></td>
				<td><?php echo $reg[0]["P_DIEZ"]; ?></td>
			</tr>
		</tbody>
		
		<thead>
			<tr>
				<th>Que opina Ud. del censo energético</th>
				<th>¿De crearse un consejo comunal en su comunidad, en cual área de trabajo 
				le gustaría participar? (Marque 3 opciones)</th>
				<th>Otra area</th>	
			</tr>
			</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["P_ONCE"]; ?></td>
				<td><?php echo $reg[0]["P_DOCE"]; ?></td>
				<td><?php echo $reg[0]["OTRA_AREA"]; ?></td>
			</tr>
		</tbody>
	</table>
	<table id="tables-censo">
	<thead>
			<tr>
				
				<th>En orden de importancia: ¿Cuáles cree Ud. que son las principales potencialidades y 
				aspectos ventajosos que tiene su comunidad?</th>
				<th>En orden de importancia ¿Cuáles cree Ud. que son los principales problemas y debilidades 
				de su comunidad?</th>
			</tr>
			</thead>
		<tbody>
			<tr>
				<td><?php echo $reg[0]["P_CATORCE"]; ?></td>
				<td><?php echo $reg[0]["P_QUINCE"]; ?></td>
			</tr>
		</tbody>
	</table>
	</div><!--FIN DEL DIV CONTENEDOR DE LAS TABLAS-->
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