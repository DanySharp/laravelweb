<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>خوش آمدید</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body style="font-family: 'B Yekan';background-image: linear-gradient(to top, #ffe8f1, #ffe3e4, #ffe2d0, #ffe5bb, #f5edae);">
<div class="wrapper">
    <header style="background-image: linear-gradient(to right, #e9ffee, #b9f1e7, #88e0ef, #6bcafb, #80aefb);">
        <nav  class="menu ">
            <ul>
                <li><a href="/">خانه</a></li>

                <li><a href="{{route('partials.about')}}">ارتباط با ما</a></li>
            </ul>
        </nav>

        <div class="logo">
            <img src="">
        </div>
    </header>

    <section class="main-content">
        <div class="content">
            @foreach($postmost as $post)
            <article>
                <div class="image-box">


                    <img class="img-thumbnail rounded" src="{{$post->photo ? $post->photo->path : "/images/UserPic/22.png"}}" width="800" height="550" alt="..." />
                </div>

                <div class="content-box">
                    <h2>{{$post->title}}</h2>
                    <h1 class="fw-bolder mb-1 small"> نویسنده مطلب : {{$post->user->name}}&nbsp;&nbsp;&nbsp; </h1>
                   <p>تاریخ انتشار:</p> <div class="text-muted fst-italic mb-2">  {{\Hekmatinasser\Verta\Verta::instance($post->created_at)}}&nbsp;&nbsp;&nbsp; </div>
                    <p class="fs-5 mb-4 post_me_cs">{{\Illuminate\Support\str::limitPost($post->description),350,"..."}}</p>

                    <a   class="btn btn-success text-capitalize form-control icon-anchor" href="{{route('frontend.posts.show',$post->slug)}}">ادامه مطلب</a>
                </div>
            </article>
            @endforeach



        </div>

        <div class="sidebar">
            <aside>
                <img src="{{asset('images/UserPic/831668.png')}}">
                <h3>درباره ما</h3>
                <p>
                  php programming & .Net Developer

                </p>
            </aside>

            <aside>
                <span class="sidebar-title">  لینک های من</span>
                <ul>
                    @foreach($showlinks as $link)
                        <li class="nav-item"><a class="nav-link" href="{{$link->url_link}}">{{$link->url_title}}</a></li>
                    @endforeach

                </ul>
            </aside>
        </div>
    </section>

    <div class="clear"></div>
    <div style="padding-bottom: 35px;padding-top: 22px;text-align: center" class="col-md-8">
        {{$postmost->links()}}
    </div>
    <footer>
        <p><br>
            <a href="mbaurmia@gmail.com">mbaurmia@gmail.com</a></p>

    </footer>

</div>
</body>
</html>
