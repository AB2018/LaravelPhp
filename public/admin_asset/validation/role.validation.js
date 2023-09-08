
$('#form').validate({
	ignore: '',
	rules: {

		slug: {
			required: true,
			validateRole: true,
		},
		role: "required",
		status: "required",

	}, messages: {
		role: "Please enter name",
		status: "Please select status",

	},
});

$.validator.addMethod("validateRole", function (value, element) {
	var regex = new RegExp("^[a-z_A-Z]+$");
	var slug = $('#slug').val();
	if (regex.test(slug)) {
		var i;
		var slugs = slug.split('_');
		for (i = 0; i < slugs.length; i++) {
			slugs[i] = slugs[i].charAt(0).toUpperCase() + slugs[i].slice(1);
		}
		$('#slug').blur(function () {
			var slug = $('#slug').val();
			// var route = 
			//var url = "{{ route('slug.check') }}";
		   console.log("chek");
			$.ajax({
				method:"POST",	
				url:slugCheck,
		
				data:{
					'slug':slug,
					"_token": token,
				},
				success:function(result)
				{
				 if(result == 'unique')
				 {
				  $('#availability').html('<label class="text-success">Slug Available</label>');
				  $('#check').attr('disabled', false);
				  $('#role').val(slugs.join(' '));
				 }
				 else
				 {
				  $('#availability').html('<label class="text-danger">Slug alreday exist</label>');
				  $('#check').attr('disabled', true);
				  $('#role').val('');
				 }
				}
			   })
		});
	
		return true;
	}
	return false;
}, "Only alphabet and underscore are allowed");
