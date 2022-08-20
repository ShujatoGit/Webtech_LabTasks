<?php
	// require_once('../model/db_functions.php');
	// $result = getAllProducts();
	$con 			=	mysqli_connect('127.0.0.1', 'root', '', 'product_db');
	$sql			 =	 "SELECT * FROM `products` WHERE car_id ='$_GET[carID]'";
	$dbdata	=	mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>DELETE CONFIRMATION</title>
	<!-- <link rel="stylesheet" type="text/css" href="/DEALit/css/pic.css"> -->

</head>

<body><center>
  <!-- <form method="post" action="../controller/ProductRemoveControl.php"> -->

	<table id="tab1" border="5">
    <tr>
       <td colspan="2"><h1><center>!!! D E L E T E  ???</center></h1></td>
    </tr>

    <?php
      while($row = mysqli_fetch_array($dbdata))
      //while($row = $results->fetch_assoc())
      {
    ?>

		<tr>
				<td>ID</td>
				<td><?= $row['car_id'] ?></td>
		</tr>
		<tr>
				<td>CAR NAME</td>
        <td><?= $row['car_name'] ?></td>
		</tr>
		<tr>
				<td>CAR MODEL</td>
				<td><?= $row['car_model'] ?></td>
		</tr>
		<tr>
				<td>MANUFACTURING COST</td>
				<td><?= $row['manufacture_cost__taka'] ?></td>
		</tr>
		<tr>
				<td>SELLING COST</td>
				<td><?= $row['selling_cost__taka'] ?></td>
		</tr>
		<tr>
				<td>PROFIT</td>
				<td><?= $row['profit'] ?></td>
		</tr>
		</table>

    <table border="3">
      <tr>
        <td colspan="3"><div id="tab2"><h2>YOU WANT TO DELETE THE ENTIRE ROW? YOU CANNOT UNDO !!</h2></div></td>
      </tr>
      <tr>
        <!-- <td><input type="hidden" name="car_id" value="<!?= id.$row['car_id'] ?>"></td> -->
        <!-- <td><div id="link"><input type="submit" name="submit" value="D E L E T E"></div></td> -->

		  <td><div id="link"><?= "<a href=../controller/ProductRemoveControl.php?carID=".$row['car_id'].">DELETE</a>" ?></div></td>
		  <td><div id="link"><a href="ExistingProducts.php">BACK TO Products_LIST</a></div></td>
      </tr>

		<?php } ?>

    </table>

</center></body>
</html>
