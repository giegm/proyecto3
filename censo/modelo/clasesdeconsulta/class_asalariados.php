<?php 
require_once("../modelo/conecta.php");


class Personas_asalariados{
	private $asalariados;
	
	public function get_total_asalariados(){
		//seleccionamos de forma multiple
		$sql = mysqli_query(Conecta::conx(),"SELECT COUNT(TIPO_INGRESO) AS asalariados FROM datos_finanzas WHERE TIPO_INGRESO = 'Diario' OR TIPO_INGRESO = 'Semanal' OR TIPO_INGRESO = 'Quincenal' OR TIPO_INGRESO = 'Mensual'") OR die('error en la consulta:' .$sql.  mysqli_errno(Conecta::conx()));
		//$sql .= "";
		if($reg=mysqli_fetch_array($sql)){
			$this->asalariados=$reg["asalariados"];
		}
		return $this->asalariados;

		mysqli_close(Conecta::conx());
	
	}


}

?>