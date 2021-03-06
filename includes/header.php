<!-- ---------------------------------------dang nhap--------------------------- -->
<?php 
require_once("../controller/login.php")
?>
<!-- ---------------------------------------dang ki--------------------------- -->


<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SHOP</title>
	<link rel="stylesheet" href="../style/css/style.css">
	<link rel="stylesheet" href="../style/bs4/bootstrap.min.css">
	<link rel="stylesheet" href="../style/font-awe/fontawesome-free-5.15.1-web/css/all.min.css">

	<script src="../style/bs4/jquery-3.2.1.slim.min.js"></script>
	<script src="../style/bs4/popper.min.js"></script>
	<script src="../style/bs4/bootstrap.min.js"></script>
	<script src="../style/jquery/jquery-3.5.1.min.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
	<script src="../style/jquery/jquery.validate.min.js"></script>
</head>
<body>

	<div class="container-fluid bg-dark sticky-top" style="height: 35px;">
		<div class="container h-100">
			<div class="row h-100">
				<div class="col-md-6 top-left pt-1">
					<ul class="list-inline h-100">
						<li class="list-inline-item pr-1">
							<a href="" data-toggle="tooltip" data-placement="bottom" title="Twitter">
								<i class="fab fa-twitter text-secondary"></i>
							</a>
						</li>
						<li class="list-inline-item pr-1"
						><a href="https://www.facebook.com/" data-toggle="tooltip" data-placement="bottom" title="Facebook">
							<i class="fab fa-facebook-f text-secondary"></i>
						</a>
					</li>
					<li class="list-inline-item pr-1">
						<a href="https://www.instagram.com/" data-toggle="tooltip" data-placement="bottom" title="Instagram">
							<i class="fab fa-instagram text-secondary"></i>
						</a>
					</li>
					<li class="list-inline-item pr-1">
						<a href="https://www.youtube.com/" data-toggle="tooltip" data-placement="bottom" title="Youtube">
							<i class="fab fa-youtube text-secondary"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-6 top-right h-100">
				<ul class="list-inline h-100 float-right" style="line-height: 30px">
					<li class="list-inline-item">
						<div class="small">
							<?php 
							if(isset($_SESSION["username"])){ 
								$username = $_SESSION["username"];

								?>
								<a href="../view/manager-account-client.php" class="text-white" >Qu???n l?? t??i kho???n</a>
								<?php 
							} else {
								echo '<a href="" class="text-white" data-toggle="modal" data-target="#exampleModal1">????ng nh???p</a>';
							}
							?>
							
							<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">????ng nh???p</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form method="post">
												<div class="form-group">
													<label for="exampleInputEmail1">?????a ch??? Email</label>
													<input type="email" name="login_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

													<small id="emailHelp" class="form-text text-muted">Ch??ng t??i s??? kh??ng bao gi??? chia s??? ?????a ch??? email c???a b???n cho ai kh??c.</small>
												</div>

												<div class="form-group">
													<label for="exampleInputPassword1">M???t kh???u</label>
													<input type="password" name="login_pass" class="form-control" id="exampleInputPassword1">
												</div>

												

												<button type="submit" name="btn_login" class="btn btn-primary">????ng nh???p</button>
											</form>
										</div>

									</div>
								</div>
							</div>
							<span class="text-secondary">ho???c</span>
							<?php 
							if(isset($_SESSION["username"])){ 
								$username = $_SESSION["username"];

								?>
								<a href="../controller/logout.php?id_out=1" class="text-white">Tho??t</a>
								<?php 
							} else {
								echo '<a href="" class="text-white" data-toggle="modal" data-target="#exampleModal2">????ng k??</a>';
							}
							?>
							
							<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title text-info" id="exampleModalLabel">T???o t??i kho???n m???i</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form method="post" id="form-dangki">
												<label class="text-info" style="margin-right: 54px">H???:</label>
												<input style="width: 200px" class="ml-4" type="text" id="dkho" name="dkho"><br>

												<label class="text-info" style="margin-right: 50px">T??n:</label>
												<input style="width: 200px" class="ml-4" type="text" id="dkten" name="dkten"><br>

												<label class="text-info mr-5">Email:</label>
												<input style="width: 200px" class="ml-3" type="text" id="dkusername" name="dkusername"><br>

												<label class="text-info" style="margin-right: 40px">M???t kh???u:</label>
											<input style="width: 200px" type="password" id="dkpass" name="dkpass"><br>

												<label class="text-info mr-5">Nh???p l???i:</label>
									<input style="width: 200px" type="password" id="dkrepass" name="dkrepass"><br><br>

												<button type="submit" class="btn btn-success" name="dangkibtn" id="dangkibtn" data-dismiss="modal">T???o t??i kho???n</button>
											</form>
										</div>

									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="list-inline-item">
						<a href="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-search text-white border-left pl-2"></i></a>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							<div>
								<nav class="navbar navbar-light bg-light">
									<form class="form-inline" method="post">
										<input class="form-control mr-sm-2" type="search" name="search" placeholder="Tim Kiem.." aria-label="Tim Kiem...">
										<button class="btn btn-outline-info my-2 my-sm-0" name="search-smit" type="submit">T??m ki???m</button>
									</form>
								</nav>
							</div>


						</div>
					</li>
					<li class="list-inline-item bg-info text-center h-100" style="width: 80px">
						<a href="" class="text-white" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-shopping-cart"></i><span>$</span>0</a>
						<div class="dropdown-menu bg-info position-absolute text-white" style="width: 300px" aria-labelledby="dropdownMenuLink">
							<h5 class="ml-5">Gi??? h??ng</h5>
							<a class="dropdown-item text-white" href="#">Item</a>
							<a class="dropdown-item text-white" href="#">Item</a>
							<div class="border-top pt-3"><button type="button" class="btn btn-light ml-3">Gi??? H??ng</button>
								<button type="button" class="btn btn-light ml-3">C???a H??ng</button>
							</div>
						</div>
					</li>
				</ul>

			</div>
		</div>
	</div>
