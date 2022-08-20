<?php

	if(isset($_POST['submit']))
	{
		$con = mysqli_connect('127.0.0.1', 'root', '', 'product_db');

		if(!$con)
		{
			echo 'connection to server is denied';
			header("refresh:4;	url=../view/ProductUpdate.php");
		}
		else
		{
			$sql ="UPDATE `products` SET car_name = '$_POST[car_name]', car_model = '$_POST[car_model]', manufacture_cost__taka = '$_POST[car_m_cost]', selling_cost__taka = '$_POST[car_s_cost]', profit ='$_POST[profit]' WHERE car_id='$_POST[car_id]'";

			if(mysqli_query($con, $sql))
			{
				echo "<center><font color=rgb(100,245,0)><h1>Data is UPDATED successfully to ~products~ table of database</h1></font></center>";
				header("refresh:4;	url=../view/ExistingProducts.php");
			}
			else
			{
				echo "!! Error !!";
				header("refresh:2;	url=../view/ProductUpdate.php");
			}
		}
	}
	else
	{
		echo "!! Error to Button Click!!";
		header("refresh:2;	url=../view/ProductUpdate.php");
	}

?>
