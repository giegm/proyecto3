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
										</div>


										<div class="form-group col-md-12">
											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Recolección de basura</label>
												<div class="col-sm-2 col-md-2">
													<b>Aseo Urbano</b>
														<select class="form-control selectpicker show-tick" name="recoleccion_basura" id="" title="<?php for($e=0;$e<count($data_seis);$e++){echo $data_seis[$e]["RECOL_BASURA"]." ";}?>">
															<option value="Aseo Urbano ">SI</option>
															<option value=" ">NO</option>
														</select>
												</div>
											<label for="" class=".col-xs-6 .col-sm-3"></label>
												<div class="col-sm-2 col-md-2">
													<b>Container</b>
													<select class="form-control selectpicker show-tick" name="recoleccion_basura1" id="" title="<?php for($e=0;$e<count($data_seis);$e++){echo $data_seis[$e]["RECOL_BASURA1"]." ";}?>">
														<option value="Container ">SI</option>
														<option value=" ">NO</option>
													</select>
												</div>
											<label for="" class=".col-xs-6 .col-sm-3"></label>
												<div class="col-sm-2 col-md-2">
													<b>Bajante</b>
													<select class="form-control selectpicker show-tick" name="recoleccion_basura2" id="" title="<?php for($e=0;$e<count($data_seis);$e++){echo $data_seis[$e]["RECOL_BASURA2"]." ";}?>">
														<option value="Bajante ">SI</option>
														<option value=" ">NO</option>
													</select>
												</div>
											<label for="" class=".col-xs-6 .col-sm-3"></label>
												<div class="col-sm-2 col-md-2">
													<b>Camión</b>
													<select class="form-control selectpicker show-tick" name="recoleccion_basura3" id="" title="<?php for($e=0;$e<count($data_seis);$e++){echo $data_seis[$e]["RECOL_BASURA3"]." ";}?>">
														<option value="Camión ">SI</option>
														<option value=" ">NO</option>
													</select>
												</div>
										</div>
										<div class="form-group col-md-12">
											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;"></label>
												<div class="col-sm-2 col-md-2">
													<b>Al Aire Libre</b>
													<select class="form-control selectpicker show-tick" name="recoleccion_basura4" id="" title="<?php for($e=0;$e<count($data_seis);$e++){echo $data_seis[$e]["RECOL_BASURA4"]." ";}?>">
														<option value="Al Aire Libre ">SI</option>
														<option value=" ">NO</option>
													</select>
												</div>
											<label for="" class=".col-xs-6 .col-sm-3"></label>
												<div class="col-sm-2 col-md-2">
													<b>Quemada</b>
													<select class="form-control selectpicker show-tick" name="recoleccion_basura5" id="" title="<?php for($e=0;$e<count($data_seis);$e++){echo $data_seis[$e]["RECOL_BASURA5"]." ";}?>">
														<option value="Quemada ">SI</option>
														<option value=" ">NO</option>
													</select>
												</div>
											<label for="" class=".col-xs-6 .col-sm-3"></label>
												<div class="col-sm-2 col-md-2">
													<b>Otro</b>
														<select class="form-control selectpicker show-tick" name="recoleccion_basura6" id="" title="<?php for($e=0;$e<count($data_seis);$e++){echo $data_seis[$e]["RECOL_BASURA6"]." ";}?>">
															<option value="Otro ">SI</option>
															<option value=" ">NO</option>
														</select>
												</div>
										</div>
										<div class="form-group col-md-12">
											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Telefonía</label>
												<div class="col-sm-2 col-md-2">
													<b>Domiciliaría</b>
													<select class="form-control selectpicker show-tick" name="telefonia" id="" title="<?php for($a=0;$a<count($data_ser);$a++){echo $data_ser[$a]["TELEFONIA"]." ";}?>">
														<option value="Domiciliaría ">SI</option>
														<option value=" ">NO</option>
													</select>
												</div>
											<label for="" class=".col-xs-6 .col-sm-3"></label>
												<div class="col-sm-2 col-md-2">
													<b>Célular</b>
													<select class="form-control selectpicker show-tick" name="telefonia1" id="" title="<?php for($a=0;$a<count($data_ser);$a++){echo $data_ser[$a]["TELEFONIA1"]." ";}?>">
														<option value="Célular ">SI</option>
														<option value=" ">NO</option>
													</select>
												</div>
											<label for="" class=".col-xs-6 .col-sm-3"></label>
												<div class="col-sm-2 col-md-2">
													<b>Prepago</b>
													<select class="form-control selectpicker show-tick" name="telefonia2" id="" title="<?php for($a=0;$a<count($data_ser);$a++){echo $data_ser[$a]["TELEFONIA2"]." ";}?>">
														<option value="Prepago ">SI</option>
														<option value=" ">NO</option>
													</select>
												</div>
											<label for="" class=".col-xs-6 .col-sm-3"></label>
												<div class="col-sm-2 col-md-2">
													<b>Centro de Conexión</b>
													<select class="form-control selectpicker show-tick" name="telefonia3" id="" title="<?php for($a=0;$a<count($data_ser);$a++){echo $data_ser[$a]["TELEFONIA3"]." ";}?>">
														<option value="Centro de Conexión ">SI</option>
														<option value=" ">NO</option>
													</select>
												</div>
										</div>
										<div class="form-group col-md-12">
											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;"></label>
												<div class="col-sm-2 col-md-2">
													<b>Otra</b>
													<select class="form-control selectpicker show-tick" name="telefonia4" id="" title="<?php for($a=0;$a<count($data_ser);$a++){echo $data_ser[$a]["TELEFONIA4"]." ";}?>">
														<option value="Otra ">SI</option>
														<option value=" ">NO</option>
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
											</div>
