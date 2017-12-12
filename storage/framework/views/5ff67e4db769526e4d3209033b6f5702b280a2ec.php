<?php $__env->startSection('content'); ?>
<?php echo $__env->make('includes.message-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="container">

    <div class="row">
    <?php echo $__env->make('includes.list-group', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Įvykio kūrimas</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="<?php echo e(route('event.create')); ?>">
                       <?php echo e(csrf_field()); ?>

                        <div class="form-group<?php echo e($errors->has('place') ? ' has-error' : ''); ?>">
                            <label for="place" class="col-md-4 control-label">Įvykio vieta</label>

                            <div class="col-md-6">
                                <input id="place" type="text" class="form-control" name="place" value="<?php echo e(old('place')); ?>">

                                <?php if($errors->has('place')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('place')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('start') ? ' has-error' : ''); ?>">
                            <label for="start" class="col-md-4 control-label">Įvykio pradžia</label>

                            <div class="col-md-6">
                                <input id="start" type="datetime-local" class="form-control" name="start" value="<?php echo e(old('start')); ?>">

                                <?php if($errors->has('start')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('start')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('finish') ? ' has-error' : ''); ?>">
                            <label for="finish" class="col-md-4 control-label">Įvykio pabaiga</label>

                            <div class="col-md-6">
                                <input id="finish" type="datetime-local" class="form-control" name="finish" value="<?php echo e(old('finish')); ?>">

                                <?php if($errors->has('finish')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('finish')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('type') ? ' has-error' : ''); ?>">
                            <label for="type" class="col-md-4 control-label">Sporto rūšis</label>

                            <div class="col-md-6">
                                <select name="type" class="form-control">
                                        <option value="Krepšinis">Basketball</option>
                                        <option value="Tinklinis">Volleyball</option>
                                        <option value="Lauko tenisas">Tennis</option>
                                        <option value="Futbolas">Football</option>
                                        <option value="Stalo tenisas">Table tennis</option>
                                        <option value="Skersinis/Lygiagratės">Workout</option>s
                                        <option value="Kitas sportas">Other</option>
                                </select>

                                <?php if($errors->has('type')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('type')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                         <div class="form-group<?php echo e($errors->has('number') ? ' has-error' : ''); ?>">
                            <label for="number" class="col-md-4 control-label">Reikalingas dalyvių skaičius</label>

                            <div class="col-md-6">
                                <input id="number" type="number" class="form-control" name="number" value="<?php echo e(old('number')); ?>">

                                <?php if($errors->has('number')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('number')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                         <div class="form-group<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
                            <label for="description" class="col-md-4 control-label">Įvykio aprašymas</label>

                            <div class="col-md-6">
                                <textarea name="description" class="form-control" value="<?php echo e(old('description')); ?>"></textarea>

                                <?php if($errors->has('description')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('description')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                     Sukurti įvykį
                                </button>
                            
                            </div>
                        </div>
                    <input type="hidden" value="<?php echo e(Session::token()); ?>" name="_token">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>s
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>