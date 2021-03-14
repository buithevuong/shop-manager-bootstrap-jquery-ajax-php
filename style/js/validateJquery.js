$().ready(function() {
	$("#form-dangki").validate({
		
		rules: {
			dkho: {
				required: true
				
			},
			dkten: {
				required: true
				
			},	
			dkusername: {
				required: true,
				minlength: 8,
				email: true
			},
			dkpass: {
				required: true,
				minlength: 8
			},
			dkrepass: {
				equalTo: "#dkpass",
				minlength: 8
			}
		},
		messages: {
			dkho: {
				required: "không được để trống"
				
			},
			dkten: {
				required: "không được để trống"
				
			},
			dkusername: {
				required: "không được để trống",
				minlength: "tối thiểu 8 kí tự",
				email: "Nhập đúng email"
			},
			dkpass: {
				required: "không được để trống",
				minlength: "tối thiểu 8 kí tự"
			},
			dkrepass: {
				required: "Không trùng khớp",
				minlength: "tối thiểu 8 kí tự"
			}

		},
		submitHandler: function(form) {
			form.submit();
		}


	});
});