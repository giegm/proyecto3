<?php 
require_once("../modelo/conecta.php");


class Personas_trabajo_propio{
	private $trabajo_propio;
	
	public function get_total_trabajo_propio(){
		//seleccionamos de forma multiple
		$sql = mysqli_query(Conecta::conx(),"SELECT COUNT(TRABAJA) AS trabajo_propio FROM datos_finanzas WHERE TRABAJA = 'por cuenta propia'") or die('error en la consulta:' .$sql.  mysqli_errno(Conecta::conx()));
		//$sql .= "";
		if($reg=mysqli_fetch_array($sql)){
			$this->trabajo_propio=$reg["trabajo_propio"];
		}
		return $this->trabajo_propio;

		mysqli_close(Conecta::conx());
	
	}


}

?>