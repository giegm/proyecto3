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

		//este es el archivo temporal
		$imagen_temporal  = $_FILES['imagen_noticia']['tmp_name'];
		//este es el tipo de archivo
		$tipo = $_FILES['imagen_noticia']['type'];
		//leer el archivo temporal en binario
        $fp = fopen($imagen_temporal, 'r+b');
        $data = fread($fp, filesize($imagen_temporal));
        fclose($fp);
		//escapar los caracteres
        $data = mysql_escape_string($data);

	$sql=mysqli_query(Conecta::conx(),"insert into noticias_web(TITULO_NOTICIA,FCHA_NOTICIA,HORA,DESCRIPC_NOTICIA,IMAGEN,TIPO_IMAGEN,ID_CATEGORIA,ID_PERFIL) values('$tit','$fcha',now(),'$descrip','$data','$tipo',$cat,$id)")or die('Problemas al intentar insertar la noticia:' . $sql . mysqli_errno(Conecta::conx()));

	echo "<script type='text/javascript'>alert('Noticia cargada exitosamente.');window.location='../vistas/listado_de_noticias.php';</script>";
		
		}else{
			echo "archivo no permitido, es un tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
		}
	}
}



}//cierre de class
?>