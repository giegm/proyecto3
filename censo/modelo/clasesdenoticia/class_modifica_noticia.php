<?php 
class MNoticia{
	public function modificar_noticia_por_id($id_not){

	$tit=$_POST["titulo_noticia"];
	$fcha=$_POST["fecha_noticia"];
	$descrip=$_POST["descrip_noticia"];
	$cat=$_POST["categoria_noticia"];
	$id=$_SESSION["sesion_perfil"];
	$id_not=$_POST["id_not"];

	$sql=mysqli_query(Conecta::conx(),"update noticias_web set TITULO_NOTICIA='$tit',FCHA_NOTICIA='$fcha',HORA='now()',DESCRIPC_NOTICIA='$descrip',ID_CATEGORIA='$cat',ID_LOGIN='$id' where ID_NOTICIA=$id_not")or die('Problemas al intentar modificar la noticia:' . $sql . mysqli_errno(Conecta::conx()));

	echo "<script type='text/javascript'>alert('Noticia modificada exitosamente.');window.location='../vistas/listado_de_noticias.php';</script>";
		
	}
}
?>