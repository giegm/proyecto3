<?php  
require_once("../modelo/clasesdeconsulta/class_censados.php");
 /*instanciamos la class que hace la consulta de las personas censadas*/
$obj = new Personas_censados();             
$obj->censados();                
echo $obj;
 ?>