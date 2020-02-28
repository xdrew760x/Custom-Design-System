<?php if( $posts ): ?>
  <div class="brm-testimonials js-testimonials">
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <blockquote class="mb-10 brm-testimonial">
        <?php echo apply_filters('the_content', $testimonial->post_content); ?>

        <footer>
          <cite class="text-sm font-trade-gothic-lt-bold not-italic">&#8211; <?php echo e($testimonial->post_title); ?></cite>
        </footer>
      </blockquote>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
<?php endif; ?>
