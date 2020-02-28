<?php

$content_width = get_field('content_carousel_width');

?>

<?php if(is_admin()): ?>
<script type="text/javascript" src="/app/themes/sage/resources/assets/scripts/slick.min.js"></script>

<script type="text/javascript">


//// Carousel Hero
jQuery(document).ready( function($){
    $('.js-carousel-hero').slick({
    accessibility: true,
    adaptiveHeight: false,
    autoplay: true,
    autoplaySpeed: 150000,
    fade: true,
    pauseOnFocus: false,
    pauseOnHover: false,
    speed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
    nextArrow: '<div class="next"><i class="fas fa-chevron-right"></i></div>',
    prevArrow: '<div class="prev"><i class="fas fa-chevron-left"></i></div>',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
        },
      },
    ],
  });
});


</script>

<?php endif; ?>

<?php if( have_rows('hero_carousel') ): ?>
<section class="section-brm--hero js-carousel-hero">
  <?php while( have_rows('hero_carousel') ): ?> <?php the_row() ?>
  <?php
  if ( get_sub_field('hero_carousel_image') ) {
    $carousel_mobile = get_sub_field('hero_carousel_image')['sizes']['w960x800'];
    $carousel_desktop = get_sub_field('hero_carousel_image')['sizes']['w1920x800'];

    $carousel_content = get_sub_field('slide_content');
  }
  ?>

  <div class="hero__carousel__image h-hero md:h-hero_mobile bg-center bg-cover bg-no-repeat js-background" style="background-image:url(<?php echo e($carousel_desktop); ?>)" data-mobile="<?php echo e($carousel_mobile); ?>" data-desktop="<?php echo e($carousel_desktop); ?>">
    <div class="container">
      <div class="<?php echo e($content_width === 'w-full' ? 'w-full' : 'w-1/2'); ?>">
        <?php echo $carousel_content; ?>

      </div>
    </div>
  </div>
  <?php endwhile; ?>
</section>
<?php endif; ?>
