

<?php if( class_exists('ACF') ): ?>
  <?php
    // Define fields
    $hero_wdt = get_field('hero_width');
    $hero_mbl = get_field('hero_background_image')['sizes']['w960x562'] ?: App\asset_path('images/placeholders/920x562.png');
    $hero_dsk = get_field('hero_background_image')['sizes']['w1920x562'] ?: App\asset_path('images/placeholders/1920x562.png');
    $hero_cnt = get_field('hero_content') ?: 'Your Hero Content';

    // Consolidate all options to pass to partials
    $options = [
      'width'   => $hero_wdt,
      'mobile'  => $hero_mbl,
      'desktop' => $hero_dsk,
      'content' => $hero_cnt,
    ];
  ?>
  <section id="<?php echo e($block['keywords'][0]); ?>" class="<?php echo e($hero_wdt === 'full' ? 'w-full' : 'w-full max-w-10xl mx-auto'); ?> brm-hero" role="region" aria-label="Hero">
    <?php switch( get_field('hero_component') ):
      case ('hero-a'): ?>
        <?php echo $__env->make('partials.heroes.hero-a', [$options], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php break; ?>
      <?php case ('hero-b'): ?>
        <?php echo $__env->make('partials.heroes.hero-b', [$options], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php break; ?>
      <?php case ('hero-c'): ?>
        <?php echo $__env->make('partials.heroes.hero-c', [$options], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php break; ?>
      <?php default: ?>
      <?php break; ?>
    <?php endswitch; ?>
  </section>
<?php endif; ?>

