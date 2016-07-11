<?php require_once('conexion.php');
$cn=  Conectarse();
$listado=  mysqli_query($cn,"select C.*, DP.CI from censos as C, datos_personales as DP where C.ID_JEFE=DP.ID_DATAPERSONAL");
?>

 <script type="text/javascript" language="javascript" src="js/jslistadopaises.js"></script>



<div class="panel panel-default" id="paneles-censo">
    <div class="panel-heading" id="cabecera-panel-listado-de-censos">
      <h3 class="panel-title">Lista general</h3>
    </div>
    <div class="panel-body">
      <div class="table-responsive">
  <table class="table table-bordered table-striped " id="tabla_lista_paises">
    <thead>
                    <tr>
                        <th>CODIGO</th><!--Estado-->
                        <th>FECHA DE CENSO</th>
                        <th>HORA DE CENSO</th><!--Estado-->
                        <th>CEDULA</th>
                        <th>REVISAR</th>
                        <th>OPERACIÓN</th>
                        <th>REPORTE</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                       
                     
                    </tr>
                </tfoot>
    <tbody>
                    <?php

     
                   while($reg=mysqli_fetch_array($listado))
                   {
                               echo '<tr>';
                               echo '<td>'.mb_convert_encoding($reg['ID_CENSO'], "UTF-8").'</td>';
                               echo '<td>'.mb_convert_encoding($reg['FECHA_CENSO'], "UTF-8").'</td>';
                               echo '<td>'.$reg['HORA_CENSO'].'</td>';
                               echo '<td>'.$reg['CI'].'</td>';
                               ?>
                               <td><a type="button" class="btn btn-success" href="javascript::void(0);" onclick="window.location='../vistas/revisar_censo.php?id=<?php echo $reg["ID_JEFE"]; ?>';">Revisar</a></td>
                               <td><a type="button" class="btn btn-danger" href="javascript::void(0);" onclick="elimina_censo('../controlador/eliminar_censo.php?id=<?php echo $reg["ID_JEFE"]; ?>');">Eliminar</a></td>
                               <td><a type="button" class="btn btn-primary" href="../controlador/creapdf_censo.php?id=<?php echo $reg["ID_JEFE"]; ?>">Generar PDF</a></td>
                               <?php
                               echo '</tr>';
                     
                        }

                    ?>
                <tbody>

  </table>
</div>
    </div>
</div>


