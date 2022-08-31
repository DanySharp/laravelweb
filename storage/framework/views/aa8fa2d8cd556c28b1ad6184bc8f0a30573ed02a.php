<?php $__env->startSection('content'); ?>
    <?php if(\Illuminate\Support\Facades\Session::has('delete_user')): ?>
        <div class="alert alert-danger">
            <div><?php echo e(session('delete_user')); ?></div>
        </div>
    <?php endif; ?>

    <?php if(\Illuminate\Support\Facades\Session::has('add_user')): ?>
        <div class="alert alert-success">
            <div><?php echo e(session('add_user')); ?></div>
        </div>
    <?php endif; ?>
    <?php if(\Illuminate\Support\Facades\Session::has('update_user')): ?>
        <div class="alert alert-success">
            <div><?php echo e(session('update_user')); ?></div>
        </div>
    <?php endif; ?>
    <?php if(\Illuminate\Support\Facades\Session::has('delete_user')): ?>
        <div class="alert alert-danger">
            <div><?php echo e(session('delete_user')); ?></div>
        </div>
    <?php endif; ?>


    <h3 class="p-b-2">ثبت کاربر جدید</h3>
   <div class="bg-content">

    <table  class="table table-bordered table-hover bg-content">
        <thead>
        <tr>
            <th>*</th>
            <th>نام</th>
            <th>ایمیل</th>
            <th>تاریخ ایجاد</th>
            <th>وضعیت </th>
            <th>نقش</th>

        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="active">
                <td><img src="<?php echo e($user->photo ? $user->photo->path : "/images/UserPic/22.png"); ?>" width="80" ></td>


            <td><a href="<?php echo e(route('users.edit',$user->id)); ?>"><?php echo e($user->name); ?></a></td>
            <td><?php echo e($user->email); ?></td>
            <td><?php echo e(\Hekmatinasser\Verta\Verta::instance($user->created_at)); ?></td>
            <?php if($user->status==0): ?>

                <td><span class="tag tag-pill tag-danger">غیر فعال</span> </td>
            <?php else: ?>
                <td><span class="tag tag-pill tag-success">فعال</span> </td>
            <?php endif; ?>
                  <td> <ul style="list-style: none;">
                     <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <li><?php echo e($role->name); ?></li>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </ul></td>

        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>


       <div class="row-cols-lg-1 offset-10" style="text-align: center"><?php echo e($users->links('pagination::bootstrap-4')); ?></div>


   </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sitecms\resources\views/admin/users/index.blade.php ENDPATH**/ ?>