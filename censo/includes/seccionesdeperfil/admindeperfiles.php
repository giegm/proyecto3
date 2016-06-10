<!--CONTENIDO-->
    <ul class="nav nav-pills">
      <li class="active"><a data-toggle="pill" href="#perfil">Administración de perfiles</a></li>
      <li><a data-toggle="pill" href="#adminperfil">Creación de Perfiles</a></li>
    </ul>

<div class="tab-content"><!--CONTENEDOR DE LOS TABS-->


      <div id="perfil" class="tab-pane fade in active">
        <br/>
        <!--INICIO DEL PANEL-->
  
        <div class="panel panel-danger">
    <div class="panel-heading" role="tab" id="headingdatosperfil">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseuno" aria-expanded="false" aria-controls="collapseuno"> <span class="" style="float:right"><i class="fa fa-sort"></i></span>
          Datos del perfil
        </a>
      </h4>
    </div>
    <div id="collapseuno" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingdatosperfil">
     
     <div class="panel-body">

      <form action="" method="POST" class="form-horizontal" role="form">
          <div class="form-group">
        <label class="control-label col-md-2">Usuario:</label>
      
      <div class="col-md-4">
        <input disabled type="text" class="form-control" name="" value="<?php echo $data[0]["USERADMIN"] ?>">
      </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-2">Cedula de identidad:</label>
      
      <div class="col-md-4">
        <input disabled type="text" class="form-control" name="" value="<?php echo $data[0]["CEDULA"] ?>">
      </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-2">Perfil de Usuario:</label>
      
      <div class="col-md-4">
        <input disabled type="text" class="form-control" name="" value="<?php echo $data[0]["PERFIL"] ?>">
      </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-2"></label>
      
      <div class="col-md-8">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Modificar Datos</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updatepass" data-whatever="@getbootstrap">Actualizar Contraseña</button>
      </div>
      </div>

      </form>

      </div>

    </div>
  </div>
  <!--FIN DEL PANEL-->

  <!--/////////////////////////////////////////////////////////////////////////////////////--> 

<!--/////////////////////////////////////////////////////////////////////////////////////--> 

<!--MODAL PARA MODIFICAR DATOS DE USUARIO-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Datos del Perfil</h4>
      </div>
      <div class="modal-body">

      <div class="alert alert-info alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <p style="text-align:left;"><strong>Recuerde indicar su contraseña actual para efectuar la operación.</strong></p>
      </div>
      <hr/>

      <form action="../controlador/update_perfil.php?updt_perfil_activo=EnProceso" method="POST" name="formu" class="form-horizontal">
          <div class="form-group">
        <label class="control-label col-md-4">Usuario:</label>
      
      <div class="col-md-4">
        <input type="text" class="form-control" name="nameuser" value="<?php echo $data[0]["USERADMIN"] ?>">
      </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-4">Cedula de identidad:</label>
      
      <div class="col-md-4">
        <input type="text" class="form-control" name="ceduser" value="<?php echo $data[0]["CEDULA"] ?>">
      </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-4">Contraseña actual:</label>
      
      <div class="col-md-4">
        <input type="password" class="form-control" name="claveactual" value="">
      </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-4">Perfil de Usuario:</label>
      
      <div class="col-md-4">
          <select class="form-control selectpicker show-tick" name="rol_user" id="">
          <option value="1"><?php echo $data[0]["PERFIL"]; ?></option>
          </select>
      </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-4"></label>
        <div class="col-md-8">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      <input type="button" value="Guardar datos" name="envio" class="btn btn-success" onClick="Modifica_datos_perfil();">
        </div>
      </div>
      <!--cuadro de errores js-->
      <div id="error">

      </div>
      </form>
      
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
<!--FIN DEL MODAL-->

<!--/////////////////////////////////////////////////////////////////////////////////////--> 

