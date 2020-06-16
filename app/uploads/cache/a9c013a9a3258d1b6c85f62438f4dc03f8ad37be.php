<?php if( get_field('hero_mp4_video_file') && get_field('hero_video_webm_file') ): ?>
<section class="section-brm--hero hero--video has-video relative">
  <video class="hero__video" preload="auto" autoplay loop muted playsinline>
    <source src="<?php echo get_field('hero_mp4_video_file'); ?>" type="video/mp4"/>
    <source src="<?php echo e(get_field('hero_video_webm_file')); ?>" type="video/webm"/>
  </video>

  <?php
  $hero_message = get_field('hero_content');
  $content_width = get_field('content_width');
  $content_position = get_field('content_position');
  $max_height = get_field('hero_height');

  //Animation
  $hero_animation = get_field('hero_animation');
  ?>

  <div class="hero_content text-white mx-auto block <?php echo e($content_width === 'w-full' ? 'w-full' : ' w-full md:w-1/2'); ?> <?php echo e($content_position === 'ml-0' ? 'ml-0' : 'full'); ?> <?php echo e($content_position === 'mr-0' ? 'mr-0' : 'full'); ?>" style="max-height: <?php echo $max_height; ?>px;">
    <div class="hero_content--container container <?php if(!is_admin()): ?><?php echo $hero_animation; ?><?php endif; ?>">
      <?php echo $options['content']; ?>

    </div>
  </div>
</section>
<?php endif; ?>
