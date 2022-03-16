<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="a.css">
    <title>Document</title>
</head>
<body>
    <?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "tour";

// Create connection
$conn = new mysqli($servername, $username, $pass, $dbname);


$sql = "select p_id,username,firstname,lastname,source,destination,gender,DOB,phone from book where username='$ue'";

$res = $conn->query($sql);

while($row = $res->fetch_assoc())
{
    // echo "<tr><td><input type='checkbox' name='SelectedData[]' alt='Checkbox' value='&$p_id&$username&$firstname&$lastname&$source&$destination&$gender&$DOB&$phone&'></td>";
    echo "</td><td>" . $row["p_id"]. " -  ";
    echo"</td><td>" . $row["username"]. "  - ";
    echo"</td><td>" . $row["firstname"]. "   ";
    echo"</td><td>" . $row["lastname"]. "   -  ";
    echo"</td><td>" .$row["source"]. " -  ";
    echo"</td><td>" .$row["destination"]. "  -   ";
    echo"</td><td>" . $row["gender"]. " - ";
    echo"</td><td>" .$row["DOB"]. " - ";
    echo"</td><td>" .$row["phone"]."<br>";
}
$conn->close();
?>

</body>
</html>