











<?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div style="font-family: 'B Yekan'" class="mb-4 ml-4">
        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
        <div class="media-body">
            <h5 class="mt-0"><?php echo e($comment->comment_name); ?> </h5>

            <td><?php echo e($comment->description); ?></td>
            <div  class=" mt-2 mb-2 row">







        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\sitecms\resources\views/partials/comments.blade.php ENDPATH**/ ?>