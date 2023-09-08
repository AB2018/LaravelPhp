
$('#userForm').validate({
	ignore: '',
	rules: {
	
		name: "required",
        contact : "required",
        email : {
            required :true,
            email: true,
        },
        password: {
            required: true,
            minlength: 6
        },
        cpassword: {
            required: true,
            minlength: 6,
            equalTo: "#password"
        }

	}, messages: {
		name: "Please enter your name",
        contact: "Please enter your contact",
        email: "Please enter email",
	
	},


});
