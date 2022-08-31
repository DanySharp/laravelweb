@extends('admin.layouts.master')


@section('content')



    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card card-inverse card-info">
                <div class="card-block p-b-0 bg-inverse">
                    <div class="btn-group pull-left">
                        <button type="button" class="btn btn-transparent active dropdown-toggle p-a-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-settings"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <h4 class="m-b-0">{{$usersCount}}</h4>
                    <p>کاربران</p>
                </div>
                <div class="chart-wrapper p-x-1" style="height:70px;">
                    <canvas id="card-chart1" class="chart" height="70"></canvas>
                </div>
            </div>
        </div>
        <!--/col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card card-inverse card-info">
                <div class="card-block p-b-0 bg-success">
                    <button type="button" class="btn btn-transparent active p-a-0 pull-left">
                        <i class="icon-location-pin"></i>
                    </button>
                    <h4 class="m-b-0">{{$CategoriesCount}}</h4>
                    <p>دسته بندیها </p>
                </div>
                <div class="chart-wrapper p-x-1" style="height:70px;">
                    <canvas id="card-chart2" class="chart" height="70"></canvas>
                </div>
            </div>
        </div>
        <!--/col-->
        <!--/col-->



        <!--/col-->
        <!--/col-->
        <!--/col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card card-inverse card-warning bg-danger">
                <div class="card-block p-b-0 ">
                    <div class="btn-group pull-left">
                        <button type="button" class="btn btn-transparent active dropdown-toggle p-a-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-settings"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <h4 class="m-b-0">{{$postsCount}}</h4>
                    <p>تعداد مطالب </p>
                </div>
                <div class="chart-wrapper" style="height:70px;">
                    <canvas id="card-chart3" class="chart" height="70"></canvas>
                </div>
            </div>
        </div>
        <!--/col-->

        <div class="col-sm-6 col-lg-3">
            <div class="card card-deck card-danger bg-dark">
                <div class="card-block p-b-0 bg-dark">
                    <div class="btn-group pull-left ">
                        <button type="button" class="btn btn-transparent active dropdown-toggle p-a-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-settings"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <h4 class="m-b-0">{{$photosCount}}</h4>
                    <p>تعداد تصاویر </p>
                </div>
                <div class="chart-wrapper p-x-1" style="height:70px;">
                    <canvas id="card-chart4" class="chart" height="70"></canvas>
                </div>
            </div>
        </div>
        <!--/col-->

    </div>

    <div class="row">
        <div class="col-md-6"></div>
        <h3>Last Posts</h3>
        <table  class="table table-hover bg-content">
            <thead>
            <tr class="text-justify">
                <th>عنوان</th>
                <th>دسته بندی</th>
                <th>تاریخ ارسال</th>
            </tr>
            </thead>
            <tbody>

            @foreach($posts as $post)
                <tr class="active">

                    <td><a href="{{route('posts.edit',$post->id)}}">{{$post->title}}</a></td>
                    <td>{{$post->category->title}}</td>
                    <td>{{\Hekmatinasser\Verta\Verta::instance($post->created_at)}}</td>
                    {{--                <td>{{\Hekmatinasser\Verta\Verta::instance($user->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</td>--}}

                </tr>
            @endforeach

            </tbody>
        </table>




    </div>










    <div class="row">
        <div class="col-md-6"></div>
        <h3>Last Users</h3>






        <table  class="table table-hover bg-content">
            <thead>
            <tr>

                <th>نام</th>
                <th>ایمیل</th>

                <th>تاریخ ایجاد</th>
            </tr>
            </thead>
            <tbody style="vertical-align: middle">

            @foreach($users as $user)

                <tr class="active">



                    <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>


                    <td>{{\Hekmatinasser\Verta\Verta::instance($user->created_at)}}</td>
                    {{--                <td>{{\Hekmatinasser\Verta\Verta::instance($user->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</td>--}}

                </tr>
            @endforeach

            </tbody>
        </table>




    </div>

@endsection


