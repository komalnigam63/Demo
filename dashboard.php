welcome admin
<br><br> 
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
if(isset($_POST['submit'])){
$name = $_POST['name'];
$last_name= $_POST['last_name'];
$email= $_POST['email'];
$age= $_POST['age'];
$gender= $_POST['gender'];
$hobbies= $_POST['hobbies'];
$address= $_POST['address'];

//name,last_name,email,password,age,gender,hobbies,address
 $sql = "INSERT INTO studentdetails (`name`,`last_name`,`email`,`password`,`age`,`gender`,`hobbies`,`address`,`registrationDate`) VALUES ('".$name."','".$last_name."','".$email."','".$password."','".$age."','".$gender."','".$hobbies."','".$address."','".date("Y/m/d")."')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Student Registration Form</title>
<style>
input,textarea{width:200px}
input[type=radio],input[type=checkbox]{width:10px}
input[type=submit],input[type=reset]{width:100px}
.table{
  border:1px solid;
}
th, td {
  padding: 7px;
  text-align: left;    
}
</style>
</head>

<body>
<a href="http://localhost/komal/demo/dashboard.php?class=class1">class1</a><br>
<a href="http://localhost/komal/demo/dashboard.php?class=class2">class2</a><br>
<a href="http://localhost/komal/demo/dashboard.php?class=class3">class3</a><br>
<a href="http://localhost/komal/demo/dashboard.php?class=class4">class4</a><br>
<a href="http://localhost/komal/demo/dashboard.php?class=class5">class5</a><br>
<a href="http://localhost/komal/demo/dashboard.php?class=class6">class6</a><br>
<a href="http://localhost/komal/demo/dashboard.php?class=class7">class7</a><br>
<a href="http://localhost/komal/demo/dashboard.php?class=class8">class8</a><br>
<a href="http://localhost/komal/demo/dashboard.php?class=class9">class9</a><br>
<a href="http://localhost/komal/demo/dashboard.php?class=class10">class10</a><br>
<table class="table">
    <div class="container">
  <h2>table</h2>
  <thead> 
<tr> 
      <th>id</th>
      <th>First name</th> 
      <th>Last name</th> 
      <th>Email</th>
      <th>Age</th>
      <th>Gender</th>
      <th>Hobbies</th>
      <th>Address</th>
      <th>classes</th>
    </tr> 
    </thead>
    
    <tbody>
<?php 
$cls = $_REQUEST['class'];

if($cls!=''){

$sql = "SELECT * from studentdetails where classes='".$cls."'";
$result = $conn->query($sql);
foreach ($result as $value) { ?>

 <tr> 
    <td><?php echo $value['id']; ?></td> 
    <td><?php echo $value['name']; ?> </td> 
    <td><?php echo $value['last_name']; ?></td> 
    <td><?php echo $value['email'];?> </td>
    <td><?php echo $value['age'];?> </td>
    <td><?php echo $value['gender'];?> </td>
    <td><?php echo $value['hobbies'];?> </td>
    <td><?php echo $value['address'];?> </td>
    
    <td><?php echo $value['classes']; ?> </td>  
    </tr>

<?php }

}
?>

 
</tbody>
</table>

</body>

</html>
  
