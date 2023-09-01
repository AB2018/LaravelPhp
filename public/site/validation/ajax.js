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
    var description = $('#description').val();


$.ajax({
    method:"POST",	
    url:loginCheck,

    data:{
        'profession':profession,
        "description": description,
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
