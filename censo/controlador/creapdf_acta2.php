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
	<h3 id="titulos-de-tablas">CARTA DE POSTULACIÓN</h3>
	<p>DE: Consejo Comunal "Santa Inés"</p>
	<p>Para: #</p>
	<p>ATENCIÓN: #</p>	
	
	<div class="col-xs-12 col-sm-8 col-md-3">
	<center>
		<p style="text-align: justify;">Ante todo reciba un saludo Bolivariano y Revolucionario enmarcado en este proceso de consolidación de la nueva republica y el socialismo del siglo XXI y en aras de un mundo de inclusión social, cultural, multiétnico y revolucionario.
		Los voceros y voceras del Concejo Comunal Santa Inés, Tenemos el agrado de dirigirnos a usted, en la oportunidad de manifestarle nuestra voluntad de postular al  ciudadano, #, titular de la cedula de identidad V- #.Para optar por un cupo en esa casa de estudios en el área de #, hemos de hacer notar que esta ciudadano (a) forma parte de este concejo comunal por ser la vocero principal del comité de educación, en tal sentido mucho sabríamos agradecer la receptividad de la presente.
		</p>

		<p style="text-align: justify;">Sin más a que hacer referencia se despide</p>		
		
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