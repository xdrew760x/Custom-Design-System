<?php $__env->startSection('content'); ?>
<div class="container">
  <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <p>Accessibility Statement for <a href="<?php echo e(get_bloginfo('url', 'display')); ?>"><?php echo e(preg_replace('/^https?:\/\//', '', get_bloginfo('url', 'display'))); ?></a></p>
  <p><strong><?php echo e(get_bloginfo('name', 'display')); ?></strong> is committed to ensuring digital accessibility for people with disabilities. We are continually improving the user experience for everyone and applying the relevant accessibility standards.</p>
  <p><strong>Conformance status</strong><br>
  The Web Content Accessibility Guidelines (WCAG) defines guidelines for designers and developers to improve accessibility for people with disabilities. It defines three levels of conformance: Level A, Level AA, and Level AAA. <a href="<?php echo e(get_bloginfo('url', 'display')); ?>"><?php echo e(preg_replace('/^https?:\/\//', '', get_bloginfo('url', 'display'))); ?></a> is partially conformant with WCAG 2.1 level AA. Partially conformant means that some parts of the content do not fully conform to the accessibility standard. While WCAG is a set of guidelines rather than enforceable legislation, <strong><?php echo e(get_bloginfo('name', 'display')); ?></strong> uses every effort apply such recommendations to its web site to ensure equal access to all online users.</p>
  <p><strong>Feedback</strong><br>
  We welcome your feedback on the accessibility of <a href="<?php echo e(get_bloginfo('url', 'display')); ?>"><?php echo e(preg_replace('/^https?:\/\//', '', get_bloginfo('url', 'display'))); ?></a>. Please let us know if you encounter accessibility barriers on <a href="<?php echo e(get_bloginfo('url', 'display')); ?>"><?php echo e(preg_replace('/^https?:\/\//', '', get_bloginfo('url', 'display'))); ?></a>:</p>
  <?php if( $phone && $directions ): ?>
    <p>Phone: <a href="tel:<?php echo e(preg_replace('/[^0-9]/', '', $phone)); ?>"><?php echo e($phone); ?></a><br>
    Visitor address: <?php echo e($directions); ?><br>
    We try to respond to feedback within thirty business days.</p>
  <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>