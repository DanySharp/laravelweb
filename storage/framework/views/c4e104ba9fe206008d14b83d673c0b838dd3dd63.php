<?php $__env->startSection('content'); ?>
    <h2  class="p-b-3" style="text-align: center;font-size: 18px">ایجاد پست جدید </h2>
    <div class="col-md-10 offset-md-1">
        <?php echo $__env->make('partials.formErrors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo Form::open(['action' =>'App\Http\Controllers\Admin\AdminPostController@store', 'method' => 'POST','files'=>true]); ?>


        <div class="form-group">
            <?php echo Form::label('title', 'عنوان  :'); ?>

            <?php echo Form::text('title', null,['class'=>'form-control']); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('slug', 'آدرس :'); ?>

            <?php echo Form::text('slug', null,['class'=>'form-control']); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('category', 'دسته بندی :'); ?>

            <?php echo Form::select('category',$categories,null,['class'=>'form-control']); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('description', 'متن :'); ?>

            <?php echo Form::textarea('description', null,['class'=>'form-control ckeditor' ]); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('status', 'وضعیت :'); ?>

            <?php echo Form::select('status', [1=>'فعال' ,0=>'غیرفعال'],0,['class'=>'form-control']); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('first_photo', 'تصویر  :'); ?>

            <?php echo Form::file('first_photo',null,['class'=>'form-control']); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('meta_description', 'متا متن :'); ?>

            <?php echo Form::textarea('meta_description', null,['class'=>'form-control']); ?>


        </div>


        <div class="form-group">
            <?php echo Form::label('meta_keywords', 'متاتگ  :'); ?>

            <?php echo Form::textarea('meta_keywords', null,['class'=>'form-control']); ?>

        </div>

        <div class="form-group">
            <?php echo Form::submit('ارسال پست',['class'=>'btn btn-success']); ?>

        </div>

        <?php echo Form::close(); ?>



    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sitecms\resources\views/admin/posts/create.blade.php ENDPATH**/ ?>