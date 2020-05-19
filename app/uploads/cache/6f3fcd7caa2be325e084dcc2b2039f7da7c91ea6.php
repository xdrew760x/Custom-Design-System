<!---
Header B
----->

<?php

$header_cta = get_field('header_cta', 'options')

?>

<div class="header-b">
  <div class="container">

    <div class="header__top md:flex md:flex-row md:items-end md:justify-end md:-mb-5">
      <?php if( $phone ): ?>
      <a class="hidden md:inline-block text-sm" href="tel:<?php echo e(preg_replace('/[^0-9]/', '', $phone)); ?>"><?php echo e($phone); ?></a>
      <?php endif; ?>

      <?php if($header_cta): ?>
      <h6 class="mobile-none"><?php echo $header_cta; ?></h6>
      <?php endif; ?>

      <a class="button button--primary ml-30 mobile-none" href="#">Place Order</a>
    </div>

    <div class="header__bottom">

      <nav class="mobile-open">
        <button class="w-hamburger h-hamburger ml-0 mr-auto md:hidden nav-toggle js-hamburger" aria-labelledby="toggle-navigation">
          <span id="toggle-navigation" hidden>Toggle Navigation</span>
          <span class="block relative w-full h-hamburger"></span>
        </button>

        <?php if(has_nav_menu('primary_type_b_left')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_type_b_left', 'menu_class' => 'nav nav--left', 'container' => '']); ?>

        <?php endif; ?>

        <a class="header__branding" href="<?php echo e(home_url('/')); ?>">
          <?php if( $branding ): ?>
          <img src="<?php echo e($branding); ?>" alt="<?php echo e(get_bloginfo('name', 'display')); ?>" />
          <?php else: ?>
          <img src="/app/themes/sage/resources/assets/images/bigrigxpress.svg" alt="<?php echo e(get_bloginfo('name', 'display')); ?>" />
          <?php endif; ?>
        </a>

        <?php if(has_nav_menu('primary_type_b_right')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_type_b_right', 'menu_class' => 'nav nav--right', 'container' => '']); ?>

        <?php endif; ?>

        <?php if( $phone ): ?>
        <a class="mobile--tele ml-auto desktop-none" href="tel:<?php echo e(preg_replace('/[^0-9]/', '', $phone)); ?>" aria-labelledby="call">
          <img src="/app/themes/sage/resources/assets/images/telephone.svg" alt="Contact us button" > <span class="hidden ml-15"><?php echo e($phone); ?></span>
        </a>
        <?php endif; ?>

        <a class="button button--primary ml-30 hidden" href="#">Place Order</a>

      </nav>
    </div>
  </div>

</div>
