<?php 

session_start();
require_once ("../includes/connection.php");
if (isset($_POST["btn_login"])) {
	$login_email = $_POST["login_email"];
	$login_pass = $_POST["login_pass"];

	
	$sql2 = "SELECT * from account where username='$login_email' and password='$login_pass'";
	$query = mysqli_query($conn,$sql2);
	$check = mysqli_num_rows($query);
	
	if ($check == 0) {
		echo "ten dang nhap hoac mat khau khong dung";
	}else{
		
		while ($data = mysqli_fetch_array($query)) {
			$_SESSION["username"] = $data["username"];
			$_SESSION["password"] = $data["password"];
			if ($data["capbac"]==1) {
				header('location: sanpham.php');
			}
			else if($data["capbac"]==2){
				header('location: admin.php');
			}
		}
	}

	
	

	
}
?>