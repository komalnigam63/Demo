<?php
 
$dataPoints = array(
	array("label"=> "Class1", "y"=> 590),
	array("label"=> "Class2", "y"=> 261),
	array("label"=> "Class3", "y"=> 158),
	array("label"=> "Class4", "y"=> 72),
	array("label"=> "Class5", "y"=> 191),
	array("label"=> "Class6", "y"=> 573),
	array("label"=> "Class7", "y"=> 126),
    array("label"=> "Class6", "y"=> 573),
	array("label"=> "Class6", "y"=> 273),
	array("label"=> "Class6", "y"=> 173),
);
	
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "class piechart"
	},
	subtitles: [{
		text: "piechart (฿)"
	}],
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 20,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "฿#,##0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>           