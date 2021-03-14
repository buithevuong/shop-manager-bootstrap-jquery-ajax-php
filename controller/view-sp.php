<?php 
$sql_list = "SELECT * FROM tblsanpham ORDER BY id DESC";

if (isset($_POST["search-smit"])) {
	$value_s = $_POST["search"];
	$sql_list = "SELECT * FROM tblsanpham WHERE ten LIKE '%$value_s%'";
	
	
}

if (isset($_POST["thapdencao"])){
	$sql_list = "SELECT * FROM tblsanpham ORDER BY gia";
}
if (isset($_POST["caodenthap"])){
	$sql_list = "SELECT * FROM tblsanpham ORDER BY gia DESC";
}
if (isset($_POST["moinhat"])){
	$sql_list = "SELECT * FROM tblsanpham ORDER BY id DESC";
}		
		

$query_list = mysqli_query($conn,$sql_list);
?>