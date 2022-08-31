<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        $('#option').click(function () {
            if (this.checked){
                $('.checkBox').each(function () {
                    this.checked=true;
                })
            }
            else{
                $('.checkBox').each(function () {
                    this.checked=false;
                })

            }

        })
    })
</script>

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


    <form action="/admin/delete/files" method="post" class="form-inline">
        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('delete')); ?>

        <div class="form-group">
            <select name="checkBoxArray" class="form-control">
                <option value="delete">حذف گروهی</option>
            </select>
            <input type="submit" name="submit" class="btn btn-primary"  value="اعمال"/>

        </div>



    <div class="bg-content">

        <table  class="table table-bordered table-hover bg-content">
            <thead>
            <tr>
                <th><input type="checkbox" id="option"></th>
                <th>ردیف</th>
                <th>فایل یا تصویر</th>
                <th>کاربر</th>
                <th>نام فایل</th>
                <th>آدرس</th>
                <th>تاریخ ایجاد</th>
                <th> عملیات</th>

            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="active">
                    <td><input  class="checkBox" type="checkbox" name="checkBoxArray[]" value="<?php echo e($photo->id); ?>"></td>
                    <td><?php echo e($photo->id); ?></td>
                    <td><img src="<?php echo e($photo->path); ?>" width="80" ></td>

                    <td><?php echo e($photo->user->name); ?></td>
                    <td><?php echo e($photo->name); ?></td>
                    <td><?php echo e($photo->path); ?></td>

                    <td><?php echo e(\Hekmatinasser\Verta\Verta::instance($photo->created_at)); ?></td>


<td class="justify-content-center">
                    <td>
                        <?php echo Form::open(['method' => 'DELETE', 'action'=> ['App\Http\Controllers\Admin\AdminFilesController@destroy', $photo->id]]); ?>

                        <div class="form-group">
                            <?php echo Form::submit('حذف', ['class'=>'btn btn-danger']); ?>

                        </div>
                        <?php echo Form::close(); ?>

                    </td>

</td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>



        <div class="row-cols-lg-1 offset-10" style="text-align: center"><?php echo e($photos->links('pagination::bootstrap-4')); ?></div>

    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sitecms\resources\views/admin/files/index.blade.php ENDPATH**/ ?>