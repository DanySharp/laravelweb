<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <?php echo $__env->yieldContent('head'); ?>
    <title>PHP Programming Design WEbSite</title>
    <!-- Favicon-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <link href="<?php echo e(asset('css/blog-post.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/all-admin.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/all.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap-reboot.css')); ?>" rel="stylesheet">
</head>

<body style="font-size: 1em;font-family: 'B Yekan'">
<?php echo $__env->yieldContent('navbar'); ?>
<!-- Responsive navbar-->


<!-- Page content-->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <div class="col-md-12">
                <?php echo $__env->yieldContent('content'); ?>
            </div>



            <!-- Comments section-->

        </div>

    <?php echo $__env->yieldContent('sidebar'); ?>


    <!-- Side widgets-->



    </div>
</div>




<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
</footer>
<!-- Bootstrap core JS-->
<link href="<?php echo e(asset('js/awesome.min.js')); ?>" rel="stylesheet">
<!-- Bootstrap core JavaScript -->

<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/all.js')); ?>"></script>
<script src="<?php echo e(asset('js/all-admin.js')); ?>"></script>


<script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\sitecms\resources\views/frontend/layouts/master.blade.php ENDPATH**/ ?>