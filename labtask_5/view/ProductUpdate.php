<?php

	$con = mysqli_connect('127.0.0.1', 'root', '', 'product_db');
	$sql	=	 "SELECT * FROM `products` WHERE car_id ='$_GET[carID]'";
	$results = mysqli_query($con,$sql);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Product_UPDATE</title>
   <script src="../controller/js/validateExistingProduct.js" type="text/javascript" charset="utf-8"></script>
</head>

<body>
	<form action="../controller/ProductUpdateControl.php" method="post" onsubmit="return Ucheck();">
		<table border=1>
			<tr>
				<td><center><b>Car_Name</b></center></td>
				<td><center><b>Car_Model</b></center></td>
				<td><center><b>Manufacture_Cost</b></center></td>
				<td><center><b>Selling_Cost</b></center></td>
				<td><center><b>Profit</b></center></td>
			</tr>

			<tr>

			<?php
				while($row = mysqli_fetch_array($results))
				{
					echo "<tr><form action=../controller/ProductUpdateControl.php method=post onsubmit=return Ucheck()>";
					echo "<input type=hidden name=car_id value='".$row['car_id']."'>";
					echo "<td><input type=text id=car_name name=car_name value='".$row['car_name']."'></td>";
					echo "<td><input type=text id=car_model name=car_model value='".$row['car_model']."'></td>";
					echo
					"<td>
						<input type=text id=car_m_cost name=car_m_cost value='".$row['manufacture_cost__taka']."' onkeypress='return onlynumbers(event)'>
					</td>";
					echo
					"<td>
						<input type=text id=car_s_cost name=car_s_cost value='".$row['selling_cost__taka']."' onkeypress='return onlynumbers2(event)'>
					</td>";
					echo "<td><input type=text id=profit name=profit value='".$row['profit']."'></td>";
					echo "<td><center><input type=submit id=submit name=submit onclick=Ucheck() value=UPDATE></center></td>";
					echo "</form></tr>";
				}
			?>

			</tr>

			<tr>
	         <td><center><a href="ExistingProducts.php"> Back</a></td>
			</tr>

		</table>
	</form>
</body>
</html>
