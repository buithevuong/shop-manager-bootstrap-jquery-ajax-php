<?php 
	session_start();
	if($_SESSION['username'])
	{
		session_destroy();
		header("location: ../view/home.php");
		
	}
	else
	{
		header("location:../view/home.php");
	}
 
 ?>