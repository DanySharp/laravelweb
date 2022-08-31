<?php $__env->startSection('head'); ?>
    <meta name="description" content="<?php echo e($post->meta_description); ?>">
    <meta name="keywords" content="<?php echo e($post->meta_keywords); ?>">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('partials.navbar',['categories' => $categories], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(\Illuminate\Support\Facades\Session::has('add_comment')): ?>
        <div class="alert alert-success text-center mt-2">
            <div><?php echo e(session('add_comment')); ?></div>
        </div>
    <?php endif; ?>
    <hr>


    <h1 style="color: #1f57ff;font-family: 'B Yekan'" class="mt-2 text-center"><a><?php echo e($post->title); ?></a></h1>
    <hr>
    <article style="border: 5px solid #abc0c2;border-radius: 5px;padding: 5px;font-family: 'B Yekan'">
        <!-- Post header-->
        <header class="mb-1">
            <!-- Post title-->
            <h1 class="fw-bolder mb-1 small"><?php echo e($post->user->name); ?>&nbsp;&nbsp;&nbsp;: نویسنده مطلب </h1>
            <!-- Post meta content-->
            <div class="text-muted fst-italic mb-2"><?php echo e(\Hekmatinasser\Verta\Verta::instance($post->created_at)); ?>&nbsp;&nbsp;&nbsp;  تاریخ انتشار : </div>
            <!-- Post categories-->
            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
        </header>
        <!-- Preview image figure-->

        <figure class="mb-4"><img class="img-thumbnail rounded" src="<?php echo e($post->photo ? $post->photo->path : "/images/UserPic/22.png"); ?>" width="800" height="550" alt="..." /></figure>
        <!-- Post content-->
        <section class="mb-8 post_me_cs">

            <div><p class="fs-5 mb-4 post_me_cs"><?php echo e($post->description); ?></p>


            </div>

        </section>

    </article>
    <hr>



    <section style="direction: rtl;font-family: 'B Yekan'" class="mb-5">
        <div class="card bg-light">
            <div class="card-body ">
                <!-- Comment form-->
                <?php echo $__env->make('partials.formErrors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                <?php echo Form::open(['method' => 'POST','route' =>['frontend.comments.store',$post->id]]); ?>


                <div class="form-group">
                    <?php echo Form::label('comment_name', 'مشخصات :'); ?>

                    <?php echo Form::text('comment_name', null,['class'=>'form-control','placeholder' => '-  نام خود را درج نمایید -']); ?>

                </div>

                <div class="form-group">
                    <?php echo Form::label('comment_email', 'ایمیل  :'); ?>

                    <?php echo Form::text('comment_email', null,['class'=>'form-control','placeholder' => '-  ایمیل شما محفوظ خواهد بود و منتشر نمیشود -']); ?>

                </div>
                <div class="form-group">
                    <?php echo Form::label('description', 'متن :'); ?>

                    <?php echo Form::textarea('description', null,['class'=>'form-control' ,'rows' => 3, 'cols' => 2,'placeholder' => 'دیدگاه خود را ثبت نمایید','col'=> '5']); ?>

                </div>



                <div class="form-group">
                    <?php echo NoCaptcha::display(); ?>

                    <?php echo Form::submit('ارسال دیدگاه ',['class'=>'btn btn-success']); ?>

                </div>

                <?php echo Form::close(); ?>






            <!-- Single comment-->
                <?php echo $__env->make('partials.comments',['comment'=>$post->comments,'post'=>$post ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>
        </div>
    </section>

    <hr>
<?php $__env->stopSection(); ?>
<hr>
<?php $__env->startSection('sidebar'); ?>
    <?php echo $__env->make('partials.sidebar',['categories' => $categories], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sitecms\resources\views/frontend/posts/show.blade.php ENDPATH**/ ?>