<?php 
require_once("../modelo/conecta.php");


class Personas_censados{
	private $censadas;
	
	public function POST_censados(){
		//seleccionamos de forma multiple
		$sql = mysqli_query(Conecta::conx(),"SELECT COUNT(datos_personales.CI, datos_familiares.CEDULA_F) AS censados FROM datos_personales, datos_familiares WHERE datos_personales.CI = 'ci' AND datos_familiares.CEDULA_F = 'cedf[]'") or die('cedula no registrada' .$sql.  mysqli_errno(Conecta::conx()));
		//$sql .= "";		

		if($reg=mysqli_fetch_array($sql)){
			$this->censadas=$reg["censados"];
		}
		return $this->censadas;

		mysqli_close(Conecta::conx());
	
	}


}

?>