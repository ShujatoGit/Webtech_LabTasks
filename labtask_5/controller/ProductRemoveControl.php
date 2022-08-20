<?php

		$con = mysqli_connect('127.0.0.1', 'root', '', 'product_db');

		if(!$con)
		{
			echo "<center><h2><b>!! CONNECTION ERROR !!</h2></center>";
			header("refresh:3;	url=../view/ExistingProducts.php");
		}

		else
		{
			$sql = "DELETE  FROM products WHERE car_id ='$_GET[carID]'";

			if(mysqli_query($con,$sql))
			{
				echo "<center><font color=red><h2><b>!! Expected DATA is DELETED !!</h2></font></center>";
				//header("refresh:3;	url=../view/ExistingProducts.php");
			}
			else
			{
				echo "!! Error TO delete !!";
				//header("refresh:3;	url=../view/ProductDelete.php");
			}

			header("refresh:3;	url=../view/ExistingProducts.php");

		}

?>
