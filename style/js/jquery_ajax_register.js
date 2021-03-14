
// $("#dangkibtn").click(function(){
	
// 	$.ajax({

// 		url : "../controller/registration.php",
// 		type : "POST",
// 		data: {
// 			ho: $("#dkho").val(),
// 			ten: $("#dkten").val(),
// 			username: $("#dkusername").val(),
// 			pass: $("#dkpass").val(),
// 			repass: $("#dkrepass").val(),
// 		},
// 		success: function(dataResult){
// 			var dataResult = JSON.parse(dataResult);
// 			console.log(dataResult);
// 			if(dataResult.statusCode == 202){
// 				alert("ko khop mk");
// 			}
// 			if (dataResult.statusCode == 201) {
// 				alert("nhap thong tin");
// 			}
// 			if (dataResult.statusCode == 200) {
// 				alert("dang ki thanh cong");
// 			}
// 		}
// 	})



// });

$("#dangkibtn").click(function(e) { //xu ly event khi click vao btnchange
				e.preventDefault(); //khong cho gui form
				if($("#form-dangki").valid()){
					$.ajax({
					url: "../controller/registration.php",
					type: "POST",
					
					data:{
						ho: $("#dkho").val(),
						ten: $("#dkten").val(),
						username: $("#dkusername").val(),
						pass: $("#dkpass").val(),
						repass: $("#dkrepass").val(),
					},
					success: function(dataResult){
						
						var dataResult = JSON.parse(dataResult);
						if(dataResult.statusCode==201){
							alert("dang ki that bai");					
						}
						if(dataResult.statusCode==200){
							alert(" Chúc mừng bạn đã đăng kí thành công");					
						}
						
					}
				});
				}else {
					alert("Nhap Thong TIn");
				}
				
			}); 
