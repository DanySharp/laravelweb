<?php $__env->startSection('content'); ?>

    <h2  class="p-b-3" style="text-align: center;font-size: 18px">ایجاد دسته  جدید </h2>
    <div style="background: #ffe2d6" class="col-md-6 offset-md-3">
        <?php echo $__env->make('partials.formErrors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo Form::open(['action' =>'App\Http\Controllers\Admin\AdminCategoryController@store', 'method' => 'POST']); ?>


        <div class="form-group">
            <?php echo Form::label('title', 'عنوان  :'); ?>

            <?php echo Form::text('title', null,['class'=>'form-control']); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('slug', 'آدرس :'); ?>

            <?php echo Form::text('slug', null,['class'=>'form-control']); ?>

        </div>


        <div class="form-group">
            <?php echo Form::label('meta_description', 'متا توضیحات :'); ?>

            <?php echo Form::textarea('meta_description', null,['class'=>'form-control']); ?>

        </div>


        <div class="form-group">
            <?php echo Form::label('meta_keywords', 'متاتگ  :'); ?>

            <?php echo Form::textarea('meta_keywords', null,['class'=>'form-control']); ?>

        </div>

        <div class="form-group">
            <?php echo Form::submit('ذخیره دسته بندی ',['class'=>'btn btn-success']); ?>

        </div>

        <?php echo Form::close(); ?>



    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sitecms\resources\views/admin/category/create.blade.php ENDPATH**/ ?>