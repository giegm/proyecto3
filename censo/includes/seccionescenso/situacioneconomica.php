<div id="paneles-censo" class="panel panel-default">
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
											<input type="text" name="donde_trabaja" maxlength="30" class="form-control"  placeholder="Indique el nombre de la empresa" required onkeypress="return soloLetras(event);">
										</div>

							    		</div>

							    		<div class="form-group col-md-12">
							    			<label for="" class="col-sm-6 col-md-6 control-label" style="text-align:justify;">Realiza algun tipo de actividad economica en su vivienda</label>
										
										<div class="col-sm-2 col-md-2">
											<div class="required-field-block">
												<select class="form-control selectpicker show-tick" name="act_economica" id="">
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
							    		<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Ingreso familiar</label>
										
										<div class="col-sm-2 col-md-2">
											<div class="required-field-block">
												<select class="form-control selectpicker show-tick" name="ing_familiar" id="">
													<option value="0">seleccione</option>
		                                            <?php 
		                                            $ingfamilr=$obj2->get_ingreso_familiar(); 
		                                            for($t=0;$t<sizeof($ingfamilr);$t++){
		                                                ?>
		                                                <option value="<?php echo utf8_encode($ingfamilr[$t]["INGFAMILIAR"]); ?>"><?php echo utf8_encode($ingfamilr[$t]["INGFAMILIAR"]); ?></option>
		                                                <?php
		                                            }
		                                            ?>
												</select>
												<div class="required-icon">
									                <div class="text">*</div>
									            </div>
									        </div>
										</div>
										</div>
							    	</div>
						    	</div>
