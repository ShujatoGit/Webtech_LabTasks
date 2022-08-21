<!DOCTYPE html>
<html>
<head>

<script type="text/javascript" src="../js/forget_pass.js"></script>
    <title>Forget Pass</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

House Management Company

<form class="box" style="border:3px; border-style:solid; border-color:pink; padding: 1em;" method="post" action="../controller/forget_pass_controller.php">
   <h1 style="color: blue; font-size: 20px; text-align:left"; >Enter Your Username</h1>
  <input type="text" name="username" value="" placeholder="Username">    
   <br>
   <input type="submit" name="submit" value="Submit" class="btn btn-info" />
 </form>
 
 <div align=center>
<?php include 'C:/xampp/htdocs/project/Final Project/Admin/Navigation/footer.php';?>
</div>

</body>
</html>