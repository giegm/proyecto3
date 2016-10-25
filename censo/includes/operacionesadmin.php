<div class="col-md-4 columnas-opciones">

 	<?php
    /*CONTROL DE CONTENIDO PARA LOS USUARIOS LOGUEADOS*/
    /*CASO 1: USUARIO ADMINISTRADOR*/
    if($_SESSION["sesion_perfil"]==1)
    {
    ?>
				
	<span class="icon-admin"><i class="fa fa-users"></i></span>&nbsp;<a href="../vistas/censarfamilia.php" class="links-operaciones">Censar Familia</a>

</div>

<div class="col-md-4 columnas-opciones">
				
	<span class="icon-admin"><i class="fa fa-book fa-5x"></i></span>&nbsp;<a href="../vistas/consultas.php" class="links-operaciones">Consultas</a>
				
</div>

<div class="col-md-4 columnas-opciones">
				
	<span class="icon-admin"><i class="fa fa-list-alt fa-5x"></i></span>&nbsp;<a href="../vistas/listadocensos.php" class="links-operaciones">Listado de Censos</a>

	<?php
	}
	?>
	<?php
    /*CONTROL DE CONTENIDO PARA LOS USUARIOS LOGUEADOS*/
    /*CASO 2: USUARIO OPERADOR*/
    if($_SESSION["sesion_perfil"]==2)
    {
    ?>
				
	<span class="icon-admin"><i class="fa fa-users"></i></span>&nbsp;<a href="../vistas/censarfamilia.php" class="links-operaciones">Censar Familia</a>

</div>

<div class="col-md-4 columnas-opciones">
				
	<span class="icon-admin"><i class="fa fa-book fa-5x"></i></span>&nbsp;<a href="../vistas/consultas.php" class="links-operaciones">Consultas</a>
				
</div>

<div class="col-md-4 columnas-opciones">
				
	<span class="icon-admin"><i class="fa fa-list-alt fa-5x"></i></span>&nbsp;<a href="../vistas/listadocensos.php" class="links-operaciones">Listado de Censos</a>

	<?php
	}
	?>
	<?php
    /*CONTROL DE CONTENIDO PARA LOS USUARIOS LOGUEADOS*/
    /*CASO 3: USUARIO PUBLICADOR*/
    if($_SESSION["sesion_perfil"]==3)
    {
    ?>
				
	<span class="icon-admin"><i class="fa fa-user fa-5x"></i></span>&nbsp;<a href="../vistas/noticias.php" class="links-operaciones">Noticias web</a>

</div>

<div class="col-md-4 columnas-opciones">
				
	<span class="icon-admin"></i></span>&nbsp;
				
</div>

<div class="col-md-4 columnas-opciones">
				
	<span class="icon-admin"><i class="fa fa-book fa-5x"></i></span>&nbsp;<a href="../vistas/listado_de_noticias.php" class="links-operaciones">Listado de noticias</a>
	<?php
	}
	?>

</div>