<div id="paneles-censo" class="panel panel-deafult">
						    <div id="header-paneles-censo" class="panel-heading">
						    	<h3 class="panel-title">Datos del Censo</h3>
						    </div>
						    	<div class="panel-body">

						    	<div class="form-group col-md-12"><!-- primer form-group -->
									<h3>Datos del encuestador</h3>
								</div><!-- fin del primer form-group -->
							    		  
							    	<div class="form-group col-md-12">
							    			
							    			<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Nombre y apellido</label>

							    			<div class="col-sm-3 col-md-3">
							    				<input type="hidden" name="names_encuestador" placeholder="" class="form-control"  value="<?php echo $_SESSION["sesion_usuario"];?>">
							    				<input type="text" placeholder="" class="form-control"  value="<?php echo $_SESSION["sesion_usuario"];?>" disabled="disable">
							    			</div>

							    			<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">fecha</label>

							    			<div class="col-sm-3 col-md-3">
							    				<input type="hidden" name="fecha_evento" class="form-control"  value="<?php echo date("Y/m/d")?>">
							    				<input type="text" class="form-control"  value="<?php echo date("d/m/Y")?>" disabled>
							    			</div>
									</div>

									<div class="form-group col-md-12"><!-- primer form-group -->
									<h3>Datos del encuestado</h3>
								</div><!-- fin del primer form-group -->
							    		  
							    	<div class="form-group col-md-12">
							    		<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Nombre y apellido</label>

							    			<div class="col-sm-2 col-md-2">
							    				<div class="required-field-block">
							    					<input type="text" name="names_encuestado" maxlength="20" placeholder="Nombre y Apellido" class="form-control" required onkeypress="return soloLetras(event);" onKeyUp="this.value = this.value.toUpperCase();">
							    					<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
							    			</div>

							    		<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">N° de cedula</label>

							    			<div class="col-sm-2 col-md-2">
								    				<div class="required-field-block">
								    					<input type="text" name="ced_encuestado" placeholder="solo numeros" maxlength="8" class="form-control" required onKeyPress="return SoloNumeros(event);">
								    				<div class="required-icon">
										                <div class="text">*</div>
										            </div>
										        </div>
							    			</div>
									</div>

						    	</div>
						</div>