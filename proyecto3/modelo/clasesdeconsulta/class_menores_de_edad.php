<?php 
require_once("../modelo/conecta.php");


class Menores_edad{
	private $menores_edad;
	
	public function get_menores_edad(){
		//seleccionamos de forma multiple
		$sql = mysqli_query(Conecta::conx(),"SELECT COUNT(EDAD_F) AS menores_edad FROM datos_familiares WHERE EDAD_F >=1 and EDAD_F <= 17") or die('error en la consulta:' .$sql.  mysqli_errno(Conecta::conx()));
		//$sql .= "";
		if($reg=mysqli_fetch_array($sql)){
			$this->menores_edad=$reg["menores_edad"];
		}
		return $this->menores_edad;

		mysqli_close(Conecta::conx());
	
	}


}

?>