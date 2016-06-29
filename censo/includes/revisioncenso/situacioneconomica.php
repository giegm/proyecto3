<?php
$obj=new Revisiones(); 
$data_cinco=$obj->obten_censo_por_id_cinco($_GET["id"]);
$data_cincodos=$obj->obten_censo_por_id_cincodos($_GET["id"]);
$data_cinco2=$obj->obten_censo_por_id_situacion_vivienda($_GET["id"]);
?>
<div class="panel panel-default">
					    	  <div class="panel-heading" role="tab" id="heading1">
					    			<h3 class="panel-title">
					    				<a href="#collapse1" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-control="collapse1">
					    					Situación económica
					    				<i class="fa fa-caret-down" style="float:right"></i><span style="float:right;">&nbsp;&nbsp;</span><i class="fa fa-caret-up" style="float:right"></i></a>
					    			</h3>
					    	  </div><!-- final del primer heading -->

						    	<div id="collapse1" class="panel-collapse collapse on" role="tabpanel1" aria-labelledby="heading1">
							    	<div class="panel-body">
							    		<div class="form-group col-md-12">
							    			

										<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Donde trabaja</label>
										
										<div class="col-sm-4 col-md-4">
											<input type="text" value="<?php echo $data_cuatro[0]["DONDE_TRABAJA"]; ?>" name="donde_trabaja" class="form-control"  placeholder="nombre empresa">
										</div>

							    		</div>

							    		<div class="form-group col-md-12">
							    			<label for="" class="col-sm-6 col-md-6 control-label" style="text-align:justify;">Realiza algun tipo de actividad economica en su vivienda</label>
										
										<div class="col-sm-2 col-md-2">
										<?php
										if($data_cuatro[0]["PREGUNTA_UNO"]=="SI"){
											?>
											<select class="form-control selectpicker show-tick" name="act_economica" id="">
												<option value="<?php echo $data_cuatro[0]["PREGUNTA_UNO"] ;?>"><?php echo $data_cuatro[0]["PREGUNTA_UNO"] ;?></option>
												<option value="NO">NO</option>
										
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cuatro[0]["PREGUNTA_UNO"]=="NO"){
											?>
											<select class="form-control selectpicker show-tick" name="act_economica" id="">
												<option value="<?php echo $data_cuatro[0]["PREGUNTA_UNO"] ;?>"><?php echo $data_cuatro[0]["PREGUNTA_UNO"] ;?></option>
												<option value="SI">SI</option>
										
											</select>
											<?php
											}//fin del 2do if
										?>
										</div>
							    		</div>

										<div class="form-group col-md-12">
							    		<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Ingreso familiar</label>
										
										<div class="col-sm-4 col-md-3">
										<?php
										if($data_cuatro[0]["ING_FAMILIAR"]=="Menos de 200.000"){
											?>
											<select class="form-control selectpicker show-tick" name="ing_familiar" id="">
												<option value="<?php echo $data_cuatro[0]["ING_FAMILIAR"];?>"><?php echo $data_cuatro[0]["ING_FAMILIAR"];?></option>
												<option value="De 200.001 a 600.000">De 200.001 a 600.000</option>
												<option value="De 601.000 a 2.000.000">De 601.000 a 2.000.000</option>
												<option value="De 2.000.001 y mas">De 2.000.001 y mas</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cuatro[0]["ING_FAMILIAR"]=="De 200.001 a 600.000"){
											?>
											<select class="form-control selectpicker show-tick" name="ing_familiar" id="">
												<option value="<?php echo $data_cuatro[0]["ING_FAMILIAR"];?>"><?php echo $data_cuatro[0]["ING_FAMILIAR"];?></option>
												<option value="menos de 200.000">menos de 200.000</option>
												<option value="De 601.000 a 2.000.000">De 601.000 a 2.000.000</option>
												<option value="De 2.000.001 y mas">2.000.001 y mas</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cuatro[0]["ING_FAMILIAR"]=="De 601.000 a 2.000.000"){
											?>
											<select class="form-control selectpicker show-tick" name="ing_familiar" id="">
												<option value="<?php echo $data_cuatro[0]["ING_FAMILIAR"];?>"><?php echo $data_cuatro[0]["ING_FAMILIAR"];?></option>
												<option value="Menos de 200.000">Menos de 200.000</option>
												<option value="De 200.001 a 600.000">De 200.001 a 600.000</option>
												<option value="De 2.000.001 y mas">De 2.000.001 y mas</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cuatro[0]["ING_FAMILIAR"]=="De 2.000.001 y mas"){
											?>
											<select class="form-control selectpicker show-tick" name="ing_familiar" id="">
												<option value="<?php echo $data_cuatro[0]["ING_FAMILIAR"];?>"><?php echo $data_cuatro[0]["ING_FAMILIAR"];?></option>
												<option value="ninguno">ninguno</option>
												<option value="Menos de 200.000">Menos de 200.000</option>
												<option value="De 200.001 a 600.000">De 200.001 a 600.000</option>
												<option value="De 601.000 a 2.000.000">De 601.000 a 2.000.000</option>
											</select>
											<?php
											}//fin del 2do if
										?>

										</div>
										</div>
							    	</div>
						    	</div>
					    	</div>

							<!-- 2do panel -->
					    	<div class="panel panel-default">
					    	  <div class="panel-heading" role="tab" id="heading2">
					    			<h3 class="panel-title">
					    				<a href="#collapse2" data-toggle="collapse" data-parent="#accordion2" aria-expanded="true" aria-control="collapse2">
					    					Situación de vivienda
					    				<i class="fa fa-caret-down" style="float:right"></i><span style="float:right;">&nbsp;&nbsp;</span><i class="fa fa-caret-up" style="float:right"></i></a>
					    			</h3>
					    	  </div><!-- final del primer heading -->

						    	<div id="collapse2" class="panel-collapse collapse on" role="tabpanel2" aria-labelledby="heading2">
							    	<div class="panel-body">
							    		<div class="form-group col-md-12">
							    			<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Condiciones del terreno</label>

										<div class="col-sm-2 col-md-2">
										<?php
										if($data_cinco[0]["COND_TERRENO"]=="Estable"){
											?>
											<select class="form-control selectpicker show-tick" name="ing_familiar" id="">
												<option value="<?php echo $data_cinco[0]["COND_TERRENO"];?>"><?php echo $data_cinco[0]["COND_TERRENO"];?></option>
												<option value="Inestable">Inestable</option>
												<option value="Alto Riesgo">Alto Riesgo</option>
												<option value="Vulnerable">Vulnerable</option>
												<option value="Otro">Otro</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["COND_TERRENO"]=="Inestable"){
											?>
											<select class="form-control selectpicker show-tick" name="ing_familiar" id="">
												<option value="<?php echo $data_cinco[0]["COND_TERRENO"];?>"><?php echo $data_cinco[0]["COND_TERRENO"];?></option>
												<option value="Estable">Estable</option>
												<option value="Alto Riesgo">Alto Riesgo</option>
												<option value="Vulnerable">Vulnerable</option>
												<option value="Otro">Otro</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["COND_TERRENO"]=="Alto Riesgo"){
											?>
											<select class="form-control selectpicker show-tick" name="ing_familiar" id="">
												<option value="<?php echo $data_cinco[0]["COND_TERRENO"];?>"><?php echo $data_cinco[0]["COND_TERRENO"];?></option>
												<option value="Estable">Estable</option>
												<option value="Inestable">Inestable</option>
												<option value="Vulnerable">Vulnerable</option>
												<option value="Otro">Otro</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["COND_TERRENO"]=="Vulnerable"){
											?>
											<select class="form-control selectpicker show-tick" name="ing_familiar" id="">
												<option value="<?php echo $data_cinco[0]["COND_TERRENO"];?>"><?php echo $data_cinco[0]["COND_TERRENO"];?></option>
												<option value="Estable">Estable</option>
												<option value="Inestable">Inestable</option>
												<option value="Alto Riesgo">Alto Riesgo</option>
												<option value="Otro">Otro</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["COND_TERRENO"]=="Otro"){
											?>
											<select class="form-control selectpicker show-tick" name="ing_familiar" id="">
												<option value="<?php echo $data_cinco[0]["COND_TERRENO"];?>"><?php echo $data_cinco[0]["COND_TERRENO"];?></option>
												<option value="Estable">Estable</option>
												<option value="Inestable">Inestable</option>
												<option value="Alto Riesgo">Alto Riesgo</option>
												<option value="Vulnerable">Vulnerable</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										</div>

										<label for="" class="col-sm-2 col-md-2 control-label">Formas de tenencia</label>

										<div class="col-sm-2 col-md-2">
										<?php
										if($data_cinco[0]["FORMA_TENENCIA"]=="Propia"){
											?>
											<select class="form-control selectpicker show-tick" name="tenencia_casa" id="">
												<option value="<?php echo $data_cinco[0]["FORMA_TENENCIA"];?>"><?php echo $data_cinco[0]["FORMA_TENENCIA"];?></option>
												<option value="Alquilada">Alquilada</option>
												<option value="Compartida">Compartida</option>
												<option value="Invadida">Invadida</option>
												<option value="Traspasada">Traspasada</option>
												<option value="Prestada">Prestada</option>
												<option value="Otros">Otros</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["FORMA_TENENCIA"]=="Alquilada"){
											?>
											<select class="form-control selectpicker show-tick" name="tenencia_casa" id="">
												<option value="<?php echo $data_cinco[0]["FORMA_TENENCIA"];?>"><?php echo $data_cinco[0]["FORMA_TENENCIA"];?></option>
												<option value="Propia">Propia</option>
												<option value="Compartida">Compartida</option>
												<option value="Invadida">Invadida</option>
												<option value="Traspasada">Traspasada</option>
												<option value="Prestada">Prestada</option>
												<option value="Otros">Otros</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["FORMA_TENENCIA"]=="Compartida"){
											?>
											<select class="form-control selectpicker show-tick" name="tenencia_casa" id="">
												<option value="<?php echo $data_cinco[0]["FORMA_TENENCIA"];?>"><?php echo $data_cinco[0]["FORMA_TENENCIA"];?></option>
												<option value="Propia">Propia</option>
												<option value="Alquilada">Alquilada</option>
												<option value="Invadida">Invadida</option>
												<option value="Traspasada">Traspasada</option>
												<option value="Prestada">Prestada</option>
												<option value="Otros">Otros</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["FORMA_TENENCIA"]=="Invadida"){
											?>
											<select class="form-control selectpicker show-tick" name="tenencia_casa" id="">
												<option value="<?php echo $data_cinco[0]["FORMA_TENENCIA"];?>"><?php echo $data_cinco[0]["FORMA_TENENCIA"];?></option>
												<option value="Propia">Propia</option>
												<option value="Alquilada">Alquilada</option>
												<option value="Compartida">Compartida</option>
												<option value="Traspasada">Traspasada</option>
												<option value="Prestada">Prestada</option>
												<option value="Otros">Otros</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["FORMA_TENENCIA"]=="Traspasada"){
											?>
											<select class="form-control selectpicker show-tick" name="tenencia_casa" id="">
												<option value="<?php echo $data_cinco[0]["FORMA_TENENCIA"];?>"><?php echo $data_cinco[0]["FORMA_TENENCIA"];?></option>
												<option value="Propia">Propia</option>
												<option value="Alquilada">Alquilada</option>
												<option value="Compartida">Compartida</option>
												<option value="Invadida">Invadida</option>
												<option value="Prestada">Prestada</option>
												<option value="Otros">Otros</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["FORMA_TENENCIA"]=="Prestada"){
											?>
											<select class="form-control selectpicker show-tick" name="tenencia_casa" id="">
												<option value="<?php echo $data_cinco[0]["FORMA_TENENCIA"];?>"><?php echo $data_cinco[0]["FORMA_TENENCIA"];?></option>
												<option value="Propia">Propia</option>
												<option value="Alquilada">Alquilada</option>
												<option value="Compartida">Compartida</option>
												<option value="Invadida">Invadida</option>
												<option value="Traspasada">Traspasada</option>
												<option value="Otros">Otros</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["FORMA_TENENCIA"]=="Otros"){
											?>
											<select class="form-control selectpicker show-tick" name="tenencia_casa" id="">
												<option value="<?php echo $data_cinco[0]["FORMA_TENENCIA"];?>"><?php echo $data_cinco[0]["FORMA_TENENCIA"];?></option>
												<option value="Propia">Propia</option>
												<option value="Alquilada">Alquilada</option>
												<option value="Compartida">Compartida</option>
												<option value="Invadida">Invadida</option>
												<option value="Traspasada">Traspasada</option>
												<option value="Prestada">Prestada</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										</div>
							    	</div>

							    	<div class="form-group col-md-12">
							    			<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Tipo de vivienda</label>

										<div class="col-sm-2 col-md-2">
										<?php
										if($data_cinco[0]["TIPO_VIVIENDA"]=="Casa"){
											?>
											<select class="form-control selectpicker show-tick" name="tipo_vivienda" id="">
												<option value="<?php echo $data_cinco[0]["TIPO_VIVIENDA"];?>"><?php echo $data_cinco[0]["TIPO_VIVIENDA"];?></option>
												<option value="Quinta">Quinta</option>
												<option value="Apartamento">Apartamento</option>
												<option value="Rancho">Rancho</option>
												<option value="Barraca">Barraca</option>
												<option value="Habitación">Habitación</option>
												<option value="Anexo">Anexo</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["TIPO_VIVIENDA"]=="Quinta"){
											?>
											<select class="form-control selectpicker show-tick" name="tipo_vivienda" id="">
												<option value="<?php echo $data_cinco[0]["TIPO_VIVIENDA"];?>"><?php echo $data_cinco[0]["TIPO_VIVIENDA"];?></option>
												<option value="Casa">Casa</option>
												<option value="Apartamento">Apartamento</option>
												<option value="Rancho">Rancho</option>
												<option value="Barraca">Barraca</option>
												<option value="Habitación">Habitación</option>
												<option value="Anexo">Anexo</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["TIPO_VIVIENDA"]=="Apartamento"){
											?>
											<select class="form-control selectpicker show-tick" name="tipo_vivienda" id="">
												<option value="<?php echo $data_cinco[0]["TIPO_VIVIENDA"];?>"><?php echo $data_cinco[0]["TIPO_VIVIENDA"];?></option>
												<option value="Casa">Casa</option>
												<option value="Quinta">Quinta</option>
												<option value="Rancho">Rancho</option>
												<option value="Barraca">Barraca</option>
												<option value="Habitación">Habitación</option>
												<option value="Anexo">Anexo</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["TIPO_VIVIENDA"]=="Rancho"){
											?>
											<select class="form-control selectpicker show-tick" name="tipo_vivienda" id="">
												<option value="<?php echo $data_cinco[0]["TIPO_VIVIENDA"];?>"><?php echo $data_cinco[0]["TIPO_VIVIENDA"];?></option>
												<option value="Casa">Casa</option>
												<option value="Quinta">Quinta</option>
												<option value="Apartamento">Apartamento</option>
												<option value="Barraca">Barraca</option>
												<option value="Habitación">Habitación</option>
												<option value="Anexo">Anexo</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["TIPO_VIVIENDA"]=="Barraca"){
											?>
											<select class="form-control selectpicker show-tick" name="tipo_vivienda" id="">
												<option value="<?php echo $data_cinco[0]["TIPO_VIVIENDA"];?>"><?php echo $data_cinco[0]["TIPO_VIVIENDA"];?></option>
												<option value="Casa">Casa</option>
												<option value="Quinta">Quinta</option>
												<option value="Apartamento">Apartamento</option>
												<option value="Rancho">Rancho</option>
												<option value="Habitación">Habitación</option>
												<option value="Anexo">Anexo</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["TIPO_VIVIENDA"]=="Habitación"){
											?>
											<select class="form-control selectpicker show-tick" name="tipo_vivienda" id="">
												<option value="<?php echo $data_cinco[0]["TIPO_VIVIENDA"];?>"><?php echo $data_cinco[0]["TIPO_VIVIENDA"];?></option>
												<option value="Casa">Casa</option>
												<option value="Quinta">Quinta</option>
												<option value="Apartamento">Apartamento</option>
												<option value="Rancho">Rancho</option>
												<option value="Barraca">Barraca</option>
												<option value="Anexo">Anexo</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["TIPO_VIVIENDA"]=="Anexo"){
											?>
											<select class="form-control selectpicker show-tick" name="tipo_vivienda" id="">
												<option value="<?php echo $data_cinco[0]["TIPO_VIVIENDA"];?>"><?php echo $data_cinco[0]["TIPO_VIVIENDA"];?></option>
												<option value="Casa">Casa</option>
												<option value="Quinta">Quinta</option>
												<option value="Apartamento">Apartamento</option>
												<option value="Rancho">Rancho</option>
												<option value="Barraca">Barraca</option>
												<option value="Habitación">Habitación</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										</div>

										<label for="" class="col-sm-2 col-md-2 control-label">Tipo/Habitaciones</label>

										<div class="col-sm-2 col-md-4">
											<select class="form-control selectpicker show-tick" name="habitaciones[]" id="" multiple title="<?php 
												for($a=0;$a<count($data_cinco);$a++)
												{
												echo $data_cinco[$a]["HABITACIONES"]." ";
												}	
												?>">
												<option value="Sala">Sala</option>
												<option value="Comedor">Comedor</option>
												<option value="Cocina">Cocina</option>
												<option value="Baño">Baño</option>
											</select>
										</div>

									</div>

									<div class="form-group col-md-12">
							    		
							    		<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">N° habitaciones</label>

										<div class="col-sm-2 col-md-2">
											<input value="<?php echo $data_cinco[0]["NUM_HABITACIONES"]; ?>" type="text" class="form-control"  name="num_habitaciones" id="" placeholder="solo numeros" required onKeyPress="return SoloNumeros(event);">
										</div>

										<label for="" class="col-sm-2 col-md-2 control-label">Pertenece a una (OCV)</label>

										<div class="col-sm-2 col-md-2">
										<?php
										if($data_cinco[0]["OCV"]=="SI"){
											?>
											<select class="form-control selectpicker show-tick" name="ocv" id="">
												<option value="<?php echo $data_cinco[0]["OCV"];?>"><?php echo $data_cinco[0]["OCV"];?></option>
												<option value="NO">NO</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["OCV"]=="NO"){
											?>
											<select class="form-control selectpicker show-tick" name="ocv" id="">
												<option value="<?php echo $data_cinco[0]["OCV"];?>"><?php echo $data_cinco[0]["OCV"];?></option>
												<option value="SI">SI</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										</div>

									</div>

									<div class="form-group col-md-12">
							    		
							    		<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Terreno propio</label>

										<div class="col-sm-2 col-md-2">
										<?php
										if($data_cinco[0]["TERRENO_PROPIO"]=="SI"){
											?>
											<select class="form-control selectpicker show-tick" name="terreno_propio" id="">
												<option value="<?php echo $data_cinco[0]["TERRENO_PROPIO"];?>"><?php echo $data_cinco[0]["TERRENO_PROPIO"];?></option>
												<option value="NO">NO</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["TERRENO_PROPIO"]=="NO"){
											?>
											<select class="form-control selectpicker show-tick" name="terreno_propio" id="">
												<option value="<?php echo $data_cinco[0]["TERRENO_PROPIO"];?>"><?php echo $data_cinco[0]["TERRENO_PROPIO"];?></option>
												<option value="SI">SI</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										</div>

										<label for="" class="col-sm-2 col-md-2 control-label">Tipo de paredes</label>

										<div class="col-sm-2 col-md-2">
										<?php
										if($data_cinco[0]["TIPO_PAREDES"]=="Frisadas"){
											?>
											<select class="form-control selectpicker show-tick" name="tipo_paredes" id="">
												<option value="<?php echo $data_cinco[0]["TIPO_PAREDES"];?>"><?php echo $data_cinco[0]["TIPO_PAREDES"];?></option>
												<option value="Sin frisar">Sin frisar</option>
												<option value="Tablas">Tablas</option>
												<option value="Bahareque o adobe">Bahareque o adobe</option>
												<option value="Zinc">Zinc</option>
												<option value="Cartón">Cartón</option>
												<option value="Piedra">Piedra</option>
												<option value="Otro">Otro</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["TIPO_PAREDES"]=="Sin Frisar"){
											?>
											<select class="form-control selectpicker show-tick" name="tipo_paredes" id="">
												<option value="<?php echo $data_cinco[0]["TIPO_PAREDES"];?>"><?php echo $data_cinco[0]["TIPO_PAREDES"];?></option>
												<option value="Frisadas">Frisadas</option>
												<option value="Tablas">Tablas</option>
												<option value="Bahareque o adobe">Bahareque o adobe</option>
												<option value="Zinc">Zinc</option>
												<option value="Cartón">Cartón</option>
												<option value="Piedra">Piedra</option>
												<option value="Otro">Otro</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["TIPO_PAREDES"]=="Tablas"){
											?>
											<select class="form-control selectpicker show-tick" name="tipo_paredes" id="">
												<option value="<?php echo $data_cinco[0]["TIPO_PAREDES"];?>"><?php echo $data_cinco[0]["TIPO_PAREDES"];?></option>
												<option value="Frisadas">Frisadas</option>
												<option value="Sin frisar">Sin frisar</option>
												<option value="Bahareque o adobe">Bahareque o adobe</option>
												<option value="Zinc">Zinc</option>
												<option value="Cartón">Cartón</option>
												<option value="Piedra">Piedra</option>
												<option value="Otro">Otro</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["TIPO_PAREDES"]=="Bahareque o Adobe"){
											?>
											<select class="form-control selectpicker show-tick" name="tipo_paredes" id="">
												<option value="<?php echo $data_cinco[0]["TIPO_PAREDES"];?>"><?php echo $data_cinco[0]["TIPO_PAREDES"];?></option>
												<option value="Frisadas">Frisadas</option>
												<option value="Sin frisar">Sin frisar</option>
												<option value="Tablas">Tablas</option>
												<option value="Zinc">Zinc</option>
												<option value="Cartón">Cartón</option>
												<option value="Piedra">Piedra</option>
												<option value="Otro">Otro</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["TIPO_PAREDES"]=="Zinc"){
											?>
											<select class="form-control selectpicker show-tick" name="tipo_paredes" id="">
												<option value="<?php echo $data_cinco[0]["TIPO_PAREDES"];?>"><?php echo $data_cinco[0]["TIPO_PAREDES"];?></option>
												<option value="Frisadas">Frisadas</option>
												<option value="Sin frisar">Sin frisar</option>
												<option value="Tablas">Tablas</option>
												<option value="Bahareque o adobe">Bahareque o adobe</option>
												<option value="Cartón">Cartón</option>
												<option value="Piedra">Piedra</option>
												<option value="Otro">Otro</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["TIPO_PAREDES"]=="Carton"){
											?>
											<select class="form-control selectpicker show-tick" name="tipo_paredes" id="">
												<option value="<?php echo $data_cinco[0]["TIPO_PAREDES"];?>"><?php echo $data_cinco[0]["TIPO_PAREDES"];?></option>
												<option value="Frisadas">Frisadas</option>
												<option value="Sin frisar">Sin frisar</option>
												<option value="Tablas">Tablas</option>
												<option value="Bahareque o adobe">Bahareque o adobe</option>
												<option value="Zinc">Zinc</option>
												<option value="Piedra">Piedra</option>
												<option value="Otro">Otro</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["TIPO_PAREDES"]=="Piedra"){
											?>
											<select class="form-control selectpicker show-tick" name="tipo_paredes" id="">
												<option value="<?php echo $data_cinco[0]["TIPO_PAREDES"];?>"><?php echo $data_cinco[0]["TIPO_PAREDES"];?></option>
												<option value="Frisadas">Frisadas</option>
												<option value="Sin frisar">Sin frisar</option>
												<option value="Tablas">Tablas</option>
												<option value="Bahareque o adobe">Bahareque o adobe</option>
												<option value="Zinc">Zinc</option>
												<option value="Cartón">Cartón</option>
												<option value="Otro">Otro</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["TIPO_PAREDES"]=="Otro"){
											?>
											<select class="form-control selectpicker show-tick" name="tipo_paredes" id="">
												<option value="<?php echo $data_cinco[0]["TIPO_PAREDES"];?>"><?php echo $data_cinco[0]["TIPO_PAREDES"];?></option>
												<option value="Frisadas">Frisadas</option>
												<option value="Sin frisar">Sin frisar</option>
												<option value="Tablas">Tablas</option>
												<option value="Bahareque o adobe">Bahareque o adobe</option>
												<option value="Zinc">Zinc</option>
												<option value="Cartón">Cartón</option>
												<option value="Piedra">Piedra</option>
											</select>
											<?php
											}//fin del 2do if
										?>

										</div>
						    		</div>

						    		<div class="form-group col-md-12">
							    		
							    		<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Tipo de techo</label>

										<div class="col-sm-2 col-md-2">
										<?php
										if($data_cinco[0]["TIPO_TECHO"]=="Platabanda"){
											?>
											<select class="form-control selectpicker show-tick" name="tipo_techo" id="">
												<option value="<?php echo $data_cinco[0]["TIPO_TECHO"];?>"><?php echo $data_cinco[0]["TIPO_TECHO"];?></option>
												<option value="Asbesto">Asbesto</option>
												<option value="Teja">Teja</option>
												<option value="Zinc">Zinc</option>
												<option value="Techo raso">Techo raso</option>
												<option value="Machihembrado">Machihembrado</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["TIPO_TECHO"]=="Asbesto"){
											?>
											<select class="form-control selectpicker show-tick" name="tipo_techo" id="">
												<option value="<?php echo $data_cinco[0]["TIPO_TECHO"];?>"><?php echo $data_cinco[0]["TIPO_TECHO"];?></option>
												<option value="Platabanda">Platabanda</option>
												<option value="Teja">Teja</option>
												<option value="Zinc">Zinc</option>
												<option value="Techo raso">Techo raso</option>
												<option value="Machihembrado">Machihembrado</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["TIPO_TECHO"]=="Teja"){
											?>
											<select class="form-control selectpicker show-tick" name="tipo_techo" id="">
												<option value="<?php echo $data_cinco[0]["TIPO_TECHO"];?>"><?php echo $data_cinco[0]["TIPO_TECHO"];?></option>
												<option value="Platabanda">Platabanda</option>
												<option value="Asbesto">Asbesto</option>
												<option value="Zinc">Zinc</option>
												<option value="Techo raso">Techo raso</option>
												<option value="Machihembrado">Machihembrado</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["TIPO_TECHO"]=="Zinc"){
											?>
											<select class="form-control selectpicker show-tick" name="tipo_techo" id="">
												<option value="<?php echo $data_cinco[0]["TIPO_TECHO"];?>"><?php echo $data_cinco[0]["TIPO_TECHO"];?></option>
												<option value="Platabanda">Platabanda</option>
												<option value="Asbesto">Asbesto</option>
												<option value="Teja">Teja</option>
												<option value="Techo raso">Techo raso</option>
												<option value="Machihembrado">Machihembrado</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["TIPO_TECHO"]=="Techo raso"){
											?>
											<select class="form-control selectpicker show-tick" name="tipo_techo" id="">
												<option value="<?php echo $data_cinco[0]["TIPO_TECHO"];?>"><?php echo $data_cinco[0]["TIPO_TECHO"];?></option>
												<option value="Platabanda">Platabanda</option>
												<option value="Asbesto">Asbesto</option>
												<option value="Teja">Teja</option>
												<option value="Zinc">Zinc</option>
												<option value="Machihembrado">Machihembrado</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["TIPO_TECHO"]=="Machihembrado"){
											?>
											<select class="form-control selectpicker show-tick" name="tipo_techo" id="">
												<option value="<?php echo $data_cinco[0]["TIPO_TECHO"];?>"><?php echo $data_cinco[0]["TIPO_TECHO"];?></option>
												<option value="Platabanda">Platabanda</option>
												<option value="Asbesto">Asbesto</option>
												<option value="Teja">Teja</option>
												<option value="Zinc">Zinc</option>
												<option value="Techo raso">Techo raso</option>
											</select>
											<?php
											}//fin del 2do if
										?>
											
										</div>

										<label for="" class="col-sm-2 col-md-2 control-label">Está inscrito en el SIVIH</label>

										<div class="col-sm-2 col-md-2">
										<?php
										if($data_cinco[0]["SIVIH"]=="SI"){
											?>
											<select class="form-control selectpicker show-tick" name="SIVIH" id="">
												<option value="<?php echo $data_cinco[0]["SIVIH"];?>"><?php echo $data_cinco[0]["SIVIH"];?></option>
												<option value="NO">NO</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["SIVIH"]=="NO"){
											?>
											<select class="form-control selectpicker show-tick" name="SIVIH" id="">
												<option value="<?php echo $data_cinco[0]["SIVIH"];?>"><?php echo $data_cinco[0]["SIVIH"];?></option>
												<option value="SI">SI</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										</div>

									</div>

									<div class="form-group col-md-12">

										<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Constancia de Inscripción</label>

										<div class="col-sm-2 col-md-2">
										<?php
										if($data_cinco[0]["CONSTANCIA_SIVIH"]=="SI"){
											?>
											<select class="form-control selectpicker show-tick" name="sivih_inscripcion" id="">
												<option value="<?php echo $data_cinco[0]["CONSTANCIA_SIVIH"];?>"><?php echo $data_cinco[0]["CONSTANCIA_SIVIH"];?></option>
												<option value="NO">NO</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["CONSTANCIA_SIVIH"]=="NO"){
											?>
											<select class="form-control selectpicker show-tick" name="sivih_inscripcion" id="">
												<option value="<?php echo $data_cinco[0]["CONSTANCIA_SIVIH"];?>"><?php echo $data_cinco[0]["CONSTANCIA_SIVIH"];?></option>
												<option value="SI">SI</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										</div>

										<label for="" class="col-sm-2 col-md-2 control-label">Cotiza L.P.H.</label>

										<div class="col-sm-2 col-md-2">
										<?php
										if($data_cinco[0]["COTIZA_LPH"]=="SI"){
											?>
											<select class="form-control selectpicker show-tick" name="ley_phab" id="">
												<option value="<?php echo $data_cinco[0]["COTIZA_LPH"];?>"><?php echo $data_cinco[0]["COTIZA_LPH"];?></option>
												<option value="NO">NO</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["COTIZA_LPH"]=="NO"){
											?>
											<select class="form-control selectpicker show-tick" name="ley_phab" id="">
												<option value="<?php echo $data_cinco[0]["COTIZA_LPH"];?>"><?php echo $data_cinco[0]["COTIZA_LPH"];?></option>
												<option value="SI">SI</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										</div>

									</div>

									<div class="form-group col-md-12">

										<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Enseres de la vivienda</label>

										<div class="col-sm-4 col-md-4">
											<select class="form-control selectpicker show-tick" name="enseres_vivienda[]" id="" multiple title="<?php
												for($e=0;$e<count($data_cincodos);$e++){
												echo $data_cincodos[$e]["ENSERES_VIVIENDA"]." ";
												}
												?>">
												<option value="Nevera">Nevera</option>
												<option value="Cocina">Cocina</option>
												<option value="Gabinete">Gabinete</option>
												<option value="Cama">Cama</option>
												<option value="Ventilador">Ventilador</option>
												<option value="Juego de comedor">Juego de comedor</option>
												<option value="Muebles de sala">Muebles de sala</option>
												<option value="Utensilios de cocina">Utensilios de cocina</option>
												<option value="tv">tv</option>
												<option value="otros">otros</option>
											</select>
										</div>

										<label for="" class="col-sm-2 col-md-2 control-label">Salubridad de vivienda</label>

										<div class="col-sm-2 col-md-2">
										<?php
										if($data_cinco2[0]["SALUBRIDAD_VIVIENDA"]=="limpia"){
											?>
											<select class="form-control selectpicker show-tick" name="salubridad_vivienda" id="">
												<option value="<?php echo $data_cinco2[0]["SALUBRIDAD_VIVIENDA"];?>"><?php echo $data_cinco2[0]["SALUBRIDAD_VIVIENDA"];?></option>
												<option value="Sucia">Sucia</option>
												<option value="Medio Sucia">Medio sucia</option>
												<option value="Otro">Otro</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco2[0]["SALUBRIDAD_VIVIENDA"]=="Sucia"){
											?>
											<select class="form-control selectpicker show-tick" name="salubridad_vivienda" id="">
												<option value="<?php echo $data_cinco2[0]["SALUBRIDAD_VIVIENDA"];?>"><?php echo $data_cinco2[0]["SALUBRIDAD_VIVIENDA"];?></option>
												<option value="Limpia">Limpia</option>
												<option value="Medio Sucia">Medio sucia</option>
												<option value="Otro">Otro</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco2[0]["SALUBRIDAD_VIVIENDA"]=="Medio Sucia"){
											?>
											<select class="form-control selectpicker show-tick" name="salubridad_vivienda" id="">
												<option value="<?php echo $data_cinco2[0]["SALUBRIDAD_VIVIENDA"];?>"><?php echo $data_cinco2[0]["SALUBRIDAD_VIVIENDA"];?></option>
												<option value="Limpia">Limpia</option>
												<option value="Sucia">Sucia</option>
												<option value="Otro">Otro</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco2[0]["SALUBRIDAD_VIVIENDA"]=="Otro"){
											?>
											<select class="form-control selectpicker show-tick" name="salubridad_vivienda" id="">
												<option value="<?php echo $data_cinco2[0]["SALUBRIDAD_VIVIENDA"];?>"><?php echo $data_cinco2[0]["SALUBRIDAD_VIVIENDA"];?></option>
												<option value="Limpia">Limpia</option>
												<option value="Sucia">Sucia</option>
												<option value="Medio Sucia">Medio sucia</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										</div>

									</div>

									<div class="form-group col-md-12">

										<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Tipo de ayuda para mejorar su casa</label>

										<div class="col-sm-2 col-md-2">
										<?php
										if($data_cinco[0]["TIPO_AYUDA"]=="Rehabilitacion"){
											?>
											<select class="form-control selectpicker show-tick" name="tipo_ayuda_casa" id="">
												<option value="<?php echo $data_cinco[0]["TIPO_AYUDA"];?>"><?php echo $data_cinco[0]["TIPO_AYUDA"];?></option>
												<option value="Sustitucion">Sustitución</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_cinco[0]["TIPO_AYUDA"]=="Sustitucion"){
											?>
											<select class="form-control selectpicker show-tick" name="tipo_ayuda_casa" id="">
												<option value="<?php echo $data_cinco[0]["TIPO_AYUDA"];?>"><?php echo $data_cinco[0]["TIPO_AYUDA"];?></option>
												<option value="Rehabilitacion">Rehabilitación</option>
											</select>
											<?php
											}//fin del 2do if
											if($data_cinco[0]["TIPO_AYUDA"]=="Ninguna"){
											?>
											<select class="form-control selectpicker show-tick" name="tipo_ayuda_casa" id="">
												<option value="<?php echo $data_cinco[0]["TIPO_AYUDA"];?>"><?php echo $data_cinco[0]["TIPO_AYUDA"];?></option>
												<option value="Sustitucion">Sustitución</option>
												<option value="Rehabilitacion">Rehabilitación</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										

										</div>

										<label for="" class="col-sm-2 col-md-2 control-label">Indique el tipo</label>

										<div class="col-sm-2 col-md-2">
											<input value="<?php echo $data_cinco[0]["DESCRIPCION"]; ?>" type="text" name="descrip_ayuda_casa" id="" placeholder="" class="form-control" required onkeypress="return soloLetras(event);">	
										</div>

									</div>

									<div class="form-group col-md-12">

										<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Presencia de roedores o insectos</label>

										<div class="col-sm-3 col-md-3">
										
											<select class="form-control selectpicker show-tick" name="plagas[]" id="" multiple title="<?php
												for($r=0;$r<sizeof($data_cinco);$r++){ 
												echo $data_cinco[$r]["INSECTOS_ROEDORES"]." ";
												}
												?>">
												<option value="SI">SI</option>
												<option value="NO">NO</option>
												<option value="Moscas">Moscas</option>
												<option value="Hormigas">Hormigas</option>
												<option value="Ratones">Ratones</option>
												<option value="Ciempies">Ciempiés</option>
												<option value="Otros">Otros</option>
											</select>
											
										</div>

										<label for="" class="col-sm-2 col-md-2 control-label">Posee animales domesticos</label>

										<div class="col-sm-3 col-md-3">
											<select class="form-control selectpicker show-tick" name="animales_domst[]" id="" multiple title="<?php
												for($n=0;$n<sizeof($data_cinco);$n++){ 
												echo $data_cinco[$n]["ANIMALES_DOMESTICOS"]." ";
												}
												?>">
												<option value="SI">SI</option>
												<option value="NO">NO</option>
												<option value="Perro">Perro</option>
												<option value="Gato">Gato</option>
												<option value="Gallinas">Gallinas</option>
												<option value="Pajaros">Pajaros</option>
												<option value="Patos">Patos</option>
												<option value="Cochinos">Cochinos</option>
												<option value="Otros">Otros</option>

											</select>	
										</div>

									</div>

								</div><!-- final del panel body -->
					    	</div>
					    	</div>