<?php
require_once("../modelo/conecta.php");

class Crea_perfil{
	
	public function crea_perfil_user(){
	
	//declaro variables del form
	$names=$_POST['nombre'];
	$dni=$_POST['cedula'];
	$pass=$_POST['password'];
	$rol=$_POST['tipo_rol'];
	
	//para encriptar clave
	$clavex=md5($pass);
	
		$sql="INSERT INTO datos_login(USERADMIN,CEDULA,PASSADMIN,PASSADMINDOS,ID_PERFIL,ID_EDO_PERFIL) VALUES('$names','$dni','$clavex','$clavex','$rol',1)";
		if(mysqli_query(Conecta::conx(),$sql)){
			echo "<script type='text/javascript'>alert('usuario creado con éxito.'); window.location='../vistas/administra.php?perfil=1';</script>";
		}else{
			echo "error al intentar crear el usuario: " . $sql . mysqli_error(Conecta::conx());
		}
	}


	}//FIN DEL METODO


?>