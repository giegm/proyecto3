  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading4">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
          <img src="../img/iconos/Man.png">&nbsp;&nbsp;Personas de sexo masculino  <span class="" style="float:right"><i class="fa fa-sort"></i></span>
        </a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
      <div class="panel-body">
        <div class="form-group">
            <div class="table-responsive col-sm-6 col-md-4">
              <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th><center>Total de hombres</center></th>
                   
                  </tr>
                </thead>
                <tbody>
                <td align="center">
                <?php  
                require_once("../modelo/clasesdeconsulta/class_sexo_masculino.php");
                /*instanciamos la class que hace la consulta a los mayores de 60 años*/
                $obj = new Sexo_masculino();
             
                $obj->get_sexo_masculino();
                $obj->get_sexo_masculino_dos();

                $todosxf = $obj->get_sexo_masculino() + $obj->get_sexo_masculino_dos();
                echo $todosxf;
  
                ?>

                </td>
                </tbody>
              </table>
            </div>
      </div>
    </div>
  </div>
  </div>