<!--MODAL PARA MODIFICAR CONTRASEÑA DE USUARIO-->
<div class="modal fade" id="updatepass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Actualización de credenciales</h4>
      </div>
      <div class="modal-body">

      <div class="alert alert-info alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <p style="text-align:left;"><strong>Recuerde indicar su contraseña actual para efectuar la operación.</strong></p>
      </div>
      <hr/>

      <form action="../controlador/update_perfil.php" method="POST" name="formu2" class="form-horizontal">

      <div class="form-group">
        <label class="control-label col-md-4">Contraseña actual:</label>
      
      <div class="col-md-4">
        <input type="password" class="form-control" name="claveactualp" value="">
      </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-4">Nueva Contraseña:</label>
      
      <div class="col-md-4">
        <input type="password" class="form-control" name="clavenew" value="">
      </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-4">Confirmar Contraseña:</label>
      
      <div class="col-md-4">
        <input type="password" class="form-control" name="clavenew2" value="">
      </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-4">Perfil de Usuario:</label>
      
      <div class="col-md-4">
          <select class="form-control selectpicker show-tick" name="rol_user" id="">
          <option value="1"><?php echo $data[0]["PERFIL"]; ?></option>
          </select>
      </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-4"></label>
        <div class="col-md-8">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      <input type="button" value="Guardar datos" class="btn btn-success" onClick="Modifica_claves_perfil();">
        </div>
      </div>
      <!--cuadro de errores js-->
      <div id="error">

      </div>
      </form>
      
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
<!--FIN DEL MODAL-->

<!--/////////////////////////////////////////////////////////////////////////////////////--> 

<div class="panel panel-danger">
    <div class="panel-heading" id="listadodeusuarios">
      <h3 class="panel-title">Listado de Usuarios</h3> 
  </div>
  <div class="panel-body">
  <div class="table-responsive">
  <table class="table table-hover">
  <thead>
      <tr>
      <th>Usuario</th>
      <th>Cedula</th>
      <th>Contraseña</th>
      <th>Rol de Usuario</th>
      <th>Estado</th>
      <th>Operación 1</th>
      <th>Operación 2</th>
      </tr>
  </thead>
  <tbody>
          
      <?php 
      for($i=0;$i<sizeof($datados);$i++){
      ?>
        <tr>
          <td><?php echo $datados[$i]["USERADMIN"]; ?></td>
          <td><?php echo $datados[$i]["CEDULA"]; ?></td>
          <td><?php echo $datados[$i]["PASSADMINDOS"]; ?></td>
          <td><?php echo $datados[$i]["PERFIL"]; ?></td>
          <td><?php
          $edoperfil=$datados[$i]["ID_EDO_PERFIL"];
          $descrip=$datados[$i]["ESTADO"];
          if($edoperfil==1){ 
          ?>
          <input type="button" name="" value="<?php echo $descrip; ?>" class="btn btn-success">
          <?php
          }else if($edoperfil==2){
          ?>
          <input type="button" name="" value="<?php echo $descrip; ?>" class="btn btn-warning">
          <?php
          }else{

          } 
          ?>  
          <?php
          if($datados[$i]["ID_PERFIL"]==1){
            ?>
            </td>
            <td><a class="btn btn-primary" href="" title="" disabled="disabled">Modificar datos</a></td>
            <td>
            <a type="button" name="eliminar" href="javascript:void(0);" onclick="" class="btn btn-danger" disabled="disabled">Eliminar</a>
            <?php
          }else{
            ?>
            </td>
            <td><a class="btn btn-primary" href="?perfil=<?php echo $_SESSION["sesion_perfil"];?>&mod=<?php echo $datados[$i]['ID_PERFIL']; ?>" title="">Modificar datos</a></td>
            <td>
            <a type="button" name="eliminar" href="javascript:void(0);" onclick="eliminar_user('../controlador/elimina_user.php?id_user=<?php echo $datados[$i]["ID_LOGIN"]; ?>');" class="btn btn-danger">Eliminar</a>
            <?php
            }//fin del else 
           ?>
          </td>
        </tr>
          <?php
          }//fin del bucle for de los datos del listado de censos
          ?>
          </tbody>
        </table>
      </div>
      
      
    </div>
</div>

