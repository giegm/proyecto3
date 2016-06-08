<?php
session_start();
include("../controlador/conexion.php");
$conecta=mysqli_connect($host,$user,$pw,$db);

//crearemos variables para mostrar errores:
$camponameErr = $campopassErr = "";

//primero vamos a verificar si no existe una session iniciada
//si existe una session mandamos al user al perfil
if(isset($_SESSION['sesion_activa'])){
  header('location:');
}

//verificamos a lo que el usuario pulse el btnlogin lo siguiente:
if(isset($_POST['loginbtn'])){
  //verificamos los campos del formulario
  if(empty($_POST['nameadmin'])){
    $camponameErr = "<div class='alert alert-danger' style='padding:5px; border-radius:0px; width:259px'><span class='glyphicon glyphicon-remove'></span>&nbsp;"."Debe indicar un nombre"."</div>";
  }
  if(empty($_POST['passadmin'])){
        $campopassErr = "<div class='alert alert-danger' style='padding:5px; border-radius:0px; width:259px'><span class='glyphicon glyphicon-remove'></span>&nbsp;"."Debe indicar una contraseña"."</div>";
  }
  if(!empty($_POST['nameadmin']) && !empty($_POST['passadmin'])){
    //si no estan vacios los alamcenamos en una variable
    $camponame=$_POST['nameadmin'];
    $campopass=$_POST['passadmin'];
    //seguido d esto, ejecutamos el select a la base de datos
    $query="SELECT * FROM login WHERE USERADMIN='$camponame' AND PASSADMIN='$campopass'";
    $resulta=mysqli_query($conecta, $query);
    /*luego del select a la BD debemos obtener esos datos devueltos de la query con mysql_num_rows:
    el cual guardaremos en una variable para luego ser llamada mas abajo*/
    $devuelve=mysqli_num_rows($resulta);
    //le daremos una condicion a este resultado si es distinto de 0
    if($devuelve!=0){
      /*asiganos los campos de la BD a una nuvea variable dentro del array asociativo
      mysql_fetc_assoc() con un while que se ejecutara siempre y cuando lo que se obtenga 
      de la base de datos sea distinto a 0, que lo que hace es almacenar y asignar
      los campos y contenido de la base de datos.*/
      while($row=mysqli_fetch_assoc($resulta)){
        $namebd=$row['USERADMIN'];
        $passbd=$row['PASSADMIN'];
        /*y si este while se ejecuta segun el if anterior, le decimos que si las variables
        que almacenan los campos del formularios son iguales a las del while que guardan los datos 
        de la base de datos establezca la $session del usuario. */
        if($camponame == $namebd && $passbd == $campopass ){
          /*establecemos la $session y almacenamos en ella el nombre que introduzca el usuario
          en el campo nombre del formlulario*/
          $_SESSION['sesion_activa']=$camponame;
          //y lo mandamos a su perfil
          header('location:vistas/administra.php');

        }else{
          $error = "nombre de usuario o contraseña invalida.<br/>";
        }
      }
    }else{
      $error = "nombre de usuario o contraseña invalida.<br/>";
    }
  }

  }


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Madre Tierra</title>
	<link rel="stylesheet" href="../estilos.css">
	<link rel="stylesheet" href="../diseño/css/bootstrap.css">
	<link rel="stylesheet" href="../diseño/iconos/css/font-awesome.css">	
</head>
<body>

	<?php
	include ("../includes/navbarweb.php");
	?>
<div class="col-md-12"> 
 <form action="" method="post">
<!-- titulo de la seccion -->
  <h3>Agregar noticias</h3>
  <hr class="featurette-divider">
  <!-- carga de imagenes -->
  <div class="panel panel-default"><!-- primer panel -->
      <div class="panel-heading">
        <h3 class="panel-title">Agregar fotos</h3>
      </div>
     
      <div class="panel-body">
      <!-- primer form group -->
        <div class="form-group col-sm-6 col-md-6">
        <!-- subir imagenes -->
        <label for="" class="control-label">Imagen 1</label>
          <div class="input-group">

            <div class="input-group-addon"><i class="fa fa-camera-retro"></i></div>
            <input  class="btn btn-default form-control" type="file" name="imagen1">

          </div>
        </div><!-- final primer form group -->

          <!-- segundo form group -->
          <div class="form-group col-sm-6 col-md-6">
        <!-- subir imagenes -->
        <label for="" class="control-label">Imagen 2</label>
          <div class="input-group">

            <div class="input-group-addon"><i class="fa fa-camera-retro"></i></div>
            <input  class="btn btn-default form-control" type="file" name="imagen1">

          </div>
        </div><!-- final segudon form group -->

        <!-- tercero form group -->
        <div class="form-group col-sm-6 col-md-6">
        <!-- subir imagenes -->
        <label for="" class="control-label">Imagen 3</label>
          <div class="input-group">

            <div class="input-group-addon"><i class="fa fa-camera-retro"></i></div>
            <input  class="btn btn-default form-control" type="file" name="imagen1">

          </div>
        </div><!-- final tercero form group -->

          <!-- cuarto form group -->
          <div class="form-group col-sm-6 col-md-6">
        <!-- subir imagenes -->
        <label for="" class="control-label">Imagen 4</label>
          <div class="input-group">

            <div class="input-group-addon"><i class="fa fa-camera-retro"></i></div>
            <input  class="btn btn-default form-control" type="file" name="imagen1">

          </div>
        </div><!-- final cuarto form group -->

      </div>

  </div><!-- final del primer panel -->

  <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Detalle de noticia</h3>
      </div>
      <div class="panel-body">
        <div class="form-group col-sm-4 col-md-4">
        <label for="">Nombre de noticia</label>
        <input type="text" name="title-noticia" class="form-control"> 
        </div>
                <div class="form-group col-sm-3 col-md-3">
        <label for="">Fecha de noticia</label>
        <input type="date" name="fecha-noticia" class="form-control"> 
        </div>
                <div class="form-group col-sm-3 col-md-3">
        <label for="">Categoria</label>
        <select class="form-control" name="categoria-noticia" id="">
          <option value="1">Social</option>
          <option value="2">Economia</option>
          <option value="3">Politica</option>
          <option value="4">Deporte</option>
          <option value="5">Cultura</option>
        </select> 
        </div>
        <div class="form-group col-sm-4 col-md-4">
        <label for="">Descripcion de la noticia</label>
        <textarea name="descripcion" id="" cols="30" rows="5"></textarea>
        </div>        
      </div>
  </div>
<div class="col-sm-3 col-md-3"> <input type="submit" name="agreganoticia" class="btn btn-success form-control" value="Agregar Noticia"></div>








</form>
</div>



  	<?php
	include("../includes/footer.php");
	?>




<script src="../diseño/js/jquery-1.11.2.min.js"></script> 
<script src ="../diseño/js/bootstrap.min.js"></script>
<script src="../diseño/selectstyles/dist/js/bootstrap-select.js"></script>
</body>
</html>