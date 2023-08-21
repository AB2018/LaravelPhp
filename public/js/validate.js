
$('#form').validate({
	ignore: '',
	rules: {
	
		category_name: "required",

	}, messages: {
		category_name: "Please enter your category name",
	
	},


});

function validateForm(form_name,validate_object){
	$("#"+form_name).validate({
		ignore: '',
		rules: validate_object.rules,
		messages: validate_object.message
	})
}


// var validate_object = {
// 	rules : {
// 		category_name: "required",
// 	},
// 	messages: {
// 		category_name: "Please enter your category name",
// 	}
// }
