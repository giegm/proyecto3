<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <img src="../img/iconos/niño.png">&nbsp;&nbsp;Menores de 18 años  <span class="" style="float:right"><i class="fa fa-sort"></i></span>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <div class="form-group">
            <div class="table-responsive col-sm-6 col-md-4">
              <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th><center>Total de menores de edad</center></th>
                   
                  </tr>
                </thead>
                <tbody>
                <td align="center">
                <?php  
                require_once("../modelo/clasesdeconsulta/class_menores_de_edad.php");
                /*instanciamos la class que hace la consulta a los mayores de 60 años*/
                $obj = new Menores_edad();
             
                echo $obj->get_menores_edad($obj);
  
                ?>

                </td>
                </tbody>
              </table>
            </div>
      </div>
    </div>
    </div>
</div>