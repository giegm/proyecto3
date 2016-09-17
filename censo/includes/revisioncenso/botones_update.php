								<?php 
								/*CONTROL DE CONTENIDO PARA LOS USUARIOS LOGUEADOS*/
								/*CASO 1: USUARIO ADMINISTRADOR*/
								if($_SESSION["sesion_perfil"]==1){
								?>

								<!--<input type="button" class="btn btn-success" name="btn-censo-familia" onClick="Validar_censo();" value="Guardar datos">-->
								<input type="button" class="btn btn-success" name="btn-censo-familia" onClick="Validar_censo();" value="Guardar datos">
								<a href="../vistas/listadocensos.php" type="button" class="btn btn-danger" name="btn-censo-cancela" id="cancelar">Volver</a>
								<?php  
								}
								?>

								<?php 
								/*CONTROL DE CONTENIDO PARA LOS USUARIOS LOGUEADOS*/
								/*CASO 2: USUARIO PUBLICADOR*/
								if($_SESSION["sesion_perfil"]==2){
								?>
								<a href="../vistas/listadocensos.php" type="button" class="btn btn-danger" name="btn-censo-cancela" id="cancelar">Volver</a>
								<?php  
								}
								?>

								<?php 
								/*CONTROL DE CONTENIDO PARA LOS USUARIOS LOGUEADOS*/
								/*CASO 3: USUARIO CONSULTOR*/
								if($_SESSION["sesion_perfil"]==3){
								?>
								<a href="../vistas/listadocensos.php" type="button" class="btn btn-danger" name="btn-censo-cancela" id="cancelar">Volver</a>
								<?php  
								}
								?>