<?php include "../includes/header.php" ?>
<?php require_once("../includes/connection-sp.php") ?>
<?php require_once("../controller/view-sp.php") ?>

<!-- ------------------------------------------------------------------------>
<div class="container-fluid bg-light" style="height: 100px;">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 mt-2">
				<h2 class="pt-4 text-secondary font-weight-normal">GIÀY THỂ THAO</h2>
			</div>
			<div class="col-xl-6 mt-5 text-right list-top-menu">
				<ul class="list-inline">
					<li class="list-inline-item">
						<a href="home.php" class="text-secondary">Trang chủ</a>
					</li>
					<li class="list-inline-item">
						<a href="home.php" class="text-secondary">Cửa hàng</a>
					</li>
					<li class="list-inline-item">
						<a href="home.php" class="text-dark">Giày</a>
					</li>
				</ul>
			</div>
		</div>

	</div>
</div>

<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-xl-3 pt-5">
				<ul class="list-group">
					<li class="list-group-item bg-info active">Danh mục sản phẩm</li>
					<li class="list-group-item">
						<div class="dropdown1">
							<a class="text-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Nam
							</a>

							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="#">Áo </a>
								<a class="dropdown-item" href="#">Quần</a>
								<a class="dropdown-item" href="#">Giày</a>
							</div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="dropdown1">
							<a class="text-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Nữ
							</a>

							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="#">Áo </a>
								<a class="dropdown-item" href="#">Quần</a>
								<a class="dropdown-item" href="#">Giày</a>
							</div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="dropdown1">
							<a class="text-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Trẻ em
							</a>

							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="#">Áo </a>
								<a class="dropdown-item" href="#">Quần</a>
								<a class="dropdown-item" href="#">Giày</a>
							</div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="dropdown1">
							<a class="text-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Phụ kiện
							</a>

							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="#">Cặp</a>
								<a class="dropdown-item" href="#">Nhẫn</a>
								<a class="dropdown-item" href="#">Dây chuyền</a>
							</div>
						</div>
					</li>
				</ul>

				<form>
					<div class="form-group mt-5	">
						<label for="formControlRange">Giá cả</label>
						<input type="range" class="form-control-range" id="formControlRange">
					</div>
				</form>

				<ul class="list-group mt-5">
					<li class="list-group-item d-flex justify-content-between align-items-center">
						Đỏ
						<span class="badge badge-info badge-pill">14</span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						Đen 
						<span class="badge badge-info badge-pill">2</span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						Trắng
						<span class="badge badge-info badge-pill">1</span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						Vàng
						<span class="badge badge-info badge-pill">1</span>
					</li>
				</ul>

				<ul class="list-group mt-5">
					<li class="list-group-item d-flex justify-content-between align-items-center">
						Nhỏ
						<span class="badge badge-info badge-pill">14</span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						Trung bình
						<span class="badge badge-info badge-pill">2</span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						Lớn
						<span class="badge badge-info badge-pill">1</span>
					</li>

				</ul>
			</div>
			<div class="col-xl-9">
				<div class="container pt-5">
					<div class="row">
						<div class="col-xl-6">
							<div class="dropdown1">
								<button class="btn btn-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Sắp xếp
								</button>
								<form method="post">
									<div class="dropdown-menu sx-menu" style="width: 150px;" aria-labelledby="dropdownMenuButton">
										<button class="btn btn-muted  border" name="thapdencao">Giá thấp đến cao</button><br>
										<button class="btn btn-muted border" name="caodenthap">Giá cao đến thấp</button>
										<button class="btn btn-muted  border" name="moinhat">Mới nhất</button>
										<button class="btn btn-muted  border" name="banchay">Bán chạy</button>
									</div>
								</form>
								
							</div>
						</div>
					</div>
				</div>
				<!-- --------------------------------------------------------------------- -->
				<div class="container pt-5 mb-5" style="height: 100%">
					<div class="table-responsive">
						<table class="table">
							<tr>
								<?php 

								$i = 0;
								while ( $data = mysqli_fetch_array($query_list) ) {	
									if ($i == 3) {
									echo "</tr>";
									$i = 0;
								}
								?>
								<td><form>
									<a href="sanpham-chitiet.php?id_view=<?php echo $data["id"]; ?>">
										<img src="../img/best-seller/<?php echo $data["anh"] ?>" alt="">
									</a>
									<a href="sanpham-chitiet.php?id_view=<?php echo $data["id"]; ?>"><h5 class="text-weight-bold text-dark">
										<?php echo $data["ten"]; ?>
									</h5></a>
									<h4 class="text-weight-bold text-secondary">
										<?php echo $data["gia"]; ?>
									</h4>
								</form>
									
								</td>
								<?php 

								$i++;
							}
							?>
						</table>
					</div>

				</div>
			</div>
		</div>
	</div>	

	<?php include "../includes/footer.php" ?>


