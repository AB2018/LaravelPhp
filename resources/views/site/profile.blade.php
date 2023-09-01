@extends('site.layout.app')

@section('main')
    <header class="intro-header" style="background-image: url({{ asset('site/img/about-bg.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>About Me</h1>
                        <hr class="small">
                        <span class="subheading">This is what I do.</span>
                        <a class="" style="cursor: pointer" data-toggle="modal" id="test"
                        data-target="#profession-modal"><i class="fa fa-eye"></I>Edit</a></div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates
                    odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus
                    consectetur?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque
                    architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in
                    officia voluptas voluptatibus, minus!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum molestiae debitis nobis, quod sapiente
                    qui voluptatum, placeat magni repudiandae accusantium fugit quas labore non rerum possimus, corrupti
                    enim modi! Et.</p>
            </div>
        </div>
    </div>

    <div class="modal" id="profession-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" align="center"><b>Login</b></h2>
                </div>
                <div class="modal-body">
    
    
                    @csrf
                    <div class="form-group has-feedback">
                        <label class="required">Profession</label>
                        <input type="text" class="form-control" name="profession" id="profession" >
                        @error('profession')
                            <p style="color:red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <label class="required">Description</label>
                        <textarea id="description" name="description" rows="10" cols="80"></textarea>
                        @error('description')
                        <p style="color:red">{{ $message }}</p>>
                        @enderror
                    </div>
                   
    
    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button id="storePermission" type="submit" href="{{ route('user.login') }}" class="btn btn-primary">Save</button>
                    </div>
    
                </div>
            </div>
        </div>
    
    </div>
@endsection
@section('userjs')

<script>
    var professsion = "{{ route('user.login') }}";
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
        CKEDITOR.replace('description');
    });
</script>
@endsection
