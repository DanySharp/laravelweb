<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version  v1.0.0-alpha.2
 * @link  http://ayromloo.ir
 * Copyright (c) 2018 creativeLabs m.b.a ayromloo
 * @license  MIT
 -->
<!DOCTYPE html>
<html lang="IR-fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Web Administrator">
    <meta name="author" content="M.B.A Ayromloo">
    <meta name="keyword" content="Bootstrap Data">
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
    <title>پنل ادمین</title>
    <!-- Icons -->
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>


    <!-- Main styles for this application -->
    <link href="<?php echo e(asset('css/all-admin.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/awesome.min.js')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/fontawesome.css')); ?>" rel="stylesheet">

    <script src="<?php echo e(asset('js/tether.min.js')); ?>" type="application/javascript" ></script>
    <?php echo $__env->yieldContent('styles'); ?>
</head>
<!-- BODY options, add following classes to body to change options
		1. 'compact-nav'     	  - Switch sidebar to minified version (width 50px)
		2. 'sidebar-nav'		  - Navigation on the left
			2.1. 'sidebar-off-canvas'	- Off-Canvas
				2.1.1 'sidebar-off-canvas-push'	- Off-Canvas which move content
				2.1.2 'sidebar-off-canvas-with-shadow'	- Add shadow to body elements
		3. 'fixed-nav'			  - Fixed navigation
		4. 'navbar-fixed'		  - Fixed navbar
	-->

<body style="background: #eafdff" class="navbar-fixed sidebar-nav fixed-nav">
<header class="navbar">
    <div class="container-fluid">
        <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>
        <a class="navbar-brand" href="#"></a>
        <ul class="nav navbar-nav hidden-md-down">
            <li class="nav-item">
                <a class="nav-link navbar-toggler layout-toggler" href="#">&#9776;</a>
            </li>

            <!--<li class="nav-item p-x-1">
                <a class="nav-link" href="#">داشبورد</a>
            </li>
            <li class="nav-item p-x-1">
                <a class="nav-link" href="#">Users</a>
            </li>
            <li class="nav-item p-x-1">
                <a class="nav-link" href="#">Settings</a>
            </li>-->
        </ul>
        <ul class="nav navbar-nav pull-left hidden-md-down">
            <li class="nav-item">
                <a class="nav-link aside-toggle" href="#"><i class="icon-bell"></i><span class="tag tag-pill tag-danger">5</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="icon-list"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="icon-location-pin"></i></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="img/avatars/avatar.png" class="img-avatar" alt="admin@ayromloo.ir">
                    <span class="hidden-md-down">مدیر</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-xs-center">
                        <strong>تنظیمات</strong>
                    </div>
                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> پروفایل</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> تنظیمات</a>
                    <!--<a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="tag tag-default">42</span></a>-->
                    <div class="divider"></div>
                    <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> خروج</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link navbar-toggler aside-toggle" href="#">&#9776;</a>
            </li>

        </ul>
    </div>
