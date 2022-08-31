@extends('admin.layouts.master')

@section('content')
    <h2  class="p-b-3" style="text-align: center;font-size: 18px">ایجاد پست جدید </h2>
    <div class="col-md-10 offset-md-1">
        @include('partials.formErrors')
        {!! Form::open(['action' =>'App\Http\Controllers\Admin\AdminPostController@store', 'method' => 'POST','files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('title', 'عنوان  :') !!}
            {!! Form::text('title', null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('slug', 'آدرس :') !!}
            {!! Form::text('slug', null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('category', 'دسته بندی :') !!}
            {!! Form::select('category',$categories,null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'متن :') !!}
            {!! Form::textarea('description', null,['class'=>'form-control ckeditor' ]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('status', 'وضعیت :') !!}
            {!! Form::select('status', [1=>'فعال' ,0=>'غیرفعال'],0,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('first_photo', 'تصویر  :') !!}
            {!! Form::file('first_photo',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('meta_description', 'متا متن :') !!}
            {!! Form::textarea('meta_description', null,['class'=>'form-control']) !!}

        </div>


        <div class="form-group">
            {!! Form::label('meta_keywords', 'متاتگ  :') !!}
            {!! Form::textarea('meta_keywords', null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('ارسال پست',['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}


    </div>



@endsection
