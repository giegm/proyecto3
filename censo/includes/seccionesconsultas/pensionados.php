<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading10">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="true" aria-controls="collapse10">
          <img src="../img/iconos/pensionados.png">&nbsp;&nbsp;Pensionados  <span class="" style="float:right"><i class="fa fa-sort"></i></span>
        </a>
      </h4>
    </div>
    <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading10">
      <div class="panel-body">

        <div class="form-group">
            <div class="table-responsive col-sm-6 col-md-4">
              <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th><center>Total de pensionados</center></th>
                   
                  </tr>
                </thead>
                <tbody>
                <td align="center">
                <?php  
                require_once("../modelo/clasesdeconsulta/class_pensionados.php");
                /*instanciamos la class que hace la consulta a los mayores de 60 años*/
                $obj = new Personas_pensionadas();
             
                $obj->get_total_pensionados();
                $obj->get_total_pensionados_dos();

                $totalpns = $obj->get_total_pensionados() + $obj->get_total_pensionados_dos();
                 echo $totalpns;
  
                ?>

                </td>
                </tbody>
              </table>
            </div>
      </div>

      </div>
    </div>
  </div>