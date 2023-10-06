@extends('site.layout.app')
@section('main')
    {{-- @if (!empty($post_data[0]['admin_post']))
        <header class="intro-header" style="background-image: url({{ asset('storage/post_image/' . $post_data[0]['photo']) }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                        <div class="post-heading">

                            <h1>{{ $post_data[0]['title'] }}</h1>
                            <h2 class="subheading">{{ $post_data[0]['subtitle'] }}</h2>

                        </div>
                    </div>
                </div>
            </div>
        </header>
    @endif --}}
    {{-- @if (empty($post_data[0]['admin_post'])) --}}
    {{-- @dd($post_data) --}}
    @foreach ($post_data as $crud)
        <header class="intro-header" style="background-image: url({{ asset('storage/post_image/' . $crud['photo']) }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                        <div class="post-heading">

                            <h1>{{ $crud['title'] }} @foreach ($crud['category_name'] as $category_name)
                                    <span style="font-size: 20px;color:rgb(135, 97, 172) "> (
                                        {{ $category_name }} )</span>
                                @endforeach
                            </h1>

                            <h2 class="subheading">{{ $crud['subtitle'] }}</h2>

                            <span class="meta">Posted by {{ $crud['name'] }} on
                                {{ dateFormat($crud['created_at'], 'F j, Y') }}</span>
                            <p class="post-meta">Tag:
                                @foreach ($crud['tag_name'] as $tag_name)
                                <button type="button" class="round-button">{{ $tag_name }} </button>
                                @endforeach
                                @if (Auth::guard('uservalidate')->user())
                                @if ($crud['type'] == '1')
                                    <button id="likebtn{{ $crud['id'] }}" class="fa fa-thumbs-up"
                                        style='color:#0e9e3e;background-color: #fcfeff;'
                                        onclick="likeUnlikePost(1,{{ $crud['id'] }})"></button>
                                @else
                                    <button id="likebtn{{ $crud['id'] }}" class="fa fa-thumbs-up"
                                        onclick="likeUnlikePost(1,{{ $crud['id'] }})" style='color:grey;background-color: #fcfeff'></button>
                                @endif
                            @endif
                            <span id="like_count{{ $crud['id'] }}">{{ $crud['like_count'] }}</span> Likes
                            @if (Auth::guard('uservalidate')->user())
                                @if ($crud['type'] == '0')
                                    <button id="disbtn{{ $crud['id'] }}" class="fa fa-thumbs-down"
                                        style='color:#e7533f;background-color: #fcfeff'
                                        onclick="likeUnlikePost(0,{{ $crud['id'] }})"></button>
                                @else
                                    <button id="disbtn{{ $crud['id'] }}" class="fa fa-thumbs-down"
                                        onclick="likeUnlikePost(0,{{ $crud['id'] }})" style='color:grey;background-color: #fcfeff'></button>
                                @endif
                            @endif
                            <span id="dislike_count{{ $crud['id'] }}">{{ $crud['dis_like_Count'] }}</span>
                            Dislikes

                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        {{-- @endif --}}

        <!-- Post Content -->
        <article>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <p>{!! $crud['body'] !!}</p>
                    </div>
                </div>
            </div>
        </article>
    @endforeach
    <script src="{{ asset('admin_asset/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <script>
        var likeDislike = "{{ route('posts.like')}}";
        var token = "{{ csrf_token() }}";
        var post_id = "{{$crud['id'] }}"
        console.log("jhhnij");
    </script>
    <script src="{{ asset('site/validation/ajax.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@endsection
@section('userjs')

  
@endsection

