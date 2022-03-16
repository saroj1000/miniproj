<?php
$f =  $_POST['firstname'];
$l =  $_POST['lastname'];
$D = $_POST['DOB'];
$u =  $_POST['username'];
$p = $_POST['pass'];
$g = $_POST['gender'];
$E =  $_POST['Email'] ;
$ph =$_POST['phonecode'];
$Phon =  $_POST['Phone'];
$a = $_POST['addr'];

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "tour";

// Create connection
$conn = new mysqli($servername, $username, $pass, $dbname);

//  Check connection
if($conn === false){
  die("ERROR: Could not connect. " . mysqli_connect_error());
}
else
{
// echo "Connected successfully";
// $SELECT = "SELECT username From registation";
// $user_id = random_num(50);
$sql = "INSERT Into registation (firstname, lastname, DOB, username, pass, gender, Email, phonecode, Phone, addr) values('$f', '$l', '$D', '$u', '$p', '$g', '$E', '$ph', '$Phon', '$a')";
}

if(mysqli_query($conn, $sql)){
  echo "Records inserted successfully.";
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
header("Location: http://localhost/miniproj/user.html");
?>
