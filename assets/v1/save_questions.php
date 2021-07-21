<?php

	include 'connect.php';


if($_POST['type']==1){

  $conn = mysqli_connect($servername, $username, $password, $db);

  $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
  $question = mysqli_real_escape_string($conn,$_POST['question']);



    $sql = "INSERT INTO `questions`(firstname,question) VALUES ('$firstname','$question')";
    if (mysqli_query($conn, $sql)) {
      echo json_encode(array("statusCode"=>200));
    }
    else {
      echo json_encode(array("statusCode"=>201));
    }

      mysqli_close($conn);
  }







?>
