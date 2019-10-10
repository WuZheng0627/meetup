<?php echo Form::hidden('user_id',Auth::id()); ?>

<fidldset>
    <div class="am-form-group">
        <?php echo e(Form::label('标题')); ?>

        <?php echo e(Form::text('title',null,['placeholder'=>'输入活动标题'])); ?>

    </div>
    <div class="am-form-group">
        <?php echo e(Form::label('内容')); ?>

        <?php echo e(Form::textarea('content',null,['rows'=>'5','placeholder'=>'填写活动内容，支持markdown。'])); ?>

    </div>

        <?php echo e(Form::submit('提交',['class'=>'am-btn am-btn-default'])); ?>

</fidldset><?php /**PATH C:\laragon\www\meetup\resources\views/issues/_form.blade.php ENDPATH**/ ?>