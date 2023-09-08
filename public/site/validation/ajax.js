$('#test').click(function () {
    console.log("testing");
      
});


$('#login').click(function () {
    console.log("hkgkj");
    var email = $('#emailcheck').val();
    var password = $('#passwordcheck').val();
    console.log(email);

$.ajax({
    method:"POST",	
    url:loginCheck,

    data:{
        'email':email,
        "password": password,
        "_token": token,
    },
  
    success:function(result)
    {if(result == 'success')
    {
        window.location.reload();
       // window.location = "/";
    }
    else
    {
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
    method:"POST",	
    url:profile_store,

    data:{
        'profession':profession,
        "description": details,
        "_token": token,
    },
  
    success:function(result)
    {if(result == 'success')
    {
        
        window.location.reload();
       // window.location = "/";
    }
    
    }
   })
   
});

$('#status_type').on( 'change', function() {
    var status = $('.status_type').val();
    var id = $('#id').val();
    // if(status == 'on'){
    //     alert("gvkgvkj");
    // }
//     console.log('enter');
//     console.log(status);
//     console.log(id);
// if(status){
//     $.ajax({
//         Method:'POST',
//         url:'publishedCheck',
 
//         data:{'status': status, 'id': id},
//         success: function(data){
//          console.log('success');
//       }
//     });
//}
  });
