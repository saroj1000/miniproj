<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "tour";

// Create connection
$conn = new mysqli($servername, $username, $pass, $dbname);
if(isset($_POST['log']))
{
    $ue = $_POST['user'];
    $pa = $_POST['pass'];
}
if(empty($ue) || empty($pa))
{
    echo"Please fill the details";
}
else if(!empty($ue) && !empty($pa)){
    $query = "select * from login1,registration where user='$ue'";
    $result = mysqli_query($conn,$query);
    echo "Welcome \n";
    // echo "<script> location.href=http://miniproj/view_places.html</script>";
     header("Location: http://localhost/miniproj/view_places.html");
    echo "welcome to Travel Agency....";
}
else{
    echo "Enter valid username & password";
}

?>