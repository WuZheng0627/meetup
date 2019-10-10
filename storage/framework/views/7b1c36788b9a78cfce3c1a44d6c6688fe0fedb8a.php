<?php $__env->startSection('content'); ?>
    <div class="detail">
        <div class="am-g am-container">
            <div class="am-u-lg-12">
                <h1 class="detail-h1">Login</h1>
            </div>
        </div>
    </div>


    <div class="am-g">

        <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
            <div class="am-btn-group">
                <a href="/auth/qq" class="am-btn am-btn-secondary am-btn-sm"><i class="am-icon-qq am-icon-sm"></i> QQ</a>
                <a href="#" class="am-btn am-btn-danger am-btn-sm"><i class="am-icon-weibo am-icon-sm"></i> Weibo</a>
                <a href="#" class="am-btn am-btn-default am-btn-sm"><i class="am-icon-github am-icon-sm"></i> Github</a>
            </div>
            <br>
            <br>
            <form method="post" class="am-form" action="<?php echo e(route('login')); ?>">
                <?php echo e(csrf_field()); ?>


                <div class="am-form-group am-form-icon am-form-feedback <?php echo e($errors->has('username') ? ' am-form-error' : ''); ?>">
                    <label class="am-form-label" for="username">登录名: </label>
                    <input type="text" id="username" name="username" value="<?php echo e(old('username')); ?>" class="am-form-field" placeholder="输入你的登录名">

                    <?php if($errors->has('username')): ?>
                        <span class="am-icon-warning"><?php echo e($errors->first('username')); ?></span>
                    <?php endif; ?>
                </div>

                <div class="am-form-group am-form-icon am-form-feedback <?php echo e($errors->has('password') ? ' am-form-error' : ''); ?>">
                    <label class="am-form-label" for="password">密码: </label>
                    <input type="password" name="password" id="password" class="am-form-field" placeholder="输入你的密码">

                    <?php if($errors->has('password')): ?>
                        <span class="am-icon-warning"><?php echo e($errors->first('password')); ?></span>
                    <?php endif; ?>
                </div>

                <div class="am-form-group am-form-icon am-form-feedback <?php echo e($errors->has('captcha') ? ' am-form-error' : ''); ?>">
                    <label class="am-form-label" for="captcha">验证码: </label>

                    <div class="am-g doc-am-g">
                        <div class="am-u-sm-9">
                            <input type="text" name="captcha" id="captcha" class="am-form-field" placeholder="输入你的验证码">

                            <?php if($errors->has('captcha')): ?>
                                <span class="am-icon-warning"><?php echo e($errors->first('captcha')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="am-u-sm-3">
                            <img src="<?php echo e(captcha_src()); ?>" alt="" style="cursor: pointer;" onclick="this.src='<?php echo e(captcha_src()); ?>'+Math.random(); ">
                        </div>
                    </div>
                </div>

                <label for="remember-m e">
                    <input id="remember-me" type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                    记住密码
                </label>
                <br>

                <hr>
                <div class="am-cf">
                    <input type="submit" name="" value="Login" class="am-btn am-btn-secondary am-btn-sm am-fl">
                    <a href="<?php echo e(route('password.request')); ?>" class="am-btn am-btn-default am-btn-sm am-fr">Forget
                        Password ^_^?</a>
                </div>
            </form>
            <br>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\meetup\resources\views/auth/login.blade.php ENDPATH**/ ?>