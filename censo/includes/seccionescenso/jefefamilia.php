<?php 
$nac=$obj2->get_nacionalidad();
?>
<div id="paneles-censo" class="panel panel-danger">
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
				<?php 
					require_once("../controlador/obtenidjefe.php");
					$obj = new jefesfamilia();
					$data=$obj->get_ultimo_id_jefe_familiar();
				?>
				<div class="col-sm-2 col-md-2">
					<input type="text" disabled class="form-control" value="<?php echo $data; ?>" name="">
					<input type="hidden" class="form-control" value="<?php echo $data; ?>" name="id_jefe">
				</div>
			</div>	   
			<div class="form-group col-md-12"><!-- 1er form-group -->
				<label for="" class="control-label col-sm-2 col-md-2" style="text-align:justify;">C.I. N°</label>
				<div class="col-sm-2 col-md-2">
					<div class="required-field-block">
						<input type="text" name="ci" autofocus class="form-control" maxlength="8" placeholder="Solo números" required onKeyPress="return SoloNumeros(event);">
					        <div class="required-icon">
					            <div class="text">*</div>
		            </div>
				</div>
			</div>
			<label for="" class="control-label col-sm-2 col-md-2" style="text-align:justify;">Nombres</label>
			<div class="col-sm-2 col-md-2">
				<div class="required-field-block">
					<input type="text" name="name" class="form-control" maxlength="30" placeholder="Nombre Completo" required onkeypress="return soloLetras(event);" onKeyUp="this.value = this.value.toUpperCase();">
						<div class="required-icon">
				            <div class="text">*</div>
				        </div>
				</div>
			</div>
			<label for="" class="control-label col-sm-2 col-md-2" style="text-align:justify;">Apellidos</label>
				<div class="col-sm-2 col-md-2">
					<div class="required-field-block">
						<input type="text" name="ape" class="form-control" placeholder="Apellido Completo" maxlength="30" required onkeypress="return soloLetras(event);" onKeyUp="this.value = this.value.toUpperCase();">
							<div class="required-icon">
					            <div class="text">*</div>
					        </div>
					</div>
				</div>
			</div><!-- fin del primer form-group -->

						<div class="form-group col-md-12"><!-- inicio del 2do form-group -->

						<label for="" class="control-label col-sm-2 col-md-2" style="text-align:justify;">Fecha de nacimiento</label>

						<div class="col-sm-2 col-md-2">
							<div class="required-field-block">
								<input type="date" name="fnac" class="form-control">
					        </div>
						</div>

						<label for="" class="control-label col-sm-2 col-md-2" style="text-align:justify;">Edad</label>

						<div class="col-sm-2 col-md-2">
							<div class="required-field-block">
								<input type="text" name="edad" class="form-control" maxlength="3" placeholder="Solo números" required onKeyPress="return SoloNumeros(event);">
								<div class="required-icon">
					                <div class="text">*</div>
					            </div>
					        </div>
						</div>
					
						<label for="" class="control-label col-sm-2 col-md-2" style="text-align:justify;">Nacionalidad</label>

						<div class="col-sm-2 col-md-2">
							<div class="required-field-block">
								<select class="form-control selectpicker show-tick" name="nac">
									<option value="0">seleccione</option>
									<?php  
									for($n=0;$n<sizeof($nac);$n++){
										?>
										<option value="<?php echo $nac[$n]["nacionalidad"]; ?>"><?php echo $nac[$n]["nacionalidad"]; ?></option>
										<?php
									}
									?>
								</select>
								<div class="required-icon">
					                <div class="text">*</div>
					            </div>
					        </div>
						</div>

						</div><!-- fin del 2do form-group -->
						<br/>

						<div class="form-group col-md-12">

						

						<label for="" class="control-label col-sm-2 col-md-2" style="text-align:justify;">Estado Civil</label>

						<div class="col-sm-2 col-md-2">
							<div class="required-field-block">
								<select class="form-control"  name="edocivil" >
									<option value="0">seleccione</option>
									<?php 
									$edoc=$obj2->get_estado_civil(); 
									for($h=0;$h<sizeof($edoc);$h++){
										?>
										<option value="<?php echo $edoc[$h]["EDOCIVIL"]; ?>"><?php echo $edoc[$h]["EDOCIVIL"]; ?></option>
										<?php
									}
									?>
								</select>
								<div class="required-icon">
					                <div class="text">*</div>
					            </div>
					        </div>
						</div>

						<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">CNE</label>
										<div class="col-sm-2 col-md-2">
											<div class="required-field-block">
												<select class="form-control selectpicker show-tick" name="cne_f" >
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


						<!-- datos de contacto -->

						<div class="form-group col-md-12"><!-- primer form-group -->
							<h3>Datos de contacto</h3>
						</div><!-- fin del primer form-group -->

						<div class="form-group col-md-12"><!-- segundo form-group -->

						<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Telefono CEL</label>

						<div class="col-sm-2 col-md-2">
						<input type="text" class="form-control" name="telfcel" maxlength="11" placeholder="Indique el número con su codigo de area" required onKeyPress="return SoloNumeros(event);" >
						</div>

						<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Telefono HAB</label>

						<div class="col-sm-2 col-md-2">
						<input type="text" class="form-control" name="telfhab" maxlength="11" placeholder="Indique el número con su codigo de area" required onKeyPress="return SoloNumeros(event);">
						</div>

						<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Telefono OFIC</label>

						<div class="col-sm-2 col-md-2">
						<input type="text" class="form-control" name="telfofic" maxlength="11" placeholder="Indique el número con su codigo de area" required onKeyPress="return SoloNumeros(event);">
						</div>

						</div><!-- fin del 2do form-group -->

						<div class="form-group col-md-12">
							<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Email</label>

						<div class="col-sm-2 col-md-2">
							<input type="email" class="form-control" name="email" maxlength="45" placeholder="correo@example.com" >
						</div>

						</div>

						<!-- datos relacion y sexo -->
						<div class="form-group col-md-12">
							<h3>Datos de relacion</h3>
						</div>
						
						<div class="form-group col-md-12"><!-- primer form-group -->
							<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Sexo</label>

						<div class="col-sm-2 col-md-2">
							<div class="required-field-block">
								<select class="form-control selectpicker show-tick" name="sexo">
									<option value="0">seleccione</option>
									<option value="Masculino">Masculino</option>
									<option value="Femenino">Femenino</option>
								</select>
								<div class="required-icon">
					                <div class="text">*</div>
					            </div>
					        </div>
						</div>

						<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Embarazo Temprano</label>

						<div class="col-sm-2 col-md-2">
							<div class="required-field-block">
								<select class="form-control selectpicker show-tick" name="embarazo">
									<option value="0">seleccione</option>
									<option value="SI">SI</option>
									<option value="NO">NO</option>
								</select>
								<div class="required-icon">
					                <div class="text">*</div>
					            </div>
					        </div>
						</div>

						</div><!-- fin del 1er form-group -->

						<!-- datos de salud-->
						<div class="form-group col-md-12">
							<h3>Datos de salud</h3>
						</div>
						
						<div class="form-group col-md-12"><!-- primer form-group -->
							<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Incapacitado</label>

						<div class="col-sm-2 col-md-2">
							<div class="required-field-block">
								<select class="form-control selectpicker show-tick" name="disc" >
									<option value="0">seleccione</option>
									<option value="SI">SI</option>
									<option value="NO">NO</option>
								</select>
								<div class="required-icon">
					                <div class="text">*</div>
					            </div>
					        </div>
						</div>

						<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Tipo Discapacidad</label>

						<div class="col-sm-2 col-md-2">
							<input type="text" class="form-control"name="tipodisc" maxlength="30" placeholder="De ser si indique" >
						</div>

						<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Pensionado</label>

						<div class="col-sm-2 col-md-2">
							<div class="required-field-block">
								<select class="form-control selectpicker show-tick" name="pens" >
									<option value="0">seleccione</option>
									<option value="SI">SI</option>
									<option value="NO">NO</option>
								</select>
								<div class="required-icon">
					                <div class="text">*</div>
					            </div>
					        </div>
						</div>

						</div><!-- fin del 1er form-group -->
						<br/>
						<div class="form-group col-md-12">
							<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Institucion del pensionado</label>

						<div class="col-sm-3 col-md-3">
							<input type="text" class="form-control" maxlength="30" name="inst" placeholder="De poseer una indique" >
						</div>
						</div>

						<!-- datos financieros -->
						<div class="form-group col-md-12">
							<h3>Datos financieros</h3>
						</div>

						<div class="form-group col-md-12">
							<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">¿Trabaja?</label>

						<div class="col-sm-2 col-md-2">
							<div class="required-field-block">
								<select class="form-control selectpicker show-tick" name="trabaja" >
									<option value="0">seleccione</option>
									<option value="SI">SI</option>
									<option value="NO">NO</option>
									<option value="por cuenta propia">Por cuenta propia</option>
								</select>
								<div class="required-icon">
					                <div class="text">*</div>
					            </div>
					        </div>
						</div>

						</div>

						<div class="form-group col-md-12"><!-- 1er form-group -->
							<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Tipo ingreso</label>

						<div class="col-sm-4 col-md-4">
							<div class="required-field-block">
								<select class="form-control selectpicker show-tick" name="tipoing" >
									<option value="0">seleccione</option>
									<?php 
									$tipoing=$obj2->get_tipo_ingreso(); 
									for($l=0;$l<sizeof($tipoing);$l++){
										?>
										<option value="<?php echo $tipoing[$l]["TIPO_INGRESO"]; ?>"><?php echo $tipoing[$l]["TIPO_INGRESO"]; ?></option>
										<?php
									}
									?>
								</select>
								<div class="required-icon">
					                <div class="text">*</div>
					            </div>
					        </div>
					    </div>

					    <label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Ingreso Mensual</label>

						<div class="col-sm-2 col-md-2">
							<div class="required-field-block">
								<input type="text" class="form-control" maxlength="10" name="ingmens" placeholder="Cantidad en Bsf" required onKeyPress="return SoloNumeros(event);">
								<div class="required-icon">
					                <div class="text">*</div>
					            </div>
					        </div>
						</div>

						</div><!-- fin del 1er form-group -->
						<br/>
						

						<!-- datos academicos -->
						<div class="form-group col-md-12">
							<h3>Datos academicos</h3>
						</div>

						<div class="form-group col-md-12"><!-- 1er form-group -->

						<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Nivel de instrucción</label>

						<div class="col-sm-2 col-md-2">
							<div class="required-field-block">
								<select class="form-control selectpicker show-tick" name="nivinstruc">
									<option value="0">seleccione</option>
									<?php 
									$nivlinstruc=$obj2->get_nivel_instruccion(); 
									for($k=0;$k<sizeof($nivlinstruc);$k++){
										?>
										<option value="<?php echo utf8_encode($nivlinstruc[$k]["NIVL_INSTRUCCION"]); ?>"><?php echo utf8_encode($nivlinstruc[$k]["NIVL_INSTRUCCION"]); ?></option>
										<?php
									}
									?>
								</select>
								<div class="required-icon">
					                <div class="text">*</div>
					            </div>
					        </div>
					    </div>

							<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Profesion</label>

						<div class="col-sm-2 col-md-2">
							<div class="required-field-block">
								<select class="form-control selectpicker show-tick" name="profesion" >
									<option value="0">seleccione</option>
									<?php 
									$prfnes=$obj2->get_profesiones(); 
									for($m=0;$m<sizeof($prfnes);$m++){
										?>
										<option value="<?php echo utf8_encode($prfnes[$m]["PROFESION"]); ?>"><?php echo utf8_encode($prfnes[$m]["PROFESION"]); ?></option>
										<?php
									}
									?>
								</select>
								<div class="required-icon">
					                <div class="text">*</div>
					            </div>
					        </div>
					    </div>

						</div><!-- fin del 1er form-group -->

						
				      </div>
				    </div>
				  </div>