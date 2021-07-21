<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "Driverless_DATABASE";
$table = "users";
$table1 = "questions";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
 //   die("Connection failed: " . mysqli_connect_error());
}else {
  // echo "connection successfull";
}

//mysqli_close($conn);
?>
