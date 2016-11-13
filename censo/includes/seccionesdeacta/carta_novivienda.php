    	<div id="paneles-censo" class="panel panel-default">
					    	  <div class="panel-heading" role="tab" id="heading3">
					    			<h3 class="panel-title">
					    				<a href="#collapse3" data-toggle="collapse" data-parent="#accordion3" aria-expanded="true" aria-control="collapse3">
					    					Constancia de No poseer Vivienda
					    				<i class="fa fa-caret-down" style="float:right"></i><span style="float:right;">&nbsp;&nbsp;</span><i class="fa fa-caret-up" style="float:right"></i></a>
					    			</h3>
					    	  </div><!-- final del primer heading -->

						    	<div id="collapse3" class="panel-collapse collapse on" role="tabpanel3" aria-labelledby="heading3">
							    	<div class="panel-body">							    	

										<div class="form-group col-md-12">
											<form action="../controlador/creapdf_acta4.php" method="POST" class="form-horizontal" name="form" role="form">
												<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Nombre y Apellido del Solicitante</label>
                                                <div class="col-sm-2 col-md-2">
                                                    <div class="required-field-block">
                                                        <input type="text" class="form-control" name="nomape" placeholder="Nombre y Apellido" maxlength="30">
                                                        <div class="required-icon">
                                                            <div class="text">*</div>
                                                        </div>
                                                    </div>
                                                </div>
												<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Dirigido a</label>
												<div class="col-sm-2 col-md-2">
													<div class="required-field-block">
														<input type="text" class="form-control" name="dirigido" placeholder="Indique el motivo" maxlength="50">
														<input type="hidden" name="cedula" value="<?php echo $_GET["cedula"]; ?>">														
													</div>
												</div>
												<div class="col-sm-2 col-md-2">
													<button class="btn btn-success" type="submit" value="Imprimir">Imprimir</button>
												</div>
											</form>
										</div>									

						    	</div><!-- final del panel body -->
					    	</div>
					    	</div>