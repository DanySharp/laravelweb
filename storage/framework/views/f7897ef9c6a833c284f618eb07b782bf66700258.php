<?php $__env->startSection('content'); ?>


    <?php if(\Illuminate\Support\Facades\Session::has('add_file')): ?>
        <div class="alert alert-success">
            <div><?php echo e(session('add_file')); ?></div>
        </div>
    <?php endif; ?>


    <?php if(\Illuminate\Support\Facades\Session::has('delete_file')): ?>
        <div class="alert alert-danger">
            <div><?php echo e(session('delete_file')); ?></div>
        </div>
    <?php endif; ?>


    <h3 class="p-b-2">لیست فایل ها  </h3>
    <div class="bg-content">

        <table  class="table table-bordered table-hover bg-content">
            <thead>
            <tr>
                <th>ردیف</th>
                <th>فایل یا تصویر</th>
                <th>کاربر</th>
                <th>تاریخ ایجاد</th>

            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="active">

                    <td><?php echo e($photo->id); ?></td>
                    <td><?php echo e($photo->file); ?></td>
                    <td><?php echo e($photo->user->username); ?></td>

                    <td><?php echo e(\Hekmatinasser\Verta\Verta::instance($photo->created_at)); ?></td>



                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sitecms\resources\views/admin/photos/index.blade.php ENDPATH**/ ?>