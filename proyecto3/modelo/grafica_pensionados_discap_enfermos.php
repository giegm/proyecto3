<?php 
require_once("conecta.php");
require_once("clasesdeconsulta/class_enfermedades_graves.php");
require_once("clasesdeconsulta/class_discapacitados.php");
require_once("clasesdeconsulta/class_pensionados.php");
$obja=new Pers_enfermedad_grave();
$objb=new Personas_discapacitadas();
$objc=new Personas_pensionadas();
$var1= $obja->get_total_enfermo_grave();
$var2= $objb->get_total_discapacitados();
$var3= $objc->get_total_pensionados();
include ("jpgraph/jpgraph/src/jpgraph.php"); 
include ("jpgraph/jpgraph/src/jpgraph_pie.php"); 
include ("jpgraph/jpgraph/src/jpgraph_pie3d.php"); 

$data = array("$var1","$var2","$var3"); 

$graph = new PieGraph(490,250,"auto"); 
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

$nombres=array("Enfermedades graves ($var1)","Discapacitados ($var2)","Pensionados ($var3)"); 
$p3->SetLegends($nombres); 

// Explode all slices 
$p3->ExplodeAll(); 

$graph->Add($p3); 
$graph->Stroke(); 

?>