	<div id="paneles-censo"class="panel panel-default">
					    	  <div class="panel-heading" role="tab" id="heading4">
					    			<h3 class="panel-title">
					    				<a href="#collapse4" data-toggle="collapse" data-parent="#accordion4" aria-expanded="true" aria-control="collapse4">
					    					Servicios
					    				<i class="fa fa-caret-down" style="float:right"></i><span style="float:right;">&nbsp;&nbsp;</span><i class="fa fa-caret-up" style="float:right"></i></a>
					    			</h3>
					    	  </div><!-- final del primer heading -->

						    	<div id="collapse4" class="panel-collapse collapse on" role="tabpanel4" aria-labelledby="heading4">
							    	<div class="panel-body">

							    		<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Aguas blancas</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="aguas_blancas" id="">
														<option value="0">seleccione</option>
			                                            <?php 
			                                            $aguasblancs=$obj2->get_casa_aguas_blancas(); 
			                                            for($g=0;$g<sizeof($aguasblancs);$g++){
			                                                ?>
			                                                <option value="<?php echo utf8_encode($aguasblancs[$g]["AGUASBLANCAS"]); ?>"><?php echo utf8_encode($aguasblancs[$g]["AGUASBLANCAS"]); ?></option>
			                                                <?php
			                                            }
			                                            ?>
													</select>
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>
											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Posee tanque</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="posee_tanque" id="">
														<option value="0">seleccione</option>
														<option value="SI">SI</option>
														<option value="NO">NO</option>
													</select>
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Tanque/Litros</label>

											<div class="col-sm-2 col-md-2">
												<input type="text" name="litros_tanque" class="form-control" maxlength="6"  id="" placeholder="Solo números" required onKeyPress="return SoloNumeros(event);">
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Posee pipotes</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="posee_pipotes" id="">
														<option value="0">seleccione</option>
														<option value="SI">SI</option>
														<option value="NO">NO</option>
													</select>
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Cant.Pipotes</label>

											<div class="col-sm-2 col-md-1">
												<input type="text"  name="cant_pipotes" class="form-control" maxlength="2" id="" placeholder="0" required onKeyPress="return SoloNumeros(event);">
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Posee medidor</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="posee_medidor" id="">
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

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Aguas servidas</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="aguas_servidas" id="">
														<option value="0">seleccione</option>
			                                            <?php 
			                                            $aguaserv=$obj2->get_casa_aguas_servidas(); 
			                                            for($h=0;$h<sizeof($aguaserv);$h++){
			                                                ?>
			                                                <option value="<?php echo utf8_encode($aguaserv[$h]["AGUASERVIDA"]); ?>"><?php echo utf8_encode($aguaserv[$h]["AGUASERVIDA"]); ?></option>
			                                                <?php
			                                            }
			                                            ?>
													</select>
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

											<label for="" class="col-sm-2 col-md-1 control-label" style="text-align:justify;">Gas</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="gas" id="">
														<option value="0">seleccione</option>
			                                            <?php 
			                                            $gascasa=$obj2->get_casa_gas(); 
			                                            for($i=0;$i<sizeof($gascasa);$i++){
			                                                ?>
			                                                <option value="<?php echo utf8_encode($gascasa[$i]["GAS"]); ?>"><?php echo utf8_encode($gascasa[$i]["GAS"]); ?></option>
			                                                <?php
			                                            }
			                                            ?>
													</select>
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Proveedor/Gas</label>

											<div class="col-sm-2 col-md-2">
												<input type="text" name="proveedor_gas" class="form-control"  id="" maxlength="20" placeholder="Indique el nombre del proveedor" required onkeypress="return soloLetras(event);" onKeyUp="this.value = this.value.toUpperCase();">
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Cantidad de cilindros o bombonas</label>

											<div class="col-sm-2 col-md-2">
												<input type="text"  name="cant_cilindros" class="form-control" maxlength="2" id="" placeholder="Solo números" required onKeyPress="return SoloNumeros(event);">
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Duración/Gas</label>

											<div class="col-sm-2 col-md-2">
												<input type="text"  name="duración_gas" class="form-control" maxlength="3" id="" placeholder="Indique en días" required onKeyPress="return SoloNumeros(event);">
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Precio/Gas</label>

											<div class="col-sm-2 col-md-2">
												<input type="text"  name="precio_gas" class="form-control" maxlength="4"  id="" placeholder="Cantidad en Bsf" required onKeyPress="return SoloNumeros(event);">
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Sistema eléctrico</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="sist_electrico" id="">
														<option value="0">seleccione</option>
			                                            <?php 
			                                            $electrcasa=$obj2->get_casa_sistema_electrico(); 
			                                            for($j=0;$j<sizeof($electrcasa);$j++){
			                                                ?>
			                                                <option value="<?php echo utf8_encode($electrcasa[$j]["SISTELECTRICO"]); ?>"><?php echo utf8_encode($electrcasa[$j]["SISTELECTRICO"]); ?></option>
			                                                <?php
			                                            }
			                                            ?>
													</select>
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Posee medidor</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="medidor_electrico" id="">
														<option value="0">seleccione</option>
														<option value="SI">SI</option>
														<option value="NO">NO</option>
													</select>
													<div class="required-icon">
									                	<div class="text">*</div>
									            	</div>
									        	</div>
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Bombillos ahorradores</label>

											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
														<select class="form-control selectpicker show-tick" name="bombillos_ahorradores" id="">
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

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Cuantos necesita</label>

											<div class="col-sm-2 col-md-2">
												<input type="text"  name="cant_bombillos" class="form-control" maxlength="2" id="" placeholder="solo números" required onKeyPress="return SoloNumeros(event);">
										</div>
										<div class="form-group col-md-12">
											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Recolección de basura</label>
												<div class="col-sm-2 col-md-2">
													<b>Aseo Urbano</b>
													<div class="required-field-block">
														<select class="form-control selectpicker show-tick" name="recoleccion_basura" id="">
															<option value="0">seleccione</option>
															<option value="Aseo Urbano ">SI</option>
															<option value=" ">NO</option>
														</select>
														<div class="required-icon">
														    <div class="text">*</div>
														</div>
													</div>
												</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Container</b>
														<div class="required-field-block">
															<select class="form-control selectpicker show-tick" name="recoleccion_basura1" id="">
																<option value="0">seleccione</option>
																<option value="Container ">SI</option>
																<option value=" ">NO</option>
															</select>
															<div class="required-icon">
															    <div class="text">*</div>
															</div>
														</div>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Bajante</b>
														<div class="required-field-block">
															<select class="form-control selectpicker show-tick" name="recoleccion_basura2" id="">
																<option value="0">seleccione</option>
																<option value="Bajante ">SI</option>
																<option value=" ">NO</option>
															</select>
															<div class="required-icon">
															    <div class="text">*</div>
															</div>
														</div>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Camión</b>
														<div class="required-field-block">
															<select class="form-control selectpicker show-tick" name="recoleccion_basura3" id="">
																<option value="0">seleccione</option>
																<option value="Camión ">SI</option>
																<option value=" ">NO</option>
															</select>
															<div class="required-icon">
															    <div class="text">*</div>
															</div>
														</div>
													</div>
											</div>
											<div class="form-group col-md-12">
												<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;"></label>
													<div class="col-sm-2 col-md-2">
														<b>Al Aire Libre</b>
															<div class="required-field-block">
																<select class="form-control selectpicker show-tick" name="recoleccion_basura4" id="">
																	<option value="0">seleccione</option>
																	<option value="Al Aire Libre ">SI</option>
																	<option value=" ">NO</option>
																</select>
																<div class="required-icon">
															    	<div class="text">*</div>
																</div>
															</div>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Quemada</b>
														<div class="required-field-block">
															<select class="form-control selectpicker show-tick" name="recoleccion_basura5" id="">
																<option value="0">seleccione</option>
																<option value="Quemada ">SI</option>
																<option value=" ">NO</option>
															</select>
															<div class="required-icon">
															    <div class="text">*</div>
															</div>
														</div>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Otro</b>
														<div class="required-field-block">
															<select class="form-control selectpicker show-tick" name="recoleccion_basura6" id="">
																<option value="0">seleccione</option>
																<option value="Otro ">SI</option>
																<option value=" ">NO</option>
															</select>
															<div class="required-icon">
															    <div class="text">*</div>
															</div>
														</div>
													</div>
											</div>

											<div class="form-group col-md-12">
											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Telefonía</label>
												<div class="col-sm-2 col-md-2">
													<b>Domiciliaría</b>
													<div class="required-field-block">
														<select class="form-control selectpicker show-tick" name="telefonia" id="">
															<option value="0">seleccione</option>
															<option value="Domiciliaría ">SI</option>
															<option value=" ">NO</option>
														</select>
														<div class="required-icon">
														    <div class="text">*</div>
														</div>
													</div>
												</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Célular</b>
														<div class="required-field-block">
															<select class="form-control selectpicker show-tick" name="telefonia1" id="">
																<option value="0">seleccione</option>
																<option value="Célular ">SI</option>
																<option value=" ">NO</option>
															</select>
															<div class="required-icon">
															    <div class="text">*</div>
															</div>
														</div>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Prepago</b>
														<div class="required-field-block">
															<select class="form-control selectpicker show-tick" name="telefonia2" id="">
																<option value="0">seleccione</option>
																<option value="Prepago ">SI</option>
																<option value=" ">NO</option>
															</select>
															<div class="required-icon">
															    <div class="text">*</div>
															</div>
														</div>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Centro de Conexión</b>
														<div class="required-field-block">
															<select class="form-control selectpicker show-tick" name="telefonia3" id="">
																<option value="0">seleccione</option>
																<option value="Centro de Conexión ">SI</option>
																<option value=" ">NO</option>
															</select>
															<div class="required-icon">
															    <div class="text">*</div>
															</div>
														</div>
													</div>
											</div>
											<div class="form-group col-md-12">
												<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;"></label>
												<div class="col-sm-2 col-md-2">
													<b>Otra</b>
														<div class="required-field-block">
															<select class="form-control selectpicker show-tick" name="telefonia4" id="">
																<option value="0">seleccione</option>
																<option value="Otra ">SI</option>
																<option value=" ">NO</option>
															</select>
															<div class="required-icon">
															    <div class="text">*</div>
															</div>
														</div>
												</div>
											</div>
										<div class="form-group col-md-12">
											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Transporte</label>
											<div class="col-sm-2 col-md-2">
												<div class="required-field-block">
													<select class="form-control selectpicker show-tick" name="transporte" id="">
														<option value="0">seleccione</option>
			                                            <?php 
			                                            $transport=$obj2->get_casa_transporte(); 
			                                            for($m=0;$m<sizeof($transport);$m++){
			                                                ?>
			                                                <option value="<?php echo utf8_encode($transport[$m]["TRANSPORTE"]); ?>"><?php echo utf8_encode($transport[$m]["TRANSPORTE"]); ?></option>
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
											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Mecanismo de información</label>
												<div class="col-sm-2 col-md-2">
													<b>Televisión</b>
													<div class="required-field-block">
														<select class="form-control selectpicker show-tick" name="mecan_informacion" id="">
															<option value="0">seleccione</option>
															<option value="Televisión ">SI</option>
															<option value=" ">NO</option>
														</select>
														<div class="required-icon">
														    <div class="text">*</div>
														</div>
													</div>
												</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Radio</b>
														<div class="required-field-block">
															<select class="form-control selectpicker show-tick" name="mecan_informacion1" id="">
																<option value="0">seleccione</option>
																<option value="Radio ">SI</option>
																<option value=" ">NO</option>
															</select>
															<div class="required-icon">
															    <div class="text">*</div>
															</div>
														</div>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Prensa</b>
														<div class="required-field-block">
															<select class="form-control selectpicker show-tick" name="mecan_informacion2" id="">
																<option value="0">seleccione</option>
																<option value="Prensa ">SI</option>
																<option value=" ">NO</option>
															</select>
															<div class="required-icon">
															    <div class="text">*</div>
															</div>
														</div>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Internet</b>
														<div class="required-field-block">
															<select class="form-control selectpicker show-tick" name="mecan_informacion3" id="">
																<option value="0">seleccione</option>
																<option value="Internet ">SI</option>
																<option value=" ">NO</option>
															</select>
															<div class="required-icon">
															    <div class="text">*</div>
															</div>
														</div>
													</div>
											</div>
											<div class="form-group col-md-12">
												<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;"></label>
													<div class="col-sm-2 col-md-2">
														<b>Medios Alternativos</b>
														<div class="required-field-block">
															<select class="form-control selectpicker show-tick" name="mecan_informacion4" id="">
																<option value="0">seleccione</option>
																<option value="Medios Alternativos Comunitarios ">SI</option>
																<option value=" ">NO</option>
															</select>
															<div class="required-icon">
														    	<div class="text">*</div>
															</div>
														</div>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Otros</b>
														<div class="required-field-block">
															<select class="form-control selectpicker show-tick" name="mecan_informacion5" id="">
																<option value="0">seleccione</option>
																<option value="Otros ">SI</option>
																<option value=" ">NO</option>
															</select>
															<div class="required-icon">
															    <div class="text">*</div>
															</div>
														</div>
													</div>
											</div>
											<div class="form-group col-md-12">
											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Servicios Comunales</label>
												<div class="col-sm-2 col-md-2">
													<b>Mercado</b>
													<div class="required-field-block">
														<select class="form-control selectpicker show-tick" name="serv_comunales" id="">
															<option value="0">seleccione</option>
															<option value="Mercado ">SI</option>
															<option value=" ">NO</option>
														</select>
														<div class="required-icon">
														    <div class="text">*</div>
														</div>
													</div>
												</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Bodega</b>
														<div class="required-field-block">
															<select class="form-control selectpicker show-tick" name="serv_comunales1" id="">
																<option value="0">seleccione</option>
																<option value="Bodega ">SI</option>
																<option value=" ">NO</option>
															</select>
															<div class="required-icon">
															    <div class="text">*</div>
															</div>
														</div>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Abastos</b>
														<div class="required-field-block">
															<select class="form-control selectpicker show-tick" name="serv_comunales2" id="">
																<option value="0">seleccione</option>
																<option value="Abastos ">SI</option>
																<option value=" ">NO</option>
															</select>
															<div class="required-icon">
															    <div class="text">*</div>
															</div>
														</div>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Farmacia</b>
														<div class="required-field-block">
															<select class="form-control selectpicker show-tick" name="serv_comunales3" id="">
																<option value="0">seleccione</option>
																<option value="Farmacia ">SI</option>
																<option value=" ">NO</option>
															</select>
															<div class="required-icon">
															    <div class="text">*</div>
															</div>
														</div>
													</div>
											</div>
											<div class="form-group col-md-12">
											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;"></label>
												<div class="col-sm-2 col-md-2">
													<b>PLazas y Parques</b>
													<div class="required-field-block">
														<select class="form-control selectpicker show-tick" name="serv_comunales4" id="">
															<option value="0">seleccione</option>
															<option value="PLazas y Parques ">SI</option>
															<option value=" ">NO</option>
														</select>
														<div class="required-icon">
														    <div class="text">*</div>
														</div>
													</div>
												</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Preescolar</b>
														<div class="required-field-block">
															<select class="form-control selectpicker show-tick" name="serv_comunales5" id="">
																<option value="0">seleccione</option>
																<option value="Preescolar ">SI</option>
																<option value=" ">NO</option>
															</select>
															<div class="required-icon">
															    <div class="text">*</div>
															</div>
														</div>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Escuelas</b>
														<div class="required-field-block">
															<select class="form-control selectpicker show-tick" name="serv_comunales6" id="">
																<option value="0">seleccione</option>
																<option value="Escuelas ">SI</option>
																<option value=" ">NO</option>
															</select>
															<div class="required-icon">
															    <div class="text">*</div>
															</div>
														</div>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Liceos</b>
														<div class="required-field-block">
															<select class="form-control selectpicker show-tick" name="serv_comunales7" id="">
																<option value="0">seleccione</option>
																<option value="Liceos ">SI</option>
																<option value=" ">NO</option>
															</select>
															<div class="required-icon">
															    <div class="text">*</div>
															</div>
														</div>
													</div>
											</div>
											<div class="form-group col-md-12">
											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;"></label>
												<div class="col-sm-2 col-md-2">
													<b>Centro de Salud</b>
													<div class="required-field-block">
														<select class="form-control selectpicker show-tick" name="serv_comunales8" id="">
															<option value="0">seleccione</option>
															<option value="Centro de Salud ">SI</option>
															<option value=" ">NO</option>
														</select>
														<div class="required-icon">
														    <div class="text">*</div>
														</div>
													</div>
												</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Canchas</b>
														<div class="required-field-block">
															<select class="form-control selectpicker show-tick" name="serv_comunales9" id="">
																<option value="0">seleccione</option>
																<option value="Canchas ">SI</option>
																<option value=" ">NO</option>
															</select>
															<div class="required-icon">
															    <div class="text">*</div>
															</div>
														</div>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Casa Comunal</b>
														<div class="required-field-block">
															<select class="form-control selectpicker show-tick" name="serv_comunales10" id="">
																<option value="0">seleccione</option>
																<option value="Casa Comunal ">SI</option>
																<option value=" ">NO</option>
															</select>
															<div class="required-icon">
															    <div class="text">*</div>
															</div>
														</div>
													</div>
												<label for="" class=".col-xs-6 .col-sm-3"></label>
													<div class="col-sm-2 col-md-2">
														<b>Iglesia</b>
														<div class="required-field-block">
															<select class="form-control selectpicker show-tick" name="serv_comunales11" id="">
																<option value="0">seleccione</option>
																<option value="Iglesia ">SI</option>
																<option value=" ">NO</option>
															</select>
															<div class="required-icon">
															    <div class="text">*</div>
															</div>
														</div>
													</div>
											</div>
											<div class="form-group col-md-12">
											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;"></label>
												<div class="col-sm-2 col-md-2">
													<b>Otros</b>
													<div class="required-field-block">
														<select class="form-control selectpicker show-tick" name="serv_comunales12" id="">
															<option value="0">seleccione</option>
															<option value="Otros ">SI</option>
															<option value=" ">NO</option>
														</select>
														<div class="required-icon">
														    <div class="text">*</div>
														</div>
													</div>
												</div>
											</div>
									</div>

						    	</div><!-- final del panel body -->
					    	</div>
					    	</div>