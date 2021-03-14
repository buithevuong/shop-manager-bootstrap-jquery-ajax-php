<?php include "../includes/connection-sp.php" ?>
<?php include "../controller/view-sp.php" ?>
<?php include "../controller/search-sp-home.php" ?>

<?php include "../includes/header.php" ?>
<!-- ------------------------------banner --------------------------------------------------------->
<div class="container-fluid">
	<div id="demo" class="carousel slide" data-ride="carousel">

		<!-- Indicators -->
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
		</ul>

		<!-- The slideshow -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="../img/img_home/Banner/revolt-164_6wVEHfI-unsplash.jpg" width="100%" height="500px" alt="Los Angeles">
				<div class="carousel-caption">
					<h1 class="text-white">Giày thể thao</h1>
					<p class="text-white">Bộ sưu tập giày thể thao</p>
					<button type="button" class="btn btn-outline-info text-white">MUA NGAY</button>
				</div>
			</div>
			<div class="carousel-item">
				<img src="../img/img_home/Banner/lucas-ludwig-aRk7FZie1T4-unsplash.jpg" width="100%" height="500px" alt="Chicago">
				<div class="carousel-caption">
					<h1 class="text-white">Quần áo</h1>
					<p class="text-white">Bộ sưu tập quần áo</p>
					<button type="button" class="btn btn-outline-info text-white">MUA NGAY</button>
				</div>
			</div>
			<div class="carousel-item">
				<img src="../img/img_home/Banner/banner3.jpg" width="100%" height="500px" alt="New York">
				<div class="carousel-caption">
					<h1 class="text-dark">Ván trượt</h1>
					<p class="text-dark">Bộ sưu tập ván trượt</p>
					<button type="button" class="btn btn-outline-info text-dark">MUA NGAY</button>
				</div>
			</div>
		</div>

		<!-- Left and right controls -->
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>

	</div>
</div>


<!-- ------------------------------1 --------------------------------------------------------->


<div class="container-fluid d-bannera">
	<div class="row d-banner">
		<div class="col-md-3">
			<a  href="">
				<img class="d-banner1" src="../img/banner/banner_image_1.png" width="250px" alt="">
			</a>
			<a href="">
				<img class="d-banner2"  src="../img/banner/banner_image_2.png" width="250px" alt="">
			</a>
		</div>
		<div class="col-md-6">
			<a href="">
				<img class="d-banner3" src="../img/banner/banner_image_3.png" width="550px" alt="">
			</a>
		</div>
		<div class="col-md-3">
			<a href="">
				<img class="d-banner4"  src="../img/banner/banner_image_4.png" width="250px" alt="">
			</a>
			<a href="">
				<img class="d-banner5"  src="../img/banner/banner_image_5.png" width="250px" alt="">
			</a>
		</div>
	</div>
