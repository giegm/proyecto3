<?php
require_once("../modelo/clasedelogin/class_login.php"); 
require_once("../modelo/clasesdenoticia/class_revisa_noticia.php");
$objc=new RNoticia();
if(isset($_SESSION["sesion_usuario"]))
{
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $objc->modifica_noticia_por_id($_GET["id"]);
}
$data=$objc->get_noticia_por_id($_GET["id"]);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Sistema de Control de Censo Demográfico y Socieconómico|Revisar Noticia</title>    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../diseño/estilos.css">
    <link rel="stylesheet" href="../diseño/css/bootstrap.css">
    <link rel="stylesheet" href="../diseño/iconos/css/font-awesome.css">
    <link rel="stylesheet" href="../diseño/selectstyles/dist/css/bootstrap-select.css">
    <script src="../js/validar_carga_noticia.js" type="text/javascript"></script>
    <link rel="shortcut icon" href="../img/ccsantaines.ico">
  </head>
<body>
<?php include("../includes/navbaradmin.php"); ?>

<div class="container-fluid"><!-- inicio del contenedor general -->

  <div class="row"><!-- fila principal -->

  <div class="col-md-2" id="list-vertical-admin">
    
  <?php
  include("../includes/listverticaladmin.php");
  ?>
    <br/>

  </div>
  <br/>
  <!-- creamos la section derecha central de la vista general. -->

  <section>
    
    <div class="col-md-10 col-admin-central">
      
      <div class="col-md-12 well">

<div class="panel panel-danger">
    <div class="panel-heading">
      <h3 class="panel-title">Agregar noticia</h3>
    </div>
    <div class="panel-body">
      <form action="../controlador/procesa_noticia.php" method="POST" class="form-horizontal" name="form" role="form">
          
        <!--<div class="form-group">
          <label style="text-align: left" class="control-label col-sm-1 col-md-1">Imagen</label>
         
          <div class="col-sm-7 col-md-6">
          <input type="file" class="form-control" name="imagen_noticia" value="">
          </div>
         </div>-->

         <div class="form-group">
          <label style="text-align: left" class="control-label col-sm-1 col-md-1">Título</label>
         
          <div class="col-sm-7 col-md-6">
          <input type="text" class="form-control" name="titulo_noticia" value="<?php echo $data[0]["TITULO_NOTICIA"];?>">
          </div>
         </div>

         <div class="form-group">
          <label style="text-align: left" class="control-label col-sm-2 col-md-2">Fecha de Notícia</label>
         
          <div class="col-sm-4 col-md-3">
          <input type="date" class="form-control" name="fecha_noticia" value="<?php echo $data[0]["FCHA_NOTICIA"];?>">
          </div>
         </div>

         <div class="form-group">
          <label style="text-align: left" class="control-label col-sm-2 col-md-2">Descripción</label>
         
          <div class="col-sm-4 col-md-4">
          <textarea name="descrip_noticia"><?php echo $data[0]["DESCRIPC_NOTICIA"]; ?></textarea>
          </div>
         </div>

         <div class="form-group">
          <label style="text-align: left" class="control-label col-sm-2 col-md-2">Categoría</label>
         
          <div class="col-sm-4 col-md-4">
          <select class="form-control" name="categoria_noticia" multiple>
          <?php 
          require_once("../controlador/trae_categorias_noticias.php");
          for($i=0;$i<sizeof($cat);$i++){
          ?>
            <option value="<?php echo utf8_encode($cat[$i]["ID_CATEGORIA"]); ?>"><?php echo  utf8_encode($cat[$i]["CATEGORIA"]); ?></option> 
          <?php 
          }
          ?>
           </select>
          </div>
         </div>
          <br/>
          <br/>
          <div class="form-group">
            <div id="mensaje_error" class="col-sm-8 col-md-6">
             
            </div>
          </div>
          <br/>
          <div class="form-group">
            <div class="col-sm-10 col-md-8">
              <input type="button" class="btn btn-success" onclick="Validar_Noticia();" value="Cargar Noticia">
              
              <input type="button" class="btn btn-primary" onclick="Limpiar_Form();" value="Limpiar Formulario">
              <input type="button" class="btn btn-danger" onclick="window.location='../vistas/administra.php';" value="Volver">
            </div>
          </div>
      </form>
    </div>
</div>

</div>

  </section>
  

    
  </div><!-- fin fila principal -->

</div><!-- final del contenedor general -->





<script src="../diseño/js/jquery-1.11.2.min.js"></script> 
<script src = "../diseño/js/bootstrap.min.js"></script>
<script src="../diseño/selectstyles/dist/js/bootstrap-select.js"></script>
</body>
</html>
<?php 
}else{
  echo "<script type='text/javascript'>alert('Necesita iniciar sesi\u00f3n para ver esta secci\u00f3n.');window.location='../ingreso.php';</script>";
}
?>