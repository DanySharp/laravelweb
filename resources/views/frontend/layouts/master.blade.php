<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    @yield('head')
    <title>PHP Programming Design WEbSite</title>
    <!-- Favicon-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <link href="{{asset('css/blog-post.css')}}" rel="stylesheet">
    <link href="{{asset('css/all-admin.css')}}" rel="stylesheet">
    <link href="{{asset('css/all.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap/css/bootstrap-reboot.css')}}" rel="stylesheet">
</head>

<body style="font-size: 1em;font-family: 'B Yekan'">
@yield('navbar')
<!-- Responsive navbar-->


<!-- Page content-->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <div class="col-md-12">
                @yield('content')
            </div>



            <!-- Comments section-->

        </div>

    @yield('sidebar')


    <!-- Side widgets-->



    </div>
</div>




<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
</footer>
<!-- Bootstrap core JS-->
<link href="{{asset('js/awesome.min.js')}}" rel="stylesheet">
<!-- Bootstrap core JavaScript -->

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/all.js')}}"></script>
<script src="{{asset('js/all-admin.js')}}"></script>


<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
