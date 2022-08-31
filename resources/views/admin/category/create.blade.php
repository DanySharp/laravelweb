@extends('admin.layouts.master')

@section('content')

    <h2  class="p-b-3" style="text-align: center;font-size: 18px">ایجاد دسته  جدید </h2>
    <div style="background: #ffe2d6" class="col-md-6 offset-md-3">
        @include('partials.formErrors')
        {!! Form::open(['action' =>'App\Http\Controllers\Admin\AdminCategoryController@store', 'method' => 'POST']) !!}

        <div class="form-group">
            {!! Form::label('title', 'عنوان  :') !!}
            {!! Form::text('title', null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('slug', 'آدرس :') !!}
            {!! Form::text('slug', null,['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('meta_description', 'متا توضیحات :') !!}
            {!! Form::textarea('meta_description', null,['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('meta_keywords', 'متاتگ  :') !!}
            {!! Form::textarea('meta_keywords', null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('ذخیره دسته بندی ',['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}


    </div>



@endsection
