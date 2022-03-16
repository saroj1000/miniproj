<?php
$u =  $_POST['uname'];
$E =  $_POST['email'] ;
$sub =$_POST['subj'];
$mess =  $_POST['mess'];

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
    $sql = "INSERT Into contact (uname, email, subj, mess) values('$u', '$E', '$sub', '$mess')";
}

if(mysqli_query($conn, $sql)){
  echo "submited successfully.";
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>