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

                                <select class="form-control " style="height:43px" name="category_id" id="category_id"
                                    placeholder="Select a Category">

                                    <option value="0">Select a Category</option>

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
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="required">Tag </label>

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
                    </form>
                    <div id="filteredData">

                        @foreach ($post_data as $crud)
                            @if (!empty($crud))
                                <a href="{{ route('post.details', ['id' => $crud['id']]) }}">
                                    <h2 class="post-title">
                                        {{ $crud['title'] }}
                                        @foreach ($crud['category_name'] as $category_name)
                                            <span style="font-size: 20px;color:rgb(135, 97, 172) "> (
                                                {{ $category_name }} )</span>
                                        @endforeach
                                    </h2>
                                    </h2>
                                    <h3 class="post-subtitle">
                                        {{ $crud['subtitle'] }}
                                    </h3>
                                </a>
                                <p class="post-meta">Posted by : <span>{{ $crud['name'] }} </span>
                                    {{ dateFormat($crud['created_at'], 'F j, Y') }}</p>
                                <p class="post-meta">Tag:
                                    @foreach ($crud['tag_name'] as $tag_name)
                                        <button>{{ $tag_name }} </button>
                                    @endforeach
                                    @if (Auth::guard('uservalidate')->user())
                                        @if ($crud['type'] == 1)
                                            <button class="fa fa-thumbs-up" style='color:#0e9e3e'
                                                onclick="likeUnlikePost(1,{{ $crud['id'] }})"></button>
                                        @else
                                            <button class="fa fa-thumbs-up"
                                                onclick="likeUnlikePost(1,{{ $crud['id'] }})"></button>
                                        @endif
                                    @endif
                                    <span id="like_count{{ $crud['id'] }}">{{ $crud['like_count'] }}</span> Likes
                                    @if (Auth::guard('uservalidate')->user())
                                        @if ($crud['type'] == 0)
                                            <button class="fa fa-thumbs-down" style='font-size:20px;color:#e7533f'
                                                onclick="likeUnlikePost(0,{{ $crud['id'] }})"></button>
                                        @else
                                            <button class="fa fa-thumbs-down"
                                                onclick="likeUnlikePost(1,{{ $crud['id'] }})"></button>
                                        @endif
                                    @endif
                                    <span id="dislike_count{{ $crud['id'] }}">{{ $crud['dis_like_Count'] }}</span>
                                    Disikes
                                    {{-- <button class="fa fa-thumbs-up like" style='font-size:20px;color:rgb(110, 207, 90)' data-id="{{$crud->id }}"  data-user_id="{{$crud->user_id}}" href=""></button>
                                <button class="fa fa-thumbs-down" style='font-size:20px;color:rgb(228, 136, 75)' class="test"  href=""></button>
                         --}}
                                </p>
                            @endif
                            @if (empty($crud))
                                <a href="{{ route('post.details', ['id' => $crud['id']]) }}">
                                    <h2 class="post-title">
                                        {{ $crud['title'] }}
                                        @foreach ($crud['category_name'] as $category_name)
                                            <span style="font-size: 20px;color:rgb(135, 97, 172) "> (
                                                {{ $category_name }} )</span>
                                        @endforeach
                                    </h2>
                                    <h3 class="post-subtitle">
                                        {{ $crud['subtitle'] }}
                                    </h3>
                                </a>

                                <p class="post-meta">Posted by <a href="#">{{ $crud['name'] }}></a>

                                    {{ dateFormat($crud - ['created_at'], 'F j, Y') }}</p>
                                <p class="post-meta">Tag : {{ $crud->tag_name }}
                                    @if (Auth::guard('uservalidate')->user())
                                        @if ($crud['type'] == 1)
                                            <button class="fa fa-thumbs-up" style='color:#0e9e3e'
                                                onclick="likeUnlikePost(1,{{ $crud['id'] }})"></button>
                                        @else
                                            <button class="fa fa-thumbs-up"
                                                onclick="likeUnlikePost(1,{{ $crud['id'] }})"></button>
                                        @endif
                                    @endif
                                    <span id="like_count{{ $crud['id'] }}">{{ $crud['like_count'] }}</span> Likes
                                    @if (Auth::guard('uservalidate')->user())
                                        @if ($crud['type'] == 0)
                                            <button class="fa fa-thumbs-down" style='font-size:20px;color:#e7533f'
                                                onclick="likeUnlikePost(0,{{ $crud['id'] }})"></button>
                                        @else
                                            <button class="fa fa-thumbs-down"
                                                onclick="likeUnlikePost(1,{{ $crud['id'] }})"></button>
                                        @endif
                                    @endif
                                    <span id="dislike_count{{ $crud['id'] }}">{{ $crud['dis_like_Count'] }}</span>
                                    Dislikes
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
        function likeUnlikePost(type, id) {
            $.ajax({
                url: '/like/' + id,
                type: 'POST',
                data: {
                    likeUnlike: type,
                    post_id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(message) {
                    console.log((message.message));
                    if (type == 1) {
                        $('#like_count' + id).html((message.message));
                    } else  {
                        $('#dislike_count' + id).html((message.message))
                    }
                },
                error: function(error) {
                    console.error('Error liking post:', error);
                }
            });
        }
        // $('#category_id').on('change', function() {
        //     var value = $(this).val();

        //     $.ajax({
        //         url: '/homeCategory' ,
        //         type: 'POST',
        //         data: {
        //             category_id: value,
        //             _token: '{{ csrf_token() }}'
        //         }



        //     });
        // })


        const category_dropdown = document.querySelector('select[id="category_id"]');
        // const tag_dropdown = document.querySelector('select[id="tag_id"]');
        const form = document.querySelector('form');

        category_dropdown.addEventListener('change', () => {
            form.submit();
        });
        // tag_dropdown.on("change", function () { {
        //     form.submit();
        // });
        $("#tag_id").on("change", function() {

            form.submit();

        });
    </script>
@endsection
