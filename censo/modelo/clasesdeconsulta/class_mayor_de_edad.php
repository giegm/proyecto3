<?php 

require_once("../modelo/conecta.php");


class Mayores_edad{

	private $jefe_mayor;
	private $miembro_mayor;

	public function get_mayores_de_edad_jefes(){
		$sql=mysqli_query(Conecta::conx(),"SELECT COUNT(EDAD) AS jefes_mayores_edad FROM datos_personales WHERE EDAD >=18 and EDAD <=59 ") or die('Error en la consulta:' . $sql . mysqli_errno(Conecta::conx()));

		if($reg=mysqli_fetch_array($sql)){
			$this->jefe_mayor=$reg["jefes_mayores_edad"];
		}

		return $this->jefe_mayor;

		mysqli_close(Conecta::conx());
	}

	public function get_mayores_de_edad_familiares(){
		$sql=mysqli_query(Conecta::conx(),"SELECT COUNT(EDAD_F) AS familiares_mayores_edad FROM datos_familiares WHERE EDAD_F >=18 and EDAD_F <=59 ") or die('Error en la consulta:' . $sql . mysqli_errno(Conecta::conx()));

		if($reg=mysqli_fetch_array($sql)){
			$this->miembro_mayor=$reg["familiares_mayores_edad"];
		}

		return $this->miembro_mayor;

		mysqli_close(Conecta::conx());
	}
}

?>