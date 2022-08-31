<?php $__env->startSection('head'); ?>
    <meta name="description" content="<?php echo e($post->meta_description); ?>">
    <meta name="keywords" content="<?php echo e($post->meta_keywords); ?>">


<?php $__env->stopSection(); ?>
<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('partials.navbar',['categories' => $categories], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


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

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sitecms\resources\views/frontend/main/about.blade.php ENDPATH**/ ?>