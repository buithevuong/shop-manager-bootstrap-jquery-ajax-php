
$("#add_sp").click(function(e) { //xu ly event khi click vao btnchange
				e.preventDefault(); //khong cho gui form
				
				$.ajax({
					url: "../controller/add-sp.php",
					type: "POST",
					
					data:{
						
						ten: $('#addten').val(),
						chatlieu: $('#addchatlieu').val(),
						anh: $('#addanh').val().replace(/C:\\fakepath\\/i, ''),
						gia: $('#addgia').val(),
						tonkho: $('#addtonkho').val(),
						mota: $('#addmota').val(),
					},
					success: function(dataResult){
						var dataResult = JSON.parse(dataResult);
						console.log(dataResult);
						
						var insertHTML = '<tr id="'+dataResult.id+'">'+'<td>'+'<input type="checkbox" id="select_sp1" value="'
						+dataResult.id+'" name="name[]">'+'</td>'+'<td>'+'new'+'</td>'+'<td id="'+dataResult.id+'.'
						+dataResult.ten+'">'+dataResult.ten+'</td>'+'<td>'+'Nhà sx'+'</td>'+'<td id="'+dataResult.id+'.'
						+dataResult.chatlieu+'">'+dataResult.chatlieu+'</td>'+'<td id="'+dataResult.id+'.'+dataResult.anh
						+'">'+'<img id="'+dataResult.id+'.'+dataResult.anh+'" src="../img/best-seller/'+dataResult.anh
						+'" alt="" width="50px">'+'</td>'+'<td id="'+dataResult.id+'.'+dataResult.mota+'" class="mota_sp">'
						+dataResult.mota+'</td>'+'<td id="'+dataResult.id+'.'+dataResult.gia+'">'+dataResult.gia+'</td>'
						+'<td id="'+dataResult.id+'.'+dataResult.tonhko+'">'+dataResult.tonkho+'</td>'+'<td>'
						+'<a href="sanpham-chitiet.php?id_view='+dataResult.id+'"><i class="far fa-eye text-dark"></i></a>'
						+'</td>'+'<td>'+'<!-- ---------------Sửa----------------------- -->'
						+'<a href=""></a><button onclick="edit_sp('+dataResult.id
						+')" type="button" class="btn btn-warning w-100" data-toggle="modal" data-target="#exampleModal2">'
						+'Sửa'+'</button>'+'</td>'+'</tr>';

						var phantuchon = $("#add_html");
						phantuchon.after(insertHTML);
						
						//document.getElementById('add_html').insertAdjacentHTML('afterend', insertHTML);


						$("input[name='ten']").val("");
						$("input[name='chatlieu']").val("");

						$("input[name='gia']").val("");
						$("input[name='tonkho']").val("");
						$("textarea[name='mota']").val("");
						
						$("input[name='anh']").val("");
						alert("Thêm thành công");
					}

				});
			});