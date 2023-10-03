// $('#test').click(function () {
//     alert("hii");

// });


$('#login').click(function () {
    var email = $('#emailcheck').val();
    var password = $('#passwordcheck').val();
    if (email== '') {

        $('#email').html('Email is Required');

    }
    else{
        $('#email').html('');
    }
    if (password== '') {

        $('#password').html('Password is Required');

    }
    else{
        $('#password').html('');
    }
    $.ajax({
        method: "POST",
        url: loginCheck,

        data: {
            'email': email,
            "password": password,
            "_token": token,
        },

        success: function (result) {
            if (result == 'success') {
                // console.log('success');
               window.location.reload();
                // window.location = "/";
            }
            else{
                $('#availability').html(result);
            }
        }
    })

});


$('#storePermission').click(function () {
    var profession = $('#profession').val();
    var details = CKEDITOR.instances.details.getData();
    //  alert(profession);
    console.log(details);
    console.log("details");

    $.ajax({
        method: "POST",
        url: profile_store,

        data: {
            'profession': profession,
            "description": details,
            "_token": token,
        },

        success: function (result) {
            if (result == 'success') {

                window.location.reload();
                // window.location = "/";
            }

        }
    })

});

$('.status_type').on('change', function () {
    var status = $(this).prop('checked') == true ? '1' : '0'; 
    // var status = $('.status_type').val();
    var id =  $(this).attr("data-id");
    // console.log(status);
     console.log(id);

        $.ajax({
            method:'POST',
            url:publishedCheck,
            data:{
                'status': status, 
                'id': id,
            "_token": token,},

            success: function(data){
             console.log('success');
          }
        });
    
});

$('.status').on('change', function () {
    var status = $(this).prop('checked') == true ? 'Published' : 'Not Published'; 
     console.log(id);
        $.ajax({
            method:'get',
            url:showPublishedPost,
            data:{
                'status': status, 
            "_token": token,},

            success: function(data){
             console.log('success');
          }
        });
    
});
console.log("jhvjv");

$('.like').click(function () {
   
    var id =  $(this).attr("data-id");
    var user_id =  $(this).attr("data-user_id");
    console.log(id);
        $.ajax({
            method:'post',
            url:likeDislike,
            data:{
                'user_id': user_id, 
                'post_id' :id,
            "_token": token,},

            success: function(data){
             console.log('success');
          }
        });
});

