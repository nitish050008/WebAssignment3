@extends('admin.layout.app');

@section('content_heading','Users');


@section('main_content')
<div class="container">
    <a href="/admin/users/new" class="btn btn-lg btn-primary">New User</a>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-striped table-bordered">
                <tr>
                   <th>ID</th> 
                   <th>Name</th>
                   <th>Email</th>
                   <th>Role</th>
                   <th>Edit</th>
                   <th>Delete</th>
                </tr>

                @foreach($users as $user):
                    <tr>
                    <form action="/admin/users/{{$user->id}}/delete" method="POST" style="display: none;">
                                @csrf
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role}}</td>
                        <td><a href="/admin/users/{{$user->id}}/edit" class="btn btn-sm btn-warning" >Edit</a></td>
                        <td>
                            
                                <input type="submit" class="btn btn-sm btn-danger" value="{{ __('Delete') }}">
                            
                        </td>
                    </tr>
                    </form>
                @endforeach

            </table>
        </div>
    </div>
</div>  
@endsection