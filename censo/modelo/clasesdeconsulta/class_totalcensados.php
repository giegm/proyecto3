<?php 
require_once("../modelo/conecta.php");

class Total_censados{
	private $total;
	private $total_dos;
	
	public function get_total(){
		//seleccionamos de forma multiple
		$sql = mysqli_query(Conecta::conx(),"SELECT COUNT(ID_DATAPERSONAL) AS total FROM datos_personales") or die('error en la consulta:' .$sql.  mysqli_errno(Conecta::conx()));
		//$sql .= "";
		if($reg=mysqli_fetch_array($sql)){
			$this->total=$reg["total"];
		}
		return $this->total;
		mysqli_close(Conecta::conx());
	}
	public function get_total_dos(){
		//seleccionamos de forma multiple
		$sql = mysqli_query(Conecta::conx(),"SELECT COUNT(ID_FAMILIARES) AS total_dos FROM datos_familiares") or die('error en la consulta:' .$sql.  mysqli_errno(Conecta::conx()));
		//$sql .= "";
		if($reg=mysqli_fetch_array($sql)){
			$this->total_dos=$reg["total_dos"];
		}
		return $this->total_dos;
		mysqli_close(Conecta::conx());
	}
}
?>