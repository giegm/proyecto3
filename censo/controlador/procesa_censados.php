<?php 
require_once("../modelo/clasedelogin/class_login.php");
require_once("../modelo/clasedeacta/class_censados.php");
 /*instanciamos la class que hace la consulta de las personas censadas*/
 if($_SERVER["REQUEST_METHOD"]=="POST"){
$obj = new Personas_censados();             
$obj->POST_cedula();
$motivo= $_POST['motivo'];
}         
 ?>