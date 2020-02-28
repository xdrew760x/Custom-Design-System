<!doctype html>
<html <?php echo get_language_attributes(); ?>>
  <?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php
  $header_fixed = get_field('fixed_position','options');
  ?>

  <body <?php body_class() ?> id="<?php echo $header_fixed; ?>">
    <?php if( $tag_manager ): ?>
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-<?php echo $tag_manager; ?>"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
    <?php endif; ?>
    <?php do_action('get_header') ?>
    <?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <main role="document" aria-label="Content">
      <?php if(App\display_layout()): ?>
        <section class="section--main" role="region" aria-label="Default Content">
          <div class="w-full mx-auto">
            <?php echo $__env->yieldContent('content'); ?>
          </div>
        </section>
      <?php else: ?>
        <?php echo $__env->yieldContent('content'); ?>
      <?php endif; ?>
    </main>
    <?php echo $__env->make('partials.static.call-to-action', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php do_action('get_footer') ?>
    <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php wp_footer() ?>
  </body>
</html>
