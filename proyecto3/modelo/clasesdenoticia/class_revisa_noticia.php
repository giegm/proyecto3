<?php 
require_once("../modelo/conecta.php");

class RNoticia{
	private $data=array();
	private $datos=array();

	public function get_noticia_por_id($id){
		$sql=mysqli_query(Conecta::conx(),"select * from noticias_web where ID_NOTICIA=$id")or die('error:' . $sql . mysqli_errno(Conecta::conx()));

		while($reg=mysqli_fetch_assoc($sql)){
			$this->data[]=$reg;
		}
		return $this->data;
	}
}
?>