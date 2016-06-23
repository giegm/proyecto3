<div id="paneles-censo" class="panel panel-default">
					    	  <div class="panel-heading" role="tab" id="heading5">
					    			<h3 class="panel-title">
					    				<a href="#collapse5" data-toggle="collapse" data-parent="#accordion5" aria-expanded="true" aria-control="collapse5">
					    					Partcipación comunitaria
					    				<i class="fa fa-caret-down" style="float:right"></i><span style="float:right;">&nbsp;&nbsp;</span><i class="fa fa-caret-up" style="float:right"></i></a>
					    			</h3>
					    	  </div><!-- final del primer heading -->

						    	<div id="collapse5" class="panel-collapse collapse on" role="tabpanel5" aria-labelledby="heading5">
							    	<div class="panel-body">

							    		<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Organizaciones comunitarias</label>

											<div class="col-sm-2 col-md-2">
												<select class="form-control selectpicker show-tick" name="org_comunitarias" id="">
													<option value="0">seleccione</option>
													<option value="SI">SI</option>
													<option value="NO">NO</option>
												</select>
											</div>

											<label for="" class="col-sm-2 col-md-1 control-label" style="text-align:justify;">Cuales</label>

											<div class="col-sm-2 col-md-2">
												<input type="text" name="name_organizacion" placeholder="solo nombre" class="form-control" >
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Participa en alguna</label>

											<div class="col-sm-2 col-md-2">
												<select class="form-control selectpicker show-tick" name="participa_org" id="">
													<option value="0">seleccione</option>
													<option value="SI">SI</option>
													<option value="NO">NO</option>
												</select>
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Participa algun familiar</label>

											<div class="col-sm-2 col-md-2">
												<select class="form-control selectpicker show-tick" name="familiar_org" id="">
													<option value="0">seleccione</option>
													<option value="SI">SI</option>
													<option value="NO">NO</option>
												</select>
											</div>

											<label for="" class="col-sm-4 col-md-4 control-label" style="text-align:justify;">Cuales misiones estan en la comunidad</label>

											<div class="col-sm-2 col-md-2">
												<select class="form-control selectpicker show-tick" name="name_mision[]" multiple>
												
													<?php  
													$misiones=$obj2->get_comunidad_misiones();
													for($q=0;$q<sizeof($misiones);$q++){
														?>
														<option value="<?php echo $misiones[$q]["MISIONES"]; ?>"><?php echo $misiones[$q]["MISIONES"]; ?></option>
														<?php
													}
													?>
												</select>
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Otra misión</label>

											<div class="col-sm-2 col-md-2">
												<input type="text" name="otra_mision" class="form-control"  placeholder="solo nombre">
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-10 col-md-10 control-label" style="text-align:justify;">¿Cree Ud. que en la actualidad el
										pueblo está interviniendo en las decisiones sobre cómo deben gastarse los recursos de su comunidad?</label>

											<div class="col-sm-2 col-md-2">
												<select class="form-control selectpicker show-tick" name="pueblo_pregunta1" id="">
													<option value="0">seleccione</option>
													<option value="SI">SI</option>
													<option value="NO">NO</option>
												</select>
											</div>

										</div>
											
										<div class="form-group col-md-12">

											<label for="" class="col-sm-10 col-md-10 control-label" style="text-align:justify;">¿Está de acuerdo, que según la Constitución,
											es ahora el Pueblo organizado quien debe tener el protagonismo y el Poder para decidir sobre
											como invertir el presupuesto en su comunidad?</label>

											<div class="col-sm-2 col-md-2">
												<select class="form-control selectpicker show-tick" name="pueblo_pregunta2" id="">
													<option value="0">seleccione</option>
													<option value="SI">SI</option>
													<option value="NO">NO</option>
												</select>
											</div>

										</div>
										
										<div class="form-group col-md-12">

										<label for="" class="col-sm-10 col-md-8 control-label" style="text-align:justify;">¿Tiene información sobre la
											propuesta de creación de consejos comunales?</label>

											<div class="col-sm-2 col-md-2">
												<select class="form-control selectpicker show-tick" name="pueblo_pregunta3" id="">
													<option value="0">seleccione</option>
													<option value="SI">SI</option>
													<option value="NO">NO</option>
												</select>
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-10 col-md-8 control-label" style="text-align:justify;">¿Estaría dispuesto(a) a apoyar
										y participar en la creación de un consejo comunal en su comunidad?</label>

											<div class="col-sm-2 col-md-2">
												<select class="form-control selectpicker show-tick" name="pueblo_pregunta4" id="">
													<option value="0">seleccione</option>
													<option value="SI">SI</option>
													<option value="NO">NO</option>
												</select>
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-10 col-md-8 control-label" style="text-align:justify;">Participa Ud. o asiste a las asambleas de Ciudadanos (as)</label>

											<div class="col-sm-2 col-md-2">
												<select class="form-control selectpicker show-tick" name="pueblo_pregunta5" id="">
													<option value="0">seleccione</option>
													<option value="SI">SI</option>
													<option value="NO">NO</option>
												</select>
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-8 col-md-8 control-label" style="text-align:justify;">Como cree Ud. Que se van a resolver los problemas del sector</label>

											<div class="col-sm-4 col-md-4">
												<input type="text" name="pueblo_pregunta6" id="" placeholder="sea breve" class="form-control" >
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-8 col-md-8 control-label" style="text-align:justify;">Quien cree que va a a resolver los problemas del sector</label>

											<div class="col-sm-4 col-md-4">
												<input type="text" name="pueblo_pregunta7" id="" placeholder="sea breve" class="form-control" >
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-8 col-md-8 control-label" style="text-align:justify;">Que tipo de proyectos le gustaría que se ejecutaran o 
										que se desarrollaran en su comunidad</label>

											<div class="col-sm-4 col-md-4">
												<input type="text" name="pueblo_pregunta8" id="" placeholder="sea breve" class="form-control" >
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-8 col-md-8 control-label" style="text-align:justify;">Como apoyaría Ud. A que se realicen y ejecuten los proyectos</label>

											<div class="col-sm-4 col-md-4">
												<input type="text" name="pueblo_pregunta9" id="" placeholder="sea breve" class="form-control" >
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-8 col-md-8 control-label" style="text-align:justify;">Que tipo de compromiso tiene Ud. con su sector para el mejoramiento</label>

											<div class="col-sm-4 col-md-4">
												<input type="text" name="pueblo_pregunta10" id="" placeholder="sea breve" class="form-control" >
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-8 col-md-8 control-label" style="text-align:justify;">Que opina Ud. del censo energético</label>

											<div class="col-sm-4 col-md-4">
												<input type="text" name="pueblo_pregunta11" id="" placeholder="sea breve" class="form-control" >
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-12 col-md-12 control-label" style="text-align:justify;">¿De crearse un consejo comunal en su comunidad, 
										en cual área de trabajo le gustaría participar? (Marque 3 opciones)</label>
										
										</div>

										<div class="form-group col-md-12">

											<div class="col-sm-12 col-md-8">
											
											<select class="form-control selectpicker show-tick" name="pueblo_pregunta_final[]" multiple>
											 
												<option value="Contraloria y Seguimiento">Contraloria y Seguimiento</option>
												<option value="Relaciones Publicas y Medios">Relaciones Publicas y Medios</option>
												<option value="Seguridad Ciudadana">Seguridad Ciudadana</option>
												<option value="Infraestructura, Vivienda y Servicios Publicos">Infraestructura, Vivienda y Servicios Publicos</option>
												<option value="Formacion y Conciencia Ideologica">Formación y Conciencia Ideológica</option>
												<option value="Elaboracion de
												Proyectos de Desarrollo Comunitario (Endogeno)">Elaboración de
												Proyectos de Desarrollo Comunitario (Endógeno)</option>
												<option value="Alimentación y Nutricion">Alimentación y Nutrición</option>
												<option value="Educacion Cultura y Tecnologia">Educación Cultura y Tecnología</option>
												<option value="Salud, Deporte y Saneamiento Ambiental">Salud, Deporte y Saneamiento Ambiental</option>
												<option value="Ejecucion de Programas Sociales y las Misiones">Ejecución de Programas Sociales y las Misiones</option>
												option
											</select>
												
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Otra area</label>

											<div class="col-sm-4 col-md-4">
												<input type="text" name="otra_area" id="" placeholder="Solo el nombre" class="form-control" >
											</div>

										</div>
										
						    	</div><!-- final del panel body -->
					    	</div>
					    	</div>