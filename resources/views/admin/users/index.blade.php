@extends('admin.layouts.master')


@section('content')
    @if(\Illuminate\Support\Facades\Session::has('delete_user'))
        <div class="alert alert-danger">
            <div>{{session('delete_user')}}</div>
        </div>
    @endif

    @if(\Illuminate\Support\Facades\Session::has('add_user'))
        <div class="alert alert-success">
            <div>{{session('add_user')}}</div>
        </div>
    @endif
    @if(\Illuminate\Support\Facades\Session::has('update_user'))
        <div class="alert alert-success">
            <div>{{session('update_user')}}</div>
        </div>
    @endif
    @if(\Illuminate\Support\Facades\Session::has('delete_user'))
        <div class="alert alert-danger">
            <div>{{session('delete_user')}}</div>
        </div>
    @endif


    <h3 class="p-b-2">ثبت کاربر جدید</h3>
   <div class="bg-content">

    <table  class="table table-bordered table-hover bg-content">
        <thead>
        <tr>
            <th>*</th>
            <th>نام</th>
            <th>ایمیل</th>
            <th>تاریخ ایجاد</th>
            <th>وضعیت </th>
            <th>نقش</th>

        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr class="active">
                <td><img src="{{$user->photo ? $user->photo->path : "/images/UserPic/22.png"}}" width="80" ></td>


            <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{\Hekmatinasser\Verta\Verta::instance($user->created_at)}}</td>
            @if($user->status==0)

                <td><span class="tag tag-pill tag-danger">غیر فعال</span> </td>
            @else
                <td><span class="tag tag-pill tag-success">فعال</span> </td>
            @endif
                  <td> <ul style="list-style: none;">
                     @foreach($user->roles as $role)
                         <li>{{$role->name}}</li>
                     @endforeach
                 </ul></td>

        </tr>
        @endforeach
        </tbody>
    </table>


       <div class="row-cols-lg-1 offset-10" style="text-align: center">{{$users->links('pagination::bootstrap-4')}}</div>


   </div>

@endsection


