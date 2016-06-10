
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <img src="../img/iconos/anciano.png">&nbsp;&nbsp;</span>Mayores de 60 años <span class="" style="float:right"><i class="fa fa-sort"></i></span>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
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
                require_once("../modelo/clasesdeconsulta/class_mayor_a_sesenta.php");
                /*instanciamos la class que hace la consulta a los mayores de 60 años*/
                $obj = new Mayores_sesenta();
             
                echo $obj->get_mayores_a_sesenta_jefes($obj);
  
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
               
                echo $obj->get_mayores_a_sesenta_familiares($obj);
               
                ?>
                </td>
                </tbody>
              </table>
            </div>
          </div>
     

      </div>
    </div>
  </div>