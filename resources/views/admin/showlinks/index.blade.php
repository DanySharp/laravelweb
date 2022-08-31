@extends('admin.layouts.master')


@section('content')


    @if(\Illuminate\Support\Facades\Session::has('add_linkurl'))
        <div class="alert alert-success text-center">
            <div>{{session('add_linkurl')}}</div>
        </div>
    @endif

    @if(\Illuminate\Support\Facades\Session::has('delete_linkurl'))
        <div class="alert alert-danger text-center">
            <div>{{session('delete_linkurl')}}</div>
        </div>
    @endif


    <h3 class="p-b-2">لیست لینک ها </h3>
    <div class="bg-content">

        <table  class="table table-bordered table-hover bg-content">
            <thead>
            <tr>
                <th>ردیف</th>
                <th>عنوان</th>
                <th>آدرس</th>

                <th> عملیات</th>

            </tr>
            </thead>
            <tbody>
            @foreach($showlinks as $link)
                <tr class="active">

                    <td>{{$link->id}}</td>

                    <td>{{$link->url_title}}</td>
                    <td>{{$link->url_link}}</td>





                    <td>
                        {!! Form::open(['method' => 'DELETE', 'action'=> ['App\Http\Controllers\Admin\AdminShowLinkController@destroy', $link->id]]) !!}
                        <div class="form-group">
                            {!! Form::submit('حذف', ['class'=>'btn btn-danger']) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>

                    {{--                    <td>{{\Hekmatinasser\Verta\Verta::instance($category->created_at)}}</td>--}}



                </tr>
            @endforeach
            </tbody>
        </table>
{{--                <div class="col-md-4 offset-md-5 align-content-center text-center">{{$linkurls->links('pagination::bootstrap-4')}}</div>--}}

    </div>

@endsection


