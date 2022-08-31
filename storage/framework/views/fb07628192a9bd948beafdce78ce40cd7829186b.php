<div class="col-lg-4">
    <!-- Search widget-->
    <div style="font-family: 'B Yekan'" class="card mb-4">
        <div class="card-header">لیست پست ها </div>
        <div class="card-body">








        </div>
    </div>

    <!-- Categories widget-->
    <div class="card mb-2">
        <div class="card-header my_link_font">لینک های روزانه </div>
        <div class="card-body">
            <ul style="font-weight: bold;font-size: 1em;font-family: 'B Yekan'" class="list-unstyled mb-0">
                <?php $__currentLoopData = $showlinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e($link->url_link); ?>"><?php echo e($link->url_title); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <hr>
        </div>
    </div>


    <!-- Categories widget-->
    <div class="card mb-2">
        <div class="card-header my_link_font">دسته بندی</div>
        <div class="card-body">
            <ul style="font-weight: bold;font-size: 1em;font-family: 'B Yekan'" class="list-unstyled mb-0">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('category.show',$cat->slug)); ?>"><?php echo e($cat->title); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <hr>
        </div>
    </div>
    <!-- Side widget-->
    <div class="card mb-4">
        <div class="card-header">بازی آنلاین</div>
        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\sitecms\resources\views/partials/sidebar.blade.php ENDPATH**/ ?>