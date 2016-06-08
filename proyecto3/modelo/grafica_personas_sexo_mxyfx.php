<?php 
require_once("conecta.php");
require_once("clasesdeconsulta/class_sexo_femenino.php");
require_once("clasesdeconsulta/class_sexo_masculino.php");
$obje=new Sexo_femenino();
$obje2=new Sexo_masculino();
$sexof= $obje->get_sexo_femenino();
$sexom= $obje2->get_sexo_masculino();
include ("jpgraph/jpgraph/src/jpgraph.php"); 
include ("jpgraph/jpgraph/src/jpgraph_pie.php"); 
include ("jpgraph/jpgraph/src/jpgraph_pie3d.php"); 

$data = array("$sexom","$sexof"); 

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

$nombres=array("Sexo Masculino ($sexom)","Sexo Femenino ($sexof)"); 
$p3->SetLegends($nombres); 

// Explode all slices 
$p3->ExplodeAll(); 

$graph->Add($p3); 
$graph->Stroke(); 

?>