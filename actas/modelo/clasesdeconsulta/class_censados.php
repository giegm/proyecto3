<?php 
require_once("../modelo/conecta.php");


/*class Personas_censados{
	public function POST_censados(){
		//seleccionamos de forma multiple}
		$re=mysql_query("SELECT CI, CEDULA_F FROM datos_personales, datos_familiares")or die(mysql_error());
        $ci=$POST_['cedula'];
        while ($f=mysql_fetch_array($re)) {
		//$sql .= "";		
			if ($ci==$f) {
					echo "<script type='text/javascript'>alert('usuario censado'); window.location='../vistas/actas.php';</script>";
			}else{
				echo "<script type='text/javascript'>alert('usuario no censado'); window.location='../index.php';</script>";
			}
		}
	}	
}
?>
*/

/* ************************************************** Como estaba anteriormente************************************************** */

class Personas_censados{
	private $censadas;
	
	public function POST_censados(){
		//seleccionamos de forma multiple
		$ci=$POST_['cedula'];
		$sql = mysqli_query(Conecta::conx(),"SELECT COUNT(datos_personales.CI, datos_familiares.CEDULA_F) AS censados FROM datos_personales, datos_familiares WHERE datos_personales.CI = 'ci' AND datos_familiares.CEDULA_F = 'cedf[]'") or die('cedula no registrada' .$sql.  mysqli_errno(Conecta::conx()));
		//$sql .= "";		

		if($reg=mysqli_fetch_array($sql)){
			$this->censadas=$reg["censados"];
		}
		return $this->censadas;

		mysqli_close(Conecta::conx());
	
	}


}

?>

<!--**************************************************Nueva Modelos************************************************** -->

<!--	<?php
//class Personas_censados{
//	private $censadas;
//	
//	public function POST_cedula(){
//		$ci=$_POST['cedula'];
//		$sql = mysqli_query(Conecta::conx(),"SELECT CI, CEDULA_F FROM datos_personales, datos_familiares")or die(mysql_error());
//		while ($f=mysql_fetch_array($re)) {
//			if ($ci==$re) {
//				echo "<script type='text/javascript'>alert('usuario censado'); window.location='../../vistas/actas.php';</script>";
//			}else{
//				echo "<script type='text/javascript'>alert('usuario no censado'); window.location='../../index.php';</script>";
//			}
//		}
//
//	}
//?>