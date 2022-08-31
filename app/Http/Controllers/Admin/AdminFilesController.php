<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminFilesController extends Controller
{
    public function index()
    {
        $photos=Photo::with(['user'])->paginate(6);
        return view('admin.files.index',compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file=$request->file('file');
        $name= time().$file->getClientOriginalName();
        $file->move('images/UserPic/',$name);
        $photo=new Photo();
        $photo->name=$file->getClientOriginalName();
        $photo->path=$name;
        $photo->user_id=Auth::id();
        $photo->save();

    }


    public function show($id)
    {
        //
    }




    public function destroy($id)
    {


        $photo = Photo::findOrFail($id);

            $photo->delete();
            Session::flash('delete_file', 'فایل با موفقیت حذف شد');
        if(file_exists(public_path().$photo->path)){
            unlink(public_path() . $photo->path);
            $photo->delete();
            Session::flash('delete_file', 'فایل با موفقیت حذف شد');

            return redirect('admin/files');
        }
        else{
            $photo->delete();
            Session::flash('delete_file', 'آدرس فایل حذف شد ');

            return redirect('admin/files');
        }
       // unlink(public_path() . $photo->path);

    }
    public function deleteAll(Request $request)
    {
        $photos=Photo::FindOrFail($request->checkBoxArray);
        foreach ($photos as $photo){
            if(file_exists(public_path().$photo->path)){

                unlink(public_path().$photo->path);
                $photo->delete();
            }
            else{
                $photo->delete();
            }
            Session::flash('delete_file', 'فایل ها  با موفقیت حذف شد');
            return redirect()->back();
        }


        Session::flash('delete_file', 'فایل ها  با موفقیت حذف شد');
        return redirect()->back();

    }

}
