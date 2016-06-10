<?php 
require_once("../modelo/conecta.php");


class Revisiones{

	private $datos_censo=array();
	private $datos_censo_dos=array();
	private $datos_censo_tres=array();
	private $datos_censo_cuatro=array();
	private $datos_censo_cinco=array();
	private $datos_censo_cincodos=array();
	private $datos_censo_seis=array();
	private $datos_censo_siete=array();
	private $datos_censo_ocho=array();
	private $datos_censo_total_fam=array();
	private $datos_censo_situacion_viv=array();
	private $datos_censo_ser=array();
	private $datos_censo_condiciones_salud=array();
	private $datos_censo_tres_fam=array();
	private $datos_censo_tres_fam_salud=array();
	private $datos_censo_fam_academ=array();
	private $datos_censo_preg_part_comn=array();
	private $datos_censo_part_comun=array();

	//metodos que recibe como parametro el id del jefe de familia correspondiente al censo elegido en el listado
	
	//METODO QUE TRAE DATOS PERSONALES CON DATOS DE CONTACTO
	public function obten_censo_por_id($id){

		$sql = mysqli_query(Conecta::conx(),"select dp.*, dc.*, dre.* from datos_personales as dp, datos_contacto as dc, datos_relacion as dre where dp.ID_DATAPERSONAL=$id and dc.ID_JEFE=$id and dre.ID_JEFE=$id")or die('problemas al tratar de traer los datos de la tabla datos personales:' . $sql . mysqli_errno(Conecta::conx()));
		
		while($reg=mysqli_fetch_assoc($sql)){
			$this->datos_censo[]=$reg;
		}
		return $this->datos_censo;

	}//FIN DEL METODO 

	//METODO QUE TRAE DATOS DE SALUD CON DATOS DE FINANZAS
	public function obten_censo_por_id_dos($id){

		$sql = mysqli_query(Conecta::conx(),"select ds.*, df.*, dcad.* from datos_salud as ds, datos_finanzas as df, datos_academicos as dcad where ds.ID_JEFE=$id and df.ID_JEFE=$id and dcad.ID_JEFE=$id")or die('problemas al tratar de traer los datos de la tabla datos personales:' . $sql . mysqli_errno(Conecta::conx()));
		
		while($reg=mysqli_fetch_assoc($sql)){
			$this->datos_censo_dos[]=$reg;
		}
		return $this->datos_censo_dos;

	}//FIN DEL METODO

	//METODO QUE TRAE DATOS DE FAMILIARES Y FAMILIAR SALUD
	public function obten_censo_por_id_tres($id){

		$sql = mysqli_query(Conecta::conx(),"select * from datos_familiares where ID_JEFE=$id")or die('problemas al tratar de traer los datos de la tabla :' . $sql . mysqli_errno(Conecta::conx()));
		
		while($reg=mysqli_fetch_assoc($sql)){
			$this->datos_censo_tres[]=$reg;
		}
		return $this->datos_censo_tres;

	}//FIN DEL METODO

	//METODO QUE TRAE DATOS DE FAMILIARES RELACION
	public function obten_censo_por_id_tres_familiares($id){

		$sql = mysqli_query(Conecta::conx(),"select * from familiar_relacion where ID_JEFE=$id")or die('problemas al tratar de traer los datos de la tabla :' . $sql . mysqli_errno(Conecta::conx()));
		
		while($reg=mysqli_fetch_assoc($sql)){
			$this->datos_censo_tres_fam[]=$reg;
		}
		return $this->datos_censo_tres_fam;

	}//FIN DEL METODO

	//METODO QUE TRAE DATOS DE FAMILIARES SALUD
	public function obten_censo_por_id_tres_fam_salud($id){

		$sql = mysqli_query(Conecta::conx(),"select * from familiar_salud where ID_JEFE=$id")or die('problemas al tratar de traer los datos de la tabla :' . $sql . mysqli_errno(Conecta::conx()));
		
		while($reg=mysqli_fetch_assoc($sql)){
			$this->datos_censo_tres_fam_salud[]=$reg;
		}
		return $this->datos_censo_tres_fam_salud;

	}//FIN DEL METODO

