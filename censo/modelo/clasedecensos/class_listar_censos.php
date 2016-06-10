<?php 
require_once("../modelo/conecta.php");
class Censos{
	private $data;	
	private $datos;
	private $datos_dos;
	private $datos_tres;
	private $datos_cuatro;
	private $datos_cinco;
	private $datos_seis;
	private $datos_siete;
	private $datos_ocho;
	private $datos_nueve;
	private $datos_diez;

	public function __construct(){
		$this->data=array();
		$this->datos=array();
		$this->datos_dos=array();
		$this->datos_tres=array();
		$this->datos_cuatro=array();
		$this->datos_cinco=array();
		$this->datos_seis=array();
		$this->datos_siete=array();
		$this->datos_ocho=array();
		$this->datos_nueve=array();
		$this->datos_diez=array();
	}

	public function get_censos($uno,$dos){
		$sql=mysqli_query(Conecta::conx(),"select C.*, DP.CI from censos as C, datos_personales as DP where C.ID_JEFE=DP.ID_DATAPERSONAL order by C.ID_CENSO desc limit $inicio,4") or die ('Error al consultar los censos:' .$sql . mysqli_errno(Conecta::conx()));
		while($reg=mysqli_fetch_assoc($sql)){
			$this->data[]=$reg;
		}
		return $this->data;
	}//fin del metodo get_censos

//METODOS QUE OPERAN CON LA PAGINACION CON AJAX
//AQUI MOSTRAMOS EL TOTAL DE COMUNAS QUE HAY EN UNA TABLA CON EL COUNT(*)
	public function total_censos(){
	$sql=mysqli_query(Conecta::conx(),"select * from censos");
	if($reg=mysqli_fetch_array($sql))
	{
		$total=$reg;
	}
	return $total;
}//fin del metodo total censos

/**********************************CONSULTA A LAS TABLAS DE LOS CENSOS******************************************/
/**********************************DATOS PERSONALES Y CONTACTO******************************************/

public function obten_datos_censo($id){
	$sql=mysqli_query(Conecta::conx(),"select dp.*, dc.* from datos_personales as dp, datos_contacto as dc where dp.ID_DATAPERSONAL=$id and dc.ID_JEFE=$id") or die("error en la consulta:".$sql.mysqli_errno(Conecta::conx()));

	while($reg=mysqli_fetch_assoc($sql)){
		$this->datos[]=$reg;
	}
	return $this->datos;
}//FIN DEL METODO

/**********************************DATOS RELACION Y SALUD******************************************/

public function obten_datos_censo_dos($id){
	$sql=mysqli_query(Conecta::conx(),"select dr.*, ds.* from datos_relacion as dr, datos_salud as ds where dr.ID_JEFE=$id and ds.ID_JEFE=$id") or die("error en la consulta:".$sql.mysqli_errno(Conecta::conx()));

	while($reg=mysqli_fetch_assoc($sql)){
		$this->datos_dos[]=$reg;
	}
	return $this->datos_dos;
}//FIN DEL METODO

/**********************************DATOS FINANZAS Y ACADEMICOS******************************************/

public function obten_datos_censo_tres($id){
	$sql=mysqli_query(Conecta::conx(),"select df.*, da.* from datos_finanzas as df, datos_academicos as da where df.ID_JEFE=$id and da.ID_JEFE=$id") or die("error en la consulta:".$sql.mysqli_errno(Conecta::conx()));

	while($reg=mysqli_fetch_assoc($sql)){
		$this->datos_tres[]=$reg;
	}
	return $this->datos_tres;
}//FIN DEL METODO

/**********************************DATOS FAMILIARES Y FAMILIAR ACADEMICO******************************************/

public function obten_datos_censo_cuatro($id){
	$sql=mysqli_query(Conecta::conx(),"select dfa.*, fa.* from datos_familiares as dfa, familiar_academico as fa where dfa.ID_JEFE=$id and fa.ID_JEFE=$id") or die("error en la consulta:".$sql.mysqli_errno(Conecta::conx()));

	while($reg=mysqli_fetch_assoc($sql)){
		$this->datos_cuatro[]=$reg;
	}
	return $this->datos_cuatro;
}//FIN DEL METODO

/**********************************DATOS FAMILIAR FINANZAS Y FAMILIAR RELACION******************************************/

public function obten_datos_censo_cinco($id){
	$sql=mysqli_query(Conecta::conx(),"select dff.*, fr.* from familiar_finanzas as dff, familiar_relacion as fr where dff.ID_JEFE=$id and fr.ID_JEFE=$id") or die("error en la consulta:".$sql.mysqli_errno(Conecta::conx()));

	while($reg=mysqli_fetch_assoc($sql)){
		$this->datos_cinco[]=$reg;
	}
	return $this->datos_cinco;
}//FIN DEL METODO

/**********************************DATOS FAMILIAR SALUD Y SITUACION ECONOMICA******************************************/

public function obten_datos_censo_seis($id){
	$sql=mysqli_query(Conecta::conx(),"select dfs.*, sec.* from familiar_salud as dfs, situacion_economica as sec where dfs.ID_JEFE=$id and sec.ID_JEFE=$id") or die("error en la consulta:".$sql.mysqli_errno(Conecta::conx()));

	while($reg=mysqli_fetch_assoc($sql)){
		$this->datos_seis[]=$reg;
	}
	return $this->datos_seis;
}//FIN DEL METODO

/**********************************DATOS SITUACION VIVIENDA Y DETALLES VIVIENDA******************************************/

public function obten_datos_censo_siete($id){
	$sql=mysqli_query(Conecta::conx(),"select sv.*, dv.*, ayv.* from situacion_vivienda as sv, detalles_vivienda as dv, ayuda_vivienda as ayv where sv.ID_JEFE=$id and dv.ID_JEFE=$id and ayv.ID_JEFE=$id") or die("error en la consulta:".$sql.mysqli_errno(Conecta::conx()));

	while($reg=mysqli_fetch_assoc($sql)){
		$this->datos_siete[]=$reg;
	}
	return $this->datos_siete;
}//FIN DEL METODO

/**********************************DATOS CONDICIONES SALUD Y SITUACION SERVICIOS******************************************/

public function obten_datos_censo_ocho($id){
	$sql=mysqli_query(Conecta::conx(),"select cs.*, ssv.* from condiciones_salud as cs, situacion_servicios as ssv where cs.ID_JEFE=$id and ssv.ID_JEFE=$id") or die("error en la consulta:".$sql.mysqli_errno(Conecta::conx()));

	while($reg=mysqli_fetch_assoc($sql)){
		$this->datos_ocho[]=$reg;
	}
	return $this->datos_ocho;
}//FIN DEL METODO

/**********************************DATOS DETALLE DE SERVICIOS Y SERV ELECTRICO******************************************/

public function obten_datos_censo_nueve($id){
	$sql=mysqli_query(Conecta::conx(),"select dts.*, sel.* from detalle_servicios as dts, detalles_serv_electrico as sel where dts.ID_JEFE=$id and sel.ID_JEFE=$id") or die("error en la consulta:".$sql.mysqli_errno(Conecta::conx()));

	while($reg=mysqli_fetch_assoc($sql)){
		$this->datos_nueve[]=$reg;
	}
	return $this->datos_nueve;
}//FIN DEL METODO

/*********************PARTICIPACION COMUNITARIA Y PREGUNTAS PART COMUNITARIA***********************************/

public function obten_datos_censo_diez($id){
	$sql=mysqli_query(Conecta::conx(),"select ptc.*, ppcm.* from participacion_comunitaria as ptc, preguntas_part_comunitaria as ppcm where ptc.ID_JEFE=$id and ppcm.ID_JEFE=$id") or die("error en la consulta:".$sql.mysqli_errno(Conecta::conx()));

	while($reg=mysqli_fetch_assoc($sql)){
		$this->datos_diez[]=$reg;
	}
	return $this->datos_diez;
}//FIN DEL METODO
















}//fin de la class censos


?>