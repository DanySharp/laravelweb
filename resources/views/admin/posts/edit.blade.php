@extends('admin.layouts.master')

@section('content')

    <h2  class="p-b-3" style="text-align: center;font-size: 18px">ویرایش مطلب  </h2>
    <div class="col-md-3">

        <img src="{{$post->photo ? $post->photo->path :  '/images/UserPic/22.png'}}" class="img-fluid" alt="">

    </div>
    <div class="col-md-10 offset-md-1">
        @include('partials.formErrors')
        <div>


            {!! Form::model($post,['method' => 'PATCH','action' =>['App\Http\Controllers\Admin\AdminPostController@update', $post->id],'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('title', 'عنوان  :') !!}
                {!! Form::text('title', $post->title,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('slug', 'آدرس :') !!}
                {!! Form::text('slug', $post->slug,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('category', 'دسته بندی :') !!}
                {!! Form::select('category',$categories,$post->category->id,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('description', 'متن :') !!}
                {!! Form::textarea('description',$post->description,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('status', 'وضعیت :') !!}
                {!! Form::select('status', [1=>'فعال' ,0=>'غیرفعال'],$post->status,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('first_photo', 'تصویر  :') !!}
                {!! Form::file('first_photo',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('meta_description', 'متا متن :') !!}
                {!! Form::textarea('meta_description',$post->meta_description,['class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::label('meta_keywords', 'متاتگ  :') !!}
                {!! Form::textarea('meta_keywords',$post->meta_keywords,['class'=>'form-control']) !!}
            </div>


                <div class="form-group">
                    {!! Form::submit('بروز رسانی',['class'=>'btn btn-success col-md-3']) !!}
                </div>

                {!! Form::close() !!}

                {!! Form::open(['method' =>'DELETE', 'action' => ['App\Http\Controllers\Admin\AdminPostController@destroy',$post->id ]]) !!}
                <div class="form-group">
                    {!! Form::submit('حذف ',['class'=>'btn btn-danger col-md-3']) !!}
                </div>

                {!! Form::close() !!}

            </div>

        </div>




    </div>



@endsection
