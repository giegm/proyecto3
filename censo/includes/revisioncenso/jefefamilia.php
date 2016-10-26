<?php 	
$data=$obj->obten_censo_por_id($_GET["id"]);
?>
<div class="panel panel-danger">
				    <div class="panel-heading" role="tab" id="headingprincipal">
				      <h4 class="panel-title">
				        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseprincipal" aria-expanded="true" aria-controls="collapseprincipal">
				          Datos personales del jefe del grupo familiar
				        <i class="fa fa-caret-down" style="float:right"></i><span style="float:right;">&nbsp;&nbsp;</span><i class="fa fa-caret-up" style="float:right"></i></a>
				      </h4>
				    </div>
				    <div id="collapseprincipal" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingprincipal">
				     
				      <div class="panel-body">

						<div class="form-group col-md-12">
				      		<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">N° de registro</label>

						<div class="col-sm-2 col-md-2">
							<input type="text" disabled class="form-control" value="<?php echo $_GET["id"]; ?>" name="">
							<input type="hidden" class="form-control" value="<?php echo $_GET["id"]; ?>" name="id_jefe">
						</div>
				      	</div>

						<div class="form-group col-md-12"><!-- 1er form-group -->

						<label for="" class="control-label col-sm-2 col-md-2" style="text-align:justify;">C.I. N°</label>

						<div class="col-sm-2 col-md-2">
							<input value="<?php echo $data[0]["CI"] ?>" type="text" name="ci" class="form-control" placeholder="solo numeros" required onKeyPress="return SoloNumeros(event);">
							<br/>
						</div>

						<label for="" class="control-label col-sm-2 col-md-2" style="text-align:justify;">Nombres</label>
						
						<div class="col-sm-2 col-md-2">
							<input value="<?php echo $data[0]["NOMBRE"] ?>" type="text" name="name" class="form-control" required onkeypress="return soloLetras(event);">
						</div>

						<label for="" class="control-label col-sm-2 col-md-2" style="text-align:justify;">Apellidos</label>

						<div class="col-sm-2 col-md-2">
							<input value="<?php echo $data[0]["APELLIDO"] ?>" type="text" name="ape" class="form-control" required onkeypress="return soloLetras(event);">
						</div>

						</div><!-- fin del primer form-group -->

						<div class="form-group col-md-12"><!-- inicio del 2do form-group -->

						<label for="" class="control-label col-sm-2 col-md-2" style="text-align:justify;">Fecha de nacimiento</label>

						<div class="col-sm-2 col-md-3">
							<input value="<?php echo $data[0]["F_NAC"] ?>" type="date" name="fnac" class="form-control" >
						</div>

						<label for="" class="control-label col-sm-2 col-md-2" style="text-align:justify;">Edad</label>

						<div class="col-sm-2 col-md-1">
							<input value="<?php echo $data[0]["EDAD"] ?>" type="number" name="edad" class="form-control" >
						</div>
					
						<label for="" class="control-label col-sm-2 col-md-2" style="text-align:justify;">Nacionalidad</label>

						<div class="col-sm-2 col-md-2">
						<?php
						if($data[0]["NACIONALIDAD"]=="Venezolano(a)"){
							?>
							<select class="form-control selectpicker show-tick" name="nac" >
								<option value="<?php echo $data[0]["NACIONALIDAD"]; ?>"><?php echo $data[0]["NACIONALIDAD"]; ?></option>
								<option value="Extranjero(a)">Extranjero(a)</option>
							</select>
							<?php
						}
						if($data[0]["NACIONALIDAD"]=="Extranjero(a)"){
							?>
							<select class="form-control selectpicker show-tick" name="nac" >
								<option value="<?php echo $data[0]["NACIONALIDAD"]; ?>"><?php echo $data[0]["NACIONALIDAD"]; ?></option>
								<option value="Venezolano(a)">Venezolano(a)</option>
							</select>
							<?php
						}
						?>
						</div>

						</div><!-- fin del 2do form-group -->
						<br/>

						<div class="form-group col-md-12">

						

						<label for="" class="control-label col-sm-2 col-md-2" style="text-align:justify;">Estado Civil</label>

						<div class="col-sm-2 col-md-2">
						<?php
						if($data[0]["EDOCIVIL"]=="Soltero(a)"){
							?>
							<select class="form-control" name="edocivil" value="">
							<option value="<?php echo $data[0]["EDOCIVIL"]; ?>"><?php echo $data[0]["EDOCIVIL"]; ?></option>
								<option value="Casado(a)">Casado(a)</option>
								<option value="Divorciado(a)">Divorciado(a)</option>
								<option value="Viudo(a)">Viudo(a)</option>
								<option value="Concubino(a)">Concubino(a)</option>
							</select>
							<?php
						}
						if($data[0]["EDOCIVIL"]=="Casado(a)"){
							?>
							<select class="form-control" name="edocivil" value="">
							<option value="<?php echo $data[0]["EDOCIVIL"]; ?>"><?php echo $data[0]["EDOCIVIL"]; ?></option>
								<option value="Soltero(a)">Soltero(a)</option>
								<option value="Divorciado(a)">Divorciado(a)</option>
								<option value="Viudo(a)">Viudo(a)</option>
								<option value="Concubino(a)">Concubino(a)</option>
							</select>
							<?php
						}
						if($data[0]["EDOCIVIL"]=="Divorciado(a)"){
							?>
							<select class="form-control" name="edocivil" value="">
							<option value="<?php echo $data[0]["EDOCIVIL"]; ?>"><?php echo $data[0]["EDOCIVIL"]; ?></option>
								<option value="Soltero(a)">Soltero(a)</option>
								<option value="Casado(a)">Casado(a)</option>
								<option value="Viudo(a)">Viudo(a)</option>
								<option value="Concubino(a)">Concubino(a)</option>
							</select>
							<?php
						}
						if($data[0]["EDOCIVIL"]=="Viudo(a)"){
							?>
							<select class="form-control" name="edocivil" value="">
							<option value="<?php echo $data[0]["EDOCIVIL"]; ?>"><?php echo $data[0]["EDOCIVIL"]; ?></option>
								<option value="Soltero(a)">Soltero(a)</option>
								<option value="Divorciado(a)">Divorciado(a)</option>
								<option value="Casado(a)">Casado(a)</option>
								<option value="Concubino(a)">Concubino(a)</option>
							</select>
							<?php
						}
						if($data[0]["EDOCIVIL"]=="Concubino(a)"){
							?>
							<select class="form-control" name="edocivil" value="">
							<option value="<?php echo $data[0]["EDOCIVIL"]; ?>"><?php echo $data[0]["EDOCIVIL"]; ?></option>
								<option value="Soltero(a)">Soltero(a)</option>
								<option value="Divorciado(a)">Divorciado(a)</option>
								<option value="Casado(a)">Casado(a)</option>
								<option value="Viudo(a)">Viudo(a)</option>
							</select>
							<?php
						}
						?>
						</div>


						<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">CNE</label>

										<div class="col-sm-2 col-md-2">
										<?php
										if($data[0]["CNE"]=="SI"){
											?>
											<select class="form-control selectpicker show-tick" name="cne_f" >
												<option value="<?php echo $data[0]["CNE"] ?>"><?php echo $data[0]["CNE"] ?></option>
												<option value="NO">NO</option>
											</select>
											<?php
										}
										if($data[0]["CNE"]=="NO"){
											?>
											<select class="form-control selectpicker show-tick" name="cne_f" >
												<option value="<?php echo $data[0]["CNE"] ?>"><?php echo $data[0]["CNE"] ?></option>
												<option value="SI">SI</option>
											</select>
											<?php
										}
										?>
										</div>

						</div>


						<!-- datos de contacto -->

						<div class="form-group col-md-12"><!-- primer form-group -->
							<h3>Datos de contacto</h3>
						</div><!-- fin del primer form-group -->

						<div class="form-group col-md-12"><!-- segundo form-group -->

						<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Telefono CEL</label>

						<div class="col-sm-2 col-md-2">
						<input value="<?php echo $data[0]["TLF_CEL"] ?>" type="text" class="form-control" name="telfcel" placeholder="Indique el número con su codigo de area" required onKeyPress="return SoloNumeros(event);">
						</div>

						<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Telefono HAB</label>

						<div class="col-sm-2 col-md-2">
						<input value="<?php echo $data[0]["TLF_HAB"] ?>" type="text" class="form-control" name="telfhab" placeholder="Indique el número con su codigo de area" required onKeyPress="return SoloNumeros(event);">
						</div>

						<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Telefono OFIC</label>

						<div class="col-sm-2 col-md-2">
						<input value="<?php echo $data[0]["TLF_OFI"] ?>" type="text" class="form-control" name="telfofic" placeholder="Indique el número con su codigo de area" required onKeyPress="return SoloNumeros(event);">
						</div>

						</div><!-- fin del 2do form-group -->

						<div class="form-group col-md-12">
							<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Email</label>

						<div class="col-sm-2 col-md-2">
							<input value="<?php echo $data[0]["EMAIL"] ?>" type="email" class="form-control" name="email" placeholder="@example.com" >
						</div>

						</div>

						<!-- datos relacion y sexo -->
						<div class="form-group col-md-12">
							<h3>Datos de relacion</h3>
						</div>
						
						<div class="form-group col-md-12"><!-- primer form-group -->
							<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Sexo</label>

						<div class="col-sm-2 col-md-2">
						<?php
							if($data[0]["SEXO"]=="Masculino"){
								?>
								<select class="form-control selectpicker show-tick" name="sexo">
								<option value="<?php echo $data[0]["SEXO"]; ?>"><?php echo $data[0]["SEXO"]; ?></option>
								<option value="Femenino">Femenino</option>
							</select>
								<?php
							}
							if($data[0]["SEXO"]=="Femenino"){
								?>
								<select class="form-control selectpicker show-tick" name="sexo">
								<option value="<?php echo $data[0]["SEXO"]; ?>"><?php echo $data[0]["SEXO"]; ?></option>
								<option value="Masculino">Masculino</option>
							</select>
								<?php
							}
							?>
						</div>

						<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Embarazo</label>

						<div class="col-sm-2 col-md-2">
						<?php
							if($data[0]["EMBARAZO"]=="SI"){
								?>
								<select class="form-control selectpicker show-tick" name="embarazo">
								<option value="<?php echo $data[0]["EMBARAZO"]; ?>"><?php echo $data[0]["EMBARAZO"]; ?></option>
								<option value="NO">NO</option>
							</select>
								<?php
							}
							if($data[0]["EMBARAZO"]=="NO"){
								?>
								<select class="form-control selectpicker show-tick" name="embarazo">
								<option value="<?php echo $data[0]["EMBARAZO"]; ?>"><?php echo $data[0]["EMBARAZO"]; ?></option>
								<option value="SI">SI</option>
							</select>
								<?php
							}
						?>
						</div>

						</div><!-- fin del 1er form-group -->

						<!-- datos de salud-->
						<div class="form-group col-md-12">
							<h3>Datos de salud</h3>
						</div>
						<?php 
						$data_dos=$obj->obten_censo_por_id_dos($_GET["id"]);
						?>
						<div class="form-group col-md-12"><!-- primer form-group -->
							<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Incapacitado</label>

						<div class="col-sm-2 col-md-2">
						<?php
							if($data_dos[0]["DISCAPACIDAD"]=="SI"){
								?>
								<select class="form-control selectpicker show-tick" name="disc" >
								<option value="<?php echo $data_dos[0]["DISCAPACIDAD"]; ?>"><?php echo $data_dos[0]["DISCAPACIDAD"] ?></option>
								<option value="NO">NO</option>
							</select>
								<?php
							}
							if($data_dos[0]["DISCAPACIDAD"]=="NO"){
								?>
								<select class="form-control selectpicker show-tick" name="disc" >
								<option value="<?php echo $data_dos[0]["DISCAPACIDAD"]; ?>"><?php echo $data_dos[0]["DISCAPACIDAD"] ?></option>
								<option value="SI">SI</option>
							</select>
								<?php
							}
						?>
						</div>

						<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Tipo Discapacidad</label>

						<div class="col-sm-2 col-md-2">
							<input value="<?php echo $data_dos[0]["TIPO_DISCAPACIDAD"] ?>" type="text" class="form-control"name="tipodisc" placeholder="de ser si indique" >
						</div>

						<label for="" class="col-sm-2 col-md-1 control-label" style="text-align:justify;">Pensionado</label>

						<div class="col-sm-2 col-md-2">
						<?php
							if($data_dos[0]["PENSIONADO"]=="SI"){
								?>
								<select class="form-control selectpicker show-tick" name="pens">
								<option value="<?php echo $data_dos[0]["PENSIONADO"]; ?>"><?php echo $data_dos[0]["PENSIONADO"]; ?></option>
								<option value="NO">NO</option>
							</select>
								<?php
							}
							if($data_dos[0]["PENSIONADO"]=="NO"){
								?>
								<select class="form-control selectpicker show-tick" name="pens">
								<option value="<?php echo $data_dos[0]["PENSIONADO"]; ?>"><?php echo $data_dos[0]["PENSIONADO"]; ?></option>
								<option value="SI">SI</option>
								
							</select>
								<?php
							}
						?>
						</div>

						</div><!-- fin del 1er form-group -->
						<br/>
						<div class="form-group col-md-12">
							<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Institucion</label>

						<div class="col-sm-2 col-md-2">
							<input value="<?php echo $data_dos[0]["INSTITUCION"] ?>" type="text" class="form-control" name="inst" placeholder="De poseer una indiquela" >
						</div>
						</div>

						<!-- datos financieros -->
						<div class="form-group col-md-12">
							<h3>Datos financieros</h3>
						</div>

						<div class="form-group col-md-12">
							<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">¿Trabaja?</label>

						<div class="col-sm-2 col-md-2">
						<?php
							if($data_dos[0]["TRABAJA"]=="SI"){
								?>
								<select class="form-control selectpicker show-tick" name="trabaja" >
								<option value="<?php echo $data_dos[0]["TRABAJA"]; ?>"><?php echo $data_dos[0]["TRABAJA"]; ?></option>
								<option value="NO">NO</option>
								<option value="por cuenta propia">Por cuenta propia</option>
							</select>
								<?php
							}
							if($data_dos[0]["TRABAJA"]=="NO"){
								?>
								<select class="form-control selectpicker show-tick" name="trabaja" >
								<option value="<?php echo $data_dos[0]["TRABAJA"]; ?>"><?php echo $data_dos[0]["TRABAJA"]; ?></option>
								<option value="SI">SI</option>
								<option value="por cuenta propia">Por cuenta propia</option>
							</select>
								<?php
							}
							if($data_dos[0]["TRABAJA"]=="por cuenta propia"){
								?>
								<select class="form-control selectpicker show-tick" name="trabaja" >
								<option value="<?php echo $data_dos[0]["TRABAJA"]; ?>"><?php echo $data_dos[0]["TRABAJA"]; ?></option>
								<option value="SI">SI</option>
								<option value="NO">NO</option>
							</select>
								<?php
							}
						?>
						</div>

						</div>

						<div class="form-group col-md-12"><!-- 1er form-group -->
							<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Tipo ingreso</label>

						<div class="col-sm-4 col-md-4">
						<?php
							if($data_dos[0]["TIPO_INGRESO"]=="Diario"){
								?>
								<select class="form-control selectpicker show-tick" name="tipoing" >
								<option value="<?php echo $data_dos[0]["TIPO_INGRESO"]; ?>"><?php echo $data_dos[0]["TIPO_INGRESO"]; ?></option>
								<option value="Semanal">Semanal</option>
								<option value="Quincenal">Quincenal</option>
								<option value="Mensual">Mensual</option>
								<option value="Por trabajo realizado">Por trabajo realizado</option>
							</select>
								<?php
							}
							if($data_dos[0]["TIPO_INGRESO"]=="Semanal"){
								?>
								<select class="form-control selectpicker show-tick" name="tipoing" >
								<option value="<?php echo $data_dos[0]["TIPO_INGRESO"]; ?>"><?php echo $data_dos[0]["TIPO_INGRESO"]; ?></option>
								<option value="Diario">Diario</option>
								<option value="Quincenal">Quincenal</option>
								<option value="Mensual">Mensual</option>
								<option value="Por trabajo realizado">Por trabajo realizado</option>
							</select>
								<?php
							}
							if($data_dos[0]["TIPO_INGRESO"]=="Quincenal"){
								?>
								<select class="form-control selectpicker show-tick" name="tipoing" >
								<option value="<?php echo $data_dos[0]["TIPO_INGRESO"]; ?>"><?php echo $data_dos[0]["TIPO_INGRESO"]; ?></option>
								<option value="Diario">Diario</option>
								<option value="Semanal">Semanal</option>
								<option value="Mensual">Mensual</option>
								<option value="Por trabajo realizado">Por trabajo realizado</option>
							</select>
								<?php
							}
							if($data_dos[0]["TIPO_INGRESO"]=="Mensual"){
								?>
								<select class="form-control selectpicker show-tick" name="tipoing" >
								<option value="<?php echo $data_dos[0]["TIPO_INGRESO"]; ?>"><?php echo $data_dos[0]["TIPO_INGRESO"]; ?></option>
								<option value="Diario">Diario</option>
								<option value="Semanal">Semanal</option>
								<option value="Quincenal">Quincenal</option>
								<option value="Por trabajo realizado">Por trabajo realizado</option>
							</select>
								<?php
							}
							if($data_dos[0]["TIPO_INGRESO"]=="Por trabajo realizado"){
								?>
								<select class="form-control selectpicker show-tick" name="tipoing" >
								<option value="<?php echo $data_dos[0]["TIPO_INGRESO"]; ?>"><?php echo $data_dos[0]["TIPO_INGRESO"]; ?></option>
								<option value="Diario">Diario</option>
								<option value="Semanal">Semanal</option>
								<option value="Quincenal">Quincenal</option>
								<option value="Mensual">Mensual</option>
							</select>
								<?php
							}
						?>
					    </div>

					    <label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Ingreso Mensual</label>

						<div class="col-sm-2 col-md-2">
							<input value="<?php echo $data_dos[0]["INGRESO_MENSUAL"] ?>" type="text" class="form-control" name="ingmens" placeholder="Cantidad en Bsf" required onKeyPress="return SoloNumeros(event);">
						</div>

						</div><!-- fin del 1er form-group -->
						<br/>
						

						<!-- datos academicos -->
						<div class="form-group col-md-12">
							<h3>Datos academicos</h3>
						</div>

						<div class="form-group col-md-12"><!-- 1er form-group -->

						<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Nivel de instrucción</label>

						<div class="col-sm-4 col-md-4">
						<?php
							if($data_dos[0]["NIV_INSTRUCCION"]=="Sin instruccion"){
								?>
								<select class="form-control selectpicker show-tick" name="nivinstruc" >
								<option value="<?php echo $data_dos[0]["NIV_INSTRUCCION"]; ?>"><?php echo $data_dos[0]["NIV_INSTRUCCION"]; ?></option>
								<option value="Basica">Basica</option>
								<option value="Bachiller">Bachiller</option>
								<option value="Tecnico Medio">Tecnico Medio</option>
								<option value="Tecnico Superior">Tecnico Superior</option>
								<option value="Universitario">Universitario</option>
								<option value="Post Grado">Post Grado</option>
							</select>
								<?php
							}
							if($data_dos[0]["NIV_INSTRUCCION"]=="Basica"){
								?>
								<select class="form-control selectpicker show-tick" name="nivinstruc" >
								<option value="<?php echo $data_dos[0]["NIV_INSTRUCCION"]; ?>"><?php echo $data_dos[0]["NIV_INSTRUCCION"]; ?></option>
								<option value="Sin instruccion">Sin instrucción</option>
								<option value="Bachiller">Bachiller</option>
								<option value="Tecnico Medio">Tecnico Medio</option>
								<option value="Tecnico Superior">Tecnico Superior</option>
								<option value="Universitario">Universitario</option>
								<option value="Post Grado">Post Grado</option>
							</select>
								<?php
							}
							if($data_dos[0]["NIV_INSTRUCCION"]=="Bachiller"){
								?>
								<select class="form-control selectpicker show-tick" name="nivinstruc" >
								<option value="<?php echo $data_dos[0]["NIV_INSTRUCCION"]; ?>"><?php echo $data_dos[0]["NIV_INSTRUCCION"]; ?></option>
								<option value="Sin instruccion">Sin instrucción</option>
								<option value="Basica">Básica</option>
								<option value="Tecnico Medio">Tecnico Medio</option>
								<option value="Tecnico Superior">Tecnico Superior</option>
								<option value="Universitario">Universitario</option>
								<option value="Post Grado">Post Grado</option>
							</select>
								<?php
							}
							if($data_dos[0]["NIV_INSTRUCCION"]=="Tecnico Medio"){
								?>
								<select class="form-control selectpicker show-tick" name="nivinstruc" >
								<option value="<?php echo $data_dos[0]["NIV_INSTRUCCION"]; ?>"><?php echo $data_dos[0]["NIV_INSTRUCCION"]; ?></option>
								<option value="Sin instruccion">Sin instrucción</option>
								<option value="Basica">Básica</option>
								<option value="Bachiller">Bachiller</option>
								<option value="Tecnico Superior">Tecnico Superior</option>
								<option value="Universitario">Universitario</option>
								<option value="Post Grado">Post Grado</option>
							</select>
								<?php
							}
							if($data_dos[0]["NIV_INSTRUCCION"]=="Tecnico Superior"){
								?>
								<select class="form-control selectpicker show-tick" name="nivinstruc" >
								<option value="<?php echo $data_dos[0]["NIV_INSTRUCCION"]; ?>"><?php echo $data_dos[0]["NIV_INSTRUCCION"]; ?></option>
								<option value="Sin instruccion">Sin instrucción</option>
								<option value="Basica">Básica</option>
								<option value="Bachiller">Bachiller</option>
								<option value="Tecnico Medio">Tecnico Medio</option>
								<option value="Universitario">Universitario</option>
								<option value="Post Grado">Post Grado</option>
							</select>
								<?php
							}
							if($data_dos[0]["NIV_INSTRUCCION"]=="Universitario"){
								?>
								<select class="form-control selectpicker show-tick" name="nivinstruc" >
								<option value="<?php echo $data_dos[0]["NIV_INSTRUCCION"]; ?>"><?php echo $data_dos[0]["NIV_INSTRUCCION"]; ?></option>
								<option value="Sin instruccion">Sin instrucción</option>
								<option value="Basica">Básica</option>
								<option value="Bachiller">Bachiller</option>
								<option value="Tecnico Medio">Tecnico Medio</option>
								<option value="Tecnico Superior">Tecnico Superior</option>
								<option value="Post Grado">Post Grado</option>
							</select>
								<?php
							}
							if($data_dos[0]["NIV_INSTRUCCION"]=="Post Grado"){
								?>
								<select class="form-control selectpicker show-tick" name="nivinstruc" >
								<option value="<?php echo $data_dos[0]["NIV_INSTRUCCION"]; ?>"><?php echo $data_dos[0]["NIV_INSTRUCCION"]; ?></option>
								<option value="Sin instruccion">Sin instrucción</option>
								<option value="Basica">Básica</option>
								<option value="Bachiller">Bachiller</option>
								<option value="Tecnico Medio">Tecnico Medio</option>
								<option value="Tecnico Superior">Tecnico Superior</option>
								<option value="Universitario">Universitario</option>
							</select>
								<?php
							}
						?>
					    </div>

							<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Profesion</label>

						<div class="col-sm-2 col-md-2">
						<?php 
						if($data_dos[0]["PROFESION"]=="Estudiante"){
								?>
								<select class="form-control selectpicker show-tick" name="profesion" >
								<option value="<?php echo $data_dos[0]["PROFESION"]; ?>"><?php echo $data_dos[0]["PROFESION"]; ?></option>
								<option value="Trabajador">Trabajador</option>
								<option value="Estudiante">Ninguna</option>
							</select>
							<?php
							}
							if($data_dos[0]["PROFESION"]=="Trabajador"){
								?>
								<select class="form-control selectpicker show-tick" name="profesion" >
								<option value="<?php echo $data_dos[0]["PROFESION"]; ?>"><?php echo $data_dos[0]["PROFESION"]; ?></option>
								<option value="Estudiante">Estudiante</option>
								<option value="Estudiante">Ninguna</option>
							</select>
								<?php
							}
							if($data_dos[0]["PROFESION"]=="Ninguna"){
								?>
								<select class="form-control selectpicker show-tick" name="profesion" >
								<option value="<?php echo $data_dos[0]["PROFESION"]; ?>"><?php echo $data_dos[0]["PROFESION"]; ?></option>
								<option value="Estudiante">Estudiante</option>
								<option value="Estudiante">Trabajador</option>
							</select>
								<?php
							}
							?>
					    </div>

						</div><!-- fin del 1er form-group -->

						
				      </div>
				    </div>
				  </div>