

<?php if( class_exists('ACF') ): ?>
  <?php
    // Define fields
    $cta_wdt = get_field('call_to_action_width');
    $cta_spc = $cta_wdt !== 'full' ? 'md:px-10' : 'md:px-0';
  ?>
  <section id="<?php echo e($block['keywords'][0]); ?>" class="<?php echo e($cta_wdt === 'full' ? 'w-full' : 'w-full max-w-10xl mx-auto'); ?> py-8 md:py-20 <?php echo e($cta_spc); ?> brm-cta" style="background-color:<?php echo e(get_field('call_to_action_background_color')); ?>" role="region" aria-label="Call to Action">
    <div class="w-full max-w-10xl mx-auto px-buffer">
      <?php echo get_field('call_to_action_content'); ?>

    </div>
  </section>
<?php endif; ?>
