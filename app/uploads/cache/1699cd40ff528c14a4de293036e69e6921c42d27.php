

<?php if( class_exists('ACF') ): ?>
  <?php
    // Define fields
    $testimonials_wdt = get_field('testimonial_width');
    $testimonials_mbl = get_field('testimonial_background_image')['sizes']['w960x562'] ?: App\asset_path('images/placeholders/920x562.png');
    $testimonials_dsk = get_field('testimonial_background_image')['sizes']['w1920x562'] ?: App\asset_path('images/placeholders/1920x562.png');
    $testimonials_cnt = get_field('testimonial_content');
    $testimonials_spc = $testimonials_wdt !== 'full' ? 'md:px-10' : 'md:px-0';
  ?>
  <section id="<?php echo e($block['keywords'][0]); ?>" class="<?php echo e($testimonials_wdt === 'full' ? 'w-full' : 'w-full max-w-10xl mx-auto'); ?> py-8 md:py-24 <?php echo e($testimonials_spc); ?> text-white bg-primary-1 bg-center bg-cover bg-no-repeat brm-testimonials" data-mobile="<?php echo e($testimonials_mbl); ?>" data-desktop="<?php echo e($testimonials_dsk); ?>" style="background-image:url(<?php echo e($testimonials_dsk); ?>)" role="region" aria-label="Testimonials">
    <div class="w-full max-w-10xl mx-auto px-buffer">
      <?php if( $testimonials_cnt ): ?>
        <?php echo apply_filters('the_content', $testimonials_cnt); ?>

      <?php endif; ?>
      <?php echo do_shortcode('[testimonials]'); ?>

    </div>
  </section>
<?php endif; ?>
