
<?php 
include 'conn.php';
if(isset($_POST['save'])){

 $name=$_POST['name'];
 $skills=$_POST[' skills'];
 $address=$_POST['address'];
 $gender=$_POST['gender'];
 $designation=$_POST['designation'];
 $age=$_POST['age'];
 $image=$_POST['image'];


 
 $sql = "INSERT INTO developers (id, name, skills, address, gender, designation, age, image) VALUES ('10','$name','$skills','$address','$gender','$designation','$age','$image')";
 
if (mysqli_query($conn, $sql)) {
   echo "New record created successfully";
} else {
   echo "Error: " . $sql . "" . mysqli_error($conn);
}




 $sql = 'SELECT * FROM developers';
$result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              echo "id:" . $row["id"]. "<br>";
              echo "name:" . $row["name"]. "<br>"; 
              echo "skills:" . $row["skills"]. "<br>";
              echo "address:" . $row["address"]. "<br>";
              echo "gender:" . $row["gender"]. "<br>";
              echo "designation:" . $row["designation"]. "<br>";
              echo "age:" . $row["age"]. "<br>";
              echo "image:" . $row["image"]. "<br>";
              
            }
            
         } else {
            echo "0 results";
         }
     }   

 if(isset($_POST['export_data'])){

$sqls = "SELECT `id`,`name`,`skills`,`address`,`gender`,`designation`,`age`,`image` FROM `developers`";  
$setRec = mysqli_query($conn, $sqls);  
$columnHeader = '';  
$columnHeader = "id" ."\t" . "name" . "\t" . "skills" . "\t" . "address" . "\t". "gender" . "\t" . "designation" . "\t" . "age" . "\t" . "image" . "\t";  
$setData = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
 }
 
 
?>


