<?php
	//session_start();
	//unset($_SESSION['username']);
	session_destroy();

	setcookie('username', '', time()-600, '/');
	header("location: ../SpartanBank.html");

?>
