@extends('site.layout.app')
@section('main') 

@if(!(empty($post_data[0]['admin_post'])))
<header class="intro-header" style="background-image: url({{ asset('storage/post_image/'.$post_data[0]['photo']) }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
               
                <div class="post-heading">
               
                    <h1>{{$post_data[0]['title']}}</h1>
                    <h2 class="subheading">{{$post_data[0]['subtitle']}}</h2>
                
                    <span class="meta">Posted by  {{$post_data[0]['admin_post'][0]['name']}}  on  {{ \Carbon\Carbon::parse($post_data[0]['admin_post'][0]['created_at'])->format("F j, Y")}}</span>
                    <a class="fa  fa-thumbs-up" style='font-size:20px;color:rgb(110, 207, 90)' href=""></a>
                    <a class="fa  fa-thumbs-down" style='font-size:20px;color:rgb(228, 136, 75)' href=""></a>
                   
                  
                </div> 
            </div>
        </div>
    </div>
</header>
@endif
@if((empty($post_data[0]['admin_post'])))
<header class="intro-header" style="background-image: url({{ asset('storage/post_image/'.$post_data[0]['photo']) }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
             
                <div class="post-heading">
               
                    <h1>{{$post_data[0]['title']}}</h1>
                    <h2 class="subheading">{{$post_data[0]['subtitle']}}</h2>
                    
                    <span class="meta">Posted by  {{$post_data[0]['usercheck_post'][0]['name']}}  on  {{ \Carbon\Carbon::parse($post_data[0]['usercheck_post'][0]['created_at'])->format("F j, Y")}}</span>
                  
                </div> 
            </div>
        </div>
    </div>
</header>
@endif

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">  
                <p>{!!$post_data[0]['body']!!}</p>
                 </div>
        </div>
    </div>
</article>


@endsection