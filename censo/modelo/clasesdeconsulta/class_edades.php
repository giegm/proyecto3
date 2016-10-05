<?php
require_once("../modelo/conecta.php");

class edades{
	private $data_jefes;
	private	$data_miembros;
	
	public function get_edades(){
		//seleccionamos de forma multiple
		$sql = mysqli_query(Conecta::conx(),"SELECT COUNT(EDAD and EDAD_F) AS EDAD_TOTAL FROM datos_personales and datos_familiares WHERE EDAD <= 1 and EDAD_F <= 1") or die('error en la consulta:' .$sql.  mysqli_errno(Conecta::conx()));
		//$sql .= "";
		if($reg=mysqli_fetch_array($sql)){
			$this->data_jefes=$reg["EDAD_TOTAL"];
		}
		return $this->data_jefes;

		mysqli_close(Conecta::conx());
	
	}
}
?>