<?php $__env->startSection('content'); ?>


    <?php if(\Illuminate\Support\Facades\Session::has('add_contact')): ?>
        <div class="alert alert-success text-center">
            <div><?php echo e(session('add_contact')); ?></div>
        </div>
    <?php endif; ?>

    <?php if(\Illuminate\Support\Facades\Session::has('delete_contact')): ?>
        <div class="alert alert-danger text-center">
            <div><?php echo e(session('delete_contact')); ?></div>
        </div>
    <?php endif; ?>


    <h3 class="p-b-2">لیست ارتباطات </h3>
    <div class="bg-content">

        <table  class="table table-bordered table-hover bg-content">
            <thead>
            <tr>
                <th>ردیف</th>
                <th>عنوان</th>
                <th>متن</th>
                <th>تلفن</th>
                <th>ایمیل</th>
                <th>تلگرام</th>
                <th>اینستاگرام</th>
                <th>لینکداین</th>
                <th>لینک معمولی</th>

                <th> عملیات</th>

            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="active">

                    <td><?php echo e($contact->id); ?></td>

                    <td><?php echo e($contact->title); ?></td>
                    <td><?php echo e(\Illuminate\Support\Str::limitAbout($contact->matn)); ?></td>
                    <td><?php echo e($contact->phone); ?></td>
                    <td><?php echo e($contact->email); ?></td>
                    <td><?php echo e($contact->telegram); ?></td>
                    <td><?php echo e($contact->instagram); ?></td>
                    <td><?php echo e($contact->linkedin); ?></td>
                    <td><?php echo e($contact->link); ?></td>





                    <td>
                        <?php echo Form::open(['method' => 'DELETE', 'action'=> ['App\Http\Controllers\Admin\AdminContactController@destroy', $contact->id]]); ?>

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



<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sitecms\resources\views/admin/contacts/index.blade.php ENDPATH**/ ?>