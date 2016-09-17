<?php 
require_once("../modelo/conecta.php");

/*llamamos al archivo resize.php para poder utilizar sus clases que son las que generan las dimensiones de las imagenes subidas al servidor*/


class Noticia{

	public function Insertar_noticia(){

	$tit=$_POST["titulo_noticia"];
	$fcha=$_POST["fecha_noticia"];
	$descrip=$_POST["descrip_noticia"];
	$cat=$_POST["categoria_noticia"];
	$id=$_SESSION["sesion_perfil"];
	//comprobamos si ha ocurrido un error.
	if(!isset($_FILES["imagen_noticia"]) || $_FILES["imagen_noticia"]["error"] > 0){
		echo "ha ocurrido un error con la imagen." . print_r($_FILES);
	}else{
	//ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
	//y que el tamano del archivo no exceda los 16MB
		$permitidos=array("image/jpg","image/jpeg","image/gif","image/png");
		$limite_kb=16384;

	if (in_array($_FILES['imagen_noticia']['type'], $permitidos) && $_FILES['imagen_noticia']['size'] <= $limite_kb * 1024){

		$ruta = "../../imagenes_noticias/";
		opendir($ruta);
		$destino = $ruta.$_FILES['imagen_noticia']['name'];
		copy($_FILES['imagen_noticia']['tmp_name'],$destino);
		$nombre=$_FILES['imagen_noticia']['name'];
	$palabras= array('Pajuo','Coño','Marico','Verga');
	$descrip = str_ireplace($palabras, '******', $descrip);
	$tit = str_ireplace($palabras, '******', $tit);
	$sql=mysqli_query(Conecta::conx(),"insert into noticias_web(TITULO_NOTICIA,FCHA_NOTICIA,HORA,DESCRIPC_NOTICIA,IMAGEN,ID_CATEGORIA,ID_LOGIN) values('$tit','$fcha',now(),'$descrip','$nombre',$cat,$id)")or die('Problemas al intentar insertar la noticia:' . $sql . mysqli_errno(Conecta::conx()));

	echo "<script type='text/javascript'>alert('Noticia cargada exitosamente.');window.location='../vistas/listado_de_noticias.php';</script>";
		
		}else{
			echo "<script type='text/javascript'>alert('archivo no permitido, es un tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes');window.location='../vistas/noticias.php';</script>";
		}
	}
}



}//cierre de class
?>