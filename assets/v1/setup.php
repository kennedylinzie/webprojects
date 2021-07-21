<?php require 'assets/v1/connect.php'?>

<?php
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Create database
$sql = "CREATE DATABASE $db";
if (mysqli_query($conn, $sql)) {
  //  echo "Database created successfully";
} else {
  //  echo "Error creating database: " . mysqli_error($conn);
}



// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE $table (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(100) NOT NULL,
sirname VARCHAR(100) NOT NULL,
username VARCHAR(100),
password VARCHAR(255),
email VARCHAR(100),
dob VARCHAR(50),
islocked int(2),
address VARCHAR(50),
trn_date VARCHAR(50),
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
   // echo "Table Users created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// sql to create table
$sql = "CREATE TABLE questions (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(100) NOT NULL,
question VARCHAR(500) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
   // echo "Table Users created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
