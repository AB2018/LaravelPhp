@extends('site.layout.app')

@section('main') 

<header class="intro-header" style="background-image: url({{asset('site/img/home-bg.jpg')}})">
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
                @foreach($cruds as $crud)
                <a href="{{ route('post.details', ['id' => $crud->id]) }}">
                   
                    <h2 class="post-title">
                        {{$crud->title}}
                    </h2>
                    <h3 class="post-subtitle">
                        {{$crud->subtitle}}
                    </h3>
                
                </a>
                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> {{ \Carbon\Carbon::parse($crud->created_at)->format("F j, Y")}}</p>
                <hr>
                @endforeach
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
