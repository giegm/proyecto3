<?php 
require_once("../modelo/conecta.php");


class Total_censados{
	private $censados;
	private $censados_dos;
	
	public function get_censados(){
		//seleccionamos de forma multiple
		$sql = mysqli_query(Conecta::conx(),"SELECT COUNT(ID_DATAPERSONAL) AS censados FROM datos_personales WHERE ID_DATAPERSONAL != 0") or die('error en la consulta:' .$sql.  mysqli_errno(Conecta::conx()));
		//$sql .= "";
		if($reg=mysqli_fetch_array($sql)){
			$this->censados=$reg["censados"];
		}
		return $this->censados;

		mysqli_close(Conecta::conx());
	
	}

	public function get_censados_dos(){
		//seleccionamos de forma multiple
		$sql = mysqli_query(Conecta::conx(),"SELECT COUNT(ID_FAMILIARES) AS censados_dos FROM datos_familiares WHERE ID_FAMILIARES != 0") or die('error en la consulta:' .$sql.  mysqli_errno(Conecta::conx()));
		//$sql .= "";
		if($reg=mysqli_fetch_array($sql)){
			$this->censados_dos=$reg["censados_dos"];
		}
		return $this->censados_dos;

		mysqli_close(Conecta::conx());
	
	}


}

?>