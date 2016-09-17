<?php
require_once('../modelo/conecta.php');

class Acceso_user{


	public function login(){
		//validamos los campos
		if(empty($_POST["nameuser"]) or empty($_POST["passuser"])){
			header('location:../ingreso.php?err=1');
		}
		else
		{
			//almacenamos los campos recibidos via POST
			$user=$_POST["nameuser"];
			$pass=$_POST["passuser"];
			$desencrip=md5($pass);
			//realizamos la consulta
			$sql=mysqli_query(Conecta::conx(),"SELECT * FROM datos_login WHERE USERADMIN='$user' AND PASSADMIN='$desencrip'") or die('Error al consultar los datos de ingreso' . $sql . mysqli_errno(Conecta::conx()));

			/*si el resultado de la consulta es 0, es decir que no hay datos relacionados a los ingresados por el user en el formulario se le manda al form nuevamente*/
			if(mysqli_num_rows($sql)==0){
				header('location:../ingreso.php?err=2');
			}
			//SINO
			else
			{
				
				while($row=mysqli_fetch_assoc($sql)){
				$namebd=$row['USERADMIN'];
				$passbd=$row['PASSADMIN'];
				$edoperfil=$row['ID_EDO_PERFIL'];
				//$perfil=$row["ROL_ADMIN"];
				/*y si este while se ejecuta segun el if anterior, le decimos que si las variables
				que almacenan los campos del formularios son iguales a las del while que guardan los datos 
				de la base de datos establezca la $session del usuario. */
				if($user == $namebd && $passbd == $desencrip){
					if($edoperfil==1){
						/*establecemos la $session y almacenamos en ella el nombre que introduzca el usuario
						en el campo nombre del formlulario*/
						$_SESSION["sesion_usuario"]=$row["USERADMIN"];
						$_SESSION["sesion_perfil"]=$row["ID_PERFIL"];
						//y lo mandamos a su perfil
						echo "<script type='text/javascript'>alert('Usuario valido.'); window.location='../vistas/administra.php?perfil=1';</script>";					}else{
						//El usuario esta suspendido, y pasamos el valor 4 via GET
						header('location:../ingreso.php?err=4');
					}
				}
				else
				{
					//datos invalidos, y los pasamos por la variable err=3 via GET
					header('location:../ingreso.php?err=3');
				}
			}//FIN DEL WHILE

			/*if($reg=mysqli_fetch_array($sql)){
					$_SESSION["sesion_user"]=$reg["USERADMIN"];
					$_SESSION["sesion_perfil"]=$reg["ROL_ADMIN"];
					//redireccionamos al sistema
					header('location:../../vistas/administra.php');
				}else{
					//
				}*/

			}//FIN DEL ELSE QUE CONTINE AL WHILE
		}//FIN DEL PRIMER ELSE DEL METODO
	}//FIN DEL METODO LOGIN

	//METODO QUE TRAE EL PERFIL CORRESPONDIENTE AL USER LOGUEADO
	public function get_rol_usuario(){
		$rol_user=$_SESSION["sesion_perfil"];
		$sql=mysqli_query(Conecta::conx(),"SELECT PERFIL FROM perfiles WHERE ID_PERFIL='$rol_user'") or die('Error en la consulta del perfil de usuario:' . $sql . mysqli_errno(Conecta::conx()));
		if($reg=mysqli_fetch_assoc($sql)){
			$this->perfil[]=$reg;
		}
		return $this->perfil;
		
	}//FIN DEL METODO GET_ROL_USUARIO


}//FIN DE LA CLASS ACCESO_USER

?>

<?php

$segundos = 300; //si pasa este tiempo se detecta la inactividad del usuario en el sitio 
if(($_SESSION['tiempo']+$segundos) < time()) {
	session_destroy();
	echo'<script type="text/javascript">alert("Su sesion ha expirado por inactividad'; 
	echo', vuelva a logearse para continuar");window.location.href="../ingreso.php";</script>';     
}else 

$_SESSION['tiempo']=time(); 

?>