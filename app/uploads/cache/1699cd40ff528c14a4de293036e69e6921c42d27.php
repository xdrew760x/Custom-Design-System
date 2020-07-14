

  <?php if( class_exists('ACF') ): ?>
  <?php
  // Define fields
  $testimonial_type = get_field('testimonial_type');
  $testimonials_wdt = get_field('testimonial_width');
  $testimonials_mbl = get_field('testimonial_background_image')['sizes']['w960x562'];
  $testimonials_dsk = get_field('testimonial_background_image')['sizes']['w1920x562'];
  $text_state = !empty(get_field('testimonial_background_image')) ? 'text-white' : null;
  $testimonials_cnt = get_field('testimonial_content');
  $testimonials_spc = $testimonials_wdt !== 'full' ? 'md:px-10' : 'md:px-0';
  ?>
  <?php if(is_admin()): ?>
  <script type="text/javascript" src="/app/themes/sage/resources/assets/scripts/slick.min.js"></script>
  <?php endif; ?>
  <script type="text/javascript">
  // Handle testimonials
  jQuery(document).ready( function($){


    if ($('.js-testimonials').length) {
      $('.js-testimonials').slick({
        accessibility: true,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: true,
        nextArrow: '<div class="next"><img src="/app/themes/sage/resources/assets/images/slick-right.svg" alt="select Next Testimonial"></div>',
        prevArrow: '<div class="prev"><img src="/app/themes/sage/resources/assets/images/slick-left.svg" alt="select Previous Testimonial"></div>',
        dots: false,
        fade: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
      })
    }


  });

  </script>
  <section id="<?php echo e($block['keywords'][0]); ?>" class="testimonial--<?php echo e($testimonial_type); ?> bg-center bg-cover bg-no-repeat <?php echo $text_state; ?>" data-mobile="<?php echo e($testimonials_mbl); ?>" data-desktop="<?php echo e($testimonials_dsk); ?>" style="background-image:url(<?php echo e($testimonials_dsk); ?>)" role="region" aria-label="Testimonials">

    <?php switch( get_field('testimonial_type') ):
    case ('type-a'): ?>
    <?php echo $__env->make('partials.testimonials.testimonial-a', [$options], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php break; ?>
    <?php case ('type-b'): ?>
    <?php echo $__env->make('partials.testimonials.testimonial-b', [$options], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php break; ?>
    <?php default: ?>
    <?php break; ?>
    <?php endswitch; ?>

  </section>
  <?php endif; ?>
