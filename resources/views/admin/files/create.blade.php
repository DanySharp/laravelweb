@extends('admin.layouts.master')
@section('styles')
<link rel="stylesheet" href="{{asset('css/dropzone.css')}}">
@section('content')

    <h2  class="p-b-3" style="text-align: center;font-size: 18px">آپلود فایل     </h2>
    <div style="background: #ffe2d6" class="col-md-6 offset-md-3">
        @include('partials.formErrors')
        {!! Form::open(['action' =>'App\Http\Controllers\Admin\AdminFilesController@store', 'method' => 'POST','class'=>'dropzone']) !!}




        {!! Form::close() !!}


    </div>



@endsection
@section('scripts')
    <script src="{{asset('js/dropzone.js')}}"></script>
@endsection
