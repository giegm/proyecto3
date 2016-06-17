<div class="panel panel-danger">
    <div class="panel-heading">
      <h3 class="panel-title">Agregar noticia</h3>
    </div>
    <div class="panel-body">
      <form action="../controlador/procesa_noticia.php" method="POST" class="form-horizontal" enctype="multipart/form-data" name="form" role="form">
          
          <div class="form-group">
          <label style="text-align: left" class="control-label col-sm-1 col-md-1">Imagen</label>
         
          <div class="col-sm-7 col-md-6">
          <input type="file" class="form-control" name="imagen_noticia" id="imagen_noticia" value="">
          </div>
         </div>

         <div class="form-group">
          <label style="text-align: left" class="control-label col-sm-1 col-md-1">Título</label>
         
          <div class="col-sm-7 col-md-6">
          <input type="text" class="form-control" name="titulo_noticia" value="">
          </div>
         </div>

         <div class="form-group">
          <label style="text-align: left" class="control-label col-sm-2 col-md-2">Fecha de Notícia</label>
         
          <div class="col-sm-4 col-md-3">
          <input type="date" class="form-control" name="fecha_noticia" value="">
          </div>
         </div>

         <div class="form-group">
          <label style="text-align: left" class="control-label col-sm-2 col-md-2">Descripción</label>
         
          <div class="col-sm-4 col-md-4">
          <textarea name="descrip_noticia"></textarea>
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