<div class="panel panel-danger">
    <div class="panel-heading">
      <h3 class="panel-title">Emisión de Actas</h3>
    </div>
    <div class="panel-body">
      <form action="../controlador/procesa_censados.php" method="POST" class="form-horizontal" name="form" role="form">
        <br>
        <div class="form-group">
          <label style="text-align: left" class="control-label col-sm-1 col-md-1"></label>
          <div class="col-sm-8">
            <div class="required-field-block">
              <input type="text" class="form-control" name="cedula" placeholder="Introduzca un número de cédula" maxlength="8" required onKeyPress="return SoloNumeros(event);">
              <div class="required-icon">
                <div class="text">*</div>
              </div>
            </div>
            <div class="form-group">
            <br>
              <div class="col-md-4">
                <input type="button" class="btn btn-success" onclick="Validar_cedula();" value="procesar">
              </div>
        </div>
          </div>
        </div>
        <div class="form-group">
          <div id="mensaje_error" class="col-sm-8 col-md-6"></div>
        </div>
      </form>
    </div>
</div>
