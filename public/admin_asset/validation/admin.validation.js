
$('#form').validate({
	ignore: '',
	rules: {
	
		name: "required",
        contact : "required",
        status : "required",
        email : {
            required :true,
            email: true,
        },
        password : "required",

	}, messages: {
		name: "Please enter your name",
        contact: "Please enter your contact",
        status: "Please select status",
        email: "Please enter email",
        password: "Please enter your password",
	
	},


});
