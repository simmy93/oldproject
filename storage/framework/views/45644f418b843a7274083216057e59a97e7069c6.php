<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
         <img src="/uploads/avatars/default.jpg" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px; ">
         <h2> <?php echo e($user->name); ?> profilis</h2>   
        </div>
        
    </div>
    
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>