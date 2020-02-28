<?php if( class_exists('ACF') ): ?>
  <footer class="py-10" role="contentinfo" aria-label="Footer">
    <div class="w-full max-w-10xl mx-auto px-buffer">
      <?php switch( get_field('footer_component', 'option') ):
        case ('footer-a'): ?>
          <?php echo $__env->make('partials.footers.footer-a', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php break; ?>
        <?php case ('footer-b'): ?>
          <?php echo $__env->make('partials.footers.footer-b', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php break; ?>
        <?php case ('footer-c'): ?>
          <?php echo $__env->make('partials.footers.footer-c', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php break; ?>
        <?php default: ?>
          Nothing Yet
        <?php break; ?>
      <?php endswitch; ?>
    </div>
  </footer>
<?php endif; ?>
