@extends('layout.app');

@section('page_title','Home');

@section('main_heading','KelaniSE Blog');
@section('sub_heading','Learn ---- Unlearn ---- Relearn');

@section('page_header')
<header class="masthead" style="background-image: url('{{URL::asset('images/home-bg.jpg')}}')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>@yield('main_heading')</h1>
              <span class="subheading">@yield('sub_heading')</span>
            </div>
          </div>
        </div>
      </div>
    </header>
@endsection


@section('main_content')


<div class="container">
 
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

         @foreach($posts as $post)
          <div class="post-preview">
            <a href="/posts/{{$post->id}}/show">
              <h2 class="post-title">
                {{$post->title}}
              </h2>
              <h3 class="post-subtitle">
                {{$post->sub_title}}
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">{{$post->author}}</a>
                on {{$post->created_at}}</p>
          </div>
          <hr>
         @endforeach
        
          
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>

@endsection