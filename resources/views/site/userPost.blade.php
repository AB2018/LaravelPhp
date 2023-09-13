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
          

            @foreach ($cruds as $crud)
                <a href="{{ route('post.details', ['id' => $crud['id']]) }}">
                    <div class="post-preview">
                        <div class="box-tools pull-right">

                            @if ($crud['status'] == 'Published')
                                <span class="fa fa-eye" style='color:#0e9e3e'> {{ $crud['status'] }}</span>
                            @else
                                <span class="fa fa-eye-slash" style='font-size:20px;color:#e7533f'> Private</span>
                            @endif
                        </div>
                        <h2 class="post-title">
                            {{ $crud['title'] }}
                        </h2>
                        <h3 class="post-subtitle">
                            {{ $crud['subtitle'] }}
                        </h3>

                </a>

                <p class="post-meta">Posted by
                    <a href="#">
                        {{ $crud['usercheck_post'][0]['name'] }}
                    </a> {{ \Carbon\Carbon::parse($crud['usercheck_post'][0]['created_at'])->format('F j, Y') }}
                </p>
                <hr>
            @endforeach
        </div>
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

    <script src="{{ asset('admin_asset/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <script>
        var publishedCheck = "{{ route('post.published') }}";
        var showPublishedPost = "{{ route('show.published') }}";
        var token = "{{ csrf_token() }}";
    </script>
    <script src="{{ asset('site/validation/ajax.js') }}"></script>
@endsection
