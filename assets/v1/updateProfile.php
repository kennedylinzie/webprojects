<?php

	include 'connect.php';
  $conn = mysqli_connect($servername, $username, $password,$db);
	session_start();

  //////////////////////////////
  if($_POST['type']==1){



    $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);


      $sql = "UPDATE `users` SET firstname='$firstname' WHERE email ='$email'";
      if (mysqli_query($conn, $sql)) {
        echo json_encode(array("statusCode"=>200));
      }
      else {
        echo json_encode(array("statusCode"=>201));
      }

    mysqli_close($conn);
  }

  if($_POST['type']==2){



    $sirname = mysqli_real_escape_string($conn,$_POST['sirname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);


      $sql = "UPDATE `users` SET sirname='$sirname' WHERE email ='$email'";
      if (mysqli_query($conn, $sql)) {
        echo json_encode(array("statusCode"=>200));
      }
      else {
        echo json_encode(array("statusCode"=>201));
      }

    mysqli_close($conn);
  }

  if($_POST['type']==3){



    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);


      $sql = "UPDATE `users` SET username='$username' WHERE email ='$email'";
      if (mysqli_query($conn, $sql)) {
        echo json_encode(array("statusCode"=>200));
      }
      else {
        echo json_encode(array("statusCode"=>201));
      }

    mysqli_close($conn);
  }

  if($_POST['type']==4){



    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);


      $sql = "UPDATE `users` SET email='$email' WHERE username ='$username'";
      if (mysqli_query($conn, $sql)) {
        echo json_encode(array("statusCode"=>200));
      }
      else {
        echo json_encode(array("statusCode"=>201));
      }

    mysqli_close($conn);
  }

  if($_POST['type']==5){



    $dob = mysqli_real_escape_string($conn,$_POST['dob']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);


      $sql = "UPDATE `users` SET dob='$dob' WHERE email ='$email'";
      if (mysqli_query($conn, $sql)) {
        echo json_encode(array("statusCode"=>200));
      }
      else {
        echo json_encode(array("statusCode"=>201));
      }

    mysqli_close($conn);
  }

  if($_POST['type']==6){



    $address = mysqli_real_escape_string($conn,$_POST['address']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);


      $sql = "UPDATE `users` SET address='$address' WHERE email ='$email'";
      if (mysqli_query($conn, $sql)) {
        echo json_encode(array("statusCode"=>200));
      }
      else {
        echo json_encode(array("statusCode"=>201));
      }

    mysqli_close($conn);
  }

  ?>
