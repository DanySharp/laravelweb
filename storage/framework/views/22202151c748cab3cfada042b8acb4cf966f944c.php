

<?php if(count($errors) > 0): ?>
    <div class="alert alert-message">
        <ul style="list-style: none;font-size: 20px;font-weight: bold;color: #ff1d0f;text-align: center">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\sitecms\resources\views/partials/formErrors.blade.php ENDPATH**/ ?>