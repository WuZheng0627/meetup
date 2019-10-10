<?php $__env->startSection('content'); ?>
<div class="am-container">
    <div class="header">
        <div class="am-g">
            <h1>修改活动</h1>
        </div>
        <hr>
    </div>

    
    <?php echo Form::model($issue,['route'=>['issues.update',$issue->id],'method'=>'put','class'=>'am-form']); ?>

        <?php echo $__env->make('issues._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo Form::close(); ?>

       
       
       
          
              
              
          

          
              
              
          

          
      
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\meetup\resources\views/issues/edit.blade.php ENDPATH**/ ?>