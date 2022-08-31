@extends('admin.layouts.master')

@section('content')

    <h2  class="p-b-3" style="text-align: center;font-size: 18px"> ثبت لینک های روزانه </h2>
    <div style="background: #ffe2d6" class="col-md-6 offset-md-3">
        @include('partials.formErrors')
        {!! Form::open(['action' =>'App\Http\Controllers\Admin\AdminContactController@store', 'method' => 'POST']) !!}

        <div class="form-group">
            {!! Form::label('title', 'عنوان  :') !!}
            {!! Form::text('title', null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('matn', 'متن  :') !!}
            {!! Form::textarea('matn', null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('phone', 'تلفن  :') !!}
            {!! Form::text('phone', null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'ایمیل  :') !!}
            {!! Form::text('email', null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('telegram', 'تلگرام  ') !!}
            {!! Form::text('telegram', null,['class'=>'form-control']) !!}
        </div>




        <div class="form-group">
            {!! Form::label('instagram', 'اینستاگرام  :') !!}
            {!! Form::text('instagram', null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('linkedin', 'لینکداین  :') !!}
            {!! Form::text('linkedin', null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('link', 'لینک معمولی  :') !!}
            {!! Form::text('link', null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('ذخیره  ',['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}


    </div>



@endsection
