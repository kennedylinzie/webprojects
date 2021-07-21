<?php

	include 'connect.php';
  $conn = mysqli_connect($servername, $username, $password,$db);
	session_start();



	if($_POST['type']==1){

    $name = mysqli_real_escape_string($conn,$_POST['firstname']);
    $sirname = mysqli_real_escape_string($conn,$_POST['sirname']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $dob = mysqli_real_escape_string($conn,$_POST['dob']);
    $address = mysqli_real_escape_string($conn,$_POST['address']);

		$duplicate=mysqli_query($conn,"select * from users where  username='$username' and email='$email'");
		if (mysqli_num_rows($duplicate)>0)
		{
			echo json_encode(array("statusCode"=>201));
		}
		else{

				$password = md5($password);
				$lockvalue = 0;



			$sql = "INSERT INTO `users`( firstname,sirname,username,password,email,dob,islocked,address)
			VALUES ('$name','$sirname','$username','$password','$email','$dob','$lockvalue','$address')";
			if (mysqli_query($conn, $sql)) {
				echo json_encode(array("statusCode"=>200));
			}
			else {
				echo json_encode(array("statusCode"=>201));
			}
		}
		mysqli_close($conn);
	}



	if($_POST['type']==2){
		 $username = mysqli_real_escape_string($conn,$_POST['username']);
		 $password = mysqli_real_escape_string($conn,$_POST['password']);
		$password = md5($password);
		$check=mysqli_query($conn,"select * from users where username='$username' and password='$password'");

		if (mysqli_num_rows($check)>0)
		{	$sql = "SELECT * FROM users where username='{$username}'";
														$result = $conn->query($sql);
														if ($result->num_rows > 0) {
																			while($row = $result->fetch_assoc()) {
																							$date = $row['trn_date'];	$lock = $row['islocked'];
																					}	}
																				if($date == "")
																				{$tm=0;}else { $tm = TimeAgo_seconds($date, date("Y-m-d H:i:s"));	}

												if($date == "" && $lock <3)
												{		$_SESSION['username']=$username;
														echo json_encode(array("statusCode"=>200));
														$time = "";
														$check=mysqli_query($conn,"UPDATE users SET trn_date='$time' WHERE username='$username'");
														$lock = 0;
														$check=mysqli_query($conn,"UPDATE users SET islocked='$lock' WHERE username='$username'");
														$_SESSION['username']=$username;
												}
												elseif($tm >600 && $lock == 3)
												 {
														$_SESSION['username']=$username;
														$time = "";
														$check=mysqli_query($conn,"UPDATE users SET trn_date='$time' WHERE username='$username'");
														$lock = 0;
														$check=mysqli_query($conn,"UPDATE users SET islocked='$lock' WHERE username='$username'");
														$_SESSION['username']=$username;
														echo json_encode(array("statusCode"=>200));
												}
												elseif($tm <600 && $lock == 3){	echo json_encode(array("statusCode"=>202));}

		}
		else{

								$sql = "SELECT * FROM users where username='$username'";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
													while($row = $result->fetch_assoc()) {

																if($row['islocked'] < 2)
																{
																	 echo json_encode(array("statusCode"=>201));
																	 $s=$row['islocked'];
																	 $s++;
																	 $check=mysqli_query($conn,"UPDATE users SET islocked='$s' WHERE username='$username'");
																}elseif ($row['islocked'] == 2) {
	                                  echo json_encode(array("statusCode"=>201));
																		$s=$row['islocked'];
																		$s++;
																		$check=mysqli_query($conn,"UPDATE users SET islocked='$s' WHERE username='$username'");
																		$time = date("Y-m-d H:i:s");
																		$check=mysqli_query($conn,"UPDATE users SET trn_date='$time' WHERE username='$username'");
																}elseif ($row['islocked'] == 3) {
																									$sql = "SELECT * FROM users where username='$username'";
																										$result = $conn->query($sql);
																										if ($result->num_rows > 0) {
																															while($row = $result->fetch_assoc()) {
																																			$date = $row['trn_date'];
																															}		}
                                         $tm = TimeAgo_seconds($date, date("Y-m-d H:i:s"));
																				if($tm > 600)
																				{
																					$time = "";
																					$check=mysqli_query($conn,"UPDATE users SET trn_date='$time' WHERE username='$username'");
																					$lock = 0;
																					$check=mysqli_query($conn,"UPDATE users SET islocked='$lock' WHERE username='$username'");
																						echo json_encode(array("statusCode"=>200));
																					}else {
																					echo json_encode(array("statusCode"=>202));
																				}
																}
														}
											}else{
													echo json_encode(array("statusCode"=>203));
											}	}
		mysqli_close($conn);
	}

?>






<?php
		 function TimeAgo_seconds ($oldTime, $newTime)
 		 {
						  $timeCalc_seconds = strtotime($newTime) - strtotime($oldTime);
						 if ($timeCalc_seconds > 0){
						 $timeCalc_seconds;
						  return $timeCalc_seconds;
						}else {
						 return 0;
						}
 		 }
?>
