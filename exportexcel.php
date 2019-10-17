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

?>
<html>
<head>

	<script  type="text/javascript">
$(document).ready(function() {
jQuery('#export-to-csv').bind("click", function() {
var target = $(this).attr('id');
switch(target) {
	case 'export-to-csv' :
	$('#hidden-type').val(target);
	//alert($('#hidden-type').val());
	$('#export-form').submit();
	$('#hidden-type').val('');
	break
}
});
    });
</script>
<style type="text/css">

.table{
	border: 1px solid;
	text-align: center;
}
th, td {
  padding: 7px;
  text-align: center;    
}
</style>
</head>
<body>

<h1>Export to php</h1>
 <center><form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" id="export-form">
						<input type="hidden" value='' id='hidden-type' name='ExportType'/>
					  </center></form>
                  <table id="" class="table table-striped table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Priority</th>
                        <th>Salary</th>
                  </tr>
                <tbody>
                 <tr>
                 	<td>shelesh</td>
                 	<td>good</td>
                 	<td>high</td>
                 	<td>12000</td>
                 </tr>
                 <tr>
                 	<td>goli</td>
                 	<td>bad</td>
                 	<td>low</td>
                 	<td>3000</td>
                 </tr>
                 <tr>
                 	<td>mohit</td>
                 	<td>good</td>
                 	<td>high</td>
                 	<td>45000</td>
                 </tr>
				 
                </tbody>
              </table>
              <br><br>          
                  <input type="submit" name="submit" value="Export">
          </body>
          </html>
              