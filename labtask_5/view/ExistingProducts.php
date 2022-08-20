<?php
	require_once('../model/db_functions.php');
	$result = getAllProducts();

	$con = mysqli_connect('127.0.0.1', 'root', '', 'product_db');
	$sql =	"SELECT * FROM `products`";
	$dbdata = mysqli_query($con,$sql);

?>

<html>
<head>
	<title>Available Products</title>
</head>
<body><center>
	<h2 id="selected_list()">
		<span style=color:blue>Search a Product: </b></span>
	</h2>
	<form>
		<input type="text" id="car_name" name="car_name" onkeyup="selected_list()">
	<!-- <input type="submit" id="submit" name="submit" onclick="selected_list()" value="S E A R C H"> -->
	</form>
	<br>
	<table border=20>
		<tr><td colspan="4"><h1><b><center>Existing Products</center></b></h1></td></tr>

		<tr><center>
			<td><center><b>Car_Name</b></center></td>
			<td><center><b>Car_Model</b></center></td>
			<td><center><b>Profit</b></center></td>
			<td><center><b>ACTIONS</b></center></td>
		</center></tr>

		<tr>
			<div id="ajaxSearch">

				<?php
					while($row = mysqli_fetch_array($dbdata))
					{
				?>

				<tr>
					<td><?= $row['car_name'] ?></td>
					<td><?= $row['car_model'] ?></td>
					<td><?= $row['profit'] ?></td>
					<td>
						<?= "<a href=ProductUpdate.php?carID=".$row['car_id']."><b>UPDATE</b></a>" ?> ||
						<?= "<a href=ProductDelete.php?carID=".$row['car_id'].">REMOVE</a>" ?>
					</td>
				</tr>

				<?php   } ?>

			</div>
		</tr>


		<tr><center>
			<td colspan="4"><center><a href="AddProducts.php"><b>Add New Product</b></a></center></td>
		</center></tr>
	</table>


	<script type="text/javascript">

		function selected_list()
		{
			var search = document.getElementById("car_name").value;
			var xhttp = new XMLHttpRequest();

			xhttp.onreadystatechange = function()
			{
			    if (this.readyState == 4 && this.status == 200)
				 {
			    	document.getElementById('ajaxSearch').innerHTML = this.responseText;
			    }
			};

			xhttp.open("GET", "../model/ajax/ProductSearch.php?key="+search, true);
			xhttp.send();
		}

	</script>

	<style media="screen">
		#car_name
		{
		  border-color: green;
		  border-radius: 5px;
		  font-size: 25px;
		  font-style: italic;
		  font-family: cursive;
		  color: black;
		  background: lime;
		}
		#submit
		{
		  border-color: green;
		  border-radius: 1px;
		  font-size: 15px;
		  font-style: bold;
		  font-family: IMPACT;
		  color: red;
		  background: sliver;
		}
	</style>

<!--
				<table border="50" id="design">
					<style media="screen">
						#design
						{
						  border-color: green;
						  color: black;
						  background: orange;
						}
					</style>

					<tr>
						<td colspan="4"><h1><b><center>SEARCHED PRODUCT</center></b></h1></td>
					</tr>
					<tr><center>
						<td><center><b>Car_Name</b></center></td>
						<td><center><b>Car_Model</b></center></td>
						<td><center><b>Profit</b></center></td>
						<td><center><b>ACTIONS</b></center></td>
					</tr>
				</table>
 -->

</center></body>
</html>
