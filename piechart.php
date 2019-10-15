<?php
if($_GET['id']){
include 'conn.php';

$sql = "SELECT * from Social_Category_Details where id=".$_GET['id'];
$result = $conn->query($sql);

$row=mysqli_fetch_row($result);

//echo "<pre>";
//print_r($row);


}else{

  echo "enter id.";
}


?>
<!DOCTYPE html>
<html>
  <head>
    <style>
    html, body, #container {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}
.chart-list{
  text-align: center;
  width:100%;
  margin-bottom: 40px;
}
 </style>

       <title>JavaScript Pie Chart</title>
      <script src="https://cdn.anychart.com/js/8.0.1/anychart-core.min.js"></script>
      <script src="https://cdn.anychart.com/js/8.0.1/anychart-pie.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div id="container" style="width: 100%; height: 100%"></div>


    <script>
  anychart.onDocumentReady(function() {

    // set the data
      var data = [
        {x: "BC", value: <?php echo $row[1]; ?>},
        {x: "OC", value: <?php echo $row[2]; ?>},
        {x: "SC", value: <?php echo $row[3]; ?>},
        {x: "ST", value: <?php echo $row[4]; ?>},
        {x: "Others", value: <?php echo $row[5]; ?>},
        
      ];

      // create the chart
      var chart = anychart.pie();

     // set the chart title
    chart.title("Pie Chart");

    // add the data
    chart.data(data);
    
    // set legend position
   chart.legend().position("top");
    // set items layout
   chart.legend().itemsLayout("horizontal");

    // display the chart in the container
    chart.container('container');
    chart.draw();

  });

</script>
  <div class="chart-list">
        <p>41.6% BC</p>
        <p>30.6% Oc</p>
        <p>19.5% SC</p>
        <p>4.5% ST</p>
        <p>3.8% Others</p>       
  </div>
  </body>
</html>

