<?php 
require_once("../modelo/conecta.php");


class Pers_enfermedad_grave{
	private $enfermo_grave;
	
	public function get_total_enfermo_grave(){
		//seleccionamos de forma multiple
		$sql = mysqli_query(Conecta::conx(),"SELECT COUNT(PERSONA_ENFERMEDAD) AS total_enfermo_grave FROM condiciones_salud WHERE PERSONA_ENFERMEDAD = 'Diabetes' OR PERSONA_ENFERMEDAD = 'Sida' OR PERSONA_ENFERMEDAD = 'Leucemia' OR PERSONA_ENFERMEDAD = 'Tuberculosis' OR PERSONA_ENFERMEDAD = 'Hipertension' OR PERSONA_ENFERMEDAD = 'Cancer' OR PERSONA_ENFERMEDAD = 'Hepatitis' OR PERSONA_ENFERMEDAD = 'Corazon' OR PERSONA_ENFERMEDAD = 'Asma' OR PERSONA_ENFERMEDAD = 'Otra'") or die('error en la consulta:' .$sql.  mysqli_errno(Conecta::conx()));
		//$sql .= "";
		if($reg=mysqli_fetch_array($sql)){
			$this->enfermo_grave=$reg["total_enfermo_grave"];
		}
		return $this->enfermo_grave;

		mysqli_close(Conecta::conx());
	
	}


}

?>