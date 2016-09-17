<?php 
require_once("../modelo/conecta.php");

class ENoticia{
	public function elimina_noticia_por_id($id){
		$sql=mysqli_query(Conecta::conx(),"delete from noticias_web where ID_NOTICIA=$id") or die("Error: " . $sql . mysqli_errno(Conecta::conx()));

		echo "<script type='text/javascript'>alert('La noticia ha sido eliminada.'); window.location='../vistas/listado_de_noticias.php';</script>";
	}
}
?>