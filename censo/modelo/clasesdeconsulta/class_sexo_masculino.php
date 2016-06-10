<?php 
require_once("../modelo/conecta.php");


class Sexo_masculino{
	private $masculinos;
	private $masculinos_dos;
	
	public function get_sexo_masculino(){
		//seleccionamos de forma multiple
		$sql = mysqli_query(Conecta::conx(),"SELECT COUNT(SEXO) AS sexo_masculino FROM datos_relacion WHERE SEXO = 'Masculino'") or die('error en la consulta:' .$sql.  mysqli_errno(Conecta::conx()));
		//$sql .= "";
		if($reg=mysqli_fetch_array($sql)){
			$this->masculinos=$reg["sexo_masculino"];
		}
		return $this->masculinos;

		mysqli_close(Conecta::conx());
	
	}

	public function get_sexo_masculino_dos(){
		//seleccionamos de forma multiple
		$sql = mysqli_query(Conecta::conx(),"SELECT COUNT(SEXO_F) AS sexo_masculino_dos FROM familiar_relacion WHERE SEXO_F = 'Masculino'") or die('error en la consulta:' .$sql.  mysqli_errno(Conecta::conx()));
		//$sql .= "";
		if($reg=mysqli_fetch_array($sql)){
			$this->masculinos_dos=$reg["sexo_masculino_dos"];
		}
		return $this->masculinos_dos;

		mysqli_close(Conecta::conx());
	
	}

}

?>