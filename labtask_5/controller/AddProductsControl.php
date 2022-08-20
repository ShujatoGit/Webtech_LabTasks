<?php

	if(isset($_POST['submit']))
	{
		$car_name = $_POST['car_name'];
		$car_model = $_POST['car_model'];
		$car_m_cost = $_POST['car_m_cost'];
		$car_s_cost = $_POST['car_s_cost'];
		$profit = $_POST['profit'];

		$con = mysqli_connect('127.0.0.1', 'root', '', 'product_db');

		if(!$con)
		{
			echo 'connection to server is denied';
			header("refresh:3;	url=../controller/AddProductsControl.php");
		}
		else
		{
			$sql = "INSERT INTO `products` (`car_name`, `car_model`, `manufacture_cost__taka`, `selling_cost__taka`, `profit`) VALUES ('$car_name','$car_model','$car_m_cost','$car_s_cost','$profit')";

			if(mysqli_query($con,$sql))
			{
				echo "<center><font color=rgba(38, 100, 2, 1)><h2>NEW Product is ADDED to the DATABASE successfully</h2></font></center>";
				header("refresh:4;	url=../view/ExistingProducts.php");
			}
			else
			{
				echo "!! Error to add new products into database !!";
				header("refresh:4;	url=../view/AddProducts.php");
			}
		}
	}
	else
	{
		echo "!! Error to Button Click !!";
		header("refresh:2;	url=../view/AddProducts.php");
	}

?>
