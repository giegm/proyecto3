<?php 
require_once("conecta.php");
require_once("clasesdeconsulta/class_mayor_de_edad.php");
$obje=new Mayores_edad();
$mayor1= $obje->get_mayores_de_edad_familiares();
$mayor2= $obje->get_mayores_de_edad_jefes();
include ("jpgraph/jpgraph/src/jpgraph.php"); 
include ("jpgraph/jpgraph/src/jpgraph_pie.php"); 
include ("jpgraph/jpgraph/src/jpgraph_pie3d.php"); 

$data = array("$mayor1","$mayor2"); 

$graph = new PieGraph(450,250,"auto"); 
$graph->img->SetAntiAliasing(); 
$graph->SetMarginColor('gray'); 
//$graph->SetShadow(); 

// Setup margin and titles 
$graph->title->Set("Mayores de Edad"); 

$p1 = new PiePlot3D($data); 
$p1->SetSize(0.35); 
$p1->SetCenter(0.5); 

// Setup slice labels and move them into the plot 
$p1->value->SetFont(FF_FONT1,FS_BOLD); 
$p1->value->SetColor("black"); 
$p1->SetLabelPos(0.4); 

$nombres=array("Membros de familia ($mayor1)","Jefes de familia ($mayor2)"); 
$p1->SetLegends($nombres); 

// Explode all slices 
$p1->ExplodeAll(); 

$graph->Add($p1); 
$graph->Stroke(); 

?>