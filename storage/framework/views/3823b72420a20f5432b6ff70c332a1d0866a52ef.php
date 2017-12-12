<?php $__env->startSection('content'); ?>
 <div class="container">
<div class="row">
<?php echo $__env->make('includes.list-group', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="col-md-9">
            <div class="panel panel-default">
            <table class="table">
              <tr>
                <td class="middle">
                  <div class="media">
                    <div class="media-left">
                      <a href="#">
                        <img class="media-object" src="<?php echo e(route('account.image', ['filename' => $event->type . '.jpg'])); ?>" alt="..." style="border-radius: 25%; height: 200px; width: 200px;">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Sporto šaka: <?php echo e($event->type); ?></h4>
                      <address>
                        <br>
                        Vieta kur vyks veiksmas: <?php echo e($event->place); ?>

                      </address>
                      <address>
                        <br>
                        Kiek dar reikia dalyvių: <?php echo e($event->number); ?>

                      </address>
                      <address>
                        <br>
                        Įvykio aprašymas: <?php echo e($event->description); ?>

                      </address>
                    </div>
                  </div>
                </td>
                <td width="100" class="middle">
                  <div>
                    <a href="<?php echo e(route('member.store', $event->id)); ?>" class="btn btn-circle btn-default btn-md" title="Dalyvauti">
                      <i class="glyphicon glyphicon-check"></i>
                    </a>
                    <a href="#" class="btn btn-circle btn-default btn-md" title="Grįžti atgal">
                      <i class="glyphicon glyphicon-arrow-left"></i>
                    </a>
                  </div>
                </td>
              </tr>
              <td>
                    <?php foreach($event->coments as $coment): ?>
                    <div class="media">
                        <div class="media-left media-top">

                              
                                <img class="media-object img-circle" src="<?php echo e(route('account.image', ['filename' => $coment->user->id . '.jpg'])); ?>" alt="..." style="width: 50px; height: 50px;">
                              
                        </div>
                        <div class="media-body">
                              <h4 class="media-heading"><?php echo e($coment->user->name); ?></h4>
                              <p class="coment-time"><?php echo e($coment->created_at); ?></p>
                              <?php echo e($coment->coment); ?>

                        </div>
                    </div>
                    <?php endforeach; ?>
                    <div id="coment-form">
                        <form class="form-horizontal" method="POST" action="<?php echo e(route('coment.store', $event->id)); ?>">
                              <?php echo e(csrf_field()); ?>

                            <div class="form-group<?php echo e($errors->has('coment') ? ' has-error' : ''); ?>">

                            <div class="col-md-6">
                                <textarea name="coment" class="form-control" value="<?php echo e(old('coment')); ?>" placeholder="Tavo komentaras" style="margin-top: 30px"></textarea>

                                <?php if($errors->has('coment')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('coment')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                     Komentuoti
                                </button>
                            
                            </div>
                        </div>
                        </form>
                          
                    </div>
                  
              </td>
            </table>            
          </div>
     </div>
     
 </div>
     
 </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>