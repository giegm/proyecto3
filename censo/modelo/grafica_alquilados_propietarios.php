<?php 
require_once("conecta.php");
require_once("clasesdeconsulta/class_alquilados.php");
require_once("clasesdeconsulta/class_propietarios.php");
$obja=new Personas_propietarias();
$objb=new Personas_alquiladas();
$var1= $obja->get_total_propietarios();
$var2= $objb->get_total_alquiladas();
include ("jpgraph/jpgraph/src/jpgraph.php"); 
include ("jpgraph/jpgraph/src/jpgraph_pie.php"); 
include ("jpgraph/jpgraph/src/jpgraph_pie3d.php"); 

$data = array("$var1","$var2"); 

$graph = new PieGraph(450,250,"auto"); 
$graph->img->SetAntiAliasing(); 
$graph->SetMarginColor('gray'); 
//$graph->SetShadow(); 

// Setup margin and titles 
$graph->title->Set("Personas"); 

$p3 = new PiePlot3D($data); 
$p3->SetSize(0.35); 
$p3->SetCenter(0.5); 

// Setup slice labels and move them into the plot 
$p3->value->SetFont(FF_FONT1,FS_BOLD); 
$p3->value->SetColor("black"); 
$p3->SetLabelPos(0.4); 

$nombres=array("Propietarias ($var1)","Alquiladas ($var2)"); 
$p3->SetLegends($nombres); 

// Explode all slices 
$p3->ExplodeAll(); 
 
$graph->Add($p3); 
$graph->Stroke(); 

?>