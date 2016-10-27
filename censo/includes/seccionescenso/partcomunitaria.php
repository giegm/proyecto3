
<div id="paneles-censo" class="panel panel-default">
					    	  <div class="panel-heading" role="tab" id="heading5">
					    			<h3 class="panel-title">
					    				<a href="#collapse5" data-toggle="collapse" data-parent="#accordion5" aria-expanded="true" aria-control="collapse5">
					    					Participación comunitaria
					    				<i class="fa fa-caret-down" style="float:right"></i><span style="float:right;">&nbsp;&nbsp;</span><i class="fa fa-caret-up" style="float:right"></i></a>
					    			</h3>
					    	  </div><!-- final del primer heading -->

						    	<div id="collapse5" class="panel-collapse collapse on" role="tabpanel5" aria-labelledby="heading5">
							    	<div class="panel-body">

							    		<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Organizaciones comunitarias</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="org_comunitarias" id="">
														<option value="0">seleccione</option>
														<option value="SI">SI</option>
														<option value="NO">NO</option>
													</select>
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

											<label for="" class="col-sm-2 col-md-1 control-label" style="text-align:justify;">¿Cuál o Cuáles?</label>

											<div class="col-sm-2 col-md-2">
												<input type="text" name="name_organizacion" placeholder="solo nombre" maxlength="40" class="form-control" required onkeypress="return soloLetras(event);">
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">¿Participa en alguna?</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="participa_org" id="">
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

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">¿Participa algún familiar?</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="familiar_org" id="">
														<option value="0">seleccione</option>
														<option value="SI">SI</option>
														<option value="NO">NO</option>
													</select>
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

											<label for="" class="col-sm-4 col-md-4 control-label" style="text-align:justify;">¿Cuáles misiones estan en la comunidad?</label>

											<div class="col-sm-6">
												<div class="required-field-block">
													<p>Ribas
													<input name="name_mision" type="checkbox" value="Ribas">
													Sucre
													<input name="name_mision1" type="checkbox" value="Sucre">
													Vuelvan caras
													<input name="name_mision2" type="checkbox" value="Vuelvan caras">
													Identidad
													<input name="name_mision3" type="checkbox" value="Identidad">
													Barrio Adentro
													<input name="name_mision4" type="checkbox" value="Barrio Adentro">
													Ezequiel Zamora
													<input name="name_mision5" type="checkbox" value="Ezequiel Zamora">
													Mercal
													<input name="name_mision6" type="checkbox" value="Mercal">
													Ninguna
													<input name="name_mision7" type="checkbox" value="Ninguna">
													</p>
													
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Otra misión</label>

											<div class="col-sm-2 col-md-2">
												<input type="text" name="otra_mision" class="form-control" maxlength="30" required onkeypress="return soloLetras(event);" placeholder="solo nombre">
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-10 col-md-10 control-label" style="text-align:justify;">¿Cree Ud. que en la actualidad el
										pueblo está interviniendo en las decisiones sobre cómo deben gastarse los recursos de su comunidad?</label>

											<div class="col-sm-2 col-md-2">	
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="pueblo_pregunta1" id="">
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

											<label for="" class="col-sm-10 col-md-10 control-label" style="text-align:justify;">¿Está de acuerdo, que según la Constitución,
											es ahora el Pueblo organizado quien debe tener el protagonismo y el Poder para decidir sobre
											como invertir el presupuesto en su comunidad?</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="pueblo_pregunta2" id="">
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

										<label for="" class="col-sm-10 col-md-8 control-label" style="text-align:justify;">¿Tiene información sobre la
											propuesta de creación de consejos comunales?</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="pueblo_pregunta3" id="">
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

										<label for="" class="col-sm-10 col-md-8 control-label" style="text-align:justify;">¿Estaría dispuesto(a) a apoyar
										y participar en la creación de un consejo comunal en su comunidad?</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="pueblo_pregunta4" id="">
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

										<label for="" class="col-sm-10 col-md-8 control-label" style="text-align:justify;">Participa Ud. o asiste a las asambleas de Ciudadanos (as)</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="pueblo_pregunta5" id="">
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

										<label for="" class="col-sm-8 col-md-8 control-label" style="text-align:justify;">Como cree Ud. Que se van a resolver los problemas del sector</label>

											<div class="col-sm-4 col-md-4">
												<div class="required-field-block">
													<input type="text" name="pueblo_pregunta6" id="" placeholder="sea breve" class="form-control" maxlength="40" required onkeypress="return soloLetras(event);">
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-8 col-md-8 control-label" style="text-align:justify;">Quien cree que va a a resolver los problemas del sector</label>

											<div class="col-sm-4 col-md-4">
												<div class="required-field-block">
													<input type="text" name="pueblo_pregunta7" id="" placeholder="sea breve" required onkeypress="return soloLetras(event);" maxlength="40" class="form-control" >
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-8 col-md-8 control-label" style="text-align:justify;">Que tipo de proyectos le gustaría que se ejecutaran o 
										que se desarrollaran en su comunidad</label>

											<div class="col-sm-4 col-md-4">
												<div class="required-field-block">
													<input type="text" name="pueblo_pregunta8" id="" placeholder="sea breve" class="form-control" required onkeypress="return soloLetras(event);" maxlength="40">
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-8 col-md-8 control-label" style="text-align:justify;">Como apoyaría Ud. A que se realicen y ejecuten los proyectos</label>

											<div class="col-sm-4 col-md-4">
												<div class="required-field-block">
													<input type="text" name="pueblo_pregunta9" id="" placeholder="sea breve" class="form-control" required onkeypress="return soloLetras(event);" maxlength="40">
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-8 col-md-8 control-label" style="text-align:justify;">Que tipo de compromiso tiene Ud. con su sector para el mejoramiento</label>

											<div class="col-sm-4 col-md-4">
												<div class="required-field-block">
													<input type="text" name="pueblo_pregunta10" id="" placeholder="sea breve" class="form-control" required onkeypress="return soloLetras(event);" maxlength="40">
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-8 col-md-8 control-label" style="text-align:justify;">Que opina Ud. del censo energético</label>

											<div class="col-sm-4 col-md-4">
												<div class="required-field-block">
													<input type="text" name="pueblo_pregunta11" id="" placeholder="sea breve" class="form-control" required onkeypress="return soloLetras(event);" maxlength="40">
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-12 col-md-12 control-label" style="text-align:justify;">De crearse un consejo comunal en su comunidad, 
										¿en cuál área de trabajo le gustaría participar?</label>
										
										</div>

										<div class="form-group col-md-12">

											<div class="col-sm-12 col-md-8">
												<div class="required-field-block">
													<p>Contraloria y Seguimiento
													<input name="pueblo_pregunta_final" type="checkbox" value="Contraloria y Seguimiento">
													Relaciones Publicas y Medios
													<input name="pueblo_pregunta_final1" type="checkbox" value="Relaciones Publicas y Medios">
													Seguridad Ciudadana
													<input name="pueblo_pregunta_final2" type="checkbox" value="Seguridad Ciudadana">
													Infraestructura, Vivienda y Servicios Publicos
													<input name="pueblo_pregunta_final3" type="checkbox" value="Infraestructura, Vivienda y Servicios Publicos">
													Formacion y Conciencia Ideologica
													<input name="pueblo_pregunta_final4" type="checkbox" value="Formacion y Conciencia Ideologica">
													Elaboración de Proyectos de Desarrollo Comunitario
													<input name="pueblo_pregunta_final5" type="checkbox" value="Elaboracion de Proyectos de Desarrollo Comunitario">
													Alimentación y Nutricion
													<input name="pueblo_pregunta_final6" type="checkbox" value="Alimentación y Nutricion">
													Educacion Cultura y Tecnologia
													<input name="pueblo_pregunta_final7" type="checkbox" value="Educacion Cultura y Tecnologia">
													Salud, Deporte y Saneamiento Ambiental
													<input name="pueblo_pregunta_final8" type="checkbox" value="Salud, Deporte y Saneamiento Ambiental">
													Ejecucion de Programas Sociales y las Misiones
													<input name="pueblo_pregunta_final9" type="checkbox" value="Ejecucion de Programas Sociales y las Misiones">													
													</p>
													
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Otra area</label>

											<div class="col-sm-4 col-md-4">
												<input type="text" name="otra_area" id="" placeholder="Solo el nombre" class="form-control" maxlength="20" required onkeypress="return soloLetras(event);">
											</div>

										</div>
										
						    	</div><!-- final del panel body -->
					    	</div>
					    	</div>