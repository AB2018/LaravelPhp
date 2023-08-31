
$('#userForm').validate({
	ignore: '',
	rules: {
	
		name: "required",
        contact : "required",
        email : {
            required :true,
            email: true,
        },
        password : "required",

	}, messages: {
		name: "Please enter your name",
        contact: "Please enter your contact",

        email: "Please enter email",
        password: "Please enter your password",
	
	},


});

$('#login').click(function () {
    console.log("hkgkj");
    var email = $('#emailcheck').val();
    var password = $('#passwordcheck').val();
    console.log(email);

$.ajax({
    method:"POST",	
    url:loginCheck,

    data:{
        'email':email,
        "password": password,
        "_token": token,
    },
  
    success:function(result)
    {if(result == 'success')
    {
        window.location.reload();
    }
    else
    {
     $('#availability').html('<label class="text-danger">Username password not match</label>');
    }
    }
   })

   
   
});
