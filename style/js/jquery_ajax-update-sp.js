

	var edit_sp = (id) => {
		console.log(id);
		$.ajax({ 
			url: "../controller/update-sp.php",
			type: "GET",
			data: {
				edit_id: id 
			},
			dataType: "html",
			success: function(dataResult){
				console.log(dataResult);
				var dataResult = JSON.parse(dataResult);
				console.log(dataResult);
				$("input[name='id1']").val(dataResult.id);
				$("input[name='ten1']").val(dataResult.ten);
				$("input[name='chatlieu1']").val(dataResult.chatlieu);
				
				$("input[name='gia1']").val(dataResult.gia);
			+	$("input[name='tonkho1']").val(dataResult.tonkho);
				$("textarea[name='mota1']").val(dataResult.mota);
				// console.log(dataResult.anh);
				// $("input[name='anh1']").val(dataResult.anh);

				
			}
		})
	}


			$("#btnchange").click(function(e) { //xu ly event khi click vao btnchange
				e.preventDefault(); //khong cho gui form

				$.ajax({
					url: "../controller/update-sp.php",
					type: "POST",
					
					data:{
						id_update: $('#id1').val(),
						ten: $('#ten1').val(),
						chatlieu: $('#chatlieu1').val(),
						anh: $('#anh1').val().replace(/C:\\fakepath\\/i, ''),
						gia: $('#gia1').val(),
						tonkho: $('#tonkho1').val(),
						mota: $('#mota1').val(),
					},
					success: function(dataResult){
						var dataResult = JSON.parse(dataResult);
						console.log(dataResult);
						var check = $("#id1").val();
						console.log(check);

						if(check==dataResult.id){ 
							$("#"+check+"ten").html(dataResult.ten);
							$("#"+check+"chatlieu").html(dataResult.chatlieu);
							$("#"+check+"anh1").attr('src', "../img/best-seller/" + dataResult.anh);//ong cho hien anh tại cai trương dó di 
							$("#"+check+"mota").html(dataResult.mota);
							$("#"+check+"gia").html(dataResult.gia);
							$("#"+check+"tonkho").html(dataResult.tonkho);
							  
							
						}
						alert("Sửa thành công");
						
					}
				});
			}); 




// 			var testmodal = () => {

// $('#exampleModal2').modal('hide');//la that
		
// 	}