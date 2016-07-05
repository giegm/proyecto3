<div id="paneles-censo" class="panel panel-default">
                              <div class="panel-heading" role="tab" id="headingfamiliares">
                                    <h3 class="panel-title">
                                        <a href="#collapsefamiliares" data-toggle="collapse" data-parent="#accordionfamiliares" aria-expanded="true" aria-control="collapsefamiliares">
                                            Carta de Postulación
                                        <i class="fa fa-caret-down" style="float:right"></i><span style="float:right;">&nbsp;&nbsp;</span><i class="fa fa-caret-up" style="float:right"></i></a>
                                    </h3>
                              </div><!-- final del primer heading -->

                                <div id="collapsefamiliares" class="panel-collapse collapse on" role="tabpanelfamiliares" aria-labelledby="headingfamiliares">
                                    <div class="panel-body">


                
                      
                      <div class="panel-body">
                        <div class="form-group col-md-12">
                                        <label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Institución</label>

                                        <div class="col-sm-2 col-md-2">
                                            <div class="required-field-block">
                                                <input type="text" name="namepaef[]" class="form-control"  placeholder="Nombre de la Institución" maxlength="10">
                                                <div class="required-icon">
                                                    <div class="text">*</div>
                                                </div>
                                            </div>
                                        </div>                                       
                                        <label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Atención</label>
                                        
                                        <div class="col-sm-2 col-md-2">
                                            <div class="required-field-block">
                                                <input type="text" name="cedf[]" class="form-control"  placeholder="A quien va dirigido">
                                                <div class="required-icon">
                                                    <div class="text">*</div>
                                                </div>
                                            </div>
                                        </div>

                                        <label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Área de Postulación</label>
                                        
                                        <div class="col-sm-2 col-md-2">
                                            <div class="required-field-block">
                                                <input type="text" name="ci" autofocus class="form-control" placeholder="Específicar área de estudio">
                                                <div class="required-icon">
                                                    <div class="text">*</div>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-sm-2 col-md-2">
                                            <a class="btn btn-success" type="button" href="../controlador/creapdf_acta2.php">Imprimir</a>
                                        </div>
                        </div><!-- final del form-group -->
                     </div>

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