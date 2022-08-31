<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/dropzone.css')); ?>">
<?php $__env->startSection('content'); ?>

    <h2  class="p-b-3" style="text-align: center;font-size: 18px">آپلود فایل     </h2>
    <div style="background: #ffe2d6" class="col-md-6 offset-md-3">
        <?php echo $__env->make('partials.formErrors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo Form::open(['action' =>'App\Http\Controllers\Admin\AdminFilesController@store', 'method' => 'POST','class'=>'dropzone']); ?>





        <?php echo Form::close(); ?>



    </div>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/dropzone.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sitecms\resources\views/admin/files/create.blade.php ENDPATH**/ ?>