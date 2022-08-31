<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    public function store(CommentRequest $request,$postId)
    {

        $post=Post::findorfail($postId);
        if($post){
            $comment=new Comment();
            $comment->description=$request->input('description');
            $comment->comment_name=$request->input('comment_name');
            $comment->comment_email=$request->input('comment_email');
            $comment->post_id=$post->id;
            $comment->status=0;

            $comment->save();
        }


        Session::flash('add_comment',' ثبت دیدگاه انجام شد و پس از تایید منتشر خواهد گردید');
        return back();
    }

    public function reply(Request $request)
    {
        $postId=$request->input('post_id');
        $parentId=$request->input('parent_id');
        $post=Post::FindOrFail($postId);
        if ($post){
            $comment=new Comment();
            $comment->description=$request->input('description');
            $comment->parent_id=$parentId;
            $comment->post_id=$post->id;
            $comment->status= 0;
            $comment->save();
        }


        Session::flash('add_comment','نظر  شما ثبت شد و در انتظار تایید  قرار گرفت!');
        return back();


    }
}
