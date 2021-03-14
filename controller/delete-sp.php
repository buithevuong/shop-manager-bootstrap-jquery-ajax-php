<?php
require('../includes/connection-sp.php');

// if ($_SERVER['REQUEST_METHOD'] != 'GET')
//     die('Invalid HTTP method!');
// {
// $sql = "DELETE FROM tblsanpham WHERE id = '".$_GET['id_delete']."'";

// // die($sql);

// mysqli_query($conn, $sql);

// $adminURL = '../view/admin.php';
// header('Location: '.$adminURL);


if (isset($_POST["id"])) {
	foreach ($_POST["id"] as $id ) {
		$sql_delmulti = "DELETE FROM tblsanpham WHERE id = '".$id."'";
		mysqli_query($conn,$sql_delmulti);
	}
}
?>