<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading12">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="false" aria-controls="collapse12">
         <img src="../img/iconos/enfermo.png">&nbsp;&nbsp;Personas con enfermedades graves  <span class="" style="float:right"><i class="fa fa-sort"></i></span>
        </a>
      </h4>
    </div>
    <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
      <div class="panel-body">
        <div class="form-group">
            <div class="table-responsive col-sm-6 col-md-4">
              <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th><center>Total de personas con enfermedades graves</center></th>
                   
                  </tr>
                </thead>
                <tbody>
                <td align="center">
                <?php  
                require_once("../modelo/clasesdeconsulta/class_enfermedades_graves.php");
                /*instanciamos la class que hace la consulta a los mayores de 60 años*/
                $obj = new Pers_enfermedad_grave();
             
                echo $obj->get_total_enfermo_grave($obj);
  
                ?>

                </td>
                </tbody>
              </table>
            </div>
      </div>
      </div>
    </div>
  </div>