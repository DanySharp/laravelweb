<?php $__env->startSection('content'); ?>


    <?php if(\Illuminate\Support\Facades\Session::has('add_linkurl')): ?>
        <div class="alert alert-success text-center">
            <div><?php echo e(session('add_linkurl')); ?></div>
        </div>
    <?php endif; ?>

    <?php if(\Illuminate\Support\Facades\Session::has('delete_linkurl')): ?>
        <div class="alert alert-danger text-center">
            <div><?php echo e(session('delete_linkurl')); ?></div>
        </div>
    <?php endif; ?>


    <h3 class="p-b-2">لیست لینک ها </h3>
    <div class="bg-content">

        <table  class="table table-bordered table-hover bg-content">
            <thead>
            <tr>
                <th>ردیف</th>
                <th>عنوان</th>
                <th>آدرس</th>

                <th> عملیات</th>

            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $showlinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="active">

                    <td><?php echo e($link->id); ?></td>

                    <td><?php echo e($link->url_title); ?></td>
                    <td><?php echo e($link->url_link); ?></td>





                    <td>
                        <?php echo Form::open(['method' => 'DELETE', 'action'=> ['App\Http\Controllers\Admin\AdminShowLinkController@destroy', $link->id]]); ?>

                        <div class="form-group">
                            <?php echo Form::submit('حذف', ['class'=>'btn btn-danger']); ?>

                        </div>
                        <?php echo Form::close(); ?>

                    </td>

                    



                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>


    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sitecms\resources\views/admin/showlinks/index.blade.php ENDPATH**/ ?>