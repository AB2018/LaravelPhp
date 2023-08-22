var edit_id = '';
edit_id = $("input[name='id']").val();

$('#form').validate({
	ignore: '',
	rules: {
	
		title: "required",
        tag_id : "required",
        category_id : "required",
        image : {
            validateImage:true,
            validateExtension: true
        },
        editor1 : {
            required: function() 
                        {
                         return CKEDITOR.instances.editor1.updateElement();
                        },
           },
        status : "required",
        subtitle : "required",

	}, messages: {
		title: "Please enter your title",
        tag_id: "Please select tag id",
        category_id: "Please select category",
        status: "Please enter status",
        subtitle: "Please enter subtile",
       // image: "Please upload valid",
        editor1: "Please type something",
	
	},


});
$.validator.addMethod("validateImage", function(value, element) {
    if(!edit_id){
        if(value == ''){
            return false
        }   
    }
    return true;
  }, "Please upload file");

  $.validator.addMethod("validateExtension", function(value, element) {
    if(value){
        console.log(value);
        if (!(/\.(jpg|jpeg|png)$/i).test(value)){
            return false
        }   
    }
    return true;
  }, "Please upload only jpg,jpeg & png file");