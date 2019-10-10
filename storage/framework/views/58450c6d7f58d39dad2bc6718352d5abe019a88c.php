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

            <?php if(session('status')): ?>
                <div class="am-alert am-alert-success">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>

            <form method="post" class="am-form" action="<?php echo e(route('password.email')); ?>">
                <?php echo e(csrf_field()); ?>


                <div class="am-form-group am-form-icon am-form-feedback <?php echo e($errors->has('email') ? ' am-form-error' : ''); ?>">
                    <label class="am-form-label" for="email">邮箱: </label>
                    <input type="text" id="email" name="email" class="am-form-field" placeholder="输入你的邮箱"  value="<?php echo e(old('email')); ?>" >

                    <?php if($errors->has('email')): ?>
                        <span class="am-icon-warning"><?php echo e($errors->first('email')); ?></span>
                    <?php endif; ?>
                </div>

                <div class="am-cf">
                    <input type="submit" value="Send Password Reset Link" class="am-btn am-btn-secondary am-btn-sm am-fl">
                </div>
            </form>
            <br>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\meetup\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>