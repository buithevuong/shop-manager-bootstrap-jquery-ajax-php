<?php
$server_username = "root";
$server_password = "";
$server_host = "localhost";
$database = "sanpham";

$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("khong the ket noi mysql");
 mysqli_query($conn,"SET NAMES 'UTF8'");
 
?>