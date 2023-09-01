@extends('site.layout.app')
@section('main') 

<header class="intro-header" style="background-image: url({{ asset('storage/post_image/'.$cruds->photo) }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
               
                <div class="post-heading">
                 
                    <h1>{{$cruds->title}}</h1>
                    <h2 class="subheading">{{$cruds->subtitle}}</h2>
                 
                    <span class="meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">  
                <p>{!!$cruds->body!!}</p>
                 </div>
        </div>
    </div>
</article>


@endsection