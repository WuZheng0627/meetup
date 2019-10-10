<li class="am-comment">
    <img src="<?php echo e($comment->user->avatar()); ?>" alt="" class="am-comment-avatar" width="48" height="48">

    <div class="am-comment-main">
        <header class="am-comment-hd">
            <div class="am-comment-meta">
                <span class="am-comment-author"><?php echo e($comment->user->name); ?></span>
                <?php echo e($comment->created_at->diffForHumans()); ?>

            </div>
        </header>
        <div class="am-comment-bd"><p><?php echo markdown($comment->content); ?></p></div>
    </div>
</li>
<?php /**PATH C:\laragon\www\meetup\resources\views/shared/_comment.blade.php ENDPATH**/ ?>