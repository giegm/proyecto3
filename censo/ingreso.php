<?php 
session_start();
if(isset($_SESSION["sesion_usuario"]) and isset($_SESSION["sesion_perfil"]))
{
	header('location:vistas/administra.php');
}
else
{
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Sistema de Control de Censo Demográfico y Socieconómico</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="diseño/estilos.css">
		<link rel="stylesheet" href="diseño/css/bootstrap.css">
		<link rel="stylesheet" href="diseño/iconos/css/font-awesome.css">
		<link rel="stylesheet" href="diseño/octicons/octicons.css">
		<link rel="shortcut icon" href="img/ccsantaines.ico">
	</head>
<body background="img/bandera.jpg">
	<center><h1><b>Sistema de Control de Censo Demográfico y Socieconómico</b></h1></center>
<div class="container" id="form-login-admin">
	<center><h3>Consejo Comunal</h3><img src="../images/logo.png" width="70" height="70" class="img-rounded"></center>
	<center><h4>"Santa Inés"</h4></center>	
	<div class="row">
	
		<div class="col-xs-12 well" id="col-form-login">
		<?php 
		if($_SERVER["REQUEST_METHOD"]=='GET'){//SI EXISTE ALGUN ENVIO VIA GET ENTONCES
			if(isset($_GET["err"]) and $_GET["err"]==1){
				?>
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Asegurese de no dejar ningún campo vacío.</strong>
				</div>
				
				<?php
			}

			if(isset($_GET["err"]) and $_GET["err"]==2){
				?>
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Los datos ingresados no existen en la base de datos</strong>
				</div>
				<?php
			}

			if(isset($_GET["err"]) and $_GET["err"]==3){
				?>
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Los datos ingresados no son validos.</strong>
				</div>
				<?php
			}

			if(isset($_GET["err"]) and $_GET["err"]==4){
				?>
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Su usuario se encuentra suspendido, pongase en contacto con el administrador del sistema.</strong>
				</div>
				<?php
			}
		}
		?>
					
			<form action="controlador/procesa_login.php" method="POST">

					<div class="form-group">
						
						<legend>Iniciar Sesión</legend>

					</div>
				
					<div class="form-group">
					<div class="input-group">
       				<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" name="nameuser" class="form-control" id="inputs-login" placeholder="Nombre">
					</div>			
					</div>

					<div class="form-group">
					<div class="input-group">
       				<span class="input-group-addon"><span class="octicon octicon-key"></span></span>
						<input type="password" name="passuser" class="form-control" id="inputs-login" placeholder="Contraseña">
					</div>
					</div>

					<div class="form-group">
				
						<button type="submit" class="btn btn-default btn-block" id="btn-login-submit" name="loginbtn">Ingresar</button>
			
					</div>				
			</form>

		</div>

	</div>

</div>

<script src="diseño/js/jquery-1.11.2.min.js"></script> 
<script src = "diseño/js/bootstrap.min.js"></script>
</body>
</html>
	<?php
}
?>