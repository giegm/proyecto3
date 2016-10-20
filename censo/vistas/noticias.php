<?php 
require_once("../modelo/clasedelogin/class_login.php");
if(isset($_SESSION["sesion_usuario"])){
//print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Sistema de Control de Censo Demográfico y Socieconómico|Noticias</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../diseño/estilos.css">
    <link rel="stylesheet" href="../diseño/css/bootstrap.css">
    <link rel="stylesheet" href="../diseño/iconos/css/font-awesome.css">
    <link rel="stylesheet" href="../diseño/selectstyles/dist/css/bootstrap-select.css">
    <link rel="stylesheet" type="text/css" href="css/requerido.css">
    <script src="../js/validar_carga_noticia.js" type="text/javascript"></script>
    <link rel="shortcut icon" href="../img/ccsantaines.ico">
  </head>
<body>
  <script language="JavaScript" type="text/javascript">
    function click(){
    if(event.button==2){
    alert('Esta acción no está permitida');
    }
    }
    document.onmousedown=click
    //-->
  </script>
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
   
<div class="col-md-10 col-admin-central">
      
      <h1 class="page-header pageheader-general">Agregar noticia</h1>
      <div class="col-md-12 well">
      <?php 
      include("../includes/seccionesdenoticia/agrega_noticia.php");
      ?>
      </div>

</div>

    
</div><!-- fin fila principal -->

</div><!-- final del contenedor general -->

<script src="../diseño/js/jquery-1.11.2.min.js"></script> 
<script src = "../diseño/js/bootstrap.min.js"></script>
<script src="../diseño/selectstyles/dist/js/bootstrap-select.js"></script>
<script src="js/requerido.js"></script>
</body>
</html>
<?php 
}else{
  echo "<script type='text/javascript'>alert('necesita iniciar sesión para ver esta sección.');window.location='../ingreso.php';</script>";
}
?>