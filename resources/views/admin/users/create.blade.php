@extends('admin.layouts.master')

@section('content')

    <h2  class="p-b-3" style="text-align: center;font-size: 18px">ایجاد کاربر جدید </h2>
    <div class="bg-content">


        <div class="col-md-6 offset-lg-3">
            @include('partials.formErrors')
            {!! Form::open(['action' =>'App\Http\Controllers\Admin\AdminUserController@store', 'method' => 'POST','files'=>true]) !!}

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
                {!! Form::select('status', [1=>'فعال' ,0=>'غیرفعال'],0,['class'=>'form-control']) !!}
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
                {!! Form::submit('Save',['class'=>'btn btn-success']) !!}
            </div>

            {!! Form::close() !!}


        </div>

    </div>



@endsection
