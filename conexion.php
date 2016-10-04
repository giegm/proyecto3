<?php
//Configuracion de la conexion a base de datos
$bd_host = "mysql.hostinger.co"; 
$bd_usuario = "u999374105_root"; 
$bd_password = "123456"; 
$bd_base = "u999374105_mydb"; 
$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
mysql_select_db($bd_base, $con); 
?>