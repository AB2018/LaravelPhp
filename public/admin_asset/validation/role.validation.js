
$('#form').validate({
	ignore: '',
	rules: {

		role: {
			required: true,
			validateRole: true,
		},
		name: "required",
		status: "required",

	}, messages: {
		name: "Please enter me",
		status: "Please select status",

	},


});

$.validator.addMethod("validateRole", function (value, element) {
	var regex = new RegExp("^[a-z_A-Z]+$");
	var role = $('#role').val();
	if (regex.test(role)) {
		var i;
		var roles = role.split('_');
		for (i = 0; i < roles.length; i++) {
			roles[i] = roles[i].charAt(0).toUpperCase() + roles[i].slice(1);
		}
		$('#role').blur(function () {
			var slug = $('#role').val();
			// var route = 
			//var url = "{{ route('slug.check') }}";
		   console.log("chek");
			$.ajax({
				method:"POST",	
				url:roleCheck,
		
				data:{
					'role':role,
					"_token": token,
				},
				success:function(result)
				{
				 if(result == 'unique')
				 {
				  $('#availability').html('<label class="text-success">Slug Available</label>');
				  $('#check').attr('disabled', false);
				  $('#name').val(slugs.join(' '));
				 }
				 else
				 {
				  $('#availability').html('<label class="text-danger">Slug not Available</label>');
				  $('#check').attr('disabled', true);
				  $('#name').val('');
				 }
				}
			   })
		});
	
		return true;
	}
	return false;
}, "Only alphabet and underscore are allowed");

