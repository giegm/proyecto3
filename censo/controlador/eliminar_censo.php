<?php 
require_once("../modelo/clasedecensos/class_elimina_censo.php");

if($_SERVER["REQUEST_METHOD"]=="GET"){
$obj=new Eliminaciones_Censos();//instancia de la class operar
$obj->Eliminar_censo_por_id($_GET["id"]);//llamado al metodo de la class que inserta el censo
}else{
	header('location:../vistas/listadocensos.php');
}
?>