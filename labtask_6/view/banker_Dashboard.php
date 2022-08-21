<?php
	session_start();
	if(!isset($_COOKIE['username']))
   {
		header("location: ../SpartanBank.html");
	}
?>

<!DOCTYPE html>
<html>

   <head>
      <title>BANKER DASHBOARD</title>
   </head>

<body><center>

      <fieldset>
         <legend align="center"><h1>Welcome !! Here is all about Banker ..... Logged in as :  <?= $_COOKIE['username']?></h1></legend>
         <table>
            <tr><td colspan="12"><hr></td></tr>
            <tr>
               <td colspan="10"><a href="banker_Profile.php">PROFILE</a></td>
               <td><a href="banker_sb_userlist.php">Existing Users of SPARTAN BANK<br></a></td>
            </tr>
            <tr><td colspan="12"><hr></td></tr>
            <tr>
               <td><a href="banker_ChangePassword.php">Change Password</a></td>
            </tr>
            <tr><td colspan="12"><hr></td></tr>
            <tr>
               <td><a href="../SpartanBank.html"><b>Go to Opening Page</b></a></td>
               <td></td>
               <td></td>
               <td colspan="5"></td>
               <td><a href="banker_Logout.php"><b>Log Out</b></a></td>
            </tr>
         </table>
      </fieldset>

</center></body>
</html>
