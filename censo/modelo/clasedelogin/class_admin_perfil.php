<?php  
require_once("../modelo/conecta.php");

class Perfiles{
//variable que devuelve los datos del perfil
private $datos_perfil=array();
private $datos_all_perfil=array();
private $datos_perfil_seleccionado=array();
private $passact;

/*LISTADO DEL PERFIL QUE INICIA SESIÓN*/
	public function lista_perfil_actual($p){
	$sql=mysqli_query(Conecta::conx(),"select l.*, p.PERFIL from datos_login as l, perfiles as p where l.ID_PERFIL=$p and p.ID_PERFIL=$p") or die("Error en la consulta del perfil:" . $sql . mysqli_errno(Conecta::conx()));
	while($reg=mysqli_fetch_assoc($sql)){
		$this->datos_perfil[]=$reg;
	}
	return $this->datos_perfil;
}

/*//////////////////////////////////////////////////////////////////////////////////////////////////////*/

/*LISTADO GENERAL DE LOS PERFILES*/

public function lista_all_perfiles(){
	$sql=mysqli_query(Conecta::conx(),"select l.*, p.PERFIL, ep.* from datos_login as l, perfiles as p, estado_perfil as ep where l.ID_PERFIL=p.ID_PERFIL and l.ID_EDO_PERFIL=ep.ID_EDO_PERFIL") or die("Error en la consulta de todos los perfiles:" . $sql . mysqli_errno(Conecta::conx()));
	while($reg=mysqli_fetch_assoc($sql)){
		$this->datos_all_perfil[]=$reg;
	}
	return $this->datos_all_perfil;
}

/*///////////////////////////////////////////////////////////////////////////////////////////////////////*/

/*DATOS DEL PERFIL SEGUN EL SELECCIONADO EN EL LISTADO*/
public function get_perfil_de_listado($k){
	$sql=mysqli_query(Conecta::conx(),"select l.*, p.PERFIL, ep.* from datos_login as l, perfiles as p, estado_perfil as ep where l.ID_PERFIL=$k and l.ID_EDO_PERFIL=ep.ID_EDO_PERFIL") or die("Error en la consulta de el perfil seleccionado del listado:" . $sql . mysqli_errno(Conecta::conx()));
	while($reg=mysqli_fetch_assoc($sql)){
		$this->datos_perfil_seleccionado[]=$reg;
	}
	return $this->datos_perfil_seleccionado;
}

public function update_perfil($id_perfil){

	//variables que traen los datos del perfil a modificar
	$user=$_POST["nameuser"];
	$ced=$_POST["ceduser"];
	$claveact=md5($_POST["claveactual"]);
	//$clavenew=md5($_POST["clavenueva"]);

	$sql1=mysqli_query(Conecta::conx(),"select PASSADMIN from datos_login where ID_PERFIL=$id_perfil")or die("error en la consulta de la clave actual-->" . $sql1 . mysqli_errno(Conecta::conx()));
	if($reg=mysqli_fetch_assoc($sql1)){
		$this->passact=$reg["PASSADMIN"];
	}
 	$id_sesion_usuario=$_SESSION["sesion_perfil"];

	if($claveact!=$this->passact){
		echo "<script type='text/javascript'>alert('La contraseña actual ingresada no coincide con la registrada en la base de datos.');window.location='../vistas/perfil.php?perfil=$id_sesion_usuario';</script>";
	}else{
	$sql=mysqli_query(Conecta::conx(),"update datos_login set USERADMIN='$user', CEDULA='$ced' where ID_PERFIL=$id_perfil") or die("Error: No se pudo modificar el usuario indicado-->" . $sql . mysqli_errno(Conecta::conx()));

	echo "<script type='text/javascript'>alert('Se ha modificado el perfil exitosamente.');window.location='../vistas/perfil.php?perfil=$id_sesion_usuario';</script>";
	}
	
/*
	$user=$_POST["nameuser"];
	$ced=$_POST["ceduser"];
	$claveact=md5($_POST["claveactual"]);
	//$clavenew=md5($_POST["clavenueva"]);

	$sql1=mysqli_query(Conecta::conx(),"select PASSADMIN from datos_login where ID_PERFIL=$id_perfil")or die("error en la consulta de la clave actual-->" . $sql1 . mysqli_errno(Conecta::conx()));
	if($reg=mysqli_fetch_assoc($sql1)){
		$this->passact=$reg["PASSADMIN"];
	}
 	$id_sesion_usuario=$_SESSION["sesion_perfil"];

	if($claveact!=$this->passact){
		echo "<script type='text/javascript'>alert('La contraseña actual ingresada no coincide con la registrada en la base de datos.');window.location='../vistas/perfil.php?perfil=$id_sesion_usuario';</script>";
	}else{
	$sql=mysqli_query(Conecta::conx(),"update datos_login set USERADMIN='$user', CEDULA='$ced' where ID_PERFIL=$id_perfil") or die("Error: No se pudo modificar el usuario indicado-->" . $sql . mysqli_errno(Conecta::conx()));

	echo "<script type='text/javascript'>alert('Se ha modificado el perfil exitosamente.');window.location='../vistas/perfil.php?perfil=$id_sesion_usuario';</script>";
	}

	$claveact2=md5($_POST["claveactualp"]);
	$sql2=mysqli_query(Conecta::conx(),"select PASSADMIN from datos_login where ID_PERFIL=$id_perfil")or die("error en la consulta de la clave actual-->" . $sql2 . mysqli_errno(Conecta::conx()));
	if($reg=mysqli_fetch_assoc($sql1)){
		$this->passact=$reg["PASSADMIN"];
	}
 	$id_sesion_usuario=$_SESSION["sesion_perfil"];

	if($claveact2!=$this->passact){
		echo "<script type='text/javascript'>alert('La contraseña actual ingresada no coincide con la registrada en la base de datos.');window.location='../vistas/perfil.php?perfil=$id_sesion_usuario';</script>";
	}else{
	$pass=md5($_POST["clavenew"]);
	$pass2=md5($_POST["clavenew2"]);

	$sql="INSERT INTO datos_login(PASSADMIN,PASSADMINDOS,ID_EDO_PERFIL) VALUES('$pass','$pass2',1)";
		if(mysqli_query(Conecta::conx(),$sql)){
			echo "<script type='text/javascript'>alert('Contraseña modificada con éxito.'); window.location='../vistas/perfil.php?perfil=1';</script>";
		}else{
			echo "error al intentar modificar la contraseña" . $sql . mysqli_error(Conecta::conx());
		}
	}
*/
}//FIN DEL METODO UPDATE PERFIL

/*///////////////////////////////////////////////////////////////////////////////////////////////////*/

public function update_perfil_seleccionado($id_perfsel){

	//variables que traen los datos del perfil a modificar
	$user=$_POST["newname"];
	$ced=$_POST["newced"];
	$clave=md5($_POST["newpass"]);
	$roluser=$_POST["newrol"];
	$edoper=$_POST["newestado_user"];
	$clavemd=md5($_POST["newpass"]);
	//$clavenew=md5($_POST["clavenueva"]);

	$sql=mysqli_query(Conecta::conx(),"update datos_login set USERADMIN='$user', CEDULA='$ced', PASSADMIN='$clavemd', PASSADMINDOS='$clave', ID_PERFIL='$roluser', ID_EDO_PERFIL='$edoper' where ID_PERFIL=$id_perfsel") or die("Error: No se pudo modificar el usuario indicado-->" . $sql . mysqli_errno(Conecta::conx()));

	echo "<script type='text/javascript'>alert('Se ha modificado el perfil exitosamente.');window.location='../vistas/perfil.php?perfil=1';</script>";
	


}//FIN DEL METODO UPDATE PERFIL

public function Eliminar_user_por_id($iduser){
	$sql=mysqli_query(Conecta::conx(),"delete from datos_login where ID_LOGIN=$iduser");

	echo "<script type='text/javascript'>alert('Se ha eliminado el usuario exitosamente.');window.location='../vistas/perfil.php?perfil=1';</script>";
}


}/*fin de la class*/


?>