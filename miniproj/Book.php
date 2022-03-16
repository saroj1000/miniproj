<?php
$f =  $_POST['firstname'];
$l =  $_POST['lastname'];
$D = $_POST['DOB'];
$g = $_POST['gender'];
$u =  $_POST['username'];
$s = $_POST['source'];
$des = $_POST['destination'];
$E =  $_POST['Email'] ;
$ph = $_POST['phonecode'];
$Phon =  $_POST['Phone'];

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
$sql = "INSERT Into book (firstname, lastname, DOB, gender, username, source, destination, Email, phonecode, Phone) 
values('$f', '$l', '$D', '$g', '$u', '$s', '$des', '$E', '$ph', '$Phon')";
 $sqlget = "select * from book";
}

if(mysqli_query($conn, $sql)){
  echo "Records submitted successfully.";
  

} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
