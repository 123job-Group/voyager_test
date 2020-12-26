<ul>
  abc
  <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
      <a class="text-center" href="<?php echo e($menu_item->url); ?>"><?php echo e($menu_item->title); ?>

      </a>
      <?php
        $submenu = $menu_item->children;
      ?>

      <?php if(isset($submenu)): ?>
        <ul class="menu">
          <?php $__currentLoopData = $submenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="<?php echo e($item->url); ?>"><?php echo e($item->title); ?> </a></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      <?php endif; ?>
    </li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><?php /**PATH /home/quangha/Documents/Work/Code/Laravel_test/Voyager/resources/views/my_menu.blade.php ENDPATH**/ ?>