<!--/////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php  
if(isset($_GET["mod"])){
  ?>

  <div class="panel panel-danger">
    <div class="panel-heading" role="tab" id="headingperfilsel">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseperfilsel" aria-expanded="false" aria-controls="collapseperfilsel">
          Datos del perfil
        </a>
      </h4>
    </div>
    <div id="collapseperfilsel" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingperfilsel">
     
     <div class="panel-body">

      <form action="../controlador/update_perfil.php?modf_user=EnProceso" method="POST" name="formusel" class="form-horizontal" role="form">
          <div class="form-group">
        <label class="control-label col-md-2">Usuario:</label>
      
      <div class="col-md-4">
        <input type="text"  class="form-control" name="newname" autofocus value="<?php echo $perfil[0]["USERADMIN"]; ?>">
      </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-2">Cedula de identidad:</label>
      
      <div class="col-md-4">
        <input type="text" class="form-control" name="newced" value="<?php echo $perfil[0]["CEDULA"]; ?>">
      </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-2">Contraseña:</label>
      
      <div class="col-md-4">
        <input type="text" class="form-control" name="newpass" value="<?php echo $perfil[0]["PASSADMINDOS"]; ?>">
      </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-2">Perfil de Usuario:</label>
      
      <div class="col-md-4">
      <input type="hidden" name="id_perfil_seleccionado" value="<?php echo $perfil[0]['ID_PERFIL']; ?>">
        <select class="form-control" name="newrol">
        <?php 
        $rolperf=$perfil[0]["ID_PERFIL"];
        if($rolperf==1){
        ?>
          <option value="<?php echo $rolperf; ?>">Administrador</option>
          <option value="2">Publicador</option>
          <option value="3">Consultor</option>
        <?php
        }
        if($rolperf==2){
        ?>
          <option value="<?php echo $rolperf; ?>">Publicador</option>
          <option value="1">Administrador</option>
          <option value="3">Consultor</option>
        <?php 
        }if($rolperf==3){
        ?>
          <option value="<?php echo $rolperf; ?>">Consultor</option>
          <option value="1">Administrador</option>
          <option value="2">Publicador</option>
        <?php  
        }
        ?>
        </select>
      </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-2">Estado:</label>
      
      <div class="col-md-4">
        <select class="form-control" name="newestado_user">
        
        <?php 
        $edoperf=$perfil[0]['ID_EDO_PERFIL'];
        if($edoperf==1){
        ?>
          <option value="<?php echo $edoperf; ?>"><?php echo $perfil[0]["ESTADO"]; ?></option>
          <option value="2">Suspendido</option>
        <?php
        }
        if($edoperf==2){
        ?>
          <option value="<?php echo $edoperf; ?>"><?php echo $perfil[0]["ESTADO"]; ?></option>
          <option value="1">Activo</option>
        <?php 
        }
        ?>

        </select>
      </div>
      </div>
      
      <div class="form-group">
      <label class="control-label col-md-2"></label>
        <div class="col-sm-12 col-md-4">
          <div id="error_campos">
            
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-2"></label>
      
      <div class="col-md-8">
        <button type="button" class="btn btn-danger" onClick="window.location='?perfil=<?php echo $_SESSION["sesion_perfil"]; ?>'">Cancelar</button>
        <input type="button" class="btn btn-primary" onClick="Modifica_datos_perfil_seleccionado();" value="Guardar datos">
      </div>
      </div>

      </form>

      </div>

    </div>
  </div>
  <?php
  }
  ?>

      </div><!--FINAL DEL PRIMER TAB-->




  <!--SEGUNDO TAB QUE PRESENTA EL REGISTRO DE NUEVOS USUARIOS-->
      <div id="adminperfil" class="tab-pane fade">
      <br/>
  
  <div class="panel panel-danger">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <span class="" style="float:right"><i class="fa fa-sort"></i></span>
          Crear usuario
        </a>
      </h4>
    </div>
      <!--mensaje de errores para el form-->
        <div id="mensaje_error"></div>

    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <form action="../controlador/crearperfil.php" method="POST" name="form">
        <div class="form-group">
          <label for="">Nombre y apellido</label>
          <input type="text" name="nombre" class="form-control" placeholder="">
        </div>

        <div class="form-group">
          <label for="">DNI</label>
          <input type="number" name="cedula" class="form-control" placeholder="cedula de identidad">
        </div>  

         <div class="form-group">
          <label for="">Contraseña</label>
          <input type="password" name="password" class="form-control" placeholder="maximo 15 caracteres" maxlength="15">
        </div>

         <div class="form-group">
          <label for="">Rol del usuario</label>
          <label class="radio-inline">
          <input type="radio" name="tipo_rol" id="inlineRadio1" value="1" checked=""> Administrar
          </label>
          <label class="radio-inline">
          <input type="radio" name="tipo_rol" id="inlineRadio2" value="2"> Publicar 
          </label>
          <label class="radio-inline">
          <input type="radio" name="tipo_rol" id="inlineRadio3" value="3"> Consultar
          </label>
        </div>

        <input type="button" value="Guardar datos"name="envio" class="btn btn-success" onClick="Valida_perfil();">

        </form>
      </div>
    </div>
  </div>
<!--FINAL DEL PRIMER PANEL-->
<!--/////////////////////////////////////////////////////////////////////////////////////--> 
</div>
</div>
<!--FIN DE CONTENIDO-->
    
      </div><!--FINAL DEL SEGUNDO TAB QUE PRESENTA EL REGISTRO DE NUEVOS USUARIOS-->


</div><!--FINAL DEL CONTENEDOR DE LOS TABS-->
