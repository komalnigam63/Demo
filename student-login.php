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
$username = $_POST['username'];
$password= $_POST['password'];


//username,password
 $sql = "select * from studentdetails where email='".$username."' and password='".$password."'";
$result = $conn->query($sql);
$rowcount=mysqli_num_rows($result);
//print_r(count($status));die;
if ($rowcount) {
    
    header("location:dashboard.php");

} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
   echo "please enter valid detail";
}
}
?>
<html>  
   <head>
      <title>Login Page</title>
      
      <style>
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:1px solid;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;">
		<b>Login</b></div>		
            <div style = "margin:30px">
               
               <form method="post">
                  <label>username:</label><input type = "text" name="username" class="box"><br><br>
                  <label>password  :</label><input type = "password" name="password" class="box"><br><br>
                  <input type= "submit" value="Login" name="submit"><br />
               </form>
               <a href="ragistration.php">Register</a>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px">   
				</div>	
            </div>
				
         </div>
			
      </div>
      
   </body>
</html>