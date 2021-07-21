<?php
session_start();
include 'connect.php';
$conn = mysqli_connect($servername, $username, $password,$db);


if($_POST['type']==1){
  $USERNAME=$_POST['username'];
  $password=$_POST['oldpassword'];

  		$password = md5($password);

  $check=mysqli_query($conn,"select * from users where username='$USERNAME' and password='$password'");
  if (mysqli_num_rows($check)>0)
  {

    $_SESSION['username']=$USERNAME;

    echo json_encode(array("statusCode"=>200));

  }
  else{
    echo json_encode(array("statusCode"=>201));
  }
  mysqli_close($conn);
}

if($_POST['type']==2){



  $password = mysqli_real_escape_string($conn,$_POST['newpassword1']);
  $username_ = mysqli_real_escape_string($conn,$_POST['username']);

  		$password = md5($password);


    $sql = "UPDATE `users` SET password='$password' WHERE username ='$username_'";
    if (mysqli_query($conn, $sql)) {
      echo json_encode(array("statusCode"=>200));
    }
    else {
      echo json_encode(array("statusCode"=>201));
    }

  mysqli_close($conn);
}

?>
