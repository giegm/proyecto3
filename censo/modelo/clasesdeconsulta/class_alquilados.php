<?php 
require_once("../modelo/conecta.php");


class Personas_alquiladas{
	private $alquiladas;
	
	public function get_total_alquiladas(){
		//seleccionamos de forma multiple
		$sql = mysqli_query(Conecta::conx(),"SELECT COUNT(FORMA_TENENCIA) AS total_alquiladas FROM situacion_vivienda WHERE FORMA_TENENCIA = 'Alquilada'") or die('error en la consulta:' .$sql.  mysqli_errno(Conecta::conx()));
		//$sql .= "";
		if($reg=mysqli_fetch_array($sql)){
			$this->alquiladas=$reg["total_alquiladas"];
		}
		return $this->alquiladas;

		mysqli_close(Conecta::conx());
	
	}


}

?>