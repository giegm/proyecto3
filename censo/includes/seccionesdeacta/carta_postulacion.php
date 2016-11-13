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
                    <form action="../controlador/creapdf_acta2.php" method="POST" class="form-horizontal" name="form" role="form">
                        <label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Institución</label>
                        <div class="col-sm-2 col-md-2">
                            <div class="required-field-block">
                                <input type="text" name="institucion" class="form-control"  placeholder="Nombre de la Institución" maxlength="50">
                                <div class="required-icon">
                                    <div class="text">*</div>
                                </div>
                            </div>
                        </div>                                       
                        <label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Atención</label>                              
                        <div class="col-sm-2 col-md-2">
                            <div class="required-field-block">
                                <input type="text" name="atencion" class="form-control"  placeholder="A quien va dirigido" maxlength="15">
                                <div class="required-icon">
                                    <div class="text">*</div>
                                </div>
                            </div>
                        </div>
                        <label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Vocería a la que pertenece</label>                  
                        <div class="col-sm-2 col-md-2">
                            <div class="required-field-block">
                                <input type="text" name="voceria" autofocus class="form-control" placeholder="Específicar área que pertenece" maxlength="50">
                                <div class="required-icon">
                                    <div class="text">*</div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="form-group col-md-12">
                        <label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Área de Postulación</label>                  
                        <div class="col-sm-2 col-md-2">
                            <div class="required-field-block">
                                <input type="text" name="area" autofocus class="form-control" placeholder="Específicar área de estudio" maxlength="30">
                                <input type="hidden" name="cedula" value="<?php echo $_GET["cedula"]; ?>">
                                <div class="required-icon">
                                    <div class="text">*</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-md-2">
                            <button class="btn btn-success" type="submit" value="Imprimir">Imprimir</button>
                        </div>
                    </form>
                </div><!-- final del form-group -->
            </div>
        </div>
    </div>
</div>