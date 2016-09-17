<?php 
require_once("../modelo/conecta.php");


class Personas_propietarias{
	private $propietario;
	
	public function get_total_propietarios(){
		//seleccionamos de forma multiple
		$sql = mysqli_query(Conecta::conx(),"SELECT COUNT(FORMA_TENENCIA) AS total_propietario FROM situacion_vivienda WHERE FORMA_TENENCIA = 'Propia'") or die('error en la consulta:' .$sql.  mysqli_errno(Conecta::conx()));
		//$sql .= "";
		if($reg=mysqli_fetch_array($sql)){
			$this->propietario=$reg["total_propietario"];
		}
		return $this->propietario;

		mysqli_close(Conecta::conx());
	
	}


}

?>