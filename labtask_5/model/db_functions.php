<?php

	require('db.php');

	// function validate($username, $password)
	// {
	//
	// 	$con = getConnection();
	// 	$sql = "select * from product_db where username='{$username}' and password='{$password}'";
	// 	$result = mysqli_query($con, $sql);
	// 	$user = mysqli_fetch_assoc($result);
	// 	return $user;
	// }


	function getAllProducts()
	{
		$con = getConnection();
		$sql = "select * from products";
		$result = mysqli_query($con, $sql);
		return $result;
	}

?>
