@extends('admin.layouts.master')


@section('content')


    @if(\Illuminate\Support\Facades\Session::has('add_contact'))
        <div class="alert alert-success text-center">
            <div>{{session('add_contact')}}</div>
        </div>
    @endif

    @if(\Illuminate\Support\Facades\Session::has('delete_contact'))
        <div class="alert alert-danger text-center">
            <div>{{session('delete_contact')}}</div>
        </div>
    @endif


    <h3 class="p-b-2">لیست ارتباطات </h3>
    <div class="bg-content">

        <table  class="table table-bordered table-hover bg-content">
            <thead>
            <tr>
                <th>ردیف</th>
                <th>عنوان</th>
                <th>متن</th>
                <th>تلفن</th>
                <th>ایمیل</th>
                <th>تلگرام</th>
                <th>اینستاگرام</th>
                <th>لینکداین</th>
                <th>لینک معمولی</th>

                <th> عملیات</th>

            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr class="active">

                    <td>{{$contact->id}}</td>

                    <td>{{$contact->title}}</td>
                    <td>{{\Illuminate\Support\Str::limitAbout($contact->matn)}}</td>
                    <td>{{$contact->phone}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->telegram}}</td>
                    <td>{{$contact->instagram}}</td>
                    <td>{{$contact->linkedin}}</td>
                    <td>{{$contact->link}}</td>





                    <td>
                        {!! Form::open(['method' => 'DELETE', 'action'=> ['App\Http\Controllers\Admin\AdminContactController@destroy', $contact->id]]) !!}
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


