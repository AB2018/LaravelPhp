@extends('layout.app')
@section('page-css')
@endsection
@section('main')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Post List</h3>
                        {{-- </br>
                        <label class="switch">
                           <input type="hidden" id="id" name="id" value="{{$crud->id}}"> 
                            <input class="status" name="status" id="status" data-on="Published"
                            data-off="Not Published" type="checkbox">

                            <span class="slider"> </span>
                        </label> --}}
                        <div class="box-tools pull-right">


                            <a href="{{ route('post.show') }}" class="btn btn-primary">Add Post</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <form id="form" method="post" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">

                            <table id="example2" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Subtitle</th>
                                        <th>Status</th>
                                        <th>Body</th>
                                        <th>Photo</th>
                                        @if (checkSlug('edit_post') == true || checkSlug('delete_post') == true)
                                            <th>Action</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cruds as $index => $crud)
                                        <tr>
                                            <td> {{ $index + $cruds->firstItem() }} </td>
                                            <td>{{ $crud->title }}</td>
                                            <td>{{ $crud->subtitle }}</td>
                                            <td><label class="switch">
                                                    {{-- <input type="hidden" id="id" name="id" value="{{$crud->id}}"> --}}
                                                    <input class="status_type" name="status_type" id="status_type"
                                                        data-id="{{ $crud->id }}" data-on="Published"
                                                        data-off="Not Published" type="checkbox"
                                                        {{ $crud->status == 'Published' ? 'checked' : '' }}>

                                                    <span class="slider"></span>
                                                </label></td>
                                            <td>{!! $crud->body !!}</td>
                                            <td><img src="{{ asset('storage/post_image/' . $crud->photo) }}" width="80"
                                                    height="40"></td>
                                            @if (checkSlug('edit_post') == true || checkSlug('delete_post') == true)
                                                <td>
                                                    @if (checkSlug('edit_post') == true)
                                                        <a class="fa fa-edit" style='font-size:20px;color:#24333b'
                                                            href="{{ route('post.edit', ['id' => $crud->id]) }}"></a>
                                                    @endif
                                                    @if (checkSlug('delete_post') == true)
                                                        <a class="fa fa-trash" style='font-size:20px;color:red'
                                                            href="{{ route('post.destroy', ['id' => $crud->id]) }}"
                                                            onclick="return confirm('Are you sure to delete?')"></a>
                                                    @endif
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
                <div class="box-footer clearfix">
                    {{ $cruds->links() }}
                </div>
            </div>
    </section>
    <script src="{{ asset('admin_asset/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <script>
        var publishedCheck = "{{ route('post.published') }}";
        var showPublishedPost = "{{ route('show.published') }}";
        var token = "{{ csrf_token() }}";
    </script>
    <script src="{{ asset('site/validation/ajax.js') }}"></script>
@endsection
