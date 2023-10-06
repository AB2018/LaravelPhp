function likeUnlikePost(type, id) {
  console.log(id);
    $.ajax({
        url:likeDislike,
        type: 'POST',
        data: {
            likeUnlike: type,
            post_id: id,
            _token: token
        },
        success: function(message) {
    
            $('#like_count' + id).text(message.likeData);
            $('#dislike_count' + id).text(message.dislikeData);

            if (message.typeOfUser == 1) {
                console.log("hello green");
                $('#likebtn' + id).css({
                    'color': 'Green'
                });
            } else {
                $('#likebtn' + id).css({
                    'color': 'grey'
                });
            }
            if (message.typeOfUser == 0) {
                $('#disbtn' + id).css({
                    'color': 'red'
                });
            } else {
                $('#disbtn' + id).css({
                    'color': 'grey'
                });
            }



        },
        error: function(error) {
            console.error('Error liking post:', error);
        }
    });
}


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
    console.log(status);
    // if(status == 1){
        
    //     confirm("Published this post?");
        
    //  }
    //  else{
    //     confirm("UnPublished this post?");
        
    //  }
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

