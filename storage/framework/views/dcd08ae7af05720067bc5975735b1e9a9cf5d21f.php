<?php if(session('notice')): ?>
    <div class="am-alert am-alert-success">
        <div class="am-container">
            <?php echo e(session('notice')); ?>

        </div>
    </div>
<?php endif; ?>
<?php if(session('alert')): ?>
    <div class="am-alert am-alert-danger">
        <div class="am-container">
            <?php echo e(session('alert')); ?>

        </div>
    </div>
<?php endif; ?>
<?php if(count($errors) > 0): ?>
    <div class="am-alert am-alert-danger">
        <div class="am-container">
            <h2>Oops~ There's something wrong!</h2>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
<?php endif; ?><?php /**PATH C:\laragon\www\meetup\resources\views/shared/_flash.blade.php ENDPATH**/ ?>