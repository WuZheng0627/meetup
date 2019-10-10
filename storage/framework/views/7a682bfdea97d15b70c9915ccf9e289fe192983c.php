<?php $__env->startSection('content'); ?>
<div class="detail">
    <div class="am-g am-container">
        <div class="am-u-lg-12">
            <h1 class="detail-h1">所有的活动都在下面了...</h1>
        </div>
    </div>
</div>

<div class="am-container">
    <div data-am-widget="list_news" class="am-list-news am-list-news-default">
        <!--列表标题-->
        <div class="am-list-news-bd">
            <ul class="am-list">
              <?php $__currentLoopData = $issues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $issue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                    <div class="am-u-sm-2 am-u-md-1 am-list-thumb">
                        <a href="<?php echo e(route('issues.show',$issue->id)); ?>">
                            <img src="assets/img/avatar1.png" alt=""/>
                        </a>
                    </div>

                    <div class="am-u-sm-7 am-u-md-9 am-list-main">
                        <h3 class="am-list-item-hd">
                            <a href="<?php echo e(route('issues.show',$issue->id)); ?>" class=""><?php echo e($issue->title); ?></a>
                        </h3>

                        <div class="am-list-item-text">
                            <span class="am-badge am-badge-secondary am-radius">read</span>
                            <span class="meta-data">Aaron</span>
                            <?php echo e($issue->created_at->diffForHumans()); ?>

                        </div>
                    </div>
                    <div class="am-u-sm-3 am-u-md-2 issue-comment-count">
                        <span class="am-icon-comments"></span>
                        <a href="<?php echo e(route('issues.show',$issue->id)); ?>">2</a>
                    </div>
                </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

            <?php echo e($issues->links()); ?>

        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\meetup\resources\views/issues/index.blade.php ENDPATH**/ ?>