</div>

							<!-- 2do panel -->
					    	<div class="panel panel-default" id="paneles-censo">
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
											<div class="required-field-block">
												<select class="form-control selectpicker show-tick" name="condc_terreno" id="">
													<option value="0">seleccione</option>
		                                            <?php 
		                                            $condterreno=$obj2->get_condiciones_terreno(); 
		                                            for($u=0;$u<sizeof($condterreno);$u++){
		                                                ?>
		                                                <option value="<?php echo utf8_encode($condterreno[$u]["CONDTERRENO"]); ?>"><?php echo utf8_encode($condterreno[$u]["CONDTERRENO"]); ?></option>
		                                                <?php
		                                            }
		                                            ?>
												</select>
												<div class="required-icon">
									                <div class="text">*</div>
									            </div>
									        </div>
										</div>

										<label for="" class="col-sm-2 col-md-2 control-label">Formas de tenencia</label>

										<div class="col-sm-2 col-md-2">
											<div class="required-field-block">
												<select class="form-control selectpicker show-tick" name="tenencia_casa" id="">
													<option value="0">seleccione</option>
		                                            <?php 
		                                            $condterreno=$obj2->get_casa_forma_tenencia(); 
		                                            for($v=0;$v<sizeof($condterreno);$v++){
		                                                ?>
		                                                <option value="<?php echo utf8_encode($condterreno[$v]["FORMATENENCIA"]); ?>"><?php echo utf8_encode($condterreno[$v]["FORMATENENCIA"]); ?></option>
		                                                <?php
		                                            }
		                                            ?>
												</select>
												<div class="required-icon">
									                <div class="text">*</div>
									            </div>
									        </div>
										</div>
							    	</div>

							    	<div class="form-group col-md-12">
							    			<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Tipo de vivienda</label>

										<div class="col-sm-2 col-md-2">
											<div class="required-field-block">
												<select class="form-control selectpicker show-tick" name="tipo_vivienda" id="">
												<option value="0">seleccione</option>
		                                            <?php 
		                                            $tipoviv=$obj2->get_casa_tipo_vivienda(); 
		                                            for($w=0;$w<sizeof($tipoviv);$w++){
		                                                ?>
		                                                option
		                                                <option value="<?php echo $tipoviv[$w]["TIPOVIVIENDA"];?>"><?php echo $tipoviv[$w]["TIPOVIVIENDA"]; ?></option>
		                                                <?php
		                                            }
		                                            ?>
												</select>
												<div class="required-icon">
									                <div class="text">*</div>
									            </div>
									        </div>
										</div>

										<label for="" class="col-sm-2 col-md-2 control-label">Tipo/Habitaciones</label>

										<div class="col-sm-2 col-md-2">
											<div class="required-field-block">
												<select class="form-control selectpicker show-tick" name="habitaciones">
													<option value="0">seleccione</option>
		                                            <?php 
		                                            $tipohab=$obj2->get_casa_habitaciones(); 
		                                            for($x=0;$x<sizeof($tipohab);$x++){
		                                                ?>
		                                                <option value="<?php echo utf8_encode($tipohab[$x]["HABITACIONES"]); ?>"><?php echo utf8_encode($tipohab[$x]["HABITACIONES"]); ?></option>
		                                                <?php
		                                            }
		                                            ?>
												</select>
												<div class="required-icon">
									                <div class="text">*</div>
									            </div>
									        </div>
										</div>

									</div>

									<div class="form-group col-md-12">
							    		
							    		<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">N° habitaciones</label>

										<div class="col-sm-2 col-md-2">
											<div class="required-field-block">
												<input type="text" class="form-control" name="num_habitaciones" id="" maxlength="2" required onkeypress="return SoloNumeros(event);" placeholder="Cantidad en números">
												<div class="required-icon">
							                <div class="text">*</div>
							            </div>
							        </div>
										</div>

										<label for="" class="col-sm-2 col-md-2 control-label">Pertenece a una (OCV)</label>

										<div class="col-sm-2 col-md-2">
											<div class="required-field-block">
												<select class="form-control selectpicker show-tick" name="ocv" id="">
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
							    		
							    		<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Terreno propio</label>

										<div class="col-sm-2 col-md-2">
											<div class="required-field-block">
												<select class="form-control selectpicker show-tick" name="terreno_propio" id="">
													<option value="0">seleccione</option>
													<option value="SI">SI</option>
													<option value="NO">NO</option>
												</select>
												<div class="required-icon">
									                <div class="text">*</div>
									            </div>
									        </div>
										</div>

										<label for="" class="col-sm-2 col-md-2 control-label">Tipo de paredes</label>

										<div class="col-sm-2 col-md-2">
											<div class="required-field-block">
												<select class="form-control selectpicker show-tick" name="tipo_paredes" id="">
													<option value="0">seleccione</option>
		                                            <?php 
		                                            $tipoparedes=$obj2->get_casa_tipo_paredes(); 
		                                            for($y=0;$y<sizeof($tipoparedes);$y++){
		                                                ?>
		                                                <option value="<?php echo utf8_encode($tipoparedes[$y]["TIPOPAREDES"]); ?>"><?php echo utf8_encode($tipoparedes[$y]["TIPOPAREDES"]); ?></option>
		                                                <?php
		                                            }
		                                            ?>
												</select>
												<div class="required-icon">
									                <div class="text">*</div>
									            </div>
									        </div>
										</div>
						    		</div>

						    		<div class="form-group col-md-12">
							    		
							    		<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Tipo de techo</label>

										<div class="col-sm-2 col-md-2">
											<div class="required-field-block">
												<select class="form-control selectpicker show-tick" name="tipo_techo" id="">
													<option value="0">seleccione</option>
		                                            <?php 
		                                            $tipotecho=$obj2->get_casa_tipo_techo(); 
		                                            for($z=0;$z<sizeof($tipotecho);$z++){
		                                                ?>
		                                                <option value="<?php echo utf8_encode($tipotecho[$z]["TIPOTECHO"]); ?>"><?php echo utf8_encode($tipotecho[$z]["TIPOTECHO"]); ?></option>
		                                                <?php
		                                            }
		                                            ?>
												</select>
												<div class="required-icon">
									                <div class="text">*</div>
									            </div>
									        </div>
										</div>

										<label for="" class="col-sm-2 col-md-2 control-label">Está inscrito en el SIVIH</label>

										<div class="col-sm-2 col-md-2">
											<div class="required-field-block">
												<select class="form-control selectpicker show-tick" name="SIVIH" id="">
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

										<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Constancia de Inscripción</label>

										<div class="col-sm-2 col-md-2">
											<div class="required-field-block">
												<select class="form-control selectpicker show-tick" name="sivih_inscripcion" id="">
													<option value="0">seleccione</option>
													<option value="SI">SI</option>
													<option value="NO">NO</option>
												</select>
												<div class="required-icon">
									                <div class="text">*</div>
									            </div>
									        </div>
										</div>

										<label for="" class="col-sm-2 col-md-2 control-label">Cotiza L.P.H.</label>

										<div class="col-sm-2 col-md-2">
											<div class="required-field-block">
												<select class="form-control selectpicker show-tick" name="ley_phab" id="">
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

										<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Enseres de la vivienda</label>

										<div class="col-sm-2 col-md-2">
											<div class="required-field-block">
												<select class="form-control selectpicker show-tick" name="enseres_vivienda">
													<option value="0">seleccione</option>
		                                            <?php 
		                                            $ensersvivind=$obj2->get_casa_enseres_vivienda(); 
		                                            for($a=0;$a<sizeof($ensersvivind);$a++){
		                                                ?>
		                                                <option value="<?php echo utf8_encode($ensersvivind[$a]["ENSERESVIVIENDA"]); ?>"><?php echo utf8_encode($ensersvivind[$a]["ENSERESVIVIENDA"]); ?></option>
		                                                <?php
		                                            }
		                                            ?>
												</select>
												<div class="required-icon">
									                <div class="text">*</div>
									            </div>
									        </div>
										</div>

										<label for="" class="col-sm-2 col-md-2 control-label">Salubridad de vivienda</label>

										<div class="col-sm-2 col-md-2">
											<div class="required-field-block">
												<select class="form-control selectpicker show-tick" name="salubridad_vivienda" id="">
													<option value="0">seleccione</option>
		                                            <?php 
		                                            $salubrdvivind=$obj2->get_casa_salubridad_vivienda(); 
		                                            for($b=0;$b<sizeof($salubrdvivind);$b++){
		                                                ?>
		                                                <option value="<?php echo utf8_encode($salubrdvivind[$b]["SALUBRIDADVIVIENDA"]); ?>"><?php echo utf8_encode($salubrdvivind[$b]["SALUBRIDADVIVIENDA"]); ?></option>
		                                                <?php
		                                            }
		                                            ?>
												</select>
												<div class="required-icon">
									                <div class="text">*</div>
									            </div>
									        </div>
										</div>

									</div>

									<div class="form-group col-md-12">

										<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Tipo de ayuda para mejorar su casa</label>

										<div class="col-sm-2 col-md-2">
											<div class="required-field-block">
												<select class="form-control selectpicker show-tick" name="tipo_ayuda_casa" id="">
													<option value="0">seleccione</option>
		                                            <?php 
		                                            $ayudacasa=$obj2->get_casa_tipo_ayuda_mejora(); 
		                                            for($c=0;$c<sizeof($ayudacasa);$c++){
		                                                ?>
		                                                <option value="<?php echo utf8_encode($ayudacasa[$c]["TIPOAYUDACASA"]); ?>"><?php echo utf8_encode($ayudacasa[$c]["TIPOAYUDACASA"]); ?></option>
		                                                <?php
		                                            }
		                                            ?>
												</select>
												<div class="required-icon">
					                				<div class="text">*</div>
					           		 			</div>
					        				</div>
										</div>

										<label for="" class="col-sm-2 col-md-2 control-label">Indique el tipo</label>

										<div class="col-sm-2 col-md-2">
											<input type="text" name="descrip_ayuda_casa" id="" placeholder=""  maxlength="30"required onkeypress="return soloLetras(event);" class="form-control" placeholder="">	
										</div>

									</div>

									<div class="form-group col-md-12">

										<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Presencia de roedores o insectos</label>

										<div class="col-sm-2 col-md-2">
											<div class="required-field-block">
												<select class="form-control selectpicker show-tick" name="plagas">
													<option value="0">seleccione</option>
		                                            <?php 
		                                            $casaplagas=$obj2->get_casa_plagas(); 
		                                            for($d=0;$d<sizeof($casaplagas);$d++){
		                                                ?>
		                                                <option value="<?php echo utf8_encode($casaplagas[$d]["PLAGAS"]); ?>"><?php echo utf8_encode($casaplagas[$d]["PLAGAS"]); ?></option>
		                                                <?php
		                                            }
		                                            ?>
												</select>
												<div class="required-icon">
					                				<div class="text">*</div>
					            				</div>
					        				</div>
										</div>

										<label for="" class="col-sm-2 col-md-2 control-label">Posee animales domesticos</label>

										<div class="col-sm-2 col-md-2">
											<div class="required-field-block">
												<select class="form-control selectpicker show-tick" name="animales_domst">
													<option value="0">seleccione</option>
		                                            <?php 
		                                            $animcasa=$obj2->get_casa_animales(); 
		                                            for($e=0;$e<sizeof($animcasa);$e++){
		                                                ?>
		                                                <option value="<?php echo utf8_encode($animcasa[$e]["ANIMALES"]); ?>"><?php echo utf8_encode($animcasa[$e]["ANIMALES"]); ?></option>
		                                                <?php
		                                            }
		                                            ?>
												</select>
												<div class="required-icon">
					                				<div class="text">*</div>
										            </div>
										        </div>
											</div>
									</div>

								</div><!-- final del panel body -->
					    	</div>
					    	</div>

