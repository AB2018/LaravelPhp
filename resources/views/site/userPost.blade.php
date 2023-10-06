@extends('site.layout.app')

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
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <a type="submit" class="btn btn-default" href="{{ route('add.userPost') }}">Add Post</a>

            @foreach ($post_data as $crud)
                <a href="{{ route('post.details', ['id' => $crud['id']]) }}">
                    <div class="post-preview">
                        <div class="box-tools pull-right">

                            @if ($crud['status'] == '1')
                                <span class="fa fa-eye" style='color:#0e9e3e'> Published</span>
                            @else
                                <span class="fa fa-eye-slash" style='font-size:20px;color:#e7533f'> Private</span>
                            @endif
                        </div>
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

                <p class="post-meta">Posted by
                    <a href="#">
                        {{ $crud['name'] }}
                    </a> {{ dateFormat($crud['created_at'], 'F j, Y') }}
                </p>
                <p class="post-meta">Tag:
                    @foreach ($crud['tag_name'] as $tag_name)
                    <button type="button" class="round-button">{{ $tag_name }} </button>
                    @endforeach
                    @if (Auth::guard('uservalidate')->user())
                        @if ($crud['type'] == '1')
                            <button id="likebtn{{ $crud['id'] }}" class="fa fa-thumbs-up" style='color:#0e9e3e'
                                onclick="likeUnlikePost(1,{{ $crud['id'] }})"></button>
                        @else
                            <button id="likebtn{{ $crud['id'] }}" class="fa fa-thumbs-up"
                                onclick="likeUnlikePost(1,{{ $crud['id'] }})"></button>
                        @endif
                    @endif
                    <span id="like_count{{ $crud['id'] }}">{{ $crud['like_count'] }}</span> Likes
                    @if (Auth::guard('uservalidate')->user())
                        @if ($crud['type'] == '0')
                            <button id="disbtn{{ $crud['id'] }}" class="fa fa-thumbs-down" style='color:#e7533f'
                                onclick="likeUnlikePost(0,{{ $crud['id'] }})"></button>
                        @else
                            <button id="disbtn{{ $crud['id'] }}" class="fa fa-thumbs-down"
                                onclick="likeUnlikePost(0,{{ $crud['id'] }})"></button>
                        @endif
                    @endif
                    <span id="dislike_count{{ $crud['id'] }}">{{ $crud['dis_like_Count'] }}</span>
                    Dislikes

                </p>
                <hr>
            @endforeach
        </div>
    </div>
    </div>
    <!-- Pager -->

    </div>
    </div>
    </div>

    <script src="{{ asset('admin_asset/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <script>
        var publishedCheck = "{{ route('post.published') }}";
        var showPublishedPost = "{{ route('show.published') }}";
        var token = "{{ csrf_token() }}";
        var likeDislike = "{{ route('posts.like') }}";

        var post_id = "{{ $crud['id'] }}"
    </script>
    <script src="{{ asset('site/validation/ajax.js') }}"></script>
@endsection
