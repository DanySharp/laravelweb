<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserEditRequest;
use App\Http\Requests\UserRequest;
use App\Models\Photo;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AdminUserController extends Controller
{

    public function index()
    {
        $users=User::with('roles')->paginate(2);
        return view('admin.users.index',compact(['users']));
    }


    public function create()
    {
        $roles=Role::pluck('name','id');


        return view('admin.users.create',compact(['roles']));
    }


    public function store(UserRequest $request)
    {
        $user=new User();
        if($file=$request->file('avatar')){
            $name= time().$file->getClientOriginalName();
            $file->move('images/UserPic/',$name);
            $photo=new Photo();
            $photo->name=$file->getClientOriginalName();
            $photo->path=$name;
            $photo->user_id=Auth::id();
            $photo->save();

            $user->photo_id=$photo->id;
        }


        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=bcrypt($request->input('password'));
        $user->status=$request->input('status');

            $user->save();
        $user->roles()->attach($request->input('roles'));
        Session::flash('add_user','ثبت کاربر انجام شد');
        return redirect('/admin/users');
    }

    public function show($id)
    {

    }


    public function edit($id)
    {
        $user=User::FindOrFail($id);
        $roles=Role::pluck('name','id');
        return view('admin.users.edit',compact(['user','roles']));
    }


    public function update(UserEditRequest $request, $id)
    {
        $user=User::findorfail($id);
        if($file=$request->file('avatar')){
            $name= time().$file->getClientOriginalName();
            $file->move('images/UserPic/',$name);
            $photo=new Photo();
            $photo->name=$file->getClientOriginalName();
            $photo->path=$name;
            if(file_exists(public_path().$user->photo->path)){
                unlink(public_path().$user->photo->path);
            }
            else{
                $photo->user_id=Auth::id();
                $photo->save();
                $user->photo_id=$photo->id;
            }
            $photo->user_id=Auth::id();
            $photo->save();

            $user->photo_id=$photo->id;
        }


        $user->name=$request->input('name');
        $user->email=$request->input('email');

        if(trim($request->input('password')!="")){
            $user->password=bcrypt($request->input('password'));
        }
        $user->status=$request->input('status');

        $user->save();
        $user->roles()->sync($request->input('roles'));
        Session::flash('update_user','ویرایش کاربر انجام شد');
        return redirect('/admin/users');
    }


    public function destroy($id)
    {
        $user=User::FindOrFail($id);
        $photo=Photo::FindOrFail($user->photo_id);

        if(file_exists(public_path().$user->photo->path)){
            unlink(public_path().$user->photo->path);
        }
        else{
            $photo->delete();
            $user->delete();
            Session::flash('delete_user','حذف کاربر انجام شد');
            return redirect('admin/users');
        }
        $photo->delete();
        $user->delete();
       Session::flash('delete_user','حذف کاربر انجام شد');
        return redirect('admin/users');

    }
}
