

<?php if( class_exists('ACF') ): ?>
  <?php if( have_rows('portals') ): ?>
    <section id="<?php echo e($block['keywords'][0]); ?>" class="py-8 md:py-16 bg-white" role="region" aria-label="Portals">
      <div class="w-full max-w-10xl mx-auto px-buffer">
        <div class="md:flex md:flex-row md:flex-wrap -mx-buffer brm-portals js-portals">
          <?php while( have_rows('portals') ): ?> <?php the_row() ?>
            <?php
              // Define fields
              $image = get_sub_field('portal_image')['sizes']['w460x460'] ?: App\asset_path('images/placeholders/460x460.png');
              $title = get_sub_field('portal_title');
              $excerpt = get_sub_field('portal_excerpt');
            ?>
            <div class="md:w-1/2 mb-10 md:mb-0 px-buffer portal">
              <img class="mb-5" src="<?php echo e($image); ?>" alt="<?php echo e($title); ?>" />
              <?php if( $title ): ?>
                <h3><?php echo e($title); ?></h3>
              <?php endif; ?>
              <?php if( $excerpt ): ?>
                <?php echo apply_filters('the_content', $excerpt); ?>

              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>
<?php endif; ?>
