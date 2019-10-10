<li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
    <div class="am-u-sm-2 am-u-md-1 am-list-thumb">
        <a href="<?php echo e(route('issues.show', $issue->id)); ?>">
            <img src="<?php echo e($issue->user->avatar()); ?>" alt=""/>
        </a>
    </div>

    <div class="am-u-sm-7 am-u-md-9 am-list-main">
        <h3 class="am-list-item-hd">
            <a href="<?php echo e(route('issues.show', $issue->id)); ?>" class=""><?php echo e($issue['title']); ?></a>
        </h3>

        <div class="am-list-item-text">
            <span class="am-badge am-badge-secondary am-radius">read</span>
            <span class="meta-data"><?php echo e($issue->user->name); ?></span>
            <?php echo e($issue->created_at->diffForHumans()); ?>

        </div>
    </div>
    <div class="am-u-sm-3 am-u-md-2 issue-comment-count">
        <span class="am-icon-comments"></span>
        <a href="<?php echo e(route('issues.show', $issue->id)); ?>">2</a>
    </div>
</li> <?php /**PATH C:\laragon\www\meetup\resources\views/welcome/_issue_list.blade.php ENDPATH**/ ?>