<footer class="py-10 bg-primary-3 text-white" role="contentinfo" aria-label="Footer">
  <div class="w-full max-w-10xl mx-auto px-buffer">

    <div class="footer-a">

      <div class="footer__column footer__top md:flex md:flex-row md:items-center md:justify-between">

        <a href="<?php echo e(home_url('/')); ?>" class="footer_branding">
          <?php if( $branding ): ?>
          <img src="<?php echo e($branding); ?>" alt="<?php echo e(get_bloginfo('name', 'display')); ?>" />
          <?php else: ?>
          <img src="/app/themes/sage/resources/assets/images/bigrigxpress.svg" alt="<?php echo e(get_bloginfo('name', 'display')); ?>" />
          <?php endif; ?>
        </a>

        <nav>
          <?php if(has_nav_menu('primary_navigation')): ?>
          <?php echo wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav footer_nav', 'container' => '']); ?>

          <?php endif; ?>
        </nav>

      </div>

      <div class="footer__column footer__bottom md:flex md:flex-row md:items-center md:justify-between mt-5 pt-5 border-t border-solid border-primary-5">

        <?php if( App::siteSocialLinks() ): ?>
        <div class="social_icons w-full md:w-1/3">
          <?php $__currentLoopData = App::siteSocialLinks(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a class="social-icon inline-flex items-center justify-center rounded" href="<?php echo e($link['url']); ?>" aria-labelledby="<?php echo e(strtolower($link['title'])); ?>">
            <span id="<?php echo e(strtolower($link['title'])); ?>" hidden><?php echo e($link['title']); ?></span>
            <?php echo $link['svg']; ?>

          </a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>

        <div class="w-full md:w-2/3 mt-5 md:mt-0">
          <p class="copyright text-xs text-white">
            <span class="md:inline-block">&copy; <?php echo e(date('Y')); ?> <?php echo e(App::siteName()); ?></span>
            <a href="/ada-compliance/"> | ADA Compliance</a> &#124;
            <a href="/privacy-policy/">Privacy Policy</a>
            <span>| WEBSITE BY <a href="https://www.bigrigmedia.com/outdoor-hospitality-website-development/">BIG RIG MEDIA LLC ®</a></span>
          </p>
        </div>

      </div>
    </div>
  </div>
</footer>
