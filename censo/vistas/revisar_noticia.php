<?php 
require_once("../modelo/clasedelogin/class_login.php");
require_once("../modelo/clasesdenoticia/class_modifica_noticia.php");
$mnot=new MNoticia();
if(isset($_SESSION["sesion_usuario"]))
{
	if($_SERVER["REQUEST_METHOD"]=="POST"){
	$mnot->modifica_noticia_por_id($_GET["id"]);
}
?>