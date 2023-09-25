var cpassword = $('#password_confirmation').val();
var password = $('#password').val();
console.log(cpassword);
console.log(password);


$('#userForm').validate({
    ignore: '',
    rules: {

        name: {
            required: true,
            lettersonly: true,
            minlength : 3,
            maxlength: 15,

        },
        contact: {
            required: true,
            digits: true,
            maxlength: 10,
            minlength: 10

        },
        passwordd: {
			required: true,
			minlength: 6,
            maxlength: 10,
		},
		password_confirmation: {
			required: true,
			minlength: 6,
			equalTo: '#passwordd',
		},
        email: {
            required: true,
            email: true,
            remote: {
                url: emailCheck,
                type: 'POST',
                data: {
                    "email": $("input[email='email']").val(),
                    "_token": token
                },
             }
        },
       

    }, messages: {
        contact: {
            required: "Contact is required!",
            maxlength: "Please enter 10 digit only",
            minlength: "Please enter 10 digit only",
        },
        email: {
            required: "Email is required!",
            email: "Enter A Valid E-Mail !..",
            remote: "Email address already in use!"
        },
        name: {
            required: "Name is required!",
            maxlength: "Maximum 15 letters are allowed",
            minlength: "Please enter minimum 3 letter",

        }

    },

});
$.validator.addMethod('c_password', function(value){
    if(value == $('#password').val()){
        return true;
     }
     return false;
}, "Password and confirm password fields do not match");

jQuery.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-z]+$/i.test(value);
  }, "Letters only please"); 
