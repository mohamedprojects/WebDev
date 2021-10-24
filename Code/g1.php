<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_bar.php');
$cxn=mysqli_connect("localhost","root","","site") or die("error");
$datay=array(550,1005,1500,2000);
$query="select * from populatione";
$res=mysqli_query($cxn,$query);
$names=[];
$arr=[];
while ($ligne=mysqli_fetch_assoc($res)){
	array_push($names, $ligne["provinces"]);
	array_push($arr, $ligne["population"]);

}

// Create the graph. These two calls are always required
$graph = new Graph(500,300,'auto');
$graph->SetScale("textlin");

//$theme_class="DefaultTheme";
//$graph->SetTheme(new $theme_class());

// set major and minor tick positions manually
$graph->yaxis->SetTickPositions(array(2000,4000,6000,8000,10000,12000), array(3000,5000,7000,9000,1100));
$graph->SetBox(false);

//$graph->ygrid->SetColor('gray');
$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels($names);
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

// Create the bar plots
$b1plot = new BarPlot($arr);

// ...and add it to the graPH
$graph->Add($b1plot);


$b1plot->SetColor("white");
$b1plot->SetWidth(45);
$graph->title->Set("Population légale selon provinces et préfectures de la région *100");

// Display the graph
$graph->Stroke();

?>
