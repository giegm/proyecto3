<?php  
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
require_once("../modelo/clasesdeconsulta/class_totalcensados.php");
?>
<script src="js/Chart.js"></script>
<div id="canvas-holder">
	<canvas id="chart-area" width="300" height="300"></canvas>
	<canvas id="chart-area2" width="300" height="300"></canvas>
	<canvas id="chart-area3" width="600" height="300"></canvas>
	<canvas id="chart-area4" width="600" height="300"></canvas>
</div>

<?php  
    $obj = new Total_censados();            
    $obj->get_total();
    $obj->get_total_dos();
    $todosxf = $obj->get_total() + $obj->get_total_dos(); 

    $obj = new Mayores_edad(); 
    $obj->get_mayores_de_edad_jefes(); 
    $obj->get_mayores_de_edad_familiares(); 
    $mayorestotal= $obj->get_mayores_de_edad_jefes() + $obj->get_mayores_de_edad_familiares();
?>
<script>
var pieData = 	[
					{value: <?php echo $todosxf;?>,color:"#0b82e7",highlight: "#0c62ab",label: "Google Chrome"},
					{value: <?php echo $mayorestotal; ?>,color:"#e3e860",highlight: "#a9ad47",label: "Google Chrome"}
				];
var ctx = document.getElementById("chart-area").getContext("2d");
window.myPie = new Chart(ctx).Pie(pieData);	
</script>
</body>
</html>
