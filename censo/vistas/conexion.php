<?php
//Configuracion de la conexion a base de datos
$bd_host = "localhost"; 
$bd_usuario = "root"; 
$bd_password = "database-mariaDB"; 
$bd_base = "mydb2"; 
$con = mysql_connect($bd_host, $bd_usuario, $bd_password, $bd_base); 
?>