</header>
<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('dashboard.index')); ?>"><i class="icon-speedometer"></i> داشبورد <span class="tag tag-info">ادمین</span></a>
            </li>


            <li class="nav-title">
                مدیریت مطالب
            </li>

            <li style="background-image: linear-gradient(to right top, #50698f, #48688c, #3f6689, #376585, #2e6381);" class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-magnet"></i>مدیریت مطالب </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('posts.index')); ?>"><i class="icon-power"></i> لیست مطالب</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('posts.create')); ?>"><i class="icon-wrench"></i>  ثبت مطلب جدید </a>
                    </li>

                </ul>
            </li>



            <li class="nav-title">
                مدیریت فایل ها
            </li>
            <li style="background: linear-gradient(90deg, #FDBB2D 0%, #3A1C71 100%);" class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-arrow-up"></i> مدیریت فایل ها  </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('files.index')); ?>"><i class="icon-list"></i> لیست فایل ها</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('files.create')); ?>"><i class="icon-cloud-upload"></i>  آپلود فایل  </a>
                    </li>

                </ul>
            </li>

            <li class="nav-title">
                مدیریت کاربران
            </li>

            <li style=" background: linear-gradient(90deg, #3F2B96 0%, #A8C0FF 100%);" class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-user"></i> مدیریت کاربران  </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('users.index')); ?>"><i class="icon-user"></i> لیست کاربران</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('users.create')); ?>"><i class="icon-user"></i>  ثبت کاربر جدید</a>
                    </li>

                </ul>
            </li>



            <li class="nav-title">
                مدیریت نظرات
            </li>
            <li style="background-image: linear-gradient(to left top, #b74c68, #ab5740, #8d662a, #687130, #41764a);" class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-compass"></i> مدیریت دیدگاهها  </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('comments.index')); ?>"><i class="icon-note"></i> لیست نظرات</a>
                    </li>


                </ul>
            </li>

            <li class="nav-title">
                مدیریت دسته بندی
            </li>

            <li style="background-image: linear-gradient(to left top, #a357e5, #3e92d2, #2a85f3, #2c63ee, #41764a);" class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-grid"></i> مدیریت دسته بندی  </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('category.index')); ?>"><i class="icon-grid"></i> لیست دسته ها</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('category.create')); ?>"><i class="icon-grid"></i>  ثبت دسته بندی  </a>
                    </li>

                </ul>
            </li>



            <li class="nav-title">
                مدیریت لینک ها
            </li>

            <li style="background-image: linear-gradient(to left top, #a357e5, #3e92d2, #2a85f3, #2c63ee, #41764a);" class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-grid"></i>  LINK MANAGER  </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('showlinks.index')); ?>"><i class="icon-grid"></i> لیست لینک ها  </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('showlinks.create')); ?>"><i class="icon-grid"></i>  ثبت لینک  </a>
                    </li>

                </ul>
            </li>



            <li class="nav-title">
                مدیریت ارتباطی
            </li>

            <li style="background-image: linear-gradient(to left top, #a357e5, #3e92d2, #2a85f3, #2c63ee, #41764a);" class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-grid"></i> صفحه تماس با ما  </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('contacts.index')); ?>"><i class="icon-grid"></i> لیست آیتم ها </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('contacts.create')); ?>"><i class="icon-grid"></i>  ثبت ارتباطات  </a>
                    </li>

                </ul>
            </li>
            <!--<li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Icons</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="icons-font-awesome.html"><i class="icon-star"></i> Font Awesome</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="icons-simple-line-icons.html"><i class="icon-star"></i> Simple Line Icons</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="widgets.html"><i class="icon-calculator"></i> Widgets <span class="tag tag-info">NEW</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="charts.html"><i class="icon-pie-chart"></i> Charts</a>
            </li>-->
            <!--<li class="divider"></li>
            <li class="nav-title">
                Extras
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Pages</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="pages-login.html" target="_top"><i class="icon-star"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages-register.html" target="_top"><i class="icon-star"></i> Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages-404.html" target="_top"><i class="icon-star"></i> Error 404</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages-500.html" target="_top"><i class="icon-star"></i> Error 500</a>
                    </li>
                </ul>
            </li>-->

        </ul>
    </nav>
</div>


<!-- Main content -->
<main class="main">

    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">خانه</li>
        <li class="breadcrumb-item"><a href="#">مدیریت</a>
        </li>
        <li class="breadcrumb-item active">داشبورد</li>

        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu">
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <a class="btn btn-secondary" href="#"><i class="icon-speech"></i></a>
                <a class="btn btn-secondary" href="./"><i class="icon-graph"></i> &nbsp;داشبورد</a>
                <a class="btn btn-secondary" href="#"><i class="icon-settings"></i> &nbsp;تنظیمات</a>
            </div>
        </li>
    </ol>

    <div class="container-fluid bg-content">

        <div class="animated fadeIn">























































































            <!--/row-->



    <div class="bg-content row">
        <?php echo $__env->yieldContent('content'); ?>
    </div>



        </div>

    </div>
    <!--/.container-fluid-->
</main>

<aside class="aside-menu">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab"><i class="icon-list"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><i class="icon-speech"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#settings" role="tab"><i class="icon-settings"></i></a>
        </li>
    </ul>
    <!-- Tab panes -->






























































































































































































































































</aside>

<footer class="footer">
        <span class="text-left">
            <a href="http://www.ayromloo.ir">M.B.A Admin UI</a> &copy; 2021 creativeLabs.
        </span>
    <span class="pull-right">
            Powered by <a href="http://www.ayromloo.ir">CoreUI</a>
        </span>
</footer>
<!-- Bootstrap and necessary plugins -->


<!-- CoreUI main scripts -->
<script src="<?php echo e(asset('js/all-admin.js')); ?>" type="application/javascript" ></script>


<link href="<?php echo e(asset('css/awesome.min.js')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/fontawesome.css')); ?>" rel="stylesheet">
<?php echo $__env->yieldContent('scripts'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\sitecms\resources\views/admin/layouts/master.blade.php ENDPATH**/ ?>