<?php $__env->startSection('content'); ?>

    <h2  class="p-b-3" style="text-align: center;font-size: 18px">ویرایش کاربر <?php echo e($user->name); ?> </h2>
    <div class="bg-content">

        <div class="row">

            <div class="col-md-3">

                <img src="<?php echo e($user->photo ? $user->photo->path : "/images/UserPic/22.png"); ?>" class="img-fluid" alt="">

            </div>


            <div class="col-md-9 row">
                <?php echo $__env->make('partials.formErrors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo Form::model($user,['method' =>'PATCH', 'action' => ['App\Http\Controllers\Admin\AdminUserController@update',$user->id ] ,'files'=>true]); ?>


                <div class="form-group">
                    <?php echo Form::label('name', 'مشخصات :'); ?>

                    <?php echo Form::text('name', null,['class'=>'form-control']); ?>

                </div>

                <div class="form-group">
                    <?php echo Form::label('email', 'ایمیل :'); ?>

                    <?php echo Form::text('email', null,['class'=>'form-control']); ?>

                </div>

                <div class="form-group">
                    <?php echo Form::label('roles', 'نقش :'); ?>

                    <?php echo Form::select('roles[]',$roles,null, ['multiple'=>'multiple','class'=>'form-control']); ?>

                </div>

                <div class="form-group">
                    <?php echo Form::label('status', 'وضعیت :'); ?>

                    <?php echo Form::select('status', [1=>'فعال' ,0=>'غیرفعال'],null,['class'=>'form-control']); ?>

                </div>




                <div class="form-group">
                    <?php echo Form::label('avatar', 'آواتار :'); ?>

                    <?php echo Form::file('avatar',null,['class'=>'form-control']); ?>

                </div>



                <div class="form-group">
                    <?php echo Form::label('password', 'کلمه عبور :'); ?>

                    <?php echo Form::password('password', ['class'=>'form-control']); ?>

                </div>
                <div class="form-group">
                    <?php echo Form::submit('بروز رسانی',['class'=>'btn btn-success col-md-3']); ?>

                </div>

                <?php echo Form::close(); ?>


                <?php echo Form::open(['method' =>'delete', 'action' => ['App\Http\Controllers\Admin\AdminUserController@destroy',$user->id ]]); ?>

                <div class="form-group">
                    <?php echo Form::submit('حذف ',['class'=>'btn btn-danger col-md-3']); ?>

                </div>

                <?php echo Form::close(); ?>


            </div>

        </div>




    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sitecms\resources\views/admin/users/edit.blade.php ENDPATH**/ ?>