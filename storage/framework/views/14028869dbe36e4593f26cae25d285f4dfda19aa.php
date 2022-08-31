<?php $__env->startSection('content'); ?>


    <?php if(\Illuminate\Support\Facades\Session::has('add_category')): ?>
        <div class="alert alert-success">
            <div><?php echo e(session('add_category')); ?></div>
        </div>
    <?php endif; ?>
    <?php if(\Illuminate\Support\Facades\Session::has('update_category')): ?>
        <div class="alert alert-success">
            <div><?php echo e(session('update_category')); ?></div>
        </div>
    <?php endif; ?>
    <?php if(\Illuminate\Support\Facades\Session::has('delete_category')): ?>
        <div class="alert alert-danger">
            <div><?php echo e(session('delete_category')); ?></div>
        </div>
    <?php endif; ?>


    <h3 class="p-b-2">لیست دسته بندی  </h3>
    <div class="bg-content">

        <table  class="table table-bordered table-hover bg-content">
            <thead>
            <tr>
                <th>ردیف</th>
                <th>عنوان</th>
                <th>آدرس</th>
                <th>تاریخ ایجاد</th>

            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="active">

                    <td><?php echo e($category->id); ?></td>

                    <td><a href="<?php echo e(route('category.edit',$category->id)); ?>"><?php echo e($category->title); ?></a></td>
                    <td><?php echo e($category->slug); ?></td>
                    <td><?php echo e(\Hekmatinasser\Verta\Verta::instance($category->created_at)); ?></td>



                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="col-md-4 offset-md-5 align-content-center text-center"><?php echo e($categories->links('pagination::bootstrap-4')); ?></div>

    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sitecms\resources\views/admin/category/index.blade.php ENDPATH**/ ?>