	//METODO QUE TRAE FAMILIARES FINANZAS Y SITUACION ECONOMICA
	public function obten_censo_por_id_cuatro($id){

		$sql = mysqli_query(Conecta::conx(),"select ff.*, se.* from familiar_finanzas as ff, situacion_economica as se where ff.ID_JEFE=$id and se.ID_JEFE=$id")or die('problemas al tratar de traer los datos de la tabla :' . $sql . mysqli_errno(Conecta::conx()));
		
		while($reg=mysqli_fetch_assoc($sql)){
			$this->datos_censo_cuatro[]=$reg;
		}
		return $this->datos_censo_cuatro;

	}//FIN DEL METODO

	//METODO QUE TRAE FAMILIARES ACADEMICO
	public function obten_censo_por_id_fam_academ($id){

		$sql = mysqli_query(Conecta::conx(),"select * from familiar_academico where ID_JEFE=$id")or die('problemas al tratar de traer los datos de la tabla :' . $sql . mysqli_errno(Conecta::conx()));
		
		while($reg=mysqli_fetch_assoc($sql)){
			$this->datos_censo_fam_academ[]=$reg;
		}
		return $this->datos_censo_fam_academ;

	}//FIN DEL METODO

	public function obten_censo_por_id_situacion_vivienda($id){
		$sql = mysqli_query(Conecta::conx(),"select * from situacion_vivienda where ID_JEFE=$id")or die('problemas al tratar de traer los datos de la tabla datos de obten_censo_por_id_situacion_vivienda:' . $sql . mysqli_errno(Conecta::conx()));
		
		while($reg=mysqli_fetch_assoc($sql)){
			$this->datos_censo_situacion_viv[]=$reg;
		}
		return $this->datos_censo_situacion_viv;
	}

	//METODO QUE TRAE DETALLE VIVIENDA Y AYUDA DE VIVIENDA 
	public function obten_censo_por_id_cinco($id){

		$sql = mysqli_query(Conecta::conx(),"select stv.*, dv.*, av.* from situacion_vivienda as stv, detalles_vivienda as dv, ayuda_vivienda as av where stv.ID_JEFE=$id and av.ID_JEFE=$id and dv.ID_JEFE=$id")or die('problemas al tratar de traer los datos de la tabla:' . $sql . mysqli_errno(Conecta::conx()));
		
		while($reg=mysqli_fetch_assoc($sql)){
			$this->datos_censo_cinco[]=$reg;
		}
		return $this->datos_censo_cinco;

	}//FIN DEL METODO
	//METODO QUE TRAE DETALLE VIVIENDA 
	public function obten_censo_por_id_cincodos($id){

		$sql = mysqli_query(Conecta::conx(),"select * from detalles_vivienda where ID_JEFE=$id")or die('problemas al tratar de traer los datos de la tabla:' . $sql . mysqli_errno(Conecta::conx()));
		
		while($reg=mysqli_fetch_assoc($sql)){
			$this->datos_censo_cincodos[]=$reg;
		}
		return $this->datos_censo_cincodos;

	}//FIN DEL METODO

	//METODO QUE TRAE CONDICIONES DE SALUD Y DETALLE SERVICIOS 
	public function obten_censo_por_id_seis($id){

		$sql = mysqli_query(Conecta::conx(),"select sts.*, cs.*, ds.* from situacion_servicios as sts, condiciones_salud as cs, detalle_servicios as ds where cs.ID_JEFE=$id and ds.ID_JEFE=$id and sts.ID_JEFE=$id")or die('problemas al tratar de traer los datos de la tabla:' . $sql . mysqli_errno(Conecta::conx()));
		
		while($reg=mysqli_fetch_assoc($sql)){
			$this->datos_censo_seis[]=$reg;
		}
		return $this->datos_censo_seis;

	}//FIN DEL metodos

