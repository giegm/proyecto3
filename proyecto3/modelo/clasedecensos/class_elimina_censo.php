<?php 
require_once("../modelo/conecta.php");

class Eliminaciones_Censos{

public function Eliminar_censo_por_id($id){ 

		//DATOS DEL EVENTO CENSO
		$sql = "DELETE FROM censos WHERE ID_JEFE=$id;";
		
		//datos del jefe de familia
		$sql .= "DELETE FROM datos_personales WHERE ID_DATAPERSONAL=$id;";
		
		$sql .= "DELETE FROM datos_contacto WHERE ID_JEFE=$id;"; 
		
		$sql .= "DELETE FROM datos_relacion WHERE ID_JEFE=$id;";
		
		$sql .= "DELETE FROM datos_salud WHERE ID_JEFE=$id;";
		
		$sql .= "DELETE FROM datos_finanzas WHERE ID_JEFE=$id;";
		
		$sql .= "DELETE FROM datos_academicos WHERE ID_JEFE=$id;";
		
		$sql .= "DELETE FROM datos_encuestado WHERE ID_JEFE=$id;";
		
		//querys para los familiares
		
		$sql .= "DELETE FROM datos_familiares WHERE ID_JEFE=$id;";
		
		$sql .= "DELETE FROM familiar_academico WHERE ID_JEFE=$id;";
		
		$sql .= "DELETE FROM familiar_finanzas WHERE ID_JEFE=$id;";
		
		$sql .= "DELETE FROM familiar_relacion WHERE ID_JEFE=$id;";
		
		$sql .= "DELETE FROM familiar_salud WHERE ID_JEFE=$id;";


		//querys para la situacion economica
		$sql .= "DELETE FROM situacion_economica WHERE ID_JEFE=$id;";

		//querys para situacion de vivienda
		$sql .= "DELETE FROM situacion_vivienda WHERE ID_JEFE=$id;";
		
		$sql .= "DELETE FROM detalles_vivienda WHERE ID_JEFE=$id;";

		$sql .= "DELETE FROM ayuda_vivienda WHERE ID_JEFE=$id;";
		
		//querys para situacion salud
		$sql .= "DELETE FROM condiciones_salud WHERE ID_JEFE=$id;";

		//querys para situacion servicios
		$sql .= "DELETE FROM situacion_servicios WHERE ID_JEFE=$id;";

		$sql .= "DELETE FROM detalle_servicios WHERE ID_JEFE=$id;";
		
		$sql .= "DELETE FROM detalles_serv_electrico WHERE ID_JEFE=$id;";

		//querys para participacion comunitaria
		$sql .= "DELETE FROM participacion_comunitaria WHERE ID_JEFE=$id;";

		$sql .= "DELETE FROM preguntas_part_comunitaria WHERE ID_JEFE=$id";
		
			if (mysqli_multi_query(Conecta::conx(), $sql)) {
				echo "<script type='text/javascript'>alert('Censo eliminado con éxito.');window.location='../vistas/listadocensos.php';</script>";
			    //header('location:../vistas/administra.php');
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_errno(Conecta::conx()) . mysqli_error(Conecta::conx());
			}

			mysqli_close(Conecta::conx());



		//datos situacion comunidad
		/*$sql .= "UPDATE situacion_cmunidad(P_UNO,P_DOS,ID_JEFE)
		 VALUES('$pueblo_pregunta14','$pueblo_pregunta15','$idjefe')";*/

		

		//datos del evento_censo
	
	

	 }//fin del metodo eliminarcenso


 }//final de la class operar
?>