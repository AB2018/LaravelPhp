$('#test').click(function () {
    console.log("testing");

});


$('#login').click(function () {
    var email = $('#emailcheck').val();
    var password = $('#passwordcheck').val();
    if (email== '') {

        $('#email').html('Email is Required');

    }
    if (password== '') {

        $('#password').html('Password is Required');

    };
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
                window.location.reload();
                // window.location = "/";
            }
            else {
                $('#availability').html('<label class="text-danger">Username password not match</label>');
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
    var status = $(this).prop('checked') == true ? 'Published' : 'Not Published'; 
    // var status = $('.status_type').val();
    var id =  $(this).attr("data-id");
    // console.log(status);
     console.log(id);
    // if($(".status_type").is(":checked")){
    //     status="yes";
    //     }
    //     else{
    //         status="no";
    //     }
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

$('#like').click(function () {
    var post_id = $('#post_id').val();
    console.log(post_id);
    $.ajax({
        method: "POST",
        url: likeDislike,

        data: {
            'email': email,
            "password": password,
            "_token": token,
        },

        success: function (result) {
            if (result == 'success') {
                window.location.reload();
                // window.location = "/";
            }
            else {
                $('#availability').html('<label class="text-danger">Username password not match</label>');
            }
        }
    })

});

