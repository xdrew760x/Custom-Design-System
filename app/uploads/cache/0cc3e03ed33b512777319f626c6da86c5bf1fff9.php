

  <?php
  $portal_blurb = get_field('portal_blurb');
  $portal_hover = get_field('hover_excerpt');
  $portal_width = get_field('portal_width');
  $carousel_control = get_field('carousel_control');

  ?>
  <?php if(is_admin()): ?>
  <script type="text/javascript" src="/app/themes/sage/resources/assets/scripts/slick.min.js"></script>
  <?php endif; ?>

  <?php if($carousel_control): ?>
  <script type="text/javascript">
  jQuery(document).ready( function($){
    // Handle portals & featured listings
    if (window.matchMedia('(max-width: 1023px)').matches) {
      // Portals Becomes Slider on mobile
      if ($('.js-portals').length) {
        $('.js-portals').slick({
          accessibility: true,
          adaptiveHeight: true,
          autoplay: true,
          autoplaySpeed: 5000,
          arrows: false,
          dots: false,
          fade: false,
          pauseOnFocus: false,
          pauseOnHover: false,
          speed: 1000,
          slidesToShow: 2,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
              },
            },
          ],
        })
      }
    }
  });
  </script>
  <?php endif; ?>

  <?php if( have_rows('portals') ): ?>
  <section id="<?php echo e($block['keywords'][0]); ?>" class="section section--portals" role="region" aria-label="Portals" style="background-color:<?= get_field('background_color_portal'); ?>">
    <div class="container">
      <?php if($portal_blurb): ?>
      <div class="content--blurb mb-45">
        <?php echo $portal_blurb; ?>

      </div>
      <?php endif; ?>
      <div class="brm-portals js-portals">
        <?php while( have_rows('portals') ): ?> <?php the_row() ?>
        <?php
        // Define fields
        $image = get_sub_field('portal_image')['sizes']['w465x428'] ?: App\asset_path('images/placeholders/460x328.jpg');
        $title = get_sub_field('portal_title');
        $excerpt = get_sub_field('portal_excerpt');
        $portal_link = get_sub_field('portal_link');
        ?>
        <div class="portal text-center md:<?php echo e($portal_width); ?>">

          <?php switch( $portal_hover ):
          case ('design_1'): ?>
          <a href="<?php echo $portal_link; ?>">
            <img src="<?php echo e($image); ?>" alt="<?php echo e($title); ?>" />
          </a>
          <?php if( $title ): ?>
          <a href="<?php echo $portal_link; ?>">
            <h3><?php echo e($title); ?></h3>
          </a>
          <?php endif; ?>
          <?php echo apply_filters('the_content', $excerpt); ?>

          <?php break; ?>
          <?php case ('design_2'): ?>
          <div class="portal-hover--container">
            <a href="<?php echo $portal_link; ?>">
              <img class="mb-5" src="<?php echo e($image); ?>" alt="<?php echo e($title); ?>" />
            </a>
            <div class="hover--state">
              <?php echo apply_filters('the_content', $excerpt); ?>

              <a class="button button--white" href="<?php echo $portal_link; ?>">Learn More</a>
            </div>
          </div>
          <?php if( $title ): ?>
          <p><a href="<?php echo $portal_link; ?>" class='text-primary-2'>
            <?php echo e($title); ?>

          </a></p>
          <?php endif; ?>

          <?php break; ?>
          <?php case ('design_3'): ?>

          <div class="portal-hover--container design_3">
            <a href="<?php echo $portal_link; ?>">
              <img class="mb-5" src="<?php echo e($image); ?>" alt="<?php echo e($title); ?>" />
            </a>
            <div class="hover--state">
              <?php if( $title ): ?>
              <a href="<?php echo $portal_link; ?>" class='portal__a_c'>
                <?php echo e($title); ?>

              </a>
              <?php endif; ?>

              <div class="hover__content"><a href="<?php echo $portal_link; ?>"><?php echo apply_filters('the_content', $excerpt); ?></a>
                <a href="<?php echo $portal_link; ?>" class="button--arrow">Learn More <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <?php break; ?>
          <?php case ('design_4'): ?>

          <div class="portal-hover--container design_3 design-4 bg-cover bg-center"
          style="
          background-image: url(<?php echo e($image); ?>);
          ">
          <a href="<?php echo $portal_link; ?>" class="desktop-none">
            <img class="mb-5" src="<?php echo e($image); ?>" alt="<?php echo e($title); ?>" />
          </a>
          <div class="hover--state">

            <?php if( $title ): ?>
            <a href="<?php echo $portal_link; ?>" class='portal__a_c'>
              <?php echo e($title); ?>

            </a>
            <?php endif; ?>
          </div>
          <div class="hover__content"><a href="<?php echo $portal_link; ?>"><?php echo apply_filters('the_content', $excerpt); ?></a>
            <a href="<?php echo $portal_link; ?>" class="button--arrow mt-15">Learn More</a>
          </div>
        </div>
        <?php break; ?>
        <?php default: ?>
        <?php endswitch; ?>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif; ?>
