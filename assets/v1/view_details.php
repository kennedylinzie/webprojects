<?php
session_start();

	include 'connect.php';

$usernam = $_SESSION['username'];

  $conn = mysqli_connect($servername, $username, $password, $db);
	$sql = "SELECT * FROM users where username='{$usernam}'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
?>
		<tr>
			<td ><?=$row['firstname'];?></td>
			<td><?=$row['sirname'];?></td>
			<td><?=$row['username'];?></td>
			<td><?=$row['email'];?></td>
      <td><?=$row['dob'];?></td>
      <td><?=$row['address'];?></td>
		</tr>
<?php
	}
	}
	else {
		echo "0 results";
	}
	mysqli_close($conn);
?>
