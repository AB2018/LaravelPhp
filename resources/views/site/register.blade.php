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
            @if (Session::has('message'))
            <div class="alert alert-success" role="alert">
               {{ Session::get('message') }}
           </div>
       @endif
       @if (Session::has('emailExistMessage'))
       <div class="alert alert-danger" role="alert">
          {{ Session::get('emailExistMessage') }}
      </div>
  @endif
          <form method="post" action="{{route('user.store')}}" id="userForm" >
            @csrf
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label class="required" style="font-size: 17px">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                        @error('name')
                        <p style="color:red">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label class="required" style="font-size: 17px">Contact</label>
                        <input type="text" class="form-control" id="phone" name="contact" >
                        @error('contact')
                        <p style="color:red">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label class="required" style="font-size: 17px">Email</label>
                        <input type="text" class="form-control" id="email" name="email" >
                        <span id="availability"></span>
                        @error('email')
                        <p style="color:red">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
 
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label class="required" style="font-size: 17px">Password</label>
                        <input type="password" class="form-control" id="passwordd" name="passwordd" >
                        @error('passwordd')
                        <p style="color:red">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label class="required" style="font-size: 17px">Confirm Password</label>
                        <input type="password" class="form-control"  id="password_confirmation" name="password_confirmation" >
                        @error('password_confirmation')
                        <p style="color:red">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="row">
                    <div class="form-group col-xs-12">
                       
                        <button type="submit" class="btn btn-default">Register</button>
                    </div>
                </div>
                
            </form>
            
        </div>
    </div>
</div>

<hr>

@endsection
@section('userjs')
<script>
    var emailCheck = "{{ route('check.email') }}";
    var token = "{{ csrf_token() }}";


    </script>

    
<script src="{{asset('site/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('plugins/jQuery/jquery.validate.min.js') }}"></script>
<script src="{{asset('site/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('site/js/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('site/js/contact_me.js')}}"></script>
<script src="{{asset('site/js/clean-blog.min.js')}}"></script>
<script src="{{asset('site/validation/userValidation.js')}}"></script>





@endsection


