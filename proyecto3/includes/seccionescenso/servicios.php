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
												<select class="form-control selectpicker show-tick" name="aguas_blancas" id="">
													
		                                            <?php 
		                                            $aguasblancs=$obj2->get_casa_aguas_blancas(); 
		                                            for($g=0;$g<sizeof($aguasblancs);$g++){
		                                                ?>
		                                                <option value="<?php echo utf8_encode($aguasblancs[$g]["AGUASBLANCAS"]); ?>"><?php echo utf8_encode($aguasblancs[$g]["AGUASBLANCAS"]); ?></option>
		                                                <?php
		                                            }
		                                            ?>
												</select>
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Posee tanque</label>

											<div class="col-sm-2 col-md-1">
												<select class="form-control selectpicker show-tick" name="posee_tanque" id="">
													
													<option value="SI">SI</option>
													<option value="NO">NO</option>
												</select>
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Tanque/Litros</label>

											<div class="col-sm-2 col-md-2">
												<input type="text" name="litros_tanque" class="form-control"  id="" placeholder="solo números">
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Posee pipotes</label>

											<div class="col-sm-2 col-md-2">
												<select class="form-control selectpicker show-tick" name="posee_pipotes" id="">
													
													<option value="SI">SI</option>
													<option value="NO">NO</option>
												</select>
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Cant.Pipotes</label>

											<div class="col-sm-2 col-md-1">
												<input type="text"  name="cant_pipotes" class="form-control"  id="" placeholder="0">
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Posee medidor</label>

											<div class="col-sm-2 col-md-2">
												<select class="form-control selectpicker show-tick" name="posee_medidor" id="">
													
													<option value="SI">SI</option>
													<option value="NO">NO</option>
												</select>
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Aguas servidas</label>

											<div class="col-sm-2 col-md-2">
												<select class="form-control selectpicker show-tick" name="aguas_servidas" id="">
													
		                                            <?php 
		                                            $aguaserv=$obj2->get_casa_aguas_servidas(); 
		                                            for($h=0;$h<sizeof($aguaserv);$h++){
		                                                ?>
		                                                <option value="<?php echo utf8_encode($aguaserv[$h]["AGUASERVIDA"]); ?>"><?php echo utf8_encode($aguaserv[$h]["AGUASERVIDA"]); ?></option>
		                                                <?php
		                                            }
		                                            ?>
												</select>
											</div>

											<label for="" class="col-sm-2 col-md-1 control-label" style="text-align:justify;">Gas</label>

											<div class="col-sm-2 col-md-2">
												<select class="form-control selectpicker show-tick" name="gas" id="">
													
		                                            <?php 
		                                            $gascasa=$obj2->get_casa_gas(); 
		                                            for($i=0;$i<sizeof($gascasa);$i++){
		                                                ?>
		                                                <option value="<?php echo utf8_encode($gascasa[$i]["GAS"]); ?>"><?php echo utf8_encode($gascasa[$i]["GAS"]); ?></option>
		                                                <?php
		                                            }
		                                            ?>
												</select>
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Proveedor/Gas</label>

											<div class="col-sm-2 col-md-2">
												<input type="text" name="proveedor_gas" class="form-control"  id="" placeholder="solo nombre">
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Cantidad de cilindros</label>

											<div class="col-sm-2 col-md-2">
												<input type="text"  name="cant_cilindros" class="form-control"  id="" placeholder="solo números">
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Duración/Gas</label>

											<div class="col-sm-2 col-md-2">
												<input type="text"  name="duración_gas" class="form-control"  id="" placeholder="solo números">
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Precio/Gas</label>

											<div class="col-sm-2 col-md-2">
												<input type="text"  name="precio_gas" class="form-control"  id="" placeholder="solo números">
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Sistema eléctrico</label>

											<div class="col-sm-2 col-md-2">
												<select class="form-control selectpicker show-tick" name="sist_electrico" id="">
													
		                                            <?php 
		                                            $electrcasa=$obj2->get_casa_sistema_electrico(); 
		                                            for($j=0;$j<sizeof($electrcasa);$j++){
		                                                ?>
		                                                <option value="<?php echo utf8_encode($electrcasa[$j]["SISTELECTRICO"]); ?>"><?php echo utf8_encode($electrcasa[$j]["SISTELECTRICO"]); ?></option>
		                                                <?php
		                                            }
		                                            ?>
												</select>
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Posee medidor</label>

											<div class="col-sm-2 col-md-2">
												<select class="form-control selectpicker show-tick" name="medidor_electrico" id="">
													
													<option value="SI">SI</option>
													<option value="NO">NO</option>
												</select>
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">bombillos ahorradores</label>

											<div class="col-sm-2 col-md-2">
												<select class="form-control selectpicker show-tick" name="bombillos_ahorradores" id="">
													
													<option value="SI">SI</option>
													<option value="NO">NO</option>
												</select>
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Cuantos necesita</label>

											<div class="col-sm-2 col-md-2">
												<input type="text"  name="cant_bombillos" class="form-control"  id="" placeholder="solo números">
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Recolección de basura</label>

											<div class="col-sm-2 col-md-2">
												<select class="form-control selectpicker show-tick" name="recoleccion_basura[]" multiple>
												
		                                            <?php 
		                                            $recolbasura=$obj2->get_casa_recoleccion_basura(); 
		                                            for($k=0;$k<sizeof($recolbasura);$k++){
		                                                ?>
		                                                <option value="<?php echo utf8_encode($recolbasura[$k]["RECOLBASURA"]); ?>"><?php echo utf8_encode($recolbasura[$k]["RECOLBASURA"]); ?></option>
		                                                <?php
		                                            }
		                                            ?>
												</select>
											</div>

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Telefonía</label>

											<div class="col-sm-2 col-md-2">
												<select class="form-control selectpicker show-tick" name="telefonia[]" multiple>
												
		                                            <?php 
		                                            $telefonia=$obj2->get_casa_telefonia(); 
		                                            for($l=0;$l<sizeof($telefonia);$l++){
		                                                ?>
		                                                <option value="<?php echo utf8_encode($telefonia[$l]["TELEFONIA"]); ?>"><?php echo utf8_encode($telefonia[$l]["TELEFONIA"]); ?></option>
		                                                <?php
		                                            }
		                                            ?>
												</select>
											</div>

										</div>

										<div class="form-group col-md-12">

											<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Transporte</label>

											<div class="col-sm-2 col-md-2">
												<select class="form-control selectpicker show-tick" name="transporte" id="">
													
		                                            <?php 
		                                            $transport=$obj2->get_casa_transporte(); 
		                                            for($m=0;$m<sizeof($transport);$m++){
		                                                ?>
		                                                <option value="<?php echo utf8_encode($transport[$m]["TRANSPORTE"]); ?>"><?php echo utf8_encode($transport[$m]["TRANSPORTE"]); ?></option>
		                                                <?php
		                                            }
		                                            ?>
												</select>
											</div>

											<label for="" class="col-sm-4 col-md-4 control-label" style="text-align:justify;">Mecanismo de información</label>

											<div class="col-sm-2 col-md-2">
												<select class="form-control selectpicker show-tick" name="mecan_informacion[]" multiple>
												
		                                            <?php 
		                                            $mecainfo=$obj2->get_casa_mecanismo_infor(); 
		                                            for($n=0;$n<sizeof($mecainfo);$n++){
		                                                ?>
		                                                <option value="<?php echo utf8_encode($mecainfo[$n]["MECANISMOINFO"]); ?>"><?php echo utf8_encode($mecainfo[$n]["MECANISMOINFO"]); ?></option>
		                                                <?php
		                                            }
		                                            ?>
												</select>
											</div>

										</div>

										<div class="form-group col-md-12">

										<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Servicios comunales</label>

											<div class="col-sm-2 col-md-2">
												<select class="form-control selectpicker show-tick" name="serv_comunales[]" multiple>
												
		                                            <?php 
		                                            $servcomun=$obj2->get_casa_servicios_comunales(); 
		                                            for($p=0;$p<sizeof($servcomun);$p++){
		                                                ?>
		                                                <option value="<?php echo utf8_encode($servcomun[$p]["SERVCOMUNALES"]); ?>"><?php echo utf8_encode($servcomun[$p]["SERVCOMUNALES"]); ?></option>
		                                                <?php
		                                            }
		                                            ?>
												</select>
											</div>
										</div>


						    	</div><!-- final del panel body -->
					    	</div>
					    	</div>