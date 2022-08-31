@extends('frontend.layouts.master')

@section('head')
    <meta name="description" content="M.B.Ayromloo Web Master">
    <meta name="keywords" content="آموزش برنامه نویسی و خرید و فروش سورس سایت و برنامه های دات نت">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
@endsection

@section('navbar')
    @include('partials.navbar',['categories' => $categories])

@endsection

@section('content')
    <h5 class="mt-4">آخرین مطالب</h5>
    <hr>
    @foreach($posts as $post)


        <h1 style="color: #1f57ff;font-family: 'B Yekan'" class="mt-2 text-center"><a href="{{route('frontend.posts.show',$post->slug)}}">{{$post->title}}</a></h1>
        <hr>
        <article style="border: 5px solid #abc0c2;border-radius: 5px;padding: 5px;font-family: 'B Yekan'">
            <!-- Post header-->
            <header class="mb-1">
                <!-- Post title-->
                <h1 class="fw-bolder mb-1 small">  نویسنده مطلب : {{$post->user->name}}&nbsp;&nbsp;&nbsp; </h1>
                <!-- Post meta content-->
                <div class="text-muted fst-italic mb-2">{{\Hekmatinasser\Verta\Verta::instance($post->created_at)}}&nbsp;&nbsp;&nbsp;  تاریخ انتشار : </div>
                <!-- Post categories-->
                <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
            </header>
            <!-- Preview image figure-->

            <figure class="mb-4"><img class="img-thumbnail rounded" src="{{$post->photo ? $post->photo->path : "/images/UserPic/22.png"}}" width="800" height="550" alt="..." /></figure>
            <!-- Post content-->
            <section class="mb-8 post_me_cs">

                <div><p class="fs-5 mb-4 post_me_cs">{{\Illuminate\Support\str::limitPost($post->description),350,"..."}}</p>
                    <a   class="btn btn-success text-capitalize form-control icon-anchor" href="{{route('frontend.posts.show',$post->slug)}}">ادامه مطلب</a>

                </div>

            </section>

        </article>
        <hr>
    @endforeach

    <div style="padding-bottom: 35px;padding-top: 22px;text-align: center" class="col-md-8">
        {{$posts->links('pagination::bootstrap-4')}}
    </div>
    <hr>
@endsection
<hr>
@section('sidebar')
    @include('partials.sidebar',['categories' => $categories])

@endsection
