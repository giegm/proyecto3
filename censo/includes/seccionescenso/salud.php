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

											<div class="col-sm-2 col-md-2">
												<select class="form-control selectpicker show-tick" name="pers_enfermedades[]" multiple>
												
	                                            <?php 
	                                            $persenferm=$obj2->get_persona_enfermedades(); 
	                                            for($e=0;$e<sizeof($persenferm);$e++){
	                                                ?>
	                                                <option value="<?php echo utf8_encode($persenferm[$e]["ENFERMEDADES"]); ?>"><?php echo utf8_encode($persenferm[$e]["ENFERMEDADES"]); ?></option>
	                                                <?php
	                                            }
	                                            ?>

												</select>
											</div>

											<label for="" class="col-sm-3 col-md-3 control-label">Otra enfermedad</label>

											<div class="col-sm-2 col-md-2">
												<select class="form-control selectpicker show-tick" name="otra_enfermedad" id="">
													
													<option value="SI">SI</option>
													<option value="NO">NO</option>
												</select>
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Necesita ayuda para enfermos</label>

											<div class="col-sm-2 col-md-2">
												<select class="form-control selectpicker show-tick" name="ayuda_enfermo" id="">
													
													<option value="SI">SI</option>
													<option value="NO">NO</option>
												</select>
											</div>

											<label for="" class="col-sm-3 col-md-3 control-label">Tipo de ayuda</label>

											<div class="col-sm-2 col-md-2">
												<input type="text" name="tipo_ayuda_enfermo" id="" placeholder="especifiquela" class="form-control" >
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Situación de exclusión</label>

											<div class="col-sm-2 col-md-2">
												<select class="form-control selectpicker show-tick" name="pers_exclusion[]" multiple>
												
		                                            <?php 
		                                            $persexclus=$obj2->get_personas_exclusion(); 
		                                            for($f=0;$f<sizeof($persexclus);$f++){
		                                                ?>
		                                                <option value="<?php echo utf8_encode($persexclus[$f]["PERSEXCLUSION"]); ?>"><?php echo utf8_encode($persexclus[$f]["PERSEXCLUSION"]); ?></option>
		                                                <?php
		                                            }
		                                            ?>
												</select>
											</div>

											<label for="" class="col-sm-3 col-md-3 control-label">Cuantos</label>

											<div class="col-sm-2 col-md-2">
												<input type="text" name="cant_exclusion" id="" placeholder="solo números" class="form-control" >
											</div>

										</div>

						    	</div><!-- final del panel body -->
					    	</div>
					    	</div>