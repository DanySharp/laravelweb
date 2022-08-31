<?php $__env->startSection('content'); ?>

    <h2  class="p-b-3" style="text-align: center;font-size: 18px"> ثبت لینک های روزانه </h2>
    <div style="background: #ffe2d6" class="col-md-6 offset-md-3">
        <?php echo $__env->make('partials.formErrors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo Form::open(['action' =>'App\Http\Controllers\Admin\AdminShowLinkController@store', 'method' => 'POST']); ?>


        <div class="form-group">
            <?php echo Form::label('url_link', 'لینک  :'); ?>

            <?php echo Form::text('url_link', null,['class'=>'form-control','autocomplete'=>'off']); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('url_title', 'عنوان آدرس '); ?>

            <?php echo Form::text('url_title', null,['class'=>'form-control','autocomplete'=>'off']); ?>

        </div>



        <div class="form-group">
            <?php echo Form::submit('ذخیره لینک ',['class'=>'btn btn-success']); ?>

        </div>

        <?php echo Form::close(); ?>



    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sitecms\resources\views/admin/showlinks/create.blade.php ENDPATH**/ ?>