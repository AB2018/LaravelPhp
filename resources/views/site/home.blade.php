@extends('site.layout.app')
@section('user-css')
    <link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">
@endsection
@section('main')
    <header class="intro-header" style="background-image: url({{ asset('site/img/home-bg.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <hr class="small">
                        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    @if (Auth::guard('uservalidate')->user())
                    <div class="form-group col-xs-12">

                        <a type="submit" href="{{ route('add.userPost') }}" class="btn btn-default">Add Post</a>
                    </div>
                    @endif
                    <form id="category" action="{{ route('home') }}">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">

                                <label class="required">Category</label>
                                <select class="form-control " name="category_id" id="category_id"
                                    data-placeholder="Select a Category">
                                    <option>Select a Category</option>
                                    @foreach ($getCategory as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="required">Tag</label>
                                <select class="form-control select2" id="tag_id" name="tag_id[]" multiple="multiple"
                                    data-placeholder="Select a tag" style="width: 100%;">
                                    <option></option>
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
                        </div>

                    </form>
                    <div id="filteredData">
                        @foreach ($post_data as $crud)
                            @if (!empty($crud))
            

                                    <h2 class="post-title">
                                        {{ $crud->title }}
                                        <span style="font-size: 20px;color:rgb(135, 97, 172) "> (
                                            {{ $crud->category_name }} )</span>

                                    </h2>
                                    </h2>
                                    <h3 class="post-subtitle">
                                        {{ $crud->subtitle }}
                                    </h3>
                                </a>

                                <p class="post-meta">Posted by : <span>{{ $crud->name }} </span>
                                    {{dateFormat($crud->created_at,"F j, Y") }}</p>
                                <p class="post-meta">Tag : <button>{{ $crud->tag_name }} </button>
                           
                                    <button class="fa fa-thumbs-up" onclick="likePost({{ $crud->id}})"></button>
                                    <span id="like_count">0</span> Likes
                                    <button class="fa fa-thumbs-down" onclick="dislikePost({{ $crud->id}})" ></button>
                                
                                    {{-- <button class="fa fa-thumbs-up like" style='font-size:20px;color:rgb(110, 207, 90)' data-id="{{$crud->id }}"  data-user_id="{{$crud->user_id}}" href=""></button>
                                <button class="fa fa-thumbs-down" style='font-size:20px;color:rgb(228, 136, 75)' class="test"  href=""></button>
                         --}}
                                </p>
                            @endif
                            @if (empty($crud))
                                <a href="{{ route('post.details', ['id' => $crud->id]) }}">
                                    <h2 class="post-title">
                                        {{ $crud->title }}
                                    </h2>
                                    <h3 class="post-subtitle">
                                        {{ $crud->subtitle }}
                                    </h3>
                                </a>
                              
                                <p class="post-meta">Posted by <a href="#">{{ $crud->name }}></a>
                                 
                                 {{dateFormat($crud->created_at,"F j, Y") }}</p>
                                <p class="post-meta">Tag : {{ $crud->tag_name }}
                                    <button class="fa fa-thumbs-up" onclick="likePost({{ $crud->id,}})"></button>
                                    <span id="like_count"></span> Likes
                                    <button class="fa fa-thumbs-down" onclick="dislikePost({{ $crud->id}})" ></button>
                                    {{-- <button class="fa  fa-thumbs-up like" style='font-size:20px;color:rgb(110, 207, 90)'  data-id="{{$crud->id }}" data-user_id="{{$crud->user_id}}"  href=""></button>
                                    <button class="fa  fa-thumbs-down" style='font-size:20px;color:rgb(228, 136, 75)'id="test" href=""></button>
                                     --}}
                                </p>
                                <hr>
                            @endif
                        @endforeach
                   
                    </div>
                </div>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@section('userjs')
    <script src="{{ asset('admin_asset/plugins/select2/select2.full.min.js') }}"></script>
    <script>
        $(".select2").select2();
        var likeDislike = "{{ route('like.check') }}";
        var token = "{{ csrf_token() }}";
      
    </script>
    <script src="{{ asset('site/validation/ajax.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        function likePost(id) {
            //console.log(user_id);
            $.ajax({
                url: '/like/' + id,
                type: 'POST',
                data: {
                    post_id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    $('#like_count' + id).text(data.like_count);
                    console.log('Post liked! Likes count:', response);
                },
                error: function(error) {
                    console.error('Error liking post:', error);
                }
            });
        }
        const category_dropdown = document.querySelector('select[id="category_id"]');
        const tag_dropdown = document.querySelector('select[id="tag_id"]');
        const form = document.querySelector('form');

        category_dropdown.addEventListener('change', () => {
            form.submit();
        });
        tag_dropdown.addEventListener('change', () => {
            form.submit();
        });
    </script>
@endsection
