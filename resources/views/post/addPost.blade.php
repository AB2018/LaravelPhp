@extends('layout.app')

@section('page-css')
<link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">
@endsection

@section('main')
<section class="content">

    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Select2</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
        </div>
        <div class="box-body">
            <form id="form" method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" style="width: 100%;">
                        </div>
                        <div class="form-group">
                            <label>Tag</label>
                            <select class="form-control select2" name="tag_id[]"  multiple="multiple"  data-placeholder="Select a tag" style="width: 100%;">
                            <option>select</option>
                            @foreach ($getTag as $tag)
                            <option value="{{$tag->id}}">
                                {{$tag->tag_Name}}
                            </option>
                               @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control select2" name="category_id[]" multiple="multiple" data-placeholder="Select a Category" style="width: 100%;">
                           <option>select</option>
                            @foreach ($get as $category)
                            <option value="{{$category->id}}">
                                {{$category->name}}
                            </option>
                               @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" name="status" class="form-control" style="width: 100%;">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Subtitle</label>
                            <input type="text" name="subtitle" class="form-control" style="width: 100%;">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Photo</label>
                            <input type="file" name="image" class="form-control" style="width: 100%;" >
                        </div>
                       
                       
                    </div>
                    
                    <div class="col-md-6">
                            <label>Body</label>
                            <textarea id="editor1"  name="editor1" rows="10" cols="80"></textarea>
                        </div>
                </div>
               
                
                <div class="box-footer">
                    <button type="submit" class="">Submit</button>
                </div>
            </form>

        </div>
    </div>

</section>

@endsection

@section('js')
<script src="{{asset('admin_asset/plugins/select2/select2.full.min.js')}}"></script>
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script>
    $(".select2").select2();
    $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
@endsection