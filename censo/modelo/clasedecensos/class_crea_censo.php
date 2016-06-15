<?php 
require_once("../modelo/conecta.php");

class Operar{

	//variables que guardan los datos para los combox del form censos
	private $nac;
	private $edocivil;
	private $tipoing;
	private $nivlinstrc;
	private $profesns;
	private $profesnsf;
	private $nivlinstrcf;
	private $parentescof;
	private $ingfamiliar;
	private $condterreno;
	private $formtenencia;
	private $tipoviv;
	private $tipohab;
	private $tipoparedes;
	private $tipotecho;
	private $enseresvivind;
	private $salubvivind;
	private $tipayudacasa;
	private $plagascasa;
	private $animalescasa;
	private $persenferm;
	private $persexclus;
	private $aguasblanc;
	private $aguaserv;
	private $gascasa;
	private $electrcasa;
	private $recolbasura;
	private $telefonia;
	private $trasnprte;
	private $mecainfo;
	private $servcomunales;
	private $misiones;

	public function __construct(){
		$this->nac=array();
		$this->edocivil=array();
		$this->tipoing=array();
		$this->nivlinstrc=array();
		$this->profesns=array();
		$this->nivlinstrcf=array();
		$this->parentescof=array();
		$this->profesnsf=array();
		$this->ingfamiliar=array();
		$this->condterreno=array();
		$this->formtenencia=array();
		$this->tipoviv=array();
		$this->tipohab=array();
		$this->tipoparedes=array();
		$this->tipotecho=array();
		$this->enseresvivind=array();
		$this->salubvivind=array();
		$this->tipayudacasa=array();
		$this->plagascasa=array();
		$this->animalescasa=array();
		$this->persenferm=array();
		$this->persexclus=array();
		$this->aguasblanc=array();
		$this->aguaserv=array();
		$this->gascasa=array();
		$this->electrcasa=array();
		$this->recolbasura=array();
		$this->telefonia=array();
		$this->trasnprte=array();
		$this->mecainfo=array();
		$this->servcomunales=array();
		$this->misiones=array();
	}


public function insertacenso(){ 
		//declaro las variables del form

		//campos datos personales
		
		$ci = $_POST['ci'];
		$name = $_POST['name'];
		$ape = $_POST['ape'];
		$fnac = $_POST['fnac'];
		$edad = $_POST['edad'];
		$nac = $_POST['nac'];
		$edocivil = $_POST['edocivil'];

		//datos de contacto
		$telfcel = $_POST['telfcel'];
		$telfhab = $_POST['telfhab'];
		$telfofic = $_POST['telfofic'];
		$email = $_POST['email'];

		//DATOS SEXO
		$sexo = $_POST['sexo'];

		//datos de relacion
		$embarazo = $_POST['embarazo'];
		$cne = $_POST['cne_f'];

		//datos de salud
		$disc = $_POST['disc'];
		$tipodisc = $_POST['tipodisc'];
		$pens = $_POST['pens'];
		$inst = $_POST['inst'];

		//datos financieros
		$trabaja = $_POST['trabaja'];
		$tipoing = $_POST['tipoing'];
		$ingmens = $_POST['ingmens'];

		//datos academicos
		$nivinstruc = $_POST['nivinstruc'];
		$profesion = $_POST['profesion'];

		//datos de situacion economica
		$dond_trabaja = $_POST['donde_trabaja'];
		$act_economica = $_POST['act_economica'];
		$ing_familiar = $_POST['ing_familiar'];

		//datos situacion vivienda
		$condc_terreno = $_POST['condc_terreno'];
		$tenencia_casa = $_POST['tenencia_casa'];
		$tipo_vivienda = $_POST['tipo_vivienda'];
		$num_habitaciones = $_POST['num_habitaciones'];
		$ocv = $_POST['ocv'];
		$terreno_propio = $_POST['terreno_propio'];
		$tipo_paredes = $_POST['tipo_paredes'];
		$tipo_techo = $_POST['tipo_techo'];
		$SIVIH = $_POST['SIVIH'];
		$sivih_inscripcion = $_POST['sivih_inscripcion'];
		$ley_phab = $_POST['ley_phab'];
		$salubridad_vivienda = $_POST['salubridad_vivienda'];
		$tipo_ayuda_casa = $_POST['tipo_ayuda_casa'];
		$descrip_ayuda_casa = $_POST['tipo_ayuda_casa'];

		//DATOS CONDICION_SALUD
		$otra_enfermedad = $_POST['otra_enfermedad'];
		$ayuda_enfermo = $_POST['ayuda_enfermo'];
		$tipo_ayuda_enfermo = $_POST['tipo_ayuda_enfermo'];
		$cant_exclusion = $_POST['cant_exclusion'];

		//DATOS SITUACION_SERVICIOS
		$aguas_blancas = $_POST['aguas_blancas'];
		$posee_tanque = $_POST['posee_tanque'];
		$litros_tanque = $_POST['litros_tanque'];
		$posee_pipotes = $_POST['posee_pipotes'];
		$cant_pipotes = $_POST['cant_pipotes'];
		$posee_medidor = $_POST['posee_medidor'];
		$aguas_servidas = $_POST['aguas_servidas'];
		$gas = $_POST['gas'];
		$proveedor_gas = $_POST['proveedor_gas'];
		$cant_cilindros = $_POST['cant_cilindros'];
		$duración_gas = $_POST['duración_gas'];
		$precio_gas = $_POST['precio_gas'];
		$sist_electrico = $_POST['sist_electrico'];
		$medidor_electrico = $_POST['medidor_electrico'];
		$bombillos_ahorradores = $_POST['bombillos_ahorradores'];
		$cant_bombillos = $_POST['cant_bombillos'];
		$transporte = $_POST['transporte'];

		//DATOS PARTICIPACION COMUNITARIA
		$org_comunitarias = $_POST['org_comunitarias'];
		$name_organizacion = $_POST['name_organizacion'];
		$participa_org = $_POST['participa_org'];
		$familiar_org = $_POST['familiar_org'];
		$otra_mision = $_POST['otra_mision'];
		$pueblo_pregunta1=$_POST['pueblo_pregunta1'];
		$pueblo_pregunta2=$_POST['pueblo_pregunta2'];
		$pueblo_pregunta3=$_POST['pueblo_pregunta3'];
		$pueblo_pregunta4=$_POST['pueblo_pregunta4'];
		$pueblo_pregunta5=$_POST['pueblo_pregunta5'];
		$pueblo_pregunta6=$_POST['pueblo_pregunta6'];
		$pueblo_pregunta7=$_POST['pueblo_pregunta7'];
		$pueblo_pregunta8=$_POST['pueblo_pregunta8'];
		$pueblo_pregunta9=$_POST['pueblo_pregunta9'];
		$pueblo_pregunta10=$_POST['pueblo_pregunta10'];
		$pueblo_pregunta11=$_POST['pueblo_pregunta11'];
		$pueblo_pregunta14=$_POST['pueblo_pregunta14'];
		$pueblo_pregunta15=$_POST['pueblo_pregunta15'];
		$otra_area = $_POST['otra_area'];

		//datos del evento censo
		$fecha_censo=$_POST["fecha_evento"];

		//datos del encuestador
		$names_encuestador=$_POST['names_encuestador'];
		$fecha_evento=$_POST['fecha_evento'];

		//datos del encuestado
		$names_encuestado=$_POST['names_encuestado'];
		$ced_encuestado=$_POST['ced_encuestado'];
		$idjefe =$_POST["id_jefe"];

		

		//DATOS DEL EVENTO CENSO
		$sql = "INSERT INTO censos(FECHA_CENSO,HORA_CENSO,ID_JEFE)
		 VALUES('$fecha_censo',now(),'$idjefe');";
		
		//datos del jefe de familia
		$sql .= "INSERT INTO datos_personales(CI,NOMBRE,APELLIDO,F_NAC,EDAD)
		 VALUES('$ci','$name','$ape','$fnac','$edad');";
		
		$sql .= "INSERT INTO datos_contacto(TLF_CEL,TLF_HAB,TLF_OFI,EMAIL,ID_JEFE)
		 VALUES('$telfcel','$telfhab','$telfofic','$email','$idjefe');";
		 
		
		$sql .= "INSERT INTO datos_relacion(EMBARAZO,CNE,SEXO,EDOCIVIL,NACIONALIDAD,ID_JEFE)
		 VALUES('$embarazo','$cne','$sexo','$edocivil','$nac','$idjefe');";
		
		$sql .= "INSERT INTO datos_salud(DISCAPACIDAD,TIPO_DISCAPACIDAD,PENSIONADO,INSTITUCION,ID_JEFE)
		 VALUES('$disc','$tipodisc','$pens','$inst','$idjefe');";
		
		$sql .= "INSERT INTO datos_finanzas(TRABAJA,TIPO_INGRESO,INGRESO_MENSUAL,ID_JEFE)
		 VALUES('$trabaja','$tipoing','$ingmens','$idjefe');";
		
		$sql .= "INSERT INTO datos_academicos(PROFESION,NIV_INSTRUCCION,ID_JEFE)
		 VALUES('$profesion','$nivinstruc','$idjefe');";
		
		$sql .= "INSERT INTO datos_encuestado(NOMBRES,CEDULA,ENCUESTADOR,ID_JEFE)
		 VALUES('$names_encuestado','$ced_encuestado','$names_encuestador','$idjefe');";


	for($i=0; $i<count($_POST["namepaef"]); $i++){

		if(!empty($_POST["namepaef"][$i]) && !empty($_POST["cedf"][$i]) && !empty($_POST["sexof"][$i]) &&!empty($_POST["fchanacf"][$i]) && !empty($_POST["edadf"][$i]) && !empty($_POST["discpf"][$i]) && !empty($_POST["embrzf"][$i]) && !empty($_POST["parntscf"][$i]) && !empty($_POST["instrcf"][$i]) && !empty($_POST["cnef"][$i]) && !empty($_POST["profesf"][$i]) && !empty($_POST["pensf"][$i]) && !empty($_POST["ingmnsf"][$i])){

		 	//querys para los familiares
			$sql .= "INSERT INTO datos_familiares(NOMBRES_F,CEDULA_F,SEXO_F,FECHANAC_F,EDAD_F,ID_JEFE)
			 VALUES('".$_POST["namepaef"][$i]."',".$_POST["cedf"][$i].",'".$_POST["sexof"][$i]."','".$_POST["fchanacf"][$i]."',".$_POST["edadf"][$i].",'$idjefe');";
			
			$sql .= "INSERT INTO familiar_academico(GRADO_INSTRUCCION_F,PROFESION_F,ID_JEFE)
			 VALUES('".$_POST["instrcf"][$i]."','".$_POST["profesf"][$i]."','$idjefe');";
			
			$sql .= "INSERT INTO familiar_finanzas(INGMENSUAL_F,ID_JEFE)
			 VALUES('".$_POST["ingmnsf"][$i]."','$idjefe');";
			
			$sql .= "INSERT INTO familiar_relacion(PARENTESCO_F,CNE_F,ID_JEFE)
			 VALUES('".$_POST["parntscf"][$i]."','".$_POST["cnef"][$i]."','$idjefe');";
			
			$sql .= "INSERT INTO familiar_salud(EMBARAZO_F,DISCAPACIDAD_F,PENSIONADO_F,ID_JEFE)
			 VALUES('".$_POST["embrzf"][$i]."','".$_POST["discpf"][$i]."','".$_POST["pensf"][$i]."','$idjefe');";
		}else{
			echo "faltaron campos por llenar";
		}	

	}//fin del for

	if(!empty($_POST["habitaciones"]) && !empty($_POST["enseres_vivienda"]) && !empty($_POST["plagas"]) && !empty($_POST["animales_domst"]) && !empty($_POST["pers_enfermedades"]) && !empty($_POST["pers_exclusion"]) && !empty($_POST["recoleccion_basura"]) && !empty($_POST["telefonia"]) && !empty($_POST["mecan_informacion"]) && !empty($_POST["serv_comunales"]) && !empty($_POST["name_mision"]) && !empty($_POST["pueblo_pregunta_final"])){

		$limitefor = $_POST["habitaciones"] + $_POST["enseres_vivienda"] + $_POST["plagas"] + $_POST["animales_domst"] + $_POST["pers_enfermedades"] + $_POST["mecan_informacion"] + $_POST["serv_comunales"] + $_POST["name_mision"] + $_POST["pueblo_pregunta_final"];

		for($b=0;$b<count($limitefor);$b++){

			$sql .= "INSERT INTO detalles_vivienda VALUES('','$tipo_vivienda','".$_POST["habitaciones"][$b]."','$num_habitaciones','$tipo_paredes','$tipo_techo','".$_POST["enseres_vivienda"][$b]."','".$_POST["plagas"][$b]."','".$_POST["animales_domst"][$b]."',$idjefe);";

			//querys para situacion salud
		$sql .= "INSERT INTO condiciones_salud(PERSONA_ENFERMEDAD,OTRA_ENFERMEDAD,AYUDA_ENFERMOS,TIPO_AYUDA,SITUACION_EXCLUSION,CANTIDAD_EXCLUSION,ID_JEFE)
		VALUES('".$_POST["pers_enfermedades"][$b]."','$otra_enfermedad','$ayuda_enfermo','$tipo_ayuda_enfermo','".$_POST["pers_exclusion"][$b]."','$cant_exclusion','$idjefe');";

		//querys para situacion servicios
		$sql .= "INSERT INTO situacion_servicios(AGUAS_BLANCAS,MEDIDOR,AGUAS_SERVIDAS,GAS,SISTEMA_ELECTRICO,BOMBILLOS_AHORRADORES,RECOL_BASURA,TELEFONIA,TRANSPORTE,TIPO_INFORMACION,SERV_COMUNALES,ID_JEFE)
		VALUES('$aguas_blancas','$posee_medidor','$aguas_servidas','$gas','$sist_electrico','$bombillos_ahorradores','".$_POST["recoleccion_basura"][$b]."','".$_POST["telefonia"][$b]."','$transporte','".$_POST["mecan_informacion"][$b]."','".$_POST["serv_comunales"][$b]."','$idjefe');";

		//querys para participacion comunitaria
		$sql .= "INSERT INTO participacion_comunitaria(ORG_COMUNITARIA,DESCRIPCION,PARTICIPA,PARTICIPA_FAMILIAR,MISIONES_COMUNIDAD,OTRA_MISION,ID_JEFE)
		VALUES('$org_comunitarias','$name_organizacion','$participa_org','$familiar_org','".$_POST["name_mision"][$b]."','$otra_mision','$idjefe');";

		$sql .= "INSERT INTO preguntas_part_comunitaria(P_UNO,P_DOS,P_TRES,P_CUATRO,P_CINCO,P_SEIS,P_SIETE,P_OCHO,P_NUEVE,P_DIEZ,P_ONCE,P_DOCE,P_CATORCE,P_QUINCE,OTRA_AREA,ID_JEFE)
		VALUES('$pueblo_pregunta1','$pueblo_pregunta2','$pueblo_pregunta3','$pueblo_pregunta4','$pueblo_pregunta5','$pueblo_pregunta6','$pueblo_pregunta7','$pueblo_pregunta8','$pueblo_pregunta9','$pueblo_pregunta10','$pueblo_pregunta11','".$_POST["pueblo_pregunta_final"][$b]."','$pueblo_pregunta14','$pueblo_pregunta15','$otra_area','$idjefe');";
		}
	}else{
			echo "faltaron campos por llenar";
		}

		

		//querys para la situacion economica
		$sql .= "INSERT INTO situacion_economica(DONDE_TRABAJA,PREGUNTA_UNO,ING_FAMILIAR,ID_JEFE)
		 VALUES('$dond_trabaja','$act_economica','$ing_familiar','$idjefe');";

		//querys para situacion de vivienda
		$sql .= "INSERT INTO situacion_vivienda(COND_TERRENO,FORMA_TENENCIA,OCV,TERRENO_PROPIO,SIVIH,CONSTANCIA_SIVIH,COTIZA_LPH,SALUBRIDAD_VIVIENDA,ID_JEFE)
		VALUES('$condc_terreno','$tenencia_casa','$ocv','$terreno_propio','$SIVIH','$sivih_inscripcion','$ley_phab','$salubridad_vivienda','$idjefe');";

		$sql .= "INSERT INTO ayuda_vivienda(TIPO_AYUDA,DESCRIPCION,ID_JEFE)
		 VALUES('$tipo_ayuda_casa','$descrip_ayuda_casa','$idjefe');";

		$sql .= "INSERT INTO detalle_servicios(TANQUE,TANQUE_LITROS,PIPOTES,CANT_PIPOTES,PROVEEDOR_GAS,CANT_CILINDROS_GAS,DURACION_GAS,PRECIO_GAS,ID_JEFE)
		VALUES('$posee_tanque','$litros_tanque','$posee_pipotes','$cant_pipotes','$proveedor_gas','$cant_cilindros','$duración_gas','$precio_gas','$idjefe');";
		
		$sql .= "INSERT INTO detalles_serv_electrico(MEDIDOR,BOMBILLOS_NECESITA,ID_JEFE)
		 VALUES('$medidor_electrico','$cant_bombillos','$idjefe')";


		//echo $sql;
			

			if (mysqli_multi_query(Conecta::conx(), $sql)) {
				echo "<script type='text/javascript'>alert('Censo cargado exitosamente');window.location='../vistas/listadocensos.php';</script>";
			    //header('location:../vistas/administra.php');
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error(Conecta::conx());
			}

			mysqli_close(Conecta::conx());



		//datos situacion comunidad
		/*$sql .= "INSERT INTO situacion_cmunidad(P_UNO,P_DOS,ID_JEFE)
		 VALUES('$pueblo_pregunta14','$pueblo_pregunta15','$idjefe')";*/


	 }//fin del metodo insertacenso


/*///////////////////////////////////////////////////////////////////////////////////////////////*/
/*//////////////////CONSULTAS PARA CARGAR LOS COMBO BOX DEL FORM CENSO///////////////////////////*/
/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 /*metodo que consulta la nacionalidad para cargarla al combo box del form del censo*/
	 public function get_nacionalidad(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from persona_nacionalidad") or die("No se pudo realizar la consulta de la nacionalidad");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->nac[]=$reg;
	 	}
	 	return $this->nac;
	 }//fin del metodo get_nacionalidad

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 /*metodo que consulta el estado civil para cargarla al combo box del form del censo*/
	 public function get_estado_civil(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from persona_estado_civil") or die("No se pudo realizar la consulta del estado civil");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->edocivil[]=$reg;
	 	}
	 	return $this->edocivil;
	 }//fin del metodo estado civil

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 /*metodo que consulta el tipo de ingreso para cargarla al combo box del form del censo*/
	 public function get_tipo_ingreso(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from persona_tipo_ingreso") or die("No se pudo realizar la consulta del tipo de ingreso");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->tipoing[]=$reg;
	 	}
	 	return $this->tipoing;
	 }//fin del metodo tipo de ingreso

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 /*metodo que consulta el nivl de instruccion para cargarla al combo box del form del censo*/
	 public function get_nivel_instruccion(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from nivel_instruccion") or die("No se pudo realizar la consulta del nivel de instruccion");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->nivlinstrc[]=$reg;
	 	}
	 	return $this->nivlinstrc;
	 }//fin del metodo nivl de instruccion

	 //para los familiares
	 /*metodo que consulta el nivl de instruccion para cargarla al combo box del form del censo*/
	 public function get_nivel_instruccion_f(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from nivel_instruccion") or die("No se pudo realizar la consulta del nivel de instruccion");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->nivlinstrcf[]=$reg;
	 	}
	 	return $this->nivlinstrcf;
	 }//fin del metodo nivl de instruccion

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 /*metodo que consulta las profesiones para cargarla al combo box del form del censo*/
	 public function get_profesiones(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from profesiones") or die("No se pudo realizar la consulta de las profesiones");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->profesns[]=$reg;
	 	}
	 	return $this->profesns;
	 }//fin del metodo profesiones

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 /*metodo que consulta las profesiones de los familiares para cargarlas al combo box del form del censo*/
	 public function get_profesiones_f(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from profesiones") or die("No se pudo realizar la consulta de las profesiones para los familiares");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->profesnsf[]=$reg;
	 	}
	 	return $this->profesnsf;
	 }//fin del metodo profesionesF

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 /*metodo que consulta el parentesco para los familiares y asi poder cargarlo al combo box del form del censo*/
	 public function get_parentesco_f(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from parentesco") or die("No se pudo realizar la consulta del parentesco para los familiares");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->parentescof[]=$reg;
	 	}
	 	return $this->parentescof;
	 }//fin del metodo parentescof

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 /*metodo que consulta el ingreso familiar para cargarlo al combo box del form del censo*/
	 public function get_ingreso_familiar(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from casa_ingreso_familiar") or die("No se pudo realizar la consulta de opciones para cargar el ingreso familiar");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->ingfamiliar[]=$reg;
	 	}
	 	return $this->ingfamiliar;
	 }//fin del metodo get_ingreso_familiar

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 /*metodo que consulta las condiciones del terreno para cargarlas al combo box del form del censo*/
	 public function get_condiciones_terreno(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from casa_condiciones_terreno") or die("No se pudo realizar la consulta de condiciones del terreno");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->condterreno[]=$reg;
	 	}
	 	return $this->condterreno;
	 }//fin del metodo get_condiciones_terreno

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 /*metodo que consulta las condiciones del terreno para cargarlas al combo box del form del censo*/
	 public function get_casa_forma_tenencia(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from casa_formas_tenencia") or die("No se pudo realizar la consulta de forma de tenencia de casa");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->formtenencia[]=$reg;
	 	}
	 	return $this->formtenencia;
	 }//fin del metodo get_casa_forma_tenencia

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 /*metodo que consulta EL TIPO DE VIVIENDA para cargarlas al combo box del form del censo*/
	 public function get_casa_tipo_vivienda(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from casa_tipo_vivienda") or die("No se pudo realizar la consulta de tipo de vivienda");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->tipoviv[]=$reg;
	 	}
	 	return $this->tipoviv;
	 }//fin del metodo get_casa_tipo_vivienda

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 /*metodo que consulta las tipo de habitaciones para cargarlas al combo box del form del censo*/
	 public function get_casa_habitaciones(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from casa_habitaciones") or die("No se pudo realizar la consulta de tipo de habitaciones");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->tipohab[]=$reg;
	 	}
	 	return $this->tipohab;
	 }//fin del metodo get_casa_habitaciones

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 /*metodo que consulta las tipo paredes para cargarlas al combo box del form del censo*/
	 public function get_casa_tipo_paredes(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from casa_tipo_paredes") or die("No se pudo realizar la consulta de tipo de paredes");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->tipoparedes[]=$reg;
	 	}
	 	return $this->tipoparedes;
	 }//fin del metodo get_casa_tipo_paredes

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 /*metodo que consulta TIPO DE TECHO para cargarlas al combo box del form del censo*/
	 public function get_casa_tipo_techo(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from casa_tipo_techo") or die("No se pudo realizar la consulta de tipo de techo");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->tipotecho[]=$reg;
	 	}
	 	return $this->tipotecho;
	 }//fin del metodo casa_tipo_techo

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 /*metodo que consulta ENSERES DE VIVIENDA para cargarlas al combo box del form del censo*/
	 public function get_casa_enseres_vivienda(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from casa_enseres_vivienda") or die("No se pudo realizar la consulta de enseres de vivienda");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->enseresvivind[]=$reg;
	 	}
	 	return $this->enseresvivind;
	 }//fin del metodo get_casa_enseres_vivienda

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 /*metodo que consulta salubridad de vivienda para cargarlas al combo box del form del censo*/
	 public function get_casa_salubridad_vivienda(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from casa_salubridad_vivienda") or die("No se pudo realizar la consulta de salubridad vivienda");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->salubvivind[]=$reg;
	 	}
	 	return $this->salubvivind;
	 }//fin del metodo get_casa_salubridad_vivienda

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 /*metodo que consulta tipo ayuda vivienda para cargarlas al combo box del form del censo*/
	 public function get_casa_tipo_ayuda_mejora(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from casa_tipo_ayuda_mejora") or die("No se pudo realizar la consulta de tipo ayuda para casa");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->tipayudacasa[]=$reg;
	 	}
	 	return $this->tipayudacasa;
	 }//fin del metodo casa_tipo_ayuda_mejora

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 /*metodo que consulta si hay plagas en vivienda para cargarlas al combo box del form del censo*/
	 public function get_casa_plagas(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from casa_plagas") or die("No se pudo realizar la consulta de PLAGAS en casa");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->plagascasa[]=$reg;
	 	}
	 	return $this->plagascasa;
	 }//fin del metodo ccasa_plagas

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 /*metodo que consulta si hay ANIMALES en vivienda para cargarlas al combo box del form del censo*/
	 public function get_casa_animales(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from casa_animales") or die("No se pudo realizar la consulta de PLAGAS en casa");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->animalescasa[]=$reg;
	 	}
	 	return $this->animalescasa;
	 }//fin del metodo casa_animales

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 /*metodo que consulta tipo de enfermedades para cargarlas al combo box del form del censo*/
	 public function get_persona_enfermedades(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from persona_enfermedades") or die("No se pudo realizar la consulta de enfermedades");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->persenferm[]=$reg;
	 	}
	 	return $this->persenferm;
	 }//fin del metodo persona_enfermedades

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 /*metodo que consulta tipo de enfermedades para cargarlas al combo box del form del censo*/
	 public function get_personas_exclusion(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from personas_exclusion") or die("No se pudo realizar la consulta de personas en exclusion");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->persexclus[]=$reg;
	 	}
	 	return $this->persexclus;
	 }//fin del metodo personas_exclusion

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 /*metodo que consulta tipo de aguas blancas para cargarlas al combo box del form del censo*/
	 public function get_casa_aguas_blancas(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from casa_aguas_blancas") or die("No se pudo realizar la consulta de aguas blancas");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->aguasblanc[]=$reg;
	 	}
	 	return $this->aguasblanc;
	 }//fin del metodo casa_aguas_blancas

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 /*metodo que consulta tipo de aguas blancas para cargarlas al combo box del form del censo*/
	 public function get_casa_aguas_servidas(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from casa_aguas_servidas") or die("No se pudo realizar la consulta de aguas servidas");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->aguaserv[]=$reg;
	 	}
	 	return $this->aguaserv;
	 }//fin del metodo casa_aguas_servidas

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 /*metodo que consulta GAS para cargarlas al combo box del form del censo*/
	 public function get_casa_gas(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from casa_gas") or die("No se pudo realizar la consulta del gas");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->gascasa[]=$reg;
	 	}
	 	return $this->gascasa;
	 }//fin del metodo casa_gas

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 /*metodo que consulta GAS para cargarlas al combo box del form del censo*/
	 public function get_casa_sistema_electrico(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from casa_sistema_electrico") or die("No se pudo realizar la consulta del sistema electrico");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->electrcasa[]=$reg;
	 	}
	 	return $this->electrcasa;
	 }//fin del metodo casa_sistema_electrico

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 /*metodo que consulta GAS para cargarlas al combo box del form del censo*/
	 public function get_casa_recoleccion_basura(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from casa_recoleccion_basura") or die("No se pudo realizar la consulta del tipo de recoleccion de basura");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->recolbasura[]=$reg;
	 	}
	 	return $this->recolbasura;
	 }//fin del metodo casa_recoleccion_basura

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 
	 public function get_casa_telefonia(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from casa_telefonia") or die("No se pudo realizar la consulta del tipo de tipo de telefonia");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->telefonia[]=$reg;
	 	}
	 	return $this->telefonia;
	 }

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	
	 public function get_casa_transporte(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from casa_transporte") or die("No se pudo realizar la consulta del tipo de transporte");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->trasnprte[]=$reg;
	 	}
	 	return $this->trasnprte;
	 }//fin del metodo get_casa_transporte

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 
	 public function get_casa_mecanismo_infor(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from casa_mecanismo_infor") or die("No se pudo realizar la consulta del tipo de mecanismo de información");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->mecainfo[]=$reg;
	 	}
	 	return $this->mecainfo;
	 }

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 
	 public function get_casa_servicios_comunales(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from casa_servicios_comunales") or die("No se pudo realizar la consulta del tipo de servicios comunales");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->servcomunales[]=$reg;
	 	}
	 	return $this->servcomunales;
	 }//fin del metodo get_casa_servicios_comunales

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

/*///////////////////////////////////////////////////////////////////////////////////////////////*/

	 
	 public function get_comunidad_misiones(){
	 	$sql=mysqli_query(Conecta::conx(),"select * from comunidad_misiones") or die("No se pudo realizar la consulta del tipo de misiones");
	 	while($reg=mysqli_fetch_assoc($sql)){
	 		$this->misiones[]=$reg;
	 	}
	 	return $this->misiones;
	 }//fin del metodo get_comunidad_misiones

/*///////////////////////////////////////////////////////////////////////////////////////////////*/





 }//final de la class operar
?>