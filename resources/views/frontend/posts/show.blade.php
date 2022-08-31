@extends('frontend.layouts.master')


@section('head')
    <meta name="description" content="{{$post->meta_description}}">
    <meta name="keywords" content="{{$post->meta_keywords}}">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
@endsection
@section('navbar')
    @include('partials.navbar',['categories' => $categories])

@endsection

@section('content')
    @if(\Illuminate\Support\Facades\Session::has('add_comment'))
        <div class="alert alert-success text-center mt-2">
            <div>{{session('add_comment')}}</div>
        </div>
    @endif
    <hr>


    <h1 style="color: #1f57ff;font-family: 'B Yekan'" class="mt-2 text-center"><a>{{$post->title}}</a></h1>
    <hr>
    <article style="border: 5px solid #abc0c2;border-radius: 5px;padding: 5px;font-family: 'B Yekan'">
        <!-- Post header-->
        <header class="mb-1">
            <!-- Post title-->
            <h1 class="fw-bolder mb-1 small">{{$post->user->name}}&nbsp;&nbsp;&nbsp;: نویسنده مطلب </h1>
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

            <div><p class="fs-5 mb-4 post_me_cs">{{$post->description}}</p>


            </div>

        </section>

    </article>
    <hr>



    <section style="direction: rtl;font-family: 'B Yekan'" class="mb-5">
        <div class="card bg-light">
            <div class="card-body ">
                <!-- Comment form-->
                @include('partials.formErrors')


                {!! Form::open(['method' => 'POST','route' =>['frontend.comments.store',$post->id]]) !!}

                <div class="form-group">
                    {!! Form::label('comment_name', 'مشخصات :') !!}
                    {!! Form::text('comment_name', null,['class'=>'form-control','placeholder' => '-  نام خود را درج نمایید -']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('comment_email', 'ایمیل  :') !!}
                    {!! Form::text('comment_email', null,['class'=>'form-control','placeholder' => '-  ایمیل شما محفوظ خواهد بود و منتشر نمیشود -']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('description', 'متن :') !!}
                    {!! Form::textarea('description', null,['class'=>'form-control' ,'rows' => 3, 'cols' => 2,'placeholder' => 'دیدگاه خود را ثبت نمایید','col'=> '5']) !!}
                </div>



                <div class="form-group">
                    {!! NoCaptcha::display() !!}
                    {!! Form::submit('ارسال دیدگاه ',['class'=>'btn btn-success']) !!}
                </div>

                {!! Form::close() !!}





            <!-- Single comment-->
                @include('partials.comments',['comment'=>$post->comments,'post'=>$post ])

            </div>
        </div>
    </section>

    <hr>
@endsection
<hr>
@section('sidebar')
    @include('partials.sidebar',['categories' => $categories])

@endsection
