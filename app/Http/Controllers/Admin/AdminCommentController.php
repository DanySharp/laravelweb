<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminCommentController extends Controller
{
    public function index()
    {
        $comments=Comment::with('post')
        ->OrderBy('created_at','desc')
        ->paginate(6);
        return view('admin.comments.index',compact('comments'));
    }

    public function actions(Request $request,$id)
    {
        if($request->has('action')) {
            if ($request->input('action') == 'rejected') {
                $comment = Comment::findOrfail($id);
                $comment->status = 0;
                $comment->save();
                Session::flash('reject_comment', 'نظر کاربر رد شد');


            } else {
                $comment = Comment::findOrfail($id);
                $comment->status = 1;
                $comment->save();
                Session::flash('approve_comment', 'دیدگاه کاربر تایید شد   ');


            }
        }
        return redirect('/admin/comments');
    }


    public function edit($id)
    {
        $comment=Comment::FindOrFail($id);

        return view('admin.comments.edit',compact(['comment']));



    }


    public function update(Request $request, $id)
    {



        $comment=Comment::FindOrFail($id);
        $comment->description=$request->input('description');
        $comment->post_id=$request->input('post_id');
        $comment->parent_id=$request->input('parent_id');
        $comment->save();


        Session::flash('update_comment','ویرایش دیدگاه انجام شد');
        return redirect('/admin/comments');
    }


    public function destroy($id)
    {
        $comment=Comment::FindOrFail($id);

        $comment->delete();

        Session::flash('delete_comment','حذف دیدگاه انجام شد');
        return redirect('admin/comments');
    }
}
