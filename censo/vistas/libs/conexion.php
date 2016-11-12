<?php
function Conectarse()
{
$servidor="localhost";
$basededatos="mydb2";
$usuario="root";
$clave="database-mariaDB";
$cn=mysqli_connect($servidor,$usuario,$clave,$basededatos) or die ("Error conectando a la base de datos");
@mysqli_query ("SET NAMES 'utf8'");
return $cn;
}
?>