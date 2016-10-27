    	<div id="paneles-censo" class="panel panel-default">
					    	  <div class="panel-heading" role="tab" id="heading3">
					    			<h3 class="panel-title">
					    				<a href="#collapse3" data-toggle="collapse" data-parent="#accordion3" aria-expanded="true" aria-control="collapse3">
					    					Salud
					    				<i class="fa fa-caret-down" style="float:right"></i><span style="float:right;">&nbsp;&nbsp;</span><i class="fa fa-caret-up" style="float:right"></i></a>
					    			</h3>
					    	  </div><!-- final del primer heading -->

						    	<div id="collapse3" class="panel-collapse collapse on" role="tabpanel3" aria-labelledby="heading3">
							    	<div class="panel-body">

							    		<div class="form-group col-md-12">

											<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Personas con enfermedades</label>

											<div class="col-sm-6">
												<div class="required-field-block">
													<p>Ninguna
													<input name="pers_enfermedades" type="checkbox" value="Ninguna">
													Diabetes
													<input name="pers_enfermedades1" type="checkbox" value="Diabetes">
													Sida
													<input name="pers_enfermedades2" type="checkbox" value="Sida">
													Cancer
													<input name="pers_enfermedades3" type="checkbox" value="Cancer">
													Hepatitis
													<input name="pers_enfermedades4" type="checkbox" value="Hepatitis">
													Corazón
													<input name="pers_enfermedades5" type="checkbox" value="Corazon">
													Leucemia
													<input name="pers_enfermedades6" type="checkbox" value="Leucemia">
													Tuberculosis
													<input name="pers_enfermedades7" type="checkbox" value="Tuberculosis">
													Hipertensión
													<input name="pers_enfermedades8" type="checkbox" value="Hipertension">
													Asma
													<input name="pers_enfermedades9" type="checkbox" value="Asma">
													Otra
													<input name="pers_enfermedades10" type="checkbox" value="Otra">
													</p>
													
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>
										</div>
										<div class="form-group col-md-12">
											<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Otra enfermedad</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="otra_enfermedad" id="">
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

											<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Necesita ayuda para enfermos</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="ayuda_enfermo" id="">
														<option value="0">seleccione</option>
														<option value="SI">SI</option>
														<option value="NO">NO</option>
													</select>
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

											<label for="" class="col-sm-3 col-md-3 control-label">Tipo de ayuda</label>

											<div class="col-sm-2 col-md-2">
												<input type="text" name="tipo_ayuda_enfermo" id="" placeholder="Describa que tipo de ayuda necesita" class="form-control" required onkeypress="return soloLetras(event);" maxlength="30">
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Situación de exclusión</label>

											<div class="col-sm-6">
												<div class="required-field-block">
													<p>Ninguna
													<input name="pers_exclusion" type="checkbox" value="Ninguna">
													Niños de la Calle
													<input name="pers_exclusion1" type="checkbox" value="Ninos de la Calle">
													Indigentes
													<input name="pers_exclusion2" type="checkbox" value="Indigentes">
													Enfermos terminales
													<input name="pers_exclusion3" type="checkbox" value="Enfermos terminales">
													Discapacitados
													<input name="pers_exclusion4" type="checkbox" value="Discapacitados">
													Tercera Edad
													<input name="pers_exclusion5" type="checkbox" value="Tercera Edad">
													Otra
													<input name="pers_exclusion6" type="checkbox" value="Otra">
													</p>
													
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>
										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Cuantos</label>

											<div class="col-sm-2 col-md-2">
												<input type="text" name="cant_exclusion" id="" maxlength="2" placeholder="Indique la cantidad en números" class="form-control" required onKeyPress="return SoloNumeros(event);">
											</div>

										</div>

						    	</div><!-- final del panel body -->
					    	</div>
					    	</div>