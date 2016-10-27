	<div id="paneles-censo"class="panel panel-default">
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
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="aguas_blancas" id="">
														<option value="0">seleccione</option>
			                                            <?php 
			                                            $aguasblancs=$obj2->get_casa_aguas_blancas(); 
			                                            for($g=0;$g<sizeof($aguasblancs);$g++){
			                                                ?>
			                                                <option value="<?php echo utf8_encode($aguasblancs[$g]["AGUASBLANCAS"]); ?>"><?php echo utf8_encode($aguasblancs[$g]["AGUASBLANCAS"]); ?></option>
			                                                <?php
			                                            }
			                                            ?>
													</select>
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>
											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Posee tanque</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="posee_tanque" id="">
														<option value="0">seleccione</option>
														<option value="SI">SI</option>
														<option value="NO">NO</option>
													</select>
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Tanque/Litros</label>

											<div class="col-sm-2 col-md-2">
												<input type="text" name="litros_tanque" class="form-control" maxlength="6"  id="" placeholder="Solo números" required onKeyPress="return SoloNumeros(event);">
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Posee pipotes</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="posee_pipotes" id="">
														<option value="0">seleccione</option>
														<option value="SI">SI</option>
														<option value="NO">NO</option>
													</select>
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Cant.Pipotes</label>

											<div class="col-sm-2 col-md-1">
												<input type="text"  name="cant_pipotes" class="form-control" maxlength="2" id="" placeholder="0" required onKeyPress="return SoloNumeros(event);">
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Posee medidor</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="posee_medidor" id="">
														<option value="0">seleccione</option>
														<option value="SI">SI</option>
														<option value="NO">NO</option>
													</select>
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Aguas servidas</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="aguas_servidas" id="">
														<option value="0">seleccione</option>
			                                            <?php 
			                                            $aguaserv=$obj2->get_casa_aguas_servidas(); 
			                                            for($h=0;$h<sizeof($aguaserv);$h++){
			                                                ?>
			                                                <option value="<?php echo utf8_encode($aguaserv[$h]["AGUASERVIDA"]); ?>"><?php echo utf8_encode($aguaserv[$h]["AGUASERVIDA"]); ?></option>
			                                                <?php
			                                            }
			                                            ?>
													</select>
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

											<label for="" class="col-sm-2 col-md-1 control-label" style="text-align:justify;">Gas</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="gas" id="">
														<option value="0">seleccione</option>
			                                            <?php 
			                                            $gascasa=$obj2->get_casa_gas(); 
			                                            for($i=0;$i<sizeof($gascasa);$i++){
			                                                ?>
			                                                <option value="<?php echo utf8_encode($gascasa[$i]["GAS"]); ?>"><?php echo utf8_encode($gascasa[$i]["GAS"]); ?></option>
			                                                <?php
			                                            }
			                                            ?>
													</select>
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Proveedor/Gas</label>

											<div class="col-sm-2 col-md-2">
												<input type="text" name="proveedor_gas" class="form-control"  id="" maxlength="20" placeholder="Indique el nombre del proveedor" required onkeypress="return soloLetras(event);" onKeyUp="this.value = this.value.toUpperCase();">
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Cantidad de cilindros o bombonas</label>

											<div class="col-sm-2 col-md-2">
												<input type="text"  name="cant_cilindros" class="form-control" maxlength="2" id="" placeholder="Solo números" required onKeyPress="return SoloNumeros(event);">
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Duración/Gas</label>

											<div class="col-sm-2 col-md-2">
												<input type="text"  name="duración_gas" class="form-control" maxlength="3" id="" placeholder="Indique en días" required onKeyPress="return SoloNumeros(event);">
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Precio/Gas</label>

											<div class="col-sm-2 col-md-2">
												<input type="text"  name="precio_gas" class="form-control" maxlength="4"  id="" placeholder="Cantidad en Bsf" required onKeyPress="return SoloNumeros(event);">
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Sistema eléctrico</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="sist_electrico" id="">
														<option value="0">seleccione</option>
			                                            <?php 
			                                            $electrcasa=$obj2->get_casa_sistema_electrico(); 
			                                            for($j=0;$j<sizeof($electrcasa);$j++){
			                                                ?>
			                                                <option value="<?php echo utf8_encode($electrcasa[$j]["SISTELECTRICO"]); ?>"><?php echo utf8_encode($electrcasa[$j]["SISTELECTRICO"]); ?></option>
			                                                <?php
			                                            }
			                                            ?>
													</select>
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Posee medidor</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="medidor_electrico" id="">
														<option value="0">seleccione</option>
														<option value="SI">SI</option>
														<option value="NO">NO</option>
													</select>
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Bombillos ahorradores</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
														<select class="form-control selectpicker show-tick" name="bombillos_ahorradores" id="">
															<option value="0">seleccione</option>
															<option value="SI">SI</option>
															<option value="NO">NO</option>
														</select>
														<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Cuantos necesita</label>

											<div class="col-sm-2 col-md-2">
												<input type="text"  name="cant_bombillos" class="form-control" maxlength="2" id="" placeholder="solo números" required onKeyPress="return SoloNumeros(event);">
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Recolección de basura</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<br>
													<p>Aseo Urbano
													<input name="recoleccion_basura" type="checkbox" value="Aseo Urbano">
													Container
													<input name="recoleccion_basura1" type="checkbox" value="Container">
													Bajante
													<input name="recoleccion_basura2" type="checkbox" value="Bajante">
													Camión
													<input name="recoleccion_basura3" type="checkbox" value="Camion">
													Al aire libre
													<input name="recoleccion_basura4" type="checkbox" value="Al aire libre">
													Quemada
													<input name="recoleccion_basura5" type="checkbox" value="Quemada">
													Otro
													<input name="recoleccion_basura6" type="checkbox" value="Otro">
													</p>
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Telefonía</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<br>
													<p>Domiciliaria
													<input name="telefonia" type="checkbox" value="Domiciliaria">
													Celular
													<input name="telefonia1" type="checkbox" value="Celular">
													Prepago
													<input name="telefonia2" type="checkbox" value="Prepago">
													Centro de conexión
													<input name="telefonia3" type="checkbox" value="Centro de conexion">
													Otra
													<input name="telefonia4" type="checkbox" value="Otra">
													No posee
													<input name="telefonia5" type="checkbox" value="No posee">
													</p>

													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Transporte</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="transporte" id="">
														<option value="0">seleccione</option>
			                                            <?php 
			                                            $transport=$obj2->get_casa_transporte(); 
			                                            for($m=0;$m<sizeof($transport);$m++){
			                                                ?>
			                                                <option value="<?php echo utf8_encode($transport[$m]["TRANSPORTE"]); ?>"><?php echo utf8_encode($transport[$m]["TRANSPORTE"]); ?></option>
			                                                <?php
			                                            }
			                                            ?>
													</select>
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

											<label for="" class="col-sm-4 col-md-4 control-label" style="text-align:justify;">Mecanismo de información</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<br>
													<p>Televisión
													<input name="mecan_informacion" type="checkbox" value="Television">
													Radio
													<input name="mecan_informacion1" type="checkbox" value="Radio">
													Prensa
													<input name="mecan_informacion2" type="checkbox" value="Prensa">
													Internet
													<input name="mecan_informacion3" type="checkbox" value="Internet">
													Medios alternativos comunitarios
													<input name="mecan_informacion4" type="checkbox" value="Medios alternativos comunitarios">
													Otros
													<input name="mecan_informacion5" type="checkbox" value="Otros">
													</p>
													
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Servicios comunales</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<br>
													<p>Mercado
													<input name="serv_comunales" type="checkbox" value="Mercado">
													Bodega
													<input name="serv_comunales1" type="checkbox" value="Bodega">
													Abastos
													<input name="serv_comunales2" type="checkbox" value="Abastos">
													Farmacia
													<input name="serv_comunales3" type="checkbox" value="Farmacia">
													Plazas y Parques
													<input name="serv_comunales4" type="checkbox" value="Plazas y Parques">
													Preescolar
													<input name="serv_comunales5" type="checkbox" value="Preescolar">
													Escuelas
													<input name="serv_comunales6" type="checkbox" value="Escuelas">
													Liceos
													<input name="serv_comunales7" type="checkbox" value="Liceos">
													Centro de salud
													<input name="serv_comunales8" type="checkbox" value="Centro de Salud">
													Canchas
													<input name="serv_comunales9" type="checkbox" value="Canchas">
													Casa comunal
													<input name="serv_comunales10" type="checkbox" value="Casa comunal">
													Iglesia
													<input name="serv_comunales11" type="checkbox" value="Iglesia">
													Otros
													<input name="serv_comunales12" type="checkbox" value="Otros">
													</p>									
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>
										</div>


						    	</div><!-- final del panel body -->
					    	</div>
					    	</div>