<?php  
require_once("../modelo/clasedelogin/class_admin_perfil.php");
$obj=new Perfiles();
/*MODIFICACION DEL PERFIL QUE HA INICIADO SESIÓN*/
if(isset($_GET["updt_perfil_activo"])){
$obj->update_perfil($_SESSION["sesion_perfil"]);
}
/*MODIFICACION CONTRASEÑA DEL PERFIL QUE HA INICIADO SESIÓN*/
if(isset($_GET["updtclave_perfil_activo"])){
$obj->update_perfil_clavenew($_SESSION["sesion_perfil"]);
}
/*SEGUNDA MODIFICACION DE PERFIL SELECCIONADO POR EL ADMIN*/
if(isset($_GET["modf_user"])){
	$obj->update_perfil_seleccionado($_POST["id_perfil_seleccionado"]);
}
?>