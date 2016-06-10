<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading9">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false" aria-controls="collapse9">
          <img src="../img/iconos/desempleado.png">&nbsp;&nbsp;Desempleados  <span class="" style="float:right"><i class="fa fa-sort"></i></span>
        </a>
      </h4>
    </div>
    <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading9">
      <div class="panel-body">
        <div class="form-group">
            <div class="table-responsive col-sm-6 col-md-4">
              <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th><center>Total de desempleados</center></th>
                   
                  </tr>
                </thead>
                <tbody>
                <td align="center">
                <?php  
                require_once("../modelo/clasesdeconsulta/class_desempleados.php");
                /*instanciamos la class que hace la consulta a los mayores de 60 años*/
                $obj = new Personas_desempleadas();
             
                echo $obj->get_total_desempleados($obj);
  
                ?>

                </td>
                </tbody>
              </table>
            </div>
      </div>
      </div>
    </div>
  </div>