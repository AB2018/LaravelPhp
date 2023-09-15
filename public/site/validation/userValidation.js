//var email =  $("#email").val();
$('#userForm').validate({
	ignore: '',
	rules: {
	
		name: "required",
        contact : {
            required: true,
         
        },
        email: {
            required: true,
            email: true,
            remote: {
                url: emailCheck,
                type: "post",
                data: {
                    "email":$(email).val(),
                    "_token":token
                    },
                    
                dataFilter: function (data) {
                    console.log("ajax");
                    var json = JSON.parse(data);
                    console.log("ajax222");
                    if (json.msg == "true") {
                        console.log("ajaxjhjhh");
                        return "Email address already in use" ;

                    } else {
                        return 'true';
                    }
                }
            }
        },
        password: {
            required: true,
            minlength: 6,
        },
        // password_confirmation: {
        //     required: true,
        //     equalTo: "#password"
        // }

	}, messages: {
		name: "Please enter your name",
         email: {
                required: "Email is required!",
                email: "Enter A Valid E-Mail !..",
                remote: "Email address already in use!"
            },
            contact: {
                required: "Contact is required!",
              
            }
	
	
	},


});


