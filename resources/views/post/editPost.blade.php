@extends('layout.app')

@section('page-css')
<link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">
@endsection

@section('main')
<section class="content">

    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title"></h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
        </div>
        <div class="box-body">
            <form id="form" method="post" action="{{route('posts.update')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" style="width: 100%;" value="{{$crud->title}}">
                        </div>
                        <div class="form-group">
                            <label>Tag</label>
                            <select class="form-control select2"   name="tag_id[]"  multiple="multiple"  data-placeholder="Select a tag" style="width: 100%;">
                            <option></option>
                            @foreach ($getTag as $tag)
                                @php
                                $selected = '';
                                @endphp
                                @foreach ($crud->post_tag as $tag_data)
                                @if($tag->id == $tag_data->tag_id)
                                    @php
                                    $selected = 'selected';
                                    @endphp
                                @endif
                                @endforeach
                                <option value="{{$tag->id}}" {{$selected}}>
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
                            @php
                                $selectedCat = '';
                                @endphp
                                @foreach ($crud->post_category as $category_data)
                                @if($category->id == $category_data->category_id)
                                    @php
                                    $selectedCat = 'selected';
                                    @endphp
                                @endif
                                @endforeach
                            <option value="{{$category->id}}" {{$selectedCat}}>
                                {{$category->name}}
                            </option>
                               @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" name="status" class="form-control" value="{{$crud->status}}" style="width: 100%;">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Subtitle</label>
                            <input type="text" name="subtitle" class="form-control" value="{{$crud->subtitle}}" style="width: 100%;">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Photo</label>
                            <img src="{{asset('storage/post_image/' . $crud->photo)}}"  width="80" height="60"/>
                        </div>
                       
                       
                    </div>
                    
                    <div class="col-md-12">
                    <div class="form-group">
                            <label>Body</label>
                            <textarea id="editor1"  name="editor1" rows="10" cols="80"> {{$crud->body}}</textarea>
                        </div>
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