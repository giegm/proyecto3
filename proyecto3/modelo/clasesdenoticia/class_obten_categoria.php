<?php 
require_once("../modelo/conecta.php");

class Noticias{
	private $categorias;
	private $noticias;

	public function __construct(){
		$this->categorias=array();
		$this->noticias=array();
	}

	public function obten_categorias(){
		$sql=mysqli_query(Conecta::conx(),"SELECT ID_CATEGORIA, CATEGORIA FROM categoria_noticia") or die('Error: ' . $sql . mysqli_errno(Conecta::conx()));

		while($reg=mysqli_fetch_assoc($sql)){
			$this->categorias[]=$reg;
		}

		return $this->categorias;
	}

	public function obten_noticas($inicio){
		$sql=mysqli_query(Conecta::conx(),"select c.*, p.PERFIL, v.CATEGORIA from noticias_web as c, perfiles as p, categoria_noticia as v where c.ID_PERFIL=p.ID_PERFIL and c.ID_CATEGORIA=v.ID_CATEGORIA order by c.ID_NOTICIA desc limit $inicio,2") or die('error al consultar noticias: ' . $sql . mysqli_errno(Conecta::conx()));

		while($reg=mysqli_fetch_array($sql)){
			$this->noticias[]=$reg;
		}
		return $this->noticias;
	}

	//total de noticias
	public function get_total_noticias(){
		$sql=mysqli_query(Conecta::conx(),"SELECT COUNT(*) AS CUANTOS FROM noticias_web")or die('Problemas al intentar traer la cantidad de noticias: ' . $sql . mysqli_errno(Conecta::conx()));

		while($reg=mysqli_fetch_array($sql)){
			$this->total_censos=$reg["CUANTOS"];
		}
		return $this->total_censos;
	}

}//FIN DE LA CLASS
?>