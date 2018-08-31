@extends('layout.app');
@section('page_title','Reading');

@section('main_heading','KelaniSE Blog');
@section('sub_heading','Learn ---- Unlearn ---- Relearn');
    <!-- Page Header -->
    @section('page_header')
    <header class="masthead" style="background-image: url('img/post-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>{{$post->title}}</h1>
              <h2 class="subheading">{{$post->sub_title}}</h2>
              <span class="meta">Posted by
                <a href="#">{{$post->author}}</a>
                on {{$post->created_at}}</span>
            </div>
          </div>
        </div>
      </div>
    </header>
    @endsection

    @section('main_content')
    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            {{$post->content}}
          </div>
        </div>
      </div>
    </article>

    <hr>

    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <h5>Comments</h5>
          @if(Auth::check())
            <ul class="unstyled">
                <li>
                  <p>
                    <form action="/posts/{{$post->id}}/comment" method="POST">
                    @csrf
                      <input class="form-control" type="text" placeholder="Enter your comment" name="comment">
                      <input type="submit" value="Publish">
                    </form>
                  </p>
                </li>
            </ul>
          @else
          <ul class="unstyled">
                <li>
                  <p>
                    <form action="" method="POST">
                      <input class="form-control" disabled type="text" placeholder="Please Login To Enter Your Comment" name="comment">
                    </form>
                  </p>
                </li>
            </ul>
          @endif
            @foreach($comments as $comment)
              <ul class="unstyled">
                  <li>
                    <p><b>{{$comment->author}}</b> on {{$comment->created_at}}</p>
                    <p>{{$comment->content}}</p>
                  </li>
              </ul>
            @endforeach
          </div>
        </div>
      </div>
    </article>
    






  @endsection