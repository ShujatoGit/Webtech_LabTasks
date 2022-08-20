<?php

	//include('../service/function.php');

	$search = $_GET['key'];

	$con = $con = mysqli_connect('127.0.0.1', 'root', '', 'product_db');
	$sql = "select * from products where car_name like '%{$search}%'";
	$result = mysqli_query($con, $sql);
	$count =mysqli_num_rows($result);


	if($count)
   {
		$data = "<table border='5' BORDERCOLOR=yellow>
									<tr>
										<td><span style='color:red '><b>Car_Name</b></span></td>
										<td><span style='color:red '><b>Car_Model</b></span></td>
										<td><span style='color:red '><b>Profit</b></span></td>
										</tr>
									";

		while($row = mysqli_fetch_assoc($result))
      {
			$data .= "<tr>
									<td><span style='color:blue '>{$row['car_name']}</span></td>
									<td><span style='color:blue '>{$row['car_model']}</span></td>
									<td><span style='color:blue '>{$row['profit']}</span></td>
								</tr>";
		}

		$data .= "</table>";
		echo $data;
		echo "<br>";
		echo "<br>";
	}
   else
   {
		echo "<span style=color:red><b>No result found!!!!!</b></span>";
		echo "<br>";
		echo "<br>";
	}

?>
