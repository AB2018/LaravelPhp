@extends('layout.app')
@section('page-css')
    <link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">
@endsection
@section('main')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Post List</h3>

                        <div class="box-tools pull-right">


                            <a href="{{ route('post.show') }}" class="btn btn-primary">Add Post</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <form method="POST" action="{{ route('post.view') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-4">
                            <div class="form-group">

                                <label>Status</label>

                                <select class="form-control " style="height:33px" name="status_id" id="status_id"
                                placeholder="Select a Status">

                                    <option></option>
                                    <option value="1" {{ isset($status_id)? ($status_id == '1'? 'selected': '') : '' }} >Published</option>
                                    <option value="0" {{ isset($status_id)? ($status_id == '0'? 'selected': '') : '' }}>Not Published</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">

                                <label>Category</label>

                                <select class="form-control  " style="height:33px" name="category_id" id="category_id"
                                placeholder="Select a Category">

                                    <option></option>

                                    @foreach ($getCategory as $category)
                                        @php
                                            $selected = '';
                                        @endphp
                                        @if ($category->id == $cat_id)
                                            @php
                                                $selected = 'selected';
                                            @endphp
                                        @endif
                                        <option value="{{ $category->id }}" {{ $selected }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tag </label>
                                <select class="form-control select2" id="tag_id" name="tag_id[]" multiple="multiple"
                                    data-placeholder="Select a tag" style="width: 100%;">
                                    <option></option>
                                    @foreach ($getTag as $tag)
                                        @php
                                            $selected = '';
                                        @endphp
                                        @if (in_array($tag->id, $tag_id))
                                            @php
                                                $selected = 'selected';
                                            @endphp
                                        @endif
                                        <option value="{{ $tag->id }}" {{ $selected }}>
                                            {{ $tag->tag_Name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('tag_id')
                                    <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <table id="example2" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Title</th>
                                    <th>Subtitle</th>
                                    <th>Status</th>
                                    <th>Tag</th>
                                    <th>Category</th>
                                    <th>Like</th>
                                    <th>Dislike</th>
                                    <th>Photo</th>
                                    @if (checkSlug('edit_post') == true || checkSlug('delete_post') == true)
                                        <th>Action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                            
                                @if (empty($paginator))
                                    <p>No records found.</p>  
                                @else
                                    @foreach ($paginator as $index => $crud)
                                        <tr>
                                            <td> {{ $loop->iteration }}</td>
                                            <td>{{ $crud['title'] }}</td>
                                            <td>{{ $crud['subtitle'] }}</td>
                                            <td>
                                                <label class="switch">
                                                    {{-- <input type="hidden" id="id" name="id" value="{{$crud->id}}"> --}}
                                                    <input class="status_type" name="status_type" id="status_type"
                                                        data-id="{{ $crud['id'] }}" data-on="1" data-off="0"
                                                        type="checkbox" {{ $crud['status'] == '1' ? 'checked' : '' }}
                                                        onclick="confirmToggle(this)">
                                                    <span class="slider"></span>
                                                </label>
                                            </td>
                                            {{-- <td>{!! $crud['body'] !!}</td> --}}
                                            <td>
                                                @php
                                                    $tag_name = [];
                                                @endphp
                                                @foreach ($crud['tag_name'] as $name)
                                                    @php      
                                                        $tag_name[] = $name;
                                                    @endphp
                                                @endforeach
                                                {{ implode(',', $tag_name) }}

                                            </td>
                                            <td>
                                                @php
                                                    $category_name = [];
                                                @endphp

                                                @foreach ($crud['category_name'] as $name)
                                                    @php
                                                        $category_name[] = $name;
                                                    @endphp
                                                @endforeach
                                                {{ implode(',', $category_name) }}

                                            </td>
                                            <td>{{ $crud['like_count'] }}</td>
                                            <td>{{ $crud['dis_like_Count'] }}</td>
                                            <td><img src="{{ asset('storage/post_image/' . $crud['photo']) }}"
                                                    width="80" height="40"></td>
                                            @if (checkSlug('edit_post') == true || checkSlug('delete_post') == true)
                                                <td>
                                                    @if (checkSlug('edit_post') == true)
                                                        <a class="fa fa-edit" style='font-size:20px;color:#24333b'
                                                            href="{{ route('post.edit', ['id' => encrypt($crud['id'])]) }}"></a>
                                                    @endif
                                                    @if (checkSlug('delete_post') == true)
                                                        <a class="fa fa-trash" style='font-size:20px;color:red'
                                                            href="{{ route('post.destroy', ['id' => encrypt($crud['id'])]) }}"
                                                            onclick="return confirm('Are you sure to delete?')"></a>
                                                    @endif
                                                </td>
                                            @endif
                                        

                                        </tr>
                                    @endforeach
                                    @endif
                            </tbody>
                        </table>
                       
                </div>

                </form>
            </div>
            <div class="box-footer clearfix">

                @if (!empty($paginator))
                {{ $paginator->links() }}
                @endif
            </div>
        </div>
        </div>
       
    </section>

    <script src="{{ asset('site/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_asset/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('site/validation/ajax.js') }}"></script>
    <script>
        $(".select2").select2();
        var publishedCheck = "{{ route('post.published') }}";
        var showPublishedPost = "{{ route('show.published') }}";
        var token = "{{ csrf_token() }}";
        var email = $('#category_id').val();
        //console.log(email);

        const category_dropdown = document.querySelector('select[id="category_id"]');
        const form = document.querySelector('form');
        
        category_dropdown.addEventListener('change', () => {
            form.submit();
        });
        const status_dropdown = document.querySelector('select[id="status_id"]');
        status_dropdown.addEventListener('change', () => {
            form.submit();
        });

        $("#tag_id").on("change", function() {
            form.submit();

        });

        function confirmToggle(checkbox) {
            var confirmationMessage = checkbox.checked ?
                'Are you sure you want Published' :
                'Are you sure you want UnPublished';

            var confirmed = confirm(confirmationMessage);

            if (!confirmed) {

                event.preventDefault();
            }
        }
    </script>
@endsection
