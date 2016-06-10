<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading13">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="false" aria-controls="collapse13">
          <img src="../img/iconos/alquilados.png">&nbsp;&nbsp;Alquilados  <span class="" style="float:right"><i class="fa fa-sort"></i></span>
        </a>
      </h4>
    </div>
    <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13">
      <div class="panel-body">
        <div class="form-group">
            <div class="table-responsive col-sm-6 col-md-4">
              <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th><center>Total de alquilados</center></th>
                   
                  </tr>
                </thead>
                <tbody>
                <td align="center">
                <?php  
                require_once("../modelo/clasesdeconsulta/class_alquilados.php");
                /*instanciamos la class que hace la consulta a los mayores de 60 años*/
                $obj = new Personas_alquiladas();
             
                echo $obj->get_total_alquiladas($obj);
  
                ?>

                </td>
                </tbody>
              </table>
            </div>
      </div>
      </div>
    </div>
  </div>