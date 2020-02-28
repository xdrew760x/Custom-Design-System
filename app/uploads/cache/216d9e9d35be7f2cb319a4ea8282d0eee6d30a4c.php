<article <?php echo e(post_class('md:flex md:flex-row md:flex-no-wrap mb-10 -mx-buffer')); ?>>
  <div class="md:w-1/3 px-buffer">
    <?php if( App::image($post->ID, 'w457x288') ): ?>
      <a class="block mb-5" href="<?php echo e(get_permalink($post->ID)); ?>">
        <img src="<?php echo e(App::image($post->ID, 'w457x288')); ?>" alt="<?php echo e($post->post_title); ?>" />
      </a>
    <?php endif; ?>
  </div>
  <div class="md:w-3/4 px-buffer">
    <header>
      <h3 class="mb-0">
        <a href="<?php echo e(get_permalink()); ?>"><?php echo get_the_title(); ?></a>
      </h3>
      <?php echo $__env->make('partials/entry-meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </header>
    <div>
      <?php the_excerpt() ?>
    </div>
  </div>
</article>
