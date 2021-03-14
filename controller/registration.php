<?php

include('../includes/connection.php');
if(isset($_POST['username'])){
	$ho = $_POST["ho"];
	$ten = $_POST["ten"];
	$username = $_POST["username"];
	$pass = $_POST["pass"];
	$repass = $_POST["repass"];

	$sql_re= "INSERT INTO account(username, password, ho, ten, capbac)
       VALUES ('$username','$repass','$ho','$ten',1)";

	

	if (mysqli_query($conn,$sql_re)) {
		echo json_encode(array("statusCode"=>200));
	}
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
}
?>