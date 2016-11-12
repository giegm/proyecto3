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

		//datos financieros
		$trabaja = $_POST['trabaja'];
		$tipoing = $_POST['tipoing'];
		$ingmens = $_POST['ingmens'];

		//datos academicos
		$nivinstruc = $_POST['nivinstruc'];
		$profesion = $_POST['profesion'];

		//datos del miembro de familia
		$namepaef = $_POST['namepaef'];
		$cedf = $_POST['cedf'];
		$sexof = $_POST['sexof'];
		$fchanacf = $_POST['fchanacf'];
		$edadf = $_POST['edadf'];
		$instrcf = $_POST['instrcf'];
		$profesf = $_POST['profesf'];
		$ingmnsf = $_POST['ingmnsf'];
		$parntscf = $_POST['parntscf'];
		$cnef = $_POST['cnef'];
		$embrzf = $_POST['embrzf'];
		$discpf = $_POST['discpf'];
		$pensf = $_POST['pensf'];

		//datos de situacion economica
		$dond_trabaja = $_POST['donde_trabaja'];
		$act_economica = $_POST['act_economica'];
		$ing_familiar = $_POST['ing_familiar'];

		//datos situacion vivienda
		$condc_terreno = $_POST['condc_terreno'];
		$tenencia_casa = $_POST['tenencia_casa'];
		$tipo_vivienda = $_POST['tipo_vivienda'];
		$habitaciones = $_POST['habitaciones'];
		$habitaciones1 = $_POST['habitaciones1'];
		$habitaciones2 = $_POST['habitaciones2'];
		$habitaciones3 = $_POST['habitaciones3'];
		$num_habitaciones = $_POST['num_habitaciones'];
		$ocv = $_POST['ocv'];
		$terreno_propio = $_POST['terreno_propio'];
		$tipo_paredes = $_POST['tipo_paredes'];
		$tipo_techo = $_POST['tipo_techo'];
		$enseres_vivienda = $_POST['enseres_vivienda'];
		$enseres_vivienda2 = $_POST['enseres_vivienda2'];
		$enseres_vivienda3 = $_POST['enseres_vivienda3'];
		$enseres_vivienda4 = $_POST['enseres_vivienda4'];
		$enseres_vivienda5 = $_POST['enseres_vivienda5'];
		$enseres_vivienda6 = $_POST['enseres_vivienda6'];
		$enseres_vivienda7 = $_POST['enseres_vivienda7'];
		$enseres_vivienda8 = $_POST['enseres_vivienda8'];
		$enseres_vivienda9 = $_POST['enseres_vivienda9'];
		$enseres_vivienda10 = $_POST['enseres_vivienda10'];
		$plagas = $_POST['plagas'];
		$plagas2 = $_POST['plagas2'];
		$plagas3 = $_POST['plagas3'];
		$plagas4 = $_POST['plagas4'];
		$plagas5 = $_POST['plagas5'];
		$animales_domst = $_POST['animales_domst'];
		$animales_domst2 = $_POST['animales_domst2'];
		$animales_domst3 = $_POST['animales_domst3'];
		$animales_domst4 = $_POST['animales_domst4'];
		$animales_domst5 = $_POST['animales_domst5'];
		$animales_domst6 = $_POST['animales_domst6'];
		$animales_domst7 = $_POST['animales_domst7'];
		$SIVIH = $_POST['SIVIH'];
		$sivih_inscripcion = $_POST['sivih_inscripcion'];
		$ley_phab = $_POST['ley_phab'];
		$salubridad_vivienda = $_POST['salubridad_vivienda'];
		$tipo_ayuda_casa = $_POST['tipo_ayuda_casa'];
		$descrip_ayuda_casa = $_POST['tipo_ayuda_casa'];

		//DATOS CONDICION_SALUD

		$pers_enfermedades = $_POST['pers_enfermedades'];
		$pers_enfermedades1 = $_POST['pers_enfermedades1'];
		$pers_enfermedades2 = $_POST['pers_enfermedades2'];
		$pers_enfermedades3 = $_POST['pers_enfermedades3'];
		$pers_enfermedades4 = $_POST['pers_enfermedades4'];
		$pers_enfermedades5 = $_POST['pers_enfermedades5'];
		$pers_enfermedades6 = $_POST['pers_enfermedades6'];
		$pers_enfermedades7 = $_POST['pers_enfermedades7'];
		$pers_enfermedades8 = $_POST['pers_enfermedades8'];
		$pers_enfermedades9 = $_POST['pers_enfermedades9'];
		$otra_enfermedad = $_POST['otra_enfermedad'];
		$ayuda_enfermo = $_POST['ayuda_enfermo'];
		$tipo_ayuda_enfermo = $_POST['tipo_ayuda_enfermo'];
		$pers_exclusion = $_POST['pers_exclusion'];
		$pers_exclusion1 = $_POST['pers_exclusion1'];
		$pers_exclusion2 = $_POST['pers_exclusion2'];
		$pers_exclusion3 = $_POST['pers_exclusion3'];
		$pers_exclusion4 = $_POST['pers_exclusion4'];
		$pers_exclusion5 = $_POST['pers_exclusion5'];
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
		$recoleccion_basura1 = $_POST['recoleccion_basura1'];
		$recoleccion_basura2 = $_POST['recoleccion_basura2'];
		$recoleccion_basura3 = $_POST['recoleccion_basura3'];
		$recoleccion_basura4 = $_POST['recoleccion_basura4'];
		$recoleccion_basura5 = $_POST['recoleccion_basura5'];
		$recoleccion_basura6 = $_POST['recoleccion_basura6'];
		$telefonia = $_POST['telefonia'];
		$telefonia1 = $_POST['telefonia1'];
		$telefonia2 = $_POST['telefonia2'];
		$telefonia3 = $_POST['telefonia3'];
		$telefonia4 = $_POST['telefonia4'];
		$transporte = $_POST['transporte'];
		$mecan_informacion = $_POST['mecan_informacion'];
		$mecan_informacion1 = $_POST['mecan_informacion1'];
		$mecan_informacion2 = $_POST['mecan_informacion2'];
		$mecan_informacion3 = $_POST['mecan_informacion3'];
		$mecan_informacion4 = $_POST['mecan_informacion4'];
		$mecan_informacion5 = $_POST['mecan_informacion5'];
		$serv_comunales = $_POST['serv_comunales'];
		$serv_comunales1 = $_POST['serv_comunales1'];
		$serv_comunales2 = $_POST['serv_comunales2'];
		$serv_comunales3 = $_POST['serv_comunales3'];
		$serv_comunales4 = $_POST['serv_comunales4'];
		$serv_comunales5 = $_POST['serv_comunales5'];
		$serv_comunales6 = $_POST['serv_comunales6'];
		$serv_comunales7 = $_POST['serv_comunales7'];
		$serv_comunales8 = $_POST['serv_comunales8'];
		$serv_comunales9 = $_POST['serv_comunales9'];
		$serv_comunales10 = $_POST['serv_comunales10'];
		$serv_comunales11 = $_POST['serv_comunales11'];
		$serv_comunales12 = $_POST['serv_comunales12'];


		//DATOS PARTICIPACION COMUNITARIA
		$org_comunitarias = $_POST['org_comunitarias'];
		$name_organizacion = $_POST['name_organizacion'];
		$participa_org = $_POST['participa_org'];
		$name_mision = $_POST['name_mision'];
		$name_mision1 = $_POST['name_mision1'];
		$name_mision2 = $_POST['name_mision2'];
		$name_mision3 = $_POST['name_mision3'];
		$name_mision4 = $_POST['name_mision4'];
		$name_mision5 = $_POST['name_mision5'];
		$name_mision6 = $_POST['name_mision6'];
		$familiar_org = $_POST['familiar_org'];
		$otra_mision = $_POST['otra_mision'];
		$pueblo_pregunta1 = $_POST['pueblo_pregunta1'];
		$pueblo_pregunta2 = $_POST['pueblo_pregunta2'];
		$pueblo_pregunta3 = $_POST['pueblo_pregunta3'];
		$pueblo_pregunta4 = $_POST['pueblo_pregunta4'];
		$pueblo_pregunta5 = $_POST['pueblo_pregunta5'];
		$pueblo_pregunta6 = $_POST['pueblo_pregunta6'];
		$pueblo_pregunta7 = $_POST['pueblo_pregunta7'];
		$pueblo_pregunta8 = $_POST['pueblo_pregunta8'];
		$pueblo_pregunta9 = $_POST['pueblo_pregunta9'];
		$pueblo_pregunta10 = $_POST['pueblo_pregunta10'];
		$pueblo_pregunta11 = $_POST['pueblo_pregunta11'];
		$pueblo_pregunta_final = $_POST['pueblo_pregunta_final'];
		$pueblo_pregunta_final1 = $_POST['pueblo_pregunta_final1'];
		$pueblo_pregunta_final2 = $_POST['pueblo_pregunta_final2'];
		$pueblo_pregunta_final3 = $_POST['pueblo_pregunta_final3'];
		$pueblo_pregunta_final4 = $_POST['pueblo_pregunta_final4'];
		$pueblo_pregunta_final5 = $_POST['pueblo_pregunta_final5'];
		$pueblo_pregunta_final6 = $_POST['pueblo_pregunta_final6'];
		$pueblo_pregunta_final7 = $_POST['pueblo_pregunta_final7'];
		$pueblo_pregunta_final8 = $_POST['pueblo_pregunta_final8'];
		$pueblo_pregunta_final9 = $_POST['pueblo_pregunta_final9'];
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
		$sql = "UPDATE censos SET FECHA_CENSO='$fecha_censo',HORA_CENSO=now(),ID_JEFE='$idjefe' 
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
		
		 	//querys para los familiares
		for ($i=0; $i <count($_POST["namepaef"]); $i++) { 
		
		//datos del miembro de familia
		$namepaef = $_POST['namepaef'][$i];
		$cedf = $_POST['cedf'][$i];
		$sexof = $_POST['sexof'][$i];
		$fchanacf = $_POST['fchanacf'][$i];
		$edadf = $_POST['edadf'][$i];
		$instrcf = $_POST['instrcf'][$i];
		$profesf = $_POST['profesf'][$i];
		$ingmnsf = $_POST['ingmnsf'][$i];
		$parntscf = $_POST['parntscf'][$i];
		$cnef = $_POST['cnef'][$i];
		$embrzf = $_POST['embrzf'][$i];
		$discpf = $_POST['discpf'][$i];
		$pensf = $_POST['pensf'][$i];
		$sql .= "UPDATE datos_familiares SET NOMBRES_F='$namepaef',CEDULA_F='$cedf',SEXO_F='$sexof',FECHANAC_F='$fchanacf',EDAD_F='$edadf',ID_JEFE='$idjefe' WHERE ID_JEFE=$id;";	
		$sql .= "UPDATE familiar_academico SET GRADO_INSTRUCCION_F='$instrcf',PROFESION_F='$profesf',ID_JEFE='$idjefe' WHERE ID_JEFE=$id;";
		$sql .= "UPDATE familiar_finanzas SET INGMENSUAL_F='$ingmnsf',ID_JEFE='$idjefe' WHERE ID_JEFE=$id;";
		$sql .= "UPDATE familiar_relacion SET PARENTESCO_F='$parntscf',CNE_F='$cnef',ID_JEFE='$idjefe' WHERE ID_JEFE=$id;";
		$sql .= "UPDATE familiar_salud SET EMBARAZO_F='$embrzf',DISCAPACIDAD_F='$discpf',PENSIONADO_F='$pensf',ID_JEFE='$idjefe' WHERE ID_JEFE=$id;";

		}
		
		//querys para la situacion economica
		$sql .= "UPDATE situacion_economica SET DONDE_TRABAJA='$dond_trabaja',PREGUNTA_UNO='$act_economica',ING_FAMILIAR='$ing_familiar',ID_JEFE='$idjefe' WHERE ID_JEFE=$id;";

		//querys para situacion de vivienda
		$sql .= "UPDATE situacion_vivienda SET COND_TERRENO='$condc_terreno',FORMA_TENENCIA='$tenencia_casa',OCV='$ocv',TERRENO_PROPIO='$terreno_propio',SIVIH='$SIVIH',CONSTANCIA_SIVIH='$sivih_inscripcion',COTIZA_LPH='$ley_phab',SALUBRIDAD_VIVIENDA='$salubridad_vivienda',ID_JEFE='$idjefe' WHERE ID_JEFE=$id;";
		
		$sql .= "UPDATE detalles_vivienda SET TIPO_VIVIENDA='$tipo_vivienda',HABITACIONES='$habitaciones',HABITACIONES1='$habitaciones1',HABITACIONES2='$habitaciones2',HABITACIONES3='$habitaciones3',NUM_HABITACIONES='$num_habitaciones',TIPO_PAREDES='$tipo_paredes',TIPO_TECHO='$tipo_techo',ENSERES_VIVIENDA='$enseres_vivienda',ENSERES_VIVIENDA2='$enseres_vivienda2',ENSERES_VIVIENDA3='$enseres_vivienda3',ENSERES_VIVIENDA4='$enseres_vivienda4',ENSERES_VIVIENDA5='$enseres_vivienda5',ENSERES_VIVIENDA6='$enseres_vivienda6',ENSERES_VIVIENDA7='$enseres_vivienda7',ENSERES_VIVIENDA8='$enseres_vivienda8',ENSERES_VIVIENDA9='$enseres_vivienda9',ENSERES_VIVIENDA10='$enseres_vivienda10',INSECTOS_ROEDORES='$plagas',INSECTOS_ROEDORES2='$plagas2',INSECTOS_ROEDORES3='$plagas3',INSECTOS_ROEDORES4='$plagas4',INSECTOS_ROEDORES5='$plagas5',ANIMALES_DOMESTICOS='$animales_domst',ANIMALES_DOMESTICOS2='$animales_domst2',ANIMALES_DOMESTICOS3='$animales_domst3',ANIMALES_DOMESTICOS4='$animales_domst4',ANIMALES_DOMESTICOS5='$animales_domst5',ANIMALES_DOMESTICOS6='$animales_domst6',ANIMALES_DOMESTICOS7='$animales_domst7',ID_JEFE='$idjefe' WHERE ID_JEFE=$id;";

		$sql .= "UPDATE ayuda_vivienda SET TIPO_AYUDA='$tipo_ayuda_casa',DESCRIPCION='$descrip_ayuda_casa',ID_JEFE='$idjefe'
		 WHERE ID_JEFE=$id;";
		
		//querys para situacion salud
		$sql .= "UPDATE condiciones_salud SET PERSONA_ENFERMEDAD='$pers_enfermedades',PERSONA_ENFERMEDAD1='$pers_enfermedades1',PERSONA_ENFERMEDAD2='$pers_enfermedades2',PERSONA_ENFERMEDAD3='$pers_enfermedades3',PERSONA_ENFERMEDAD4='$pers_enfermedades4',PERSONA_ENFERMEDAD5='$pers_enfermedades5',PERSONA_ENFERMEDAD6='$pers_enfermedades6',PERSONA_ENFERMEDAD7='$pers_enfermedades7',PERSONA_ENFERMEDAD8='$pers_enfermedades8',PERSONA_ENFERMEDAD9='$pers_enfermedades9',OTRA_ENFERMEDAD='$otra_enfermedad',AYUDA_ENFERMOS='$ayuda_enfermo',TIPO_AYUDA='$tipo_ayuda_enfermo',SITUACION_EXCLUSION='$pers_exclusion',SITUACION_EXCLUSION1='$pers_exclusion1',SITUACION_EXCLUSION2='$pers_exclusion2',SITUACION_EXCLUSION3='$pers_exclusion3',SITUACION_EXCLUSION4='$pers_exclusion4',SITUACION_EXCLUSION5='$pers_exclusion5',CANTIDAD_EXCLUSION='$cant_exclusion',ID_JEFE='$idjefe' WHERE ID_JEFE=$id;";

		//querys para situacion servicios
		$sql .= "UPDATE situacion_servicios SET AGUAS_BLANCAS='$aguas_blancas',MEDIDOR='$posee_medidor',AGUAS_SERVIDAS='$aguas_servidas',GAS='$gas',SISTEMA_ELECTRICO='$sist_electrico',BOMBILLOS_AHORRADORES='$bombillos_ahorradores',RECOL_BASURA='$recoleccion_basura',RECOL_BASURA1='$recoleccion_basura1',RECOL_BASURA2='$recoleccion_basura2',RECOL_BASURA3='$recoleccion_basura3',RECOL_BASURA4='$recoleccion_basura4',RECOL_BASURA5='$recoleccion_basura5',RECOL_BASURA6='$recoleccion_basura6',TELEFONIA='$telefonia',TELEFONIA1='$telefonia1',TELEFONIA2='$telefonia2',TELEFONIA3='$telefonia3',TELEFONIA4='$telefonia4',TRANSPORTE='$transporte',TIPO_INFORMACION='$mecan_informacion',TIPO_INFORMACION1='$mecan_informacion1',TIPO_INFORMACION2='$mecan_informacion2',TIPO_INFORMACION3='$mecan_informacion3',TIPO_INFORMACION4='$mecan_informacion4',TIPO_INFORMACION5='$mecan_informacion5',SERV_COMUNALES='$serv_comunales',SERV_COMUNALES1='$serv_comunales1',SERV_COMUNALES2='$serv_comunales2',SERV_COMUNALES3='$serv_comunales3',SERV_COMUNALES4='$serv_comunales4',SERV_COMUNALES5='$serv_comunales5',SERV_COMUNALES6='$serv_comunales6',SERV_COMUNALES7='$serv_comunales7',SERV_COMUNALES8='$serv_comunales8',SERV_COMUNALES9='$serv_comunales9',SERV_COMUNALES10='$serv_comunales10',SERV_COMUNALES11='$serv_comunales11',SERV_COMUNALES12='$serv_comunales12',ID_JEFE='$idjefe' WHERE ID_JEFE=$id;";

		$sql .= "UPDATE detalle_servicios SET TANQUE='$posee_tanque',TANQUE_LITROS='$litros_tanque',PIPOTES='$posee_pipotes',CANT_PIPOTES='$cant_pipotes',PROVEEDOR_GAS='$proveedor_gas',CANT_CILINDROS_GAS='$cant_cilindros',DURACION_GAS='$duración_gas',PRECIO_GAS='$precio_gas',ID_JEFE='$idjefe' WHERE ID_JEFE=$id;";
		
		$sql .= "UPDATE detalles_serv_electrico SET MEDIDOR='$medidor_electrico',BOMBILLOS_NECESITA='$cant_bombillos',ID_JEFE='$idjefe' WHERE ID_JEFE=$id;";

		//querys para participacion comunitaria
		$sql .= "UPDATE participacion_comunitaria SET ORG_COMUNITARIA='$org_comunitarias',DESCRIPCION='$name_organizacion',PARTICIPA='$participa_org',PARTICIPA_FAMILIAR='$familiar_org',MISIONES_COMUNIDAD='$name_mision',MISIONES_COMUNIDAD1='$name_mision1',MISIONES_COMUNIDAD2='$name_mision2',MISIONES_COMUNIDAD3='$name_mision3',MISIONES_COMUNIDAD4='$name_mision4',MISIONES_COMUNIDAD5='$name_mision5',MISIONES_COMUNIDAD6='$name_mision6',OTRA_MISION='$otra_mision',ID_JEFE='$idjefe' WHERE ID_JEFE=$id;";

		$sql .= "UPDATE preguntas_part_comunitaria SET P_UNO='$pueblo_pregunta1',P_DOS='$pueblo_pregunta2',P_TRES='$pueblo_pregunta3',P_CUATRO='$pueblo_pregunta4',P_CINCO='$pueblo_pregunta5',P_SEIS='$pueblo_pregunta6',P_SIETE='$pueblo_pregunta7',P_OCHO='$pueblo_pregunta8',P_NUEVE='$pueblo_pregunta9',P_DIEZ='$pueblo_pregunta10',P_ONCE='$pueblo_pregunta11',P_DOCE='$pueblo_pregunta_final',P_DOCE1='$pueblo_pregunta_final1',P_DOCE2='$pueblo_pregunta_final2',P_DOCE3='$pueblo_pregunta_final3',P_DOCE4='$pueblo_pregunta_final4',P_DOCE5='$pueblo_pregunta_final5',P_DOCE6='$pueblo_pregunta_final6',P_DOCE7='$pueblo_pregunta_final7',P_DOCE8='$pueblo_pregunta_final8',P_DOCE9='$pueblo_pregunta_final9',P_CATORCE='$pueblo_pregunta14',P_QUINCE='$pueblo_pregunta15',OTRA_AREA='$otra_area',ID_JEFE='$idjefe' WHERE ID_JEFE=$id";
		
			if (mysqli_multi_query(Conecta::conx(), $sql)) {
				echo "<script type='text/javascript'>alert('Censo modificado con éxito.');window.location='../vistas/listadocensos.php';</script>";
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