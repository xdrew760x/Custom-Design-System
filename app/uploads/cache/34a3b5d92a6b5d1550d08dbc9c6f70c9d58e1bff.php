

  <?php if( class_exists('ACF') ): ?>
  <?php

  $i = 1;

  ?>

  <?php if(have_rows('section_builder')): ?>
  <?php while(have_rows('section_builder')): ?> <?php the_row() ?>
  <?php
  // Section Type State
  // Defines if it's a normal full width section or split section
  $section_state = get_sub_field('section_type');
  ?>

  <?php switch( get_sub_field('section_type') ):
  case ('full'): ?>
  <?php echo $__env->make('partials.sections.full', [$options], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php break; ?>
  <?php case ('split'): ?>
  <?php echo $__env->make('partials.sections.split', [$options], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php break; ?>
  <?php case ('contained'): ?>
  <?php echo $__env->make('partials.sections.contained', [$options], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php break; ?>
  <?php default: ?>
  <?php break; ?>
  <?php endswitch; ?>

  <?php $i++ ?>
  <?php endwhile; ?>
  <?php endif; ?>
  <?php endif; ?>
