
$('#form').validate({
	ignore: '',
	rules: {

		slug: {
			required: true,
			validateSlug: true,
		},
		name: "required",
		status: "required",

	}, messages: {
		name: "Please enter name",
		status: "Please select status",

	},


});

$.validator.addMethod("validateSlug", function (value, element) {
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

//   var username = $('#slug').val();
//   $('#slug').change(function() {
// 	 $.ajax({
// 		url: "Permission.php",
// 		type: 'POST',
// 		data: 'slug=' + username,
// 		success: function(result){
// 				   if(result > 0){
// 					('#availability').html('<span class="text-success">Already existed</span>');
// 					('#check').attr("disabled",false);
// 				   }
// 				   else{
// 					('#availability').html('<span class="text-success">Available/span>');
// 					('#check').attr("disabled",true);
// 				   }
// 				 }
// 		});
//   });
// $('#slug').blur(function () {
// $.ajax({
//     url:"{{ route('email_available.check') }}",
//     method:"POST",
//     data:{slug:slug},
//     success:function(result)
//     {
//      if(result == 'unique')
//      {
//       $('#error_email').html('<label class="text-success">Email Available</label>');
//       $('#email').removeClass('has-error');
//       $('#register').attr('disabled', false);
//      }
//      else
//      {
//       $('#error_email').html('<label class="text-danger">Email not Available</label>');
//       $('#email').addClass('has-error');
//       $('#register').attr('disabled', 'disabled');
//      }
//     }
//    })
// });