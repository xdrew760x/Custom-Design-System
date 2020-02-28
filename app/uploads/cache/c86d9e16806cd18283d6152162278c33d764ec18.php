<?php if( class_exists('ACF') ): ?>
  <header class="py-3" role="banner" aria-label="Header">
    <div class="w-full max-w-10xl mx-auto px-buffer">
      <?php switch( get_field('header_component', 'option') ):
        case ('header-a'): ?>
          <?php echo $__env->make('partials.headers.header-a', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php break; ?>
        <?php case ('header-b'): ?>
          <?php echo $__env->make('partials.headers.header-b', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php break; ?>
        <?php case ('header-c'): ?>
          <?php echo $__env->make('partials.headers.header-c', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php break; ?>
        <?php default: ?>
          Nothing Yet
        <?php break; ?>
      <?php endswitch; ?>
    </div>
  </header>
<?php endif; ?>
