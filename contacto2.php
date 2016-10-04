	 <?php

 if(!empty($_POST['nombre']) AND !empty($_POST['email']) AND !empty($_POST['asunto'])){

$para="girlcarolay1804@gmail.com";//MODIFICAR POR EL DE LA EMPRESA
$headers = "Content-Type: text/html; charset=iso-8859-1\n"; 
$headers .= "From:".$_POST['nombre']."\r\n";			
$tema="Contacto desde el Sitio Web";
$mensaje="
<table border='0' cellspacing='2' cellpadding='2'>
  <tr>
    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Nombre:</strong></td>
    <td width='80%' align='left'>$_POST[nombre]</td>
  </tr>
  <tr>
    <td align='center' bgcolor='#FFFFCC'><strong>E-mail:</strong></td>
    <td align='left'>$_POST[email]</td>
  </tr>
   <tr>
    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Asunto</strong></td>
    <td width='80%' align='left'>$_POST[asunto]</td>
  </tr>
  <tr>
    <td align='center' bgcolor='#FFFFCC'><strong>Comentario:</strong></td>
    <td align='left'>$_POST[mensaje]</td>
  </tr>
</table>
";
if (mail ($para,$tema,$mensaje,$headers)){ 

die ("<script>alert('Su mensaje fue enviado correctamente, le responderemos lo mas pronto posible.');location.href ='contacto.php';</script>");
} else {
die ("<script languaje='Javascript'>alert('Su mensaje no pudo ser enviado.');location.href ='contacto.php';</script>");
}
}
?>			