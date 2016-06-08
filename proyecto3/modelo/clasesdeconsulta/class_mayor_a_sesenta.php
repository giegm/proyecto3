<?php 

require_once("../modelo/conecta.php");

class Mayores_sesenta{
	private $data_jefes;
	private	$data_miembros;
	
	public function get_mayores_a_sesenta_jefes(){
		//seleccionamos de forma multiple
		$sql = mysqli_query(Conecta::conx(),"SELECT COUNT(EDAD) AS EDAD_J FROM datos_personales WHERE EDAD >= 60") or die('error en la consulta:' .$sql.  mysqli_errno(Conecta::conx()));
		//$sql .= "";
		if($reg=mysqli_fetch_array($sql)){
			$this->data_jefes=$reg["EDAD_J"];
		}
		return $this->data_jefes;

		mysqli_close(Conecta::conx());
	
	}

	public function get_mayores_a_sesenta_familiares(){
		//seleccionamos de forma multiple
		$sql = mysqli_query(Conecta::conx(),"SELECT COUNT(EDAD_F) AS EDAD_FAMILIAR FROM datos_familiares WHERE EDAD_F >= 60") or die('error en la consulta:' .$sql.  mysqli_errno(Conecta::conx()));
		//$sql .= "SELECT COUNT(EDAD_F) FROM datos_familiares WHERE EDAD_F >= 60";
		if($reg=mysqli_fetch_array($sql)){
			$this->data_miembros=$reg["EDAD_FAMILIAR"];
		}
		return $this->data_miembros;
		
		mysqli_close(Conecta::conx());

	}
}



?>