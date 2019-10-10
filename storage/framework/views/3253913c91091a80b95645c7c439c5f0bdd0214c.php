<?php $__env->startSection('content'); ?>
    <div class="detail">
        <div class="am-g am-container">
            <div class="am-u-lg-12">
                <h1 class="detail-h1">Reset Password</h1>
            </div>
        </div>
    </div>

    <div class="am-g">
        <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">

            <form method="post" class="am-form" action="<?php echo e(route('password.request')); ?>">
                <?php echo e(csrf_field()); ?>


                <input type="hidden" name="token" value="<?php echo e($token); ?>">

                <div class="am-form-group am-form-icon am-form-feedback <?php echo e($errors->has('email') ? ' am-form-error' : ''); ?>">
                    <label class="am-form-label" for="email">邮箱: </label>
                    <input type="text" id="email" name="email" class="am-form-field" placeholder="输入你的邮箱" value="<?php echo e(old('email')); ?>">

                    <?php if($errors->has('email')): ?>
                        <span class="am-icon-warning"><?php echo e($errors->first('email')); ?></span>
                    <?php endif; ?>
                </div>

                <div class="am-form-group am-form-icon am-form-feedback <?php echo e($errors->has('password') ? ' am-form-error' : ''); ?>">
                    <label class="am-form-label" for="password">新密码: </label>
                    <input type="password" id="password" name="password" class="am-form-field" placeholder="输入你的新密码">

                    <?php if($errors->has('password')): ?>
                        <span class="am-icon-warning"><?php echo e($errors->first('password')); ?></span>
                    <?php endif; ?>
                </div>

                <div class="am-form-group am-form-icon am-form-feedback <?php echo e($errors->has('password_confirmation') ? ' am-form-error' : ''); ?>">
                    <label class="am-form-label" for="password_confirmation">重复新密码: </label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="am-form-field" placeholder="请重新输入你的新密码">

                    <?php if($errors->has(' id="email"')): ?>
                        <span class="am-icon-warning"><?php echo e($errors->first(' id="email"')); ?></span>
                    <?php endif; ?>
                </div>

                <div class="am-cf">
                    <input type="submit" value="Reset Password" class="am-btn am-btn-secondary am-btn-sm am-fl">
                </div>
            </form>
            <br>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\meetup\resources\views/auth/passwords/reset.blade.php ENDPATH**/ ?>