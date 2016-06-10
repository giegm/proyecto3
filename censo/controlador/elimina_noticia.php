<?php 
require_once("../modelo/clasesdenoticia/class_elimina_noticia.php");
if($_SERVER["REQUEST_METHOD"]=="GET"){
	$obj=new ENoticia();
	$obj->elimina_noticia_por_id($_GET["id"]);
}

?>