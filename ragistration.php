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
$password= $_POST['password'];
$age= $_POST['age'];
$gender= $_POST['gender'];
$hobbies= $_POST['hobbies'];
$address= $_POST['address'];
$classes= $_POST['classes'];
//name,last_name,email,password,age,gender,hobbies,address
 $sql = "INSERT INTO studentdetails (`name`,`last_name`,`email`,`password`,`age`,`gender`,`hobbies`,`address`,`registrationDate`,`classes`) VALUES ('".$name."','".$last_name."','".$email."','".$password."','".$age."','".$gender."','".$hobbies."','".$address."','".date("Y/m/d")."','".$classes."')";
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
<form method="POST" name="studentdetails" action="">
  <h1>student Registration Form</h1>
<table width="393" border="1">
 <tr>
 	<td colspan="2"><?php echo @$msg; ?></td>
 </tr>
  <tr>
    <td width="159">Enter your First Name</td>
    <td width="218">
	<input type="text" placeholder="your first name"  name="name" pattern="[a-z A-Z]*" required ></td>
  </tr>
  <tr>
    <td>Enter your Last Name</td>
    <td>
  <input type="text" placeholder="your last name"  name="last_name" required ></td>
  </tr>
  <tr>
    <td>Enter your Email</td>
    <td><input type="email" name="email" required></td>
  </tr>
  <tr>
    <td>Enter your password</td>
    <td><input type="password" name="password" required></td>
  </tr>
  <tr>
    <td>Enter your Age</td>
    <td><input type="Age" name="age"></td>
     </tr>
  
  <tr>
    <td height="23">Select your Gender</td>
    <td>
  Male<input type="radio" name="gender" value="m">
  Female<input type="radio" name="gender" value="f">
  </td>
  </tr>
  <tr>
    <td>Choose your Hobbies</td>
    <td>
    Cricket<input type="checkbox" value="cricket" name="hobbies">
    Singing<input type="checkbox" value="singing" name="hobbies">
    Dancing<input type="checkbox" value="dancing" name="hobbies">
  </td>
  </tr>
  <tr>
    <td>Enter your Address</td>
    <td><textarea name="address"></textarea></td>
  </tr>
  <tr>
    <td>select class</td>
    <td><select name="classes">
      <option value="class1">class1</option>
      <option value="class2">class2</option>
      <option value="class3">class3</option>
      <option value="class4">class4</option>
      <option value="class5">class5</option>
      <option value="class6">class6</option>
      <option value="class7">class7</option>
      <option value="class8">class8</option>
      <option value="class9">class9</option>
      <option value="class10">class10</option>
      </select></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
  <input type="submit" name="submit" value="Register page">
  <a href="adminlogin.php">Login</a>
  </td>
  </tr>
  <!-- <table class="table">
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
$sql = "SELECT * from studentdetails";
$result = $conn->query($sql);
foreach ($result as $value) { 

  ?>
    <tr> 
    <td><?php echo $value['id'];?></td> 
    <td><?php echo $value['name'];?></td> 
    <td><?php echo $value['last_name'];?></td> 
    <td><?php echo $value['email'];?></td>
    <td><?php echo $value['age'];?></td>
    <td><?php echo $value['gender'];?></td>
    <td><?php echo $value['hobbies'];?></td>
    <td><?php echo $value['address'];?></td>
    <td><?php echo $value['reg_date'];?></td>
    <td><?php echo $value['classes'];?></td>  
    </tr>

<?php } ?>
 </div>      
</tbody>
</table> -->
</form>
</body>
</html>
  
 