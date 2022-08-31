@extends('admin.layouts.master')

@section('content')

    <h2  class="p-b-3" style="text-align: center;font-size: 18px">ویرایش دیدگاه  </h2>
    <div class="col-md-6 offset-md-3">


    </div>
    <div class="col-md-10 offset-md-1">
        @include('partials.formErrors')
        <div>


            {!! Form::model($comment,['method' => 'PATCH','action' =>['App\Http\Controllers\Admin\AdminCommentController@update', $comment->id]]) !!}

            <div class="form-group">
                {!! Form::label('description', 'متن نظر  :') !!}
                {!! Form::textarea('description', $comment->description,['class'=>'form-control']) !!}
            </div>




                <div class="form-group">
                    {!! Form::submit('بروز رسانی',['class'=>'btn btn-success col-md-3']) !!}
                </div>

                {!! Form::close() !!}

            {!! Form::open(['method' => 'DELETE', 'action'=> ['App\Http\Controllers\Admin\AdminCommentController@destroy', $comment->id]]) !!}
            <div class="form-group">
                {!! Form::submit('حذف', ['class'=>'btn btn-danger col-md-3']) !!}
            </div>
            {!! Form::close() !!}
            </div>

        </div>




    </div>



@endsection
