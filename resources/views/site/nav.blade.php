<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}">Home</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                @php
                $postCount = ( Session::get('postCount'));
                @endphp
               
                @php
                    $user_name = '';
                @endphp
                @if (Auth::guard('uservalidate')->user())
                    @php
                        $user_name = Auth::guard('uservalidate')->user()->name;
                    @endphp
                @endif


                <li>
                    <a href="{{ route('user.profile') }}">{{ $user_name }}</a>
                </li>
                @if ($user_name == '')
                    <li>
                        <a class="" style="cursor: pointer" data-toggle="modal" id="test"
                            data-target="#edit-modal">Login</a>

                    </li>
                    <li>
                        <a href="{{ route('user.register') }}">Register</a>
                    </li>
                @endif

                @if (!($user_name == ''))
                    <li>
                        <a href="{{ route('user.logout') }}">Logout</a>
                    </li>
                @endif
                @if (Auth::guard('uservalidate')->user())
                @if ($postCount > 0)
                <li>
                    <a href="{{ route('user.post') }}">My Post</a>
                </li>
                @endif
                @endif

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
@php
    $route = request()
        ->route()
        ->getName();
@endphp
@if (!($route == 'user.post'))
    <div class="modal" id="edit-modal">
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
                        <span class="text-danger" style="font-size: 14px" id="availability"></span>
                        <span class="text-danger"  id="email"></span>
                        @error('email')
                            <p style="color:red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group has-feedback">
                        <label class="required">Password</label>
                        <input type="password" class="form-control" name="password" id="passwordcheck"
                            placeholder="Password">
                            <span class="text-danger"  id="password"></span>
                        @error('password')
                            <p style="color:red">{{ $message }}</p>
                        @enderror
                    </div>
                    {{-- <span id="availability"></span> --}}
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="checkbox">
                                <label>
                                    
                                    <a href="{{ route('forget.password.get') }}">Forgot Password?</a>
                                    
                                </label>
                            </div>
                        </div>
                    </div>
                   

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button id="login" type="submit" href="{{ route('user.login') }}"
                            class="btn btn-primary">Log in</button>
                    </div>
                 
                </div>
            </div>
        </div>

    </div>
@endif


<script>
    var loginCheck = "{{ route('user.login') }}";
    var token = "{{ csrf_token() }}";
    
</script>
<script src="{{ asset('site/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('site/validation/ajax.js') }}"></script>
<script src="{{ asset('site/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('site/js/jqBootstrapValidation.js') }}"></script>
{{-- <script src="{{ asset('site/validation/userLoginValidation.js') }}"></script> --}}
