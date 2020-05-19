<?php if( $posts ): ?>
<div class="brm-testimonials js-testimonials">
  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php

  $review_source = get_field('review_source');

  ?>

  <blockquote class="mb-10 brm-testimonial text-center">
    <?php echo apply_filters('the_content', $testimonial->post_content); ?>

    <footer class="mt-30">
      <strong><cite class="text-sm">&#8211; <?php echo e($testimonial->post_title); ?></cite></strong>
      <p><?php echo e($testimonial->review_source); ?></p>
    </footer>
  </blockquote>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>
