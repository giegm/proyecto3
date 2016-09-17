  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading6">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
          <img src="../img/iconos/Student.png">&nbsp;&nbsp;Estudiantes  <span class="" style="float:right"><i class="fa fa-sort"></i></span>
        </a>
      </h4>
    </div>
    <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
      <div class="panel-body">
        <div class="form-group">
            <div class="table-responsive col-sm-6 col-md-4">
              <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th><center>Total de estudiantes</center></th>
                   
                  </tr>
                </thead>
                <tbody>
                <td align="center">
                <?php  
                require_once("../modelo/clasesdeconsulta/class_estudiantes.php");
                /*instanciamos la class que hace la consulta a los mayores de 60 años*/
                $obj = new Estudiantes();
             
                 $obj->get_total_estudiantes();
                 $obj->get_total_estudiantes_dos();

                $datat= $obj->get_total_estudiantes() + $obj->get_total_estudiantes_dos();
                echo $datat;
                ?>

                </td>
                </tbody>
              </table>
            </div>
      </div>
      </div>
    </div>
  </div>