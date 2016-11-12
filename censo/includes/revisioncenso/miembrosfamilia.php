<?php
$total_fam=$obj->obten_total_familiares($_GET["id"]); 
$data_tres=$obj->obten_censo_por_id_tres($_GET["id"]);
$data_tres_fam=$obj->obten_censo_por_id_tres_familiares($_GET["id"]);
$data_fam_salud=$obj->obten_censo_por_id_tres_fam_salud($_GET["id"]);
$data_cuatro=$obj->obten_censo_por_id_cuatro2($_GET["id"]);
$data_fam_academ=$obj->obten_censo_por_id_fam_academ($_GET["id"]);

?>
<div class="panel panel-default">
					    	  <div class="panel-heading" role="tab" id="headingfamiliares">
					    			<h3 class="panel-title">
					    				<a href="#collapsefamiliares" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-control="collapsefamiliares">
					    					Miembros del grupo familiar
					    				<i class="fa fa-caret-down" style="float:right"></i><span style="float:right;">&nbsp;&nbsp;</span><i class="fa fa-caret-up" style="float:right"></i></a>
					    			</h3>
					    	  </div><!-- final del primer heading -->
								
						    	<div id="collapsefamiliares" class="panel-collapse collapse" role="tabpanel1" aria-labelledby="headingfamiliares">
							    	<?php
							    	for($i=0;$i<count($total_fam);$i++){
							    	?>
							    	<div class="panel-body">

							    		<div class="col-md-12">
							    			
							    			<div class="form-group">
							    				<div class="col-md-4">
							    					<h4>Familiar # <?php echo $i+1;?></h4>
							    				</div>
							    			</div>

							    			<div class="form-group col-md-12">
							    			<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Nombre y apellido</label>

										<div class="col-sm-2 col-md-2">

											<input value="<?php echo $data_tres[$i]["NOMBRES_F"] ?>" type="text" name="namepaef[]" class="form-control"  placeholder="" required onkeypress="return soloLetras(event);">
										</div>

										
										
										<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">N° de cedula</label>
										
										<div class="col-sm-2 col-md-2">
											<input value="<?php echo $data_tres[$i]["CEDULA_F"]; ?>" type="text" name="cedf[]" class="form-control"  placeholder="V/E-00000000" required onKeyPress="return SoloNumeros(event);">
										</div>

										<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Sexo</label>
                                        
                                        <div class="col-sm-2 col-md-2">
                                        <?php 
                                        if($data_tres[$i]["SEXO_F"]=="Masculino"){
                                        ?>
                                            <select name="sexof[]" class="form-control">
                                                <option value="<?php echo $data_tres[$i]["SEXO_F"]; ?>"><?php echo $data_tres[$i]["SEXO_F"]; ?></option>
                                                <option value="Femenino">Femenino</option>
                                            </select>
                                        </div>
                                        <?php
                                        } 
                                        if($data_tres[$i]["SEXO_F"]=="Femenino"){
                                        ?>
                                            <select name="sexof[]" class="form-control">
                                                <option value="<?php echo $data_tres[$i]["SEXO_F"]; ?>"><?php echo $data_tres[$i]["SEXO_F"]; ?></option>
                                                <option value="Masculino">Masculino</option>
                                            </select>
                                        </div>
                                        <?php
                                        }
                                        ?>

							    		</div><!-- final del form-group -->

										<div class="form-group col-md-12">
							    			<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Fecha de Nac.</label>

										<div class="col-sm-2 col-md-3">
											<input value="<?php echo $data_tres[$i]["FECHANAC_F"]; ?>" type="date" name="fchanacf[]" class="form-control"  placeholder="">
										</div>

										<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:center;">Edad</label>
										
										<div class="col-sm-2 col-md-1">
											<input value="<?php echo $data_tres[$i]["EDAD_F"]; ?>" type="text" name="edadf[]" class="form-control"  placeholder="" required onKeyPress="return SoloNumeros(event);">
										</div>
										
										<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Discapacidad/tipo</label>
										
										<div class="col-sm-2 col-md-2">
											<input value="<?php echo $data_fam_salud[$i]["DISCAPACIDAD_F"]; ?>" type="text" name="discpf[]" class="form-control"  placeholder="">
										</div>

							    		</div><!-- final del form-group -->

							    		<div class="form-group col-md-12">
							    			<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Embarazo</label>

										<div class="col-sm-2 col-md-2">
										<?php
										if($data_fam_salud[$i]["EMBARAZO_F"]=="SI"){
											?>
											<select class="form-control selectpicker show-tick" name="embrzf[]" id="">
												<option value="<?php echo $data_fam_salud[$i]["EMBARAZO_F"];?>"><?php echo $data_fam_salud[$i]["EMBARAZO_F"];?></option>
												<option value="NO">NO</option>
											</select> 
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_fam_salud[$i]["EMBARAZO_F"]=="NO"){
											?>
											<select class="form-control selectpicker show-tick" name="embrzf[]" id="">
												<option value="<?php echo $data_fam_salud[$i]["EMBARAZO_F"];?>"><?php echo $data_fam_salud[$i]["EMBARAZO_F"];?></option>
												<option value="SI">SI</option>
											</select> 
											<?php
											}//fin del 2do if
										?>
										</div>

										<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:center;">Parentesco</label>
										
										<div class="col-sm-2 col-md-2">
										<?php
										if($data_tres_fam[$i]["PARENTESCO_F"]=="Mamá"){
											?>
											<select class="form-control selectpicker show-tick" name="parntscf[]" id="">
												<option value="<?php echo $data_tres_fam[$i]["PARENTESCO_F"];?>"><?php echo $data_tres_fam[$i]["PARENTESCO_F"];?></option>
												<option value="Papá">Papá</option>
												<option value="Esposo(a)">Esposo(a)</option>
												<option value="Hijo(a)">Hijo(a)</option>
												<option value="Sobrino(a)">Sobrino(a)</option>
												<option value="Hermano(a)">Hermano(a)</option>
												<option value="Tio(a)">Tio(a)</option>
												<option value="Abuelo(a)">Abuelo(a)</option>
												<option value="Nieto(a)">Nieto(a)</option>
												<option value="Otro">Otro</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_tres_fam[$i]["PARENTESCO_F"]=="Papá"){
											?>
											<select class="form-control selectpicker show-tick" name="parntscf[]" id="">
												<option value="<?php echo $data_tres_fam[$i]["PARENTESCO_F"];?>"><?php echo $data_tres_fam[$i]["PARENTESCO_F"];?></option>
												<option value="Mamá">Mamá</option>
												<option value="Esposo(a)">Esposo(a)</option>
												<option value="Hijo(a)">Hijo(a)</option>
												<option value="Sobrino(a)">Sobrino(a)</option>
												<option value="Hermano(a)">Hermano(a)</option>
												<option value="Tio(a)">Tio(a)</option>
												<option value="Abuelo(a)">Abuelo(a)</option>
												<option value="Nieto(a)">Nieto(a)</option>
												<option value="Otro(a)">Otro(a)</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_tres_fam[$i]["PARENTESCO_F"]=="Esposo(a)"){
											?>
											<select class="form-control selectpicker show-tick" name="parntscf[]" id="">
												<option value="<?php echo $data_tres_fam[$i]["PARENTESCO_F"];?>"><?php echo $data_tres_fam[$i]["PARENTESCO_F"];?></option>
												<option value="Mamá">Mamá</option>
												<option value="Papá">Papá</option>
												<option value="Hijo(a)">Hijo(a)</option>
												<option value="Sobrino(a)">Sobrino(a)</option>
												<option value="Hermano(a)">Hermano(a)</option>
												<option value="Tio(a)">Tio(a)</option>
												<option value="Abuelo(a)">Abuelo(a)</option>
												<option value="Nieto(a)">Nieto(a)</option>
												<option value="Otro(a)">Otro(a)</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_tres_fam[$i]["PARENTESCO_F"]=="Hijo(a)"){
											?>
											<select class="form-control selectpicker show-tick" name="parntscf[]" id="">
												<option value="<?php echo $data_tres_fam[$i]["PARENTESCO_F"];?>"><?php echo $data_tres_fam[$i]["PARENTESCO_F"];?></option>
												<option value="Mamá">Mamá</option>
												<option value="Papá">Papá</option>
												<option value="Esposo(a)">Esposo(a)</option>
												<option value="Sobrino(a)">Sobrino(a)</option>
												<option value="Hermano(a)">Hermano(a)</option>
												<option value="Tio(a)">Tio(a)</option>
												<option value="Abuelo(a)">Abuelo(a)</option>
												<option value="Nieto(a)">Nieto(a)</option>
												<option value="Otro(a)">Otro(a)</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_tres_fam[$i]["PARENTESCO_F"]=="Sobrino(a)"){
											?>
											<select class="form-control selectpicker show-tick" name="parntscf[]" id="">
												<option value="<?php echo $data_tres_fam[$i]["PARENTESCO_F"];?>"><?php echo $data_tres_fam[$i]["PARENTESCO_F"];?></option>
												<option value="Mamá">Mamá</option>
												<option value="Papá">Papá</option>
												<option value="Esposo(a)">Esposo(a)</option>
												<option value="Hijo(a)">Hijo(a)</option>
												<option value="Hermano(a)">Hermano(a)</option>
												<option value="Tio(a)">Tio(a)</option>
												<option value="Abuelo(a)">Abuelo(a)</option>
												<option value="Nieto(a)">Nieto(a)</option>
												<option value="Otro(a)">Otro(a)</option>
											</select>
											<?php
											}//fin del 2do if
										?>	
										<?php
										if($data_tres_fam[$i]["PARENTESCO_F"]=="Hermano(a)"){
											?>
											<select class="form-control selectpicker show-tick" name="parntscf[]" id="">
												<option value="<?php echo $data_tres_fam[$i]["PARENTESCO_F"];?>"><?php echo $data_tres_fam[$i]["PARENTESCO_F"];?></option>
												<option value="Mamá">Mamá</option>
												<option value="Papá">Papá</option>
												<option value="Esposo(a)">Esposo(a)</option>
												<option value="Hijo(a)">Hijo(a)</option>
												<option value="Sobrino(a)">Sobrino(a)</option>
												<option value="Tio(a)">Tio(a)</option>
												<option value="Abuelo(a)">Abuelo(a)</option>
												<option value="Nieto(a)">Nieto(a)</option>
												<option value="Otro(a)">Otro(a)</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_tres_fam[$i]["PARENTESCO_F"]=="Tio(a)"){
											?>
											<select class="form-control selectpicker show-tick" name="parntscf[]" id="">
												<option value="<?php echo $data_tres_fam[$i]["PARENTESCO_F"];?>"><?php echo $data_tres_fam[$i]["PARENTESCO_F"];?></option>
												<option value="Mamá">Mamá</option>
												<option value="Papá">Papá</option>
												<option value="Esposo(a)">Esposo(a)</option>
												<option value="Hijo(a)">Hijo(a)</option>
												<option value="Sobrino(a)">Sobrino(a)</option>
												<option value="Hermano(a)">Hermano(a)</option>
												<option value="Abuelo(a)">Abuelo(a)</option>
												<option value="Nieto(a)">Nieto(a)</option>
												<option value="Otro(a)">Otro(a)</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_tres_fam[$i]["PARENTESCO_F"]=="Abuelo(a)"){
											?>
											<select class="form-control selectpicker show-tick" name="parntscf[]" id="">
												<option value="<?php echo $data_tres_fam[$i]["PARENTESCO_F"];?>"><?php echo $data_tres_fam[$i]["PARENTESCO_F"];?></option>
												<option value="Mamá">Mamá</option>
												<option value="Papá">Papá</option>
												<option value="Esposo(a)">Esposo(a)</option>
												<option value="Hijo(a)">Hijo(a)</option>
												<option value="Sobrino(a)">Sobrino(a)</option>
												<option value="Hermano(a)">Hermano(a)</option>
												<option value="Tio(a)">Tio(a)</option>
												<option value="Nieto(a)">Nieto(a)</option>
												<option value="Otro(a)">Otro(a)</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_tres_fam[$i]["PARENTESCO_F"]=="Nieto(a)"){
											?>
											<select class="form-control selectpicker show-tick" name="parntscf[]" id="">
												<option value="<?php echo $data_tres_fam[$i]["PARENTESCO_F"];?>"><?php echo $data_tres_fam[$i]["PARENTESCO_F"];?></option>
												<option value="Mamá">Mamá</option>
												<option value="Papá">Papá</option>
												<option value="Esposo(a)">Esposo(a)</option>
												<option value="Hijo(a)">Hijo(a)</option>
												<option value="Sobrino(a)">Sobrino(a)</option>
												<option value="Hermano(a)">Hermano(a)</option>
												<option value="Tio(a)">Tio(a)</option>
												<option value="Abuelo(a)">Abuelo(a)</option>
												<option value="Otro(a)">Otro(a)</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_tres_fam[$i]["PARENTESCO_F"]=="Otro(a)"){
											?>
											<select class="form-control selectpicker show-tick" name="parntscf[]" id="">
												<option value="<?php echo $data_tres_fam[$i]["PARENTESCO_F"];?>"><?php echo $data_tres_fam[$i]["PARENTESCO_F"];?></option>
												<option value="Mamá">Mamá</option>
												<option value="Papá">Papá</option>
												<option value="Esposo(a)">Esposo(a)</option>
												<option value="Hijo(a)">Hijo(a)</option>
												<option value="Sobrino(a)">Sobrino(a)</option>
												<option value="Hermano(a)">Hermano(a)</option>
												<option value="Tio(a)">Tio(a)</option>
												<option value="Abuelo(a)">Abuelo(a)</option>
												<option value="Nieto(a)">Nieto(a)</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										</div>
										
										<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">G° de instruccion</label>
										
										<div class="col-sm-2 col-md-2">
										<?php
										if($data_fam_academ[$i]["GRADO_INSTRUCCION_F"]=="Sin instruccion"){
											?>
											<select class="form-control selectpicker show-tick" name="instrcf[]" >
											<option value="<?php echo $data_fam_academ[$i]["GRADO_INSTRUCCION_F"];?>"><?php echo $data_fam_academ[$i]["GRADO_INSTRUCCION_F"];?></option>
											<option value="Basica">Basica</option>
											<option value="Bachiller">Bachiller</option>
											<option value="Tecnico Medio">Tecnico Medio</option>
											<option value="Tecnico Superior">Tecnico Superior</option>
											<option value="Universitario">Universitario</option>
											<option value="Post Grado">Post Grado</option>
										</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_fam_academ[$i]["GRADO_INSTRUCCION_F"]=="Basica"){
											?>
											<select class="form-control selectpicker show-tick" name="instrcf[]" >
											<option value="<?php echo $data_fam_academ[$i]["GRADO_INSTRUCCION_F"];?>"><?php echo $data_fam_academ[$i]["GRADO_INSTRUCCION_F"];?></option>
											<option value="Sin instruccion">Sin instruccion</option>
											<option value="Bachiller">Bachiller</option>
											<option value="Tecnico Medio">Tecnico Medio</option>
											<option value="Tecnico Superior">Tecnico Superior</option>
											<option value="Universitario">Universitario</option>
											<option value="Post Grado">Post Grado</option>
										</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_fam_academ[$i]["GRADO_INSTRUCCION_F"]=="Bachiller"){
											?>
											<select class="form-control selectpicker show-tick" name="instrcf[]" >
											<option value="<?php echo $data_fam_academ[$i]["GRADO_INSTRUCCION_F"];?>"><?php echo $data_fam_academ[$i]["GRADO_INSTRUCCION_F"];?></option>
											<option value="Sin instruccion">Sin instruccion</option>
											<option value="Basica">Basica</option>
											<option value="Tecnico Medio">Tecnico Medio</option>
											<option value="Tecnico Superior">Tecnico Superior</option>
											<option value="Universitario">Universitario</option>
											<option value="Post Grado">Post Grado</option>
										</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_fam_academ[$i]["GRADO_INSTRUCCION_F"]=="Tecnico Medio"){
											?>
											<select class="form-control selectpicker show-tick" name="instrcf[]" >
											<option value="<?php echo $data_fam_academ[$i]["GRADO_INSTRUCCION_F"];?>"><?php echo $data_fam_academ[$i]["GRADO_INSTRUCCION_F"];?></option>
											<option value="Sin instruccion">Sin instruccion</option>
											<option value="Basica">Basica</option>
											<option value="Bachiller">Bachiller</option>
											<option value="Tecnico Superior">Tecnico Superior</option>
											<option value="Universitario">Universitario</option>
											<option value="Post Grado">Post Grado</option>
										</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_fam_academ[$i]["GRADO_INSTRUCCION_F"]=="Tecnico Superior"){
											?>
											<select class="form-control selectpicker show-tick" name="instrcf[]" >
											<option value="<?php echo $data_fam_academ[$i]["GRADO_INSTRUCCION_F"];?>"><?php echo $data_fam_academ[$i]["GRADO_INSTRUCCION_F"];?></option>
											<option value="Sin instruccion">Sin instruccion</option>
											<option value="Basica">Basica</option>
											<option value="Bachiller">Bachiller</option>
											<option value="Tecnico Medio">Tecnico Medio</option>
											<option value="Universitario">Universitario</option>
											<option value="Post Grado">Post Grado</option>
										</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_fam_academ[$i]["GRADO_INSTRUCCION_F"]=="Universitario"){
											?>
											<select class="form-control selectpicker show-tick" name="instrcf[]" >
											<option value="<?php echo $data_fam_academ[$i]["GRADO_INSTRUCCION_F"];?>"><?php echo $data_fam_academ[$i]["GRADO_INSTRUCCION_F"];?></option>
											<option value="Sin instruccion">Sin instruccion</option>
											<option value="Basica">Basica</option>
											<option value="Bachiller">Bachiller</option>
											<option value="Tecnico Medio">Tecnico Medio</option>
											<option value="Tecnico Superior">Tecnico Superior</option>
											<option value="Post Grado">Post Grado</option>
										</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_fam_academ[$i]["GRADO_INSTRUCCION_F"]=="Post Grado"){
											?>
											<select class="form-control selectpicker show-tick" name="instrcf[]" >
											<option value="<?php echo $data_fam_academ[$i]["GRADO_INSTRUCCION_F"];?>"><?php echo $data_fam_academ[$i]["GRADO_INSTRUCCION_F"];?></option>
											<option value="Sin instruccion">Sin instruccion</option>
											<option value="Basica">Basica</option>
											<option value="Bachiller">Bachiller</option>
											<option value="Tecnico Medio">Tecnico Medio</option>
											<option value="Tecnico Superior">Tecnico Superior</option>
											<option value="Universitario">Universitario</option>
										</select>
											<?php
											}//fin del 2do if
										?>
										</div>

							    		</div><!-- final del form-group -->

							    		<div class="form-group col-md-12">
							    			<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">CNE</label>

										<div class="col-sm-2 col-md-2">
										<?php
										if($data_tres_fam[$i]["CNE_F"]=="SI"){
											?>
											<select class="form-control selectpicker show-tick" name="cnef[]" id="">
												<option value="<?php echo $data_tres_fam[$i]["CNE_F"];?>"><?php echo $data_tres_fam[$i]["CNE_F"];?></option>
												<option value="NO">NO</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										<?php
										if($data_tres_fam[$i]["CNE_F"]=="NO"){
											?>
											<select class="form-control selectpicker show-tick" name="cnef[]" id="">
												<option value="<?php echo $data_tres_fam[$i]["CNE_F"];?>"><?php echo $data_tres_fam[$i]["CNE_F"];?></option>
												<option value="SI">SI</option>
											</select>
											<?php
											}//fin del 2do if
										?>
										</div>

										<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:center;">Profesión</label>
										
										<div class="col-sm-2 col-md-2">
											<?php
											if($data_fam_academ[$i]["PROFESION_F"]=="Estudiante"){
												?>
												<select class="form-control selectpicker show-tick" name="profesf[]" id="">
												<option value="<?php echo $data_fam_academ[$i]["PROFESION_F"];?>"><?php echo $data_fam_academ[$i]["PROFESION_F"];?></option>
												<option value="Trabajador">Trabajador</option>
												<option value="Ninguna">Ninguna</option>
											</select>
												<?php
												}//fin del 2do if
											?>
											<?php
											if($data_fam_academ[$i]["PROFESION_F"]=="Trabajador"){
												?>
												<select class="form-control selectpicker show-tick" name="profesf[]" id="">
												<option value="<?php echo $data_fam_academ[$i]["PROFESION_F"];?>"><?php echo $data_fam_academ[$i]["PROFESION_F"];?></option>
												<option value="Estudiante">Estudiante</option>
												<option value="Ninguna">Ninguna</option>
											</select>
												<?php
												}//fin del 2do if
											?>
											<?php
											if($data_fam_academ[$i]["PROFESION_F"]==">Ninguna"){
												?>
												<select class="form-control selectpicker show-tick" name="profesf[]" id="">
												<option value="<?php echo $data_fam_academ[$i]["PROFESION_F"];?>"><?php echo $data_fam_academ[$i]["PROFESION_F"];?></option>
												<option value="Estudiante">Estudiante</option>
												<option value="Trabajador">Trabajador</option>
											</select>
												<?php
												}//fin del 2do if
											?>
											
										</div>
										
										<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Pensionado</label>
										
										<div class="col-sm-2 col-md-2">
										<?php
											if($data_fam_salud[$i]["PENSIONADO_F"]=="SI"){
												?>
												<select class="form-control selectpicker show-tick" name="pensf[]" id="">
												<option value="<?php echo $data_fam_salud[$i]["PENSIONADO_F"];?>"><?php echo $data_fam_salud[$i]["PENSIONADO_F"];?></option>
												<option value="NO">NO</option>
											</select>
												<?php
												}//fin del 2do if
										?>
										<?php
											if($data_fam_salud[$i]["PENSIONADO_F"]=="NO"){
												?>
												<select class="form-control selectpicker show-tick" name="pensf[]" id="">
												<option value="<?php echo $data_fam_salud[$i]["PENSIONADO_F"];?>"><?php echo $data_fam_salud[$i]["PENSIONADO_F"];?></option>
												<option value="SI">SI</option>
											</select>
												<?php
												}//fin del 2do if
										?>
										</div>

							    		</div><!-- final del form-group -->

							    		<div class="form-group col-md-12">
							    			<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Ingreso mensual</label>
										
										<div class="col-sm-2 col-md-2">
											<input value="<?php echo $data_cuatro[$i]["INGMENSUAL_F"]; ?>" type="text" name="ingmnsf[]" class="form-control"  placeholder="Cantidad en Bsf" required onKeyPress="return SoloNumeros(event);">
										</div>

							    		</div><!-- final del form-group -->
							    		</div>

							    	</div>
							    	<?php
							    	}
							    	?>
						    	</div>
					    	</div>