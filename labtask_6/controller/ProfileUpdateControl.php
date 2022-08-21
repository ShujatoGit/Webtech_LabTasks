<?php

	if(isset($_POST['submit']))
	{
		$con = mysqli_connect('127.0.0.1', 'root', '', 'sb_userlist');

		if(!$con)
		{
			echo 'connection to server is denied';
			header("refresh:4;	url=../view/banker_ProfileUpdate.php");
		}
		else
		{
			$sql ="UPDATE `sb_userlist` SET fullname = '$_POST[fullname]', username = '$_POST[username]', '', email = '$_POST[email]', '', gender = '$_POST[gender]', education ='$_POST[education]', nationality = '$_POST[nationality]', dp = '$_POST[dp]', WHERE id='$_POST[id]'";

			if(mysqli_query($con, $sql))
			{
				echo "<center><font color=rgb(100,245,0)><h1>Data is UPDATED successfully to ~sb_userlist~ table of database</h1></font></center>";
				header("refresh:4;	url=../view/banker_Profile.php");
			}
			else
			{
				echo "!! Error !!";
				header("refresh:4;	url=../view/banker_ProfileUpdate.php");
			}
		}
	}
	else
	{
		echo "!! Error to Button Click!!";
		header("refresh:4;	url=../view/banker_ProfileUpdate.php");
	}

?>
