<?php
 
$dataPoints = array(
	array("y" => 28, "label" => "Janauary"),
	array("y" => 15, "label" => "Feb"),
	array("y" => 22, "label" => "March"),
	array("y" => 7, "label" => "April"),
	array("y" => 10, "label" => "May"),
	array("y" => 1, "label" => "June"),
	array("y" => 20, "label" => "July"),
	array("y" => 24, "label" => "August"),
	array("y" => 10, "label" => "September"),
	array("y" => 30, "label" => "October"),
	array("y" => 29, "label" => "November"),
	array("y" => 40, "label" => "December"),
);
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "Line graph for week"
	},
	axisY: {
		title: "Number of weeks"
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 440px; width: 80%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                  