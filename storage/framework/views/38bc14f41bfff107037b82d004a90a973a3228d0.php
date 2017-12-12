<?php if(Session::has('message')): ?>
<div class="col-md-8 col-md-offset-2">
	<div class="alert alert-success alert-dismissable fade in">
    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    	 <?php echo e(Session::get('message')); ?>

  	</div>
 </div>
<?php endif; ?>