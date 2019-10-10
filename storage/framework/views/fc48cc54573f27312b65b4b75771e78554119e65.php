<?php $__env->startSection('content'); ?>
<div class="am-container">
    <div class="header">
        <div class="am-g">
            <h1>添加新活动</h1>
        </div>
        <hr>
    </div>

    <form class="am-form" action="<?php echo e(route('issues.store')); ?>" method="post">
       <?php echo e(csrf_field()); ?>

       <fieldset>
           <input type="hidden" name="user_id" value="<?php echo e(Auth::id()); ?>">
           <div class="am-form-group">
              <label>标题</label>
              <input type="text" placeholder="输入活动标题" name="title" value= "<?php echo e(old('title')); ?>">
          </div>

          <div class="am-form-group">
              <label>内容</label>
              <textarea rows="5" name="content"><?php echo e(old('content')); ?></textarea>
          </div>

          <button type="submit" class="am-btn am-btn-default">提交</button>
      </fieldset>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\meetup\resources\views/issues/create.blade.php ENDPATH**/ ?>