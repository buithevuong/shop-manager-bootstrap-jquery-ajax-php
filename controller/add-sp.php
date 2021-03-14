<?php 
include "../includes/connection-sp.php";
if (isset($_POST["ten"])) {
	
	$name = $_POST["ten"];
	$chatlieu = $_POST["chatlieu"];
	$anh = $_POST["anh"];
	$mota = $_POST["mota"];
	$gia = $_POST["gia"];
	$tonkho = $_POST["tonkho"];


	$sql_add = "INSERT INTO tblsanpham(ten,chatlieu,anh,mota,gia,tonkho) VALUES ('$name','$chatlieu','$anh','$mota',$gia,$tonkho)";
	if (mysqli_query($conn,$sql_add)) {
		$sql_select2 = "SELECT * FROM tblsanpham WHERE ten = '$name'";
		$result2 = mysqli_query($conn,$sql_select2);
		$row2 = mysqli_fetch_assoc($result2);
		echo json_encode($row2);
	}

}	

?>