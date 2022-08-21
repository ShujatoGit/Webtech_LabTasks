<?php
   session_start();

   require_once('../model/db_functions.php');
	//$result = getAllProducts();

   if(!isset($_COOKIE['username']))
   {
		header("location: ../SpartanBank.html");
	}


   $con = mysqli_connect('127.0.0.1', 'root', '', 'spartanbank');
	$sql	=	 "select * from sb_userlist where usertype = 'banker'";
	$results = mysqli_query($con,$sql);

   // if(file_exists('../model/SB_Users.json'))
   // {
   // 	$filename = '../model/SB_Users.json';
   // 	$data = file_get_contents($filename); //data read from json file
   //    $users = json_decode($data); //decode a data
   // }
   // else
   // {
   //    echo "<center><h2><font color = red>!! Expected Data could not be Found !!";
   //    header("refresh:3;	url=../view/banker_Profile.php");
   // }

?>

<!DOCTYPE html>
 <html>

<head>
  <title>BANKER PROFILE</title>
</head>
   <body><center>
        <fieldset>
           <legend align="center"><h1>Profile of BANKER</h1></legend>
              <table border="2">
               <tr>
                 <td colspan="3"><a href="banker_Dashboard.php">Home of <?= $_COOKIE['username']?></a></td>
                 <td colspan="8"><a href="banker_Logout.php">LogOut</a></td>
               </tr>
                <tr>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Usertype</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Education</th>
                    <th>Nationality</th>
                    <th>Profile Picture</th>
                </tr>

                <?php
                     while($row = mysqli_fetch_array($results))
                     //while(mysqli_num_rows($results) > 0 )
                     {
                   // foreach ($results as $user)
                   // {
                ?>

                <tr>
                    <td> <?= $row['fullname']; ?> </td>
                    <td> <?= $row['username']; ?> </td>
                    <td> <?= $row['usertype']; ?> </td>
                    <td> <?= $row['email']; ?> </td>
                    <td> <?= $row['gender']; ?> </td>
                    <td> <?= $row['education']; ?> </td>
                    <td> <?= $row['nationality']; ?> </td>
                    <td><?= $row['dp']; ?></td>
                    <!-- <td><img src="../model/uploads/ <!?=$_SESSION['dp']?>" width="100px" height="100px"></td> -->

                    <td><?= "<a href=banker_ProfileUpdate.php?userID=".$row['id']."><b>UPDATE PROFILE</b></a>" ?></td>
                </tr>

                <?php
                   }
                ?>

              </table>
        </fieldset>
   </center></body>
</html>