</div>

<!-- ------------------------------header --------------------------------------------------------->
<div class="container shadow rounded"style="height: 100px;">
	<div class="row h-100">
		<div class="col-md-4">
			<div>
				<a href="home.php"><img width="140px" src="../img/img_home/logo1.png" alt=""></a>
			</div>
		</div>
		<div class="col-md-8">
			<ul class="nav justify-content-end" style="line-height: 100px">
				<li class="nav-item">
					<button type="button" class="btn text-info bg-white font-weight-bold mr-2" data-toggle="dropdown">
						TRANG CH???
					</button>

				</li>
				<li class="nav-item dropdown">
					<button type="button" class="btn text-dark bg-white font-weight-bold mr-2 dropdown-button" data-toggle="dropdown">
						C???A H??NG
					</button>
					<div class="dropdown-menu" style="width: 250px">
						<a class="dropdown-item" href="sanpham.php">
							GI??Y <img class="pl-5" style="width:150px" src="../img/img_home/Featured Collection/vans-oldskool.jpg" alt="">
						</a>
						<a class="dropdown-item" href="#">
							QU???N <img class="pl-5" style="width:150px" src="../img/img_home/Featured Collection/vans-oldskool.jpg" alt="">
						</a>
						<a class="dropdown-item" href="#">
							??O <img class="pl-5" style="width:150px" src="../img/img_home/Featured Collection/vans-oldskool.jpg" alt="">
						</a>
						<a class="dropdown-item" href="#">
							PH??? KI???N <img class="pl-5" style="width:150px" src="../img/img_home/Featured Collection/vans-oldskool.jpg" alt="">
						</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<button type="button" class="btn text-dark bg-white font-weight-bold mr-2" data-toggle="dropdown">
						BLOG
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">XEM NHI???U NH???T</a>
						<a class="dropdown-item" href="#">M???I NH???T</a>
						<a class="dropdown-item" href="#">DANH M???C</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<button type="button" class="btn text-dark bg-white font-weight-bold mr-2" data-toggle="dropdown">
						T??I KHO???N
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">T??I KHO???N</a>
						<a class="dropdown-item" href="#">L???CH S???</a>

					</div>
				</li>
				<li class="nav-item dropdown">
					<button type="button" class="btn text-dark bg-white font-weight-bold mr-2" data-toggle="dropdown">
						TRANG
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">TH??NG TIN</a>
						<a class="dropdown-item" href="#">L???CH S???</a>

					</div>
				</li>
			</ul>

		</div>
	</div>

</div>