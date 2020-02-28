<?php
  // Define background images
  $bg_mobile = get_sub_field('section_builder_background')['sizes']['w960x800'];
  $bg_desktop = get_sub_field('section_builder_background')['sizes']['w960x800'];

  // Background State
  $background_state = !empty(get_sub_field('section_builder_background')) ? 'js-background' : null;

  // Order State
  $order_state = get_sub_field('section_builder_split_flip');

  // Background Color State
  $background_color_state = get_sub_field('section_builder_background_color');

  // Content
  $content = get_sub_field('section_builder_content');
?>
<section class="section section--<?php echo e($i); ?> section--<?php echo e($section_state); ?> <?php echo e($order_state); ?> <?php echo e($background_color_state); ?>">
  <div class="container flex justify-between">

  <div class="section__bg <?php echo e($background_state); ?> w-full md:w-1/2 bg-cover bg-center" style="background-image: url(<?php echo e($bg_mobile); ?>)" data-mobile="<?php echo e($bg_mobile); ?>" data-desktop="<?php echo e($bg_desktop); ?>"></div>
  <?php if( $content ): ?>
    <div class="section__content w-full md:w-1/2 flex items-center justify-center">
      <div class="section__content__inner">
        <?php echo $content; ?>

      </div>
    </div>
  <?php endif; ?>

</div>
</section>
