@extends('admin.layouts.master')

@section('content')

    <h2  class="p-b-3" style="text-align: center;font-size: 18px">ویرایش کاربر {{$user->name}} </h2>
    <div class="bg-content">

        <div class="row">

            <div class="col-md-3">

                <img src="{{$user->photo ? $user->photo->path : "/images/UserPic/22.png"}}" class="img-fluid" alt="">

            </div>


            <div class="col-md-9 row">
                @include('partials.formErrors')
                {!! Form::model($user,['method' =>'PATCH', 'action' => ['App\Http\Controllers\Admin\AdminUserController@update',$user->id ] ,'files'=>true]) !!}

                <div class="form-group">
                    {!! Form::label('name', 'مشخصات :') !!}
                    {!! Form::text('name', null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'ایمیل :') !!}
                    {!! Form::text('email', null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('roles', 'نقش :') !!}
                    {!! Form::select('roles[]',$roles,null, ['multiple'=>'multiple','class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('status', 'وضعیت :') !!}
                    {!! Form::select('status', [1=>'فعال' ,0=>'غیرفعال'],null,['class'=>'form-control']) !!}
                </div>




                <div class="form-group">
                    {!! Form::label('avatar', 'آواتار :') !!}
                    {!! Form::file('avatar',null,['class'=>'form-control']) !!}
                </div>



                <div class="form-group">
                    {!! Form::label('password', 'کلمه عبور :') !!}
                    {!! Form::password('password', ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('بروز رسانی',['class'=>'btn btn-success col-md-3']) !!}
                </div>

                {!! Form::close() !!}

                {!! Form::open(['method' =>'delete', 'action' => ['App\Http\Controllers\Admin\AdminUserController@destroy',$user->id ]]) !!}
                <div class="form-group">
                    {!! Form::submit('حذف ',['class'=>'btn btn-danger col-md-3']) !!}
                </div>

                {!! Form::close() !!}

            </div>

        </div>




    </div>



@endsection