</div>
<!-- ------------------------------1 --------------------------------------------------------->
<div class="container pt-5 mb-5">
	<div class="border-bottom border-info add-border" style="height: 50px"><h4>Bộ Sưu Tập Nổi Bật</h4></div>

		<!-- <div class="row">
			<div class="col-md-4 col-12">
				<div class="thumbnail">
					<div class="imageWrapper">
		                <img src="../img/img_home/Featured Collection/vans-oldskool.jpg" alt="feature-collection-image">
		                <div class="caption">
		                    <h3>Shoes Collections</h3>
		                    <small>Start From $59.00</small>
		                </div>
		                <div class="masking">
		                    <a href="product-grid-left-sidebar.html" class="btn viewBtn">View Products</a>
		                </div>
	                </div>
				</div>
			</div>
		</div> -->
		<?php 
			$xd = 0;
			$sl = 0;
			while ( $data = mysqli_fetch_array($query_list) ){
				
				if ($xd==0) {
					echo "<div class=\"row mt-4\">";
				}
				
		 ?>
		
			<div class="col-xl-4 image1">
				<a href="sanpham-chitiet.php?id_view=<?php echo $data["id"]; ?>">
					<img src="../img/best-seller/<?php echo $data["anh"] ?>" class="position-relative w-100" alt="">
					<div class="position-absolute img1-caption">
						<h4 class="text-dark"><?php echo $data["ten"]; ?></h4>
						<p class="text-secondary"><?php echo $data["gia"] ?></p>
						<a href="sanpham-chitiet.php?id_view=<?php echo $data["id"]; ?>">
							<button type="button" id="img1-caption-b" class="btn btn-white">Xem chi tiết</button></a>
					</div>
				</a>

			</div>
			

		<?php
			$xd++; 
			
			if ($xd==3) {
					echo "</div>";
					$xd=0;
					$sl++;
				}
			if ($sl==2) {
				break;
			}
			}
			
		 ?>
		<!-- <div class="row mt-4">
			<div class="col-xl-4 image1">
				<a href=""><img src="../img/img_home/Featured Collection/vans-oldskool.jpg" class="position-relative w-100" alt="">
					<div class="position-absolute img1-caption">
						<h4 class="text-dark">Bộ Sưu Tập Giày</h4>
						<p class="text-secondary">Chỉ từ 200.000đ</p>
						<a href="sanpham.php"><button type="button" id="img1-caption-b" class="btn btn-white">Xem chi tiết</button></a>
					</div>
				</a>

			</div>
			<div class="col-xl-4 image1">
				<a href=""><img src="../img/img_home/Featured Collection/vans-oldskool.jpg" class="position-relative w-100" alt="">
					<div class="position-absolute img1-caption">
						<h4 class="text-dark">Bộ Sưu Tập Giày</h4>
						<p class="text-secondary">Chỉ từ 200.000đ</p>
						<button type="button" id="img1-caption-b" class="btn btn-white">Xem chi tiết</button>
					</div>
				</a>

			</div>
			<div class="col-xl-4 image1">
				<a href=""><img src="../img/img_home/Featured Collection/vans-oldskool.jpg" class="position-relative w-100" alt="">
					<div class="position-absolute img1-caption">
						<h4 class="text-dark">Bộ Sưu Tập Giày</h4>
						<p class="text-secondary">Chỉ từ 200.000đ</p>
						<button type="button" id="img1-caption-b" class="btn btn-white">Xem chi tiết</button>
					</div>
				</a>

			</div>
		
 -->

	</div>
	<!-- ------------------------------2 --------------------------------------------------------->
	<div class="container pt-5 mb-5">
		<div class="border-bottom border-info add-border"><h4>Sản Phẩm Nổi Bật</h4></div>
		<div class="row mt-4 slider">
			
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="container-fluid" style="height: 380px">
							<div class="row">
								<div class="col-xl-3">
									<a href="sanpham-chitiet.php">
										<img class="../img-2" src="../img/img_home/Featured Products/product-03.jpg" alt="">
									</a>
									<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
									<h4 class="text-weight-bold text-secondary">$79</h4>
								</div>
								<div class="col-xl-3">
									<a href="sanpham-chitiet.php">
										<img src="../img/img_home/Featured Products/product-03.jpg" alt="">
									</a>
									<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
									<h4 class="text-weight-bold text-secondary">$79</h4>
								</div>
								<div class="col-xl-3">
									<a href="sanpham-chitiet.php">
										<img src="../img/img_home/Featured Products/product-03.jpg" alt="">
									</a>
									<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
									<h4 class="text-weight-bold text-secondary">$79</h4>
								</div>
								<div class="col-xl-3">
									<a href="sanpham-chitiet.php">
										<img src="../img/img_home/Featured Products/product-03.jpg" alt="">
									</a>
									<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
									<h4 class="text-weight-bold text-secondary">$79</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="container-fluid" style="height: 380px">
							<div class="row">
								<div class="col-xl-3">
									<a href="sanpham-chitiet.php">
										<img class="../img-2" src="../img/img_home/Featured Products/product-03.jpg" alt="">
									</a>
									<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
									<h4 class="text-weight-bold text-secondary">$79</h4>
								</div>
								<div class="col-xl-3">
									<a href="sanpham-chitiet.php">
										<img src="../img/img_home/Featured Products/product-03.jpg" alt="">
									</a>
									<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
									<h4 class="text-weight-bold text-secondary">$79</h4>
								</div>
								<div class="col-xl-3">
									<a href="sanpham-chitiet.php">
										<img src="../img/img_home/Featured Products/product-03.jpg" alt="">
									</a>
									<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
									<h4 class="text-weight-bold text-secondary">$79</h4>
								</div>
								<div class="col-xl-3">
									<a href="sanpham-chitiet.php">
										<img src="../img/img_home/Featured Products/product-03.jpg" alt="">
									</a>
									<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
									<h4 class="text-weight-bold text-secondary">$79</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="container-fluid" style="height: 380px">
							<div class="row">
								<div class="col-xl-3">
									<a href="sanpham-chitiet.php">
										<img class="../img-2" src="../img/img_home/Featured Products/product-03.jpg" alt="">
									</a>
									<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
									<h4 class="text-weight-bold text-secondary">$79</h4>
								</div>
								<div class="col-xl-3">
									<a href="sanpham-chitiet.php">
										<img src="../img/img_home/Featured Products/product-03.jpg" alt="">
									</a>
									<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
									<h4 class="text-weight-bold text-secondary">$79</h4>
								</div>
								<div class="col-xl-3">
									<a href="sanpham-chitiet.php">
										<img src="../img/img_home/Featured Products/product-03.jpg" alt="">
									</a>
									<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
									<h4 class="text-weight-bold text-secondary">$79</h4>
								</div>
								<div class="col-xl-3">
									<a href="sanpham-chitiet.php">
										<img src="../img/img_home/Featured Products/product-03.jpg" alt="">
									</a>
									<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
									<h4 class="text-weight-bold text-secondary">$79</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!-- <div class="col-xl-3">
				<a href="sanpham-chitiet.html">
					<img class="../img-2" src="../img/img_home/Featured Products/product-03.jpg" alt="">
				</a>
				<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
				<h4 class="text-weight-bold text-secondary">$79</h4>
			</div>
			<div class="col-xl-3">
				<a href="sanpham-chitiet.html">
					<img src="../img/img_home/Featured Products/product-03.jpg" alt="">
				</a>
				<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
				<h4 class="text-weight-bold text-secondary">$79</h4>
			</div>
			<div class="col-xl-3">
				<a href="sanpham-chitiet.html">
					<img src="../img/img_home/Featured Products/product-03.jpg" alt="">
				</a>
				<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
				<h4 class="text-weight-bold text-secondary">$79</h4>
			</div>
			<div class="col-xl-3">
				<a href="sanpham-chitiet.html">
					<img src="../img/img_home/Featured Products/product-03.jpg" alt="">
				</a>
				<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
				<h4 class="text-weight-bold text-secondary">$79</h4>
			</div> -->
		</div>


		<div class="row mt-4 slider">
			
			<div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="container-fluid" style="height: 380px">
							<div class="row">
								<div class="col-xl-3">
									<a href="sanpham-chitiet.php">
										<img class="../img-2" src="../img/img_home/Featured Products/product-03.jpg" alt="">
									</a>
									<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
									<h4 class="text-weight-bold text-secondary">$79</h4>
								</div>
								<div class="col-xl-3">
									<a href="sanpham-chitiet.php">
										<img src="../img/img_home/Featured Products/product-03.jpg" alt="">
									</a>
									<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
									<h4 class="text-weight-bold text-secondary">$79</h4>
								</div>
								<div class="col-xl-3">
									<a href="sanpham-chitiet.php">
										<img src="../img/img_home/Featured Products/product-03.jpg" alt="">
									</a>
									<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
									<h4 class="text-weight-bold text-secondary">$79</h4>
								</div>
								<div class="col-xl-3">
									<a href="sanpham-chitiet.php">
										<img src="../img/img_home/Featured Products/product-03.jpg" alt="">
									</a>
									<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
									<h4 class="text-weight-bold text-secondary">$79</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="container-fluid" style="height: 380px">
							<div class="row">
								<div class="col-xl-3">
									<a href="sanpham-chitiet.php">
										<img class="../img-2" src="../img/img_home/Featured Products/product-03.jpg" alt="">
									</a>
									<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
									<h4 class="text-weight-bold text-secondary">$79</h4>
								</div>
								<div class="col-xl-3">
									<a href="sanpham-chitiet.php">
										<img src="../img/img_home/Featured Products/product-03.jpg" alt="">
									</a>
									<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
									<h4 class="text-weight-bold text-secondary">$79</h4>
								</div>
								<div class="col-xl-3">
									<a href="sanpham-chitiet.php">
										<img src="../img/img_home/Featured Products/product-03.jpg" alt="">
									</a>
									<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
									<h4 class="text-weight-bold text-secondary">$79</h4>
								</div>
								<div class="col-xl-3">
									<a href="sanpham-chitiet.php">
										<img src="../img/img_home/Featured Products/product-03.jpg" alt="">
									</a>
									<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
									<h4 class="text-weight-bold text-secondary">$79</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="container-fluid" style="height: 380px">
							<div class="row">
								<div class="col-xl-3">
									<a href="sanpham-chitiet.php">
										<img class="../img-2" src="../img/img_home/Featured Products/product-03.jpg" alt="">
									</a>
									<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
									<h4 class="text-weight-bold text-secondary">$79</h4>
								</div>
								<div class="col-xl-3">
									<a href="sanpham-chitiet.php">
										<img src="../img/img_home/Featured Products/product-03.jpg" alt="">
									</a>
									<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
									<h4 class="text-weight-bold text-secondary">$79</h4>
								</div>
								<div class="col-xl-3">
									<a href="sanpham-chitiet.php">
										<img src="../img/img_home/Featured Products/product-03.jpg" alt="">
									</a>
									<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
									<h4 class="text-weight-bold text-secondary">$79</h4>
								</div>
								<div class="col-xl-3">
									<a href="sanpham-chitiet.php">
										<img src="../img/img_home/Featured Products/product-03.jpg" alt="">
									</a>
									<a href=""><h5 class="text-weight-bold text-dark">Khăn mùa đông</h5></a>
									<h4 class="text-weight-bold text-secondary">$79</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			
		</div>
	</div>


