<?php 
	include "../includes/connection-sp.php";
	if (isset($_GET["id_view"])) {
		$sql_view_sp = "SELECT * FROM tblsanpham WHERE id ='".$_GET["id_view"]."'";
		$query_view_sp = mysqli_query($conn,$sql_view_sp);
	}

 ?>
<?php include "../includes/header.php" ?>

	<div class="container-fluid bg-light" style="height: 100px;">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 mt-2">
					<h2 class="pt-4 text-secondary font-weight-normal">GIÀY THỂ THAO</h2>
				</div>
				<div class="col-xl-6 mt-5 text-right list-top-menu">
					<ul class="list-inline">
						<li class="list-inline-item">
							<a href="home.html" class="text-secondary">Trang chủ</a>
						</li>
						
						<li class="list-inline-item">
							<a href="home.html" class="text-dark">Giày</a>
						</li>
					</ul>
				</div>
			</div>
			
		</div>
	</div>

	<div class="container pb-5">
		<div class="row">
			<?php while($data = mysqli_fetch_array($query_view_sp)){

				 ?>
					
			<div class="col-xl-5 mr-5">
				<div>
					<img src="../img/best-seller/<?php echo $data["anh"] ?>" class="w-100" alt="">
				</div>
			</div>
			<div class="col-xl-5 ml-5">
				<br>

				<h3><?php echo $data["ten"]; ?></h3><br>
				<h4 class="text-weight-bold text-secondary"><?php echo $data["gia"] ?> VNĐ</h4>
				<br>
				<h5>Chất liệu : <?php echo $data["chatlieu"]; ?></h5>
				<br>
				<small><?php echo $data["mota"]; ?></small>
				
				<div class="dropdown1 pt-5">
					<button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Size
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="#">Size</a>
						<a class="dropdown-item" href="#">1</a>
						<a class="dropdown-item" href="#">2</a>
						<a class="dropdown-item" href="#">3</a>
						<a class="dropdown-item" href="#">4</a>
						<a class="dropdown-item" href="#">5</a>
					</div>

					<h6 class="mt-4">Còn lại : <?php echo $data["tonkho"]; ?></h6>
					<div class="mt-5">
						Số lượng : <div class="btn-group" role="group" aria-label="Basic example">
							<button type="button" class="btn btn-outline-secondary">-</button>
							<button type="button" class="btn btn-outline-secondary">1</button>
							<button type="button" class="btn btn-outline-secondary">+</button>
						</div>
					</div>
					<?php 
						}
					 ?>
					<button type="button" class="btn btn-info btn-lg mt-5">Thêm vào giỏ hàng +</button>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div id="list-example" class="list-group">
			<a class="list-group-item list-group-item-action" href="#list-item-1">Chi tiết</a>
			<a class="list-group-item list-group-item-action" href="#list-item-2">Size</a>
			<a class="list-group-item list-group-item-action" href="#list-item-3">Review</a>
			<a class="list-group-item list-group-item-action" href="#list-item-4">Vận chuyển</a>
		</div>
		<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
			<h4 id="list-item-1">Chi tiết</h4>
			<p>...</p>
			<h4 id="list-item-2">Size</h4>
			<p>...</p>
			<h4 id="list-item-3">Review</h4>
			<p>...</p>
			<h4 id="list-item-4">Vận chuyển</h4>
			<p>...</p>
		</div>
	</div>
	<div class="container border mb-5" style="height: 500px">
		<form class="mt-5">
			<div class="form-group">
				<label for="exampleFormControlInput1">Địa chỉ Email</label>
				<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@gmail.com">
			</div>
			<div class="form-group">
				<label for="exampleFormControlSelect1">Chọn...</label>
				<select class="form-control" id="exampleFormControlSelect1">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
			<div class="form-group">
				<label for="exampleFormControlSelect2">Lựa chọn ...</label>
				<select multiple class="form-control" id="exampleFormControlSelect2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
			<div class="form-group">
				<label for="exampleFormControlTextarea1">Đánh giá</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>
		</form>
	</div>

<?php include "../includes/footer.php" ?>