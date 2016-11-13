~<?php 
ob_start(); 

require_once("../modelo/clasedecensos/class_listar_censos.php");
$tra=new Censos();
?>

<html>
<head>
	<style>
		body { margin: 60px;}
	</style>
</head>
<body>

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
	<center><h3 id="titulos-de-tablas">CONSTANCIA DE NO POSEER EMPLEO</h3></center>
	
	<div class="col-xs-12 col-sm-8 col-md-3">
	<center>
		<p style="text-align: justify;">El Consejo Comunal Santa Inés debidamente registrado bajo el Nº 0101210010228, ante la oficina de fundacomunal, mediante la presente hace del  conocimiento de  quien  pueda Interesar que la Sr.(a) #, titular de la CI. <?php echo $_POST["cedula"]; ?> y residente del sector Ruperto Lugo, como consejo comunal hacemos constar que el mismo(a) en la actualidad no posee un Empleo Conocido y por ser esta cabeza de hogar solicitamos a las instituciones se sirvan brindar el apoyo necesario en cuanto a las gestiones que por ante ellas realice la persona previamente  identificada siempre manteniéndose dentro de las  normas  legales.

		</p>

		<p style="text-align: justify;">Sin más a que hacer referencia  y esperando la mayor colaboración se despide  </p>

		<p style="text-align: justify;">Constancia que se emite a petición de la parte interesada <?php setlocale(LC_TIME, "es-VE"); echo strftime("%A %d del mes de %B de %Y"); ?> </p>		
		
	</center>
	</div>		
	<br>	
	<p style="text-align: center;">EL EXPONENTE.
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