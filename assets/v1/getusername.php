<?php
session_start();
 require 'connect.php'?>
<?php

$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_SESSION['username'];

$sql = "SELECT email FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	$_SESSION['email']=$row["email"];
      header("Location:../../index.php");
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
