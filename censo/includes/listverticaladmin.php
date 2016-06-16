<div id="col-btn-list-verticaladmin">
	<!-- Brand and toggle get grouped for better mobile display -->
	
	<div class="navbar-header">
		<button id="btn-list-vertical-admin-responsive" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span id="icono-btn-responsive-listverticaladmin" class="sr-only">Toggle navigation</span>
			<span id="icono-btn-responsive-listverticaladmin" class="icon-bar"></span>
			<span id="icono-btn-responsive-listverticaladmin" class="icon-bar"></span>
			<span id="icono-btn-responsive-listverticaladmin" class="icon-bar"></span>
		<h4 class="visible-xs" id="texto-operaciones-admin-btn-listverticaladmin">Operaciones</h4>
		</button>
	</div>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse" id="div-btn-responsive-listverticaladmin">
		<ul class="nav nav-sidebar">
				<?php
				/*CONTROL DE CONTENIDO PARA LOS USUARIOS LOGUEADOS*/
				/*CASO 1: USUARIO ADMINISTRADOR*/
				if($_SESSION["sesion_perfil"]==1){
				?>
				<li role="presentation"><a href="../vistas/administra.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Inicio&nbsp;&nbsp;</a></li>
				<li role="presentation"><a href="../vistas/censarfamilia.php"><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;Censar Familias</a></li>
				<li role="presentation"><a href="../vistas/consultas.php"><i class="fa fa-book"></i>&nbsp;&nbsp;Consultas&nbsp;&nbsp;&nbsp;</a></li>
				<li role="presentation"><a href="../vistas/listadocensos.php"><img src="../img/iconos/listado2.png">&nbsp;&nbsp;Listado de Censos</a></li>
				<li role="presentation"><a href="../vistas/noticias.php"><img src="../img/iconos/noticias.png">&nbsp;&nbsp;Noticias Web</a></li>
				<li role="presentation"><a href="../vistas/listado_de_noticias.php"><img src="../img/iconos/noticias.png">&nbsp;&nbsp;Listado de noticias</a></li>
				<?php
				}
				?>

				<?php
				/*CASO 2: USUARIO OPERADOR*/
				if($_SESSION["sesion_perfil"]==2){
				?>
				<li role="presentation"><a href="../vistas/administra.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Inicio&nbsp;&nbsp;</a></li>
				<li role="presentation"><a href="../vistas/censarfamilia.php"><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;Censar Familias</a></li>
				<li role="presentation"><a href="../vistas/consultas.php"><i class="fa fa-book"></i>&nbsp;&nbsp;Consultas&nbsp;&nbsp;&nbsp;</a></li>
				<li role="presentation"><a href="../vistas/listadocensos.php"><img src="../img/iconos/listado2.png">&nbsp;&nbsp;Listado de Censos</a></li>				<?php
				}
				?>

				<?php
				/*CASO 3: USUARIO PUBLICADOR*/
				if($_SESSION["sesion_perfil"]==3){
				?>
				<li role="presentation"><a href="../vistas/administra.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Inicio&nbsp;&nbsp;</a></li>
				<li role="presentation"><a href="../vistas/noticias.php"><img src="../img/iconos/noticias.png">&nbsp;&nbsp;Noticias Web</a></li>		
				<li role="presentation"><a href="../vistas/listado_de_noticias.php"><img src="../img/iconos/noticias.png">&nbsp;&nbsp;Listado de noticias</a></li>
				<?php
				}
				?>
		</ul>
	</div><!-- /.navbar-collapse -->


	
</div>