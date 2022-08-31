@extends('admin.layouts.master')


@section('content')


    @if(\Illuminate\Support\Facades\Session::has('add_category'))
        <div class="alert alert-success">
            <div>{{session('add_category')}}</div>
        </div>
    @endif
    @if(\Illuminate\Support\Facades\Session::has('update_category'))
        <div class="alert alert-success">
            <div>{{session('update_category')}}</div>
        </div>
    @endif
    @if(\Illuminate\Support\Facades\Session::has('delete_category'))
        <div class="alert alert-danger">
            <div>{{session('delete_category')}}</div>
        </div>
    @endif


    <h3 class="p-b-2">لیست دسته بندی  </h3>
    <div class="bg-content">

        <table  class="table table-bordered table-hover bg-content">
            <thead>
            <tr>
                <th>ردیف</th>
                <th>عنوان</th>
                <th>آدرس</th>
                <th>تاریخ ایجاد</th>

            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr class="active">

                    <td>{{$category->id}}</td>

                    <td><a href="{{route('category.edit',$category->id)}}">{{$category->title}}</a></td>
                    <td>{{$category->slug}}</td>
                    <td>{{\Hekmatinasser\Verta\Verta::instance($category->created_at)}}</td>



                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="col-md-4 offset-md-5 align-content-center text-center">{{$categories->links('pagination::bootstrap-4')}}</div>

    </div>

@endsection


