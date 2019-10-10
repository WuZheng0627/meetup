<?php $__env->startSection('content'); ?>

<div class="get">
    <div class="am-g">
        <div class="am-u-lg-12">
            <h1 class="get-title">It's Party Time!<br>Drink Up!</h1>

            <p>到时聚聚、聊聊程序</p>

            <p>
                <a  href="<?php echo e(route('issues.create')); ?>" class="am-btn am-btn-default am-btn-secondary">发布新活动</a>
            </p>
        </div>
    </div>
</div>

<div class="detail">
    <div class="am-g am-container">
        <div class="am-u-lg-12">
            <h1 class="detail-h1">最新的活动</h1>
        </div>
    </div>
</div>

<div class="am-container">
    <div data-am-widget="list_news" class="am-list-news am-list-news-default">
        <!--列表标题-->
        <div class="am-list-news-bd">
            <ul class="am-list">
                <?php $__currentLoopData = $issues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $issue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('welcome._issue_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\meetup\resources\views/welcome/index.blade.php ENDPATH**/ ?>