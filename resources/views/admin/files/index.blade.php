@extends('admin.layouts.master')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        $('#option').click(function () {
            if (this.checked){
                $('.checkBox').each(function () {
                    this.checked=true;
                })
            }
            else{
                $('.checkBox').each(function () {
                    this.checked=false;
                })

            }

        })
    })
</script>

@section('content')


    @if(\Illuminate\Support\Facades\Session::has('add_file'))
        <div class="alert alert-success">
            <div>{{session('add_file')}}</div>
        </div>
    @endif


    @if(\Illuminate\Support\Facades\Session::has('delete_file'))
        <div class="alert alert-danger">
            <div>{{session('delete_file')}}</div>
        </div>
    @endif


    <h3 class="p-b-2">لیست فایل ها  </h3>


    <form action="/admin/delete/files" method="post" class="form-inline">
        {{csrf_field()}}
        {{method_field('delete')}}
        <div class="form-group">
            <select name="checkBoxArray" class="form-control">
                <option value="delete">حذف گروهی</option>
            </select>
            <input type="submit" name="submit" class="btn btn-primary"  value="اعمال"/>

        </div>



    <div class="bg-content">

        <table  class="table table-bordered table-hover bg-content">
            <thead>
            <tr>
                <th><input type="checkbox" id="option"></th>
                <th>ردیف</th>
                <th>فایل یا تصویر</th>
                <th>کاربر</th>
                <th>نام فایل</th>
                <th>آدرس</th>
                <th>تاریخ ایجاد</th>
                <th> عملیات</th>

            </tr>
            </thead>
            <tbody>
            @foreach($photos as $photo)
                <tr class="active">
                    <td><input  class="checkBox" type="checkbox" name="checkBoxArray[]" value="{{$photo->id}}"></td>
                    <td>{{$photo->id}}</td>
                    <td><img src="{{$photo->path}}" width="80" ></td>

                    <td>{{$photo->user->name}}</td>
                    <td>{{$photo->name}}</td>
                    <td>{{$photo->path}}</td>

                    <td>{{\Hekmatinasser\Verta\Verta::instance($photo->created_at)}}</td>


<td class="justify-content-center">
                    <td>
                        {!! Form::open(['method' => 'DELETE', 'action'=> ['App\Http\Controllers\Admin\AdminFilesController@destroy', $photo->id]]) !!}
                        <div class="form-group">
                            {!! Form::submit('حذف', ['class'=>'btn btn-danger']) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>

</td>
                </tr>
            @endforeach
            </tbody>
        </table>



        <div class="row-cols-lg-1 offset-10" style="text-align: center">{{$photos->links('pagination::bootstrap-4')}}</div>

    </div>

@endsection


