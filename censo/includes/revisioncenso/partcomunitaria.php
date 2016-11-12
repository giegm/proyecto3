<?php
$data_ocho=$obj->obten_censo_por_id_ocho($_GET["id"]);
$data_part_comun=$obj->obten_censo_por_id_part_comun($_GET["id"]);
$data_ocho_dos=$obj->obten_censo_por_id_preg_part_comn($_GET["id"]);
?>
<div class="panel panel-default">
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
											<?php
											if($data_siete[0]["ORG_COMUNITARIA"]=="SI"){
												?>
												<select class="form-control selectpicker show-tick" name="org_comunitarias" id="">
													<option value="<?php echo $data_siete[0]["ORG_COMUNITARIA"] ;?>"><?php echo $data_siete[0]["ORG_COMUNITARIA"] ;?></option>
													<option value="NO">NO</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											<?php
											if($data_siete[0]["ORG_COMUNITARIA"]=="NO"){
												?>
												<select class="form-control selectpicker show-tick" name="org_comunitarias" id="">
													<option value="<?php echo $data_siete[0]["ORG_COMUNITARIA"] ;?>"><?php echo $data_siete[0]["ORG_COMUNITARIA"] ;?></option>
													<option value="SI">SI</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											</div>

											<label for="" class="col-sm-2 col-md-1 control-label" style="text-align:justify;">Cuales</label>

											<div class="col-sm-2 col-md-2">
												<input value="<?php echo $data_siete[0]["DESCRIPCION"]; ?>" type="text" name="name_organizacion" placeholder="solo nombre" maxlength="40" class="form-control" required onkeypress="return soloLetras(event);">
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Participa en alguna</label>

											<div class="col-sm-2 col-md-2">
											<?php
											if($data_siete[0]["PARTICIPA"]=="SI"){
												?>
												<select class="form-control selectpicker show-tick" name="participa_org" id="">
													<option value="<?php echo $data_siete[0]["PARTICIPA"] ;?>"><?php echo $data_siete[0]["PARTICIPA"] ;?></option>
													<option value="NO">NO</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											<?php
											if($data_siete[0]["PARTICIPA"]=="NO"){
												?>
												<select class="form-control selectpicker show-tick" name="participa_org" id="">
													<option value="<?php echo $data_siete[0]["PARTICIPA"] ;?>"><?php echo $data_siete[0]["PARTICIPA"] ;?></option>
													<option value="SI">SI</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Participa algun familiar</label>

											<div class="col-sm-2 col-md-2">
											<?php
											if($data_siete[0]["PARTICIPA_FAMILIAR"]=="SI"){
												?>
												<select class="form-control selectpicker show-tick" name="familiar_org" id="">
													<option value="<?php echo $data_siete[0]["PARTICIPA_FAMILIAR"] ;?>"><?php echo $data_siete[0]["PARTICIPA_FAMILIAR"] ;?></option>
													<option value="NO">NO</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											<?php
											if($data_siete[0]["PARTICIPA_FAMILIAR"]=="NO"){
												?>
												<select class="form-control selectpicker show-tick" name="familiar_org" id="">
													<option value="<?php echo $data_siete[0]["PARTICIPA_FAMILIAR"] ;?>"><?php echo $data_siete[0]["PARTICIPA_FAMILIAR"] ;?></option>
													<option value="SI">SI</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											</div>
											</div>
																						<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">¿Cuáles misiones estan en la comunidad?</label>
												<div class="col-sm-2 col-md-2">
													<b>Ribas</b>
														<select class="form-control selectpicker show-tick" name="name_mision" id="" title="<?php for($z=0;$z<count($data_part_comun);$z++){ echo $data_part_comun[$z]["MISIONES_COMUNIDAD"]. " ";}?>">
															<option value="Ribas ">SI</option>
															<option value=" ">NO</option>
														</select>
												</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Sucre</b>
															<select class="form-control selectpicker show-tick" name="name_mision1" id="" title="<?php for($z=0;$z<count($data_part_comun);$z++){ echo $data_part_comun[$z]["MISIONES_COMUNIDAD1"]. " ";}?>">
																<option value="Sucre ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Vuelvan Caras</b>
															<select class="form-control selectpicker show-tick" name="name_mision2" id="" title="<?php for($z=0;$z<count($data_part_comun);$z++){ echo $data_part_comun[$z]["MISIONES_COMUNIDAD2"]. " ";}?>">
																<option value="Vuelvan Caras ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Identidad</b>
															<select class="form-control selectpicker show-tick" name="name_mision3" id="" title="<?php for($z=0;$z<count($data_part_comun);$z++){ echo $data_part_comun[$z]["MISIONES_COMUNIDAD3"]. " ";}?>">
																<option value="Identidad ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
											</div>
											<div class="form-group col-md-12">
											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;"></label>
												<div class="col-sm-2 col-md-2">
													<b>Barrio Adentro</b>
														<select class="form-control selectpicker show-tick" name="name_mision4" id="" title="<?php for($z=0;$z<count($data_part_comun);$z++){ echo $data_part_comun[$z]["MISIONES_COMUNIDAD4"]. " ";}?>">
															<option value="Barrio Adentro ">SI</option>
															<option value=" ">NO</option>
														</select>
												</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Ezequiel zamora</b>
															<select class="form-control selectpicker show-tick" name="name_mision5" id="" title="<?php for($z=0;$z<count($data_part_comun);$z++){ echo $data_part_comun[$z]["MISIONES_COMUNIDAD5"]. " ";}?>">
																<option value="Ezequiel zamora ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Mercal</b>
															<select class="form-control selectpicker show-tick" name="name_mision6" id="" title="<?php for($z=0;$z<count($data_part_comun);$z++){ echo $data_part_comun[$z]["MISIONES_COMUNIDAD6"]. " ";}?>">
																<option value="Mercal ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
											</div>
										<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Otra misión</label>

											<div class="col-sm-2 col-md-2">
												<input value="<?php echo $data_siete[0]["OTRA_MISION"]; ?>" type="text" name="otra_mision" maxlength="30" required onkeypress="return soloLetras(event);" class="form-control"  placeholder="solo nombre">
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-10 col-md-10 control-label" style="text-align:justify;">¿Cree Ud. que en la actualidad el
										pueblo está interviniendo en las decisiones sobre cómo deben gastarse los recursos de su comunidad?</label>

											<div class="col-sm-2 col-md-2">
											<?php
											if($data_ocho_dos[0]["P_UNO"]=="SI"){
												?>
												<select class="form-control selectpicker show-tick" name="pueblo_pregunta1" id="">
													<option value="<?php echo $data_ocho_dos[0]["P_UNO"] ;?>"><?php echo $data_ocho_dos[0]["P_UNO"] ;?></option>
													<option value="NO">NO</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											<?php
											if($data_ocho_dos[0]["P_UNO"]=="NO"){
												?>
												<select class="form-control selectpicker show-tick" name="pueblo_pregunta1" id="">
													<option value="<?php echo $data_ocho_dos[0]["P_UNO"] ;?>"><?php echo $data_ocho_dos[0]["P_UNO"] ;?></option>
													<option value="SI">SI</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											</div>

										</div>
											
										<div class="form-group col-md-12">

											<label for="" class="col-sm-10 col-md-10 control-label" style="text-align:justify;">¿Está de acuerdo, que según la Constitución,
											es ahora el Pueblo organizado quien debe tener el protagonismo y el Poder para decidir sobre
											como invertir el presupuesto en su comunidad?</label>

											<div class="col-sm-2 col-md-2">
											<?php
											if($data_ocho_dos[0]["P_DOS"]=="SI"){
												?>
												<select class="form-control selectpicker show-tick" name="pueblo_pregunta2" id="">
													<option value="<?php echo $data_ocho_dos[0]["P_DOS"] ;?>"><?php echo $data_ocho_dos[0]["P_DOS"] ;?></option>
													<option value="NO">NO</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											<?php
											if($data_ocho_dos[0]["P_DOS"]=="NO"){
												?>
												<select class="form-control selectpicker show-tick" name="pueblo_pregunta2" id="">
													<option value="<?php echo $data_ocho_dos[0]["P_DOS"] ;?>"><?php echo $data_ocho_dos[0]["P_DOS"] ;?></option>
													<option value="SI">SI</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											</div>

										</div>
										
										<div class="form-group col-md-12">

										<label for="" class="col-sm-10 col-md-8 control-label" style="text-align:justify;">¿Tiene información sobre la
											propuesta de creación de consejos comunales?</label>

											<div class="col-sm-2 col-md-2">
											<?php
											if($data_ocho_dos[0]["P_TRES"]=="SI"){
												?>
												<select class="form-control selectpicker show-tick" name="pueblo_pregunta3" id="">
													<option value="<?php echo $data_ocho_dos[0]["P_TRES"] ;?>"><?php echo $data_ocho_dos[0]["P_TRES"] ;?></option>
													<option value="NO">NO</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											<?php
											if($data_ocho_dos[0]["P_TRES"]=="NO"){
												?>
												<select class="form-control selectpicker show-tick" name="pueblo_pregunta3" id="">
													<option value="<?php echo $data_ocho_dos[0]["P_TRES"] ;?>"><?php echo $data_ocho_dos[0]["P_TRES"] ;?></option>
													<option value="SI">SI</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-10 col-md-8 control-label" style="text-align:justify;">¿Estaría dispuesto(a) a apoyar
										y participar en la creación de un consejo comunal en su comunidad?</label>

											<div class="col-sm-2 col-md-2">
											<?php
											if($data_ocho_dos[0]["P_CUATRO"]=="SI"){
												?>
												<select class="form-control selectpicker show-tick" name="pueblo_pregunta4" id="">
													<option value="<?php echo $data_ocho_dos[0]["P_CUATRO"] ;?>"><?php echo $data_ocho_dos[0]["P_CUATRO"] ;?></option>
													<option value="NO">NO</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											<?php
											if($data_ocho_dos[0]["P_CUATRO"]=="NO"){
												?>
												<select class="form-control selectpicker show-tick" name="pueblo_pregunta4" id="">
													<option value="<?php echo $data_ocho_dos[0]["P_CUATRO"] ;?>"><?php echo $data_ocho_dos[0]["P_CUATRO"] ;?></option>
													<option value="SI">SI</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-10 col-md-8 control-label" style="text-align:justify;">Participa Ud. o asiste a las asambleas de Ciudadanos (as)</label>

											<div class="col-sm-2 col-md-2">
											<?php
											if($data_ocho_dos[0]["P_CINCO"]=="SI"){
												?>
												<select class="form-control selectpicker show-tick" name="pueblo_pregunta5" id="">
													<option value="<?php echo $data_ocho_dos[0]["P_CINCO"] ;?>"><?php echo $data_ocho_dos[0]["P_CINCO"] ;?></option>
													<option value="NO">NO</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											<?php
											if($data_ocho_dos[0]["P_CINCO"]=="NO"){
												?>
												<select class="form-control selectpicker show-tick" name="pueblo_pregunta5" id="">
													<option value="<?php echo $data_ocho_dos[0]["P_CINCO"] ;?>"><?php echo $data_ocho_dos[0]["P_CINCO"] ;?></option>
													<option value="SI">SI</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-8 col-md-8 control-label" style="text-align:justify;">Como cree Ud. Que se van a resolver los problemas del sector</label>

											<div class="col-sm-4 col-md-4">
												<input value="<?php echo $data_ocho_dos[0]["P_SEIS"]; ?>" type="text" name="pueblo_pregunta6" id="" placeholder="sea breve" class="form-control" maxlength="40" required onkeypress="return soloLetras(event);">
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-8 col-md-8 control-label" style="text-align:justify;">Quien cree que va a a resolver los problemas del sector</label>

											<div class="col-sm-4 col-md-4">
												<input value="<?php echo $data_ocho_dos[0]["P_SIETE"]; ?>" type="text" name="pueblo_pregunta7" id="" placeholder="sea breve" class="form-control" maxlength="40" required onkeypress="return soloLetras(event);">
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-8 col-md-8 control-label" style="text-align:justify;">Que tipo de proyectos le gustaría que se ejecutaran o 
										que se desarrollaran en su comunidad</label>

											<div class="col-sm-4 col-md-4">
												<input value="<?php echo $data_ocho_dos[0]["P_OCHO"]; ?>" type="text" name="pueblo_pregunta8" id="" placeholder="sea breve" class="form-control" maxlength="40" required onkeypress="return soloLetras(event);">
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-8 col-md-8 control-label" style="text-align:justify;">Como apoyaría Ud. A que se realicen y ejecuten los proyectos</label>

											<div class="col-sm-4 col-md-4">
												<input value="<?php echo $data_ocho_dos[0]["P_NUEVE"]; ?>" type="text" name="pueblo_pregunta9" id="" placeholder="sea breve" class="form-control" maxlength="40" required onkeypress="return soloLetras(event);">
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-8 col-md-8 control-label" style="text-align:justify;">Que tipo de compromiso tiene Ud. con su sector para el mejoramiento</label>

											<div class="col-sm-4 col-md-4">
												<input value="<?php echo $data_ocho_dos[0]["P_DIEZ"]; ?>" type="text" name="pueblo_pregunta10" id="" placeholder="sea breve" class="form-control" required onkeypress="return soloLetras(event);" maxlength="40">
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-8 col-md-8 control-label" style="text-align:justify;">Que opina Ud. del censo energético</label>

											<div class="col-sm-4 col-md-4">
												<input value="<?php echo $data_ocho_dos[0]["P_ONCE"]; ?>" type="text" name="pueblo_pregunta11" id="" placeholder="sea breve" class="form-control" maxlength="40" required onkeypress="return soloLetras(event);">
											</div>

										</div>

										<div class="form-group col-md-12">
											<label for="" class="col-sm-12 col-md-12 control-label" style="text-align:justify;">De crearse un consejo comunal en su comunidad, 
										¿en cuál área de trabajo le gustaría participar?</label>
												<div class="col-sm-12 col-md-8">
													<b>Contraloria y Seguimiento</b>
														<select class="form-control selectpicker show-tick" name="pueblo_pregunta_final" id="" title="<?php for($z=0;$z<sizeof($data_ocho_dos);$z++){echo $data_ocho_dos[$z]["P_DOCE"]. " "; }?>">
															<option value="Contraloria y Seguimiento ">SI</option>
															<option value=" ">NO</option>
														</select>
												</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-12 col-md-8">
														<b>Relaciones Publicas y Medios</b>
															<select class="form-control selectpicker show-tick" name="pueblo_pregunta_final1" id="" title="<?php for($z=0;$z<sizeof($data_ocho_dos);$z++){echo $data_ocho_dos[$z]["P_DOCE1"]. " "; }?>">
																<option value="Relaciones Publicas y Medios ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-12 col-md-8">
														<b>Seguridad Ciudadana</b>
															<select class="form-control selectpicker show-tick" name="pueblo_pregunta_final2" id="" title="<?php for($z=0;$z<sizeof($data_ocho_dos);$z++){echo $data_ocho_dos[$z]["P_DOCE2"]. " "; }?>">
																<option value="Seguridad Ciudadana ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-12 col-md-8">
														<b>Infraestructura, Vivienda y Servicios Publicos</b>
															<select class="form-control selectpicker show-tick" name="pueblo_pregunta_final3" id="" title="<?php for($z=0;$z<sizeof($data_ocho_dos);$z++){echo $data_ocho_dos[$z]["P_DOCE3"]. " "; }?>">
																<option value="Infraestructura, Vivienda y Servicios Publicos ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-12 col-md-8">
														<b>Formacion y Conciencia Ideologica</b>
															<select class="form-control selectpicker show-tick" name="pueblo_pregunta_final4" id="" title="<?php for($z=0;$z<sizeof($data_ocho_dos);$z++){echo $data_ocho_dos[$z]["P_DOCE4"]. " "; }?>">
																<option value="Formacion y Conciencia Ideologica ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-12 col-md-8">
														<b>Elaboración de Proyectos de Desarrollo Comunitario</b>
															<select class="form-control selectpicker show-tick" name="pueblo_pregunta_final5" id="" title="<?php for($z=0;$z<sizeof($data_ocho_dos);$z++){echo $data_ocho_dos[$z]["P_DOCE5"]. " "; }?>">
																<option value="Elaboración de Proyectos de Desarrollo Comunitario ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-12 col-md-8">
														<b>Alimentación y Nutricion</b>
															<select class="form-control selectpicker show-tick" name="pueblo_pregunta_final6" id="" title="<?php for($z=0;$z<sizeof($data_ocho_dos);$z++){echo $data_ocho_dos[$z]["P_DOCE6"]. " "; }?>">
																<option value="Alimentación y Nutricion ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-12 col-md-8">
														<b>Educacion Cultura y Tecnologia</b>
															<select class="form-control selectpicker show-tick" name="pueblo_pregunta_final7" id="" title="<?php for($z=0;$z<sizeof($data_ocho_dos);$z++){echo $data_ocho_dos[$z]["P_DOCE7"]. " "; }?>">
																<option value="Educacion Cultura y Tecnologia ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-12 col-md-8">
														<b>Salud, Deporte y Saneamiento Ambiental</b>
															<select class="form-control selectpicker show-tick" name="pueblo_pregunta_final8" id="" title="<?php for($z=0;$z<sizeof($data_ocho_dos);$z++){echo $data_ocho_dos[$z]["P_DOCE8"]. " "; }?>">
																<option value="Salud, Deporte y Saneamiento Ambiental ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-12 col-md-8">
														<b>Ejecución de Programas Sociales y las Misiones</b>
															<select class="form-control selectpicker show-tick" name="pueblo_pregunta_final9" id="" title="<?php for($z=0;$z<sizeof($data_ocho_dos);$z++){echo $data_ocho_dos[$z]["P_DOCE9"]. " "; }?>">
																<option value="Ejecución de Programas Sociales y las Misiones ">SI</option>
																<option value=" ">NO</option>
															</select>
													</div>
											</div>
										<div class="form-group col-md-12">

										<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Otra area</label>

											<div class="col-sm-4 col-md-4">
												<input value="<?php echo $data_ocho_dos[0]["OTRA_AREA"]; ?>" type="text" name="otra_area" id="" placeholder="Solo el nombre" class="form-control" required onkeypress="return soloLetras(event);" maxlength="20">
											</div>

										</div>
										
						    	</div><!-- final del panel body -->
					    	</div>
					    	</div>