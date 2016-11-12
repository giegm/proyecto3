<?php 
session_start();
class Conecta{
	public static function conx(){
		$con=mysqli_connect("localhost","root","database-mariaDB","mydb2");
		@mysqli_query("SET NAMES 'utf8'");

		if(!$con){
			die('Error en la conexión (' . mysqli_connect_errno() . ')' . mysqli_connect_error());
		}else{
			//echo "conexión establecida.";
		}
		return $con;
	}

}


?>