 <?php

@$nombre = addslashes($_POST['nombre']);
@$email = addslashes($_POST['email']);
@$asunto = addslashes($_POST['asunto']);
@$mensaje = addslashes($_POST['mensaje']);

$to="girlcarolay@hotmail.com";//MODIFICAR POR EL C.C
$nombre= "De:$nombre";
$email= "Correo: $email";
$asunto= "Asunto $asunto";
$mensaje= "Mensaje: $mensaje";

/*<table border='0' cellspacing='2' cellpadding='2'>
  <tr>
    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Nombre:</strong></td>
    <td width='80%' align='left'>$nombre</td>
  </tr>
  <tr>
    <td align='center' bgcolor='#FFFFCC'><strong>E-mail:</strong></td>
    <td align='left'>$email</td>
  </tr>
   <tr>
    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Asunto:</strong></td>
    <td width='80%' align='left'>$asunto</td>
  </tr>
  <tr>
    <td align='center' bgcolor='#FFFFCC'><strong>Mensaje:</strong></td>
    <td align='left'>$mensaje</td>
  </tr>
</table>*/
"\n";
"Nombre: $nombre\n";
"Email: $email\n";
"Aunto: $asunto\n";
"Mensaje: $mensaje\n";
"\n";

if (@mail ($to,$asunto,$mensaje,$nombre)){ 

die ("<script languaje='Javascript'>alert('Mensaje enviado correctamente');</script>");
} else {
die ("<script languaje='Javascript'>alert('Su mensaje no pudo ser enviado');</script>");
}
?>