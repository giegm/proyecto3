  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading5">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
          <img src="../img/iconos/Girl.png">&nbsp;&nbsp;Personas de sexo femenino  <span class="" style="float:right"><i class="fa fa-sort"></i></span> 
        </a>
      </h4>
    </div>
    <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
      <div class="panel-body">

        <div class="form-group">
            <div class="table-responsive col-sm-6 col-md-4">
              <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th><center>Total de mujeres</center></th>
                   
                  </tr>
                </thead>
                <tbody>
                <td align="center">
                <?php  
                require_once("../modelo/clasesdeconsulta/class_sexo_femenino.php");
                /*instanciamos la class que hace la consulta a los mayores de 60 años*/
                $obj = new Sexo_femenino();
             
                $obj->get_sexo_femenino();
                $obj->get_sexo_femenino_dos();

                $totalsxf = $obj->get_sexo_femenino() + $obj->get_sexo_femenino_dos();

                echo $totalsxf;

                ?>

                </td>
                </tbody>
              </table>
            </div>
      </div>

      </div>
    </div>
  </div>