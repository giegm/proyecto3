<?php 
require_once("../class/dompdf/dompdf_config.inc.php");
$vardinamica="ejemplo de variables dinamicas";
$html="<html>
<body>
	<h3 style='background-color:gray; padding:5px;'>Hola Gente...</h3>
	<hr>
	<p>
	$vardinamica
	</p>
	<p>
	<h5>Visiten</h5><a href=''>www.ccssurround.tk</a>
	</p>
</body>
</html>";
//echo $html;

//creamos una instancia de la class dompdf
$mipdf= new DOMPDF();
//con esta linea exportamos el pdf en tamaño de hoja A4
$mipdf->set_paper("A4","portrait");
/*llamamos a los metodos de la class dompdf para trabajar y le pasamos por parametro la variable de html que guarda el contenido de la pagina*/
$mipdf->load_html(utf8_decode($html));
//renderizamos el contenido
$mipdf->render();
/*ahora le decimos que nos de una salida con un nombre que establezcamos al documento pdf nuevo.*/
$mipdf->stream('prueba.pdf');
?>