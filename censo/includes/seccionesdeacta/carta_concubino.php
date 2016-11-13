<div id="paneles-censo" class="panel panel-default">
					    	  <div class="panel-heading" role="tab" id="heading1">
					    			<h3 class="panel-title">
					    				<a href="#collapse1" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-control="collapse1">
					    					Carta de Concubino
					    				<i class="fa fa-caret-down" style="float:right"></i><span style="float:right;">&nbsp;&nbsp;</span><i class="fa fa-caret-up" style="float:right"></i></a>
					    			</h3>
					    	  </div><!-- final del primer heading -->

						    	<div id="collapse1" class="panel-collapse collapse on" role="tabpanel1" aria-labelledby="heading1">
							    	<div class="panel-body">
							    		

										<div class="form-group col-md-12">
										<form action="../controlador/creapdf_acta6.php" method="POST" class="form-horizontal" name="form" role="form">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Motivo de la Solicitud</label>
											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<input type="text" name="motivo" autofocus class="form-control" placeholder="Indique el motivo">
													<div class="required-icon">
										            	<div class="text">*</div>
										            </div>
									        	</div>
											<br/>
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Nombre y Apellido Conyugue</label>
											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<input type="text" name="nombre" autofocus class="form-control" placeholder="Indique nombre y apellido" maxlength="50">
													<div class="required-icon">
										            	<div class="text">*</div>
										            </div>
									        	</div>
											<br/>
											</div>

											<label for="" class="control-label col-sm-2 col-md-2" style="text-align:justify;">N° C.I. Conyugue</label>
											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<input type="text" name="conyugue" autofocus class="form-control" placeholder="Solo números" required onKeyPress="return SoloNumeros(event);" maxlength="8">
													<input type="hidden" name="cedula" value="<?php echo $_GET["cedula"]; ?>">
													<div class="required-icon">
										            	<div class="text">*</div>
										            </div>
									        	</div>
											<br/>
											</div>
											<div class="col-sm-2 col-md-2">
												<button class="btn btn-success" type="submit" value="Imprimir">Imprimir</button>
											</div>
										</form>
										</div>
							    	</div>
						    	</div>
</div>


