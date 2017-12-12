<?php $__env->startSection('content'); ?>
<?php echo $__env->make('includes.message-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- content -->
    <div class="container">
      <div class="row">
      <?php echo $__env->make('includes.list-group', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="col-md-9">
          <div class="panel panel-default">
            <table class="table">
            <?php foreach($events as $event): ?>
            
              <tr class="clickable-row" data-href="<?php echo e(route('event.show', $event->id)); ?>">
                <td class="middle">
                  <div class="media">
                    <div class="media-left">
                      
                      <img class="media-object" src="<?php echo e(route('account.image', ['filename' => $event->type . '.jpg'])); ?>" alt="..." style="border-radius: 25%; height: 100px; width: 100px;">

                      
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><?php echo e($event->type); ?></h4>
                      <address>
                        <br>
                        <?php echo e($event->place); ?>

                      </address>
                    </div>
                  </div>
                </td>
                <td width="100" class="middle">
                  <div>
                    <a href="<?php echo e(route('member.store', $event->id)); ?>" class="btn btn-circle btn-default btn-md" title="Dalyvauti">
                      <i class="glyphicon glyphicon-check"></i>
                    </a>
                    
                  </div>
                </td>
              </tr>
              
              <?php endforeach; ?>
            </table>            
          </div>

          <?php echo e($events->render()); ?>

        </div>
      </div>
    </div>

    
 
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>