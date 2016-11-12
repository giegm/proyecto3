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
			<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Persona con Enfermedades</label>
				<div class="col-sm-2 col-md-2">
					<b>Diabetes</b>
					<select class="form-control selectpicker show-tick" name="pers_enfermedades" id=""title="<?php 
						for($b=0;$b<count($data_selec);$b++){
						echo $data_selec[$b]["PERSONA_ENFERMEDAD"]. " ";
						}
						?>">
						<option value="Diabetes ">SI</option>
						<option value=" ">NO</option>
					</select>
				</div>
	        <label for="" class=".col-xs-6 .col-sm-3"></label>
				<div class="col-sm-2 col-md-2">
					<b>Sida</b>
					<select class="form-control selectpicker show-tick" name="pers_enfermedades1" id=""title="<?php 
						for($b=0;$b<count($data_selec);$b++){
						echo $data_selec[$b]["PERSONA_ENFERMEDAD1"]. " ";
						}
						?>">
						<option value="Sida ">SI</option>
						<option value=" ">NO</option>
					</select>
				</div>
			<label for="" class=".col-xs-6 .col-sm-3"></label>
				<div class="col-sm-2 col-md-2">
					<b>Cancer</b>
					<select class="form-control selectpicker show-tick" name="pers_enfermedades2" id=""title="<?php 
						for($b=0;$b<count($data_selec);$b++){
						echo $data_selec[$b]["PERSONA_ENFERMEDAD2"]. " ";
						}
						?>">
						<option value="Cancer ">SI</option>
						<option value=" ">NO</option>
					</select>
				</div>
			<label for="" class=".col-xs-6 .col-sm-3"></label>
				<div class="col-sm-2 col-md-2">
					<b>Hepatitis</b>
					<select class="form-control selectpicker show-tick" name="pers_enfermedades3" id=""title="<?php 
						for($b=0;$b<count($data_selec);$b++){
						echo $data_selec[$b]["PERSONA_ENFERMEDAD3"]. " ";
						}
						?>">
						<option value="Hepatitis ">SI</option>
						<option value=" ">NO</option>
					</select>
				</div>
		</div>
		<div class="form-group col-md-12">
			<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;"></label>
				<div class="col-sm-2 col-md-2">
					<b>Corazón</b>
					<select class="form-control selectpicker show-tick" name="pers_enfermedades4" id=""title="<?php 
						for($b=0;$b<count($data_selec);$b++){
						echo $data_selec[$b]["PERSONA_ENFERMEDAD4"]. " ";
						}
						?>">
						<option value="Corazón ">SI</option>
						<option value=" ">NO</option>
					</select>
				</div>
			<label for="" class=".col-xs-6 .col-sm-3"></label>
				<div class="col-sm-2 col-md-2">
					<b>Leucemia</b>
					<select class="form-control selectpicker show-tick" name="pers_enfermedades5" id=""title="<?php 
						for($b=0;$b<count($data_selec);$b++){
						echo $data_selec[$b]["PERSONA_ENFERMEDAD5"]. " ";
						}
						?>">
						<option value="Leucemia ">SI</option>
						<option value=" ">NO</option>
					</select>
				</div>
			<label for="" class=".col-xs-6 .col-sm-3"></label>
				<div class="col-sm-2 col-md-2">
					<b>Tuberculosis</b>
					<select class="form-control selectpicker show-tick" name="pers_enfermedades6" id=""title="<?php 
						for($b=0;$b<count($data_selec);$b++){
						echo $data_selec[$b]["PERSONA_ENFERMEDAD6"]. " ";
						}
						?>">
						<option value="Tuberculosis ">SI</option>
						<option value=" ">NO</option>
					</select>
				</div>
			<label for="" class=".col-xs-6 .col-sm-3"></label>
				<div class="col-sm-2 col-md-2">
					<b>Hipertensión</b>
					<select class="form-control selectpicker show-tick" name="pers_enfermedades7" id=""title="<?php 
						for($b=0;$b<count($data_selec);$b++){
						echo $data_selec[$b]["PERSONA_ENFERMEDAD7"]. " ";
						}
						?>">
						<option value="Hipertensión ">SI</option>
						<option value=" ">NO</option>
					</select>
				</div>
		</div>
		<div class="form-group col-md-12">
			<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;"></label>
				<div class="col-sm-2 col-md-2">
					<b>Asma</b>
					<select class="form-control selectpicker show-tick" name="pers_enfermedades8" id=""title="<?php 
						for($b=0;$b<count($data_selec);$b++){
						echo $data_selec[$b]["PERSONA_ENFERMEDAD8"]. " ";
						}
						?>">
						<option value="Asma ">SI</option>
						<option value=" ">NO</option>
					</select>
				</div>
			<label for="" class=".col-xs-6 .col-sm-3"></label>
				<div class="col-sm-2 col-md-2">
					<b>Otra</b>
					<select class="form-control selectpicker show-tick" name="pers_enfermedades9" id=""title="<?php 
						for($b=0;$b<count($data_selec);$b++){
						echo $data_selec[$b]["PERSONA_ENFERMEDAD9"]. " ";
						}
						?>">
						<option value="Otra ">SI</option>
						<option value=" ">NO</option>
					</select>
				</div>
		</div>
		<div class="form-group col-md-12">
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
					<input value="<?php echo $data_seis[0]["TIPO_AYUDA"]; ?>" type="text" name="tipo_ayuda_enfermo" id="" required onkeypress="return soloLetras(event);" maxlength="30" placeholder="especifiquela" class="form-control" >
				</div>
			</div>
		<div class="form-group col-md-12">
			<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;">Situación de Exclusión</label>
				<div class="col-sm-2 col-md-2">
					<b>Niños de la Calle</b>
						<select class="form-control selectpicker show-tick" name="pers_exclusion" id="" title="<?php for($s=0;$s<count($data_selec);$s++){ echo $data_selec[$s]["SITUACION_EXCLUSION"]. " "; }?>">
							<option value="0">seleccione</option>
							<option value="Niños de la Calle ">SI</option>
							<option value=" ">NO</option>
						</select>
				</div>
				<label for="" class=".col-xs-6 .col-sm-3"></label>
					<div class="col-sm-2 col-md-2">
						<b>Indigentes</b>
							<select class="form-control selectpicker show-tick" name="pers_exclusion1" id="" title="<?php for($s=0;$s<count($data_selec);$s++){ echo $data_selec[$s]["SITUACION_EXCLUSION1"]. " "; }?>">
								<option value="Indigentes ">SI</option>
								<option value=" ">NO</option>
							</select>
					</div>
				<label for="" class=".col-xs-6 .col-sm-3"></label>
					<div class="col-sm-2 col-md-2">
						<b>Enfermos Terminales</b>
						<select class="form-control selectpicker show-tick" name="pers_exclusion2" id="" title="<?php for($s=0;$s<count($data_selec);$s++){ echo $data_selec[$s]["SITUACION_EXCLUSION2"]. " "; }?>">
							<option value="Enfermos Terminales ">SI</option>
							<option value=" ">NO</option>
						</select>
					</div>
				<label for="" class=".col-xs-6 .col-sm-3"></label>
					<div class="col-sm-2 col-md-2">
						<b>Discapacitados</b>
						<select class="form-control selectpicker show-tick" name="pers_exclusion3" id="" title="<?php for($s=0;$s<count($data_selec);$s++){ echo $data_selec[$s]["SITUACION_EXCLUSION3"]. " "; }?>">
							<option value="Discapacitados ">SI</option>
								<option value=" ">NO</option>
							</select>
					</div>
			</div>
			<div class="form-group col-md-12">
				<label for="" class="col-sm-3 col-md-3 control-label" style="text-align:justify;"></label>
					<div class="col-sm-2 col-md-2">
						<b>Tercera Edad</b>
						<select class="form-control selectpicker show-tick" name="pers_exclusion4" id="" title="<?php for($s=0;$s<count($data_selec);$s++){ echo $data_selec[$s]["SITUACION_EXCLUSION4"]. " "; }?>">
							<option value="Tercera Edad ">SI</option>
							<option value=" ">NO</option>
						</select>
					</div>
				<label for="" class=".col-xs-6 .col-sm-3"></label>
					<div class="col-sm-2 col-md-2">
						<b>Otra</b>
						<select class="form-control selectpicker show-tick" name="pers_exclusion5" id="" title="<?php for($s=0;$s<count($data_selec);$s++){ echo $data_selec[$s]["SITUACION_EXCLUSION5"]. " "; }?>">
							<option value="Otra ">SI</option>
							<option value=" ">NO</option>
						</select>
					</div>
			</div>
			<div class="form-group col-md-12">
				<label for="" class="col-sm-3 col-md-3 control-label">Cuantos</label>
					<div class="col-sm-2 col-md-2">
						<input value="<?php echo $data_seis[0]["CANTIDAD_EXCLUSION"]; ?>" type="text" name="cant_exclusion" id="" maxlength="2" placeholder="solo números" class="form-control" required onKeyPress="return SoloNumeros(event);">
					</div>
			</div>
	   	</div><!-- final del panel body -->
	</div>
</div>