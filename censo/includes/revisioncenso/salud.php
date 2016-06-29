<?php
$obj=new Revisiones(); 
$data_seis=$obj->obten_censo_por_id_seis($_GET["id"]);
$data_selec=$obj->obten_censo_por_id_condiciones_salud($_GET["id"]);//para los multiselect
?>   	
    	<div class="panel panel-default">
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

											<div class="col-sm-3 col-md-3">
											
												<select class="form-control selectpicker show-tick" name="pers_enfermedades" id="" multiple title="<?php 
														for($b=0;$b<count($data_selec);$b++){
														echo $data_selec[$b]["PERSONA_ENFERMEDAD"]. " ";
														}
														?>">
														<option value="SIDA">SIDA</option>
														<option value="Corazon">Corazón</option>
														<option value="Hepatitis">Hepatitis</option>
														<option value="Leucemia">Leucemia</option>
														<option value="Tuberculosis">Tuberculosis</option>
														<option value="Hipertension">Hipertensión</option>
														<option value="Asma">Asma</option>
														<option value="Cancer">Cancer</option>
														<option value="Otra">Otra</option>

													</select>
												
											</div>

											<label for="" class="col-sm-3 col-md-3 control-label">Otra enfermedad</label>

											<div class="col-sm-2 col-md-2">
											<?php
											if($data_seis[0]["OTRA_ENFERMEDAD"]=="SI"){
												?>
												<select class="form-control selectpicker show-tick" name="otra_enfermedad" id="">
													<option value="<?php echo $data_seis[0]["OTRA_ENFERMEDAD"] ;?>"><?php echo $data_seis[0]["OTRA_ENFERMEDAD"] ;?></option>
													<option value="NO">NO</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											<?php
											if($data_seis[0]["OTRA_ENFERMEDAD"]=="NO"){
												?>
												<select class="form-control selectpicker show-tick" name="otra_enfermedad" id="">
													<option value="<?php echo $data_seis[0]["OTRA_ENFERMEDAD"] ;?>"><?php echo $data_seis[0]["OTRA_ENFERMEDAD"] ;?></option>
													<option value="SI">SI</option>
												</select>
												<?php
												}//fin del 2do if
											?>
												
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Necesita ayuda para enfermos</label>

											<div class="col-sm-2 col-md-2">
											<?php
											if($data_seis[0]["AYUDA_ENFERMOS"]=="SI"){
												?>
												<select class="form-control selectpicker show-tick" name="ayuda_enfermo" id="">
													<option value="<?php echo $data_seis[0]["AYUDA_ENFERMOS"] ;?>"><?php echo $data_seis[0]["AYUDA_ENFERMOS"] ;?></option>
													<option value="NO">NO</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											<?php
											if($data_seis[0]["AYUDA_ENFERMOS"]=="NO"){
												?>
												<select class="form-control selectpicker show-tick" name="ayuda_enfermo" id="">
													<option value="<?php echo $data_seis[0]["AYUDA_ENFERMOS"] ;?>"><?php echo $data_seis[0]["AYUDA_ENFERMOS"] ;?></option>
													<option value="SI">SI</option>
												</select>
												<?php
												}//fin del 2do if
											?>
											</div>

											<label for="" class="col-sm-3 col-md-3 control-label">Tipo de ayuda</label>

											<div class="col-sm-2 col-md-2">
												<input value="<?php echo $data_seis[0]["TIPO_AYUDA"]; ?>" type="text" name="tipo_ayuda_enfermo" id="" placeholder="especifiquela" class="form-control" >
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Situación de exclusión</label>

											<div class="col-sm-3 col-md-3">

												<select class="form-control selectpicker show-tick" name="pers_exclusion" id="" multiple title="<?php for($s=0;$s<count($data_selec);$s++){ echo $data_selec[$s]["SITUACION_EXCLUSION"]. " "; }?>">
												<option value="Niños de la calle">Niños de la calle</option>
													<option value="Indigentes">Indigentes</option>
													<option value="Enfermos terminales">Enfermos terminales</option>
													<option value="Discapacitados">Discapacitados</option>
													<option value="Tercera edad">Tercera edad</option>
													<option value="Otros">Otros</option>
												</select>
											</div>

											<label for="" class="col-sm-3 col-md-3 control-label">Cuantos</label>

											<div class="col-sm-2 col-md-2">
												<input value="<?php echo $data_seis[0]["CANTIDAD_EXCLUSION"]; ?>" type="text" name="cant_exclusion" id="" placeholder="solo números" class="form-control" required onKeyPress="return SoloNumeros(event);">
											</div>

										</div>

						    	</div><!-- final del panel body -->
					    	</div>
					    	</div>