<?php $__env->startSection('content'); ?>

    <h2  class="p-b-3" style="text-align: center;font-size: 18px">ویرایش دیدگاه  </h2>
    <div class="col-md-6 offset-md-3">


    </div>
    <div class="col-md-10 offset-md-1">
        <?php echo $__env->make('partials.formErrors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div>


            <?php echo Form::model($comment,['method' => 'PATCH','action' =>['App\Http\Controllers\Admin\AdminCommentController@update', $comment->id]]); ?>


            <div class="form-group">
                <?php echo Form::label('description', 'متن نظر  :'); ?>

                <?php echo Form::textarea('description', $comment->description,['class'=>'form-control']); ?>

            </div>




                <div class="form-group">
                    <?php echo Form::submit('بروز رسانی',['class'=>'btn btn-success col-md-3']); ?>

                </div>

                <?php echo Form::close(); ?>


            <?php echo Form::open(['method' => 'DELETE', 'action'=> ['App\Http\Controllers\Admin\AdminCommentController@destroy', $comment->id]]); ?>

            <div class="form-group">
                <?php echo Form::submit('حذف', ['class'=>'btn btn-danger col-md-3']); ?>

            </div>
            <?php echo Form::close(); ?>

            </div>

        </div>




    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sitecms\resources\views/admin/comments/edit.blade.php ENDPATH**/ ?>