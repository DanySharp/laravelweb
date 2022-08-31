@extends('admin.layouts.master')


@section('content')
    @if(\Illuminate\Support\Facades\Session::has('delete_user'))
        <div class="alert alert-danger">
            <div>{{session('delete_user')}}</div>
        </div>
    @endif

    @if(\Illuminate\Support\Facades\Session::has('add_post'))
        <div class="alert alert-success">
            <div>{{session('add_post')}}</div>
        </div>
    @endif
    @if(\Illuminate\Support\Facades\Session::has('update_post'))
        <div class="alert alert-success">
            <div>{{session('update_post')}}</div>
        </div>
    @endif
    @if(\Illuminate\Support\Facades\Session::has('delete_post'))
        <div class="alert alert-danger">
            <div>{{session('delete_post')}}</div>
        </div>
    @endif


    <h3 class="p-b-2">ثبت  مطالب</h3>
   <div class="bg-content">

    <table  class="table table-bordered table-hover bg-content justify-content-center">
        <thead>
        <tr>
            <th>آواتار</th>
            <th>عنوان</th>
            <th>کاربر</th>
            <th>متن</th>
            <th>دسته بندی</th>
            <th>وضعیت </th>
            <th>تاریخ ایجاد</th>

        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr class="active">
                <td><img src="{{$post->photo ? $post ->photo->path : '/images/UserPic/22.png'}}" width="80" ></td>

                <td><a href="{{route('posts.edit',$post->id)}}">{{$post->title}}</a></td>
                <td>{{$post->user->name}}</td>
                <td>{{\Illuminate\Support\Str::limit($post->description)}}</td>
                <td>{{$post->category->title}}</td>

                        @if($post->status==0)
                            <span><td class="tag tag-pill tag-danger text-center ">غیر فعال</td></span>
                      @else
                    <span style=" vertical-align:middle "><td style="margin-right: 14px;margin-top: 5px" class="btn btn-success"> فعال</td></span>
                    @endif



                <td>{{\Hekmatinasser\Verta\Verta::instance($post->created_at)}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
       <div class="row-cols-lg-1 offset-10" style="text-align: center">{{$posts->links('pagination::bootstrap-4')}}</div>


        </div>

@endsection


