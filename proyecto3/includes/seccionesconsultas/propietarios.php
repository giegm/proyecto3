<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading14">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="false" aria-controls="collapse14">
         <img src="../img/iconos/propietarios.png">&nbsp;&nbsp;Propietarios  <span class="" style="float:right"><i class="fa fa-sort"></i></span>
        </a>
      </h4>
    </div>
    <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading14">
      <div class="panel-body">
        <div class="form-group">
            <div class="table-responsive col-sm-6 col-md-4">
              <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th><center>Total de propietarios</center></th>
                   
                  </tr>
                </thead>
                <tbody>
                <td align="center">
                <?php  
                require_once("../modelo/clasesdeconsulta/class_propietarios.php");
                /*instanciamos la class que hace la consulta a los mayores de 60 años*/
                $obj = new Personas_propietarias();
             
                echo $obj->get_total_propietarios($obj);
  
                ?>

                </td>
                </tbody>
              </table>
            </div>
      </div>
      </div>
    </div>
  </div>