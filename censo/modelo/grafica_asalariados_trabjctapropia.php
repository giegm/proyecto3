<?php 
require_once("conecta.php");
require_once("clasesdeconsulta/class_trabajo_cuenta_propia.php");
require_once("clasesdeconsulta/class_asalariados.php");
require_once("clasesdeconsulta/class_desempleados.php");
$obja=new Personas_trabajo_propio();
$objb=new Personas_asalariados();
$objc=new Personas_desempleadas();
$var1= $obja->get_total_trabajo_propio();
$var2= $objb->get_total_asalariados();
$var3= $objc->get_total_desempleados();
include ("jpgraph/jpgraph/src/jpgraph.php"); 
include ("jpgraph/jpgraph/src/jpgraph_pie.php"); 
include ("jpgraph/jpgraph/src/jpgraph_pie3d.php"); 

$data = array("$var1","$var2","$var3"); 

$graph = new PieGraph(450,250,"auto"); 
$graph->img->SetAntiAliasing(); 
$graph->SetMarginColor('gray'); 
//$graph->SetShadow(); 

// Setup margin and titles 
$graph->title->Set("Trabajadores y Personas Desempleadas"); 

$p3 = new PiePlot3D($data); 
$p3->SetSize(0.35); 
$p3->SetCenter(0.5); 

// Setup slice labels and move them into the plot 
$p3->value->SetFont(FF_FONT1,FS_BOLD); 
$p3->value->SetColor("black"); 
$p3->SetLabelPos(0.4); 

$nombres=array("Por cuenta propia ($var1)","Asalariados ($var2)","Desempleadas ($var3)"); 
$p3->SetLegends($nombres); 

// Explode all slices 
$p3->ExplodeAll(); 

$graph->Add($p3); 
$graph->Stroke(); 

?>