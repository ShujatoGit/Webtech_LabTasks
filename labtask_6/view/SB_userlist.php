<?php
	session_start();

	if(!isset($_COOKIE['username']))
	{
		header("location: ../SpartanBank.html");
	}

	$con = mysqli_connect('127.0.0.1', 'root', '', 'spartanbank');
	$sql = "SELECT * FROM sb_userlist";
	$results = mysqli_query($con,$sql);

?>

<html>

<head>
	<title>USERS</title>
</head>

<body>
	<form>
		<br>
		<br>
		<table border=1>
			<tr>
				<td colspan="8"><center><b><h1>Existing Users</h1></b></center></td>
			</tr>
			<tr><center>
				<td><a href="banker_Dashboard.php">Home</a></td>
				<td><a href="banker_Logout.php"> <b>LOGOUT</b></a></td><br>
			</center></tr>
			<tr><center>
				<td><center><b>FULL NAME</b></center></td>
				<td><center><b>USERNAME</b></center></td>
				<td><center><b>Password</b></center></td>
				<td><center><b>EmaiL</b></center></td>
				<td><center><b>Usertype</b></center></td>
				<td><center><b>Gender</b></center></td>
				<td><center><b>Education</b></center></td>
				<td><center><b>Nationality</b></center></td>
			</tr>

			<tr>

				<?php
						while($row = mysqli_fetch_array($results))
						{
				?>

				<tr>
					<td><?= $row['fullname'] ?></td>
					<td><?= $row['username'] ?></td>
					<td><?= $row['password'] ?></td>
					<td><?= $row['email'] ?></td>
					<td><?= $row['usertype'] ?></td>
					<td><?= $row['gender'] ?></td>
					<td><?= $row['education'] ?></td>
					<td><?= $row['nationality'] ?></td>
				</tr>

				<?php
						}
				?>

			</tr>

		</table>

	</form>
</body>
</html>
