<?php

$content_width = get_field('content_width');
$content_position = get_field('content_position');
$max_height = get_field('hero_height');
$hero_graphic = get_field('hero_graphic');

//Animation
$hero_animation = get_field('hero_animation');
?>


<div class="section-brm--hero flex flex-col flex-wrap justify-start md:justify-center bg-no-repeat js-background" style="background-image:url(<?php echo e($options['desktop']); ?>); max-height: <?php echo $max_height; ?>px;" data-mobile="<?php echo e($options['mobile']); ?>" data-desktop="<?php echo e($options['desktop']); ?>">
  <div class="hero_content text-white mx-auto block <?php echo e($content_width === 'w-full' ? 'w-full' : ' w-full md:w-1/2'); ?> <?php echo e($content_position === 'ml-0' ? 'ml-0' : 'full'); ?> <?php echo e($content_position === 'mr-0' ? 'mr-0' : 'full'); ?>" style="background-image: url(<?php echo $hero_graphic; ?>); max-height: <?php echo $max_height; ?>px;">
    <div class="hero_content--container container <?php if(!is_admin()): ?><?php echo $hero_animation; ?><?php endif; ?>">
      <?php echo $options['content']; ?>

    </div>
  </div>
</div>
