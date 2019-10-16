<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbName="komal";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
$sql = "SELECT * from top_odi_wicket_takers where id=".$_GET['id'];
$result = $conn->query($sql);

$row=mysqli_fetch_row($result);

//echo "<pre>";
//print_r($row);
?>

<html>
<head>
 
  <script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      title:{
        text: "graph chart at dataSeries",
        fontSize: 20
      },
     
      data: [
       {        
         type: "column",
         indexLabel: "{x}, {y}",
         indexLabelPlacement: "outside",  
         indexLabelOrientation: "horizontal",
         dataPoints: [
           { x: 20, y: 596 },          
           { x: 30, y: 448 },
           { x: 40, y: 393 },
           { x: 50, y: 377 }            
         ]
       }
      ]
    });

    chart.render();
  }
  </script>
 <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script></head>
<body>
  <center><div id="chartContainer" style="height: 400px; width: 40%;">
    <div class="chart-list">
        <p>x:20,y:596</p>
        <p>x:30,y:448</p>
        <p>x:40,y:393</p>
        <p>x:50,y:377</p>          
  </div>
  </center></div>
</body>
</html>
