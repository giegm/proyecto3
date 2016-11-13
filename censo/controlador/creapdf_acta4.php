<?php 
ob_start(); 
require_once("../modelo/clasedeacta/class_censados.php");

$obj=new Personas_censados();

?>

<html>
<head>

<style>
	body { margin: 60px;}
</style>
</head>

<body>
<script>
		var mydate=new Date();
		var year=mydate.getYear(); 
		if (year < 1000) year+=1900; 
		var day=mydate.getDay(); 
		var month=mydate.getMonth(); 
		var daym=mydate.getDate(); 
		if (daym<10) daym="0"+daym; 
		var dayarray=new Array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
		var montharray=new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto",
		"Septiembre","Octubre","Noviembre","Diciembre"); 
	</script>
<div class="col-xs-12 col-sm-8 col-md-3">
	<table>
		<thead>
			<tr>
				<th><img id="imagen.header-pdf" src="../../images/logo.png" width="100" height="100" alt=""></th>
				<th><center>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
					</center></th>
				<th><center>
						REPÚBLICA BOLIVARIANA DE VENEZUELA<br>
						DISTRITO CAPITAL MUNICIPIO LIBERTADOR<br>
						CONSEJO COMUNAL "SANTA INÉS"<br>
						REG: Nº 0101210010228  RIF: J-29967415-0<br>
						2da Calle de los Frailes de Catia<br>
						Callejón San Antonio <br>
						TEL 0412-984-76-84
					</center></th>
			</tr>
		</thead>
	</table>

</div>
	<div class="div_contenido_censo"><br>
	<center><h3 id="titulos-de-tablas">CONSTANCIA DE NO POSEER VIVIENDA</h3></center>
	<pstyle="text-align: justify;">ATENCIÓN</p>
	<pstyle="text-align: justify;">Sres.: <?php  echo $_POST['dirigido']?></p>

	<div class="col-xs-12 col-sm-8 col-md-3">
		<center>
			<p style="text-align: justify;">El Consejo Comunal Santa Inés debidamente registrado bajo el Nº 0101210010228, ante la oficina de fundacomunal, mediante la presente hace del  conocimiento general   que la Sr.(a) #, titular de la CI. <?php echo $_POST["cedula"]; ?>, y residente del sector Ruperto Lugo, quien es parte de este consejo comunal hacemos constar que en la actualidad no pose vivienda y se encuentra habitando la residencia antes mencionada en calidad de Inquilino, por lo tanto se le agradece se sirvan brindar el apoyo necesario en cuanto a las gestiones que por ante esa institución realice la persona previamente  identificada siempre manteniéndose dentro de las  normas  legales.</p>
			<p style="text-align: justify;">Sin más a que hacer referencia  y esperando la mayor colaboración se despide.</p>	
			<p style="text-align: justify;">Constancia que se expide a petición de la parte interesada en Caracas <?php setlocale(LC_TIME, "es-VE"); echo strftime("%A %d del mes de %B de %Y"); ?>.  </p>
		</center>
	</div>		
	<br><br>
	<p style="text-align: center;">EL EXPONENTE. 
	<br><br>
	<br>
	<p style="text-align: justify;">
	___________________ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___________________ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ___________________
	<br>
	&nbsp;&nbsp;ELVIA PEREZ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	ULISES ROBLES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	YAILET ROJAS
	<br>
	COMITÉ DE SALUD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	UNIDAD DE GESTION  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	COMITE DE CULTURA
	<br>
	&nbsp;&nbsp;&nbsp;CI: 12.561.610&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	FINANCIERA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	CI: 14.015.323
	<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	CI 7.885.515
    <br>
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