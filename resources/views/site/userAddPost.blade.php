@extends('site.layout.app')

@section('main')

@section('user-css')
    <link rel="stylesheet" href="{{ asset('admin_asset/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('admin_asset/dist/css/skins/_all-skins.min.css') }}">


    <link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin_asset/dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

@endsection

@section('main')
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-preview">
                        <div class="form-group col-xs-12">
                            <div class="box-tools pull-right">
                                <a type="submit" class="btn btn-default" href="{{ route('add.userPost') }}">Add Post</a>
                            </div>
                        </div>

                        <div class="box box-default">
                            <div class="box-header with-border">
                                <h1 class="box-title">Add Post</h1>
                                <div class="box-tools pull-right">
                                    <a href="{{ route('post.view') }}" class="btn btn-default">Cancel</a>
                                </div>
                            </div>
                            <div class="box-body">
                                <form id="form" method="post" action="{{ route('userPost.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="required">Title</label>
                                                <input type="text" name="title" class="form-control"
                                                    style="width: 100%;">
                                                @error('title')
                                                    <p style="color:red">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="required">Tag</label>
                                                <select class="form-control select2" name="tag_id[]" multiple="multiple"
                                                    data-placeholder="Select a tag" style="width: 100%;">
                                                   
                                                    @foreach ($getTag as $tag)
                                                        <option value="{{ $tag->id }}">
                                                            {{ $tag->tag_Name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('tag_id')
                                                    <p style="color:red">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="required">Photo</label>
                                                <input type="file" name="image" class="form-control"
                                                    style="width: 100%;">
                                                @error('image')
                                                    <p style="color:red">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            {{-- <div class="form-group">
                                                <label class="required">Status</label>
                                                <select class="form-control select2" name="status"
                                                    data-placeholder="Select a status">

                                                    <option></option>
                                                    <option value="1">Active</option>
                                                    <option value="2">Inactive</option>
                                                </select>
                                                @error('status')
                                                    <p style="color:red">{{ $message }}</p>
                                                @enderror
                                            </div> --}}
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="required">Subtitle</label>
                                                <input type="text" name="subtitle" class="form-control"
                                                    style="width: 100%;">
                                                @error('subtitle')
                                                    <p style="color:red">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="required">Category</label>
                                                <select class="form-control select2" name="category_id[]"
                                                    multiple="multiple" data-placeholder="Select a Category"
                                                    style="width: 100%;">
                                                   
                                                    @foreach ($get as $category)
                                                        <option value="{{ $category->id }}">
                                                            {{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                    <p style="color:red">{{ $message }}</p>
                                                @enderror
                                            </div>
                                          
                                        </div>
                                        <div class="col-md-12">
                                            <label class="required">Body</label>
                                            <textarea id="editor1" name="editor1" rows="10" cols="80"></textarea>
                                            @error('editor1')
                                                <p style="color:red">{{ $message }}</p>>
                                            @enderror
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>



                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('user.post') }}" class="btn btn-default">Back</a>

                    </form>

                </div>
            </div>

    </section>

@endsection

@section('userjs')
    <script src="{{ asset('admin_asset/plugins/select2/select2.full.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
    <script>
        $(".select2").select2();
        $(function() {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1');
        });
    </script>

    <script src="{{ asset('plugins/jQuery/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admin_asset/validation/post.validation.js') }}"></script>
@endsection
