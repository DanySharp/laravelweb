<?php $__env->startSection('content'); ?>

    <h2  class="p-b-3" style="text-align: center;font-size: 18px">ویرایش مطلب  </h2>
    <div class="col-md-3">

        <img src="<?php echo e($post->photo ? $post->photo->path :  '/images/UserPic/22.png'); ?>" class="img-fluid" alt="">

    </div>
    <div class="col-md-10 offset-md-1">
        <?php echo $__env->make('partials.formErrors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div>


            <?php echo Form::model($post,['method' => 'PATCH','action' =>['App\Http\Controllers\Admin\AdminPostController@update', $post->id],'files'=>true]); ?>


            <div class="form-group">
                <?php echo Form::label('title', 'عنوان  :'); ?>

                <?php echo Form::text('title', $post->title,['class'=>'form-control']); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('slug', 'آدرس :'); ?>

                <?php echo Form::text('slug', $post->slug,['class'=>'form-control']); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('category', 'دسته بندی :'); ?>

                <?php echo Form::select('category',$categories,$post->category->id,['class'=>'form-control']); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('description', 'متن :'); ?>

                <?php echo Form::textarea('description',$post->description,['class'=>'form-control']); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('status', 'وضعیت :'); ?>

                <?php echo Form::select('status', [1=>'فعال' ,0=>'غیرفعال'],$post->status,['class'=>'form-control']); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('first_photo', 'تصویر  :'); ?>

                <?php echo Form::file('first_photo',null,['class'=>'form-control']); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('meta_description', 'متا متن :'); ?>

                <?php echo Form::textarea('meta_description',$post->meta_description,['class'=>'form-control']); ?>

            </div>


            <div class="form-group">
                <?php echo Form::label('meta_keywords', 'متاتگ  :'); ?>

                <?php echo Form::textarea('meta_keywords',$post->meta_keywords,['class'=>'form-control']); ?>

            </div>


                <div class="form-group">
                    <?php echo Form::submit('بروز رسانی',['class'=>'btn btn-success col-md-3']); ?>

                </div>

                <?php echo Form::close(); ?>


                <?php echo Form::open(['method' =>'DELETE', 'action' => ['App\Http\Controllers\Admin\AdminPostController@destroy',$post->id ]]); ?>

                <div class="form-group">
                    <?php echo Form::submit('حذف ',['class'=>'btn btn-danger col-md-3']); ?>

                </div>

                <?php echo Form::close(); ?>


            </div>

        </div>




    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sitecms\resources\views/admin/posts/edit.blade.php ENDPATH**/ ?>