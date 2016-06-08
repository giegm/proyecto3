<?php 
require_once("../modelo/clasedelogin/class_admin_perfil.php");

if($_SERVER["REQUEST_METHOD"]=="GET"){
$obj=new Perfiles();//instancia de la class Perfiles
$obj->Eliminar_user_por_id($_GET["id_user"]);//llamado al metodo de la class que elimina el usuario seleccionado
}else{
	header('location:../vistas/perfil=1.php');
}
?>