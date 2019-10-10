<?php $__env->startSection('stylesheets'); ?>
    <link rel="stylesheet" href="/assets/vendor/highlight/default.min.css">
    <link rel="stylesheet" href="/assets/vendor/atwho/jquery.atwho.min.css">

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="issue-heading">
    <div class="am-container">
        Laravel Meetup
        <?php if(Auth::check()&&Auth::user() == $issue->user): ?>
            <a href="<?php echo e(route('issues.destroy', $issue->id)); ?>" data-method="delete" data-token="<?php echo e(csrf_token()); ?>" data-confirm="Are you sure?"  type="button" class="am-btn am-btn-danger am-radius am-btn-sm">Destroy</a>
            
            <?php echo link_to_route('issues.edit', 'Edit', $issue->id , ['class' => 'am-btn am-btn-primary am-radius am-btn-sm' ]); ?>

        <?php endif; ?>
    </div>
</div>

<div class="am-container">
    <div class="am-comment-bd"><p><?php echo markdown( $issue->content); ?></p></div>
    <ul class="am-comments-list am-comments-list-flip">

        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('shared._comment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <?php if(Auth::check()): ?>
    <?php echo Form::open(['route'=>'comments.store','class'=>'am-form']); ?>

    <?php echo Form::hidden('issue_id',$issue->id); ?>

    <?php echo Form::hidden('user_id',Auth::id()); ?>

    <fieldset>
        <div class="am-form-group">
            <?php echo e(Form::textarea('content',null,['rows'=>'5','placeholder'=>'填写评论内容，支持markdown。'])); ?>

        </div>
        <p>
            <?php echo e(Form::submit('提交',['class'=>'am-btn am-btn-default','id'=>'store-comment'])); ?>

        </p>
    </fieldset>
    <?php echo Form::close(); ?>

    <?php else: ?>
        <p>
            <a href="<?php echo e(route('login')); ?>" class="am-btn am-btn-secondary am-btn-block">
                <span class="am-icon-user"></span> 登录后发评论
            </a>
        </p>
    <?php endif; ?>
</div>
<?php $__env->startSection('scripts'); ?>
    <script src="/assets/vendor/atwho/jquery.caret.min.js"></script>
    <script src="/assets/vendor/atwho/jquery.atwho.min.js"></script>
    <script src="/assets/vendor/hotkeys/jquery.hotkeys.js"></script>
    <script src="/assets/vendor/highlight/ht.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script src="/assets/js/show.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\meetup\resources\views/issues/show.blade.php ENDPATH**/ ?>