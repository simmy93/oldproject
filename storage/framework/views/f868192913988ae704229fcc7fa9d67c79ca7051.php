<?php $__env->startSection('content'); ?>
<?php echo $__env->make('includes.message-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- content -->
    <div class="container">
      <div class="row">
      <?php echo $__env->make('includes.list-group', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="col-md-9">
         <table class="table">
           <thead>
             <th>Vardas</th>
             <th>Pavardė</th>
             <th>Slpayvardis</th>
             <th>El. paštas</th>
             <th>Rolė(User/Admin)</th>
             <th></th>
           </thead>
           <tbody>
             <?php foreach($users as $user): ?>
             <tr>
               <form action="<?php echo e(route('admin.changes')); ?>" method="post">
                 <td><?php echo e($user->name); ?></td>
                 <td><?php echo e($user->lname); ?></td>
                 <td><?php echo e($user->username); ?></td>
                 <td><?php echo e($user->email); ?> <input type="hidden" name="email" value="<?php echo e($user->email); ?>"></td>
                 <td><label class="radio-inline"><input type="radio" name="role_user" <?php echo e($user->hasRole('User') ? 'checked' : ''); ?>>User</label><label class="radio-inline"><input type="radio" name="role_admin" <?php echo e($user->hasRole('Admin') ? 'checked' : ''); ?>>Admin</label></td>
                 
                 <?php echo e(csrf_field()); ?>

                 <td><button class="btn-success btn-sm" type="submit">Išsaugoti pakeitimus</button></td>
               </form>
             </tr>
             <?php endforeach; ?>
           </tbody>
         </table>
          <?php echo e($users->render()); ?>

        </div>
      </div>
    </div>

    
 
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>