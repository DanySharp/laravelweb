<div class="col-lg-4">
    <!-- Search widget-->
    <div style="font-family: 'B Yekan'" class="card mb-4">
        <div class="card-header">لیست پست ها </div>
        <div class="card-body">
{{--            {!! Form::open((['method' => 'GET', 'action'=> 'App\Http\Controllers\Frontend\PostController@searchTitle']))!!}--}}
{{--            <div class="input-group">--}}
{{--                {!! Form::text('title', null, ['class'=>'form-control']) !!}--}}
{{--                <span class="input-group-btn">--}}
{{--                {!! Form::submit(' بگرد', ['class'=>'btn btn-secondary']) !!}--}}
{{--            </span>--}}
{{--            </div>--}}
{{--            {!! Form::close() !!}--}}
        </div>
    </div>

    <!-- Categories widget-->
    <div class="card mb-2">
        <div class="card-header my_link_font">لینک های روزانه </div>
        <div class="card-body">
            <ul style="font-weight: bold;font-size: 1em;font-family: 'B Yekan'" class="list-unstyled mb-0">
                @foreach($showlinks as $link)
                    <li class="nav-item"><a class="nav-link" href="{{$link->url_link}}">{{$link->url_title}}</a></li>
                @endforeach
            </ul>
            <hr>
        </div>
    </div>


    <!-- Categories widget-->
    <div class="card mb-2">
        <div class="card-header my_link_font">دسته بندی</div>
        <div class="card-body">
            <ul style="font-weight: bold;font-size: 1em;font-family: 'B Yekan'" class="list-unstyled mb-0">
                @foreach($category as $cat)
                    <li class="nav-item"><a class="nav-link" href="{{route('category.show',$cat->slug)}}">{{$cat->title}}</a></li>
                @endforeach
            </ul>
            <hr>
        </div>
    </div>
    <!-- Side widget-->
    <div class="card mb-4">
        <div class="card-header">بازی آنلاین</div>
        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
    </div>
</div>
