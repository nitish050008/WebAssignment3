<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
use \App\Comment;

class PostController extends Controller
{
    public function show(Post $post){
        
        $comments = $post->comments;
        return view('post',compact('post','comments'));
    }

    public function add_comment(Post $post,Request $request){
        $comment = new Comment;
        $comment->post_id = $post->id;
        $comment->user_id = \Auth::user()->id;
        $comment->content = $request->comment;
        $comment->author = \Auth::user()->name;
        $comment->created_at = new \DateTime;
        $comment->updated_at = new \DateTime;

        $comment->save();
        $redirect_url ='/posts/'.$post->id.'/show';
        return redirect($redirect_url);
    }

}
