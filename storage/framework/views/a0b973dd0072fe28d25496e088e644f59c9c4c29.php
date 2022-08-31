<?php $__env->startSection('content'); ?>

    <h2  class="p-b-3" style="text-align: center;font-size: 18px"> ثبت لینک های روزانه </h2>
    <div style="background: #ffe2d6" class="col-md-6 offset-md-3">
        <?php echo $__env->make('partials.formErrors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo Form::open(['action' =>'App\Http\Controllers\Admin\AdminContactController@store', 'method' => 'POST']); ?>


        <div class="form-group">
            <?php echo Form::label('title', 'عنوان  :'); ?>

            <?php echo Form::text('title', null,['class'=>'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('matn', 'متن  :'); ?>

            <?php echo Form::textarea('matn', null,['class'=>'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('phone', 'تلفن  :'); ?>

            <?php echo Form::text('phone', null,['class'=>'form-control']); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('email', 'ایمیل  :'); ?>

            <?php echo Form::text('email', null,['class'=>'form-control']); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('telegram', 'تلگرام  '); ?>

            <?php echo Form::text('telegram', null,['class'=>'form-control']); ?>

        </div>




        <div class="form-group">
            <?php echo Form::label('instagram', 'اینستاگرام  :'); ?>

            <?php echo Form::text('instagram', null,['class'=>'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('linkedin', 'لینکداین  :'); ?>

            <?php echo Form::text('linkedin', null,['class'=>'form-control']); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('link', 'لینک معمولی  :'); ?>

            <?php echo Form::text('link', null,['class'=>'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::submit('ذخیره  ',['class'=>'btn btn-success']); ?>

        </div>

        <?php echo Form::close(); ?>



    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sitecms\resources\views/admin/contacts/create.blade.php ENDPATH**/ ?>