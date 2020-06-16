<?php if( class_exists('ACF') ): ?>
  <header class="header__master" role="banner" aria-label="Header">
    <div class="w-full mx-auto">
      <?php switch( get_field('header_component', 'options') ):
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
        <?php case ('header-d'): ?>
          <?php echo $__env->make('partials.headers.header-d', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php break; ?>
          <!-- Display Nothing -->
        <?php break; ?>
      <?php endswitch; ?>
    </div>
  </header>
<?php endif; ?>
