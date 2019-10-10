<?php $__env->startSection('content'); ?>
    <div class="detail">
        <div class="am-g am-container">
            <div class="am-u-lg-12">
                <h1 class="detail-h1">Sign Up</h1>
            </div>
        </div>
    </div>

    <div class="am-g">
        <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">

            <form method="post" class="am-form" action="<?php echo e(route('register')); ?>" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <div class="am-form-group am-form-file">
                    <label class="am-form-label" for="avatar">头像: </label>
                    <br>

                    <button type="button" class="am-btn am-btn-success am-btn-sm">
                        <i class="am-icon-cloud-upload" id="loading"></i> 上传新的缩略图
                    </button>

                    <input type="file" id="photo_upload" name="file">
                    <input type="hidden" name="avatar" value="<?php echo e(old('avatar')); ?>">

                    <hr data-am-widget="divider" class="am-divider am-divider-dashed am-no-layout">
                    <div>
                        <img src="<?php echo e(old('avatar', '/storage/images/HiDQLZYto8PcdHHPJdM82pg2MCRh0YpMECG7bf3C.png')); ?>" id="photo_show" style="max-height: 200px;">
                    </div>
                </div>
                <div class="am-form-group am-form-icon am-form-feedback <?php echo e($errors->has('name') ? ' am-form-error' : ''); ?>">
                    <label class="am-form-label" for="name">昵称: </label>
                    <input type="text" id="name" class="am-form-field" placeholder="输入你的昵称" name="name" value="<?php echo e(old('name')); ?>">

                    <?php if($errors->has('name')): ?>
                        <span class="am-icon-warning"><?php echo e($errors->first('name')); ?></span>
                    <?php endif; ?>
                </div>

                <div class="am-form-group am-form-icon am-form-feedback <?php echo e($errors->has('username') ? ' am-form-error' : ''); ?>">
                    <label class="am-form-label" for="username">用户名: </label>
                    <input type="text" id="username" class="am-form-field" placeholder="输入你的昵称" name="username" value="<?php echo e(old('username')); ?>">

                    <?php if($errors->has('username')): ?>
                        <span class="am-icon-warning"><?php echo e($errors->first('username')); ?></span>
                    <?php endif; ?>
                </div>

                <div class="am-form-group am-form-icon am-form-feedback <?php echo e($errors->has('email') ? ' am-form-error' : ''); ?>">
                    <label class="am-form-label" for="email">邮箱: </label>
                    <input type="text" id="email" name="email" class="am-form-field" placeholder="输入你的邮箱"  value="<?php echo e(old('email')); ?>">

                    <?php if($errors->has('email')): ?>
                        <span class="am-icon-warning"><?php echo e($errors->first('email')); ?></span>
                    <?php endif; ?>
                </div>

                <div class="am-form-group am-form-icon am-form-feedback <?php echo e($errors->has('password') ? ' am-form-error' : ''); ?>">
                    <label class="am-form-label" for="password">密码: </label>
                    <input type="password" name="password" id="password" class="am-form-field" placeholder="输入你的密码">
                    <?php if($errors->has('password')): ?>
                        <span class="am-icon-warning"><?php echo e($errors->first('password')); ?></span>
                    <?php endif; ?>
                </div>

                <div class="am-form-group am-form-icon am-form-feedback">
                    <label class="am-form-label" for="password_confirmation">重复密码: </label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="am-form-field"
                           placeholder="请重新输入你的密码">
                </div>

                <hr>
                <div class="am-cf">
                    <input type="submit" value="Sign Up" class="am-btn am-btn-primary am-btn-sm am-fl">
                    <a href="<?php echo e(route('login')); ?>" class="am-btn am-btn-default am-btn-sm am-fr">Already Has Account ^_^?</a>
                </div>
            </form>
            <br>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="/assets/js/jquery.html5-fileupload.js"></script>
    <script src="/assets/js/upload.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\meetup\resources\views/auth/register.blade.php ENDPATH**/ ?>