<?php $__env->startSection('content'); ?>

    <h2  class="p-b-3" style="text-align: center;font-size: 18px">ایجاد کاربر جدید </h2>
    <div class="bg-content">


        <div class="col-md-6 offset-lg-3">
            <?php echo $__env->make('partials.formErrors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo Form::open(['action' =>'App\Http\Controllers\Admin\AdminUserController@store', 'method' => 'POST','files'=>true]); ?>


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

                <?php echo Form::select('status', [1=>'فعال' ,0=>'غیرفعال'],0,['class'=>'form-control']); ?>

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
                <?php echo Form::submit('Save',['class'=>'btn btn-success']); ?>

            </div>

            <?php echo Form::close(); ?>



        </div>

    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sitecms\resources\views/admin/users/create.blade.php ENDPATH**/ ?>