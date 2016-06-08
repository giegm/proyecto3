<?php 
class jefesfamilia{

private $red;

public function get_ultimo_id_jefe_familiar(){
	$conx= mysqli_connect("localhost","root","greidy100","mydb") or die ("problemas con la conexión");  
	$convert=$conx->query("SET NAMES 'utf8'");

	$sql = "SELECT MAX(ID_DATAPERSONAL) AS ultimoid FROM datos_personales";
	$res=mysqli_query($conx,$sql);

	/*while($reg=mysqli_fetch_assoc($res)){
		$this->ide=$reg["ultimoid"];
		$this->red=$this->ide+1;
	}*/

	if ($row=mysqli_fetch_array($res)) {
	$this->red=trim($row[0]+1);
	}
	
	return $this->red;
}
}


/*$obj= new jefesfamilia();
$data=$obj->get_ultimo_id_jefe_familiar();*/

 ?>