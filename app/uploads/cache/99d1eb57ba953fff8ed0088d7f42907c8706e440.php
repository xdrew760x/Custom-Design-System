<?php

$header_cta = get_field('header_cta', 'options');

$header_booking = get_field('book_now_url', 'options');

?>

<div class="header-a">
  <div class="container">
    <?php if($phone || $header_booking || $header_cta): ?>
    <div class="header__top md:flex md:flex-row md:justify-end md:-mb-5">
      <?php if( $phone ): ?>
      <a class="hidden md:inline-block text-sm" href="tel:<?php echo e(preg_replace('/[^0-9]/', '', $phone)); ?>"><?php echo e($phone); ?></a>
      <?php endif; ?>

      <?php if($header_cta): ?>
      <h6 class="mobile-none"><?php echo $header_cta; ?></h6>
      <?php endif; ?>

      <?php if($header_booking): ?>
      <a class="button button--secondary mobile-none" href="<?php echo $header_booking; ?>">Book Now</a>
      <?php endif; ?>

    </div>
    <?php endif; ?>

    <div class="flex flex-row flex-wrap items-center md:items-center justify-center md:justify-between">

      <button class="w-hamburger h-hamburger ml-0 mr-auto md:hidden nav-toggle js-hamburger" aria-labelledby="toggle-navigation">
        <span id="toggle-navigation" hidden>Toggle Navigation</span>
        <span class="block relative w-full h-hamburger"></span>
      </button>

      <a class="header__branding w-full max-w-brand md:w-auto md:max-w-initial md:mx-0" href="<?php echo e(home_url('/')); ?>">
        <?php if( $branding ): ?>
        <img src="<?php echo e($branding); ?>" alt="<?php echo e(get_bloginfo('name', 'display')); ?>" />
        <?php else: ?>

        <img src="/app/themes/sage/resources/assets/images/bigrigxpress.svg" alt="<?php echo e(get_bloginfo('name', 'display')); ?>" />

        <?php endif; ?>
      </a>

      <?php if( $phone ): ?>
      <a class="ml-auto mr-0" href="tel:<?php echo e(preg_replace('/[^0-9]/', '', $phone)); ?>" aria-labelledby="call">
        <span id="call" hidden>Call Us: <?php echo e($phone); ?></span>
        <img src="/app/themes/sage/resources/assets/images/telephone.svg" alt="Contact us button" class="desktop-none">
      </a>
      <?php endif; ?>

      <nav>
        <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'primary-nav-a w-full md:w-auto nav', 'container' => '']); ?>

        <?php endif; ?>
      </nav>

    </div>
  </div>
</div>
