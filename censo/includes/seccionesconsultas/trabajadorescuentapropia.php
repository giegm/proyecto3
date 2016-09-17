<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading8">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8">
          <img src="../img/iconos/independiente.png">&nbsp;&nbsp;Trabajadores por cuenta propia  <span class="" style="float:right"><i class="fa fa-sort"></i></span>
        </a>
      </h4>
    </div>
    <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8">
      <div class="panel-body">

        <div class="form-group">
            <div class="table-responsive col-sm-6 col-md-4">
              <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th><center>Total de trabajadores por cuenta propia</center></th>
                   
                  </tr>
                </thead>
                <tbody>
                <td align="center">
                <?php  
                require_once("../modelo/clasesdeconsulta/class_trabajo_cuenta_propia.php");
                /*instanciamos la class que hace la consulta a los mayores de 60 años*/
                $obj = new Personas_trabajo_propio();
             
                echo $obj->get_total_trabajo_propio($obj);
  
                ?>

                </td>
                </tbody>
              </table>
            </div>
      </div>

      </div>
    </div>
  </div>