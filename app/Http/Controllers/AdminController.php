<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Post;
use \Auth;

use App\Exports\UsersExport;
use App\Exports\PostsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;    

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index(){
        return view('admin.index');
    }

    public function posts(){
        $posts = \App\post::all();
        return view('admin.posts',compact('posts'));
    }

    public function new_post_form(){
        return view('admin.new_post');
    }

    public function new_post_add(Request $request){
        
        $post = new Post;
        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->sub_title = $request->sub_title;
        $post->author = $request->author;
        $post->content = $request->content;
        $post->image = $request->image;
        $post->created_at = new \DateTime;
        $post->updated_at = new \DateTime;

        $post->save();
        return redirect('/admin/posts');
    }

    public function edit_post_form(Post $post ){
        
        return view('admin.edit_post',compact('post'));
    }

    public function edit_post_edit(Post $post,Request $request){
        
        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->sub_title = $request->sub_title;
        $post->author = $request->author;
        $post->content = $request->content;
        $post->image = $request->image;
        $post->created_at = $request->created_at;
        $post->updated_at = new \DateTime;

        $post->save();
        return redirect('/admin/posts');
    }

    public function delete_post(Post $post){
        
        $post->delete();
        return redirect('/admin/posts');
    }



    



    public function users(){
        $users = \App\user::all();
        
        return view('admin.users',compact('users'));
    }

    public function new_user_form(){
        return view('admin.new_user');
    }

    public function new_user_add(Request $request){
        
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = bcrypt($request->password);
        $user->created_at = new \DateTime;
        $user->updated_at = new \DateTime;

        $user->save();
        return redirect('/admin/users');
    }

    public function edit_user_form(User $user ){
        
        return view('admin.edit_user',compact('user'));
    }

    public function edit_user_edit(User $user,Request $request){
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = bcrypt($request->password);
        $user->created_at = $request->created_at;
        $user->updated_at = new \DateTime;

        $user->save();
        return redirect('/admin/users');
    }

    public function delete_user(User $user){
        $user->delete();
        return redirect('/admin/users');
    }
    

    public function export_users() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    public function export_posts() 
    {
        return Excel::download(new PostsExport, 'posts.xlsx');
    }

}



