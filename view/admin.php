<?php require_once("../includes/connection-sp.php") ?>

<?php require_once("../controller/view-sp.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ADMIN</title>
	<link rel="stylesheet" href="../style/css/admin.css">
	<link rel="stylesheet" href="../style/bs4/bootstrap.min.css">
	<link rel="stylesheet" href="../style/font-awe/fontawesome-free-5.15.1-web/css/all.min.css">

	<script src="../style/bs4/jquery-3.2.1.slim.min.js"></script>
	<script src="../style/bs4/popper.min.js"></script>
	<script src="../style/bs4/bootstrap.min.js"></script>
	<script src="../style/jquery/jquery-3.5.1.min.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
</head>
<body>
	<!-- ------------------------------------------------------------ -->
	<div class="container border mb-3" style="height: 50px">
		<div class="row">
			<div class="col-lg-2">
				<div class=" text-center text-warning pt-2"><a href="admin.php">Admin</a></div>
			</div>
			<div class="col-lg-2">
				<div class=" text-primary pt-2">
					<a href="home.php">SHOP</a>
				</div>

			</div>
			<div class="col-lg-8">
				<form class="form-inline pt-1" method="post">
					<input class="form-control mr-sm-2" type="search" name="search" id="ndsearch" placeholder="Tim kiem ten san pham..." aria-label="Search" style="width: 400px">
					<button class="search_smit btn btn-outline-info my-2 my-sm-0" name="search-smit" type="submit">Search</button>
				</form>
			</div>
		</div>
	</div>
	<script src="../style/js/jquery_ajax_search.js"></script>
	<!-- ------------------------------------------------------------ -->

	<!-- Test tablist -->
	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="tongquan" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sản phẩm</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="donhang" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Quản lý tài khoản</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="sanpham" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">...</a>
		</li>	
	</ul>
	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="tongquan">
			<div class="container sppanel w-100 h-100">
					<div class="row h-100">
						<div class="col-md-11">
							<div class="table-responsive">          
								<table class="table border">
									<thead>
										<tr>
											<th><input type="checkbox" id="select_allsp" value="123" name=""></th>
											<th>STT</th>
											<th>Tên</th>
											
											<th>Nsx</th>
											<th>Chất Liệu</th>
											<th>Ảnh</th>
											<th class="thmota_sp">Mô tả</th>
											<th>Giá</th>
											<th>Tồn kho</th>
											<th>Xem</th>
											<th>Sửa</th>
											<!-- x` -->
										</tr>
										
									</thead>
									<tbody>

										<tr id="add_html"></tr>
										<!-- ------------------------------------------------------------ -->
										<?php 

										include("list-sp-admin.php"); 

										?>


										
									</tbody>
								</table>
								<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content modal1">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Sửa</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<form method="post"> <!-- form update -->

													<label class="mr-5">ID:</label>
													<input type="text" value="" name="id1" id="id1">
													<br>

													<label class="mr-5">Tên sản phẩm:</label>
													<input type="text" value="" placeholder="nhập tên sản phẩm" name="ten1" id="ten1">
													<br>

													<label class="mr-5">Chất liệu:</label>
													<input type="text" value="" placeholder="Nhập loại sản phẩm" name="chatlieu1" id="chatlieu1">
													<br>

													<label class="mr-5">Ảnh:</label>
													<input type="file" value="" placeholder="Nhập ảnh" name="anh1" id="anh1">
													<br>

													<label class="mr-5">Giá:</label>
													<input type="text" value="" name="gia1" placeholder="Nhập giá" id="gia1">
													<br>

													<label class="mr-5">Tồn kho:</label>
													<input  type="text" value="" placeholder="Nhập số lượng" name="tonkho1" id="tonkho1"><br>

													<label class="mr-5">Mô tả:</label><br>
													<textarea name="mota1" value="" id="mota1" class="areat"></textarea><br>

													<button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
													<!-- <button onclick="testmodal()">tắt</button> -->
													<button type="submit" id="btnchange" class="btn btn-primary" data-dismiss="modal">Thay đổi</button>

												</form>
											</div>

										</div>
									</div>
								</div> <!-- update form -->
							</div>
						</div>

						<!-- -------------------------------------------------Button thêm---------- -->				
						<div class="col-md-1 bg-info">

							<div class="dropdown-sx dropleft sticky-top">
								<button class="btn btn-primary dropdown-toggle w-100" style="height: 100px" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Sắp <br> xếp
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





							<!-- Button trigger modal -->
							<button type="button" class="btn btn-success mt-5 w-100 sticky-top" style="height: 100px" data-toggle="modal" data-target="#exampleModal">
								Thêm
							</button>
							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content modal1">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form method="post">
												<label class="mr-5">Tên sản phẩm:</label>
												<input name="ten" type="text" id="addten" placeholder="nhập tên sản phẩm" required="true"><br>

												<label class="mr-5">Chất liệu:</label>
												<input name="chatlieu" type="text" id="addchatlieu" placeholder="Nhập loại sản phẩm"><br>

												<label class="mr-5">Ảnh:</label>
												<input name="anh" type="file" id="addanh" placeholder="Nhập ảnh"><br>

												<label class="mr-5">Giá:</label>
												<input name="gia" type="text" id="addgia" placeholder="Nhập giá"><br>

												<label class="mr-5">Tồn kho:</label>
												<input name="tonkho" type="text" id="addtonkho" placeholder="Nhập số lượng"><br>

												<label class="mr-5">Mô tả:</label><br>
												<textarea name="mota" id="addmota" class="areat"></textarea><br>
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
												<button type="submit" name="btn_add" id="add_sp" class="btn btn-primary" data-dismiss="modal">Thêm</button>
											</form>
										</div>

									</div>
								</div>
							</div>
							
 

							<button class="btn btn-danger mt-5 w-100" id="delete_allselect" style="height: 100px">Xóa <br> đã <br>chọn</button>
						</div>
					</div>
					
				</div>
		</div>


		<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="donhang">
			<div class="dhpanel w-100 h-100 bg-info">Danh sách tài khoản</div>
		</div>


		<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="sanpham">
			...
			</div>
	</div>



	<!-- end Test tablist -->
<!-- 	<div class="container-fluid" style="height: 1000px">
		<div class="row h-100">
			
			<div class="col-md-2 border bg-info">
				<div class="sticky-top mt-3" style="height: 300px">
					<ul class="list-left">
						<li class="bg-primary text-white">SHOP</li>
						<li id="tq"><button class="w-100 h-100 bg-warning">TỔNG QUAN</button></li>
						<li id="dh"><button class="w-100 h-100 bg-warning">ĐƠN HÀNG</button></li>
						<li id="sp"><button class="w-100 h-100 bg-warning">SẢN PHẨM</button></li>
						<li id="kh"><button class="w-100 h-100 bg-warning">KHÁCH HÀNG</button></li>
						<li id="ds"><button class="w-100 h-100 bg-warning">DOANH SỐ</button></li>
					</ul>
				</div>
			</div>

			<div class="col-md-10 border border-primary rounded">
				
				

				

				

				<div class="khpanel w-100 h-100 bg-info d-none"></div>

				<div class="dspanel w-100 h-100 bg-info d-none"></div>
				
			</div>
		</div>
	</div> -->
</body>

<script src="../style/js/jquery_ajax-update-sp.js"></script>
<script src="../style/js/js_all.js"></script>
<script src="../style/js/jquery_ajax_addsp.js"></script>
</html>