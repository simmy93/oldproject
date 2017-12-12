<?php $__env->startSection('content'); ?>
<!--This is a comment. Comments are not displayed in the browser
<section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>Your Account</h3></header>
            <form action="<?php echo e(route('account.save')); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">First Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo e($user->name); ?>" id="name">
                </div>
                <div class="form-group">
                    <label for="image">Image (only .jpg)</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>
                <button type="submit" class="btn btn-primary">Save Account</button>
                <input type="hidden" value="<?php echo e(Session::token()); ?>" name="_token">
            </form>
        </div>
    </section>
    <?php if(Storage::disk('local')->has($user->id . '.jpg')): ?>
        <section class="row new-post">
            <div class="col-md-6 col-md-offset-3">
                <img src="<?php echo e(route('account.image', ['filename' => $user->id . '.jpg'])); ?>" alt="" class="img-responsive">
            </div>
        </section>
    <?php endif; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
            <?php if(Storage::disk('local')->has($user->id . '.jpg')): ?>
                <img src="<?php echo e(route('account.image', ['filename' => $user->id . '.jpg'])); ?>" alt="" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px;" class="img-responsive">
                <?php endif; ?>
                <h2><?php echo e($user->name); ?> profilis</h2>
                
                <form enctype="multipart/form-data" action="<?php echo e(route('account.save')); ?>" method="post">
                   
                    <label>Atnaujinti profilio nuotrauką</label>

                    <div class="form-group">
                    <label for="name">First Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo e($user->name); ?>" id="name">
                    </div>

                    <div class="form-group">
                    <label for="image">Image (only .jpg)</label>
                    <input type="file" name="image" class="form-control" id="image">
                    </div>



                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="submit" value="Išsaugoti" class="pull-right btn btn-sm btn-primary">
                </form>
                
            </div>
        </div>
    </div>-->


<div class="container" style="padding-top: 0px;">
  <h1 class="page-header">Redaguoti profilį</h1>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <img src="<?php echo e(route('account.image', ['filename' => $user->id . '.jpg'])); ?>" class="avatar img-circle img-thumbnail" alt="avatar" style="width: 250px; height: 250px;">
        
      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      
     
        
      
      <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo e(route('account.save')); ?>" method="post" role="form">
        <div class="form-group">
          <label class="col-lg-3 control-label">First name:</label>
          <div class="col-lg-8">
            <input name="name" class="form-control" value="<?php echo e($user->name); ?>" type="text" name="name">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Last name:</label>
          <div class="col-lg-8">
            <input name="lname" class="form-control" value="<?php echo e($user->lname); ?>" type="text" name="lname">
          </div>
        </div>
       
        
        
        <div class="form-group">
          <label class="col-md-3 control-label">Username:</label>
          <div class="col-md-8">
            <input name="username" class="form-control" value="<?php echo e($user->username); ?>" type="text" id="username">
          </div>
        </div>


        <div class="form-group">
            <label class="col-md-3 control-label">Naujos nuotraukos įkėlimas</label>
            <div class="col-md-8">
                
        <input type="file" name="image" class="text-center center-block well well-sm" id="file">
            </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            
            <button type="submit" class="btn btn-primary">Išsaugoti pakeitimus</button>
                <input type="hidden" value="<?php echo e(Session::token()); ?>" name="_token">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>