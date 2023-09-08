
$('#userLogin').validate({
	ignore: '',
	rules: {
        email : {
            required :true,
            email: true,
        },
        password : "required",

	}, messages: {

        email: "Please enter email",
        password: "Please enter your password",
	
	},


});