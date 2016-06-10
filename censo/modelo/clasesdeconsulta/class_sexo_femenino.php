<?php 
require_once("../modelo/conecta.php");


class Sexo_femenino{
	private $femeninas;
	private $femeninas_dos;
	
	public function get_sexo_femenino(){
		//seleccionamos de forma multiple
		$sql = mysqli_query(Conecta::conx(),"SELECT COUNT(SEXO) AS sexo_femenino FROM datos_relacion WHERE SEXO = 'Femenino'") or die('error en la consulta:' .$sql.  mysqli_errno(Conecta::conx()));
		//$sql .= "";
		if($reg=mysqli_fetch_array($sql)){
			$this->femeninas=$reg["sexo_femenino"];
		}
		return $this->femeninas;

		mysqli_close(Conecta::conx());
	
	}

	public function get_sexo_femenino_dos(){
		//seleccionamos de forma multiple
		$sql = mysqli_query(Conecta::conx(),"SELECT COUNT(SEXO_F) AS sexo_femenino_dos FROM familiar_relacion WHERE SEXO_F = 'Femenino'") or die('error en la consulta:' .$sql.  mysqli_errno(Conecta::conx()));
		//$sql .= "";
		if($reg=mysqli_fetch_array($sql)){
			$this->femeninas_dos=$reg["sexo_femenino_dos"];
		}
		return $this->femeninas_dos;

		mysqli_close(Conecta::conx());
	
	}


}

?>