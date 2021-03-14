

$("#select_allsp").change(function() {
       var checkboxes = $("input[name='name[]']"); //lay cac checkbox

       var checkall = $("#select_allsp").prop('checked');

       for (var i = 0; i < checkboxes.length; i++){
       	if (checkall == true) {
       		checkboxes[i].checked = true;
       	}else {
       		checkboxes[i].checked = false;
       	}

       }
   });

$(document).ready(function(){
	$("#delete_allselect").click(function(){

		var id = [];
		$(':checkbox:checked').each(function(i){
			id[i] = $(this).val();
		});
		console.log(id);
		$.ajax({
			url : "../controller/delete-sp.php",
			type: "POST",
			data: {id : id},
			success:function(){
				alert("xoa thanh cong");
				for (var i = 0; i < id.length; i++) {
					$('tr#'+id[i]+'').css('display','none');
					$('tr#'+id[i]+'').fadeOut('slow');
				}
			}
		})

	});
});



