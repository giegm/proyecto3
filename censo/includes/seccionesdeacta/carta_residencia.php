<div id="paneles-censo" class="panel panel-danger">
	<div class="panel-heading" role="tab" id="headingprincipal">
    	<h4 class="panel-title">
	    	<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseprincipal" aria-expanded="true" aria-controls="collapseprincipal">
	        Carta de Residencia
	    	<i class="fa fa-caret-down" style="float:right"></i><span style="float:right;">&nbsp;&nbsp;</span><i class="fa fa-caret-up" style="float:right"></i></a>
      	</h4>
	</div>
	<div id="collapseprincipal" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingprincipal">			     
		<div class="panel-body">
			<div class="form-group col-md-12"><!-- segundo form-group -->
				<form action="../controlador/creapdf_acta.php" method="POST" class="form-horizontal" name="form" role="form">
					<label for="" class="col-sm-2 col-md-2 control-label" style="text-align:justify;">Motivo de la Solicitud</label>
					<div class="col-sm-2 col-md-2">
						<div class="required-field-block">	
							<input type="text" class="form-control" name="motivo" placeholder="Indique el motivo" maxlength="30">
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
			</div><!-- fin del 2do form-group -->
		</div>
	</div>
</div>