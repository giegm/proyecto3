<?php 
session_start();
session_unset("sesion_usuario");
//session_unset("sesion_perfil");
session_destroy();
echo "<script type='text/javascript'>alert('Ud ha finalizado sesión'); window.location='../ingreso.php';</script>";
?>