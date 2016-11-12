<?php
					require_once("../modelo/conecta.php");
					require_once("../modelo/clasesdeconsulta/class_mayor_de_edad.php");
					include "../modelo/libchart/libchart/classes/libchart.php";

					$obje=new Mayores_edad();
					$data=$obje->get_mayores_de_edad_familiares();

					$var1= $obje->get_mayores_de_edad_jefes();
					$var2= $obje->get_mayores_de_edad_familiares();
					
					header("Content-type: image/png");
					

					$chart = new PieChart(500, 260);

					$dataSet = new XYDataSet();
					$dataSet->addPoint(new Point("Jefes de familia (".$var1.")", $var1));
					$dataSet->addPoint(new Point("Miembros de familia (".$var2.")", $var2));
					$chart->setDataSet($dataSet);

					$chart->setTitle("Estadisticas de Mayores de Edad");
					$chart->render();
					?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Estadisticas</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php echo "hola"; ?>
</body>
</html>
