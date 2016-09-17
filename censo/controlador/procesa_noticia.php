<?php 
require_once("../modelo/clasedelogin/class_login.php");
require_once("../modelo/clasesdenoticia/class_inserta_noticia.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
	//
	//exit;
	$obj=new Noticia();
	$obj->Insertar_noticia();
}


?>