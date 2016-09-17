<?php 
require_once("conecta.php");
require_once("clasesdeconsulta/class_mayor_a_sesenta.php");
$obje=new Mayores_sesenta();
$mayora= $obje->get_mayores_a_sesenta_jefes();
$mayorb= $obje->get_mayores_a_sesenta_familiares();
include ("jpgraph/jpgraph/src/jpgraph.php"); 
include ("jpgraph/jpgraph/src/jpgraph_pie.php"); 
include ("jpgraph/jpgraph/src/jpgraph_pie3d.php"); 

$data = array("$mayora","$mayorb"); 

$graph = new PieGraph(450,250,"auto"); 
$graph->img->SetAntiAliasing(); 
$graph->SetMarginColor('gray'); 
//$graph->SetShadow(); 

// Setup margin and titles 
$graph->title->Set("Mayores a Sesenta"); 

$p2 = new PiePlot3D($data); 
$p2->SetSize(0.35); 
$p2->SetCenter(0.5); 

// Setup slice labels and move them into the plot 
$p2->value->SetFont(FF_FONT1,FS_BOLD); 
$p2->value->SetColor("black"); 
$p2->SetLabelPos(0.4); 

$nombres=array("Jefes de familia ($mayora)","Miembros de Familia ($mayorb)"); 
$p2->SetLegends($nombres); 

// Explode all slices 
$p2->ExplodeAll(); 

$graph->Add($p2); 
$graph->Stroke(); 

?>