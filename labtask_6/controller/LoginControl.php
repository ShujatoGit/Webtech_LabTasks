<?php
   session_start();
   	include('../model/db_Functions.php');

   if (isset($_POST['submit']))
   {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $usertype = $_POST['usertype'];
      $user = (validate($username, $password, $usertype));

      if (($user) > 0)
      {
         if($username != "")
         {
            if ($password != "")
            {
               if ($usertype == "admin")
               {
                  echo "<center><h1><font color=Red>Only Banker is allowed for this moment";
                  header("refresh:2;	url=../view/LoginPage.php");
               }
               elseif ($usertype == "banker")
               {
                  $find_json_string = file_get_contents('../model/SB_Users.json');
                  $fetch_json_string = json_decode($find_json_string, true);
                  $flag =  false;

                  foreach ($fetch_json_string as $key => $value)
                  {
                     if ($value['user_name'] == $username && $value['password'] == $password && $value['usertype'] == $usertype)
                     {
                        $flag = true;
                        break;
                     }
                  }

                  if ($flag)
                  {
                     setcookie('username', $username, time()+600, '/');
                     echo "<center><h1><font color=green>Redirecting to home of Banker";
                     header("refresh:2;	url=../view/banker_Dashboard.php");
                  }
                  else
                  {
                     echo "<center><h1><font color=red>!nvalid username or password... <br> <font color=rgb(76,0,153)>If you are a new user, please Create a New Account first.";
                     header("refresh:4;	url=../view/LoginPage.php");
                  }
               }
               elseif ($usertype == "AH")
               {
                  echo "<center><h1><font color=Red>Only Banker is allowed for this moment";
                  header("refresh:2;	url=../view/LoginPage.php");
               }
               else
               {
                  echo "<center><h1><font color=red>!nvalid username or password... <br> If you are a new user, please Create a New Account first.";
                  header("refresh:4;	url=../view/LoginPage.php");
               }
            }
            else
            {
               echo "<center><h1><font color=red>Please type the expected valid password";
               header("refresh:3;	url=../view/LoginPage.php");
            }
         }
         else
         {
            echo "<center><h1><font color=red>Please type the expected username";
            header("refresh:3;	url=../view/LoginPage.php");
         }
      }
      else
      {
         echo "<center><h1><font color=red>Database Error Found... <br> [[ probably the username or password does not exist on the database ]]";
         header("refresh:5;	url=../view/LoginPage.php");
      }
   }
   else
   {
      echo "<center><h1><font color=red>Something is wrong... Please try again";
      header("refresh:3;	url=../view/LoginPage.php");
   }

?>
