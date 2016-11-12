<?php
require_once("../modelo/conecta.php");

class edades{
	private $data_jefes;
	private	$data_miembros;
	
	public function get_edades(){
		//seleccionamos de forma multiple
		$sql = mysqli_query(Conecta::conx(),"SELECT COUNT(EDAD and EDAD_F) AS EDAD_TOTAL FROM datos_personales and datos_familiares WHERE EDAD >= 1 and EDAD_F >= 1") or die('error en la consulta:' .$sql.  mysqli_errno(Conecta::conx()));
		//$sql .= "";
		if($reg=mysqli_fetch_array($sql)){
			$this->data_jefes=$reg["EDAD_TOTAL"];
		}
		return $this->data_jefes;

		mysqli_close(Conecta::conx());
	
	}

	public function GeneralReportefecha ($edadIn = NULL, $edadF=NULL)
		{
			$this->conx();

			$sql[] = "SELECT COUNT(*) FROM datos_relacion WHERE  SEXO  = 'Femenino'  and  status =1  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
			$sql[] = "SELECT COUNT(*) FROM datos_familiares WHERE  SEXO_F  = 'Femenino'  and  status =1  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
			$sql[] = "SELECT COUNT(*) FROM datos_relacion WHERE  SEXO  = 'Masculino'  and  status =1  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
			$sql[] = "SELECT COUNT(*) FROM datos_familiares WHERE  SEXO_F  = 'Masculino'  and  status =1  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
			$sql[] = "SELECT COUNT(*) FROM datos_familiares WHERE  EDAD_F >=1 and EDAD_F <= 17  and  status =1  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";			
			$sql[] = "SELECT COUNT(*) FROM datos_relacion WHERE  EDAD >=18 and EDAD <=59  and  status =1  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
			$sql[] = "SELECT COUNT(*) FROM datos_familiares WHERE  EDAD_F >=18 and EDAD_F <=59  and  status =1  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
			$sql[] = "SELECT COUNT(*) FROM datos_relacion WHERE  EDAD >= 60  and  status =1  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
			$sql[] = "SELECT COUNT(*) FROM datos_familiares WHERE  EDAD_F >= 60  and  status =1  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
			$sql[] = "SELECT COUNT(*) FROM datos_academicos WHERE  PROFESION = 'Estudiante'  and  status =1  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
			$sql[] = "SELECT COUNT(*) FROM familiar_academico WHERE  PROFESION_F = 'Estudiante'  and  status =1  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
			$sql[] = "SELECT COUNT(*) FROM situacion_vivienda WHERE  FORMA_TENENCIA = 'Alquilada'  and  status =1  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
			$sql[] = "SELECT COUNT(*) FROM datos_finanzas WHERE  TRABAJA = 'NO'  and  status =1  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
			$sql[] = "SELECT COUNT(*) FROM datos_salud WHERE DISCAPACIDAD = 'SI'  and  status =1  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
			$sql[] = "SELECT COUNT(*) FROM datos_salud WHERE  PENSIONADO = 'SI' and  status =1  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
			$sql[] = "SELECT COUNT(*) FROM familiar_salud WHERE PENSIONADO_F = 'SI' and  status =1  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
			$sql[] = "SELECT COUNT(*) FROM situacion_vivienda WHERE  FORMA_TENENCIA = 'Propia'  and  status =1  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
			$sql[] = "SELECT COUNT(*) FROM datos_finanzas WHERE  TRABAJA = 'por cuenta propia' and  status =1  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
			$sql[] = "SELECT COUNT(*) FROM condiciones_salud WHERE  PERSONA_ENFERMEDAD = 'Diabetes' OR PERSONA_ENFERMEDAD = 'Sida' OR PERSONA_ENFERMEDAD = 'Leucemia' OR PERSONA_ENFERMEDAD = 'Tuberculosis' OR PERSONA_ENFERMEDAD = 'Hipertension' OR PERSONA_ENFERMEDAD = 'Cancer' OR PERSONA_ENFERMEDAD = 'Hepatitis' OR PERSONA_ENFERMEDAD = 'Corazon' OR PERSONA_ENFERMEDAD = 'Asma' OR PERSONA_ENFERMEDAD = 'Otra' and  status =1  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
			$sql[] = "SELECT COUNT(*) FROM datos_finanzas WHERE  TIPO_INGRESO = 'Diario' OR TIPO_INGRESO = 'Semanal' OR TIPO_INGRESO = 'Quincenal' OR TIPO_INGRESO = 'Mensual' and  status =1  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
			$sql[] = "SELECT COUNT(*) FROM datos_relacion WHERE  ID_DATAPERSONAL != 0  and  status =1  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";
			$sql[] = "SELECT COUNT(*) FROM datos_familiares WHERE  ID_FAMILIARES != 0  and  status =1  and (`edad` >= ".$edadIn." and `edad` <= ".$edadF."  )";

			foreach ($sql as $key => $respuesta) {
										
					$row[$key] = mysqli_query($respuesta);
					$resultados[$key] = mysqli_fetch_assoc($row[$key]);

				}

				foreach ($sql2 as $i => $res) {

					$row2[$i] = mysqli_query($res);
					$resul[$i] = mysqli_fetch_assoc($row2[$i]);
					
					$conteo['union'][]	= $resultados[$i]["COUNT(*)"] + $resul[$i]["COUNT(*)"];
				}

				foreach ($resultados as $key => $value) {
				//	var_dump($value);

				$conteo["mas"][] = $value["COUNT(*)"];
				}


				return $conteo;	
		}

}
?>