	//para los multiselect de condiciones_salud
	public function obten_censo_por_id_condiciones_salud($id){

		$sql = mysqli_query(Conecta::conx(),"select * from condiciones_salud where ID_JEFE=$id")or die('problemas al tratar de traer los datos de la tabla condiciones_salud:' . $sql . mysqli_errno(Conecta::conx()));
		
		while($reg=mysqli_fetch_assoc($sql)){
			$this->datos_censo_condiciones_salud[]=$reg;
		}
		return $this->datos_censo_condiciones_salud;

	}//FIN DEL metodos

	//METODO QUE TRAE DETALLES SERV ELECTRICO Y PARTICIPACION COMUNITARIA 
	public function obten_censo_por_id_siete($id){

		$sql = mysqli_query(Conecta::conx(),"select stserv.*, dse.*, pc.* from situacion_servicios as stserv, detalles_serv_electrico as dse, participacion_comunitaria as pc where dse.ID_JEFE=$id and pc.ID_JEFE=$id and stserv.ID_JEFE=$id")or die('problemas al tratar de traer los datos de la tabla:' . $sql . mysqli_errno(Conecta::conx()));
		
		while($reg=mysqli_fetch_assoc($sql)){
			$this->datos_censo_siete[]=$reg;
		}
		return $this->datos_censo_siete;

	}//FIN DEL METODO

	//METODO QUE TRAE DETALLES SERV ELECTRICO Y PARTICIPACION COMUNITARIA 
	public function obten_censo_por_id_part_comun($id){

		$sql = mysqli_query(Conecta::conx(),"select * from participacion_comunitaria where ID_JEFE=$id")or die('problemas al tratar de traer los datos de la tabla part_comunitaria:' . $sql . mysqli_errno(Conecta::conx()));
		
		while($reg=mysqli_fetch_assoc($sql)){
			$this->datos_censo_part_comun[]=$reg;
		}
		return $this->datos_censo_part_comun;

	}//FIN DEL METODO

	//metodo para traer situacion servicios solamente
	public function obten_censo_por_id_ser($id){

		$sql = mysqli_query(Conecta::conx(),"select * from situacion_servicios where ID_JEFE=$id ")or die('problemas al tratar de traer los datos de la tabla:' . $sql . mysqli_errno(Conecta::conx()));
		
		while($reg=mysqli_fetch_assoc($sql)){
			$this->datos_censo_ser[]=$reg;
		}
		return $this->datos_censo_ser;

	}//FIN DEL METODO

	//METODO QUE TRAE DATOS ENCUESTADO
	public function obten_censo_por_id_ocho($id){

		$sql = mysqli_query(Conecta::conx(),"select * from datos_encuestado where ID_JEFE=$id")or die('problemas al tratar de traer los datos de la tabla datos encuestado:' . $sql . mysqli_errno(Conecta::conx()));
		
		while($reg=mysqli_fetch_assoc($sql)){
			$this->datos_censo_ocho[]=$reg;
		}
		return $this->datos_censo_ocho;

	}//FIN DEL METODO

	//METODO QUE TRAE PREGUNTAS_PART_COMUNITARIA
	public function obten_censo_por_id_preg_part_comn($id){

		$sql = mysqli_query(Conecta::conx(),"select * from preguntas_part_comunitaria where ID_JEFE=$id")or die('problemas al tratar de traer los datos de la tabla preg_part_comn:' . $sql . mysqli_errno(Conecta::conx()));
		
		while($reg=mysqli_fetch_assoc($sql)){
			$this->datos_censo_preg_part_comn[]=$reg;
		}
		return $this->datos_censo_preg_part_comn;

	}//FIN DEL METODO

