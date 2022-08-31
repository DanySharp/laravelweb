<?php $__env->startSection('content'); ?>



    <?php if(\Illuminate\Support\Facades\Session::has('approve_comment')): ?>
        <div class="alert alert-success text-center">
            <div><?php echo e(session('approve_comment')); ?></div>
        </div>
    <?php endif; ?>
    <?php if(\Illuminate\Support\Facades\Session::has('reject_comment')): ?>
        <div class="alert alert-danger text-center">
            <div><?php echo e(session('reject_comment')); ?></div>
        </div>
    <?php endif; ?>

    <?php if(\Illuminate\Support\Facades\Session::has('update_comment')): ?>
        <div class="alert alert-success text-center">
            <div><?php echo e(session('update_comment')); ?></div>
        </div>
    <?php endif; ?>
    <?php if(\Illuminate\Support\Facades\Session::has('delete_comment')): ?>
        <div class="alert alert-danger text-center">
            <div><?php echo e(session('delete_comment')); ?></div>
        </div>
    <?php endif; ?>

    <h3 class="p-b-2">لیست نظرات  </h3>
    <div class="bg-content">

        <table  class="table table-bordered table-hover bg-content">
            <thead>
            <tr>
                <th>ردیف</th>
                <th>توضیحات</th>
                <th>پست</th>
                <th>نام</th>
                <th>ایمیل</th>

                <th>تاریخ ایجاد</th>
                <th>وضعیت </th>
                <th>عملیات </th>

            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="active">

                    <td><?php echo e($comment->id); ?></td>
                    <td><a href="<?php echo e(route('comments.edit',$comment->id)); ?>"><?php echo e($comment->description); ?></a></td>
                    <td><?php echo e($comment->post->title); ?></td>
                    <td><?php echo e($comment->comment_name); ?></td>
                    <td><?php echo e($comment->comment_email); ?></td>
                    <td><?php echo e($comment->id); ?></td>
                    <td><?php echo e(\Hekmatinasser\Verta\Verta::instance($comment->created_at)); ?></td>

                    <?php if($comment->status==0): ?>

                        <td><span class="tag tag-pill tag-danger">منتشر نشده </span> </td>
                    <?php else: ?>
                        <td><span class="tag tag-pill tag-success">منتشر شده</span> </td>
                    <?php endif; ?>

                    <?php if($comment->status==0): ?>
                        <td>

                            <?php echo Form::open(['route' =>['comments.actions',$comment->id], 'method' => 'POST']); ?>


                            <div class="form-group">
                                <?php echo Form::hidden('action','approved'); ?>

                                <?php echo Form::submit(' تایید نشده',['class'=>'btn tag-pill tag-warning']); ?>

                            </div>

                            <?php echo Form::close(); ?>


                        </td>

                    <?php else: ?>
                        <td>
                            <?php echo Form::open(['route' =>['comments.actions',$comment->id], 'method' => 'POST']); ?>


                            <div class="form-group">
                                <?php echo Form::hidden('action','rejected'); ?>

                                <?php echo Form::submit('تایید شده ',['class'=>'btn tag-pill tag-success']); ?>

                            </div>

                            <?php echo Form::close(); ?>


                        </td>
                    <?php endif; ?>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="col-md-4 offset-md-5 align-content-center text-center"><?php echo e($comments->links('pagination::bootstrap-4')); ?></div>

    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sitecms\resources\views/admin/comments/index.blade.php ENDPATH**/ ?>