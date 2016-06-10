<?php 
session_start();
class Conecta{
	public static function conx(){
		$con=mysqli_connect("localhost","root","12345","mydb");
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