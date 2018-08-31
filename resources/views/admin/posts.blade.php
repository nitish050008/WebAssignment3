@extends('admin.layout.app');

@section('content_heading','Posts');


@section('main_content')
<div class="container">
    <a href="/admin/posts/new" class="btn btn-lg btn-primary">New Post</a>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-striped table-bordered">
                <tr>
                   <th>ID</th> 
                   <th>Title</th>
                   <th>Sub Title</th>
                   <th>Author</th>
                   <th>Image</th>
                   <th>Edit</th>
                   <th>Delete</th>
                </tr>

                @foreach($posts as $post):
                    <tr>
                    <form  action="/admin/posts/{{$post->id}}/delete" method="POST" style="display: none;">
                                @csrf
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->sub_title}}</td>
                        <td>{{$post->author}}</td>
                        <td><img src="{{URL::asset('images/$post->image')}}" alt=""></td>
                        <td><a href="/admin/posts/{{$post->id}}/edit" class="btn btn-sm btn-warning" >Edit</a></td>
                        <td>
                        
                                <input type="submit" class="btn btn-sm btn-danger" value="{{ __('Delete') }}">
                            
                        </td>
                        </form>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
</div>        
@endsection