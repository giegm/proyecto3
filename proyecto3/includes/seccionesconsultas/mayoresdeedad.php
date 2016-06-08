  <?php 
require_once("../modelo/clasesdeconsulta/class_mayor_de_edad.php");
   ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <img src="../img/iconos/joven.png">&nbsp;&nbsp;Mayores de edad  <span class="" style="float:right"><i class="fa fa-sort"></i></span>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">

           <div class="form-group">
            <div class="table-responsive col-sm-6 col-md-4">
              <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th><center>Jefes de familia</center></th>
                   
                  </tr>
                </thead>
                <tbody>
                <td align="center">
                  <?php 
                  require_once("../modelo/clasesdeconsulta/class_mayor_de_edad.php");
                  /*instanciamos la class que hace la consulta a los mayores de edad*/
                  $obj = new Mayores_edad();

                  echo $obj->get_mayores_de_edad_jefes($obj);
                  ?>
                </td>
                </tbody>
              </table>
            </div>
            <div class="table-responsive col-sm-6 col-md-4">
              <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th><center>Miembros de familia</center></th>
                   
                  </tr>
                </thead>
                <tbody>
                <td align="center">
                <?php 
              
                echo $obj->get_mayores_de_edad_familiares($obj);
                ?>
                </td>
                </tbody>
              </table>
            </div>
          </div>

      </div>
    </div>
  </div>