	public function obten_total_familiares($id){
		$sql = mysqli_query(Conecta::conx(),"select * from datos_familiares where ID_JEFE=$id")or die('problemas al tratar de traer los datos de la tabla datos personales:' . $sql . mysqli_errno(Conecta::conx()));

		while($reg=mysqli_fetch_assoc($sql)){
			$this->datos_censo_total_fam[]=$reg;
		}
		return $this->datos_censo_total_fam;
	}

		
}//FIN DE LA CLASS

class Revision_comun{
		private $datos_part_comun=array();
		public function obten_preg_part_comunitaria($id){

		$sql = mysqli_query(Conecta::conx(),"select * from preguntas_part_comunitaria where ID_JEFE=$id")or die('problemas al tratar de traer los datos de la tabla datos personales:' . $sql . mysqli_errno(Conecta::conx()));
		
		while($reg=mysqli_fetch_assoc($sql)){
			$this->datos_part_comun[]=$reg;
		}
		return $this->datos_part_comun;

	}//FIN DEL METODO
}
class Revision_comun2{
		private $datos_part_comun2=array();
		public function obten_preg_part_comunitarias($id){

		$sql = mysqli_query(Conecta::conx(),"select * from preguntas_part_comunitaria where ID_JEFE=$id")or die('problemas al tratar de traer los datos de la tabla datos personales:' . $sql . mysqli_errno(Conecta::conx()));
		
		while($reg=mysqli_fetch_assoc($sql)){
			$this->datos_part_comun2[]=$reg;
		}
		return $this->datos_part_comun2;

	}//FIN DEL METODO
}

/*//$sql = "select FECHA_CENSO from censos where ID_JEFE=$id;";
		
		//datos del jefe de familia
		/*$sql .= "select * from datos_personales where ID_JEFE=$id_jefe;";
		
		$sql .= "select * from datos_contacto where ID_JEFE=$id_jefe;";
		 
		
		$sql .= "select * from datos_relacion where ID_JEFE=$id_jefe;";
		
		$sql .= "select * from datos_salud where ID_JEFE=$id_jefe;";
		
		$sql .= "select * from datos_finanzas where ID_JEFE=$id_jefe;";
		
		$sql .= "select * from datos_academicos where ID_JEFE=$id_jefe;";
		
		$sql .= "select * from datos_encuestado where ID_JEFE=$id_jefe;";
		

		//querys para los familiares
		
		$sql .= "select * from datos_familiares where ID_JEFE=$id_jefe;";
		
		$sql .= "select * from familiar_academico where ID_JEFE=$id_jefe;";
		
		$sql .= "select * from familiar_finanzas where ID_JEFE=$id_jefe;";
		 
		$sql .= "select * from familiar_relacion where ID_JEFE=$id_jefe;";
		
		$sql .= "select * from familiar_salud where ID_JEFE=$id_jefe;";


		//querys para la situacion economica
		$sql .= "select * from situacion_economica where ID_JEFE=$id_jefe;";

		//querys para situacion de vivienda
		$sql .= "select * from situacion_vivienda where ID_JEFE=$id_jefe;";
		
		$sql .= "select * from detalles_vivienda where ID_JEFE=$id_jefe;";

		$sql .= "select * from ayuda_vivienda where ID_JEFE=$id_jefe;";
		
		//querys para situacion salud
		$sql .= "select * from condiciones_salud where ID_JEFE=$id_jefe;";

		//querys para situacion servicios
		$sql .= "select * from situacion_servicios where ID_JEFE=$id_jefe;";

		$sql .= "select * from detalle_servicios where ID_JEFE=$id_jefe;";
		
		$sql .= "select * from detalles_serv_electrico where ID_JEFE=$id_jefe;";

		//querys para participacion comunitaria
		$sql .= "select * from participacion_comunitaria where ID_JEFE=$id;";*/

?>

		