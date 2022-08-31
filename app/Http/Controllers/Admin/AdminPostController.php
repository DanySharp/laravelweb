<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\PostEditRequest;
use App\Models\Category;
use App\Models\Photo;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;

class AdminPostController extends Controller
{

    public function index()
    {
        $posts=Post::with('photo','category','user')->paginate(4);

        return  view('admin.posts.index',compact(['posts']));
    }


    public function create()
    {
        $categories=Category::pluck('title','id');
        return view('admin.posts.create',compact('categories'));
    }


    public function store(Request $request)
    {
        $post=new Post();
        if($file=$request->file('first_photo')){
            $name= time().$file->getClientOriginalName();
            $file->move('images/UserPic/',$name);
            $photo=new Photo();
            $photo->name=$file->getClientOriginalName();
            $photo->path=$name;
            $photo->user_id=Auth::id();
            $photo->save();

            $post->photo_id=$photo->id;


        }

        $post->title=$request->input('title');

        if($request->input('slug')){
            $post->slug=make_slug($request->input('slug'));
        }
        else{
            $post->slug==make_slug($request->input('title'));
        }



            $post->description=$request->input('description');
            $post->category_id=$request->input('category');
            $post->user_id=Auth::id();
            $post->meta_description=$request->input('meta_description');
            $post->meta_keywords=$request->input('meta_keywords');
            $post->status=$request->input('status');
            $post->save();

        Session::flash('add_post','ثبت مطلب انجام شد');
        return redirect('/admin/posts');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $post=Post::with('category')->where('id',$id)->first();
        $categories=Category::pluck('title','id');
        return view('admin.posts.edit',compact('post','categories'));
    }


    public function update(PostEditRequest $request, $id)
    {
        $post=Post::FindOrFail($id);

        if($file=$request->file('first_photo')){
            $name= time().$file->getClientOriginalName();
            $file->move('images/UserPic/',$name);
            $photo=new Photo();
            $photo->name=$file->getClientOriginalName();
            $photo->path=$name;
            if(file_exists(public_path().$post->photo->path)){
                unlink(public_path().$post->photo->path);
                $photo->user_id=Auth::id();
                $photo->save();
                $post->photo_id=$photo->id;
            }
            else{

                $photo->user_id=Auth::id();
                $photo->save();

                $post->photo_id=$photo->id;

            }



        }

        if($request->input('slug')){
            $post->slug=make_slug($request->input('slug'));
        }
        else{
            $post->slug==make_slug($request->input('title'));
        }

        $post->title=$request->input('title');
        $post->description=$request->input('description');
        $post->category_id=$request->input('category');
        $post->meta_description=$request->input('meta_description');
        $post->meta_keywords=$request->input('meta_keywords');
        $post->status=$request->input('status');
        $post->save();

        Session::flash('update_post','ویرایش مطلب انجام شد');
        return redirect('/admin/posts');
    }


    public function destroy($id)
    {
        $post=Post::FindOrFail($id);
        $photo=Photo::FindOrFail($post->photo_id);
        if(file_exists(public_path().$post->photo->path)){
            unlink(public_path().$post->photo->path);
        }
        else{
            $photo->delete();
            $post->delete();
            Session::flash('delete_post','حذف مطلب انجام شد');
            return redirect('admin/posts');
        }

        $photo->delete();
        $post->delete();
        Session::flash('delete_post','حذف مطلب انجام شد');
        return redirect('admin/posts');
    }
}
