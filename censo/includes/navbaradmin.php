<!-- Botonera de navegacion estandar para toda la pagina -->
<nav class="navbar navbar-default navbar-static-top" id="navbar-index">
  <div class="container-fluid" id="container-navbar-admin">
    <!-- btn responsive -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#btn-responsive" aria-expanded="false" aria-controls="btn-responsive">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../vistas/administra.php"><span class="nombre-sistema"><i>Sistema de control de Censo Demográfico y Socieconómico<i></span></a>
    </div>
    <!-- elementos navbar -->
    <div class="navbar-collapse collapse" id="btn-responsive">
     <ul class="nav navbar-nav navbar-right">

      <?php
      /*CONTROL DE CONTENIDO PARA LOS USUARIOS LOGUEADOS*/
      /*CASO 1: USUARIO ADMINISTRADOR*/
      if($_SESSION["sesion_perfil"]==1)
        {
        ?>

       <li><a href="../vistas/perfil.php?perfil=<?php echo $_SESSION["sesion_perfil"]; ?>"><i class="fa fa-user visible-sm visible-md"></i><span class="visible-xs visible-lg"><?php echo $_SESSION["sesion_usuario"];?></span></a></li>
       <li><a href="../controlador/logout.php"><i class="fa fa-power-off visible-sm visible-md"></i><span class="visible-xs visible-lg">Cerrar sesión</span></a></li>

       <?php
        }
       ?>

       <?php 
      /*CONTROL DE CONTENIDO PARA LOS USUARIOS LOGUEADOS*/
      /*CASO 2: USUARIO OPERADOR*/
      if($_SESSION["sesion_perfil"]==2)
        {
        ?>

       <li><a href="../vistas/perfil.php?perfil=<?php echo $_SESSION["sesion_perfil"]; ?>"><i class="fa fa-user visible-sm visible-md"></i><span class="visible-xs visible-lg"><?php echo $_SESSION["sesion_usuario"];?></span></a></li>
       <li><a href="../controlador/logout.php"><i class="fa fa-power-off visible-sm visible-md"></i><span class="visible-xs visible-lg">Cerrar sesión</span></a></li>

       <?php
        }
       ?>

       <?php
      /*CONTROL DE CONTENIDO PARA LOS USUARIOS LOGUEADOS*/
      /*CASO 3: USUARIO PUBLICADOR*/
      if($_SESSION["sesion_perfil"]==3)
        {
        ?>

       <li><a href="../vistas/perfil.php?perfil=<?php echo $_SESSION["sesion_perfil"]; ?>"><i class="fa fa-user visible-sm visible-md"></i><span class="visible-xs visible-lg"><?php echo $_SESSION["sesion_usuario"];?></span></a></li>
       <li><a href="../controlador/logout.php"><i class="fa fa-power-off visible-sm visible-md"></i><span class="visible-xs visible-lg">Cerrar sesión</span></a></li>

       <?php
        }
       ?>

      </ul>
      <!--<form class="navbar-form navbar-right" role="search">
        <div class="input-group">
          <input id="buscador-navbaradmin" type="text" class="form-control" placeholder="Busqueda rapida">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
          </span>
        </div>
      </form>-->
    </div><!-- fin del navbar-collapse -->
  </div><!-- fin del container-fluid -->
</nav>