<?php
$data_seis=$obj->obten_censo_por_id_seis($_GET["id"]);
$data_siete=$obj->obten_censo_por_id_siete($_GET["id"]);
$data_ser=$obj->obten_censo_por_id_ser($_GET["id"]);//trayendo situacion_servicios
?>
	<div class="panel panel-default">
					    	  <div class="panel-heading" role="tab" id="heading4">
					    			<h3 class="panel-title">
					    				<a href="#collapse4" data-toggle="collapse" data-parent="#accordion4" aria-expanded="true" aria-control="collapse4">
					    					Servicios
					    				<i class="fa fa-caret-down" style="float:right"></i><span style="float:right;">&nbsp;&nbsp;</span><i class="fa fa-caret-up" style="float:right"></i></a>
					    			</h3>
					    	  </div><!-- final del primer heading -->

						    	<div id="collapse4" class="panel-collapse collapse on" role="tabpanel4" aria-labelledby="heading4">
							    	<div class="panel-body">

							    		<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Aguas blancas</label>

											<div class="col-sm-2 col-md-2">
											<?php
											if($data_seis[0]["AGUAS_BLANCAS"]=="Acueducto"){
												?>
												<select class="form-control selectpicker show-tick" name="aguas_blancas" id="">
													<option value="<?php echo $data_seis[0]["AGUAS_BLANCAS"] ;?>"><?php echo $data_seis[0]["AGUAS_BLANCAS"] ;?></option>
													<option value="Camion">Camión</option>
													<option value="Pila pública">Pila pública</option>
													<option value="Del rio">Del rio</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											<?php
											if($data_seis[0]["AGUAS_BLANCAS"]=="Camion"){
												?>
												<select class="form-control selectpicker show-tick" name="aguas_blancas" id="">
													<option value="<?php echo $data_seis[0]["AGUAS_BLANCAS"] ;?>"><?php echo $data_seis[0]["AGUAS_BLANCAS"] ;?></option>
													<option value="Acueducto">Acueducto</option>
													<option value="Pila pública">Pila pública</option>
													<option value="Del rio">Del rio</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											<?php
											if($data_seis[0]["AGUAS_BLANCAS"]=="Pila Publica"){
												?>
												<select class="form-control selectpicker show-tick" name="aguas_blancas" id="">
													<option value="<?php echo $data_seis[0]["AGUAS_BLANCAS"] ;?>"><?php echo $data_seis[0]["AGUAS_BLANCAS"] ;?></option>
													<option value="Acueducto">Acueducto</option>
													<option value="Camion">Camión</option>
													<option value="Del rio">Del rio</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											<?php
											if($data_seis[0]["AGUAS_BLANCAS"]=="Del rio"){
												?>
												<select class="form-control selectpicker show-tick" name="aguas_blancas" id="">
													<option value="<?php echo $data_seis[0]["AGUAS_BLANCAS"] ;?>"><?php echo $data_seis[0]["AGUAS_BLANCAS"] ;?></option>
													<option value="Acueducto">Acueducto</option>
													<option value="Camion">Camión</option>
													<option value="Pila pública">Pila pública</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Posee tanque</label>

											<div class="col-sm-2 col-md-1">
											<?php
											if($data_seis[0]["TANQUE"]=="SI"){
												?>
												<select class="form-control selectpicker show-tick" name="posee_tanque" id="">
													<option value="<?php echo $data_seis[0]["TANQUE"] ;?>"><?php echo $data_seis[0]["TANQUE"] ;?></option>
													<option value="NO">NO</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											<?php
											if($data_seis[0]["TANQUE"]=="NO"){
												?>
												<select class="form-control selectpicker show-tick" name="posee_tanque" id="">
													<option value="<?php echo $data_seis[0]["TANQUE"] ;?>"><?php echo $data_seis[0]["TANQUE"] ;?></option>
													<option value="SI">SI</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Tanque/Litros</label>

											<div class="col-sm-2 col-md-2">
												<input value="<?php echo $data_seis[0]["TANQUE_LITROS"]; ?>" type="text" name="litros_tanque" class="form-control"  id="" placeholder="00 LTS" maxlength="6" required onKeyPress="return SoloNumeros(event);">
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Posee pipotes</label>

											<div class="col-sm-2 col-md-2">
											<?php
											if($data_seis[0]["TANQUE"]=="SI"){
												?>
												<select class="form-control selectpicker show-tick" name="posee_pipotes" id="">
													<option value="<?php echo $data_seis[0]["PIPOTES"] ;?>"><?php echo $data_seis[0]["PIPOTES"] ;?></option>
													<option value="NO">NO</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											<?php
											if($data_seis[0]["TANQUE"]=="NO"){
												?>
												<select class="form-control selectpicker show-tick" name="posee_pipotes" id="">
													<option value="<?php echo $data_seis[0]["PIPOTES"] ;?>"><?php echo $data_seis[0]["PIPOTES"] ;?></option>
													<option value="SI">SI</option>
												</select>
												<?php
												}//fin del 2do if
											?>
												
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Cant. Pipotes</label>

											<div class="col-sm-2 col-md-1">
												<input value="<?php echo $data_seis[0]["CANT_PIPOTES"]; ?>" type="text" name="cant_pipotes" class="form-control"  id="" placeholder="0" maxlength="2" required onKeyPress="return SoloNumeros(event);">
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Posee medidor</label>

											<div class="col-sm-2 col-md-2">
											<?php
											if($data_seis[0]["MEDIDOR"]=="SI"){
												?>
												<select class="form-control selectpicker show-tick" name="posee_medidor" id="">
													<option value="<?php echo $data_seis[0]["MEDIDOR"] ;?>"><?php echo $data_seis[0]["MEDIDOR"] ;?></option>
													<option value="NO">NO</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											<?php
											if($data_seis[0]["MEDIDOR"]=="NO"){
												?>
												<select class="form-control selectpicker show-tick" name="posee_medidor" id="">
													<option value="<?php echo $data_seis[0]["MEDIDOR"] ;?>"><?php echo $data_seis[0]["MEDIDOR"] ;?></option>
													<option value="SI">SI</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Aguas servidas</label>

											<div class="col-sm-2 col-md-2">
												<?php
												if($data_seis[0]["AGUAS_SERVIDAS"]=="Cloacas"){
													?>
													<select class="form-control selectpicker show-tick" name="aguas_servidas" id="">
														<option value="<?php echo $data_seis[0]["AGUAS_SERVIDAS"] ;?>"><?php echo $data_seis[0]["AGUAS_SERVIDAS"] ;?></option>
														<option value="Pozo septico">Pozo septico</option>
														<option value="Letrinas">Letrinas</option>
														<option value="Al aire libre">Al aire libre</option>
														<option value="Depositada en bolsas">Depositada en bolsas</option>
														<option value="Otros">Otros</option>
													</select>
													<?php
													}//fin del 2do if
												?>
												<?php
												if($data_seis[0]["AGUAS_SERVIDAS"]=="Pozo septico"){
													?>
													<select class="form-control selectpicker show-tick" name="aguas_servidas" id="">
														<option value="<?php echo $data_seis[0]["AGUAS_SERVIDAS"] ;?>"><?php echo $data_seis[0]["AGUAS_SERVIDAS"] ;?></option>
														<option value="Cloacas">Cloacas</option>
														<option value="Letrinas">Letrinas</option>
														<option value="Al aire libre">Al aire libre</option>
														<option value="Depositada en bolsas">Depositada en bolsas</option>
														<option value="Otros">Otros</option>
													</select>
													<?php
													}//fin del 2do if
												?>
												<?php
												if($data_seis[0]["AGUAS_SERVIDAS"]=="Letrinas"){
													?>
													<select class="form-control selectpicker show-tick" name="aguas_servidas" id="">
														<option value="<?php echo $data_seis[0]["AGUAS_SERVIDAS"] ;?>"><?php echo $data_seis[0]["AGUAS_SERVIDAS"] ;?></option>
														<option value="Cloacas">Cloacas</option>
														<option value="Pozo septico">Pozo septico</option>
														<option value="Al aire libre">Al aire libre</option>
														<option value="Depositada en bolsas">Depositada en bolsas</option>
														<option value="Otros">Otros</option>
													</select>
													<?php
													}//fin del 2do if
												?>
												<?php
												if($data_seis[0]["AGUAS_SERVIDAS"]=="Al aire libre"){
													?>
													<select class="form-control selectpicker show-tick" name="aguas_servidas" id="">
														<option value="<?php echo $data_seis[0]["AGUAS_SERVIDAS"] ;?>"><?php echo $data_seis[0]["AGUAS_SERVIDAS"] ;?></option>
														<option value="Cloacas">Cloacas</option>
														<option value="Pozo septico">Pozo septico</option>
														<option value="Letrinas">Letrinas</option>
														<option value="Depositada en bolsas">Depositada en bolsas</option>
														<option value="Otros">Otros</option>
													</select>
													<?php
													}//fin del 2do if
												?>
												<?php
												if($data_seis[0]["AGUAS_SERVIDAS"]=="Depositada en bolsas"){
													?>
													<select class="form-control selectpicker show-tick" name="aguas_servidas" id="">
														<option value="<?php echo $data_seis[0]["AGUAS_SERVIDAS"] ;?>"><?php echo $data_seis[0]["AGUAS_SERVIDAS"] ;?></option>
														<option value="Cloacas">Cloacas</option>
														<option value="Pozo septico">Pozo septico</option>
														<option value="Letrinas">Letrinas</option>
														<option value="Al aire libre">Al aire libre</option>
														<option value="Otros">Otros</option>
													</select>
													<?php
													}//fin del 2do if
												?>
												<?php
												if($data_seis[0]["AGUAS_SERVIDAS"]=="Otros"){
													?>
													<select class="form-control selectpicker show-tick" name="aguas_servidas" id="">
														<option value="<?php echo $data_seis[0]["AGUAS_SERVIDAS"] ;?>"><?php echo $data_seis[0]["AGUAS_SERVIDAS"] ;?></option>
														<option value="Cloacas">Cloacas</option>
														<option value="Pozo septico">Pozo septico</option>
														<option value="Letrinas">Letrinas</option>
														<option value="Al aire libre">Al aire libre</option>
														<option value="Depositada en bolsas">Depositada en bolsas</option>
													</select>
													<?php
													}//fin del 2do if
												?>
											</div>

											<label for="" class="col-sm-2 col-md-1 control-label" style="text-align:justify;">Gas</label>

											<div class="col-sm-2 col-md-2">
											<?php
												if($data_seis[0]["GAS"]=="Bombona"){
													?>
													<select class="form-control selectpicker show-tick" name="gas" id="">
														<option value="<?php echo $data_seis[0]["GAS"] ;?>"><?php echo $data_seis[0]["GAS"] ;?></option>
													<option value="Tuberia">Tubería</option>
													<option value="No posee">No posee</option>
												</select>
													<?php
													}//fin del 2do if
											?>
											<?php
												if($data_seis[0]["GAS"]=="Tuberia"){
													?>
													<select class="form-control selectpicker show-tick" name="gas" id="">
														<option value="<?php echo $data_seis[0]["GAS"] ;?>"><?php echo $data_seis[0]["GAS"] ;?></option>
													<option value="Bombona">Bombona</option>
													<option value="No posee">No posee</option>
												</select>
													<?php
													}//fin del 2do if
											?>
											<?php
												if($data_seis[0]["GAS"]=="No posee"){
													?>
													<select class="form-control selectpicker show-tick" name="gas" id="">
														<option value="<?php echo $data_seis[0]["GAS"] ;?>"><?php echo $data_seis[0]["GAS"] ;?></option>
													<option value="Bombona">Bombona</option>
													<option value="Tuberia">Tubería</option>
												</select>
													<?php
													}//fin del 2do if
											?>
												
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Proveedor</label>

											<div class="col-sm-2 col-md-2">
												<input value="<?php echo $data_seis[0]["PROVEEDOR_GAS"]; ?>" type="text" name="proveedor_gas" maxlength="20" class="form-control"  id="" placeholder="solo nombre">
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Cantidad de cilindros o bombona</label>

											<div class="col-sm-2 col-md-2">
												<input value="<?php echo $data_seis[0]["CANT_CILINDROS_GAS"]; ?>" type="text" name="cant_cilindros" maxlength="2" class="form-control"  id="" placeholder="00 Kg" required onKeyPress="return SoloNumeros(event);">
											</div>

											<label for="" class="col-sm-2 col-md-1 control-label" style="text-align:justify;">Duración</label>

											<div class="col-sm-2 col-md-2">
												<input value="<?php echo $data_seis[0]["DURACION_GAS"]; ?>" type="text" name="duración_gas" class="form-control" maxlength="3"  id="" placeholder="0 dias" required onKeyPress="return SoloNumeros(event);">
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Precio </label>

											<div class="col-sm-2 col-md-2">
												<input value="<?php echo $data_seis[0]["PRECIO_GAS"]; ?>" type="text" name="precio_gas" class="form-control" maxlength="4"  id="" placeholder="00 BsF" required onKeyPress="return SoloNumeros(event);">
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Sistema eléctrico</label>

											<div class="col-sm-2 col-md-2">
											<?php
												if($data_seis[0]["SISTEMA_ELECTRICO"]=="Publico"){
													?>
													<select class="form-control selectpicker show-tick" name="sist_electrico" id="">
														<option value="<?php echo $data_seis[0]["SISTEMA_ELECTRICO"] ;?>"><?php echo $data_seis[0]["SISTEMA_ELECTRICO"] ;?></option>
													<option value="Planta electrica">Planta eléctrica</option>
													<option value="Propia">Propia</option>
													<option value="No tiene">No tiene</option>
												</select>
													<?php
													}//fin del 2do if
											?>
											<?php
												if($data_seis[0]["SISTEMA_ELECTRICO"]=="Planta Electrica"){
													?>
													<select class="form-control selectpicker show-tick" name="sist_electrico" id="">
														<option value="<?php echo $data_seis[0]["SISTEMA_ELECTRICO"] ;?>"><?php echo $data_seis[0]["SISTEMA_ELECTRICO"] ;?></option>
													<option value="Publico">Público</option>
													<option value="Propia">Propia</option>
													<option value="No tiene">No tiene</option>
												</select>
													<?php
													}//fin del 2do if
											?>
											<?php
												if($data_seis[0]["SISTEMA_ELECTRICO"]=="Propia"){
													?>
													<select class="form-control selectpicker show-tick" name="sist_electrico" id="">
														<option value="<?php echo $data_seis[0]["SISTEMA_ELECTRICO"] ;?>"><?php echo $data_seis[0]["SISTEMA_ELECTRICO"] ;?></option>
													<option value="Publico">Público</option>
													<option value="Planta electrica">Planta eléctrica</option>
													<option value="No tiene">No tiene</option>
												</select>
													<?php
													}//fin del 2do if
											?>
											<?php
												if($data_seis[0]["SISTEMA_ELECTRICO"]=="No tiene"){
													?>
													<select class="form-control selectpicker show-tick" name="sist_electrico" id="">
														<option value="<?php echo $data_seis[0]["SISTEMA_ELECTRICO"] ;?>"><?php echo $data_seis[0]["SISTEMA_ELECTRICO"] ;?></option>
													<option value="Publico">Público</option>
													<option value="Planta electrica">Planta eléctrica</option>
													<option value="Propia">Propia</option>
												</select>
													<?php
													}//fin del 2do if
											?>	
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Posee medidor</label>

											<div class="col-sm-2 col-md-2">
											<?php
												if($data_siete[0]["MEDIDOR"]=="SI"){
													?>
													<select class="form-control selectpicker show-tick" name="medidor_electrico" id="">
														<option value="<?php echo $data_siete[0]["MEDIDOR"] ;?>"><?php echo $data_siete[0]["MEDIDOR"] ;?></option>
													<option value="NO">NO</option>
												</select>
													<?php
													}//fin del 2do if
											?>
											<?php
												if($data_siete[0]["MEDIDOR"]=="NO"){
													?>
													<select class="form-control selectpicker show-tick" name="medidor_electrico" id="">
														<option value="<?php echo $data_siete[0]["MEDIDOR"] ;?>"><?php echo $data_siete[0]["MEDIDOR"] ;?></option>
													<option value="SI">SI</option>
												</select>
													<?php
													}//fin del 2do if
											?>
												
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">bombillos ahorradores</label>

											<div class="col-sm-2 col-md-2">
											<?php
												if($data_seis[0]["BOMBILLOS_AHORRADORES"]=="SI"){
													?>
													<select class="form-control selectpicker show-tick" name="bombillos_ahorradores" id="">
														<option value="<?php echo $data_seis[0]["BOMBILLOS_AHORRADORES"] ;?>"><?php echo $data_seis[0]["BOMBILLOS_AHORRADORES"] ;?></option>
													<option value="NO">NO</option>
												</select>
													<?php
													}//fin del 2do if
											?>
											<?php
												if($data_seis[0]["BOMBILLOS_AHORRADORES"]=="NO"){
													?>
													<select class="form-control selectpicker show-tick" name="bombillos_ahorradores" id="">
														<option value="<?php echo $data_seis[0]["BOMBILLOS_AHORRADORES"] ;?>"><?php echo $data_seis[0]["BOMBILLOS_AHORRADORES"] ;?></option>
													<option value="SI">SI</option>
												</select>
													<?php
													}//fin del 2do if
											?>
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Cuantos necesita</label>

											<div class="col-sm-2 col-md-2">
												<input value="<?php echo $data_siete[0]["BOMBILLOS_NECESITA"]; ?>" type="text" name="cant_bombillos" class="form-control" maxlength="2" id="" placeholder="solo números" required onKeyPress="return SoloNumeros(event);">
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Recolección de basura</label>

											<div class="col-sm-2 col-md-2">
											<?php
												if($data_seis[0]["RECOL_BASURA"]=="Aseo Urbano"){
													?>
													<select class="form-control selectpicker show-tick" name="recoleccion_basura" id="" multiple>
													<option value="<?php echo $data_seis[0]["RECOL_BASURA"] ;?>"><?php echo $data_seis[0]["RECOL_BASURA"] ;?></option>
													<option value="Conteiner">Conteiner</option>
													<option value="Bajante">Bajante</option>
													<option value="Camion">Camión</option>
													<option value="Al aire libre">Al aire libre</option>
													<option value="Quemada">Quemada</option>
													<option value="Otros">Otros</option>
												</select>
													<?php
													}//fin del 2do if
											?>
											<?php
												if($data_seis[0]["RECOL_BASURA"]=="Conteiner"){
													?>
													<select class="form-control selectpicker show-tick" name="recoleccion_basura" id="" multiple>
														<option value="<?php echo $data_seis[0]["RECOL_BASURA"] ;?>"><?php echo $data_seis[0]["RECOL_BASURA"] ;?></option>
													<option value="Aseo Urbano">Aseo Urbano</option>
													<option value="Bajante">Bajante</option>
													<option value="Camion">Camión</option>
													<option value="Al aire libre">Al aire libre</option>
													<option value="Quemada">Quemada</option>
													<option value="Otros">Otros</option>
												</select>
													<?php
													}//fin del 2do if
											?>
											<?php
												if($data_seis[0]["RECOL_BASURA"]=="Bajante"){
													?>
													<select class="form-control selectpicker show-tick" name="recoleccion_basura" id="" multiple>
														<option value="<?php echo $data_seis[0]["RECOL_BASURA"] ;?>"><?php echo $data_seis[0]["RECOL_BASURA"] ;?></option>
													<option value="Aseo Urbano">Aseo Urbano</option>
													<option value="Conteiner">Conteiner</option>
													<option value="Camion">Camión</option>
													<option value="Al aire libre">Al aire libre</option>
													<option value="Quemada">Quemada</option>
													<option value="Otros">Otros</option>
												</select>
													<?php
													}//fin del 2do if
											?>
											<?php
												if($data_seis[0]["RECOL_BASURA"]=="Camion"){
													?>
													<select class="form-control selectpicker show-tick" name="recoleccion_basura" id=""multiple>
														<option value="<?php echo $data_seis[0]["RECOL_BASURA"] ;?>"><?php echo $data_seis[0]["RECOL_BASURA"] ;?></option>
													<option value="Aseo Urbano">Aseo Urbano</option>
													<option value="Conteiner">Conteiner</option>
													<option value="Bajante">Bajante</option>
													<option value="Al aire libre">Al aire libre</option>
													<option value="Quemada">Quemada</option>
													<option value="Otros">Otros</option>
												</select>
													<?php
													}//fin del 2do if
											?>
											<?php
												if($data_seis[0]["RECOL_BASURA"]=="Al aire libre"){
													?>
													<select class="form-control selectpicker show-tick" name="recoleccion_basura" id="" multiple>
														<option value="<?php echo $data_seis[0]["RECOL_BASURA"] ;?>"><?php echo $data_seis[0]["RECOL_BASURA"] ;?></option>
													<option value="Aseo Urbano">Aseo Urbano</option>
													<option value="Conteiner">Conteiner</option>
													<option value="Bajante">Bajante</option>
													<option value="Camion">Camion</option>
													<option value="Quemada">Quemada</option>
													<option value="Otros">Otros</option>
												</select>
													<?php
													}//fin del 2do if
											?>
											<?php
												if($data_seis[0]["RECOL_BASURA"]=="Quemada"){
													?>
													<select class="form-control selectpicker show-tick" name="recoleccion_basura" id="" multiple>
														<option value="<?php echo $data_seis[0]["RECOL_BASURA"] ;?>"><?php echo $data_seis[0]["RECOL_BASURA"] ;?></option>
													<option value="Aseo Urbano">Aseo Urbano</option>
													<option value="Conteiner">Conteiner</option>
													<option value="Bajante">Bajante</option>
													<option value="Camion">Camion</option>
													<option value="Al aire libre">Al aire libre</option>
													<option value="Otros">Otros</option>
												</select>
													<?php
													}//fin del 2do if
											?>
											<?php
												if($data_seis[0]["RECOL_BASURA"]=="Otros"){
													?>
													<select class="form-control selectpicker show-tick" name="recoleccion_basura" id="" multiple>
														<option value="<?php echo $data_seis[0]["RECOL_BASURA"] ;?>"><?php echo $data_seis[0]["RECOL_BASURA"] ;?></option>
													<option value="Aseo Urbano">Aseo Urbano</option>
													<option value="Conteiner">Conteiner</option>
													<option value="Bajante">Bajante</option>
													<option value="Camion">Camion</option>
													<option value="Al aire libre">Al aire libre</option>
													<option value="Quemada">Quemada</option>
												</select>
													<?php
													}//fin del 2do if
											?>
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Telefonía</label>

											<div class="col-sm-2 col-md-2">

													<select class="form-control selectpicker show-tick" name="telefonia" title="<?php 
														for($a=0;$a<count($data_ser);$a++)
														{
														echo $data_ser[$a]["TELEFONIA"]." ";
														}	
														?>" multiple>
													<option value="Domiciliaria">Domiciliaria</option>
													<option value="Celular">Celular</option>
													<option value="Prepago">Prepago</option>
													<option value="Centro de conexion">Centro de conexión</option>
													<option value="Otra">Otra</option>
													<option value="No posee">No posee</option>
												</select>

											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Transporte</label>

											<div class="col-sm-2 col-md-2">
											<?php
												if($data_ser[0]["TRANSPORTE"]=="Publico"){
													?>
													<select class="form-control selectpicker show-tick" name="transporte" id="">
														<option value="<?php echo $data_ser[0]["TRANSPORTE"] ;?>"><?php echo $data_ser[0]["TRANSPORTE"] ;?></option>
													<option value="Propio">Propio</option>
													<option value="Bestias">Bestias</option>
													<option value="Privado">Privado</option>
													<option value="Taxi">Taxi</option>
													<option value="Otros">Otros</option>
												</select>
													<?php
													}//fin del 2do if
											?>
											<?php
												if($data_ser[0]["TRANSPORTE"]=="Propio"){
													?>
													<select class="form-control selectpicker show-tick" name="transporte" id="">
														<option value="<?php echo $data_ser[0]["TRANSPORTE"] ;?>"><?php echo $data_ser[0]["TRANSPORTE"] ;?></option>
													<option value="Publico">Publico</option>
													<option value="Bestias">Bestias</option>
													<option value="Privado">Privado</option>
													<option value="Taxi">Taxi</option>
													<option value="Otros">Otros</option>
												</select>
													<?php
													}//fin del 2do if
											?>
											<?php
												if($data_ser[0]["TRANSPORTE"]=="Bestias"){
													?>
													<select class="form-control selectpicker show-tick" name="transporte" id="">
														<option value="<?php echo $data_ser[0]["TRANSPORTE"] ;?>"><?php echo $data_ser[0]["TRANSPORTE"] ;?></option>
													<option value="Publico">Publico</option>
													<option value="Propio">Propio</option>
													<option value="Privado">Privado</option>
													<option value="Taxi">Taxi</option>
													<option value="Otros">Otros</option>
												</select>
													<?php
													}//fin del 2do if
											?>
											<?php
												if($data_ser[0]["TRANSPORTE"]=="Privado"){
													?>
													<select class="form-control selectpicker show-tick" name="transporte" id="">
														<option value="<?php echo $data_ser[0]["TRANSPORTE"] ;?>"><?php echo $data_ser[0]["TRANSPORTE"] ;?></option>
													<option value="Publico">Publico</option>
													<option value="Propio">Propio</option>
													<option value="Bestias">Bestias</option>
													<option value="Taxi">Taxi</option>
													<option value="Otros">Otros</option>
												</select>
													<?php
													}//fin del 2do if
											?>
											<?php
												if($data_ser[0]["TRANSPORTE"]=="Taxi"){
													?>
													<select class="form-control selectpicker show-tick" name="transporte" id="">
														<option value="<?php echo $data_ser[0]["TRANSPORTE"] ;?>"><?php echo $data_ser[0]["TRANSPORTE"] ;?></option>
													<option value="Publico">Publico</option>
													<option value="Propio">Propio</option>
													<option value="Bestias">Bestias</option>
													<option value="Privado">Privado</option>
													<option value="Otros">Otros</option>
												</select>
													<?php
													}//fin del 2do if
											?>
											<?php
												if($data_ser[0]["TRANSPORTE"]=="Otros"){
													?>
													<select class="form-control selectpicker show-tick" name="transporte" id="">
														<option value="<?php echo $data_ser[0]["TRANSPORTE"] ;?>"><?php echo $data_ser[0]["TRANSPORTE"] ;?></option>
													<option value="Publico">Publico</option>
													<option value="Propio">Propio</option>
													<option value="Bestias">Bestias</option>
													<option value="Privado">Privado</option>
													<option value="Taxi">Taxi</option>
												</select>
													<?php
													}//fin del 2do if
											?>
											</div>

											<label for="" class="col-sm-4 col-md-4 control-label" style="text-align:justify;">Mecanismo de información</label>

											<div class="col-sm-2 col-md-4">
											
													<select class="form-control selectpicker show-tick" name="mecan_informacion" id="" title="<?php
														for($d=0;$d<count($data_ser);$d++){ 
														echo $data_ser[$d]["TIPO_INFORMACION"]. " ";
														}
														?>" multiple>
													<option value="Radio">Radio</option>
													<option value="Prensa">Prensa</option>
													<option value="Internet">Internet</option>
													<option value="Medios alternativos comunitarios">Medios alternativos comunitarios</option>
													<option value="Otros">Otros</option>
												</select>
													
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Servicios comunales</label>

											<div class="col-sm-5 col-md-5">
											
													<select class="form-control selectpicker show-tick" name="serv_comunales" id="" title="<?php
														 for($b=0;$b<count($data_ser);$b++){
														 echo $data_ser[
														 $b]["SERV_COMUNALES"]." ";
														 }
														 ?>" multiple>
													<option value="Mercado">Mercado</option>
													<option value="Bodega">Bodega</option>
													<option value="Abastos">Abastos</option>
													<option value="Farmacia">Farmacia</option>
													<option value="Plazas y parques">Plazas y parques</option>
													<option value="Preescolar">Preescolar</option>
													<option value="Escuelas">Escuelas</option>
													<option value="Liceos">Liceos</option>
													<option value="Centro de salud">Centro de salud</option>
													<option value="Canchas">Canchas</option>
													<option value="Casa comunal">Casa comunal</option>
													<option value="Iglesia">Iglesia</option>
													<option value="Otros">Otros</option>
												</select>

											</div>
										</div>


						    	</div><!-- final del panel body -->
					    	</div>
					    	</div>