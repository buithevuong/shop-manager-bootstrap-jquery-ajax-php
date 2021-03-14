
<?php 
$stt = 1;
while ( $data = mysqli_fetch_array($query_list) ){
	 
	?>
	<tr id="<?php echo $data["id"] ?>">
	<td>
		<input type="checkbox" id="select_sp1" value="<?php echo $data["id"] ?>" name="name[]">
	</td>
	<td>
		<?php echo $stt ?>
	</td>
	<td id="<?php echo $data["id"]."ten" ?>">
		<?php echo $data["ten"]; ?>
	</td>
	
	<td>
		Nhà sx
	</td>
	<td id="<?php echo $data["id"]."chatlieu" ?>">
		<?php echo $data["chatlieu"]; ?>
	</td>
	<td id="<?php echo $data["id"]."anh" ?>">
		<img id="<?php echo $data["id"]."anh1" ?>" src="../img/best-seller/<?php echo $data["anh"] ?>" alt="" width="50px">
	</td>
	<td id="<?php echo $data["id"]."mota" ?>" class="mota_sp">
		<?php echo $data["mota"]; ?>
	</td>
	<td id="<?php echo $data["id"]."gia" ?>">
		<?php echo $data["gia"]; ?>
	</td>
	<td id="<?php echo $data["id"]."tonkho" ?>">
		<?php echo $data["tonkho"]; ?>

	</td>
	<td>
		<a href="sanpham-chitiet.php?id_view=<?php echo $data["id"]; ?>"><i class="far fa-eye text-dark"></i></a>
	</td>
	<td>
		<!-- ---------------Sửa----------------------- -->
		<a href=""></a><button onclick="edit_sp(<?php echo $data["id"] ?>)" type="button" class="btn btn-warning w-100" data-toggle="modal" data-target="#exampleModal2">
			Sửa
		</button>

		
	</td>
	<!-- <td>
		<a href="../controller/delete-sp.php?id_delete=<?php echo $data["id"];?>">
			<button name="btn_del" class="btn btn-danger w-100">Xóa</button>
		</a>
	</td> -->

	

	<?php 
	$stt++;
	echo "</tr>";
}
?>	