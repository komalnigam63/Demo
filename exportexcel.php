
<html>
<head>
<style type="text/css">

.table{
	border: 1px solid;
}
td {
  padding: 10px;  
}
</style>
<link href="export_style.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div id="wrapper">

<div id="table_div">
<form method="post" action="export_data.php">
	<table>
<table align=center cellspacing=5>
<tr>
<td><input type="text" name="name" placeholder="Enter Name"></td>
</tr>
<tr>
<td><input type="text" name="skills " placeholder="Enter skills"></td>
</tr>
<tr>
<td><input type="text" name="address" placeholder="Enter Address"></td>
</tr>
<tr>
<td><input type="text" name="gender" placeholder="Enter Gender"></td>
</tr>
<tr>
<td><input type="text" name="designation" placeholder="Enter designation"></td>
</tr>
<tr>
<td><input type="text" name="age" placeholder="Enter Age"></td>
</tr>
<tr>
<td><input type="text" name="image" placeholder="Enter image"></td>
</tr>


</table>
<center><input type="submit" name="save" value="submit"></center>
</table>
</form>

<center><form action="export_file.php" method="post">
	<input type="submit" name="export_data" value="EXPORT TO EXCEL">
</center></form>
<form class="form-inline" method="post" action="generate_pdf.php">
<button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i>
Generate PDF</button>
</form>


</div>
</body>
</html>
              