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
                        
                        <input type="text" class="form-control" placeholder="Name" id="name" name="name">
                        @error('name')
                        <p style="color:red">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                      
                        <input type="text" class="form-control" placeholder="Contact" id="phone" name="contact" >
                        @error('contact')
                        <p style="color:red">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                       
                        <input type="text" class="form-control" placeholder="Email Address" id="email" name="email" >
                        @error('email')
                        <p style="color:red">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
 
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                     
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password" >
                        @error('password')
                        <p style="color:red">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                     
                        <input type="password" class="form-control" placeholder="cconfirm password" id="cpassword" name="cpassword" >
                        @error('cpassword')
                        <p style="color:red">{{ $message }}</p>
                        @enderror
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

@endsection
@section('userjs')
<script src="{{asset('site/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('plugins/jQuery/jquery.validate.min.js') }}"></script>
<script src="{{asset('site/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('site/js/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('site/js/contact_me.js')}}"></script>
<script src="{{asset('site/js/clean-blog.min.js')}}"></script>
<script src="{{asset('site/validation/userValidation.js')}}"></script>


@endsection


