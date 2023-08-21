$('#form').validate({
	ignore: '',
	rules: {
	
		title: "required",
        tag_id : "required",
        category_id : "required",
        image : "required",
        editor1 : "required",
        status : "required",
        subtitle : "required",

	}, messages: {
		title: "Please enter your title",
        tag_id: "Please select tag",
        category_id: "Please select category",
        status: "Please enter status",
        subtitle: "Please enter subtile",
        image: "Please upload image",
        editor: "Please type something",
	
	},


});