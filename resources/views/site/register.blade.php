@extends('site.layout.app')
@section('main')   

<header class="intro-header" style="background-image: url({{asset('site/img/contact-bg.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                  
                    <span class="subheading"></span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <form method="post" action="{{route('user.store')}}" id="userForm" >
            @csrf
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Name" id="name" name="name">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" placeholder="Contact" id="phone" name="contact" >
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Email Address</label>
                        <input type="text" class="form-control" placeholder="Email Address" id="email" name="email" >
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
 
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Password</label>
                        <input type="text" class="form-control" placeholder="Password" id="password" name="password" >
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="row">
                    <div class="form-group col-xs-12">
                       
                        <button type="submit" class="btn btn-default">Send</button>
                    </div>
                </div>
                
            </form>
            
        </div>
    </div>
</div>

<hr>

<div class="modal fade" id="edit-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" align="center"><b>Login</b></h2>
            </div>
            <div class="modal-body">
                
                 
                    @csrf
                    <div class="form-group has-feedback">
                        <label class="required">Email</label>
                        <input type="email" class="form-control" name="email" id="emailcheck" placeholder="Email">
                        @error('email')
                        <p style="color:red">{{ $message }}</p>
                        @enderror
                      </div>
                      <div class="form-group has-feedback">
                        <label class="required">Password</label>
                        <input type="password" class="form-control" name="password"  id="passwordcheck" placeholder="Password">
                        @error('password')
                        <p style="color:red">{{ $message }}</p>
                        @enderror
                      </div>
                      <span id="availability"></span>

                 
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left"
                            data-dismiss="modal">Close</button>
                        <button id="login" type="submit" href="{{route('user.login')}}" class="btn btn-primary">Log in</button>
                    </div>
               
            </div>
        </div>
    </div>

</div>


@endsection
@section('userjs')
<script>
    var loginCheck = "{{ route('user.login') }}";
    var token = "{{ csrf_token() }}";
      </script>
    

<script src="{{asset('site/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('plugins/jQuery/jquery.validate.min.js') }}"></script>
<script src="{{asset('site/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('site/js/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('site/js/contact_me.js')}}"></script>
<script src="{{asset('site/js/clean-blog.min.js')}}"></script>
<script src="{{ asset('site/validation/userValidation.js') }}"></script>

@endsection


