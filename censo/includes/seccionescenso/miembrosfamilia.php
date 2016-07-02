<div id="paneles-censo" class="panel panel-default">
					    	  <div class="panel-heading" role="tab" id="headingfamiliares">
					    			<h3 class="panel-title">
					    				<a href="#collapsefamiliares" data-toggle="collapse" data-parent="#accordionfamiliares" aria-expanded="true" aria-control="collapsefamiliares">
					    					Miembros familiares
					    				<i class="fa fa-caret-down" style="float:right"></i><span style="float:right;">&nbsp;&nbsp;</span><i class="fa fa-caret-up" style="float:right"></i></a>
					    			</h3>
					    	  </div><!-- final del primer heading -->

						    	<div id="collapsefamiliares" class="panel-collapse collapse on" role="tabpanelfamiliares" aria-labelledby="headingfamiliares">
							    	<div class="panel-body">

    
    <div id="alumnos" class="row">
<div id="lo-que-vamos-a-copiar">
    <div class="col-xs-12 col-md-12">
        <div class="well well-sm">

            <div class="panel panel-danger">
                  <div class="panel-heading">
                        <h3 class="panel-title">Familiar</h3>
                  </div>
                  <div class="panel-body">
                        <div class="form-group col-md-12">
                                        <label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Nombre y apellido</label>

                                        <div class="col-sm-2 col-md-2">
                                            <input type="text" name="namepaef" class="form-control" maxlength="30" placeholder="Primer Nombre y Apellido" required onkeypress="return soloLetras(event);" onKeyUp="this.value = this.value.toUpperCase();">
                                        </div>

                                        
                                        
                                        <label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">N° de cedula</label>
                                        
                                        <div class="col-sm-2 col-md-2">
                                            <input type="text" name="cedf" class="form-control" maxlength="8" placeholder="Solo números" required onKeyPress="return SoloNumeros(event);">
                                        </div>

                                        <label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Sexo</label>
                                        
                                        <div class="col-sm-2 col-md-2">
                                            <select name="sexof" title="Indique" class="form-control">
                                                <option value="0">seleccione</option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Femenino">Femenino</option>
                                            </select>
                                        </div>

                                </div><!-- final del form-group -->

                                        <div class="form-group col-md-12">
                                            <label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Fecha de Nac.</label>

                                        <div class="col-sm-2 col-md-2">
                                            <input type="date" name="fchanacf" class="form-control"  placeholder="">
                                        </div>

                                        <label for="" class="col-sm-2 col-md-2 control-label" style="text-align:center;">Edad</label>
                                        
                                        <div class="col-sm-2 col-md-2">
                                            <input type="text" name="edadf" class="form-control" maxlength="3" placeholder="Solo números" required onKeyPress="return SoloNumeros(event);">
                                        </div>
                                        
                                        <label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Discapacidad/tipo</label>
                                        
                                        <div class="col-sm-2 col-md-2">
                                            <input type="text" name="discpf" maxlength="45" class="form-control"  placeholder="De poseer, indique cual">
                                        </div>

                                        </div><!-- final del form-group -->

                                        <div class="form-group col-md-12">
                                            <label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Embarazo Temprano</label>

                                        <div class="col-sm-2 col-md-2">
                                            <select class="form-control selectpicker show-tick" name="embrzf" id="">
                                                <option value="0">seleccione</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>

                                        <label for="" class="col-sm-2 col-md-2 control-label" style="text-align:center;">Parentesco</label>
                                        
                                        <div class="col-sm-2 col-md-2">
                                            <select class="form-control selectpicker show-tick" name="parntscf" id="">
                                                <option value="0">seleccione</option>
                                                <?php 
                                                $parentescof=$obj2->get_parentesco_f(); 
                                                for($q=0;$q<sizeof($parentescof);$q++){
                                                    ?>
                                                    <option value="<?php echo utf8_encode($parentescof[$q]["PARENTESCO"]); ?>"><?php echo utf8_encode($parentescof[$q]["PARENTESCO"]); ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        
                                        <label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">G° de instrucción</label>
                                        
                                        <div class="col-sm-2 col-md-2">
                                        <select class="form-control selectpicker show-tick" name="instrcf" >
                                            <option value="0">seleccione</option>
                                            <?php 
                                            $nivlinstrucf=$obj2->get_nivel_instruccion_f(); 
                                            for($k=0;$k<sizeof($nivlinstrucf);$k++){
                                                ?>
                                                <option value="<?php echo utf8_encode($nivlinstrucf[$k]["NIVL_INSTRUCCION"]); ?>"><?php echo utf8_encode($nivlinstrucf[$k]["NIVL_INSTRUCCION"]); ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        </div>

                                        </div><!-- final del form-group -->

                                        <div class="form-group col-md-12">
                                            <label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">CNE</label>

                                        <div class="col-sm-2 col-md-2">
                                            <select class="form-control selectpicker show-tick" name="cnef" id="">
                                                <option value="0">seleccione</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>

                                        <label for="" class="col-sm-2 col-md-2 control-label" style="text-align:center;">Profesión</label>
                                        
                                        <div class="col-sm-2 col-md-2">
                                            
                                            <select class="form-control selectpicker show-tick" name="profesf" id="">
                                                <option value="0">seleccione</option>
                                                <?php 
                                                $profesionesf=$obj2->get_profesiones_f(); 
                                                for($r=0;$r<sizeof($profesionesf);$r++){
                                                    ?>
                                                    <option value="<?php echo utf8_encode($profesionesf[$r]["PROFESION"]); ?>"><?php echo utf8_encode($profesionesf[$r]["PROFESION"]); ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        
                                        <label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Pensionado</label>
                                        
                                        <div class="col-sm-2 col-md-2">
                                            <select class="form-control selectpicker show-tick" name="pensf" id="">
                                                <option value="0">seleccione</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                            </select>
                                        </div>

                                        </div><!-- final del form-group -->

                                        <div class="form-group col-md-12">
                                            <label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Ingreso mensual</label>

                                        <div class="col-sm-2 col-md-2">
                                            <input type="text" name="ingmnsf" class="form-control"  placeholder="Cantidad en Bsf" maxlength="10" required onKeyPress="return SoloNumeros(event);">
                                        </div>

                                        </div><!-- final del form-group -->

                                        <div class="form-group">
                                            <div id="alumnos2" class="row">
                                            </div>
                                        </div>
                  </div>
            </div>

        </div>
    </div>            
</div>

    </div>

<div class="col-xs-12">
    <div class="">
        <button id="btn-alumno-agregar" class="btn btn-primary" type="button">Agregar</button>                
    </div>
</div>
    
    <hr />

<script>
    $(document).ready(function(){
        
        // El formulario que queremos replicar
        var formulario_alumno = $("#lo-que-vamos-a-copiar").html();
        
// El encargado de agregar más formularios
$("#btn-alumno-agregar").click(function(){
    // Agregamos el formulario
    $("#alumnos").prepend(formulario_alumno);

    // Agregamos un boton para retirar el formulario
    $("#alumnos .col-md-12:first .well").append('<br/><button class="btn btn-danger btn-retirar-alumno" type="button">Retirar</button>');

    // Hacemos focus en el primer input del formulario
    $("#alumnos .col-md-12:first .well input:first").focus();

    // Volvemos a cargar todo los plugins que teníamos, dentro de esta función esta el del datepicker assets/js/ini.js
    Plugins();
});
        
        // Cuando hacemos click en el boton de retirar
        $("#alumnos").on('click', '.btn-retirar-alumno', function(){
            $(this).closest('.col-md-12').remove();
        })
            
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
</div>
</div>
</div>