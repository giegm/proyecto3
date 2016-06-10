<?php
function Conectarse()
{
$servidor="localhost";
$basededatos="mydb";
$usuario="root";
$clave="12345";
$cn=mysqli_connect($servidor,$usuario,$clave,$basededatos) or die ("Error conectando a la base de datos");
@mysqli_query ("SET NAMES 'utf8'");
return $cn;
}
?>