<!-- ------------------------------1 --------------------------------------------------------->



	<div class="container-fluid best-seller pb-5">

		<div class="row best-seller1">
			<div class="col-md-5 col-10 best-seller11">
				<h5 style="color: gray">BEST SELLER</h5>
				<h4 class="hot font-weight-bold">Hot Nhất Tại VANS Việt Nam</h4>
			</div>
			<div class="col-md-4">

			</div>
			<div class="col-md-3 col-2" style="line-height: 100px">
				<a href="" id="viewa"><span>Xem tất cả</span><i class="fas fa-long-arrow-alt-right"></i></a>
			</div>
		</div>
		<!-- ---------------------------------------------------------------------------------------------- -->
		<div class="row">
			<div class="col-md-12 slide3">	
				<div id="carouselExampleControls3" class="carousel slide slide33" data-ride="carousel">
					<div class="carousel-inner slide333">
						<div class="carousel-item active" style="width: 100%">
							<div class="row">	
								<div class="col-md-3 col-12 slide3333"><a href="">
									<img src="../img/best-seller/vans-canvas-old-skool-classic-true-white-1.png" class="d-block w-30" alt="...">
								</a>
								<div class="w-100 size">
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
								</div>	
								<a href="">
									<h4 class="text-dark">VANS CLASSIC SLIP-ON</h4>
								</a>
								<h3>1.450.000đ</h3>
								<div>
									<button id="tuychon">TÙY CHỌN</button>
								</div>
							</div>
							<div class="col-md-3 slide3333"><a href="	"><img src="../img/best-seller/vans-checkerboard-slip-on-classic-white-black-vn000eyebww-1.png" class="d-block w-30" alt="..."></a>
								<div class="w-100 size">
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
								</div>	
								<a href="">
									<h4 class="text-dark">VANS CLASSIC SLIP-ON</h4>
								</a>
								<h3>1.450.000đ</h3>
								<div>
									<button id="tuychon">TÙY CHỌN</button>
								</div>
							</div>
							<div class="col-md-3 slide3333">
								<a href="	"><img src="../img/best-seller/vans-classic-authentic-black-white-vn000ee3blk-1.png" class="d-block w-30" alt="..."></a>	
								<div class="w-100 size">
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
									<div id="s-size">35</div>
								</div>	
								<a href="">
									<h4 class="text-dark">VANS CLASSIC SLIP-ON</h4>
								</a>
								<h3>1.450.000đ</h3>
								<div>
									<button id="tuychon">TÙY CHỌN</button>
								</div>
							</div>

						</div>	

					</div>
	<!----------------------------------------------------------------------------------------------- -->
					<div class="carousel-item">
						<div class="row">	
							<div class="col-md-3 col-12 slide3333"><a href="	">
								<img src="../img/best-seller/vans-classic-old-skool-navy-white-vn000d3hnvy1-1.png" class="d-block w-30" alt="...">
							</a>
							<div class="w-100 size">
								<div id="s-size">35</div>
								<div id="s-size">35</div>
								<div id="s-size">35</div>
								<div id="s-size">35</div>
								<div id="s-size">35</div>
								<div id="s-size">35</div>
								<div id="s-size">35</div>
								<div id="s-size">35</div>
								<div id="s-size">35</div>
								<div id="s-size">35</div>
								<div id="s-size">35</div>
								<div id="s-size">35</div>
							</div>	
							<a href="">
								<h4 class="text-dark">VANS CLASSIC SLIP-ON</h4>
							</a>
							<h3>1.450.000đ</h3>
							<div>
								<button id="tuychon">TÙY CHỌN</button>
							</div>
						</div>
						<div class="col-md-3 col-12 slide3333"><a href="	">
							<img src="../img/best-seller/vans-classic-sk8-hi-black-white-vn000d5ib8c-1.png" class="d-block w-30" alt="...">
						</a>
						<div class="w-100 size">
							<div id="s-size">35</div>
							<div id="s-size">35</div>
							<div id="s-size">35</div>
							<div id="s-size">35</div>
							<div id="s-size">35</div>
							<div id="s-size">35</div>
							<div id="s-size">35</div>
							<div id="s-size">35</div>
							<div id="s-size">35</div>
							<div id="s-size">35</div>
							<div id="s-size">35</div>
							<div id="s-size">35</div>
						</div>	
						<a href="">
							<h4 class="text-dark">VANS CLASSIC SLIP-ON</h4>
						</a>
						<h3>1.450.000đ</h3>
						<div>
							<button id="tuychon">TÙY CHỌN</button>
						</div>
					</div>
					<div class="col-md-3 col-12 slide3333"><a href="	">
						<img src="../img/best-seller/vans-classic-sk8-hi-navy-white-vn000d5invy-1.png" class="d-block w-30" alt="...">
					</a>
					<div class="w-100 size">
						<div id="s-size">35</div>
						<div id="s-size">35</div>
						<div id="s-size">35</div>
						<div id="s-size">35</div>
						<div id="s-size">35</div>
						<div id="s-size">35</div>
						<div id="s-size">35</div>
						<div id="s-size">35</div>
						<div id="s-size">35</div>
						<div id="s-size">35</div>
						<div id="s-size">35</div>
						<div id="s-size">35</div>
					</div>	
					<a href="">
						<h4 class="text-dark">VANS CLASSIC SLIP-ON</h4>
					</a>
					<h3>1.450.000đ</h3>
					<div>
						<button id="tuychon">TÙY CHỌN</button>
					</div>
				</div>
			</div>	
		</div>
		<!-- ---------------------------------------------------------------------------------------------- -->
		<div class="carousel-item">
			<div class="row">	
				<div class="col-md-3 col-12 slide3333"><a href="	">
					<img src="../img/best-seller/vans-classic-slip-on-true-white-vn000eyew00-1.png" class="d-block w-30" alt="...">
				</a>
				<div class="w-100 size">
					<div id="s-size">35</div>
					<div id="s-size">35</div>
					<div id="s-size">35</div>
					<div id="s-size">35</div>
					<div id="s-size">35</div>
					<div id="s-size">35</div>
					<div id="s-size">35</div>
					<div id="s-size">35</div>
					<div id="s-size">35</div>
					<div id="s-size">35</div>
					<div id="s-size">35</div>
					<div id="s-size">35</div>
				</div>	
				<a href="">
					<h4 class="text-dark">VANS CLASSIC SLIP-ON</h4>
				</a>
				<h3>1.450.000đ</h3>
				<div>
					<button id="tuychon">TÙY CHỌN</button>
				</div>
			</div>
			<div class="col-md-3 col-12 slide3333"><a href="	">
				<img src="../img/best-seller/vans-old-skool-classic-black-white-vn000d3hy28-1.png" class="d-block w-30" alt="...">
			</a>
			<div class="w-100 size">
				<div id="s-size">35</div>
				<div id="s-size">35</div>
				<div id="s-size">35</div>
				<div id="s-size">35</div>
				<div id="s-size">35</div>
				<div id="s-size">35</div>
				<div id="s-size">35</div>
				<div id="s-size">35</div>
				<div id="s-size">35</div>
				<div id="s-size">35</div>
				<div id="s-size">35</div>
				<div id="s-size">35</div>
			</div>	
			<a href="">
				<h4 class="text-dark">VANS CLASSIC SLIP-ON</h4>
			</a>
			<h3>1.450.000đ</h3>
			<div>
				<button id="tuychon">TÙY CHỌN</button>
			</div>
		</div>
		<div class="col-md-3 col-12 slide3333"><a href="">
			<img src="../img/best-seller/vans-viet-nam-vans-old-skool-checkerboard-black-white-vn0a38g1p0s-1.jpg" class="d-block w-30" alt="...">
		</a>
		<div class="w-100 size">
			<div id="s-size">35</div>
			<div id="s-size">35</div>
			<div id="s-size">35</div>
			<div id="s-size">35</div>
			<div id="s-size">35</div>
			<div id="s-size">35</div>
			<div id="s-size">35</div>
			<div id="s-size">35</div>
			<div id="s-size">35</div>
			<div id="s-size">35</div>
			<div id="s-size">35</div>
			<div id="s-size">35</div>
		</div>	
		<a href="">
			<h4 class="text-dark">VANS CLASSIC SLIP-ON</h4>
		</a>
		<h3>1.450.000đ</h3>
		<div>
			<button id="tuychon">TÙY CHỌN</button>
		</div>
	</div>
