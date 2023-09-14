@extends('site.layout.app')

@section('main')
@php
$user_id = '';
$user_id = Auth::guard('uservalidate')->user()->id;
@endphp
    <header class="intro-header" style="background-image: url({{ asset('site/img/about-bg.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>About Me</h1>
                        <hr class="small">
                        <span class="subheading">{{ $crud->profession}}</span>
                        <a class="" style="cursor: pointer" data-toggle="modal" id="profile_open"
                        data-target="#profession-modal"><i class="fa fa-eye"></I>Edit</a>
                            {{-- <a class="" style="cursor: pointer" data-toggle="modal" id="profile_open"
                        data-target="#profession-modal"><i class="fa fa-eye"></I>Edit</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>{!! $crud->description !!}</p>
            
            </div>
        </div>
    </div>
     
    <div class="modal" id="profession-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" align="center"><b>{{ $user_id }}Profile</b></h2>
                </div>
                <div class="modal-body">


                    @csrf
                    <div class="form-group has-feedback">
                      
                        <input type="hidden" id="id" name="id" value="{{ $user_id }}">
                        <label class="required">Profession</label>
                      
                        <input type="text" class="form-control" name="profession" id="profession" value="{{ $crud->profession }}" >
                        @error('profession')
                            <p style="color:red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <label class="required">Description</label>
                        <textarea id="details" name="details" rows="10" cols="80" >{{$crud->description}}</textarea>
                        @error('details')
                            <p style="color:red">{{ $message }}</p>>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button id="storePermission" type="submit" href="{{ route('store.profile')}}"
                            class="btn btn-primary">Save</button>
                            <a href="{{ route('forget.password.get') }}">Reset Password</a>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
@section('userjs')
    <script>
        var profile_store = "{{ route('store.profile')}}";
        var user_profile= "{{ route('user.profile')}}";
        var token = "{{ csrf_token() }}";
    </script>
    <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
    <script src="{{ asset('site/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('site/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('site/validation/ajax.js') }}"></script>
    <script>
        $(function() {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('details');
        });
    </script>
@endsection
