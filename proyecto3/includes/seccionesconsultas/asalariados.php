<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading7">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="true" aria-controls="collapse7">
          <img src="../img/iconos/asalariados.png">&nbsp;&nbsp;Asalariados  <span class="" style="float:right"><i class="fa fa-sort"></i></span>
        </a>
      </h4>
    </div>
    <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
      <div class="panel-body">

        <div class="form-group">
            <div class="table-responsive col-sm-6 col-md-4">
              <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th><center>Total de asalariados</center></th>
                   
                  </tr>
                </thead>
                <tbody>
                <td align="center">
                <?php  
                require_once("../modelo/clasesdeconsulta/class_asalariados.php");
                /*instanciamos la class que hace la consulta a los mayores de 60 años*/
                $obj = new Personas_asalariados();
             
                echo $obj->get_total_asalariados($obj);
  
                ?>

                </td>
                </tbody>
              </table>
            </div>
      </div>

      </div>
    </div>
  </div>