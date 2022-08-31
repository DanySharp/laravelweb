@extends('admin.layouts.master')


@section('content')



    @if(\Illuminate\Support\Facades\Session::has('approve_comment'))
        <div class="alert alert-success text-center">
            <div>{{session('approve_comment')}}</div>
        </div>
    @endif
    @if(\Illuminate\Support\Facades\Session::has('reject_comment'))
        <div class="alert alert-danger text-center">
            <div>{{session('reject_comment')}}</div>
        </div>
    @endif

    @if(\Illuminate\Support\Facades\Session::has('update_comment'))
        <div class="alert alert-success text-center">
            <div>{{session('update_comment')}}</div>
        </div>
    @endif
    @if(\Illuminate\Support\Facades\Session::has('delete_comment'))
        <div class="alert alert-danger text-center">
            <div>{{session('delete_comment')}}</div>
        </div>
    @endif

    <h3 class="p-b-2">لیست نظرات  </h3>
    <div class="bg-content">

        <table  class="table table-bordered table-hover bg-content">
            <thead>
            <tr>
                <th>ردیف</th>
                <th>توضیحات</th>
                <th>پست</th>
                <th>نام</th>
                <th>ایمیل</th>

                <th>تاریخ ایجاد</th>
                <th>وضعیت </th>
                <th>عملیات </th>

            </tr>
            </thead>
            <tbody>
            @foreach($comments as $comment)
                <tr class="active">

                    <td>{{$comment->id}}</td>
                    <td><a href="{{route('comments.edit',$comment->id)}}">{{$comment->description}}</a></td>
                    <td>{{$comment->post->title}}</td>
                    <td>{{$comment->comment_name}}</td>
                    <td>{{$comment->comment_email}}</td>
                    <td>{{$comment->id}}</td>
                    <td>{{\Hekmatinasser\Verta\Verta::instance($comment->created_at)}}</td>

                    @if($comment->status==0)

                        <td><span class="tag tag-pill tag-danger">منتشر نشده </span> </td>
                    @else
                        <td><span class="tag tag-pill tag-success">منتشر شده</span> </td>
                    @endif

                    @if($comment->status==0)
                        <td>

                            {!! Form::open(['route' =>['comments.actions',$comment->id], 'method' => 'POST']) !!}

                            <div class="form-group">
                                {!! Form::hidden('action','approved') !!}
                                {!! Form::submit(' تایید نشده',['class'=>'btn tag-pill tag-warning']) !!}
                            </div>

                            {!! Form::close() !!}

                        </td>

                    @else
                        <td>
                            {!! Form::open(['route' =>['comments.actions',$comment->id], 'method' => 'POST']) !!}

                            <div class="form-group">
                                {!! Form::hidden('action','rejected') !!}
                                {!! Form::submit('تایید شده ',['class'=>'btn tag-pill tag-success']) !!}
                            </div>

                            {!! Form::close() !!}

                        </td>
                    @endif

                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="col-md-4 offset-md-5 align-content-center text-center">{{$comments->links('pagination::bootstrap-4')}}</div>

    </div>

@endsection


