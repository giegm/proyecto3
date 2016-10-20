<?php 
session_start();
session_unset("sesion_usuario");
//session_unset("sesion_perfil");
session_destroy();
echo "<script type='text/javascript'>alert('Su sesi\u00f3n ha sido cerrada'); window.location='../ingreso.php';</script>";
?>