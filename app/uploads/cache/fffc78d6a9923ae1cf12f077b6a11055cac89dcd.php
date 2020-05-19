

<?php if( class_exists('ACF') ): ?>
  <?php
    // Define fields
    $card_mbl = get_field('card_image')['sizes']['720x594'] ?: App\asset_path('images/placeholders/720x594.png');
    $card_dsk = get_field('card_image')['sizes']['720x594'] ?: App\asset_path('images/placeholders/720x594.png');
    $card_cnt = get_field('card_content') ?: 'Your Card Content';
    $card_ord = get_field('card_order') === 'default' ? 'flex-col md:flex-row' : 'flex-col-reverse md:flex-row-reverse'
  ?>
  <div class="flex <?php echo e($card_ord); ?> md:flex-no-wrap md:items-center md:justify-between w-full brm-card">
    <div class="w-full md:w-1/2 md:p-8 bg-white card-content"><?php echo $card_cnt; ?></div>
    <div class="w-full md:w-1/2 py-32 mt-8 md:mt-0 md:py-64 bg-center bg-no-repeat bg-cover card-image js-card" data-mobile="<?php echo e($card_mbl); ?>" data-desktop="<?php echo e($card_dsk); ?>" style="background-image:url(<?php echo e($card_dsk); ?>)"></div>
  </div>
<?php endif; ?>
