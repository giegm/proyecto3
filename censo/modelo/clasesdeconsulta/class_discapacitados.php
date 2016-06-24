<?php 
require_once("../modelo/conecta.php");


class Personas_discapacitadas{
	private $discapacitados;
	private $discapacitados_dos;
	
	public function get_total_discapacitados(){
		//seleccionamos de forma multiple
		$sql = mysqli_query(Conecta::conx(),"SELECT COUNT(DISCAPACIDAD) AS discapacitados FROM datos_salud WHERE DISCAPACIDAD = 'SI'") or die('error en la consulta:' .$sql.  mysqli_errno(Conecta::conx()));
		//$sql .= "";
		if($reg=mysqli_fetch_array($sql)){
			$this->discapacitados=$reg["discapacitados"];
		}
		return $this->discapacitados;

		mysqli_close(Conecta::conx());
	
	}

}

?>