</div>
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleControls3" role="button" data-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleControls3" role="button" data-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
</a>
</div>
</div>	
</div>
</div>
<!-- ------------------------------3 --------------------------------------------------------->
<div class="container mb-5 pt-5">
	<div class="border-bottom border-info add-border"><h4>Bài Viết Mới</h4></div>
	<div class="row mt-4">
		<div class="col-xl-4">
			<div class="w-90">
				<a href="">
					<img src="../img/img_home/Latest Articles/articles-02.jpg" class="w-100" alt="">
				</a>
				<div class="position-absolute bg-white text-center caption-img2">
					<h4>11</h4>
					<p>NO</p>
				</div>
				<a href=""><h3 class="text-weight-bold text-dark">Thời trang mùa đông</h3></a>
				<p class="small text-secondary">by <a class="text-secondary" href="">Vuong</a> / <a class="text-secondary" href="">5 comment</a></p>
				<p class="small">Cách kết hợp nhiều lớp áo khoác, sử dụng trang phục giữ nhiệt bên trong giúp bạn ấm áp mà vẫn tạo nên hình ảnh sành điệu</p>
			</div>

		</div>
		<div class="col-xl-4">
			<div class="w-90">
				<a href="">
					<img src="../img/img_home/Latest Articles/articles-02.jpg" class="w-100" alt="">
				</a>
				<div class="position-absolute bg-white text-center caption-img2">
					<h4>11</h4>
					<p>NO</p>
				</div>
				<a href=""><h3 class="text-weight-bold text-dark">Thời trang mùa đông</h3></a>
				<p class="small text-secondary">by <a class="text-secondary" href="">Vuong</a> / <a class="text-secondary" href="">5 comment</a></p>
				<p class="small">Cách kết hợp nhiều lớp áo khoác, sử dụng trang phục giữ nhiệt bên trong giúp bạn ấm áp mà vẫn tạo nên hình ảnh sành điệu</p>
			</div>
		</div>
		<div class="col-xl-4">
			<div class="w-90">
				<a href="">
					<img src="../img/img_home/Latest Articles/articles-02.jpg" class="w-100" alt="">
				</a>
				<div class="position-absolute bg-white text-center caption-img2">
					<h4>11</h4>
					<p>NO</p>
				</div>
				<a href=""><h3 class="text-weight-bold text-dark">Thời trang mùa đông</h3></a>
				<p class="small text-secondary">by <a class="text-secondary" href="">Vuong</a> / <a class="text-secondary" href="">5 comment</a></p>
				<p class="small">Cách kết hợp nhiều lớp áo khoác, sử dụng trang phục giữ nhiệt bên trong giúp bạn ấm áp mà vẫn tạo nên hình ảnh sành điệu</p>
			</div>
		</div>
	</div>

</div>


<?<?php include "../includes/footer.php" ?>