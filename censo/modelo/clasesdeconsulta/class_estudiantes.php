<?php 
require_once("../modelo/conecta.php");


class Estudiantes{
	private $estudiantes;
	private $estudiantes_dos;
	
	public function get_total_estudiantes(){
		//seleccionamos de forma multiple
		$sql = mysqli_query(Conecta::conx(),"SELECT COUNT(PROFESION) AS estudiantes FROM datos_academicos WHERE PROFESION = 'Estudiante'") or die('error en la consulta:' .$sql.  mysqli_errno(Conecta::conx()));
		//$sql .= "";
		if($reg=mysqli_fetch_array($sql)){
			$this->estudiantes=$reg["estudiantes"];
		}
		return $this->estudiantes;

		mysqli_close(Conecta::conx());
	
	}

	public function get_total_estudiantes_dos(){
		//seleccionamos de forma multiple
		$sql = mysqli_query(Conecta::conx(),"SELECT COUNT(PROFESION_F) AS estudiantes_dos FROM familiar_academico WHERE PROFESION_F = 'Estudiante'") or die('error en la consulta:' .$sql.  mysqli_errno(Conecta::conx()));
		//$sql .= "";
		if($reg=mysqli_fetch_array($sql)){
			$this->estudiantes_dos=$reg["estudiantes_dos"];
		}
		return $this->estudiantes_dos;

		mysqli_close(Conecta::conx());
	
	}


}

?>