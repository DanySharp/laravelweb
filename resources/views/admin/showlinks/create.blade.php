@extends('admin.layouts.master')

@section('content')

    <h2  class="p-b-3" style="text-align: center;font-size: 18px"> ثبت لینک های روزانه </h2>
    <div style="background: #ffe2d6" class="col-md-6 offset-md-3">
        @include('partials.formErrors')
        {!! Form::open(['action' =>'App\Http\Controllers\Admin\AdminShowLinkController@store', 'method' => 'POST']) !!}

        <div class="form-group">
            {!! Form::label('url_link', 'لینک  :') !!}
            {!! Form::text('url_link', null,['class'=>'form-control','autocomplete'=>'off']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('url_title', 'عنوان آدرس ') !!}
            {!! Form::text('url_title', null,['class'=>'form-control','autocomplete'=>'off']) !!}
        </div>



        <div class="form-group">
            {!! Form::submit('ذخیره لینک ',['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}


    </div>



@endsection