<div class="form-group col-md-12">
											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Mecanismo de información</label>
												<div class="col-sm-2 col-md-2">
													<b>Televisión</b>
														<select class="form-control selectpicker show-tick" name="mecan_informacion" id="" title="<?php for($d=0;$d<count($data_ser);$d++){ echo $data_ser[$d]["TIPO_INFORMACION"]. " ";}?>">
															<option value="Televisión ">SI</option>
															<option value=" ">NO</option>
														</select>
												</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Radio</b>
															<select class="form-control selectpicker show-tick" name="mecan_informacion1" id="" title="<?php for($d=0;$d<count($data_ser);$d++){ echo $data_ser[$d]["TIPO_INFORMACION1"]. " ";}?>">
																<option value="Radio ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Prensa</b>
															<select class="form-control selectpicker show-tick" name="mecan_informacion2" id="" title="<?php for($d=0;$d<count($data_ser);$d++){ echo $data_ser[$d]["TIPO_INFORMACION2"]. " ";}?>">
																<option value="Prensa ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Internet</b>
															<select class="form-control selectpicker show-tick" name="mecan_informacion3" id="" title="<?php for($d=0;$d<count($data_ser);$d++){ echo $data_ser[$d]["TIPO_INFORMACION3"]. " ";}?>">
																<option value="Internet ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
											</div>
											<div class="form-group col-md-12">
												<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;"></label>
													<div class="col-sm-2 col-md-2">
														<b>Medios Alternativos</b>
															<select class="form-control selectpicker show-tick" name="mecan_informacion4" id="" title="<?php for($d=0;$d<count($data_ser);$d++){ echo $data_ser[$d]["TIPO_INFORMACION4"]. " ";}?>">
																<option value="Medios Alternativos Comunitarios ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Otros</b>
															<select class="form-control selectpicker show-tick" name="mecan_informacion5" id="" title="<?php for($d=0;$d<count($data_ser);$d++){ echo $data_ser[$d]["TIPO_INFORMACION5"]. " ";}?>">
																<option value="Otros ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
											</div>
											<div class="form-group col-md-12">
											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Servicios Comunales</label>
												<div class="col-sm-2 col-md-2">
													<b>Mercado</b>
														<select class="form-control selectpicker show-tick" name="serv_comunales" id="" title="<?php for($b=0;$b<count($data_ser);$b++){echo $data_ser[$b]["SERV_COMUNALES"]." ";}?>">
															<option value="Mercado ">SI</option>
															<option value=" ">NO</option>
														</select>
												</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Bodega</b>
															<select class="form-control selectpicker show-tick" name="serv_comunales1" id="" title="<?php for($b=0;$b<count($data_ser);$b++){echo $data_ser[$b]["SERV_COMUNALES1"]." ";}?>">
																<option value="Bodega ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Abastos</b>
															<select class="form-control selectpicker show-tick" name="serv_comunales2" id="" title="<?php for($b=0;$b<count($data_ser);$b++){echo $data_ser[$b]["SERV_COMUNALES2"]." ";}?>">
																<option value="Abastos ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Farmacia</b>
															<select class="form-control selectpicker show-tick" name="serv_comunales3" id="" title="<?php for($b=0;$b<count($data_ser);$b++){echo $data_ser[$b]["SERV_COMUNALES3"]." ";}?>">
																<option value="Farmacia ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
											</div>
											<div class="form-group col-md-12">
											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;"></label>
												<div class="col-sm-2 col-md-2">
													<b>Plazas y Parques</b>
														<select class="form-control selectpicker show-tick" name="serv_comunales4" id="" title="<?php for($b=0;$b<count($data_ser);$b++){echo $data_ser[$b]["SERV_COMUNALES4"]." ";}?>">
															<option value="PLazas y Parques ">SI</option>
															<option value=" ">NO</option>
														</select>
												</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Preescolar</b>
															<select class="form-control selectpicker show-tick" name="serv_comunales5" id="" title="<?php for($b=0;$b<count($data_ser);$b++){echo $data_ser[$b]["SERV_COMUNALES5"]." ";}?>">
																<option value="Preescolar ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Escuelas</b>
															<select class="form-control selectpicker show-tick" name="serv_comunales6" id="" title="<?php for($b=0;$b<count($data_ser);$b++){echo $data_ser[$b]["SERV_COMUNALES6"]." ";}?>">
																<option value="Escuelas ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Liceos</b>
															<select class="form-control selectpicker show-tick" name="serv_comunales7" id="" title="<?php for($b=0;$b<count($data_ser);$b++){echo $data_ser[$b]["SERV_COMUNALES7"]." ";}?>">
																<option value="Liceos ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
											</div>
											<div class="form-group col-md-12">
											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;"></label>
												<div class="col-sm-2 col-md-2">
													<b>Centro de Salud</b>
														<select class="form-control selectpicker show-tick" name="serv_comunales8" id="" title="<?php for($b=0;$b<count($data_ser);$b++){echo $data_ser[$b]["SERV_COMUNALES8"]." ";}?>">
															<option value="Centro de Salud ">SI</option>
															<option value=" ">NO</option>
														</select>
												</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Canchas</b>
															<select class="form-control selectpicker show-tick" name="serv_comunales9" id="" title="<?php for($b=0;$b<count($data_ser);$b++){echo $data_ser[$b]["SERV_COMUNALES9"]." ";}?>">
																<option value="Canchas ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Casa Comunal</b>
															<select class="form-control selectpicker show-tick" name="serv_comunales10" id="" title="<?php for($b=0;$b<count($data_ser);$b++){echo $data_ser[$b]["SERV_COMUNALES10"]." ";}?>">
																<option value="Casa Comunal ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Iglesia</b>
															<select class="form-control selectpicker show-tick" name="serv_comunales11" id="" title="<?php for($b=0;$b<count($data_ser);$b++){echo $data_ser[$b]["SERV_COMUNALES1"]." ";}?>">
																<option value="Iglesia ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
											</div>
											<div class="form-group col-md-12">
											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;"></label>
												<div class="col-sm-2 col-md-2">
													<b>Otros</b>
													<div class="required-field-block">
														<select class="form-control selectpicker show-tick" name="serv_comunales12" id="" title="<?php for($b=0;$b<count($data_ser);$b++){echo $data_ser[$b]["SERV_COMUNALES12"]." ";}?>">
															<option value="Otros ">SI</option>
															<option value=" ">NO</option>
														</select>
													</div>
												</div>
									</div>

						    	</div><!-- final del panel body -->
					    	</div>
					    	</div>