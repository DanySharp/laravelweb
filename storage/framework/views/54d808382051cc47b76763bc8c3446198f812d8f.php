<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('partials.navbar',['categories' => $categories], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h5  class="mt-4 ">   <?php echo e($query); ?>  نتیجه جستجو برای عبارت </h5>
    <hr>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


        <h1 style="color: #1f57ff" class="mt-2 text-center"><a href="<?php echo e(route('frontend.posts.show',$post->slug)); ?>"><?php echo e($post->title); ?></a></h1>
        <hr>
        <article style="border: 5px solid #abc0c2;border-radius: 5px;padding: 5px">
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

                <div><p class="fs-5 mb-4 post_me_cs"><?php echo e(\Illuminate\Support\str::limitPost($post->description),350,"..."); ?></p>
                    <a   class="btn btn-success text-capitalize form-control icon-anchor" href="<?php echo e(route('frontend.posts.show',$post->slug)); ?>">ادامه مطلب</a>

                </div>

            </section>

        </article>
        <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    <hr>
    <div style="padding-bottom: 35px;padding-top: 22px;text-align: center" class="col-md-12">
        <?php echo e($posts->links('pagination::bootstrap-4')); ?>

    </div>
<?php $__env->stopSection(); ?>
<hr>
<?php $__env->startSection('sidebar'); ?>
    <?php echo $__env->make('partials.sidebar',['categories' => $categories], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sitecms\resources\views/frontend/posts/search.blade.php ENDPATH**/ ?>