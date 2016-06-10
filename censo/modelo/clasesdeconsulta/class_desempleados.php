<?php 
require_once("../modelo/conecta.php");


class Personas_desempleadas{
	private $desempleados;
	
	public function get_total_desempleados(){
		//seleccionamos de forma multiple
		$sql = mysqli_query(Conecta::conx(),"SELECT COUNT(TRABAJA) AS total_desempleados FROM datos_finanzas WHERE TRABAJA = 'NO'") or die('error en la consulta:' .$sql.  mysqli_errno(Conecta::conx()));
		//$sql .= "";
		if($reg=mysqli_fetch_array($sql)){
			$this->desempleados=$reg["total_desempleados"];
		}
		return $this->desempleados;

		mysqli_close(Conecta::conx());
	
	}


}

?>