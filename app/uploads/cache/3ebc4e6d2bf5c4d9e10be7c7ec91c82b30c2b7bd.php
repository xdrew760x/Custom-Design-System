<?php
  // Define background images
  $bg_mobile = get_sub_field('section_builder_background')['sizes']['w960x800'];
  $bg_desktop = get_sub_field('section_builder_background')['sizes']['w1920x800'];

  // Background State
  $background_state = !empty(get_sub_field('section_builder_background')) ? 'js-background text-white' : null;

  // Background Color State
  $background_color_state = get_sub_field('section_builder_background_color');

  // Text State
  $text_state = get_sub_field('section_builder_text_center') === 'yes' ? 'text-center' : null;

  // Action State
  $action_state = get_sub_field('section_builder_action') === 'yes' ? 'has-action' : null;

  // Content
  $content = get_sub_field('section_builder_content');

  // Animation
  $animate = get_sub_field('animate_content');

  // Section Padding
  $pad_y = get_sub_field('section_padding_y');
  $pad_x = get_sub_field('section_padding_x');

  $i = 1;
?>
<section class="section section--<?php echo e($i++); ?> section--<?php echo e($section_state); ?> <?php echo e($background_state); ?> <?php echo e($background_color_state); ?> bg-center bg-cover bg-no-repeat <?php echo e($action_state); ?>"
style="
background-image:url(<?php echo e($bg_desktop); ?>);
padding: <?php echo $pad_y; ?>px <?php echo $pad_x; ?>px;
"
data-mobile="<?php echo e($bg_mobile); ?>"
data-desktop="<?php echo e($bg_desktop); ?>">
  <?php if( $content ): ?>
    <div class="container <?php echo e($text_state); ?> <?php if(!is_admin()): ?><?php echo $animate; ?><?php endif; ?>">
      <?php echo $content; ?>

    </div>
  <?php endif; ?>
</section>
