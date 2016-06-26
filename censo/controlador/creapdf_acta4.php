~<?php 
ob_start(); 

require_once("../modelo/clasedecensos/class_listar_censos.php");
$tra=new Censos();
?>

<html>
<head>

<style>
	body{
		font-family: "Times New Roman", Georgia, Serif
		font-size: 12px;
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
		margin-top: -30px;
	}
	.div_uno p
	{
		padding: 1px;
	}
	.div_uno_derecha p
	{
		padding: 1px;
	}
	.div_table table, tr, th{
		border: 1px solid black;
		padding: 1px;
		border-collapse: collapse;
	}
	.div_table table, tr, td{
		border: 1px solid black;
		padding: 1px;
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
	<h3 id="titulos-de-tablas">CONSTANCIA DE NO POSEER VIVIENDA</h3>
	<p>ATENCIÓN</p>
	<p>Sres.: GRAN MISION VIVIENDA VENEZUELA</p>
	
	<div class="col-xs-12 col-sm-8 col-md-3">
	<center>
		<p style="text-align: justify;">El Concejo Comunal Santa Inés debidamente registrado bajo el Nº 0101210010228, ante la oficina de fundacomunal, mediante la presente hace del  conocimiento general   que la Sr.(a) #, titular de la CI. #, y residente de la 2da calle de los frailes de Catia Edif 214 piso 1 apartamento 1, y quien es parte de este concejo comunal hacemos constar que en la actualidad no pose vivienda y se encuentra habitando la residencia antes mencionada en calidad de Inquilino, por lo tanto se le agradece se sirvan brindar el apoyo necesario en cuanto a las gestiones que por ante esa institución realice la persona previamente  identificada siempre manteniéndose dentro de las  normas  legales.
		</p>

		<p style="text-align: justify;">Sin más a que hacer referencia  y esperando la mayor colaboración se despide  </p>

		<p style="text-align: justify;">CONSTANCIA QUE SE EMITE A PETICION  DE  LA  PARTE  INTERESADA  A LOS <?php setlocale(LC_TIME, "es-VE"); echo strftime("%A %d DEL MES DE %B DE %Y"); ?> </p>		
		
	</center>
	</div>		
	<br><br>
	<hr height="10px" width="50%">
	<p style="text-align: center;">ATENTAMENTE.<br>ULISES ROBLES<br>UNIDAD DE GESTION FINANCIERA<br>CI 7.885.515<br>TEL.0412-984-76-84</p>
	<p style="text-align: center;">
	ELVIA PEREZ    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	YAILET ROJAS<br>
     COMITÉ DE SALUD. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     COMITE DE CULTURA<br>
     CI: 12.561.610    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      CI: 14.015.323<br>
      TEL. 0212-883-34-32 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      TEL. 0414-180-28-76
</p>

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