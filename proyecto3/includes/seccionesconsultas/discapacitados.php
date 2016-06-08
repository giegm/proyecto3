<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading11">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="false" aria-controls="collapse11">
          <img src="../img/iconos/discapacidad.png">&nbsp;&nbsp;Discapacitados  <span class="" style="float:right"><i class="fa fa-sort"></i></span> 
        </a>
      </h4>
    </div>
    <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
      <div class="panel-body">

        <div class="form-group">
            <div class="table-responsive col-sm-6 col-md-4">
              <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th><center>Total de discapacitados</center></th>
                   
                  </tr>
                </thead>
                <tbody>
                <td align="center">
                <?php  
                require_once("../modelo/clasesdeconsulta/class_discapacitados.php");
                /*instanciamos la class que hace la consulta a los mayores de 60 años*/
                $obj = new Personas_discapacitadas();
             
                echo $obj->get_total_discapacitados($obj);
  
                ?>

                </td>
                </tbody>
              </table>
            </div>
      </div>

      </div>
    </div>
  </div>