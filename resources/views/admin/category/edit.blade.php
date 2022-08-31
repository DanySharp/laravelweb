@extends('admin.layouts.master')

@section('content')

    <h2  class="p-b-3" style="text-align: center;font-size: 18px">ویرایش مطلب  </h2>
    <div class="col-md-6 offset-md-3">


    </div>
    <div class="col-md-10 offset-md-1">
        @include('partials.formErrors')
        <div>


            {!! Form::model($category,['method' => 'PATCH','action' =>['App\Http\Controllers\Admin\AdminCategoryController@update', $category->id]]) !!}

            <div class="form-group">
                {!! Form::label('title', 'عنوان  :') !!}
                {!! Form::text('title', $category->title,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('slug', 'آدرس :') !!}
                {!! Form::text('slug', $category->slug,['class'=>'form-control']) !!}
            </div>




            <div class="form-group">
                {!! Form::label('meta_description', 'متا توضیحات :') !!}
                {!! Form::textarea('meta_description',$category->meta_description,['class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::label('meta_keywords', 'متاتگ  :') !!}
                {!! Form::textarea('meta_keywords',$category->meta_keywords,['class'=>'form-control']) !!}
            </div>


                <div class="form-group">
                    {!! Form::submit('بروز رسانی',['class'=>'btn btn-success col-md-3']) !!}
                </div>

                {!! Form::close() !!}

                {!! Form::open(['method' =>'DELETE', 'action' => ['App\Http\Controllers\Admin\AdminCategoryController@destroy',$category->id ]]) !!}
                <div class="form-group">
                    {!! Form::submit('حذف ',['class'=>'btn btn-danger col-md-3']) !!}
                </div>

                {!! Form::close() !!}

            </div>

        </div>




    </div>



@endsection
