<?php 
include('../includes/connection-sp.php');
if(isset($_POST['id_update'])){
	$id1 = $_POST["id_update"];
	$ten1 = $_POST["ten"];
	$chatlieu1 = $_POST["chatlieu"];
	$anh1 = $_POST["anh"];
	$mota1 = $_POST["mota"];
	$gia1 = $_POST["gia"];
	$tonkho1 = $_POST["tonkho"];

	$sql_update = "UPDATE tblsanpham SET ten='$ten1',chatlieu='$chatlieu1', anh='$anh1', mota='$mota1',gia=$gia1,tonkho=$tonkho1 WHERE id=$id1";

	

	if (mysqli_query($conn,$sql_update)) {
		$sql_select = "SELECT * FROM tblsanpham WHERE id = $id1";
		$result1 = mysqli_query($conn,$sql_select);
		$row1 = mysqli_fetch_assoc($result1);
		echo json_encode($row1);
	}
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
}

if(isset($_GET['edit_id'])){
	$edit_id = $_GET["edit_id"];
	$sql_get = "SELECT * FROM tblsanpham WHERE id=$edit_id";

	// if(mysqli_query($conn,$sql_get)){
	$result = mysqli_query($conn,$sql_get);
	$row = mysqli_fetch_assoc($result);
	echo json_encode($row);
	// }
}

?>