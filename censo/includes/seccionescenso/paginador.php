<?php

$RegistrosAMostrar=4;

//estos valores los recibo por GET
if(isset($_GET['pag'])){
    $RegistrosAEmpezar=($_GET['pag']-1)*$RegistrosAMostrar;
    $PagAct=$_GET['pag'];
    //caso contrario los iniciamos
}else{
    $RegistrosAEmpezar=0;
    $PagAct=1;
}


$res=$tra->get_censos($RegistrosAEmpezar,$RegistrosAMostrar);
echo "<table border='1px'>";
    echo "<tr>";
    echo "<td>".$res[0]['ID_CENSO']."</td>";;
    echo "<td>".$res[0]['FECHA_CENSO']."</td>";
    echo "<td>".$res[0]['HORA_CENSO']."</td>";
    echo "<td>".$res[0]['CI']."</td>";
    echo "</tr>";

echo "</table>";

$total2=$tra->total_censos();
$PagAnt=$PagAct-1;
$PagSig=$PagAct+1;
$PagUlt=$total2%$RegistrosAMostrar;

//verificamos residuo para ver si llevará decimales
$Res=$total2%$RegistrosAMostrar;
// si hay residuo usamos funcion floor para que me
// devuelva la parte entera, SIN REDONDEAR, y le sumamos
// una unidad para obtener la ultima pagina
if($Res>0) $PagUlt=floor($PagUlt)+1;

//desplazamiento
echo "<a onclick=\"Pagina('1')\">Primero</a> ";
if($PagAct>1) echo "<a onclick=\"Pagina('$PagAnt')\">Anterior</a> ";
echo "<strong>Pagina ".$PagAct."/".$PagUlt."</strong>";
if($PagAct<$PagUlt)  echo " <a onclick=\"Pagina('$PagSig')\">Siguiente</a> ";
echo "<a onclick=\"Pagina('$PagUlt')\">Ultimo</a>";
?>