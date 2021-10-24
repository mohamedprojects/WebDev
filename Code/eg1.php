<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_bar.php');
$cxn=mysqli_connect("localhost","root","","site") or die("error");
$data1y=array(550,1005,1500,2000);
$data2y=array(550,1005,1500,2000);

$query="select * from educatione";
$res=mysqli_query($cxn,$query);
$names=[];
$arr=[];
$na=[];
while ($ligne=mysqli_fetch_assoc($res)){
	array_push($names, $ligne["provinces"]);
	array_push($arr, $ligne["garcon"]);
	array_push($na, $ligne["fille"]);
}



// Create the graph. These two calls are always required
$graph = new Graph(500,300,'auto');
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);

$graph->yaxis->SetTickPositions(array(500,1000,1500,2000,2500,3000), array(250,750,1250,1750,2250));
$graph->SetBox(false);

$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels($names);
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

// Create the bar plots
$b1plot = new BarPlot($arr);
$b2plot = new BarPlot($na);


// Create the grouped bar plot
$gbplot = new GroupBarPlot(array($b1plot,$b2plot));
// ...and add it to the graPH
$graph->Add($gbplot);


$b1plot->SetColor("white");
$b1plot->SetFillColor("#cc1111");

$b2plot->SetColor("white");
$b2plot->SetFillColor("#11cccc");


$graph->title->Set("Population légale selon provinces 2019/2020");

// Display the graph
$graph->Stroke();
?>