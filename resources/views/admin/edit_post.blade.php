@extends('admin.layout.app');

@section('content_heading','Edit Post');


@section('main_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Post') }}</div>

                <div class="card-body">
                    <form method="POST" action="/admin/posts/{{$post->id}}/edit" aria-label="{{ __('Publish') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $post->title }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sub_title" class="col-md-4 col-form-label text-md-right">{{ __('Sub Title') }}</label>

                            <div class="col-md-6">
                                <input id="sub_title" type="text" class="form-control{{ $errors->has('sub_title') ? ' is-invalid' : '' }}" name="sub_title" value="{{ $post->sub_title }}" required>

                                @if ($errors->has('sub_title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sub_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <input id="author" type="hidden"  name="author" value="{{ Auth::user()->name }}">
                        
                        <div class="form-group row">
                            <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Content') }}</label>

                            <div class="col-md-6">
                                <textarea name="content" id="content" cols="50" rows="20">{{$post->content}}</textarea>

                                @if ($errors->has('content'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sub_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" value="{{ $post->image }}" required>

                                @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>        
@endsection




