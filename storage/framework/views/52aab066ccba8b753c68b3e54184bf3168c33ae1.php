<?php $__env->startSection('content'); ?>
    <?php if(\Illuminate\Support\Facades\Session::has('delete_user')): ?>
        <div class="alert alert-danger">
            <div><?php echo e(session('delete_user')); ?></div>
        </div>
    <?php endif; ?>

    <?php if(\Illuminate\Support\Facades\Session::has('add_post')): ?>
        <div class="alert alert-success">
            <div><?php echo e(session('add_post')); ?></div>
        </div>
    <?php endif; ?>
    <?php if(\Illuminate\Support\Facades\Session::has('update_post')): ?>
        <div class="alert alert-success">
            <div><?php echo e(session('update_post')); ?></div>
        </div>
    <?php endif; ?>
    <?php if(\Illuminate\Support\Facades\Session::has('delete_post')): ?>
        <div class="alert alert-danger">
            <div><?php echo e(session('delete_post')); ?></div>
        </div>
    <?php endif; ?>


    <h3 class="p-b-2">ثبت  مطالب</h3>
   <div class="bg-content">

    <table  class="table table-bordered table-hover bg-content justify-content-center">
        <thead>
        <tr>
            <th>آواتار</th>
            <th>عنوان</th>
            <th>کاربر</th>
            <th>متن</th>
            <th>دسته بندی</th>
            <th>وضعیت </th>
            <th>تاریخ ایجاد</th>

        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="active">
                <td><img src="<?php echo e($post->photo ? $post ->photo->path : '/images/UserPic/22.png'); ?>" width="80" ></td>

                <td><a href="<?php echo e(route('posts.edit',$post->id)); ?>"><?php echo e($post->title); ?></a></td>
                <td><?php echo e($post->user->name); ?></td>
                <td><?php echo e(\Illuminate\Support\Str::limit($post->description)); ?></td>
                <td><?php echo e($post->category->title); ?></td>

                        <?php if($post->status==0): ?>
                            <span><td class="tag tag-pill tag-danger text-center ">غیر فعال</td></span>
                      <?php else: ?>
                    <span style=" vertical-align:middle "><td style="margin-right: 14px;margin-top: 5px" class="btn btn-success"> فعال</td></span>
                    <?php endif; ?>



                <td><?php echo e(\Hekmatinasser\Verta\Verta::instance($post->created_at)); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
       <div class="row-cols-lg-1 offset-10" style="text-align: center"><?php echo e($posts->links('pagination::bootstrap-4')); ?></div>


        </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sitecms\resources\views/admin/posts/index.blade.php ENDPATH**/ ?>