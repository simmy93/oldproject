        <div class="col-md-3">
          <div class="list-group">
          	<a href="<?php echo e(url('/home')); ?>" class="list-group-item">Įvykio kūrimas</a>
            <a href="<?php echo e(route('events.all')); ?>" class="list-group-item">Visi įvykiai <span class="badge">10</span></a>
            <a href="<?php echo e(route('events.my')); ?>" class="list-group-item">Mano sukurti įvykiai<span class="badge">4</span></a>
            <a href="<?php echo e(route('events.joined')); ?>" class="list-group-item">Įvykiai, kuriuose dalyvauju<span class="badge">3</span></a>
            <?php if(Auth::user()->hasAnyRole('Admin')): ?>
            <a href="<?php echo e(route('users.all')); ?>" class="list-group-item">Visi vartotojai<span class="badge">3</span></a>
            <?php endif; ?>
            <a href="" class="list-group-item">Įvykio paieška</a>
          </div>
        </div><!-- /.col-md-3 -->
