<?php 
require_once("../modelo/conecta.php");


class Personas_pensionadas{
	private $pensionados;
	private $pensionados_dos;
	
	public function get_total_pensionados(){
		//seleccionamos de forma multiple
		$sql = mysqli_query(Conecta::conx(),"SELECT COUNT(PENSIONADO) AS total_pensionados FROM datos_salud WHERE PENSIONADO = 'SI'") or die('error en la consulta:' .$sql.  mysqli_errno(Conecta::conx()));
		//$sql .= "";
		if($reg=mysqli_fetch_array($sql)){
			$this->pensionados=$reg["total_pensionados"];
		}
		return $this->pensionados;

		mysqli_close(Conecta::conx());
	
	}

	public function get_total_pensionados_dos(){
		//seleccionamos de forma multiple
		$sql = mysqli_query(Conecta::conx(),"SELECT COUNT(PENSIONADO_F) AS total_pensionados_dos FROM familiar_salud WHERE PENSIONADO_F = 'SI'") or die('error en la consulta:' .$sql.  mysqli_errno(Conecta::conx()));
		//$sql .= "";
		if($reg=mysqli_fetch_array($sql)){
			$this->pensionados_dos=$reg["total_pensionados_dos"];
		}
		return $this->pensionados_dos;

		mysqli_close(Conecta::conx());
	
	}


}

?>