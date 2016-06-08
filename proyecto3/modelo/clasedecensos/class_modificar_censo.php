<?php 
require_once("../modelo/conecta.php");

class Modificaciones_Censos{

public function Modificar_censo_por_id($id){ 
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

		//datos financieos
		$trabaja = $_POST['trabaja'];
		$tipoing = $_POST['tipoing'];
		$ingmens = $_POST['ingmens'];

		//datos academicos
		$nivinstruc = $_POST['nivinstruc'];
		$profesion = $_POST['profesion'];

		//datos de los familiares
		//datos del familiar uno
		$name_f1=$_POST['nameyape_familiar1'];
		$ced_f1 = $_POST['ced_familiar1'];
		$fnac_f1 = $_POST['fnac_familiar1'];
		$edad_f1 = $_POST['edad_familiar1'];
		$discp_f1 = $_POST['discap_familiar1'];
		$embrz_f1 = $_POST['embarazo_familiar1'];
		$parnt_f1 = $_POST['parentesco_familiar1'];
		$gintruc_f1 = $_POST['gradoinst_familiar1'];
		$cne_f1 = $_POST['cne_familiar1'];
		$prof_f1 = $_POST['profesion_familiar1'];
		$pens_f1 = $_POST['pensionado_familiar1'];
		$ingmensual_f1 = $_POST['ingrmensual_familiar1'];

		//datos de situacion economica
		$dond_trabaja = $_POST['donde_trabaja'];
		$act_economica = $_POST['act_economica'];
		$ing_familiar = $_POST['ing_familiar'];

		//datos situacion vivienda
		$condc_terreno = $_POST['condc_terreno'];
		$tenencia_casa = $_POST['tenencia_casa'];
		$tipo_vivienda = $_POST['tipo_vivienda'];
		$habitaciones = $_POST['habitaciones'];
		$num_habitaciones = $_POST['num_habitaciones'];
		$ocv = $_POST['ocv'];
		$terreno_propio = $_POST['terreno_propio'];
		$tipo_paredes = $_POST['tipo_paredes'];
		$tipo_techo = $_POST['tipo_techo'];
		$SIVIH = $_POST['SIVIH'];
		$sivih_inscripcion = $_POST['sivih_inscripcion'];
		$ley_phab = $_POST['ley_phab'];
		$enseres_vivienda = $_POST['enseres_vivienda'];
		$salubridad_vivienda = $_POST['salubridad_vivienda'];
		$tipo_ayuda_casa = $_POST['tipo_ayuda_casa'];
		$descrip_ayuda_casa = $_POST['tipo_ayuda_casa'];
		$plagas = $_POST['plagas'];
		$animales_domst = $_POST['animales_domst'];

		//DATOS CONDICION_SALUD
		$pers_enfermedades = $_POST['pers_enfermedades'];
		$otra_enfermedad = $_POST['otra_enfermedad'];
		$ayuda_enfermo = $_POST['ayuda_enfermo'];
		$tipo_ayuda_enfermo = $_POST['tipo_ayuda_enfermo'];
		$pers_exclusion = $_POST['pers_exclusion'];
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
		$recoleccion_basura = $_POST['recoleccion_basura'];
		$telefonia = $_POST['telefonia'];
		$transporte = $_POST['transporte'];
		$mecan_informacion = $_POST['mecan_informacion'];
		$serv_comunales = $_POST['serv_comunales'];

		//DATOS PARTICIPACION COMUNITARIA
		$org_comunitarias = $_POST['org_comunitarias'];
		$name_organizacion = $_POST['name_organizacion'];
		$participa_org = $_POST['participa_org'];
		$familiar_org = $_POST['familiar_org'];
		$name_mision = $_POST['name_mision'];
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
		$pueblo_pregunta12=$_POST['pueblo_pregunta12'];
		$pueblo_pregunta14=$_POST['pueblo_pregunta14'];
		$pueblo_pregunta15=$_POST['pueblo_pregunta15'];
		$otra_area = $_POST['otra_area'];

		//SITUACION COMUNIDAD
		$pueblo_pregunta14 = $_POST['pueblo_pregunta14'];
		$pueblo_pregunta15 = $_POST['pueblo_pregunta15'];

		//datos del evento censo
		$fecha_censo=$_POST["fecha_evento"];

		//datos del encuestador
		$names_encuestador=$_POST['names_encuestador'];
		$fecha_evento=$_POST['fecha_evento'];

		//datos del encuestado
		$names_encuestado=$_POST['names_encuestado'];
		$ced_encuestado=$_POST['ced_encuestado'];
		$idjefe =$_POST["id_jefe"];

		//numero de registro asignada al censo
		$idjefe=$_POST["id_jefe"];

		//DATOS DEL EVENTO CENSO
		$sql = "UPDATE censos SET FECHA_CENSO='$fecha_censo',HORA_CENSO='now()',ID_JEFE='$idjefe' 
		WHERE ID_JEFE=$id;";
		
		//datos del jefe de familia
		$sql .= "UPDATE datos_personales SET CI='$ci',NOMBRE='$name',APELLIDO='$ape',F_NAC='$fnac',EDAD='$edad' 
		WHERE ID_DATAPERSONAL=$id;";
		
		$sql .= "UPDATE datos_contacto SET TLF_CEL='$telfcel',TLF_HAB='$telfhab',TLF_OFI='$telfofic',EMAIL='$email',ID_JEFE='$idjefe' WHERE ID_JEFE=$id;";
		 
		
		$sql .= "UPDATE datos_relacion SET EMBARAZO='$embarazo',CNE='$cne',SEXO='$sexo',EDOCIVIL='$edocivil',ID_JEFE='$idjefe'
		WHERE ID_JEFE=$id;";
		
		$sql .= "UPDATE datos_salud SET DISCAPACIDAD='$disc',TIPO_DISCAPACIDAD='$tipodisc',PENSIONADO='$pens',INSTITUCION='$inst',ID_JEFE='$idjefe' WHERE ID_JEFE=$id;";
		
		$sql .= "UPDATE datos_finanzas SET TRABAJA='$trabaja',TIPO_INGRESO='$tipoing',INGRESO_MENSUAL='$ingmens',ID_JEFE='$idjefe' WHERE ID_JEFE=$id;";
		
		$sql .= "UPDATE datos_academicos SET PROFESION='$profesion',NIV_INSTRUCCION='$nivinstruc',ID_JEFE='$idjefe'
		 WHERE ID_JEFE=$id;";
		
		$sql .= "UPDATE datos_encuestado SET NOMBRES='$names_encuestado',CEDULA='$ced_encuestado',ENCUESTADOR='$names_encuestador' WHERE ID_JEFE=$id;";
		
	for($i=0; $i<count($_POST["namepaef"]); $i++){

		if(!empty($_POST["namepaef"][$i]) && !empty($_POST["cedf"][$i]) && !empty($_POST["fchanacf"][$i]) && !empty($_POST["edadf"][$i]) && !empty($_POST["discpf"][$i]) && !empty($_POST["embrzf"][$i]) && !empty($_POST["parntscf"][$i]) && !empty($_POST["instrcf"][$i]) && !empty($_POST["cnef"][$i]) && !empty($_POST["profesf"][$i]) && !empty($_POST["pensf"][$i]) && !empty($_POST["ingmnsf"][$i])){

		 	//querys para los familiares
			$sql .= "UPDATE datos_familiares(NOMBRES_F,CEDULA_F,FECHANAC_F,EDAD_F,ID_JEFE)
			 VALUES('".$_POST["namepaef"][$i]."',".$_POST["cedf"][$i].",'".$_POST["fchanacf"][$i]."',".$_POST["edadf"][$i].",'$idjefe');";
			
			$sql .= "UPDATE familiar_academico(GRADO_INSTRUCCION_F,PROFESION_F,ID_JEFE)
			 VALUES('".$_POST["instrcf"][$i]."','".$_POST["profesf"][$i]."','$idjefe');";
			
			$sql .= "UPDATE familiar_finanzas(INGMENSUAL_F,ID_JEFE)
			 VALUES('".$_POST["ingmnsf"][$i]."','$idjefe');";
			
			$sql .= "UPDATE familiar_relacion(PARENTESCO_F,CNE_F,ID_JEFE)
			 VALUES('".$_POST["parntscf"][$i]."','".$_POST["cnef"][$i]."','$idjefe');";
			
			$sql .= "UPDATE familiar_salud(EMBARAZO_F,DISCAPACIDAD_F,PENSIONADO_F,ID_JEFE)
			 VALUES('".$_POST["embrzf"][$i]."','".$_POST["discpf"][$i]."','".$_POST["pensf"][$i]."','$idjefe');";
	
		}else{

		}//fin de la condicional para los familiares	

	}//fin del bucle for


		//querys para la situacion economica
		$sql .= "UPDATE situacion_economica SET DONDE_TRABAJA='$dond_trabaja',PREGUNTA_UNO='$act_economica',ING_FAMILIAR='$ing_familiar',ID_JEFE='$idjefe' WHERE ID_JEFE=$id;";

		//querys para situacion de vivienda
		$sql .= "UPDATE situacion_vivienda SET COND_TERRENO='$condc_terreno',FORMA_TENENCIA='$tenencia_casa',OCV='$ocv',TERRENO_PROPIO='$terreno_propio',SIVIH='$SIVIH',CONSTANCIA_SIVIH='$sivih_inscripcion',COTIZA_LPH='$ley_phab',SALUBRIDAD_VIVIENDA='$salubridad_vivienda',ID_JEFE='$idjefe' WHERE ID_JEFE=$id;";
		
		$sql .= "UPDATE detalles_vivienda SET TIPO_VIVIENDA='$tipo_vivienda',HABITACIONES='$habitaciones',NUM_HABITACIONES='$num_habitaciones',TIPO_PAREDES='$tipo_paredes',TIPO_TECHO='$tipo_techo',ENSERES_VIVIENDA='$enseres_vivienda',INSECTOS_ROEDORES='$plagas',ANIMALES_DOMESTICOS='$animales_domst',ID_JEFE='$idjefe' WHERE ID_JEFE=$id;";

		$sql .= "UPDATE ayuda_vivienda SET TIPO_AYUDA='$tipo_ayuda_casa',DESCRIPCION='$descrip_ayuda_casa',ID_JEFE='$idjefe'
		 WHERE ID_JEFE=$id;";
		
		//querys para situacion salud
		$sql .= "UPDATE condiciones_salud SET PERSONA_ENFERMEDAD='$pers_enfermedades',OTRA_ENFERMEDAD='$otra_enfermedad',AYUDA_ENFERMOS='$ayuda_enfermo',TIPO_AYUDA='$tipo_ayuda_enfermo',SITUACION_EXCLUSION='$pers_exclusion',CANTIDAD_EXCLUSION='$cant_exclusion',ID_JEFE='$idjefe' WHERE ID_JEFE=$id;";

		//querys para situacion servicios
		$sql .= "UPDATE situacion_servicios SET AGUAS_BLANCAS='$aguas_blancas',MEDIDOR='$posee_medidor',AGUAS_SERVIDAS='$aguas_servidas',GAS='$gas',SISTEMA_ELECTRICO='$sist_electrico',BOMBILLOS_AHORRADORES='$bombillos_ahorradores',RECOL_BASURA='$recoleccion_basura',TELEFONIA='$telefonia',TRANSPORTE='$transporte',TIPO_INFORMACION='$mecan_informacion',SERV_COMUNALES='$serv_comunales',ID_JEFE='$idjefe' WHERE ID_JEFE=$id;";

		$sql .= "UPDATE detalle_servicios SET TANQUE='$posee_tanque',TANQUE_LITROS='$litros_tanque',PIPOTES='$posee_pipotes',CANT_PIPOTES='$cant_pipotes',PROVEEDOR_GAS='$proveedor_gas',CANT_CILINDROS_GAS='$cant_cilindros',DURACION_GAS='$duración_gas',PRECIO_GAS='$precio_gas',ID_JEFE='$idjefe' WHERE ID_JEFE=$id;";
		
		$sql .= "UPDATE detalles_serv_electrico SET MEDIDOR='$medidor_electrico',BOMBILLOS_NECESITA='$cant_bombillos',ID_JEFE='$idjefe' WHERE ID_JEFE=$id;";

		//querys para participacion comunitaria
		$sql .= "UPDATE participacion_comunitaria SET ORG_COMUNITARIA='$org_comunitarias',DESCRIPCION='$name_organizacion',PARTICIPA='$participa_org',PARTICIPA_FAMILIAR='$familiar_org',MISIONES_COMUNIDAD='$name_mision',OTRA_MISION='$otra_mision',ID_JEFE='$idjefe' WHERE ID_JEFE=$id;";

		$sql .= "UPDATE preguntas_part_comunitaria SET P_UNO='$pueblo_pregunta1',P_DOS='$pueblo_pregunta2',P_TRES='$pueblo_pregunta3',P_CUATRO='$pueblo_pregunta4',P_CINCO='$pueblo_pregunta5',P_SEIS='$pueblo_pregunta6',P_SIETE='$pueblo_pregunta7',P_OCHO='$pueblo_pregunta8',P_NUEVE='$pueblo_pregunta9',P_DIEZ='$pueblo_pregunta10',P_ONCE='$pueblo_pregunta11',P_DOCE='$pueblo_pregunta12',P_CATORCE='$pueblo_pregunta14',P_QUINCE='$pueblo_pregunta15',OTRA_AREA='$otra_area',ID_JEFE='$idjefe' WHERE ID_JEFE=$id";
		
			if (mysqli_multi_query(Conecta::conx(), $sql)) {
				echo "<script type='text/javascript'>alert('Censo modificado con éxito.');window.location='../vistas/administra.php';</script>";
			    //header('location:../vistas/administra.php');
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_errno(Conecta::conx());
			}

			mysqli_close(Conecta::conx());



		//datos situacion comunidad
		/*$sql .= "UPDATE situacion_cmunidad(P_UNO,P_DOS,ID_JEFE)
		 VALUES('$pueblo_pregunta14','$pueblo_pregunta15','$idjefe')";*/

		

		//datos del evento_censo
	
	

	 }//fin del metodo insertacenso


 }//final de la class operar
?>